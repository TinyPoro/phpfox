# Material Template :: Change Log

## Version 4.7.0

### Information

- **Release Date:** October 11, 2018
- **Best Compatibility:** phpFox >= 4.6.1

## Fixed bugs

- Landing page - Layout issue on IE in case of  not show sign up block.

## Improvements

- Support revert theme.
- Separate controllers for freezing RIGHT & LEFT columns.

## New Features

- Support show blocks in core visitor page.
- Support select skins from manage theme.

## Changed Files

- M README.md
- M assets/skins/celtics.less
- M assets/skins/deep_purple.less
- M assets/skins/deep_red.less
- M assets/skins/default.less
- M assets/variables.less
- M changelog.md
- M html/user.controller.setting.html.php
- M less/mt_includes/landing.less
- M less/mt_includes/profile.less
- M less/variables.less
- M theme.json

## Version 4.6.1p3

### Information

- **Release Date:** Aug 21, 2018
- **Best Compatibility:** phpFox >= 4.6.1

## Fixed bugs
- Comment timestamp does not follow setting global time stamp
- AdminCP - App detail - Show duplicate breadcrumb and header is wrong style
- User profile - Fixed menu do not align with main menu on IE
- Photos - Title will overflow if text is too long on Firefox and IE
- Incorrect display of phrases in registration form
- Found 2 elements with non-unique id #password
- [Clone theme] - Show duplicate alert when using a clone theme of Material

## Changed Files
- M README.md
- M assets/autoload.css
- M assets/autoload.js
- M assets/autoload.less
- M assets/variables.less
- M changelog.md
- M component/linefico.css
- M component/linefico.html
- A component/linefico.js
- M html/comment.block.mini.html.php
- M html/core.block.template-breadcrumbmenu.html.php
- M html/core.block.template-menusub.html.php
- M html/friend.block.search.html.php
- M html/layout.html
- M html/user.block.register.step1.html.php
- M html/user.controller.login.html.php
- M html/user.controller.register.html.php
- M less/mt_includes/block.less
- M less/mt_includes/landing.less
- M less/mt_includes/snap-section.less
- M less/mt_includes/stickybar.less
- M less/variables.less
- M theme.json

## Version 4.6.1p2

### Information

- **Release Date:** May 23, 2018
- **Best Compatibility:** phpFox >= 4.6.1

## New Features

- Support export user data

## Changed Files
- M html/user.controller.setting.html.php

## Version 4.6.1p1

### Information

- **Release Date:** April 23, 2018
- **Best Compatibility:** phpFox >= 4.6.1

## Fixed bugs

- Fixed profile menu is shifted to the left in case Bundle JS/CSS is enabled.

## Changed Files
- M	assets/autoload.css
- M assets/autoload.js
- M less/mt_includes/snap-section.less
- M less/mt_includes/stickybar.less
- M less/mt_includes/mainnav.less
- M html/layout.html



## Version 4.6.1

### Information

- **Release Date:** April 12, 2018
- **Best Compatibility:** phpFox >= 4.6.1

## New Features

- Allow admin can freeze header bar, main menu, sub menu, profile menu, left and right column.

## Improvements

- Support friend's actions in Browse Liked popup
- Improve layout of Account Settings page
- Update layout for Comment and Reply box.
- Update layout for Upload Profile Cover section.
- Update layout for Custom Privacy popup.

## Fixed bugs

- Toggle link works wrong in Register Form (Landing page)
- Disallow registration stop displaying image

## Changed Files
- M	README.md
- M	assets/autoload.css
- M	assets/autoload.js
- M	assets/autoload.less
- M	assets/images/sign-up-invitation.jpg
- M	assets/variables.less
- A	changelog.md
- M	component/images/color-schemes.png
- M	component/linefico.html
- M	hooks/bundle__start.php
- M	hooks/friend.service_friend_get_2.php
- M	hooks/get_module_blocks_end.php
- M	hooks/groups.block_photo_menus.php
- M	hooks/pages.block_photo_menus.php
- M	hooks/profile.service_profile_get_profile_menu.php
- M	hooks/search.component_controller_index_process_end.php
- M	hooks/template_template_getmenu_process_menu.php
- M	html/comment.block.mini.html.php
- M	html/core.block.actions-buttons.html.php
- D	html/core.block.info.html.php
- M	html/core.block.moderation.html.php
- M	html/core.block.template-menu.html.php
- M	html/core.block.template-menufooter.html.php
- M	html/core.block.template-menusub.html.php
- M	html/core.block.template-notification.html.php
- M	html/feed.block.comment.html.php
- M	html/feed.block.display.html.php
- M	html/feed.block.edit-user-status.html.php
- M	html/feed.block.link.html.php
- M	html/feed.block.tagged.html.php
- M	html/friend.block.accept.html.php
- M	html/friend.block.mutual-browse.html.php
- M	html/friend.block.request.html.php
- M	html/friend.block.search.html.php
- M	html/friend.block.suggestion.html.php
- M	html/friend.controller.profile.html.php
- M	html/layout.html
- D	html/like.block.browse.html.php
- M	html/like.block.link.html.php
- M	html/mail.controller.index.html.php
- D	html/profile.block.info.html.php
- M	html/profile.block.pic.html.php
- M	html/user.block.featured.html.php
- M	html/user.block.friendship.html.php
- M	html/user.block.register.step2.html.php
- M	html/user.block.rows_wide.html.php
- M	html/user.controller.browse.html.php
- M	html/user.controller.login.html.php
- M	html/user.controller.privacy.html.php
- M	html/user.controller.profile.html.php
- M	html/user.controller.register.html.php
- M	html/user.controller.setting.html.php
- M	less/customize.less
- M	less/mt_includes/all-request-incoming.less
- M	less/mt_includes/block-categories.less
- M	less/mt_includes/block-menu.less
- M	less/mt_includes/block.less
- M	less/mt_includes/feed.less
- M	less/mt_includes/friend.less
- M	less/mt_includes/general.less
- M	less/mt_includes/landing.less
- M	less/mt_includes/mainnav.less
- M	less/mt_includes/member.less
- M	less/mt_includes/popup.less
- M	less/mt_includes/profile.less
- M	less/mt_includes/search-filter.less
- A	less/mt_includes/snap-section.less
- M	less/mt_includes/stickybar.less
- M	less/mt_includes/structure.less
- M	less/variables.less
- M	start.php
- M	theme.json
- M	theme.png

## Version 4.6.0

### Information

- **Release Date:** January 15, 2018
- **Best Compatibility:** phpFox >= 4.6.0
