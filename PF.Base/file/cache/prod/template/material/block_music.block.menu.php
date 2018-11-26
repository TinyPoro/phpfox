<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:35 am */ ?>
<?php 
     
?>

<?php if ($this->_aVars['aSong']['canApprove']): ?>
    <li><a href="#" class="" onclick="$(this).hide(); $('#js_item_bar_approve_image').show(); $.ajaxCall('music.approveSong', 'inline=true&amp;id=<?php echo $this->_aVars['aSong']['song_id']; ?>', 'GET'); return false;"><i class="ico ico-check-square-alt mr-1"></i><?php echo _p('approve'); ?></a></li>
<?php endif; ?>

<?php if ($this->_aVars['aSong']['canEdit']): ?>
    <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.upload', array('id' => $this->_aVars['aSong']['song_id'])); ?>"><i class="ico ico-pencilline-o mr-1"></i><?php echo _p('edit'); ?></a></li>
<?php endif; ?>

<?php if ($this->_aVars['aSong']['canSponsorInFeed']): ?>
    <li>
<?php if ($this->_aVars['aSong']['iSponsorInFeedId']): ?>
            <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('where' => 'feed','section' => 'music_song','item' => $this->_aVars['aSong']['song_id'])); ?>">
                <i class="ico ico-sponsor mr-1"></i>
<?php echo _p('sponsor_in_feed'); ?>
            </a>
<?php else: ?>
            <a href="#" onclick="$.ajaxCall('ad.removeSponsor', 'type_id=music_song&item_id=<?php echo $this->_aVars['aSong']['song_id']; ?>', 'GET'); return false;">
                <i class="ico ico-sponsor mr-1"></i>
<?php echo _p("Unsponsor In Feed"); ?>
            </a>
<?php endif; ?>
    </li>
<?php endif; ?>

<?php if ($this->_aVars['aSong']['canFeature']): ?>
    <li><a id="js_feature_<?php echo $this->_aVars['aSong']['song_id']; ?>"<?php if ($this->_aVars['aSong']['is_featured']): ?> style="display:none;"<?php endif; ?> href="#" title="<?php echo _p('feature_this_song'); ?>" onclick="$('#js_featured_phrase_<?php echo $this->_aVars['aSong']['song_id']; ?>').hide(); $(this).hide(); $('#js_unfeature_<?php echo $this->_aVars['aSong']['song_id']; ?>').show(); $(this).parents('.js_song_parent:first').addClass('row_featured').find('.js_featured_song').show(); $.ajaxCall('music.featureSong', 'song_id=<?php echo $this->_aVars['aSong']['song_id']; ?>&amp;type=1'); return false;"><i class="ico ico-diamond mr-1"></i><?php echo _p('feature'); ?></a></li>
    <li><a id="js_unfeature_<?php echo $this->_aVars['aSong']['song_id']; ?>"<?php if (! $this->_aVars['aSong']['is_featured']): ?> style="display:none;"<?php endif; ?> href="#" title="<?php echo _p('un_feature_this_song'); ?>" onclick="$('#js_featured_phrase_<?php echo $this->_aVars['aSong']['song_id']; ?>').show(); $(this).hide(); $('#js_feature_<?php echo $this->_aVars['aSong']['song_id']; ?>').show(); $(this).parents('.js_song_parent:first').removeClass('row_featured').find('.js_featured_song').hide(); $.ajaxCall('music.featureSong', 'song_id=<?php echo $this->_aVars['aSong']['song_id']; ?>&amp;type=0'); return false;"><i class="ico ico-diamond-o mr-1"></i><?php echo _p('unfeature'); ?></a></li>
<?php endif;  if ($this->_aVars['aSong']['canSponsor']): ?>
    <li>
        <a id="js_sponsor_<?php echo $this->_aVars['aSong']['song_id']; ?>" <?php if (! $this->_aVars['aSong']['is_sponsor']): ?>style="display:none"<?php endif; ?> href="#" onclick="$('#js_sponsor_phrase_<?php echo $this->_aVars['aSong']['song_id']; ?>').hide(); $('#js_sponsor_<?php echo $this->_aVars['aSong']['song_id']; ?>').hide();$('#js_unsponsor_<?php echo $this->_aVars['aSong']['song_id']; ?>').show();$.ajaxCall('music.sponsorSong','song_id=<?php echo $this->_aVars['aSong']['song_id']; ?>&type=0', 'GET'); return false;">
        <i class="ico ico-sponsor mr-1"></i><?php echo _p('unsponsor_this_song'); ?>
        </a>
        <a id="js_unsponsor_<?php echo $this->_aVars['aSong']['song_id']; ?>" <?php if ($this->_aVars['aSong']['is_sponsor']): ?>style="display:none"<?php endif; ?> href="#" onclick="$('#js_sponsor_phrase_<?php echo $this->_aVars['aSong']['song_id']; ?>').show(); $('#js_sponsor_<?php echo $this->_aVars['aSong']['song_id']; ?>').show();$('#js_unsponsor_<?php echo $this->_aVars['aSong']['song_id']; ?>').hide();$.ajaxCall('music.sponsorSong','song_id=<?php echo $this->_aVars['aSong']['song_id']; ?>&type=1', 'GET'); return false;">
        <i class="ico ico-sponsor mr-1"></i><?php echo _p('sponsor_this_song'); ?>
        </a>
    </li>
<?php elseif ($this->_aVars['aSong']['canPurchaseSponsor']): ?>
<?php if ($this->_aVars['aSong']['is_sponsor']): ?>
    <li id="js_sponsor_purchase_music_song_<?php echo $this->_aVars['aSong']['song_id']; ?>">
        <a href="#" onclick="$('#js_sponsor_phrase_<?php echo $this->_aVars['aSong']['song_id']; ?>').hide(); $.ajaxCall('music.sponsorSong','song_id=<?php echo $this->_aVars['aSong']['song_id']; ?>&type=0', 'GET'); return false;">
            <i class="ico ico-sponsor"></i>
<?php echo _p('unsponsor_this_song'); ?>
        </a>
    </li>
<?php else: ?>
    <li>
        <a href="<?php echo Phpfox::permalink('ad.sponsor', $this->_aVars['aSong']['song_id'], null, false, null, (array) array (
)); ?>section_music_song/">
            <i class="ico ico-sponsor"></i>
<?php echo _p('sponsor_this_song'); ?>
        </a>
    </li>
<?php endif;  endif;  if ($this->_aVars['aSong']['canDelete']): ?>
    <li class="item_delete"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.delete', array('id' => $this->_aVars['aSong']['song_id'])); ?>" class="sJsConfirm" data-message="<?php echo _p('are_you_sure_you_want_to_delete_this_song'); ?>"><i class="ico ico-trash-alt-o mr-1"></i><?php echo _p('delete'); ?></a></li>
<?php endif;  (($sPlugin = Phpfox_Plugin::get('music.template_block_entry_links_main')) ? eval($sPlugin) : false); ?>
