<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:32 am */ ?>
<?php if ($this->_aVars['aPage']['canApprove']): ?>
<li><a href="#" onclick="$.ajaxCall('pages.approve', 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>');"><span class="ico ico-check-square-alt mr-1"></span><?php echo _p('approve'); ?></a></li>
<?php endif;  if ($this->_aVars['aPage']['canEdit']): ?>
<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('pages.add', array('id' => $this->_aVars['aPage']['page_id'])); ?>"><span class="ico ico-gear-form-o mr-1"></span><?php echo _p('manage'); ?></a></li>
<?php endif;  if ($this->_aVars['aPage']['canFeature']): ?>
<li><a id="js_feature_<?php echo $this->_aVars['aPage']['page_id']; ?>" <?php if ($this->_aVars['aPage']['is_featured']): ?> style="display:none;"<?php endif; ?> href="#" title="<?php echo _p('feature'); ?>" onclick="$(this).hide(); $('#js_unfeature_<?php echo $this->_aVars['aPage']['page_id']; ?>').show(); $.ajaxCall('pages.feature', 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&amp;type=1'); return false;"><span class="ico ico-diamond mr-1"></span><?php echo _p('feature'); ?></a></li>
<li><a id="js_unfeature_<?php echo $this->_aVars['aPage']['page_id']; ?>" <?php if (! $this->_aVars['aPage']['is_featured']): ?> style="display:none;"<?php endif; ?> href="#" title="<?php echo _p('un_feature'); ?>" onclick="$(this).hide(); $('#js_feature_<?php echo $this->_aVars['aPage']['page_id']; ?>').show(); $.ajaxCall('pages.feature', 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&amp;type=0'); return false;"><span class="ico ico-diamond-o mr-1"></span><?php echo _p('unfeature'); ?></a></li>
<?php endif;  if ($this->_aVars['aPage']['canSponsor']): ?>
<li>
    <a href="#" id="js_sponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>" onclick="$('#js_sponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>').hide();$('#js_unsponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>').show();$.ajaxCall('pages.sponsor','page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&type=0', 'GET'); return false;" style="<?php if ($this->_aVars['aPage']['is_sponsor'] != 1): ?>display:none;<?php endif; ?>">
        <span class="ico ico-sponsor mr-1"></span><?php echo _p('unsponsor_this_page'); ?>
    </a>
    <a href="#" id="js_unsponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>" onclick="$('#js_sponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>').show();$('#js_unsponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>').hide();$.ajaxCall('pages.sponsor','page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&type=1', 'GET'); return false;" style="<?php if ($this->_aVars['aPage']['is_sponsor'] == 1): ?>display:none;<?php endif; ?>">
        <span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_this_page'); ?>
    </a>
</li>
<?php elseif ($this->_aVars['aPage']['canPurchaseSponsor']): ?>
<li>
    <a id="js_unsponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>" href="<?php echo Phpfox::permalink('ad.sponsor', $this->_aVars['aPage']['page_id'], null, false, null, (array) array (
)); ?>section_pages/" style="<?php if ($this->_aVars['aPage']['is_sponsor'] == 1): ?>display:none;<?php endif; ?>">
        <span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_this_page'); ?>
    </a>
    <a href="#" id="js_sponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>" onclick="$('#js_sponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>').hide();$('#js_unsponsor_<?php echo $this->_aVars['aPage']['page_id']; ?>').show();$.ajaxCall('pages.sponsor','page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&type=0', 'GET'); return false;" style="<?php if ($this->_aVars['aPage']['is_sponsor'] != 1): ?>display:none;<?php endif; ?>">
        <span class="ico ico-sponsor mr-1"></span><?php echo _p('unsponsor_this_page'); ?>
    </a>
</li>
<?php endif;  if (Phpfox ::isAdmin() || Phpfox ::getUserId() == $this->_aVars['aPage']['user_id']): ?>
<li>
    <a href="#" onclick="tb_show('', $.ajaxBox('pages.showReassignOwner', 'height=400&amp;width=600&amp;page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>')); return false;">
        <span class="ico ico-user2-next-o mr-1"></span><?php echo _p('reassign_owner'); ?>
    </a>
</li>
<?php endif;  if ($this->_aVars['aPage']['canDelete']): ?>
<li class="item_delete">
   <a href="<?php if (isset ( $this->_aVars['iCurrentProfileId'] )):  echo Phpfox::getLib('phpfox.url')->makeUrl('pages', array('delete' => $this->_aVars['aPage']['page_id'],'profile' => $this->_aVars['iCurrentProfileId']));  else:  echo Phpfox::getLib('phpfox.url')->makeUrl('pages', array('delete' => $this->_aVars['aPage']['page_id']));  endif; ?>" data-message="<?php echo _p('are_you_sure_you_want_to_delete_this_page_permanently'); ?>" class="no_ajax_link sJsConfirm">
        <span class="ico ico-trash-alt-o mr-1"></span><?php echo _p('Delete this Page'); ?>
    </a>
</li>
<?php endif; ?>
