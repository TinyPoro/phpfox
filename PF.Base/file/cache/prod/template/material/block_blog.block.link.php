<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:30 am */ ?>
<?php 

 if ($this->_aVars['aItem']['canEdit']): ?>
	<li><a title="<?php echo _p('edit_this_blog'); ?>" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('blog.add', array('id' => $this->_aVars['aItem']['blog_id'])); ?>"><span class="ico ico-pencilline-o mr-1"></span><?php echo _p('edit'); ?></a></li>
    <li role="separator" class="divider"></li>
<?php endif; ?>
  
<?php if ($this->_aVars['aItem']['canPublish']): ?>
    <li><a title="<?php echo _p('publish_this_blog'); ?>" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('blog.add', array('id' => $this->_aVars['aItem']['blog_id'],'publish' => 1)); ?>"><span class="ico ico-upload mr-1"></span><?php echo _p('publish'); ?></a></li>
<?php endif; ?>
  
<?php if ($this->_aVars['aItem']['canApprove']): ?>
<?php if (! empty ( $this->_aVars['bBlogView'] )): ?>
        <li><a href="javascript:void(0)" onclick="$.ajaxCall('blog.approve', 'id=<?php echo $this->_aVars['aItem']['blog_id']; ?>'); return false;" title="<?php echo _p('approve_this_blog'); ?>"><span class="ico ico-check-square-alt mr-1"></span><?php echo _p('approve'); ?></a></li>
<?php elseif (isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'pending'): ?>
        <li><a href="javascript:void(0)" onclick="$.ajaxCall('blog.approve', 'inline=true&amp;id=<?php echo $this->_aVars['aItem']['blog_id']; ?>'); return false;" title="<?php echo _p('approve_this_blog'); ?>"><span class="ico ico-check-square-alt mr-1"></span><?php echo _p('approve'); ?></a></li>
<?php endif;  endif; ?>

<?php if ($this->_aVars['aItem']['canSponsorInFeed']): ?>
<li>
<?php if (Phpfox ::isModule('feed') && Phpfox ::getService('feed')->canSponsoredInFeed('blog', $this->_aVars['aItem']['blog_id'] ) === true): ?>
    <a title="<?php echo _p('sponsor_in_feed'); ?>" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('where' => 'feed','section' => 'blog','item' => $this->_aVars['aItem']['blog_id'])); ?>">
        <span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_in_feed'); ?>
    </a>
<?php else: ?>
    <a title="<?php echo _p('unsponsor_in_feed'); ?>" href="javascript:void(0)" onclick="$.ajaxCall('ad.removeSponsor', 'type_id=blog&item_id=<?php echo $this->_aVars['aItem']['blog_id']; ?>', 'GET'); return false;">
        <span class="ico ico-sponsor mr-1"></span><?php echo _p("unsponsor_in_feed"); ?>
    </a>
<?php endif; ?>
</li>
<?php endif; ?>

<?php if ($this->_aVars['aItem']['is_approved'] == 1 && $this->_aVars['aItem']['post_status'] == BLOG_STATUS_PUBLIC):  if ($this->_aVars['aItem']['canSponsor'] || $this->_aVars['aItem']['canFeature'] || $this->_aVars['aItem']['canPurchaseSponsor']): ?>
<?php if ($this->_aVars['aItem']['canSponsor']): ?>
<?php if (! $this->_aVars['aItem']['is_sponsor']): ?>
        <li id="js_photo_sponsor_<?php echo $this->_aVars['aItem']['blog_id']; ?>">
            <a title="<?php echo _p('sponsor_this_blog'); ?>" href="javascript:void(0)" onclick="$.ajaxCall('blog.sponsor','blog_id=<?php echo $this->_aVars['aItem']['blog_id']; ?>&type=1'); return false;">
                <span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_this_blog'); ?>
            </a>
        </li>
<?php else: ?>
        <li id="js_blog_unsponsor_<?php echo $this->_aVars['aItem']['blog_id']; ?>">
            <a title="<?php echo _p('unsponsor_this_blog'); ?>" href="javascript:void(0)" onclick="$.ajaxCall('blog.sponsor','blog_id=<?php echo $this->_aVars['aItem']['blog_id']; ?>&type=0'); return false;">
                <span class="ico ico-sponsor mr-1"></span><?php echo _p('unsponsor_this_blog'); ?>
            </a>
        </li>
<?php endif; ?>
<?php elseif ($this->_aVars['aItem']['canPurchaseSponsor']): ?>
        <li>
<?php if (! $this->_aVars['aItem']['is_sponsor']): ?>
            <a title="<?php echo _p('sponsor_this_blog'); ?>" href="<?php echo Phpfox::permalink('ad.sponsor', $this->_aVars['aItem']['blog_id'], null, false, null, (array) array (
)); ?>section_blog/">
                <span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_this_blog'); ?>
            </a>
<?php else: ?>
            <a title="<?php echo _p('unsponsor_this_blog'); ?>" href="javascript:void(0)" onclick="$.ajaxCall('blog.unSponsor','blog_id=<?php echo $this->_aVars['aItem']['blog_id']; ?>'); return false;">
                <span class="ico ico-sponsor mr-1"></span><?php echo _p('unsponsor_this_blog'); ?>
            </a>
<?php endif; ?>
        </li>
<?php endif; ?>

<?php if ($this->_aVars['aItem']['canFeature']): ?>
        <li id="js_blog_feature_<?php echo $this->_aVars['aItem']['blog_id']; ?>">
<?php if ($this->_aVars['aItem']['is_featured']): ?>
                <a href="javascript:void(0)" title="<?php echo _p('un_feature_this_blog'); ?>" onclick="$.ajaxCall('blog.feature', 'blog_id=<?php echo $this->_aVars['aItem']['blog_id']; ?>&amp;type=0'); return false;"><span class="ico ico-diamond-o mr-1"></span><?php echo _p('un_feature'); ?></a>
<?php else: ?>
                <a href="javascript:void(0)" title="<?php echo _p('feature_this_blog'); ?>" onclick="$.ajaxCall('blog.feature', 'blog_id=<?php echo $this->_aVars['aItem']['blog_id']; ?>&amp;type=1'); return false;"><span class="ico ico-diamond-o mr-1"></span><?php echo _p('feature'); ?></a>
<?php endif; ?>
        </li>
<?php endif; ?>
<li role="separator" class="divider"></li>
<?php endif;  endif;  if ($this->_aVars['aItem']['canDelete']): ?>
	<li class="item_delete"><a href="javascript:void(0)" onclick="$Core.jsConfirm({}, function(){$.ajaxCall('blog.delete', 'blog_id=<?php echo $this->_aVars['aItem']['blog_id'];  if (isset ( $this->_aVars['bIsDetail'] )): ?>&is_detail=1<?php endif; ?>');}, function(){}); return false;" data-message="<?php echo _p('are_you_sure_you_want_to_delete_this_blog_permanently', array('phpfox_squote' => true)); ?>" title="<?php echo _p('delete_blog'); ?>"><span class="ico ico-trash-o mr-1"></span><?php echo _p('delete'); ?></a></li>
<?php endif;  (($sPlugin = Phpfox_Plugin::get('blog.template_block_entry_links_main')) ? eval($sPlugin) : false); ?>

