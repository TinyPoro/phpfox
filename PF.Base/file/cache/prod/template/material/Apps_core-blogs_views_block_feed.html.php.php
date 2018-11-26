<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:31 am */ ?>
<?php


?>
<div class="blog-feed <?php if ($this->_aVars['sImageSrc']): ?>has-image<?php endif; ?>">
<?php if ($this->_aVars['sImageSrc']): ?>
    <div class="blog-feed-image">
        <a href="<?php echo $this->_aVars['sLink']; ?>">
            <span style="background-image: url(<?php echo $this->_aVars['sImageSrc']; ?>)"></span>
        </a>
    </div>
<?php endif; ?>
    <div class="blog-feed-info">
        <div class="blog-title"><a href="<?php echo $this->_aVars['sLink']; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aItem']['title']); ?></a></div>
        <div class="blog-info-general">
            <span class="blog-datetime"><?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aItem']['time_stamp'], 'core.global_update_time'); ?></span>
<?php if (! empty ( $this->_aVars['sCategory'] )): ?>
            <span class="blog-catgory"><?php echo _p('category'); ?>: <?php echo $this->_aVars['sCategory']; ?></span>
<?php endif; ?>
            <span class="blog-views"><?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aItem']['total_view']); ?> <?php if ($this->_aVars['aItem']['total_view'] == 1):  echo _p('view_lowercase');  else:  echo _p('views_lowercase');  endif; ?></span>
        </div>
        <div class="blog-content item_content"><?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('parse.output')->feedStrip(Phpfox::getLib('phpfox.parse.bbcode')->stripCode($this->_aVars['aItem']['text'])), 55); ?></div>
    </div>
</div>
