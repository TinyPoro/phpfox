<?php
namespace Apps\Core_Subscriptions\Block;

use Phpfox;
use Phpfox_Component;

defined('PHPFOX') or exit('NO DICE!');

class CancelSubscriptionBlock extends Phpfox_Component
{
    public function process()
    {
        $iPurchaseId = $this->getParam('iPurchaseId');
        $aPurchase = Phpfox::getService('subscribe.purchase')->getInvoice($iPurchaseId);
        $aReasons = Phpfox::getService('subscribe.reason')->getReasonForCancelSubscription();
        $this->template()->assign([
            'sContent' => _p("We're sorry you're thinking of cancelling your subscription. Can you tell us why ? We might be able to help"),
            'sWarning' => !empty((int)$aPurchase['recurring_period']) && $aPurchase['payment_method'] == 'paypal' ? _p("Remember to go on your Paypal account to cancel the automatic payments so won't be charged next period" ) : '',
            'aPurchase' => $aPurchase,
            'sDefaultPhoto' => Phpfox::getParam('subscribe.default_photo_package'),
            'aReasons' => $aReasons
        ]);
    }
}