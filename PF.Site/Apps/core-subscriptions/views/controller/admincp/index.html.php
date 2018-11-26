<?php
/**
 * [PHPFOX_HEADER]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: controller.html.php 64 2009-01-19 15:05:54Z Raymond_Benc $
 */

defined('PHPFOX') or exit('NO DICE!');

?>
<div class="manage-plans core-subscriptions-manage-packages">
    <form id="admin-manage-plans-form" method="get" action="{url link='admincp.subscribe.index'}">
        <div class="col-md-6 input-filter">
            <label>{_p var='Package Type'}</label>
            <select name="val[type]" class="form-control">
                <option value="">{_p var='Any'}</option>
                {foreach from=$aTypes key=typekey item=typevalue}
                    <option value="{$typekey}" {if !empty($aSearch.type)}{if $typekey == $aSearch.type}selected="true"{/if}{/if}>{$typevalue}</option>
                {/foreach}
            </select>
        </div>
        <div class="col-md-6 input-filter">
            <label>{_p var='Package Status'}</label>
            <select name="val[status]" class="form-control">
                <option value="">{_p var='Any'}</option>
                {foreach from=$aPackageStatus key=statuskey item=statusvalue}
                <option value="{$statuskey}" {if !empty($aSearch.status)}{if $statuskey == $aSearch.status}selected="true"{/if}{/if}>{$statusvalue}</option>
                {/foreach}
            </select>
        </div>
        <div class="col-md-6 input-filter">
            <label>{_p var='Statistics by time period'}</label>
            <select name="val[period]" class="form-control" id="period">
               {foreach from=$aPeriod key=periodkey item=periodvalue}
                <option value="{$periodkey}" {if !empty($aSearch.period)}{if $periodkey== $aSearch.period}selected="true"{/if}{/if}>{$periodvalue}</option>
               {/foreach}
            </select>
        </div>
        <div class="dont-unbind-children col-md-6 input-filter date-filter {if !empty($aSearch.period) && $aSearch.period == 'custom'}show{else}hidden{/if}">
            <label>{_p var='From'}</label>
            <div class="select-date">
                <div>
                    <input name="val[from]" value="{value type='input' id='from'}" class="form-control" id="date-from">
                </div>
                <span>-</span>
                <div>
                    <input name="val[to]" value="{value type='input' id='to'}" class="form-control"  id="date-to">
                </div>
            </div>
        </div>
        <div class="col-md-12 action-button">
            <button type="submit" class="btn btn-danger input-filter">{_p var='Search'}</button>
        </div>
    </form>
</div>
{if count($aPackages)}
    <div class="panel panel-default table-responsive">
        <table class="table table-admin" id="_sort" data-sort-url="{url link='subscribe.admincp.order' table='subscribe_package' field='package_id'}">
            <thead>
                <tr>
                    <th></th>
                    <th class="t_center w30">{_p var='ID'}</th>
                    <th class="t_center">{_p var='Package Title'}</th>
                    <th class="t_center">{_p var='Cost'}</th>
                    <th class="t_center w100">{_p var='Type'}</th>
                    <th class="t_center w60">{_p var='Status'}</th>
                    <th class="t_center w160">{_p var='Last Updated'}</th>
                    <th class="t_center w80">{_p var='sub_active'}</th>
                    <th class="t_center w80">{_p var='Expired'}</th>
                    <th class="t_center w80">{_p var='Cancelled'}</th>
                    <th class="t_center w20">{_p var='Settings'}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$aPackages key=iKey item=aPackage}
                    <tr data-sort-id="{$aPackage.package_id}">
                        <td class="sortable" >
                            <i class="fa fa-sort"></i>
                        </td>
                        <td class="t_center">{$aPackage.package_id}</td>
                        <td class="t_center"><a href="{url link='admincp.subscribe.add' id={$aPackage.package_id}">{_p var=$aPackage.title} {if !empty($aPackage.is_popular)}({_p var='Most Popular'}){/if}</a></td>
                        <td class="t_center">{$aPackage.currency_symbol}{$aPackage.default_cost}</td>
                        <td class="t_center">{$aPackage.type}</td>
                        <td class="on_off">
                            <div class="js_item_is_active" {if !$aPackage.is_active}style="display:none"{/if}>
                            <a href="#?call=subscribe.updateActivity&amp;package_id={$aPackage.package_id}&amp;active=0" class="js_item_active_link" title="{_p var='deactivate'}"></a>
                            </div>
                            <div class="js_item_is_not_active" {if $aPackage.is_active}style="display:none"{/if}>
                            <a href="#?call=subscribe.updateActivity&amp;package_id={$aPackage.package_id}&amp;active=1" class="js_item_active_link" title="{_p var='activate'}"></a>
                            </div>
                        </td>
                        <td class="t_center">{if !empty($aPackage.time_updated)}{$aPackage.time_updated|convert_time}{/if}</td>
                        <td class="t_center">{if !empty($aPackage.statistic_completed)}<a href="{url link='admincp.subscribe.list' search[title]=$aPackage.title search[status]='completed' search[period]=$sDefaultPeriod search[from]=$aSearch.from search[to]= $aSearch.to}">{$aPackage.statistic_completed.total}</a>{else}<a href="javascript:void(0)">0</a>{/if}</td>
                        <td class="t_center">{if !empty($aPackage.statistic_expire)}<a href="{url link='admincp.subscribe.list' search[title]=$aPackage.title search[status]=$aPackage.statistic_expire.status search[period]=$sDefaultPeriod search[from]=$aSearch.from search[to]= $aSearch.to}">{$aPackage.statistic_expire.total}</a>{else}<a href="javascript:void(0)">0</a>{/if}</td>
                        <td class="t_center">{if !empty($aPackage.statistic_cancel)}<a href="{url link='admincp.subscribe.list' search[title]=$aPackage.title search[status]=$aPackage.statistic_cancel.status search[period]=$sDefaultPeriod search[from]=$aSearch.from search[to]= $aSearch.to}">{$aPackage.statistic_cancel.total}</a>{else}<a href="javascript:void(0)">0</a>{/if}</td>
                        <td class="t_center">
                            <a role="button" class="js_drop_down_link" title="{_p var='manage'}"></a>
                            <div class="link_menu">
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{url link='admincp.subscribe.add' id={$aPackage.package_id}">{_p var='edit_package'}</a></li>
                                    <li><a href="{url link='admincp.subscribe' delete={$aPackage.package_id}" class="sJsConfirm" data-message="{_p var='are_you_sure' phpfox_squote=true}">{_p var='delete_package'}</a></li>
                                    {if !$aPackage.is_popular}
                                        <li><a href="javascript:void(0)" onclick="$.ajaxCall('subscribe.markPackagePopular','id={$aPackage.package_id}')">{_p var='Mark as Most Popular'}</a></li>
                                    {/if}
                                    <li><a href="{url link='admincp.subscribe.list' search[title]={$aPackage.title}">{_p var='View Subscriptions'}</a></li>
                                </ul>
                            </div>
                        </td>

                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    {pager}
{elseif empty($bError) && !$bHasPackage}
    <div class="alert alert-empty col-md-12">
        <h4>{_p var='no_packages_have_been_added'}</h4><br/>
        <a class="btn btn-info" href="{url link='admincp.subscribe.add'}">{_p var='create_a_new_package'}</a>
    </div>
{else}
    <div class="alert alert-empty col-md-12">
        <h4>{_p var='no_packages_have_been_added'}</h4><br/>
    </div>
{/if}
<script type="text/javascript">
    var calendar_image = "<?php echo Phpfox::getParam('subscribe.app_url').'assets/images/calendar.gif';?>";
    var isBESubscription = true;
</script>