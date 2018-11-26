<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 19, 2018, 12:02 pm */ ?>
<?php

?>

<?php if (! isset ( $this->_aVars['sHidden'] )):  $this->assign('sHidden', '');  endif; ?>

<?php if (( isset ( $this->_aVars['sHeader'] ) && ( ! PHPFOX_IS_AJAX || isset ( $this->_aVars['bPassOverAjaxCall'] ) || isset ( $this->_aVars['bIsAjaxLoader'] ) ) ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE )): ?>

<div class="<?php echo $this->_aVars['sHidden']; ?> block<?php if (( defined ( 'PHPFOX_IN_DESIGN_MODE' ) ) && ( ! isset ( $this->_aVars['bCanMove'] ) || ( isset ( $this->_aVars['bCanMove'] ) && $this->_aVars['bCanMove'] == true ) )): ?> js_sortable<?php endif;  if (isset ( $this->_aVars['sCustomClassName'] )): ?> <?php echo $this->_aVars['sCustomClassName'];  endif; ?>"<?php if (isset ( $this->_aVars['sBlockBorderJsId'] )): ?> id="js_block_border_<?php echo $this->_aVars['sBlockBorderJsId']; ?>"<?php endif;  if (defined ( 'PHPFOX_IN_DESIGN_MODE' ) && Phpfox_Module ::instance()->blockIsHidden('js_block_border_' . $this->_aVars['sBlockBorderJsId'] . '' )): ?> style="display:none;"<?php endif; ?> data-toggle="<?php echo $this->_aVars['sToggleWidth']; ?>">
<?php if (! empty ( $this->_aVars['sHeader'] ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE )): ?>
		<div class="title <?php if (defined ( 'PHPFOX_IN_DESIGN_MODE' )): ?>js_sortable_header<?php endif; ?>">
<?php if (isset ( $this->_aVars['sBlockTitleBar'] )): ?>
<?php echo $this->_aVars['sBlockTitleBar']; ?>
<?php endif; ?>
<?php if (( isset ( $this->_aVars['aEditBar'] ) && Phpfox ::isUser())): ?>
			<div class="js_edit_header_bar">
				<a href="#" title="<?php echo _p('edit_this_block'); ?>" onclick="$.ajaxCall('<?php echo $this->_aVars['aEditBar']['ajax_call']; ?>', 'block_id=<?php echo $this->_aVars['sBlockBorderJsId'];  if (isset ( $this->_aVars['aEditBar']['params'] )):  echo $this->_aVars['aEditBar']['params'];  endif; ?>'); return false;">
					<span class="ico ico-pencilline-o"></span>
				</a>
			</div>
<?php endif; ?>
<?php if (empty ( $this->_aVars['sHeader'] )): ?>
<?php echo $this->_aVars['sBlockShowName']; ?>
<?php else: ?>
<?php echo $this->_aVars['sHeader']; ?>
<?php endif; ?>
		</div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aEditBar'] )): ?>
	<div id="js_edit_block_<?php echo $this->_aVars['sBlockBorderJsId']; ?>" class="edit_bar hidden"></div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aMenu'] ) && count ( $this->_aVars['aMenu'] )): ?>
<?php unset($this->_aVars['aMenu']); ?>
<?php endif; ?>
	<div class="content"<?php if (isset ( $this->_aVars['sBlockJsId'] )): ?> id="js_block_content_<?php echo $this->_aVars['sBlockJsId']; ?>"<?php endif; ?>>
<?php endif; ?>
		<?php

?>

<form method="GET" action="<?php if (isset ( $this->_aVars['aCallback']['url_home'] )):  echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aCallback']['url_home'], array('view' => $this->_aVars['sView']));  else:  echo Phpfox::getLib('phpfox.url')->makeUrl('user.browse', array('view' => $this->_aVars['sView']));  endif; ?>" class="form">

<?php if (isset ( $this->_aVars['aCallback']['url_home'] )): ?>
    <input type="hidden" name="url_home" value="<?php echo $this->_aVars['aCallback']['url_home']; ?>" />
<?php endif; ?>

<?php if (Phpfox ::getUserParam('user.can_search_user_gender')): ?>
    <div class="form-group">
        <label><?php echo _p('browse_for'); ?></label>
<?php echo $this->_aVars['aFilters']['gender']; ?>
    </div>
<?php endif; ?>

<?php if (Phpfox ::getUserParam('user.can_search_user_age')): ?>
    <div class="form-group">
        <label><?php echo _p('between_ages'); ?></label>
<?php echo $this->_aVars['aFilters']['from']; ?>&nbsp;<?php echo $this->_aVars['aFilters']['to']; ?>
    </div>
<?php endif; ?>

    <div class="form-group">
        <label><?php echo _p('located_within'); ?></label>
<?php echo $this->_aVars['aFilters']['country']; ?>
<?php Phpfox::getBlock('core.country-child', array('country_child_filter' => true,'country_child_type' => 'browse')); ?>
    </div>

    <div class="form-group">
        <label><?php echo _p('city'); ?></label>
<?php echo $this->_aVars['aFilters']['city']; ?>
    </div>
	
<?php if (Phpfox ::getUserParam('user.can_search_by_zip')): ?>
    <div class="form-group">
        <label><?php echo _p('zip_postal_code'); ?></label>
<?php echo $this->_aVars['aFilters']['zip']; ?>
    </div>
<?php endif; ?>

    <div class="form-group">
        <label><?php echo _p('keywords'); ?></label>
<?php echo $this->_aVars['aFilters']['keyword']; ?>
        <p class="help-block" style="display:none;">
<?php echo _p('within'); ?>: <?php echo $this->_aVars['aFilters']['type']; ?>
        </p>
    </div>

	<ul id="js_user_browse_advanced_link" class="form-group">
<?php if (isset ( $this->_aVars['bShowAdvSearch'] ) && $this->_aVars['bShowAdvSearch']): ?>
		<li><a class="btn btn-default" href="#" onclick="$('.main_search_browse_button').toggle(); $('#js_user_browse_advanced').toggleClass('active'); return false;" id="user_browse_advanced_link">
                <span class="main_search_browse_button"><?php echo _p('view_advanced_filters'); ?></span>
                <span class="main_search_browse_button" style="display: none"><?php echo _p('close_advanced_filters'); ?></span>
            </a></li>
<?php endif; ?>
<?php if (isset ( $this->_aVars['bIsInSearchMode'] ) && $this->_aVars['bIsInSearchMode']): ?>
		<li><a href="#"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.browse'); ?>"><?php echo _p('reset_browse_criteria'); ?></a></a></li>
<?php endif; ?>
	</ul>
		
	<div class="main_search_browse_button">
		<input type="submit" value="<?php echo _p('search'); ?>" class="btn btn-primary" name="search[submit]" />
	</div>
	
	<div id="js_user_browse_advanced">
		<div class="user_browse_content">
			<div id="browse_custom_fields_popup_holder">
<?php if (count((array)$this->_aVars['aCustomFields'])):  $this->_aPhpfoxVars['iteration']['customfield'] = 0;  foreach ((array) $this->_aVars['aCustomFields'] as $this->_aVars['aCustomField']):  $this->_aPhpfoxVars['iteration']['customfield']++; ?>

<?php if (isset ( $this->_aVars['aCustomField']['fields'] )): ?>
					<?php
						Phpfox::getLib('template')->getBuiltFile('custom.block.foreachcustom');
						?>
<?php endif; ?>
<?php endforeach; endif; ?>
			</div>
<?php if (count ( $this->_aVars['aForms'] )): ?>
			<?php echo '
			<script type="text/javascript">
				$Behavior.user_filter_1 = function()
				{
					var iBrowseCnt = 0;
					$(\'#js_block_border_user_filter .menu li\').each(function()
					{
						iBrowseCnt++;
						if (iBrowseCnt == 1)
						{
							$(this).removeClass(\'active\');
						}
						else
						{
							$(this).addClass(\'active\');
						}
					});
				};
			</script>
			'; ?>

<?php endif; ?>

            <div class="form-group" style="display:none;">
                <label><?php echo _p('sort_results_by'); ?></label>
<?php echo $this->_aVars['aFilters']['sort']; ?> <?php echo $this->_aVars['aFilters']['sort_by']; ?>
            </div>
			<div class="form-group">
			    <input type="submit" value="<?php echo _p('search'); ?>" class="btn btn-primary" name="search[submit]" />
			</div>
		</div>
	</div>
	
<?php if (isset ( $this->_aVars['sCountryISO'] )): ?>
		<script type="text/javascript">
			$Behavior.loadStatesAfterBrowse = function()
			{
				sCountryISO = "<?php echo $this->_aVars['sCountryISO']; ?>";
				if(sCountryISO != "")
				{
					sCountryChildId = "<?php echo $this->_aVars['sCountryChildId']; ?>";
					$.ajaxCall('core.getChildren', 'country_child_filter=true&country_child_type=browse&country_iso=' + sCountryISO + '&country_child_id=' + sCountryChildId);
				}
			}
		</script>
<?php endif; ?>

</form>




<?php if (( isset ( $this->_aVars['sHeader'] ) && ( ! PHPFOX_IS_AJAX || isset ( $this->_aVars['bPassOverAjaxCall'] ) || isset ( $this->_aVars['bIsAjaxLoader'] ) ) ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE )): ?>
	</div>
<?php if (isset ( $this->_aVars['aFooter'] ) && count ( $this->_aVars['aFooter'] )): ?>
	<div class="bottom">
<?php if (count ( $this->_aVars['aFooter'] ) == 1): ?>
<?php if (count((array)$this->_aVars['aFooter'])):  $this->_aPhpfoxVars['iteration']['block'] = 0;  foreach ((array) $this->_aVars['aFooter'] as $this->_aVars['sPhrase'] => $this->_aVars['sLink']):  $this->_aPhpfoxVars['iteration']['block']++; ?>

<?php if ($this->_aVars['sLink'] == '#'): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'ajax_image')); ?>
<?php endif; ?>
<?php if (is_array ( $this->_aVars['sLink'] )): ?>
            <a class="btn btn-block <?php if (! empty ( $this->_aVars['sLink']['class'] )): ?> <?php echo $this->_aVars['sLink']['class'];  endif; ?>" href="<?php if (! empty ( $this->_aVars['sLink']['link'] )):  echo $this->_aVars['sLink']['link'];  else: ?>#<?php endif; ?>" <?php if (! empty ( $this->_aVars['sLink']['attr'] )):  echo $this->_aVars['sLink']['attr'];  endif; ?> id="js_block_bottom_link_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a>
<?php else: ?>
            <a class="btn btn-block" href="<?php echo $this->_aVars['sLink']; ?>" id="js_block_bottom_link_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a>
<?php endif; ?>
<?php endforeach; endif; ?>
<?php else: ?>
		<ul>
<?php if (count((array)$this->_aVars['aFooter'])):  $this->_aPhpfoxVars['iteration']['block'] = 0;  foreach ((array) $this->_aVars['aFooter'] as $this->_aVars['sPhrase'] => $this->_aVars['sLink']):  $this->_aPhpfoxVars['iteration']['block']++; ?>

				<li id="js_block_bottom_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"<?php if ($this->_aPhpfoxVars['iteration']['block'] == 1): ?> class="first"<?php endif; ?>>
<?php if ($this->_aVars['sLink'] == '#'): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'ajax_image')); ?>
<?php endif; ?>
					<a href="<?php echo $this->_aVars['sLink']; ?>" id="js_block_bottom_link_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a>
				</li>
<?php endforeach; endif; ?>
		</ul>
<?php endif; ?>
	</div>
<?php endif; ?>
</div>
<?php endif;  unset($this->_aVars['sHeader'], $this->_aVars['sComponent'], $this->_aVars['aFooter'], $this->_aVars['sBlockBorderJsId'], $this->_aVars['bBlockDisableSort'], $this->_aVars['bBlockCanMove'], $this->_aVars['aEditBar'], $this->_aVars['sDeleteBlock'], $this->_aVars['sBlockTitleBar'], $this->_aVars['sBlockJsId'], $this->_aVars['sCustomClassName'], $this->_aVars['aMenu']); ?>
