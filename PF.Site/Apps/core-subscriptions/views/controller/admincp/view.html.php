<?php
/**
 * [PHPFOX_HEADER]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: list.html.php 1339 2009-12-19 00:37:55Z Raymond_Benc $
 */

defined('PHPFOX') or exit('NO DICE!');

?>
<div class="panel panel-default core-subscriptions-admincp-subscribe-view">
    <div class="panel-heading">
        <div class="panel-title">{_p var='Subscription Detail'}: {$aPurchase.purchase_id}</div>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <span class="title"><b>{_p var='User'}: </b></span><span>{$aPurchase|user}</span>
        </div>
        <div class="form-group">
            <span class="title"><b>{_p var='Package Title'}: </b></span><span><a href="{url link='admincp.subscribe.add' id={$aPurchase.package_id}" target="_blank">{$aPurchase.title_parsed}</a></span>
        </div>
        <div class="form-group">
            <span class="title"><b>{_p var='Subscription Status'}: </b></span>
            <span>
                {if $aPurchase.status == 'completed'}
                {_p var='sub_active'}
                {elseif $aPurchase.status == 'cancel'}
                {_p var='Cancelled'}
                {elseif $aPurchase.status == 'pending'}
                {_p var='pending_payment'}
                {elseif $aPurchase.status == 'expire'}
                {_p var='Expired'}
                {else}
                {_p var='pending_action'}
                {/if}
            </span>
        </div>
        <div class="form-group">
            <span class="title"><b>{_p var='Activation Date'}: </b></span>
            <span>{$aPurchase.time_stamp|convert_time}</span>
        </div>
        {if (int)$aPurchase.recurring_period > 0}
        <div class="form-group">
            <span class="title"><b>{_p var='Recurring Period'}: </b></span>
            <span>{$aPurchase.type}</span>
        </div>
        <div class="form-group">
            <span class="title"><b>{_p var='Next Payment'}: </b></span>
            <span>{$aPurchase.expiry_date|convert_time}</span>
        </div>
        {else}
        <div class="form-group">
            <span class="title"><b>{_p var='Expiration Date'}: </b></span>
            <span>{_p var='Never Expires'}</span>
        </div>
        {/if}
    </div>
    <div id="admincp-recent-payment" class="table-responsive admincp-recent-payment panel-body">
        <div class="form-group title">{_p var='Recent Payments'}</div>
        {if count($aRecentPayments)}
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
                <td class="t_center">{$aRecentPayment.currency_symbol}{$aRecentPayment.total_paid}</td>
                <td class="t_center">{$aRecentPayment.payment_method}</td>
                <td class="t_center">{$aRecentPayment.transaction_id}</td>
                {if $aRecentPayment.status == "completed"}
                <td class="completed t_center">{_p var='sub_active'}</td>
                {elseif $aRecentPayment.status == "cancel"}
                <td class="cancel t_center">{_p var='Cancelled'}</td>
                {elseif $aRecentPayment.status == "expire"}
                <td class="cancel t_center">{_p var='Expired'}</td>
                {elseif $aRecentPayment.status == "pending"}
                <td class="pending t_center">{_p var='Pending'}</td>
                {/if}
            </tr>
            {/foreach}
            </tbody>
        </table>
        {pager}
        {else}
        <div class="alert alert-danger">
            {_p var='Recent payments not found'}
        </div>
        {/if}
    </div>
</div>

