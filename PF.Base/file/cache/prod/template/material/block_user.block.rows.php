<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:15 am */ ?>
<?php

?>
<div class="user_rows">
	<div class="user_rows_image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_120_square')); ?>
	</div>
	<div class="user_rows_inner">
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aUser']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aUser']['user_name'], ((empty($this->_aVars['aUser']['user_name']) && isset($this->_aVars['aUser']['profile_page_id'])) ? $this->_aVars['aUser']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aUser']['user_id'], $this->_aVars['aUser']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '</a>') . '</span>'; ?>

<?php if (isset ( $this->_aVars['bShowFriendInfo'] ) && $this->_aVars['bShowFriendInfo']): ?>
<?php Phpfox::getBlock('user.friendship', array('friend_user_id' => $this->_aVars['aUser']['user_id'],'type' => 'icon','extra_info' => true)); ?>
<?php endif; ?>

<!--        <?php Phpfox::getBlock('user.info', array('friend_user_id' => $this->_aVars['aUser']['user_id'],'number_of_info' => '1')); ?>-->
    </div>
</div>
