<div class="cancel-subscription-block">
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
                                {if isset($aPurchase.default_cost) && $aPurchase.default_cost != '0.00'}
                                    {if isset($aPurchase.default_recurring_cost)}
                                        {$aPurchase.default_recurring_cost}
                                    {else}
                                        {$aPurchase.default_cost|currency:$aPurchase.default_currency_id}
                                {/if}
                                {else}
                                    {_p var='free'}
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
                                    <span class="cancel">{_p var='canceled'}</span>
                                    {elseif $aPurchase.status == 'pending'}
                                    <span class="pending_payment">{_p var='pending_payment'}</span>
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
                                {else}
                                    {$aPurchase.expiry_date|convert_time}
                                {/if}
                            </span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="content"><strong>{$sContent}</strong></div>
    <!-- TODO add real data -->
    <ul class="sub-reason mt-2">
        {foreach from=$aReasons item=aReason key=reasonkey}
        <li>
            <div class="radio ync-radio-custom">
                <label>
                    <input type="radio" name="reason" value="{$aReason.reason_id}" {if (int)$reasonkey == 0}checked="checked"{/if}>
                    {$aReason.title_parsed}
                </label>
            </div>
        </li>
        {/foreach}
    </ul>
    
    {if (int)$aPurchase.recurring_period > 0 && $aPurchase.payment_method == 'paypal'}
        <div class="sub-warning-alert mt-2">
            <span class="icon"><i class="ico ico-warning-circle-o"></i></span>
            <p class="text mb-0">{$sWarning}</p>
        </div>
    {/if}
    <div class="sub-bottom pt-2 text-right">
        <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="js_box_remove(this)">{_p var='Keep Subscription'}</a><a href="javascript:void(0)" class="btn btn-default btn-sm ml-1" onclick="$.ajaxCall('subscribe.cancelSubscription','purchase_id={$aPurchase.purchase_id}&user_id={$aPurchase.user_id}&user_group_failure={$aPurchase.fail_user_group}&package_id={$aPurchase.package_id}&reason_id=' + $('input[name=reason]:checked').val())">{_p var='Cancel Subscription'}</a>
    </div>
</div>

