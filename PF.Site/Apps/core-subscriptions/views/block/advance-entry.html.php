<?php
/**
 * [PHPFOX_HEADER]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: entry.html.php 1339 2009-12-19 00:37:55Z Raymond_Benc $
 */

defined('PHPFOX') or exit('NO DICE!');

?>

<li class="my-subscription-list-wapper">
    <div class="item-title fw-bold mb-2"><a href="{url link='subscribe.view'}?id={$aPurchase.purchase_id}">{$aPurchase.title_parse}</a></div>
    <div class="my-subscription-list-inner">
        <a class="item-media" href="{url link='subscribe.view'}?id={$aPurchase.purchase_id}">
            {if !empty($aPurchase.image_path)}
                {img path='subscribe.photo_url' file=$aPurchase.image_path suffix='_120'}
            {else}
                {img path='subscribe.app_url' file=$sDefaultPhoto}
            {/if}
        </a>
        <div class="item-body">
            <div class="item">
                <span class=status>{_p var='Subscription ID'}:</span>
                <span class="value">{$aPurchase.purchase_id}</span>
            </div>
            <div class="item">
                <span class=status>{_p var='Cost'}:</span>
                <span class="value">{$aPurchase.cost_parse}</span>
            </div>
            <div class="item">
                <span class=status>{_p var='Membership'}:</span>
                <span class="value">{$aPurchase.s_title}</span>
            </div>
            <div class="item">
                <span class=status>{_p var='Status'}:</span>
                <span class="value">
                    {if $aPurchase.status == 'completed'}
                        <span class="active">{_p var='sub_active'}</span>
                    {elseif $aPurchase.status == 'cancel'}
                        <span class="cancel">{_p var='Cancelled'}</span>
                    {elseif $aPurchase.status == 'pending'}
                        <span class="pending-payment">{_p var='pending_payment'}</span>
                    {elseif $aPurchase.status == 'expire'}
                        <span class="expire">{_p var='Expired'}</span>
                    {else}
                        <span class="pending-action">{_p var='pending_action'}</span>
                    {/if}
                </span>
            </div>
            <div class="item">
                <span class=status>{_p var='Activate Date'}:</span>
                <span class="value">{$aPurchase.time_purchased|convert_time}</span>
            </div>
            <div class="item">
                <span class=status>{_p var='Expiration Date'}:</span>
                <span class="value">
                    {if $aPurchase.recurring_period == 0}
                        {_p var='no_expiration_date'}
                    {else}
                        {if !empty($aPurchase.expiry_date)}
                            {$aPurchase.expiry_date|convert_time}
                        {/if}
                    {/if}
                </span>
            </div>
            {if !empty($aPurchase.is_active)}
                {if $aPurchase.status == 'pending'}
                <button class="btn btn-primary" onclick="tb_show('{_p var='select_payment_gateway' phpfox_squote=true}', $.ajaxBox('subscribe.upgrade', 'height=400&amp;width=400&amp;purchase_id={$aPurchase.purchase_id}&amp;renew_type={$aPurchase.renew_type}'));">{_p var='Pay Now'}</button>
                {elseif (int)$aPurchase.renew_type == 2 && ($aPurchase.status == 'completed') &&  !empty($aPurchase.show_renew)}
                <button class="btn btn-primary" onclick="tb_show('{_p var='select_payment_gateway' phpfox_squote=true}', $.ajaxBox('subscribe.upgrade', 'height=400&amp;width=400&amp;purchase_id={$aPurchase.purchase_id}&amp;renew_type=2'));">{_p var='Renew'}</button>
                {elseif empty($aPurchase.status)}
                <button class="btn btn-primary" onclick="tb_show('{_p var='select_payment_gateway' phpfox_squote=true}', $.ajaxBox('subscribe.upgrade', 'height=400&amp;width=400&amp;purchase_id={$aPurchase.purchase_id}&amp;renew_type={$aPurchase.renew_type}'));">{_p var='Upgrade'}</button>
                {/if}
            {/if}

        </div>
    </div>
</li>