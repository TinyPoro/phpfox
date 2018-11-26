<?php
/**
 * [PHPFOX_HEADER]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: add.html.php 4554 2012-07-23 08:44:50Z Raymond_Benc $
 */

defined('PHPFOX') or exit('NO DICE!');

?>
<div class="panel panel-default core-subscriptions-admincp-delete-reason">
    <div class="panel-heading">
        <div class="panel-title">{_p var='Delete Reason'}</div>
    </div>
    <div class="panel-body">
        <form id="core-subscriptions-admincp-delete-reason" method="post" action="{url link='admincp.subscribe.delete-reason'}">
            <div><input type="hidden" name="val[reason_id]" value="{$iReasonId}"></div>

            <div class="form-group alert alert-empty">
                {_p var='Are you sure you want to delete this reason ?'}
            </div>
            <div class="form-group">
                <div class="title mb-1">
                    {_p var='Select an action to all cancel subscriptions of this reason.'}
                </div>
                <div class="selection">
                    <div class="delete-option">
                        <label>
                            <input type="radio" name="val[option]" value="1" checked="checked">
                            {_p var='Move all cancel subscriptions to default reason.'}
                        </label>

                    </div>
                    {if count($aReasonOptions)}
                    <div class="delete-option">
                        <label>
                            <input type="radio" name="val[option]" value="2">
                            {_p var='Select another reason for all cancel subscriptions belonging to this.'}
                        </label>

                    </div>
                    {/if}
                </div>
            </div>
            {if count($aReasonOptions)}
            <div class="form-group extra-option">
                <select name="val[extra_option]" class="form-control">
                    {foreach from=$aReasonOptions item=aOption}
                    <option value="{$aOption.reason_id}">{$aOption.title_parsed}</option>
                    {/foreach}
                </select>
            </div>
            {/if}
            <div class="form-group">
                <button type="submit" class="btn btn-success">{_p var='Delete'}</button>
                {if !empty($isAjaxPopup)}
                <button class="btn btn-default" onclick="js_box_remove(this); return false;">{_p var='Cancel'}</button>
                {/if}
            </div>
        </form>
    </div>
</div>