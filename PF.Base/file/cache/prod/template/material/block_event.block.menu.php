<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 10:08 am */ ?>
<?php
/**
 * [PHPFOX_HEADER]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: menu.html.php 3737 2011-12-09 07:50:12Z Raymond_Benc $
 */



 if ($this->_aVars['aEvent']['canApprove'] || $this->_aVars['aEvent']['canEdit']): ?>
<?php if ($this->_aVars['aEvent']['canApprove']): ?>
        <li>
            <a href="#" class="" onclick="$(this).hide(); $('#js_item_bar_approve_image').show(); $.ajaxCall('event.approve', 'inline=true&amp;event_id=<?php echo $this->_aVars['aEvent']['event_id']; ?>', 'POST'); return false;"><span class="ico ico-check-square-alt mr-1"></span><?php echo _p('approve'); ?></a>
        </li>
<?php endif; ?>
<?php if ($this->_aVars['aEvent']['canEdit']): ?>
        <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('event.add', array('id' => $this->_aVars['aEvent']['event_id'])); ?>"><span class="ico ico-pencilline-o mr-1"></span><?php echo _p('edit_event'); ?></a></li>
<?php endif; ?>
    <li role="separator" class="divider"></li>
<?php endif;  if ($this->_aVars['aEvent']['canSponsorInFeed'] || $this->_aVars['aEvent']['canInvite'] || $this->_aVars['aEvent']['canEdit'] || $this->_aVars['aEvent']['canFeature'] || $this->_aVars['aEvent']['canSponsor'] || $this->_aVars['aEvent']['canPurchaseSponsor']): ?>
<?php if ($this->_aVars['aEvent']['canSponsorInFeed']): ?>
    <li>
<?php if ($this->_aVars['aEvent']['iSponsorInFeedId']): ?>
        <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('where' => 'feed','section' => 'event','item' => $this->_aVars['aEvent']['event_id'])); ?>">
            <span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_in_feed'); ?>
        </a>
<?php else: ?>
        <a href="#" onclick="$.ajaxCall('ad.removeSponsor', 'type_id=event&item_id=<?php echo $this->_aVars['aEvent']['event_id']; ?>', 'GET'); return false;">
            <span class="ico ico-sponsor mr-1"></span><?php echo _p("Unsponsor In Feed"); ?>
        </a>
<?php endif; ?>
    </li>
<?php endif; ?>

<?php if ($this->_aVars['aEvent']['canInvite']): ?>
        <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('event.add.invite', array('id' => $this->_aVars['aEvent']['event_id'],'tab' => 'invite')); ?>"><span class="ico ico-user-man-plus"></span><?php echo _p('invite_people_to_come'); ?></a></li>
<?php endif; ?>
<?php if ($this->_aVars['aEvent']['canEdit']): ?>
<?php if ($this->_aVars['aEvent']['canMassEmail']): ?>
            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('event.add.email', array('id' => $this->_aVars['aEvent']['event_id'],'tab' => 'email')); ?>"><span class="ico ico-comment-o"></span><?php echo _p('mass_email_guests'); ?></a></li>
<?php endif; ?>
        <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('event.add.manage', array('id' => $this->_aVars['aEvent']['event_id'],'tab' => 'manage')); ?>"><span class="ico ico-user-couple"></span><?php echo _p('manage_guest_list'); ?></a></li>
<?php endif; ?>

<?php if ($this->_aVars['aEvent']['canFeature']): ?>
        <li id="js_feature_<?php echo $this->_aVars['aEvent']['event_id']; ?>"<?php if ($this->_aVars['aEvent']['is_featured']): ?> style="display:none;"<?php endif; ?>><a href="#" title="<?php echo _p('feature_this_event'); ?>" onclick="$(this).parent().hide(); $('#js_unfeature_<?php echo $this->_aVars['aEvent']['event_id']; ?>').show(); $(this).parents('.js_event_parent:first').find('.js_featured_event').show(); $.ajaxCall('event.feature', 'event_id=<?php echo $this->_aVars['aEvent']['event_id']; ?>&amp;type=1'); return false;"> <span class="ico ico-diamond-o mr-1"></span><?php echo _p('feature'); ?></a></li>
        <li id="js_unfeature_<?php echo $this->_aVars['aEvent']['event_id']; ?>"<?php if (! $this->_aVars['aEvent']['is_featured']): ?> style="display:none;"<?php endif; ?>><a href="#" title="<?php echo _p('un_feature_this_event'); ?>" onclick="$(this).parent().hide(); $('#js_feature_<?php echo $this->_aVars['aEvent']['event_id']; ?>').show(); $(this).parents('.js_event_parent:first').find('.js_featured_event').hide(); $.ajaxCall('event.feature', 'event_id=<?php echo $this->_aVars['aEvent']['event_id']; ?>&amp;type=0'); return false;"> <span class="ico ico-diamond-o mr-1"></span><?php echo _p('Unfeature'); ?></a></li>
<?php endif; ?>

<?php if ($this->_aVars['aEvent']['canSponsor']): ?>
        <li id="js_event_sponsor_<?php echo $this->_aVars['aEvent']['event_id']; ?>" <?php if ($this->_aVars['aEvent']['is_sponsor']): ?>style="display:none;"<?php endif; ?>>
            <a href="#" onclick="$.ajaxCall('event.sponsor', 'event_id=<?php echo $this->_aVars['aEvent']['event_id']; ?>&type=1', 'GET'); return false;"><span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_this_event'); ?></a>
        </li>
        <li id="js_event_unsponsor_<?php echo $this->_aVars['aEvent']['event_id']; ?>" <?php if (! $this->_aVars['aEvent']['is_sponsor']): ?>style="display:none;"<?php endif; ?>>
            <a href="#" onclick="$.ajaxCall('event.sponsor', 'event_id=<?php echo $this->_aVars['aEvent']['event_id']; ?>&type=0', 'GET'); return false;"><span class="ico ico-sponsor mr-1"></span><?php echo _p('unsponsor_this_event'); ?></a>
        </li>
<?php elseif ($this->_aVars['aEvent']['canPurchaseSponsor']): ?>
<?php if ($this->_aVars['aEvent']['is_sponsor'] == 1): ?>
        <li>
            <a href="#" onclick="$.ajaxCall('event.sponsor', 'event_id=<?php echo $this->_aVars['aEvent']['event_id']; ?>&type=0', 'GET'); return false;">
                <span class="ico ico-sponsor mr-1"></span><?php echo _p('unsponsor_this_event'); ?>
            </a>
        </li>
<?php else: ?>
        <li>
            <a href="<?php echo Phpfox::permalink('ad.sponsor', $this->_aVars['aEvent']['event_id'], $this->_aVars['aEvent']['title'], false, null, (array) array (
  'section' => 'event',
)); ?>">
                <span class="ico ico-sponsor mr-1"></span><?php echo _p('sponsor_this_event'); ?>
            </a>
        </li>
<?php endif; ?>
<?php endif; ?>
    <li role="separator" class="divider"></li>
<?php endif;  if ($this->_aVars['aEvent']['canDelete']): ?>
    <li class="item_delete"><a href="javascript:void(0);" data-id="<?php echo $this->_aVars['aEvent']['event_id']; ?>" data-is-detail="<?php if (isset ( $this->_aVars['bIsDetail'] ) && $this->_aVars['bIsDetail']): ?>1<?php else: ?>0<?php endif; ?>" data-message="<?php echo _p('are_you_sure_you_want_to_delete_this_event_permanently'); ?>" onclick="$Core.event.deleteEvent($(this));"><span class="ico ico-trash-o mr-1"></span><?php echo _p('delete_event'); ?></a></li>
<?php endif; ?>

<?php (($sPlugin = Phpfox_Plugin::get('event.template_block_entry_links_main')) ? eval($sPlugin) : false); ?>
