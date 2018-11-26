# Events  :: Changelog

## Version 4.6.3

### Information

- **Release Date:** October 10, 2018
- **Best Compatibility:** phpFox >= 4.6.1

### Bugs Fixed

- Pending event - Allow sponsor a pending item.
- Wrong privacy when sponsor in feed.
- Sponsored Event block does not show.
- Admin can not Sponsor In Feed a event of other user.

### Improvements

- Add new setting to disallow/allow app to post on Main feed when add new item. (default is allow).
- Sponsor event - Should send notification to user when admin approve.

### Changed Files

- M Ajax/Ajax.php
- M Install.php
- M Installation/Database/Event_Category_Data.php
- M Installation/Database/Event_Text.php
- D Installation/Version/v463.php
- M README.md
- M Service/Browse.php
- M Service/Callback.php
- M Service/Category/Process.php
- M Service/Event.php
- M Service/Process.php
- M changelog.md
- M installer.php

## Version 4.6.2

### Information

- **Release Date:** September 05, 2018
- **Best Compatibility:** phpFox >= 4.6.1

### Bugs Fixed
- Show error page when disable feed/page module
- Location is still displaying ban word
- Clicks in events don't show up in Manage Sponsorships
- Show total Invited Events for non-login user
- Owner of Event received Email with wrong language when admin approved or another user comment on it
- Invited people received Email with wrong language when invite people to come to event by inviting user
- Events - Delete Event Category - Event still displaying on parent category after deleting sub-category
- Duplicated content in a mail when send Mass Email Guests for many guests use different languages
- Search Events: Not work with Location filter in My Events, Groups and Pages modules
- Manage Categories in ACP: Layout issue when drag categories

### Changed Files
- M Ajax/Ajax.php
- M Block/SponsoredBlock.php
- M Controller/Admin/DeleteController.php
- M Controller/Admin/IndexController.php
- M Controller/IndexController.php
- M Install.php
- M README.md
- M Service/Callback.php
- M Service/Category/Category.php
- M Service/Category/Process.php
- M Service/Event.php
- M Service/Process.php
- M assets/autoload.js
- M changelog.md
- M start.php
- M views/block/feed-rows.html.php
- M views/block/item.html.php
- M views/block/menu.html.php
- M views/block/mini-entry.html.php
- M views/block/sponsored.html.php
- M views/controller/admincp/add.html.php
- M views/controller/admincp/delete.html.php
- M views/controller/admincp/index.html.php

## Version 4.6.1

### Information

- **Release Date:** May 11, 2018
- **Best Compatibility:** phpFox >= 4.6.1

### Bugs Fixed

- Site shows error code after deleting page/group that have event.
- Can't invite guest.
- Missing description for Activity Points User group settings.
- Not reload the page when editing status which has single quote in status.
- Show tag friend feature when edit feed in event detail.
- Some minor layout issues.

### Changed Files
- M	Ajax/Ajax.php
- M	Block/InfoBlock.php
- M	Controller/IndexController.php
- M	Install.php
- M	README.md
- M	Service/Callback.php
- M	Service/Event.php
- M	assets/main.less
- A	hooks/feed.component_block_edit_user_status_end.php
- M	phrase.json
- M	views/block/info.html.php

## Version 4.6.0

### Information

- **Release Date:** January 09, 2018
- **Best Compatibility:** phpFox >= 4.6.0

### Improvements

- Users can select actions of items on listing page same as on detail page.
- Support drag/drop, preview, progress bar when users upload banners.
- Support AddThis on event detail page.
- Support 3 styles for pagination.
- Validate all settings, user group settings, and block settings.
- Admins can control to show/hide events that belonged to pages/groups in events listing page.
- Allow admin can change default banners.

### Removed Settings

| ID | Var name | Name | Reason |
| --- | -------- | ---- | --- |
| 1 | cache_events_per_user | Profile Event Count | Don't use anymore |
| 2 | cache_upcoming_events_info | Cache Upcoming Events (Hours) | Don't use anymore |
| 3 | can_view_pirvate_events | Can view private events? | Don't use anymore |
| 4 | event_basic_information_time_short | Event Basic Information Time Stamp (Short) | Don't use anymore |
| 5 | event_view_time_stamp_profile | Event Profile Time Stamp | Don't use anymore |
| 6 | event_browse_time_stamp | Event Browsing Time Stamp | Don't use anymore |

### New Settings

| ID | Var name | Name | Description |
| --- | -------- | ---- | ---- |
| 1 | event_paging_mode | Pagination Style | Select Pagination Style at Search Page. |
| 2 | event_default_sort_time | Default time to sort events | Select default time time to sort events in listing events page (Except Pending page and Profile page) and some blocks |
| 3 | event_display_event_created_in_group | Display events which created in Group to the All Events page at the Events app | Enable to display all public events to the both Events page in group detail and All Events page in Events app. Disable to display events created by an users to the both Events page in group detail and My Events page of this user in Events app and nobody can see these events in Events app but owner. |
| 3 | event_display_event_created_in_page | Display events which created in Page to the All Events page at the Events app | Enable to display all public events to the both Events page in page detail and All Events page in Events app. Disable to display events created by an users to the both Events page in page detail and My Events page of this user in Events app and nobody can see these events in Events app but owner. |
| 4 | event_meta_description | Events Meta Description | Meta description added to pages related to the Events app. |
| 5 | event_meta_keywords | Events Meta Keywords | Meta keywords that will be displayed on sections related to the Events app. |

### New Blocks

| ID | Block | Name | Description |
| --- | -------- | ---- | ------------ |
| 1 | event.suggestion | Suggestion | Suggest events have same categories with viewing event. |



