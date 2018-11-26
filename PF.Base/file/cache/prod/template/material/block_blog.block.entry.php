<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:31 am */ ?>
<?php


?>
<div class="blog-item " data-url="" data-uid="<?php echo $this->_aVars['aItem']['blog_id']; ?>" id="js_blog_entry_<?php echo $this->_aVars['aItem']['blog_id']; ?>">
    <!-- moderate_checkbox -->
    <div class="<?php if (! empty ( $this->_aVars['bShowModerator'] )): ?> moderation_row<?php endif; ?>">
<?php if (! empty ( $this->_aVars['bShowModerator'] ) && ! isset ( $this->_aVars['bBlogView'] )): ?>
        <label class="item-checkbox">
            <input type="checkbox" class="js_global_item_moderate" name="item_moderate[]" value="<?php echo $this->_aVars['aItem']['blog_id']; ?>" id="check<?php echo $this->_aVars['aItem']['blog_id']; ?>" />
            <i class="ico ico-square-o"></i>
        </label>
<?php endif; ?>
    </div>
    <div class="item-outer <?php if (empty ( $this->_aVars['aItem']['image'] )): ?>none-image<?php endif; ?> <?php if (( isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my' ) && $this->_aVars['aItem']['is_approved'] == INACTIVATE && ! isset ( $this->_aVars['bBlogView'] )): ?>has-pending<?php endif; ?> <?php if ($this->_aVars['aItem']['is_sponsor']): ?>has-sponsor<?php endif; ?> <?php if ($this->_aVars['aItem']['is_featured']): ?>has-feature<?php endif; ?>">
        <!-- show in media from 991px  -->
        <div class="item-title-author-responsive" style="display: none">
<?php if (! isset ( $this->_aVars['bBlogView'] )): ?>
<?php if (isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my'): ?>
<?php if ($this->_aVars['aItem']['post_status'] == BLOG_STATUS_DRAFT): ?>
                        <!-- Draft mark-->
                        <span class="blog_status_draft"><?php echo _p('draft_info'); ?></span>
<?php endif; ?>
<?php endif; ?>
                <!-- title -->
                <div class="item-title">
                    <a href="<?php echo Phpfox::permalink('blog', $this->_aVars['aItem']['blog_id'], $this->_aVars['aItem']['title'], false, null, (array) array (
)); ?>" id="js_blog_edit_inner_title<?php echo $this->_aVars['aItem']['blog_id']; ?>" class="link ajax_link" itemprop="url"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aItem']['title']); ?></a>
                </div>
                <!-- author -->
                <div class="item-author dot-separate">
                    <span class="item-author-info"><?php echo _p('by_full_name', array('full_name' => '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aItem']['user_name'] . '" itemprop="author">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aItem']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aItem']['user_name'], ((empty($this->_aVars['aItem']['user_name']) && isset($this->_aVars['aItem']['profile_page_id'])) ? $this->_aVars['aItem']['profile_page_id'] : null))) . '" rel="author" >') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aItem']['user_id'], $this->_aVars['aItem']['full_name']), 50, '...') . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aItem']['user_id']) ? '' : '</a>') . '</span>')); ?></span>
                    <span><?php echo _p('on'); ?> <?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aItem']['time_stamp'], 'core.global_update_time'); ?><span><?php (($sPlugin = Phpfox_Plugin::get('blog.template_block_entry_date_end')) ? eval($sPlugin) : false); ?></span></span>
                </div>
<?php endif; ?>
        </div>
<?php if (! empty ( $this->_aVars['aItem']['image'] )): ?>
            <!-- image -->
            <a class="item-media-src" href="<?php echo Phpfox::permalink('blog', $this->_aVars['aItem']['blog_id'], $this->_aVars['aItem']['title'], false, null, (array) array (
)); ?>">
                <span style="background-image: url(<?php echo $this->_aVars['aItem']['image']; ?>)"></span>
                <div class="item-icon">
<?php if (( isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my' ) && $this->_aVars['aItem']['is_approved'] == INACTIVATE): ?>
                        <div class="sticky-label-icon sticky-pending-icon">
                            <span class="flag-style-arrow"></span>
                            <i class="ico ico-clock-o"></i>
                        </div>
<?php endif; ?>
<?php if ($this->_aVars['aItem']['is_sponsor']): ?>
                    <!-- Sponsor -->
                    <div class="sticky-label-icon sticky-sponsored-icon">
                        <span class="flag-style-arrow"></span>
                        <i class="ico ico-sponsor"></i>
                    </div>
<?php endif; ?>
<?php if ($this->_aVars['aItem']['is_featured']): ?>
                    <!-- Featured -->
                    <div class="sticky-label-icon sticky-featured-icon">
                        <span class="flag-style-arrow"></span>
                        <i class="ico ico-diamond"></i>
                    </div>
<?php endif; ?>
                </div>
            </a>
            <!-- when no image -->
<?php else: ?>
            <div class="item-icon">
<?php if (( isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my' ) && $this->_aVars['aItem']['is_approved'] == INACTIVATE && ! isset ( $this->_aVars['bBlogView'] )): ?>
                    <div class="sticky-label-icon sticky-pending-icon">
                        <span class="flag-style-arrow"></span>
                        <i class="ico ico-clock-o"></i>
                    </div>
<?php endif; ?>
<?php if ($this->_aVars['aItem']['is_sponsor']): ?>
                <!-- Sponsor -->
                <div class="sticky-label-icon sticky-sponsored-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-sponsor"></i>
                </div>
<?php endif; ?>
<?php if ($this->_aVars['aItem']['is_featured']): ?>
                <!-- Featured -->
                <div class="sticky-label-icon sticky-featured-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-diamond"></i>
                </div>
<?php endif; ?>
            </div>
<?php endif; ?>
        <div class="item-inner">
<?php if (! isset ( $this->_aVars['bBlogView'] )): ?>
<?php if (isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my'): ?>
<?php if ($this->_aVars['aItem']['post_status'] == BLOG_STATUS_DRAFT): ?>
                        <!-- Draft mark-->
                        <span class="blog_status_draft"><?php echo _p('draft_info'); ?></span>
<?php endif; ?>
<?php endif; ?>
                <!-- title -->
                <div class="item-title">
                    <a href="<?php echo Phpfox::permalink('blog', $this->_aVars['aItem']['blog_id'], $this->_aVars['aItem']['title'], false, null, (array) array (
)); ?>" id="js_blog_edit_inner_title<?php echo $this->_aVars['aItem']['blog_id']; ?>" class="link ajax_link" itemprop="url"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aItem']['title']); ?></a>
                </div>
                <!-- author -->
                <div class="item-author dot-separate">
                    <span class="item-author-info"><?php echo _p('by_full_name', array('full_name' => '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aItem']['user_name'] . '" itemprop="author">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aItem']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aItem']['user_name'], ((empty($this->_aVars['aItem']['user_name']) && isset($this->_aVars['aItem']['profile_page_id'])) ? $this->_aVars['aItem']['profile_page_id'] : null))) . '" rel="author" >') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aItem']['user_id'], $this->_aVars['aItem']['full_name']), 50, '...') . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aItem']['user_id']) ? '' : '</a>') . '</span>')); ?></span>
                    <span><?php echo _p('on'); ?> <?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aItem']['time_stamp'], 'core.global_update_time'); ?><span><?php (($sPlugin = Phpfox_Plugin::get('blog.template_block_entry_date_end')) ? eval($sPlugin) : false); ?></span></span>
                </div>
<?php endif; ?>
            <!-- description -->
            <div class="item-desc item_content item_view_content">
<?php if (isset ( $this->_aVars['bBlogView'] )): ?>
<?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.search')->highlight('search', Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['aItem']['text'])), 500); ?>
<?php else: ?>
<?php if (! empty ( $this->_aVars['aItem']['text'] )): ?>
<?php if (! empty ( $this->_aVars['iShorten'] )): ?>
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.search')->highlight('search', Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('phpfox.parse.bbcode')->stripCode(strip_tags($this->_aVars['aItem']['text'])))), 500), $this->_aVars['iShorten'], '...'); ?>
<?php else: ?>
<?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.search')->highlight('search', Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('phpfox.parse.bbcode')->stripCode(strip_tags($this->_aVars['aItem']['text'])))), 500); ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
            </div>
            
<?php if (! isset ( $this->_aVars['bBlogView'] )): ?>
                <div class="total-view">
                    <span>
<?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aItem']['total_view']); ?> <?php if ($this->_aVars['aItem']['total_view'] == 1):  echo _p('view_lowercase');  else:  echo _p('views_lowercase');  endif; ?>
                    </span>
                    <span>
<?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aItem']['total_like']); ?> <?php if ($this->_aVars['aItem']['total_like'] == 1):  echo _p('like_lowercase');  else:  echo _p('likes_lowercase');  endif; ?>
                    </span>
                </div>
                <!-- dropdown -->
<?php if (! empty ( $this->_aVars['aItem']['permission_enable'] )): ?>
                <div class="item-option blog-button-option">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="ico ico-gear-o"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" id="js_blog_entry_options_<?php echo $this->_aVars['aItem']['blog_id']; ?>">
                            <?php
						Phpfox::getLib('template')->getBuiltFile('blog.block.link');
						?>
                        </ul>
                    </div>
                </div>
<?php endif; ?>
<?php endif; ?>
            <!-- others -->
<?php if (isset ( $this->_aVars['bBlogView'] ) && $this->_aVars['aItem']['total_attachment']): ?>
<?php Phpfox::getBlock('attachment.list', array('sType' => 'blog','iItemId' => $this->_aVars['aItem']['blog_id'])); ?>
<?php endif; ?>
<?php (($sPlugin = Phpfox_Plugin::get('blog.template_block_entry_text_end')) ? eval($sPlugin) : false); ?>
<?php (($sPlugin = Phpfox_Plugin::get('blog.template_block_entry_end')) ? eval($sPlugin) : false); ?>
        </div>
    </div>
</div>

