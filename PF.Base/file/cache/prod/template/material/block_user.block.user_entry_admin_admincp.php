<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:35 am */ ?>
<?php

?>

<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>" id="js_user_<?php echo $this->_aVars['aUser']['user_id']; ?>">
    <td>
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') != ADMIN_USER_ID): ?>

<?php else: ?>
    <div class="custom-checkbox-wrapper">
        <label>
            <input type="checkbox" name="id[]" class="checkbox" value="<?php echo $this->_aVars['aUser']['user_id']; ?>" id="js_id_row<?php echo $this->_aVars['aUser']['user_id']; ?>" />
            <span class="custom-checkbox"></span>
        </label>
    </div>
<?php endif; ?>
    </td>
    <td>#<?php echo $this->_aVars['aUser']['user_id']; ?></td>
<?php if (isset ( $this->_aVars['bShowFeatured'] ) && $this->_aVars['bShowFeatured'] == 1): ?>
    <td class="drag_handle"><input type="hidden" name="val[ordering][<?php echo $this->_aVars['aUser']['user_id']; ?>]" value="<?php echo $this->_aVars['aUser']['featured_order']; ?>" /></td>
<?php endif; ?>


    <td><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?></td>
    <td><?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aUser']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aUser']['user_name'], ((empty($this->_aVars['aUser']['user_name']) && isset($this->_aVars['aUser']['profile_page_id'])) ? $this->_aVars['aUser']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aUser']['user_id'], $this->_aVars['aUser']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '</a>') . '</span>'; ?></td>
    <td><a href="mailto:<?php echo $this->_aVars['aUser']['email']; ?>"><?php if (( isset ( $this->_aVars['aUser']['pendingMail'] ) && $this->_aVars['aUser']['pendingMail'] != '' )): ?> <?php echo $this->_aVars['aUser']['pendingMail']; ?> <?php else: ?> <?php echo $this->_aVars['aUser']['email']; ?> <?php endif; ?></a><?php if (isset ( $this->_aVars['aUser']['unverified'] ) && $this->_aVars['aUser']['unverified'] > 0): ?> <span class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>" onclick="$.ajaxCall('user.verifyEmail', 'iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>');"><?php echo _p('verify'); ?></span><?php endif; ?></td>
    <td>
<?php if (( $this->_aVars['aUser']['status_id'] == 1 )): ?>
        <div class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>"><?php echo _p('pending_email_verification'); ?></div>
<?php endif; ?>
<?php if (Phpfox ::getParam('user.approve_users') && $this->_aVars['aUser']['view_id'] == '1'): ?>
        <span id="js_user_pending_group_<?php echo $this->_aVars['aUser']['user_id']; ?>"><?php echo _p('pending_approval'); ?></span>
<?php elseif ($this->_aVars['aUser']['view_id'] == '2'): ?>
<?php echo _p('not_approved'); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aUser']['user_group_title']); ?>
<?php endif; ?>
    </td>
    <td>
<?php if ($this->_aVars['aUser']['last_activity'] > 0): ?>
<?php echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aUser']['last_activity']); ?>
<?php endif; ?>
    </td>
    <td>
<?php if (! empty ( $this->_aVars['aUser']['last_ip_address'] )): ?>
        <div class="">
            <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.core.ip', array('search' => $this->_aVars['aUser']['last_ip_address_search'])); ?>" title="<?php echo _p('view_all_the_activity_from_this_ip'); ?>"><?php echo $this->_aVars['aUser']['last_ip_address']; ?></a>
        </div>
<?php endif; ?>
    </td>
    <td class="text-center">
        <a role="button" class="js_drop_down_link" title="<?php echo _p('manage'); ?>"></a>
        <div class="link_menu">
            <ul class="dropdown-menu dropdown-menu-right">
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') != ADMIN_USER_ID): ?>
<?php else: ?>
<?php if (Phpfox ::getUserParam('user.can_edit_users')): ?>
                        <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.add', array('id' => $this->_aVars['aUser']['user_id'])); ?>"><?php echo _p('edit_user'); ?></a></li>
<?php endif; ?>
<?php endif; ?>
                <li><a href="#" onclick="tb_show('<?php echo _p('statistics_of_user', array('user_name' => $this->_aVars['aUser']['full_name'])); ?>',$.ajaxBox('user.getUserStatistic','height=500&amp;width=400&amp;&amp;iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'));return false;"><?php echo _p('statistics'); ?></a></li>
<?php if ($this->_aVars['aUser']['view_id'] == '1'): ?>
                    <li class="js_user_pending_<?php echo $this->_aVars['aUser']['user_id']; ?>">
                        <a href="" onclick="$.ajaxCall('user.userPending', 'type=1&amp;user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;">
<?php echo _p('approve_user'); ?>
                        </a>
                    </li>
                    <li class="js_user_pending_<?php echo $this->_aVars['aUser']['user_id']; ?>">
                        <a href="" onclick="tb_show('<?php echo _p('deny_user', array('phpfox_squote' => true)); ?>', $.ajaxBox('user.showDenyUser', 'height=240&amp;width=400&amp;iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'));return false;">
<?php echo _p('deny_user'); ?>
                        </a>
                    </li>
<?php endif; ?>
<?php if (Phpfox ::getUserParam('user.can_feature')): ?>
                    <li class="js_feature_<?php echo $this->_aVars['aUser']['user_id']; ?>"><?php if (! isset ( $this->_aVars['aUser']['is_featured'] ) || $this->_aVars['aUser']['is_featured'] < 0): ?><a href="#" onclick="$.ajaxCall('user.feature', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;feature=1'); return false;"><?php echo _p('feature_user');  else: ?><a href="#" onclick="$.ajaxCall('user.feature', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;feature=0'); return false;"><?php echo _p('unfeature_user');  endif; ?></a></li>
<?php endif; ?>
<?php if (( isset ( $this->_aVars['aUser']['pendingMail'] ) && $this->_aVars['aUser']['pendingMail'] != '' ) || ( isset ( $this->_aVars['aUser']['unverified'] ) && $this->_aVars['aUser']['unverified'] > 0 )): ?>
                    <li class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>"><a href="#" onclick="$.ajaxCall('user.verifySendEmail', 'iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo _p('resend_verification_mail'); ?></a></li>
                    <li class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>"><a href="#" onclick="$.ajaxCall('user.verifyEmail', 'iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo _p('verify_this_user'); ?></a></li>
<?php endif; ?>
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') == ADMIN_USER_ID): ?>
<?php else: ?>
                    <li id="js_ban_<?php echo $this->_aVars['aUser']['user_id']; ?>">
<?php if ($this->_aVars['aUser']['is_banned']): ?>
                        <a role="button" onclick="$.ajaxCall('user.ban', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;type=0'); return false;"><?php echo _p('un_ban_user'); ?></a>
<?php else: ?>
                        <a class="popup" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.ban', array('user' => $this->_aVars['aUser']['user_id'])); ?>">
<?php echo _p('ban_user'); ?>
                        </a>
<?php endif; ?>
                    </li>
<?php endif; ?>

<?php if (Phpfox ::getUserParam('user.can_delete_others_account')): ?>
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') != ADMIN_USER_ID): ?>
<?php else: ?>
                        <li><a href="#" onclick="tb_show('<?php echo _p('delete_user', array('phpfox_squote' => true)); ?>', $.ajaxBox('user.deleteUser', 'height=240&amp;width=400&amp;iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'));return false;" title="<?php echo _p('delete_user_full_name', array('full_name' => Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aUser']['full_name']))); ?>"><?php echo _p('delete_user'); ?></a></li>
<?php endif; ?>
<?php endif; ?>
<?php if (Phpfox ::getUserParam('user.can_member_snoop')): ?>
                    <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.snoop', array('user' => $this->_aVars['aUser']['user_id'])); ?>" ><?php echo _p('log_in_as_this_user'); ?></a></li>
<?php endif; ?>
            </ul>
        </div>
    </td>
</tr>
