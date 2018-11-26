<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 19, 2018, 12:02 pm */ ?>
<?php

?>
<div class="item-outer">
    <div class="item-inner">
        <div class="item-media">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_200_square','max_width' => 200,'max_height' => 200)); ?>
        </div>
        <div class="user-info">
            <div class="user-title">
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aUser']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aUser']['user_name'], ((empty($this->_aVars['aUser']['user_name']) && isset($this->_aVars['aUser']['profile_page_id'])) ? $this->_aVars['aUser']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aUser']['user_id'], $this->_aVars['aUser']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '</a>') . '</span>'; ?>
            </div>
<?php Phpfox::getBlock('user.friendship', array('friend_user_id' => $this->_aVars['aUser']['user_id'],'type' => 'icon','extra_info' => true,'no_button' => true,'mutual_list' => true)); ?>
<?php Phpfox::getBlock('user.info', array('friend_user_id' => $this->_aVars['aUser']['user_id'],'number_of_info' => '2')); ?>

<?php if (Phpfox ::getUserParam('user.can_feature')): ?>
            <div class="dropdown admin-actions">
                <a href="" data-toggle="dropdown" class="btn btn-sm s-4">
                    <span class="ico ico-gear-o"></span>
                </a>
    
                <ul class="dropdown-menu dropdown-menu-right">
                    <li <?php if (! isset ( $this->_aVars['aUser']['is_featured'] ) || ( isset ( $this->_aVars['aUser']['is_featured'] ) && ! $this->_aVars['aUser']['is_featured'] )): ?> style="display:none;" <?php endif; ?> class="user_unfeature_member">
                    <a href="#" title="<?php echo _p('un_feature_this_member'); ?>" onclick="$(this).parent().hide(); $(this).parents('.dropdown-menu').find('.user_feature_member:first').show(); $.ajaxCall('user.feature', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;feature=0&amp;type=1&reload=1'); return false;"><span class="ico ico-diamond-o mr-1"></span><?php echo _p('unfeature'); ?></a>
                    </li>
                    <li <?php if (isset ( $this->_aVars['aUser']['is_featured'] ) && $this->_aVars['aUser']['is_featured']): ?> style="display:none;" <?php endif; ?> class="user_feature_member">
                    <a href="#" title="<?php echo _p('feature_this_member'); ?>" onclick="$(this).parent().hide(); $(this).parents('.dropdown-menu').find('.user_unfeature_member:first').show(); $.ajaxCall('user.feature', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;feature=1&amp;type=1&reload=1'); return false;"><span class="ico ico-diamond-o mr-1"></span><?php echo _p('feature'); ?></a>
                    </li>
                </ul>
            </div>
<?php endif; ?>
        </div>


<?php if (Phpfox ::isUser() && $this->_aVars['aUser']['user_id'] != Phpfox ::getUserId()): ?>
        <div class="dropup friend-actions">
<?php if (Phpfox ::isUser() && Phpfox ::isModule('friend') && empty ( $this->_aVars['is_friend'] )): ?>
<?php if (! $this->_aVars['is_friend'] && isset ( $this->_aVars['aUser']['is_friend_request'] ) && $this->_aVars['aUser']['is_friend_request'] == 3): ?>
                <a href="#" onclick="return $Core.addAsFriend('<?php echo $this->_aVars['user_id']; ?>');" title="<?php echo _p('confirm_friend_request'); ?>" class="btn btn-md btn-default btn-round">
                    <span class="mr-1 ico ico-user2-check-o"></span>
<?php echo _p('confirm'); ?>
                </a>
<?php elseif (Phpfox ::getUserParam('friend.can_add_friends')): ?>
                <a href="#" onclick="return $Core.addAsFriend('<?php echo $this->_aVars['user_id']; ?>');" title="<?php echo _p('add_as_friend'); ?>" class="btn btn-md btn-default btn-round">
                    <span class="mr-1 ico ico-user1-plus-o"></span>
<?php echo _p('add_as_friend'); ?>
                </a>
<?php endif; ?>
<?php endif; ?>

<?php if (Phpfox ::isModule('friend') && ! empty ( $this->_aVars['is_friend'] )): ?>
            <a href="" data-toggle="dropdown" class="btn btn-md btn-default btn-round has-caret" title="<?php echo _p('friend_request_sent'); ?>">
<?php if ($this->_aVars['is_friend'] === true): ?>
                <span class="mr-1 ico ico-check"></span>
<?php echo _p('friend'); ?> <span class="ml-1 ico ico-caret-down"></span>
<?php else: ?>
                <span class="mr-1 ico ico-clock-o mr-1 friend-request-sent"></span>
<?php echo _p('request_sent'); ?> <span class="ml-1 ico ico-caret-down"></span>
<?php endif; ?>
            </a>
<?php endif; ?>

            <ul class="dropdown-menu dropdown-center">
<?php if (Phpfox ::isAppActive('Core_Messages') && User_Service_Privacy_Privacy ::instance()->hasAccess('' . $this->_aVars['aUser']['user_id'] . '' , 'mail.send_message' ) && ( ! Phpfox ::getUserParam('mail.restrict_message_to_friends') || ( Phpfox ::getUserParam('mail.restrict_message_to_friends') && $this->_aVars['is_friend'] ) )): ?>
                <li>
                    <a href="#" onclick="$Core.composeMessage({user_id: <?php echo $this->_aVars['aUser']['user_id']; ?>}); return false;">
                        <span class="mr-1 ico ico-pencilline-o"></span>
<?php echo _p('message'); ?>
                    </a>
                </li>
<?php endif; ?>

                <li>
                    <a href="#?call=report.add&amp;height=220&amp;width=400&amp;type=user&amp;id=<?php echo $this->_aVars['aUser']['user_id']; ?>" class="inlinePopup" title="<?php echo _p('report_this_user'); ?>">
                    <span class="ico ico-warning-o mr-1"></span>
<?php echo _p('report_this_user'); ?></a>
                </li>
<?php if (Phpfox ::isModule('friend') && isset ( $this->_aVars['is_friend'] ) && $this->_aVars['is_friend'] === true): ?>
                <li class="item-delete">
                    <a href="#" onclick="$Core.jsConfirm({}, function(){$.ajaxCall('friend.delete', 'friend_user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&reload=1');}, function(){}); return false;">
                        <span class="mr-1 ico ico-user2-del-o"></span>
<?php echo _p('remove_friend'); ?>
                    </a>
                </li>
<?php elseif (Phpfox ::isModule('friend') && ! empty ( $this->_aVars['is_friend'] ) && ! empty ( $this->_aVars['request_id'] )): ?>
                <li class="item-delete">
                    <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('friend.pending', array('id' => $this->_aVars['request_id'])); ?>" class="sJsConfirm">
                        <span class="mr-1 ico ico-user2-del-o"></span>
<?php echo _p('cancel_request'); ?>
                    </a>
                </li>
<?php endif; ?>
            </ul>
        </div>
<?php endif; ?>
        
    </div>
<?php if (isset ( $this->_aVars['aUser']['is_featured'] ) && $this->_aVars['aUser']['is_featured']): ?>
    <div class="item-featured" title="<?php echo _p('featured'); ?>">
        <span class="ico ico-diamond"></span>
    </div>
<?php endif; ?>
</div>
