<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:15 am */ ?>
<?php 

 if (! $this->_aVars['bSearch']): ?>
    <script type="text/javascript">
      <?php echo '
      $Ready(function() {
        $Core.searchFriend.init(\'#js_find_friend\', {
        '; ?>

          sPrivacyInputName: '<?php echo $this->_aVars['sPrivacyInputName']; ?>',
          sSearchByValue: '',
          sFriendModuleId: '<?php echo $this->_aVars['sFriendModuleId']; ?>',
          sFriendItemId: '<?php echo $this->_aVars['sFriendItemId']; ?>'
        <?php echo '
        });
      });
      '; ?>

    </script>

    <div id="js_friend_loader_info"></div>
    <div id="js_friend_loader">
<?php if ($this->_aVars['sFriendType'] != 'mail'): ?>
<?php if (! $this->_aVars['bInForm']): ?>
        <form method="post" onsubmit="$Core.searchFriend.search();return false;">
<?php endif; ?>
            <input type="text" class="js_is_enter v_middle default_value" name="find" placeholder="<?php echo _p('search_by_email_full_name_or_user_name'); ?>" id="js_find_friend" autocomplete="off" size="30" />
<?php if (! $this->_aVars['bInForm']): ?>
        
</form>

<?php endif; ?>
<?php else: ?>
        <input type="text" class="js_is_enter v_middle default_value" name="find" value="<?php echo _p('search_by_email_full_name_or_user_name'); ?>" id="js_find_friend" autocomplete="off" size="30" />
        <input type="button" value="<?php echo _p('find'); ?>" onclick="$Core.searchFriend.search();return false;" class="button v_middle" />
<?php endif; ?>
<div id="js_friend_search_content">
<?php endif; ?>
    <div class="label_flow friend-search-invite-container">
        <div class="item-container">
<?php if (count((array)$this->_aVars['aFriends'])):  $this->_aPhpfoxVars['iteration']['friend'] = 0;  foreach ((array) $this->_aVars['aFriends'] as $this->_aVars['aFriend']):  $this->_aPhpfoxVars['iteration']['friend']++; ?>

        <article class="search-friend <?php if (isset ( $this->_aVars['aFriend']['is_active'] )): ?>friend_search_holder_active<?php endif; ?>" id="search-friend-<?php echo $this->_aVars['aFriend']['user_id']; ?>"
                 data-id="<?php echo $this->_aVars['aFriend']['user_id']; ?>" data-can-message="<?php if (isset ( $this->_aVars['aFriend']['canMessageUser'] )):  echo $this->_aVars['aFriend']['canMessageUser'];  else: ?>false<?php endif; ?>"
                
        >
        <div class="item-outer">
            <div class="moderation_row">
                <label class="item-checkbox">
                    <input type="checkbox" class="js_global_item_moderate" name="friend[]" value="<?php echo $this->_aVars['aFriend']['user_id']; ?>"
                           id="js_friends_checkbox_<?php echo $this->_aVars['aFriend']['user_id']; ?>" value="<?php echo $this->_aVars['aFriend']['user_id']; ?>"
<?php if (( isset ( $this->_aVars['aFriend']['canMessageUser'] ) && $this->_aVars['aFriend']['canMessageUser'] == false ) || isset ( $this->_aVars['aFriend']['is_active'] )): ?>
                                disabled
<?php else: ?>
                                onclick="$Core.searchFriend.addFriendToSelectList(this, '<?php echo $this->_aVars['aFriend']['user_id']; ?>');"
<?php endif; ?>
                    />
                    <i class="ico ico-square-o"></i>
                </label>
            </div>
            <div class="user_rows">
                <div class="user_rows_image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aFriend'],'suffix' => '_50_square','max_width' => 32,'max_height' => 32,'no_link' => true,'style' => "vertical-align:middle;")); ?>
                </div>
                <div class="user_rows_inner">
                    <div class="item-user"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aFriend']['full_name']); ?></div>
<?php if (isset ( $this->_aVars['aFriend']['is_active'] )): ?>
                        <span>(<?php echo $this->_aVars['aFriend']['is_active']; ?>)</span>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aFriend']['canMessageUser'] ) && $this->_aVars['aFriend']['canMessageUser'] == false): ?>
<?php echo _p('cannot_select_this_user'); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
        </article>
<?php endforeach; else: ?>
        <div class="extra_info">
<?php if ($this->_aVars['sFriendType'] == 'mail'): ?>
<?php echo _p('sorry_no_members_found'); ?>
<?php else: ?>
<?php echo _p('sorry_no_friends_were_found'); ?>
<?php endif; ?>
        </div>
<?php endif; ?>
    </div>
    </div>
<?php if (! $this->_aVars['bSearch']): ?>
</div>
<div class="selected-friends-content">
    <ul id="selected_friends_list">
        <li id="selected_friend_template" class="js_hover_title hide">
            <div class="img-wrapper">
                <div>
                    <span class="ico ico-close"></span>
                </div>
            </div>
            <span class="js_hover_info"></span>
        </li>
        <li id="selected_friend_view_more" class="hide">
            <span class="ico ico-dottedmore"></span>
        </li>
    </ul>
    <a role="button" id="deselect_all_friends" class="hide"><?php echo _p('deselect_all'); ?> (<span></span>)</a>
</div>
<?php if (! $this->_aVars['bIsForShare'] && $this->_aVars['sPrivacyInputName'] != 'invite'): ?>
	<div class="main_break t_right">
		<input type="button" name="submit" value="<?php echo _p('use_selected'); ?>" onclick="$Core.searchFriend.selectSearchFriends()" class="btn btn-primary" />&nbsp;
        <input type="button" name="cancel" value="<?php echo _p('cancel'); ?>" onclick="$Core.searchFriend.cancelSearchFriends()" class="btn btn-default" />
	</div>
<?php endif; ?>
</div>
<?php endif; ?>
