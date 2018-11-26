<div class="core-subscription-renew-payment-method">
    <input type="hidden" id="js_subscription_id" value="{$iPurchaseId}">
    <input type="hidden" id="js_subscription_redirect_url" value="{$sPaymentGatewayUrl}">
    <div class="introduce">
        {_p var='Select method for renewing your subscription. Choose "Auto Renew" if you want it to be renewed automatically. However, if you wish to pay renewal fee yourself, please select "Manual Renew.'}
    </div>
    <div class="selection pt-2">
        <div><label><input type="radio" class="mr-1" value="1" name="core-subscription-renew-method" checked="checked">{_p var='Auto Renew'}</label></div>
        <div><label><input type="radio" class="mr-1" value="2" name="core-subscription-renew-method">{_p var='Manual Renew'}</label></div>
    </div>

    <div class="selection-button mt-1">
        <button id="js_renew_method_action" type="button" class="btn btn-primary">{_p var='Next'}</button>
    </div>
</div>
