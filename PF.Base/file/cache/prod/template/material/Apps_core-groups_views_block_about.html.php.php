<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:15 am */ ?>
<?php

?>
<div class="block">
    <div class="title">
<?php echo _p('Group Info'); ?>
    </div>
    <div class="content item-group-about <?php if (! isset ( $this->_aVars['aUser'] )): ?>group-hide-founder<?php endif; ?>">
<?php if (isset ( $this->_aVars['aUser'] )): ?>
        <div class="item-outer">
            <div class="user_rows_image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_50_square')); ?>
            </div>
            <div class="item-inner">
                <div class="item-title"><?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aUser']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aUser']['user_name'], ((empty($this->_aVars['aUser']['user_name']) && isset($this->_aVars['aUser']['profile_page_id'])) ? $this->_aVars['aUser']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aUser']['user_id'], $this->_aVars['aUser']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_id']) ? '' : '</a>') . '</span>'; ?></div>
                <div class="item-info"><?php echo _p('Founder'); ?></div>
            </div>
            
        </div>
<?php endif; ?>
<?php if (! empty ( $this->_aVars['page']['text_parsed'] )): ?>
        <div class="item-desc item_view_content">
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['page']['text_parsed']), 170, 'more', true); ?>
        </div>
<?php endif; ?>
    </div>
</div>
