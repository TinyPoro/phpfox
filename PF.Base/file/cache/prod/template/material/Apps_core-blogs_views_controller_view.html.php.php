<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:30 am */ ?>
<?php 

?>
<div class="blog-view">
	<div class="blog-info">
        <div class="blog-info-image"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aItem'],'suffix' => '_50_square')); ?></div>
        <div class="blog-info-main">
            <span class="blog-author"><?php echo _p('by_user', array('full_name' => '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aItem']['user_name'] . '" itemprop="author">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aItem']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aItem']['user_name'], ((empty($this->_aVars['aItem']['user_name']) && isset($this->_aVars['aItem']['profile_page_id'])) ? $this->_aVars['aItem']['profile_page_id'] : null))) . '" rel="author" >') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aItem']['user_id'], $this->_aVars['aItem']['full_name']), 50, '...') . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aItem']['user_id']) ? '' : '</a>') . '</span>')); ?></span>
		    <span class="blog-time"><?php echo _p('on'); ?> <?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aItem']['time_stamp'], 'core.global_update_time'); ?></span>
        </div>
	</div>
	<div class="blog-total-viewlike item-comment">
<?php if ($this->_aVars['aItem']['is_approved'] == 1): ?>
            <div>
<?php Phpfox::getBlock('feed.mini-feed-action', array()); ?>
            </div>
<?php endif; ?>
        <span class="blog-total-view item-total-view"><span class="blog-view-number blog-number"><?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aItem']['total_view']); ?></span> <?php if ($this->_aVars['aItem']['total_view'] == 1):  echo _p('view_lowercase');  else:  echo _p('views_lowercase');  endif; ?></span>
    </div>
<?php if ($this->_aVars['aItem']['permission_enable']): ?>
        <div class="item_bar blog-button-option">
            <div class="item_bar_action_holder">
                <a data-toggle="dropdown" class="item_bar_action"><span><?php echo _p('actions'); ?></span><i class="ico ico-gear-o"></i></a>
                <ul class="dropdown-menu dropdown-menu-right" id="js_blog_entry_options_<?php echo $this->_aVars['aItem']['blog_id']; ?>">
                    <?php
						Phpfox::getLib('template')->getBuiltFile('blog.block.link');
						?>
                </ul>
            </div>
        </div>
<?php endif; ?>
<?php if ($this->_aVars['aItem']['is_approved'] != 1): ?>
        <?php
						Phpfox::getLib('template')->getBuiltFile('core.block.pending-item-action');
						?>
<?php endif; ?>
<?php if (! empty ( $this->_aVars['aItem']['image'] )): ?>
    <a class="blog-image" href="<?php echo Phpfox::permalink('blog', $this->_aVars['aItem']['blog_id'], $this->_aVars['aItem']['title'], false, null, (array) array (
)); ?>">
        <span style="background-image: url(<?php echo $this->_aVars['aItem']['image']; ?>)"></span>
    </a>
<?php endif; ?>
    <div class="blog-post item_content item_view_content">
<?php echo Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['aItem']['text']); ?>
    </div>
<?php if ($this->_aVars['aItem']['total_attachment']): ?>
        <span>
<?php Phpfox::getBlock('attachment.list', array('sType' => 'blog','iItemId' => $this->_aVars['aItem']['blog_id'])); ?>
        </span>
<?php endif; ?>
<?php if (( isset ( $this->_aVars['sCategories'] ) && $this->_aVars['sCategories'] )): ?>
        <div class="blog-category">
<?php echo _p('posted_in'); ?>: <?php echo $this->_aVars['sCategories']; ?>
        </div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aItem']['tag_list'] )): ?>
<?php Phpfox::getBlock('tag.item', array('sType' => $this->_aVars['sTagType'],'sTags' => $this->_aVars['aItem']['tag_list'],'iItemId' => $this->_aVars['aItem']['blog_id'],'iUserId' => $this->_aVars['aItem']['user_id'],'sMicroKeywords' => 'keywords')); ?>
<?php endif; ?>

<?php Phpfox::getBlock('share.addthis', array('url' => $this->_aVars['aItem']['bookmark_url'],'title' => $this->_aVars['aItem']['title'])); ?>

<?php (($sPlugin = Phpfox_Plugin::get('blog.template_controller_view_end')) ? eval($sPlugin) : false); ?>
<?php if ($this->_aVars['aItem']['is_approved'] == 1): ?>
        <div class="item-detail-feedcomment">
<?php Phpfox::getBlock('feed.comment', array()); ?>
        </div>
<?php endif; ?>

</div>

