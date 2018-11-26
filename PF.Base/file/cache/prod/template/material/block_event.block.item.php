<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 10:08 am */ ?>
<article class="event-item" data-url="" data-uid="<?php echo $this->_aVars['aEvent']['event_id']; ?>" id="js_event_item_holder_<?php echo $this->_aVars['aEvent']['event_id']; ?>">
    <div class="item-outer">
        <div class="<?php if ($this->_aVars['bShowModerator']): ?> moderation_row<?php endif; ?>">
<?php if (! empty ( $this->_aVars['bShowModerator'] )): ?>
                <label class="item-checkbox">
                    <input type="checkbox" class="js_global_item_moderate" name="item_moderate[]" value="<?php echo $this->_aVars['aEvent']['event_id']; ?>" id="check<?php echo $this->_aVars['aEvent']['event_id']; ?>" />
                    <i class="ico ico-square-o"></i>
                </label>
<?php endif; ?>
        </div>
        <div class="item-icon">
<?php if (isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my' && ( isset ( $this->_aVars['aEvent']['view_id'] ) && $this->_aVars['aEvent']['view_id'] == 1 )): ?>
            <div class="sticky-label-icon sticky-pending-icon">
                <span class="flag-style-arrow"></span>
                <i class="ico ico-clock-o"></i>
            </div>
<?php endif; ?>
            <!-- Sponsor -->
<?php if ($this->_aVars['aEvent']['is_sponsor']): ?>
            <div class="sticky-label-icon sticky-sponsored-icon">
                <span class="flag-style-arrow"></span>
               <i class="ico ico-sponsor"></i>
            </div>
<?php endif; ?>
<?php if ($this->_aVars['aEvent']['is_featured']): ?>
            <!-- Featured -->
            <div class="sticky-label-icon sticky-featured-icon">
                <span class="flag-style-arrow"></span>
               <i class="ico ico-diamond"></i>
            </div>
<?php endif; ?>
        </div>
        <!-- image -->
        <a class="item-media" href="<?php echo $this->_aVars['aEvent']['url']; ?>">
            <span style="background-image: url(<?php if ($this->_aVars['aEvent']['image_path']):  echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aEvent']['server_id'],'title' => $this->_aVars['aEvent']['title'],'path' => 'event.url_image','file' => $this->_aVars['aEvent']['image_path'],'suffix' => '','return_url' => true));  else:  echo Phpfox::getParam('event.event_default_photo');  endif; ?>)"  alt="<?php echo $this->_aVars['aEvent']['title']; ?>"></span>
        </a>

        <div class="item-inner">
            <div class="item-top-info">
                <div class="item-title">
                    <a href="<?php echo $this->_aVars['aEvent']['url']; ?>" class="link" itemprop="url"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aEvent']['title']); ?></a>
                </div> 
                <div class="item-statistic">
                        <span class="item-count-like"><?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aEvent']['total_like']); ?> <?php if ($this->_aVars['aEvent']['total_like'] == 1):  echo _p('like_lowercase');  else:  echo _p('likes_lowercase');  endif; ?></span>
                        <span class="item-count-view"><?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aEvent']['total_view']); ?> <?php if ($this->_aVars['aEvent']['total_view'] == 1):  echo _p('view__l');  else:  echo _p('views_lowercase');  endif; ?></span>
                </div>
            </div>
            <div class="item-main-info">
                <div class="item-date-month" title="<?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aEvent']['start_time'], 'event.event_basic_information_time'); ?>">
                    <div class="item-date"><?php echo $this->_aVars['aEvent']['start_time_short_day']; ?></div>
                    <div class="item-month"><?php echo $this->_aVars['aEvent']['start_time_month']; ?></div>  
                    <div class="item-hour"><?php echo $this->_aVars['aEvent']['start_time_phrase_stamp']; ?></div>
                </div>
                <div class="item-info-detail">  
                    
                    <!-- author -->
                    <div class="item-author">
                        <span class="item-user"><?php echo _p('by'); ?> <?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aEvent']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aEvent']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aEvent']['user_name'], ((empty($this->_aVars['aEvent']['user_name']) && isset($this->_aVars['aEvent']['profile_page_id'])) ? $this->_aVars['aEvent']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aEvent']['user_id'], $this->_aVars['aEvent']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aEvent']['user_id']) ? '' : '</a>') . '</span>'; ?> </span>
                    </div>
                    <!-- location -->
                    <div class="item-location"> 
                    <span class="ico ico-checkin-o"></span>
                        <span class="item-info"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aEvent']['location']); ?></span>
                    </div>
                    <div class="item-time">
                        <span class="ico ico-sandclock-end-o"></span>
                        <span class="item-info" title="<?php echo $this->_aVars['aEvent']['end_time_phrase_stamp']; ?> - <?php echo $this->_aVars['aEvent']['end_time_micro']; ?>"><?php echo $this->_aVars['aEvent']['end_time_phrase_stamp']; ?> - <?php echo $this->_aVars['aEvent']['end_time_micro']; ?></span>
                    </div>
                </div>
            </div>
<?php if ($this->_aVars['aEvent']['hasPermission']): ?>
            <div class="item-option">
                <div class="dropdown">
                    <a type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="ico ico-gear-o"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <?php
						Phpfox::getLib('template')->getBuiltFile('event.block.menu');
						?>
                    </ul>
                </div>
            </div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'invites'): ?>
                <div class="item-bottom-info">
                    <?php
						Phpfox::getLib('template')->getBuiltFile('event.block.rsvp-action');
						?>
                    <div class="item-count-attending">
                        <span><?php if (isset ( $this->_aVars['aEvent']['total_attending'] ) && $this->_aVars['aEvent']['total_attending'] > 0): ?> <?php echo $this->_aVars['aEvent']['total_attending']; ?> <?php echo _p('attending');  endif; ?></span>
                    </div>
                </div>
<?php endif; ?>
        </div>
    </div>
</article>
