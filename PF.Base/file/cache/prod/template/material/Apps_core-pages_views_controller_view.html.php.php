<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:32 am */ ?>
<?php 

 if (( isset ( $this->_aVars['app_content'] ) )):  echo $this->_aVars['app_content'];  else: ?>

<?php if ($this->_aVars['bCanViewPage']): ?>
<?php if (isset ( $this->_aVars['aWidget'] ) && $this->_aVars['aWidget']['text']): ?>
		<div class="block item_view_content">
<?php echo Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['aWidget']['text']); ?>
		</div>
<?php elseif ($this->_aVars['sCurrentModule'] == 'info' && ! $this->_aVars['iViewCommentId']): ?>
		<div class="block item_view_content">
<?php if ($this->_aVars['aPage']['text'] || $this->_aVars['aPage']['location_name']): ?>
<?php if ($this->_aVars['aPage']['text']): ?><div class="info"><?php echo _p('description'); ?></div><?php echo Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['aPage']['text']);  endif; ?>
<?php if (setting ( 'core.google_api_key' )): ?>
<?php if ($this->_aVars['aPage']['location_name']): ?><div class="info"><?php echo _p('location'); ?>: <?php echo $this->_aVars['aPage']['location_name']; ?></div><?php endif; ?>
<?php if ($this->_aVars['aPage']['location_latitude'] && $this->_aVars['aPage']['location_longitude']): ?>
                        <div id="js_location_view" data-app="core_pages" data-action="init_google_map" data-action-type="init" <?php if (isset ( $this->_aVars['sLat'] )): ?>data-lat="<?php echo $this->_aVars['sLat']; ?>"<?php endif; ?> <?php if (isset ( $this->_aVars['sLng'] )): ?>data-lng="<?php echo $this->_aVars['sLng']; ?>"<?php endif; ?> <?php if (isset ( $this->_aVars['sLocationName'] )): ?>data-lname="<?php echo $this->_aVars['sLocationName']; ?>"<?php endif; ?>></div>
<?php endif; ?>
<?php endif; ?>
<?php else: ?>
<?php echo _p('block_info_no_content'); ?>
<?php endif; ?>
        </div>
<?php else: ?>
<?php if ($this->_aVars['bHasPermToViewPageFeed']): ?>
			
<?php else: ?>
<?php echo _p('unable_to_view_this_section_due_to_privacy_settings'); ?>
<?php endif; ?>
<?php endif;  else: ?>
	<div class="message">
<?php if (isset ( $this->_aVars['aPage']['is_invited'] ) && $this->_aVars['aPage']['is_invited']): ?>
<?php echo _p('you_have_been_invited_to_join_this_community'); ?>
<?php else: ?>
<?php echo _p('due_to_privacy_settings_this_page_is_not_visible'); ?>
<?php if ($this->_aVars['aPage']['page_type'] == '1' && $this->_aVars['aPage']['reg_method'] == '2'): ?>
<?php echo _p('this_page_is_also_invite_only'); ?>
<?php endif; ?>
<?php endif; ?>
	</div>
<?php endif; ?>

<?php endif; ?>
