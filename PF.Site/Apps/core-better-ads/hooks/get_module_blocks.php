<?php

if (!Phpfox::isAdminPanel() && $this->_sModule != 'ad') {
    $aBlocks[$iId][] = [
        'type_id' => 0,
        'component' => 'ad.display',
        'params' => [
            'block_id' => $iId
        ]
    ];
}

if (defined('PHPFOX_IS_AD_PREVIEW') && PHPFOX_IS_AD_PREVIEW) {
    $iPreviewBlock = Phpfox_Component::__getParam('betterads_preview_block');
    if (!empty($iPreviewBlock) && $iId == $iPreviewBlock) {
        $aBlocks[$iId][] = [
            'type_id' => 0,
            'component' => 'ad.display',
            'params' => [
                'preview' => [
                    'block' => $iPreviewBlock,
                    'type_id' => Phpfox_Component::__getParam('betterads_preview_type_id'),
                    'image_temp_id' => Phpfox_Component::__getParam('betterads_preview_image'),
                    'image_tooltip_text' => Phpfox_Component::__getParam('betterads_preview_image_tooltip_text'),
                    'url_link' => Phpfox_Component::__getParam('betterads_preview_url_link'),
                    'title' => Phpfox_Component::__getParam('betterads_preview_title'),
                    'body' => Phpfox_Component::__getParam('betterads_preview_body'),
                    'ad_id' => Phpfox_Component::__getParam('betterads_preview_ad_id'),
                ]
            ]
        ];
    }

}