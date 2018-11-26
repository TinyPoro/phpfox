# Core Groups :: Changelog

## Version 4.6.3

### Information

- **Release Date:** October 11, 2018
- **Best Compatibility:** phpFox >= 4.7.0

### Bugs fixed

- This usergroup can not manage groups which they are admins if admin turn off setting "Allow to create groups"
- Phrase is missing when joined a group
- Can send multiple request to join closed group
- Can't create new widget in group
- Groups - Group Detail - Showing 2 messages when searching a request on pending requests tab 
- Groups - Group Detail - Sort by category works incorrectly
- Groups - The site is redirected to page all groups after searching groups
- Groups -  Reassign owner function works incorrectly
- BE - Groups - Manage categories - 500 error when deleting a category
- Groups - User can see the group even though the groups privacy is secret
- Show error when search
- 

### Improvements

- Improve performance
- When Create pages and groups, please only allow sub category drop down to show if we have created sub categories
- Be able to delete posts from apps in feed example from pages groups no option

### Changed files

D       .gitignore
M       Ajax/Ajax.php
M       Block/AddGroup.php
M       Block/GroupCategory.php
M       Block/GroupDeleteCategory.php
M       Block/GroupMenu.php
M       Controller/AddController.php
M       Controller/FrameController.php
M       Controller/IndexController.php
M       Controller/ViewController.php
M       Install.php
M       Installation/Database/PagesAdminTable.php
M       Installation/Database/PagesPermTable.php
M       Installation/Database/PagesTextTable.php
M       Installation/Database/PagesUrlTable.php
M       Installation/Database/PagesWidgetTextTable.php
M       Job/ConvertOldGroups.php
M       README.md
M       Service/Browse.php
M       Service/Callback.php
M       Service/Category.php
M       Service/Groups.php
M       Service/Process.php
M       Service/Type.php
D       app.lock
M       assets/main.less
M       changelog.md
M       hooks/feed.service_process_deletefeed.php
M       phrase.json
M       start.php
M       views/block/about.html.php
M       views/block/add-group.html.php
M       views/block/delete-category.html.php
M       views/block/search-member.html.php
M       views/block/widget.html.php
M       views/controller/index.html.php

## Version 4.6.2

### Information

- **Release Date:** Aug 21, 2018
- **Best Compatibility:** phpFox >= 4.6.1


### Improvements
- Support fix profile menu on Material Template
- Groups Detail - Members - Group owner should be shown in the first as always

### Bugs fixed
- Profile picture in Created Feed does not rotate as following the current group Profile picture
- SEO - No phrase input for description and keywords
- Can't view groups member
- Can not view group detail if disable page module
- Title not unify with other module
- Delete feed from group but main feed still exist
- Group invite email shows incorrect format no link to click on
- Displaying Page not found after clicking on Group Photo on Photo Detail page
- Groups - Edit - Can Edit group by ID of page
- Show error page when disable feed module
- When selecting your group on Android phone, selecting drop down menu to add photo, video etc doesn't work
- User Profile - Group info still displaying banned word
- Edit photo and then save thumbnail does nothing in groups
- Giving administrator privileges for groups you can add 2 same users with admin privileges
- Owner of Groups received Email with wrong language when anyone have any actions (join group, comment, posted items...) in it
- Can not create group if does not install page app
- Approve bar not disappear after approved
- Edit Group: Not load sub-categories when changed Category
- Does not show "Friend's Groups" menu for non-login user
- Manage Categories in ACP: Layout issue when drag categories

### Changed files
- M Ajax/Ajax.php
- A Block/Featured.php
- M Block/GroupPhoto.php
- A Block/ReassignOwner.php
- M Block/SearchMember.php
- A Block/Sponsored.php
- M Controller/AddController.php
- M Controller/Admin/IntegrateController.php
- M Controller/IndexController.php
- M Controller/PhotoController.php
- M Controller/ViewController.php
- M Install.php
- M Installation/Database/PagesTable.php
- M Job/ConvertOldGroups.php
- M Job/SendMemberJoinNotification.php
- M Job/SendMemberNotification.php
- M README.md
- M Service/Browse.php
- M Service/Callback.php
- M Service/Facade.php
- M Service/Groups.php
- M Service/Process.php
- M assets/autoload.js
- M assets/main.less
- M changelog.md
- M hooks/feed.service_process_addcomment__1.php
- A hooks/feed.service_process_deletefeed_end.php
- M hooks/get_module_blocks.php
- M hooks/link.component_ajax_addviastatusupdate.php
- M phrase.json
- M start.php
- A views/block/featured.html.php
- M views/block/link-listing.html.php
- M views/block/link.html.php
- M views/block/photo.html.php
- A views/block/reassign-owner.html.php
- M views/block/related.html.php
- A views/block/sponsored.html.php
- M views/controller/add.html.php
- M views/controller/admincp/category.html.php
- M views/controller/all.html.php
- M views/controller/index.html.php

## Version 4.6.1

### Information

- **Release Date:** April 26, 2018
- **Best Compatibility:** phpFox >= 4.6.1

### Bugs fixed
- Show "Unable to find the page you are looking for." when click on profile photo.
- Can't upload profile image in manage group if using S3.
- Can't reorder sub-category.
- Lite package can not upload photo if enable debug mode.
- Missing save button when reposition cover photo.

### Changed files
- A hooks/link.component_service_callback_getactivityfeed__1.php
- M	Controller/IndexController.php
- M	Install.php
- M	Installation/Version/v460.php
- M	Service/Callback.php
- M	Service/Groups.php
- M	Service/Process.php
- M	assets/main.less
- M	phrase.json
- M	start.php
- M	views/block/about.html.php
- M	views/block/photo.html.php
- M	views/controller/admincp/category.html.php

## Version 4.6.0

### Information

- **Release Date:** January 9th, 2018
- **Best Compatibility:** phpFox >= 4.6.0

### Improvements

- Support groups admin can re order widgets.
- Support upload thumbnail photo for main categories.
- Add statistic information of Groups (total items, pending items...) into Sit Statistics.
- Users can select actions of groups on listing page same as on detail page.
- Count items on menu My Groups.
- Support drag/drop, preview, progress bar when users upload thumbnail photos for groups.
- Hide all buttons/links if users don't have permission to do.
- Support 3 styles for pagination.
- Allow admin can change default photos.
- Validate all settings, user group settings, and block settings.
- Update new layout for all blocks and pages.

### Removed Settings

| ID | Var name | Name | Reason |
| --- | -------- | ---- | --- |
| 1 | groups.pf_group_show_admins | Show Group Admins | Move to setting of block Admin |

### New Settings

| ID | Var name | Name | Description |
| --- | -------- | ---- | ---- |
| 1 | groups.groups_limit_per_category | Groups Limit Per Category | Define the limit of how many groups per category can be displayed when viewing All Groups page. |
| 2 | groups.pagination_at_search_groups | Paging Style |  |
| 3 | groups.display_groups_profile_photo_within_gallery | Display groups profile photo within gallery | Disable this feature if you do not want to display groups profile photos within the photo gallery. |
| 5 | groups.display_groups_cover_photo_within_gallery | Display groups cover photo within gallery | Disable this feature if you do not want to display groups cover photos within the photo gallery. |
| 6 | groups_meta_description | Groups Meta Description | Meta description added to groups related to the Groups app. |
| 7 | groups_meta_keywords | Groups Meta Keywords | Meta keywords that will be displayed on sections related to the Groups app. |

### Removed User Group Settings

| ID | Var name | Name | Reason |
| --- | -------- | ---- | --- |
| 1 | groups.pf_group_moderate | Can moderate groups? This will allow a user to edit/delete/approve groups added by other users. | Don't use anymore, split to 3 new user group settings "Can edit all groups?", "Can delete all groups?", "Can approve groups?" |

### New User Group Settings

| ID | Var name | Information |
| --- | -------- | ---- |
| 1 | groups.can_edit_all_groups | Can edit all groups? |
| 2 | groups.can_delete_all_groups | Can delete all groups? |
| 3 | groups.can_approve_groups | Can approve groups? |
| 4 | groups.flood_control| Define how many minutes this user group should wait before they can add new group. Note: Setting it to "0" (without quotes) is default and users will not have to wait. |
