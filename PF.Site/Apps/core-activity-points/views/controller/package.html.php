<?php
defined('PHPFOX') or exit('NO DICE!');
?>
<div class="core-activitypoint__packages" id="js_point_packages_selection">
    {if empty($sWarningMessage)}
        {if !empty($aPackages)}
        <div class="core-activitypoint-packages-list">
            {foreach from=$aPackages key=itemkey item=aPackage}
            <article class="packages-item js_item_click" data-id="{$aPackage.package_id}">
                <div class="item-outer {if (int)$itemkey == 0}is_selected_package{/if} js_item_detail">
                    <div class="item-media">
                        {if !empty($aPackage.image_path)}
                        <span style="background-image: url('{img server_id=$aPackage.server_id title=$aPackage.title path='activitypoint.url_image' file=$aPackage.image_path suffix='_120' return_url=true}')">
                        </span>
                        {else}
                        <span style="background-image: url('{img server_id=$aPackage.server_id title=$aPackage.title path='activitypoint.url_asset_images' file='default_package.jpg' return_url=true}')">
                        </span>
                        {/if}
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            {$aPackage.title|convert|clean}
                        </div>
                        <div class="item-info">
                            <div class="item-point">
                                {$aPackage.points} {if (int)$aPackage.points == 1}{_p var='activitypoint_point'}{else}{_p var='points'}{/if}
                            </div>
                            <span class="item-line">-</span>
                            <div class="item-cash">
                                {$aPackage.default_price.symbol}{$aPackage.default_price.price}
                            </div>
                        </div>

                    </div>
                    <div class="item-icon">
                        <label>
                            <input type="radio" class="js_radio_package_selection" name="package-selection" value="{$aPackage.package_id}" {if (int)$itemkey == 0} checked="true"{/if}>
                            <i class="ico ico-check-circle-o"></i>
                        </label>
                    </div>
                </div>
            </article>
            {/foreach}
        </div>
        <div class="core-activitypoint__packages-action">
            <button class="btn btn-default btn-sm" onclick="js_box_remove(this);">{_p var='activitypoint_cancel'}</button>
            <button id="js_show_payment_gateway" class="btn btn-primary btn-sm">
                {_p var='Purchase'}
            </button>
        </div>
        {else}
            <div class="alert alert-empty">{_p var='activitypoint_no_packages_available'}</div>
        {/if}
    {else}
        {$sWarningMessage}
    {/if}
</div>
