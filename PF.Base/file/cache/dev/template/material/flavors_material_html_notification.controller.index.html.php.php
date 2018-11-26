<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 4:03 am */ ?>
<?php 

 

 if (isset ( $this->_aVars['bNoContent'] ) && $this->_aVars['bNoContent']):  else: ?>
<?php if (count ( $this->_aVars['aNotifications'] )): ?>
    <div id="js_notification_holder">
        <ul class="notification_holder">
<?php if (count((array)$this->_aVars['aNotifications'])):  $this->_aPhpfoxVars['iteration']['notifications'] = 0;  foreach ((array) $this->_aVars['aNotifications'] as $this->_aVars['sDate'] => $this->_aVars['aSubNotifications']):  $this->_aPhpfoxVars['iteration']['notifications']++; ?>

            <li class="notification_date"><?php echo $this->_aVars['sDate']; ?></li>
<?php if (count((array)$this->_aVars['aSubNotifications'])):  foreach ((array) $this->_aVars['aSubNotifications'] as $this->_aVars['aNotification']): ?>
                <li id="js_notification_<?php echo $this->_aVars['aNotification']['notification_id']; ?>" class="js_notification_<?php echo $this->_aVars['aNotification']['notification_id']; ?> all-notification-item <?php if (! $this->_aVars['aNotification']['is_read']): ?> is_new<?php endif; ?>">
                    <div class="item-outer">
                        <div class="item-avatar">   
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aNotification'],'max_width' => '50','max_height' => '50','suffix' => '_50_square')); ?>
                        </div>
                        <div class="item-inner">
                            <a href="<?php echo $this->_aVars['aNotification']['link']; ?>" class="main_link<?php if (! $this->_aVars['aNotification']['is_read']): ?> is_new<?php endif; ?>">
<?php echo $this->_aVars['aNotification']['message']; ?>
                            </a>
                            <span class="extra_info">
<?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aNotification']['time_stamp']); ?>
                            </span>
                            <a href=" <?php echo $this->_aVars['aNotification']['link']; ?>" class="main-link-bg-click" onclick="$.ajaxCall('notification.markAsRead', 'notification_id=<?php echo $this->_aVars['aNotification']['notification_id']; ?>');"></a>
                            
                        </div>
                        <span class="notification_delete">
                            <a href="#" class="js_hover_title" onclick="$.ajaxCall('notification.delete', 'id=<?php echo $this->_aVars['aNotification']['notification_id']; ?>'); return false;">
                                <span class="ico ico-close"></span>
                                <span class="js_hover_info">
<?php echo _p('delete_this_notification'); ?>
                                </span>
                            </a>
                        </span>
                    </div>
                </li>
<?php endforeach; endif; ?>
<?php endforeach; endif; ?>
<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager'); ?>
        </ul>
<?php if (! PHPFOX_IS_AJAX): ?>
        <ul class="table_clear_button" id="js_notification_list_delete">
            <li><input type="button" value="<?php echo _p('delete_all_notifications'); ?>" class="button" onclick="$Core.processForm('#js_notification_list_delete'); $(this).ajaxCall('notification.removeAll', 'redirect=1'); return false;" /></li>
            <li class="table_clear_ajax"></li>
        </ul>
<?php endif; ?>
        <div class="clear"></div>
    </div>
<?php endif; ?>

    <div id="js_no_notifications"<?php if (count ( $this->_aVars['aNotifications'] )): ?> style="display:none;"<?php endif; ?>>
        <div class="extra_info">
<?php echo _p('no_new_notifications'); ?>
        </div>
    </div>
<?php endif; ?>
