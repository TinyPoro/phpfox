<?php
defined('PHPFOX') or exit('NO DICE!');
$req1 = Phpfox::getLib('request')->get('req1');
$req2 = Phpfox::getLib('request')->get('req2');

$bLogout = ($req1 == 'logout') || (($req1 == 'user') && ($req2 == 'logout'));
if (!PHPFOX_IS_AJAX && !$bLogout && Phpfox::isAppActive('Core_Subscriptions'))
{
	$mRedirectId = Phpfox::getService('subscribe.purchase')->getRedirectId();
	if (is_numeric($mRedirectId) && $mRedirectId > 0)
	{
        $aPurchase = Phpfox::getService('subscribe.purchase')->getInvoice($mRedirectId, true);
        if((int)$aPurchase['recurring_period'] > 0)
        {
            Phpfox_Url::instance()->send('subscribe.renew-method', array('id' => $mRedirectId), _p('Please choose renew method for recurring subscription'));
        }
        else
        {
            Phpfox_Url::instance()->send('subscribe.register', array('id' => $mRedirectId), _p('please_complete_your_purchase'));
        }

	}

    $mRedirectId = Phpfox::getService('subscribe.purchase')->isCompleteSubscribe();
	if (is_numeric($mRedirectId) && $mRedirectId > 0)
	{
        $aPurchase = Phpfox::getService('subscribe.purchase')->getInvoice($mRedirectId, true);
        if((int)$aPurchase['recurring_period'] > 0)
        {
            Phpfox_Url::instance()->send('subscribe.renew-method', array('id' => $mRedirectId), _p('Please choose renew method for recurring subscription'));
        }
        else
        {
            Phpfox_Url::instance()->send('subscribe.register', array('id' => $mRedirectId), _p('please_complete_your_purchase'));
        }
	}
}