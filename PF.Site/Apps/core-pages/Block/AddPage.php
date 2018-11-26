<?php

namespace Apps\Core_Pages\Block;

use Phpfox;

defined('PHPFOX') or exit('NO DICE!');

class AddPage extends \Phpfox_Component
{
    public function process()
    {
        // get main category
        $iTypeId = $this->request()->get('type_id');
        $aMainCategory = Phpfox::getService('pages.type')->getById($iTypeId);

        if (!$aMainCategory) {
            return false;
        }
        $aCategories = Phpfox::getService('pages.type')->get();
        $bNoSubCategories = true;

        foreach($aCategories as $aCategory)
        {
            if(((int)$aCategory['type_id'] == (int)$iTypeId) && !empty($aCategory['categories']))
            {
                $bNoSubCategories = false;
                break;
            }
        }

        $this->template()->assign([
            'aMainCategory' => $aMainCategory,
            'iTypeId' => $iTypeId,
            'aCategories' => $aCategories,
            'bNoSubCategories' => $bNoSubCategories
        ]);

        return 'block';
    }
}
