<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 10:38 am */ ?>
<article class="event-item" data-url="" data-uid="<?php echo $this->_aVars['aEvent']['event_id']; ?>" id="js_event_item_holder_<?php echo $this->_aVars['aEvent']['event_id']; ?>">
    <div class="item-outer">

        <!-- image -->
        <a class="item-media" href="<?php echo $this->_aVars['aEvent']['url']; ?>">
            <span style="background-image: url(<?php if ($this->_aVars['aEvent']['image_path']):  echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aEvent']['server_id'],'title' => $this->_aVars['aEvent']['title'],'path' => 'event.url_image','file' => $this->_aVars['aEvent']['image_path'],'suffix' => '','return_url' => true));  else:  echo Phpfox::getParam('event.event_default_photo');  endif; ?>)"  alt="<?php echo $this->_aVars['aEvent']['title']; ?>"></span>
        </a>

        <div class="item-inner">
            <!-- title -->

            <div class="item-title">
<?php if (isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my'): ?>
<?php if (( isset ( $this->_aVars['aEvent']['view_id'] ) && $this->_aVars['aEvent']['view_id'] == 1 )): ?>
                        <span class="pending-label"><?php echo _p('pending_label'); ?></span>
<?php endif; ?>
<?php endif; ?>
                <a href="<?php echo $this->_aVars['aEvent']['url']; ?>" class="link" itemprop="url"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aEvent']['title']); ?></a>
            </div>

            <!-- location -->
            <div class="item-location">
            <span class="ico ico-checkin-o"></span>
                <span class="item-info"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aEvent']['location']); ?></span>
            </div>
            
            <div class="item-time-date">
                <span class="ico ico-calendar-o"></span>
                <span class="item-info"><?php echo $this->_aVars['aEvent']['start_time_micro']; ?> - <?php echo $this->_aVars['aEvent']['end_time_micro']; ?></span>
            </div>

            <div class="item-time-hour"> 
                <span class="ico ico-clock-o"></span>
                <span class="item-info"><?php echo $this->_aVars['aEvent']['start_time_phrase_stamp']; ?> - <?php echo $this->_aVars['aEvent']['end_time_phrase_stamp']; ?></span>
            </div>       
        </div>
    </div>
</article>
