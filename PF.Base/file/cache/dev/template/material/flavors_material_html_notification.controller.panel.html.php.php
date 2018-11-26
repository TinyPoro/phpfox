<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 3:25 am */ ?>
<?php

 echo $this->_aVars['sScript'];  if ($this->_aVars['aNotifications']): ?>
<ul class="panel-items">
<?php if (count((array)$this->_aVars['aNotifications'])):  $this->_aPhpfoxVars['iteration']['notifications'] = 0;  foreach ((array) $this->_aVars['aNotifications'] as $this->_aVars['aNotification']):  $this->_aPhpfoxVars['iteration']['notifications']++; ?>

	<li id="js_notification_<?php echo $this->_aVars['aNotification']['notification_id']; ?>" class="js_notification_<?php echo $this->_aVars['aNotification']['notification_id']; ?> panel-item <?php if (! $this->_aVars['aNotification']['is_read']): ?> is_new<?php endif; ?>">
		<div class="panel-item-content">
			<a href="<?php echo $this->_aVars['aNotification']['link']; ?>" onclick="$.ajaxCall('notification.markAsRead', 'notification_id=<?php echo $this->_aVars['aNotification']['notification_id']; ?>');">

<?php if (isset ( $this->_aVars['aNotification']['custom_icon'] )): ?>
					<i class="fa <?php echo $this->_aVars['aNotification']['custom_icon']; ?>"></i>
<?php else: ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aNotification'],'max_width' => '50','max_height' => '50','suffix' => '_50_square','no_link' => true)); ?>
<?php endif; ?>
				<div class="content">
					<div class="notification-info">
<?php echo $this->_aVars['aNotification']['message']; ?>
<?php if (isset ( $this->_aVars['aNotification']['custom_image'] )): ?>
<?php echo $this->_aVars['aNotification']['custom_image']; ?>
<?php endif; ?>
					</div>
					<div class="time">
<?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aNotification']['time_stamp']); ?>
					</div>
				</div>
			</a>
			
			<div class="notification-delete s-3">
				<a href="#" class="js_hover_title noToggle remove-btn" onclick="$.ajaxCall('notification.delete', 'id=<?php echo $this->_aVars['aNotification']['notification_id']; ?>'); return false;">
					<span class="ico ico-close"></span>
					<span class="js_hover_info">
<?php echo _p('delete_this_notification'); ?>
					</span>
				</a>
			</div>
		</div>
	</li>
<?php endforeach; endif; ?>
</ul>
<?php else: ?>
<div class="empty-message">
	<img src="<?php echo Phpfox::getParam('core.path_actual'); ?>PF.Site/flavors/material/assets/images/empty-notify.svg" alt="">
<?php echo _p('no_new_notifications'); ?>
</div>
<?php endif; ?>
