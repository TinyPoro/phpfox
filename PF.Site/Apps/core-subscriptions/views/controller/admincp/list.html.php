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

<div class="core-subscriptions-admincp-list">
    <form class="form-search" method="get" action="{url link='admincp.subscribe.list'}">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="username">{_p var='Username'}</label>
                        {filter key='username'}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="id">{_p var='Subscription ID'}</label>
                        {filter key='subscription_id'}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="title">{_p var='Package Title'}</label>
                        {filter key='title'}
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="status">{_p var='Subscription Status'}</label>
                        {filter key='status'}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6 period {if !empty($aSearch) && $aSearch.status == 'pending'}hidden{else}show{/if}">
                        <label for="period">{_p var='Statistics by '} <span id="title-statistic">{_p var='Activation Date'}</span></label>
                        {filter key='period'}
                    </div>
                    <div class="form-group col-md-6 js_subscribe_reason {if !empty($aSearch) && $aSearch.status == 'cancel'}show{else}hidden{/if}">
                        <label for="reason">{_p var='Reason'}</label>
                        {filter key='reason'}
                    </div>
                    <div class="dont-unbind-children form-group col-md-6 input-filter date-filter {if !empty($aSearch) && $aSearch.period == 'custom'}show{else}hidden{/if}" >
                        <label>{_p var='From'}</label>
                        <div class="select-date">
                            <div class="date-from">
                                <input name="search[from]" value="{$aSearch.from}" class="form-control" id="date-from">
                            </div>

                            <div class="seperate"> - </div>

                            <div class="date-to">
                                <input name="search[to]" value="{$aSearch.to}" class="form-control"  id="date-to">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>
                            &nbsp;
                        </label>
                        <div><input type="submit" value="{_p var='filter'}" class="btn btn-primary" />
                            {if $bIsSearching}
                            <input type="submit" value="{_p var='reset'}" class="btn btn-default" name="search[reset]" />
                            {/if}</div>
                    </div>
                </div>


            </div>
        </div>
    </form>
    {if count($aPurchases)}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">{_p var='orders'}</div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table" cellpadding="0" cellspacing="0">
                    <thead>
                    <tr>
                        <th {table_sort  asc="sp.purchase_id asc" desc="sp.purchase_id desc" query="search[sort]"}>{_p var='order_id'}</th>
                        <th {table_sort  asc="u.full_name asc" desc="u.full_name desc" query="search[sort]"}>{_p var='Username'}</th>
                        <th>{_p var='Package Title'}</th>
                        <th class="w220 t_center">{_p var='status'}</th>
                        <th {table_sort  class="t_center" asc="sp.time_stamp asc" desc="sp.time_stamp desc" query="search[sort]"}>{_p var='Activation'}</th>
                        <th class="t_center">{_p var='Expiration'}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$aPurchases key=iKey item=aPurchase}
                    <tr>
                        <td><a href="{url link='admincp.subscribe.view' id=$aPurchase.purchase_id}">{$aPurchase.purchase_id}</a></td>
                        <td>{$aPurchase|user}</td>
                        <td>{if !empty($aPurchase.is_removed)}{$aPurchase.title|convert|clean}{else}<a href="{url link='admincp.subscribe.add' id=$aPurchase.package_id}">{$aPurchase.title|convert|clean}</a>{/if}</td>
                        <td class="t_center">
                            <a href="#" class="form_select_active">
                                {if $aPurchase.status == 'completed'}
                                {_p var='sub_active'}
                                {elseif $aPurchase.status == 'cancel'}
                                <div>{_p var='Cancelled'}</div>
                                {elseif $aPurchase.status == 'pending'}
                                <div>{_p var='pending_payment'}</div>
                                {elseif $aPurchase.status == 'expire'}
                                {_p var='Expired'}
                                {/if}
                            </a>
                            <ul class="form_select">
                                {foreach from=$aPurchase.status_options key=optionname item=option}
                                <li><a href="#?call=subscribe.updatePurchase&amp;from={$aPurchase.status}&amp;to={$optionname}&amp;purchase_id={$aPurchase.purchase_id}">{$option}</a></li>
                                {/foreach}
                            </ul>
                            {if $aPurchase.status == 'cancel'}
                            <div><a href="javascript:void(0)" onclick="tb_show('{_p var='Cancel Reason' phpfox_squote=true}', $.ajaxBox('subscribe.viewCancelReason', 'height=400&amp;width=650&amp;purchase_id={$aPurchase.purchase_id}'));">{_p var='View Reason'}</a> </div>
                            {elseif $aPurchase.status == 'pending'}
                            <div><a href="javascript:void(0)" onclick="$.ajaxCall('subscribe.updatePurchase','from={$aPurchase.status}&to=completed&purchase_id={$aPurchase.purchase_id}')">{_p var='Activate'}</a> </div>
                            {/if}
                        </td>
                        <td class="t_center">{$aPurchase.time_stamp|date}</td>
                        <td class="t_center">{if !empty($aPurchase.expiry_date)}{$aPurchase.expiry_date|date}{/if}</td>
                    </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {pager}
    {else}
    <p class="alert alert-empty">
        {_p var='no_purchase_orders'}
    </p>
    {/if}
</div>


<script type="text/javascript">
    var calendar_image = "<?php echo Phpfox::getParam('subscribe.app_url').'assets/images/calendar.gif';?>";
    var isBESubscription = true;
</script>