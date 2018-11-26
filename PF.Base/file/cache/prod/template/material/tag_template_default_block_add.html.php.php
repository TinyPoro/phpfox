<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:30 am */ ?>
<?php

?>

<div class="table form-group">
	<label>
<?php echo _p('topics'); ?>:
	</label>
	<div >
		<input type="text" name="val<?php if ($this->_aVars['iItemId']): ?>[<?php echo $this->_aVars['iItemId']; ?>]<?php endif; ?>[tag_list]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['tag_list']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['tag_list']) : (isset($this->_aVars['aForms']['tag_list']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['tag_list']) : '')); ?>
" size="30" />
		<div class="help-block">
<?php echo _p('separate_multiple_topics_with_commas'); ?>
		</div>
	</div>
	<div class="clear"></div>
</div>
