# Marketplace  :: Change Log

## Version 4.6.2

### Information

- **Release Date:** September 10, 2018
- **Best Compatibility:** phpFox >= 4.6.1

### Bugs fixed

- Missing description for Activity Points User group settings.
- Marketplace - Duplicated the "jpeg" in error message.
- Marketplace - Manage invite - Photos are stress.
- Missing plugin to support third party (favourite).
- Show error page when disable feed module.
- Short Description still displaying banned word.
- Owner of listing received Email with wrong language when anyone have any actions (like, comment, ...) in it.
- 

### Improvements

- Check integration with RSS app.
- Should have feature allow users/admin can reopen expired listings.
- Invoices page - Should have some blocks same as other pages.
- Add new setting to disallow/allow app to post on Main feed when add new item. (default is allow)

### Changed Files

- M Ajax/Ajax.php
- M Block/FeedBlock.php
- M Block/RowsBlock.php
- M Block/SponsoredBlock.php
- M Controller/Admin/IndexController.php
- M Controller/IndexController.php
- M Controller/ViewController.php
- M Install.php
- M Installation/Database/Marketplace_Category_Data.php
- M Installation/Database/Marketplace_Text.php
- A Installation/Version/v462.php
- M README.md
- M Service/Browse.php
- M Service/Callback.php
- M Service/Category/Category.php
- M Service/Category/Process.php
- M Service/Marketplace.php
- M Service/Process.php
- M assets/main.less
- M changelog.md
- M installer.php
- M phrase.json
- M start.php
- M views/block/info.html.php
- M views/block/list.html.php
- M views/block/menu.html.php
- M views/block/mini.html.php
- M views/controller/add.html.php
- M views/controller/admincp/add.html.php
- M views/controller/admincp/index.html.php
- M views/controller/invoice/index.html.php
- M views/controller/view.html.php

## Version 4.6.1

### Information

- **Release Date:** February 13, 2018
- **Best Compatibility:** phpFox >= 4.6.0

### Bugs fixed
- The listing photos aren't shown.
- Can drag and drop categories above the title.

### Improvements
- Add additional message when contact seller.

### Changed Files
- M	Controller/IndexController.php
- M	Install.php
- M	README.md
- M	assets/autoload.js
- M	assets/main.less
- M	change-log.md
- A	hooks/mail.component_controller_compose_controller_validation.php
- M	phrase.json
- M	views/controller/admincp/index.html.php
- M	views/controller/view.html.php
- M Service/Category/Process.php

## Version 4.6.0

### Information

- **Release Date:** January 09, 2018
- **Best Compatibility:** phpFox >= 4.6.0

### Improvements

- Use cron to send expired notifications.
- Support attachments for listing's description.
- Support emoji for listing's description.
- Users can select actions of listings on listing page same as on detail page.
- Count items on menu My Listings.
- Support drag/drop, preview, progress bar when users upload photos.
- Support AddThis on listing detail page.
- Support 3 styles for pagination.
- Allow admin can change default photos.
- Validate all settings, user group settings, and block settings.
- Update layout for all blocks and pages.

### Removed Settings

| ID | Var name | Name | Reason |
| --- | -------- | ---- | --- |
| 1 | marketplace_view_time_stamp | Marketplace View Time Stamp | Don't use anymore |
| 2 | total_listing_more_from | Total "More From" Listings to Display | Don't use anymore |
| 3 | how_many_sponsored_listings | How Many Sponsored Listings To Show | Don't use anymore |

### New Settings

| ID | Var name | Name | Description |
| --- | -------- | ---- | ---- |
| 1 | marketplace_paging_mode | Pagination Style | Select Pagination Style at Search Page. |
| 4 | marketplace_meta_description | Marketplace Meta Description | Meta description added to pages related to the Marketplace app. |
| 5 | marketplace_meta_keywords | Marketplace Meta Keywords | Meta keywords that will be displayed on sections related to the Marketplace app. |

### Deprecated Functions

| ID | Class Name | Function Name | Will Remove In | Reason |
| --- | -------- | ---- | ----- | ---- |
| 1 | Apps\Core_Marketplace\Ajax | categoryOrdering | 4.7.0 | Don't use anymore |


