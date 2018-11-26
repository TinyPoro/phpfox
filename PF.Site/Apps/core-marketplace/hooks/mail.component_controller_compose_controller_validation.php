<?php
$sModuleId = $this->request()->get('module_id');
if ($sModuleId && $sModuleId == 'marketplace' && ($iListingId = $this->request()->get('listing_id'))) {
    $aListing = Phpfox::getService('marketplace')->getListing($iListingId);

    if (!empty($aListing)) {
        if (Phpfox::getParam('core.allow_html')) {
            $sPhraseVarName = 'hello_i_am_interested_in_your_listing_listing_title_html_allowed';
        } else {
            $sPhraseVarName = 'hello_i_am_interested_in_your_listing_listing_title_listing_url';
        }
        $this->template()->assign('sMessageClaim',
            _p($sPhraseVarName, [
                'listing_title' => $aListing['title'],
                'listing_url' => $aListing['bookmark_url']
            ]));
    }
}
