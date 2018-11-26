<?php
namespace Apps\Core_Events\Service;

use Phpfox;
use Phpfox_Error;
use Phpfox_Plugin;
use Phpfox_Url;

defined('PHPFOX') or exit('NO DICE!');

/**
 * Class Browse
 * @package Apps\Core_Events\Service
 */
class Browse extends \Phpfox_Service
{
    /**
     * @var null|array
     */
    private $_sCategory = null;

    /**
     * @var null|int
     */
    private $_iAttending = null;

    /**
     * @var bool|array
     */
    private $_aCallback = false;

    /**
     * @var bool
     */
    private $_bFull = false;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->_sTable = Phpfox::getT('event');
    }

    /**
     * @param string $sCategory
     *
     * @return $this
     */
    public function category($sCategory)
    {
        $this->_sCategory = $sCategory;
        return $this;
    }

    /**
     * @param int $iAttending
     *
     * @return $this
     */
    public function attending($iAttending)
    {
        $this->_iAttending = $iAttending;
        return $this;
    }

    /**
     * @param array $aCallback
     *
     * @return $this
     */
    public function callback($aCallback)
    {
        $this->_aCallback = $aCallback;
        return $this;
    }

    /**
     * @param bool $bFull
     *
     * @return $this
     */
    public function full($bFull)
    {
        $this->_bFull = $bFull;
        return $this;
    }

    /**
     * @return void
     */
    public function query()
    {
        if ($this->_iAttending !== null) {
            $this->database()->group('m.event_id');
        }
    }

    /**
     * @param array $aRows
     *
     * @return void
     */
    public function processRows(&$aRows)
    {
        $aNewRows = $aRows;

        $aRows = array();
        foreach ($aNewRows as $aListing) {

            Phpfox::getService('event')->getPermissions($aListing);
            $iDate = Phpfox::getTime('dmy', $aListing['start_time']);

            if ($iDate == Phpfox::getTime('dmy', PHPFOX_TIME)) {
                $iDate = _p('today');
            } elseif ($iDate == Phpfox::getTime('dmy', (PHPFOX_TIME + 86400))) {
                $iDate = _p('tomorrow');
            } else {
                $iDate = Phpfox::getTime('l, F j', $aListing['start_time']);
            }
            $aListing = Phpfox::getService('event')->getEventTimeForDisplay($aListing, true);
            if ($this->request()->get('view') == 'invites') {
                list($aListing['total_attending'],) = Phpfox::getService('event')->getInvites($aListing['event_id'], 1);
            }
            $aListing['url'] = Phpfox_Url::instance()->permalink('event', $aListing['event_id'], $aListing['title']);
            $aRows[$iDate][] = $aListing;
        }
    }

    /**
     * @param bool $bIsCount
     * @param bool $bNoQueryFriend
     *
     * @return void
     */
    public function getQueryJoins($bIsCount = false, $bNoQueryFriend = false)
    {
        if (Phpfox::isModule('friend') && Phpfox::getService('friend')->queryJoin($bNoQueryFriend)) {
            $this->database()->join(Phpfox::getT('friend'), 'friends',
                'friends.user_id = m.user_id AND friends.friend_user_id = ' . Phpfox::getUserId());
        }

        if ($this->_sCategory !== null) {
            $this->database()->innerJoin(Phpfox::getT('event_category_data'), 'mcd', 'mcd.event_id = m.event_id');

            if (!$bIsCount) {
                $this->database()->group('m.event_id');
            }
        }

        if ($this->_iAttending !== null) {
            $this->database()->innerJoin(Phpfox::getT('event_invite'), 'ei',
                'ei.event_id = m.event_id AND ei.rsvp_id = ' . (int)$this->_iAttending . ' AND ei.invited_user_id = ' . Phpfox::getUserId());

            if (!$bIsCount) {
                $this->database()->select('ei.rsvp_id, ');
                $this->database()->group('m.event_id');
            }
        }
    }

    /**
     * If a call is made to an unknown method attempt to connect
     * it to a specific plug-in with the same name thus allowing
     * plug-in developers the ability to extend classes.
     *
     * @param string $sMethod is the name of the method
     * @param array $aArguments is the array of arguments of being passed
     *
     * @return null
     */
    public function __call($sMethod, $aArguments)
    {
        /**
         * Check if such a plug-in exists and if it does call it.
         */
        if ($sPlugin = Phpfox_Plugin::get('event.service_browse__call')) {
            eval($sPlugin);
            return null;
        }

        /**
         * No method or plug-in found we must throw a error.
         */
        Phpfox_Error::trigger('Call to undefined method ' . __CLASS__ . '::' . $sMethod . '()', E_USER_ERROR);
    }
}