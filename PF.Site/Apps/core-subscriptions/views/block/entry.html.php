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

<div class="my-subscription-items">
    <ul class="my-subscription-list">
        <li class="my-subscription-list-wapper">
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
                        <span class="value">
                            {if isset($aPurchase.default_cost) && $aPurchase.default_cost != 0}
                                <span class="fw-bold price">
                                    {$aPurchase.default_cost|currency:$aPurchase.default_currency_id}
                                </span>
                                <span class="mb-0 recurring">
                                    {if !empty($aPurchase.default_recurring_cost)}
                                        {$aPurchase.default_recurring_cost}
                                    {else}
                                        {_p var='(one time)'}
                                    {/if}
                                </span>
                                {else}
                                    <span class="fw-bold price">
                                        {_p var='free'}
                                    </span>
                                    <span class="mb-0 recurring">
                                        {if !empty($aPurchase.default_recurring_cost)}
                                        {$aPurchase.default_recurring_cost}
                                        {/if}
                                    </span>
                                {/if}
                            </span>
                        </div>
                    <div class="item">
                        <span class=status>{_p var='Membership'}:</span>
                        <span class="value">
                            {if $aPurchase.status == "completed"}
                                {$aPurchase.s_title|convert|clean}
                            {else}
                                {$aPurchase.f_title|convert|clean}
                            {/if}
                        </span>
                    </div>
                    <div class="item">
                        <span class=status>{_p var='Status'}:</span>
                        <span class="value">
                            {if $aPurchase.status == 'completed'}
                            <span class="active">{_p var='sub_active'}</span>
                            {elseif $aPurchase.status == 'cancel'}
                            <span class="cancel">{_p var='Cancelled'}</span>
                            {elseif $aPurchase.status == 'pending'}
                            <span class="pending_payment">{_p var='pending_payment'}</span>
                            {elseif $aPurchase.status == 'expire'}
                            <span class="expire">{_p var='Expired'}</span>
                            {else}
                            <span class="pending_action">{_p var='pending_action'}</span>
                            {/if}
                        </span>
                    </div>
                    <div class="item">
                        <span class=status>{_p var='Activate Date'}:</span>
                        <span class="value">{$aPurchase.time_purchased|convert_time}</span>
                    </div>
                    <div class="item">
                        <span class=status>{_p var='expiry_date'}:</span>
                        <span class="value">
                            {if $aPurchase.recurring_period == 0}
                                {_p var='no_expiration_date'}
                            {elseif !empty($aPurchase.expiry_date)}
                                {$aPurchase.expiry_date|convert_time}
                            {/if}
                        </span>
                    </div>
                    {if $aPurchase.status == 'completed'}
                        <div class="item">
                            <a href="javascript:void(0)" onclick="tb_show('{_p var='Cancel Subscription' phpfox_squote=true}',$.ajaxBox('subscribe.showPopupCancelSubscription', 'height=400&amp;width=600&amp;purchase_id={$aPurchase.purchase_id}'));">Cancel</a>
                        </div>
                    {/if}
                    {if empty($aPurchase.status)}
                        <div class="item">
                            <a href="#?call=subscribe.upgrade&amp;height=400&amp;width=400&amp;purchase_id={$aPurchase.purchase_id}" class="btn btn-primary inlinePopup" title="{_p var='select_payment_gateway'}">{_p var='upgrade'}</a>
                        </div>
                    {/if}
                </div>
            </div>
        </li>
    </ul>
</div>

<div id="recent-payment" class="table-responsive recent-payment">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Purchase Date</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Payment Method</th>
                <th class="text-center">Transaction ID</th>
                <th class="text-center">Payment Status</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$aRecentPayments item=aRecentPayment}
                <tr>
                    <td>{$aRecentPayment.time_stamp|convert_time}</td>
                    <td>{$aRecentPayment.currency_symbol}{$aRecentPayment.total_paid}</td>
                    <td>{$aRecentPayment.payment_method}</td>
                    <td>{$aRecentPayment.transaction_id}</td>
                    <!-- TODO add class="pending,cancel,completed" for each status -->
                    {if $aRecentPayment.status == "completed"}
                    <td class="completed">{_p var='sub_active'}</td>
                    {elseif $aRecentPayment.status == "cancel"}
                    <td class="cancel">{_p var='Cancelled'}</td>
                    {elseif $aRecentPayment.status == "pending"}
                    <td class="pending">{_p var='Pending'}</td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
    {pager}
</div>