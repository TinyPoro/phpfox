# Subscriptions :: Change log

## Version 4.6.1

### Information

- **Release Date:** October 11, 2018
- **Best Compatibility:** phpFox >= 4.7.0

### Fixed Bugs

- User received Email with wrong language when buy subscription
- Migrate data for module version
- Responsive - Cancel subscription  - Layout of Buttons 
- Turn on Bundle JS - Action of user on IE is block
- Subscription in ACP >> Search by time: Not show datepicker when click on calendar icon
- Have to fill full language when Create new reason
- Staff can not buy subscriptions
- Membership subscription: Phrases be not translated
- Cancel reason in back end: Missing Navigation and page title
- Membership package: Not show the currently used package
- Show wrong mail title when subscription be active/cancel
- Plan Comparison: Missing No icon in Comparison table
- My subscription: Not show Renew button for active package
- Missing link in message from Admin who change status of subscription
- Edit Cancel reason: Can not edit with multi languages

### Improvements

- Purchase with membership package on sign up process is failed if Email verification is turned on.

### Changed Files

- M Block/RenewPaymentBlock.php
- M Block/UpgradeBlock.php
- M Controller/Admin/AddController.php
- M Controller/Admin/AddReasonController.php
- M Controller/Admin/CompareController.php
- M Controller/Admin/ListController.php
- M Controller/Admin/ReasonController.php
- M Controller/CompareController.php
- M Controller/IndexController.php
- M Controller/ListController.php
- M Install.php
- A Installation/Version/v461.php
- M README.md
- M Service/Compare/Process.php
- M Service/Process.php
- M Service/Purchase/Process.php
- M Service/Purchase/Purchase.php
- M Service/Reason/Process.php
- M Service/Subscribe.php
- M assets/autoload.css
- M assets/autoload.js
- M assets/main.less
- M changelog.md
- M hooks/init.php
- M hooks/user.service_auth___construct_end.php
- M installer.php
- M phrase.json
- M start.php
- M views/block/cancel-subscription.html.php
- M views/block/compare-admin.html.php
- M views/block/compare.html.php
- M views/block/renew-payment.html.php
- M views/block/upgrade.html.php
- M views/controller/admincp/add.html.php
- M views/controller/admincp/index.html.php
- M views/controller/admincp/list.html.php
- M views/controller/admincp/reason.html.php
- M views/controller/index.html.php

## Version 4.6.0

### Information

- **Release Date:** July 26, 2018
- **Best Compatibility:** phpFox >= 4.6.1b5
