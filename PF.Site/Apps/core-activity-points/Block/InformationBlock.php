<?php
namespace Apps\Core_Activity_Points\Block;

use Phpfox;
use Phpfox_Component;
use Phpfox_Plugin;
use Phpfox_Error;

defined('PHPFOX') or exit('NO DICE!');

/**
 * Class InformationBlock
 * @package Apps\Core_Activity_Points\Block
 */
class InformationBlock extends Phpfox_Component
{
    public function process()
    {
        $sInformation = $this->getParam('information');
        $this->template()->assign([
            'sInformation' => _p($sInformation)
        ]);
    }
}