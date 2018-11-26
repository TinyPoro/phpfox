<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 4:07 am */ ?>
<?php
    
?>

<?php if ($this->_aVars['aQuiz']['canApprove']): ?>
    <li><a href="javascript:void()" class="" onclick="$(this).hide(); $.ajaxCall('quiz.approve','iQuiz=<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>&amp;inline=true'); return false;"><i class="ico ico-check-square-alt mr-1"></i><?php echo _p('approve'); ?></a></li>
<?php endif;  if (( $this->_aVars['aQuiz']['canEdit'] )): ?>
    <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('quiz.add', array('id' => $this->_aVars['aQuiz']['quiz_id'])); ?>"><i class="ico ico-pencilline-o mr-1"></i><?php echo _p('edit'); ?></a></li>
<?php endif;  if ($this->_aVars['aQuiz']['canSponsorInFeed']): ?>
<li>
<?php if ($this->_aVars['aQuiz']['iSponsorInFeedId']): ?>
        <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('where' => 'feed','section' => 'quiz','item' => $this->_aVars['aQuiz']['quiz_id'])); ?>">
            <i class="ico ico-sponsor mr-1"></i><?php echo _p('sponsor_in_feed'); ?>
        </a>
<?php else: ?>
        <a href="javascript:void()" onclick="$.ajaxCall('ad.removeSponsor', 'type_id=quiz&item_id=<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>', 'GET'); return false;">
            <i class="ico ico-sponsor mr-1"></i><?php echo _p("Unsponsor In Feed"); ?>
        </a>
<?php endif; ?>
</li>
<?php endif;  if ($this->_aVars['aQuiz']['canFeature']): ?>
    <li><a id="js_feature_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>"<?php if ($this->_aVars['aQuiz']['is_featured']): ?> style="display:none;"<?php endif; ?> href="javascript:void()" title="<?php echo _p('feature'); ?>" onclick="$('#js_featured_phrase_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').hide(); $(this).hide(); $('#js_unfeature_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').show(); $.ajaxCall('quiz.feature', 'quiz_id=<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>&amp;type=1'); return false;"><i class="ico ico-diamond mr-1"></i><?php echo _p('feature'); ?></a></li>
    <li><a id="js_unfeature_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>"<?php if (! $this->_aVars['aQuiz']['is_featured']): ?> style="display:none;"<?php endif; ?> href="javascript:void()" title="<?php echo _p('un_feature'); ?>" onclick="$('#js_featured_phrase_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').show(); $(this).hide(); $('#js_feature_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').show(); $.ajaxCall('quiz.feature', 'quiz_id=<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>&amp;type=0'); return false;"><i class="ico ico-diamond-o mr-1"></i><?php echo _p('unfeature'); ?></a></li>
<?php endif;  if ($this->_aVars['aQuiz']['canSponsor']): ?>
    <li>
        <a href="javascript:void()" id="js_sponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>" class="<?php if ($this->_aVars['aQuiz']['is_sponsor'] != 1): ?>hide<?php endif; ?>" onclick="$('#js_sponsor_phrase_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').hide(); $('#js_sponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').hide();$('#js_unsponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').show();$.ajaxCall('quiz.sponsor','quiz_id=<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>&type=0', 'GET'); return false;">
            <i class="ico ico-sponsor mr-1"></i><?php echo _p('unsponsor_this_quiz'); ?>
        </a>
        <a href="javascript:void()" id="js_unsponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>" class="<?php if ($this->_aVars['aQuiz']['is_sponsor'] == 1): ?>hide<?php endif; ?>" onclick="$('#js_sponsor_phrase_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').show(); $('#js_sponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').show();$('#js_unsponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').hide();$.ajaxCall('quiz.sponsor','quiz_id=<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>&type=1', 'GET'); return false;">
            <i class="ico ico-sponsor mr-1"></i><?php echo _p('sponsor_this_quiz'); ?>
        </a>
    </li>
<?php elseif ($this->_aVars['aQuiz']['canPurchaseSponsor']): ?>
<?php if ($this->_aVars['aQuiz']['is_sponsor'] == 1): ?>
        <li>
            <a href="#" onclick="$('#js_sponsor_phrase_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').hide(); $('#js_sponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').hide();$('#js_unsponsor_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>').show();$.ajaxCall('quiz.sponsor','quiz_id=<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>&type=0', 'GET'); return false;">
                <span class="ico ico-sponsor mr-1"></span><?php echo _p('unsponsor_this_quiz'); ?>
            </a>
        </li>
<?php else: ?>
        <li>
            <a href="<?php echo Phpfox::permalink('ad.sponsor', $this->_aVars['aQuiz']['quiz_id'], null, false, null, (array) array (
)); ?>section_quiz/">
                <i class="ico ico-sponsor mr-1"></i><?php echo _p('sponsor_this_quiz'); ?>
            </a>
        </li>
<?php endif;  endif;  if (( $this->_aVars['aQuiz']['user_id'] == Phpfox ::getUserId())): ?>
    <li><a href="<?php echo Phpfox::permalink('quiz', $this->_aVars['aQuiz']['quiz_id'], $this->_aVars['aQuiz']['title'], false, null, (array) array (
)); ?>results/""><i class="ico ico-eye mr-1"></i><?php echo _p('view_results'); ?></a></li>
<?php endif;  if ($this->_aVars['aQuiz']['canDelete']): ?>
    <li class="item_delete">
        <a href="javascript:void()" onclick="return $Core.quiz_moderate.deleteQuiz(<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>, '<?php if (isset ( $this->_aVars['bIsViewingQuiz'] ) && $this->_aVars['bIsViewingQuiz']): ?>viewing<?php else: ?>browsing<?php endif; ?>')"><i class="ico ico-trash-alt-o mr-1"></i><?php echo _p('delete'); ?></a>
    </li>
<?php endif;  (($sPlugin = Phpfox_Plugin::get('quiz.template_block_entry_links_main')) ? eval($sPlugin) : false); ?>
