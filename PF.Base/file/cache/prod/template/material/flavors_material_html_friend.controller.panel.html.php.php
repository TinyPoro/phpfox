<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 2:58 am */ ?>
<?php

 echo $this->_aVars['sScript'];  if ($this->_aVars['aFriends']): ?>
<ul class="panel-items">
<?php if (count((array)$this->_aVars['aFriends'])):  $this->_aPhpfoxVars['iteration']['notifications'] = 0;  foreach ((array) $this->_aVars['aFriends'] as $this->_aVars['aNotification']):  $this->_aPhpfoxVars['iteration']['notifications']++; ?>

	<li id="drop_down_<?php echo $this->_aVars['aNotification']['request_id']; ?>" class="panel-item <?php if (! $this->_aVars['aNotification']['is_seen']): ?> is_new<?php endif; ?>"> 
		<div href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aNotification']['user_name']); ?>" class="panel-item-content">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aNotification'],'suffix' => '_120_square')); ?>

			<div class="content">
				<div class="name"><?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aNotification']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aNotification']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aNotification']['user_name'], ((empty($this->_aVars['aNotification']['user_name']) && isset($this->_aVars['aNotification']['profile_page_id'])) ? $this->_aVars['aNotification']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aNotification']['user_id'], $this->_aVars['aNotification']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aNotification']['user_id']) ? '' : '</a>') . '</span>'; ?></div>
				<div class="info">
<?php if ($this->_aVars['aNotification']['relation_data_id'] > 0): ?>
					<div class="extra_info_link">
						<i class="fa fa-heart"></i> <?php echo _p('relationship_request_for'); ?> "<?php echo $this->_aVars['aNotification']['relation_name']; ?>"
					</div>
<?php else: ?>
<?php echo $this->_aVars['aNotification']['mutual_friends']['total']; ?> <span class="to-lower"><?php echo _p('mutual_friends'); ?></span>
<?php endif; ?>
				</div>
			</div>
			<div class="panel-actions">
<?php if ($this->_aVars['aNotification']['relation_data_id'] > 0): ?>
					<span class="btn-action accept s-3" onclick="$(this).parents('.drop_data_action').find('.js_drop_data_add').show(); <?php if ($this->_aVars['aNotification']['relation_data_id'] > 0): ?> $.ajaxCall('custom.processRelationship', 'relation_data_id=<?php echo $this->_aVars['aNotification']['relation_data_id']; ?>&amp;type=accept&amp;request_id=<?php echo $this->_aVars['aNotification']['request_id']; ?>'); <?php else: ?> $.ajaxCall('friend.processRequest', 'type=yes&amp;user_id=<?php echo $this->_aVars['aNotification']['user_id']; ?>&amp;request_id=<?php echo $this->_aVars['aNotification']['request_id']; ?>&amp;inline=true'); <?php endif; ?> event.stopPropagation();">
						<span class="ico ico-check"></span>
					</span>
					<span class="btn-action deny s-3" onclick="$(this).parents('.drop_data_action').find('.js_drop_data_add').show(); <?php if ($this->_aVars['aNotification']['relation_data_id'] > 0): ?> $.ajaxCall('custom.processRelationship', 'relation_data_id=<?php echo $this->_aVars['aNotification']['relation_data_id']; ?>&amp;type=deny&amp;request_id=<?php echo $this->_aVars['aNotification']['request_id']; ?>'); <?php else: ?> $.ajaxCall('friend.processRequest', 'type=no&amp;user_id=<?php echo $this->_aVars['aNotification']['user_id']; ?>&amp;request_id=<?php echo $this->_aVars['aNotification']['request_id']; ?>&amp;inline=true'); <?php endif; ?> event.stopPropagation();">
						 <span class="ico ico-close"></span>
					</span>
<?php else: ?>
					<span class="btn-action accept s-3" onclick="$.ajaxCall('friend.processRequest', 'type=yes&amp;user_id=<?php echo $this->_aVars['aNotification']['user_id']; ?>&amp;request_id=<?php echo $this->_aVars['aNotification']['request_id']; ?>&amp;inline=true'); event.stopPropagation();">
						<span class="ico ico-check"></span>
					</span>
					<span class="btn-action deny s-3" onclick="$.ajaxCall('friend.processRequest', 'type=no&amp;user_id=<?php echo $this->_aVars['aNotification']['user_id']; ?>&amp;request_id=<?php echo $this->_aVars['aNotification']['request_id']; ?>&amp;inline=true'); event.stopPropagation();">
						<span class="ico ico-close"></span>
					</span>
<?php endif; ?>
			</div>
		</div>
	</li>
<?php endforeach; endif; ?>
</ul>
<?php else: ?>
<div class="empty-message">
	<img src="<?php echo Phpfox::getParam('core.path_actual'); ?>PF.Site/flavors/material/assets/images/empty-message.svg" alt="">
<?php echo _p('no_new_friend_requests'); ?>
</div>
<?php endif; ?>
