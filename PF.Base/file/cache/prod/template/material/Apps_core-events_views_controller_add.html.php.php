<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:36 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 *
 */
 
 

 echo $this->_aVars['sCreateJs']; ?>
<form class="form item-event-form-add" method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('current'); ?>" enctype="multipart/form-data" onsubmit="return startProcess(<?php echo $this->_aVars['sGetJsForm']; ?>, false);" id="js_event_form" >
<?php if (! empty ( $this->_aVars['sModule'] )): ?>
	<div><input type="hidden" name="module" value="<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['sModule']); ?>" /></div>
<?php endif;  if (! empty ( $this->_aVars['iItem'] )): ?>
	<div><input type="hidden" name="item" value="<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['iItem']); ?>" /></div>
<?php endif;  if ($this->_aVars['bIsEdit']): ?>
	<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['event_id']; ?>" /></div>
<?php endif; ?>
    <div><input type="hidden" name="val[current_tab]" value="" id="current_tab"></div>

	<div id="js_event_block_detail" class="js_event_block page_section_menu_holder" <?php if (! empty ( $this->_aVars['sActiveTab'] ) && $this->_aVars['sActiveTab'] != 'detail'): ?>style="display:none;"<?php endif; ?>>
        <div><input type="hidden" name="val[attachment]" class="js_attachment" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['attachment']) : (isset($this->_aVars['aForms']['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['attachment']) : '')); ?>
" /></div>
		<div class="form-group">
			*<label for="title"><?php echo _p('event_name'); ?></label>
				<input type="text" name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" id="title" size="40" maxlength="100" class="form-control close_warning" />
		</div>

		<div class="form-group" style="width: 200px;">
				<label for="category"><?php echo _p('category'); ?></label>
<?php echo $this->_aVars['sCategories']; ?>
		</div>

		<div class="form-group">
				<label for="description"><?php echo _p('description'); ?></label>
				<div class="editor_holder"><?php echo Phpfox::getLib('phpfox.editor')->get('description', array (
  'id' => 'description',
  'rows' => '6',
));  Phpfox::getBlock('attachment.share', array('id'=> 'description')); ?></div>
		</div>			
			
		<div class="form-group">
				<label><?php echo _p('start_time'); ?></label>
				<div style="position: relative;" class="js_event_select">
					<div class="form-inline select_date"><div class="js_datepicker_core_start"><span class="js_datepicker_holder"><div style="display:none;"><select  name="val[start_month]" id="start_month" class="form-control js_datepicker_month">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '1') || (is_array($this->_aVars['aForms']['start_month']) && in_array('1', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('1' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'January' : _p('january')); ?></option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '2') || (is_array($this->_aVars['aForms']['start_month']) && in_array('2', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('2' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'February' : _p('february')); ?></option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '3') || (is_array($this->_aVars['aForms']['start_month']) && in_array('3', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('3' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'March' : _p('march')); ?></option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '4') || (is_array($this->_aVars['aForms']['start_month']) && in_array('4', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('4' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'April' : _p('april')); ?></option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '5') || (is_array($this->_aVars['aForms']['start_month']) && in_array('5', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('5' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'May' : _p('may')); ?></option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '6') || (is_array($this->_aVars['aForms']['start_month']) && in_array('6', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('6' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'June' : _p('june')); ?></option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '7') || (is_array($this->_aVars['aForms']['start_month']) && in_array('7', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('7' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'July' : _p('july')); ?></option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '8') || (is_array($this->_aVars['aForms']['start_month']) && in_array('8', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('8' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'August' : _p('august')); ?></option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '9') || (is_array($this->_aVars['aForms']['start_month']) && in_array('9', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('9' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'September' : _p('september')); ?></option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '10') || (is_array($this->_aVars['aForms']['start_month']) && in_array('10', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('10' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'October' : _p('october')); ?></option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '11') || (is_array($this->_aVars['aForms']['start_month']) && in_array('11', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('11' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'November' : _p('november')); ?></option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& (($this->_aVars['aForms']['start_month'] == '12') || (is_array($this->_aVars['aForms']['start_month']) && in_array('12', $this->_aVars['aForms']['start_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('12' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'December' : _p('december')); ?></option>
		</select>
<span class="field_separator"> / </span>		<select name="val[start_day]" id="start_day" class="form-control js_datepicker_day">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '1') || (is_array($this->_aVars['aForms']['start_day']) && in_array('1', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('1' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>1</option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '2') || (is_array($this->_aVars['aForms']['start_day']) && in_array('2', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('2' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>2</option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '3') || (is_array($this->_aVars['aForms']['start_day']) && in_array('3', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('3' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>3</option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '4') || (is_array($this->_aVars['aForms']['start_day']) && in_array('4', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('4' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>4</option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '5') || (is_array($this->_aVars['aForms']['start_day']) && in_array('5', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('5' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>5</option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '6') || (is_array($this->_aVars['aForms']['start_day']) && in_array('6', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('6' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>6</option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '7') || (is_array($this->_aVars['aForms']['start_day']) && in_array('7', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('7' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>7</option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '8') || (is_array($this->_aVars['aForms']['start_day']) && in_array('8', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('8' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>8</option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '9') || (is_array($this->_aVars['aForms']['start_day']) && in_array('9', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('9' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>9</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '10') || (is_array($this->_aVars['aForms']['start_day']) && in_array('10', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('10' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '11') || (is_array($this->_aVars['aForms']['start_day']) && in_array('11', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('11' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '12') || (is_array($this->_aVars['aForms']['start_day']) && in_array('12', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('12' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '13') || (is_array($this->_aVars['aForms']['start_day']) && in_array('13', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('13' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '14') || (is_array($this->_aVars['aForms']['start_day']) && in_array('14', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('14' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '15') || (is_array($this->_aVars['aForms']['start_day']) && in_array('15', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('15' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '16') || (is_array($this->_aVars['aForms']['start_day']) && in_array('16', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('16' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '17') || (is_array($this->_aVars['aForms']['start_day']) && in_array('17', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('17' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '18') || (is_array($this->_aVars['aForms']['start_day']) && in_array('18', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('18' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '19') || (is_array($this->_aVars['aForms']['start_day']) && in_array('19', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('19' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '20') || (is_array($this->_aVars['aForms']['start_day']) && in_array('20', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('20' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '21') || (is_array($this->_aVars['aForms']['start_day']) && in_array('21', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('21' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '22') || (is_array($this->_aVars['aForms']['start_day']) && in_array('22', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('22' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '23') || (is_array($this->_aVars['aForms']['start_day']) && in_array('23', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('23' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '24') || (is_array($this->_aVars['aForms']['start_day']) && in_array('24', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('24' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '25') || (is_array($this->_aVars['aForms']['start_day']) && in_array('25', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('25' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '26') || (is_array($this->_aVars['aForms']['start_day']) && in_array('26', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('26' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '27') || (is_array($this->_aVars['aForms']['start_day']) && in_array('27', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('27' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '28') || (is_array($this->_aVars['aForms']['start_day']) && in_array('28', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('28' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '29') || (is_array($this->_aVars['aForms']['start_day']) && in_array('29', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('29' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '30') || (is_array($this->_aVars['aForms']['start_day']) && in_array('30', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('30' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& (($this->_aVars['aForms']['start_day'] == '31') || (is_array($this->_aVars['aForms']['start_day']) && in_array('31', $this->_aVars['aForms']['start_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('31' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>31</option>
		</select>
<span class="field_separator"> / </span><?php $aYears = range(2018, 2019);   $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); ?>		<select name="val[start_year]" id="start_year" class="form-control js_datepicker_year">
<?php foreach ($aYears as $iYear): ?>			<option value="<?php echo $iYear; ?>"<?php echo ((isset($aParams['start_year']) && $aParams['start_year'] == $iYear) ? ' selected="selected"' : (!isset($this->_aVars['aForms']['start_year']) ? ($iYear == Phpfox::getTime('Y') ? ' selected="selected"' : '') : ($this->_aVars['aForms']['start_year'] == $iYear ? ' selected="selected"' : ''))); ?>><?php echo $iYear; ?></option>
<?php endforeach; ?>		</select>
</div><input type="text" name="js_start__datepicker" value="<?php if (isset($aParams['start_month'])):  echo $aParams['start_month'] . '/';  echo $aParams['start_day'] . '/';  echo $aParams['start_year'];  elseif (isset($this->_aVars['aForms'])):  if (isset($this->_aVars['aForms']['start_month'])):  switch(Phpfox::getParam("core.date_field_order")){  case "DMY":  echo $this->_aVars['aForms']['start_day'] . '/';  echo $this->_aVars['aForms']['start_month'] . '/';  echo $this->_aVars['aForms']['start_year'];  break;  case "MDY":  echo $this->_aVars['aForms']['start_month'] . '/';  echo $this->_aVars['aForms']['start_day'] . '/';  echo $this->_aVars['aForms']['start_year'];  break;  case "YMD":  echo $this->_aVars['aForms']['start_year'] . '/';  echo $this->_aVars['aForms']['start_month'] . '/';  echo $this->_aVars['aForms']['start_day'];  break;  }  endif;  else:  switch(Phpfox::getParam("core.date_field_order")){	case "DMY": echo Phpfox::getTime('j') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('Y'); break;	case "MDY": echo Phpfox::getTime('n') . '/' . Phpfox::getTime('j') . '/' . Phpfox::getTime('Y'); break;	case "YMD": echo Phpfox::getTime('Y') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('j'); break;} endif; ?>" class="form-control js_date_picker" /><div class="js_datepicker_image"></div></span> <span class="form-inline js_datepicker_selects"><span class="select-date-label">&nbsp;&nbsp;at&nbsp;&nbsp;</span>		<select class="form-control" name="val[start_hour]" id="start_hour">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '00') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('00', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('00' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '01') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('01', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('01' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '02') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('02', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('02' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '03') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('03', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('03' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '04') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('04', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('04' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '05') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('05', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('05' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '06') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('06', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('06' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '07') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('07', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('07' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '08') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('08', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('08' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '09') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('09', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('09' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '10') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('10', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('10' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '11') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('11', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('11' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '12') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('12', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('12' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '13') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('13', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('13' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '14') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('14', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('14' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '15') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('15', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('15' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '16') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('16', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('16' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '17') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('17', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('17' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '18') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('18', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('18' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '19') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('19', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('19' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '20') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('20', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('20' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '21') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('21', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('21' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '22') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('22', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('22' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& (($this->_aVars['aForms']['start_hour'] == '23') || (is_array($this->_aVars['aForms']['start_hour']) && in_array('23', $this->_aVars['aForms']['start_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('23' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>23</option>
		</select><span class="select-date-separator">:</span>
		<select class="form-control" name="val[start_minute]" id="start_minute">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '00') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('00', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('00' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '01') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('01', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('01' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '02') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('02', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('02' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '03') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('03', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('03' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '04') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('04', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('04' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '05') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('05', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('05' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '06') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('06', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('06' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '07') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('07', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('07' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '08') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('08', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('08' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '09') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('09', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('09' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '10') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('10', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('10' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '11') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('11', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('11' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '12') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('12', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('12' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '13') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('13', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('13' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '14') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('14', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('14' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '15') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('15', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('15' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '16') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('16', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('16' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '17') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('17', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('17' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '18') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('18', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('18' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '19') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('19', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('19' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '20') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('20', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('20' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '21') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('21', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('21' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '22') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('22', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('22' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '23') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('23', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('23' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '24') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('24', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('24' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '25') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('25', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('25' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '26') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('26', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('26' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '27') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('27', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('27' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '28') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('28', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('28' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '29') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('29', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('29' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '30') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('30', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('30' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '31') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('31', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('31' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>31</option>
			<option value="32"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '32')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '32') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('32', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('32' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>32</option>
			<option value="33"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '33')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '33') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('33', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('33' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>33</option>
			<option value="34"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '34')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '34') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('34', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('34' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>34</option>
			<option value="35"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '35')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '35') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('35', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('35' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>35</option>
			<option value="36"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '36')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '36') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('36', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('36' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>36</option>
			<option value="37"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '37')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '37') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('37', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('37' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>37</option>
			<option value="38"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '38')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '38') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('38', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('38' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>38</option>
			<option value="39"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '39')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '39') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('39', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('39' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>39</option>
			<option value="40"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '40')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '40') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('40', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('40' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>40</option>
			<option value="41"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '41')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '41') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('41', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('41' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>41</option>
			<option value="42"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '42')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '42') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('42', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('42' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>42</option>
			<option value="43"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '43')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '43') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('43', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('43' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>43</option>
			<option value="44"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '44')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '44') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('44', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('44' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>44</option>
			<option value="45"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '45')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '45') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('45', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('45' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>45</option>
			<option value="46"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '46')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '46') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('46', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('46' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>46</option>
			<option value="47"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '47')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '47') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('47', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('47' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>47</option>
			<option value="48"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '48')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '48') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('48', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('48' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>48</option>
			<option value="49"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '49')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '49') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('49', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('49' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>49</option>
			<option value="50"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '50')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '50') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('50', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('50' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>50</option>
			<option value="51"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '51')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '51') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('51', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('51' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>51</option>
			<option value="52"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '52')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '52') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('52', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('52' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>52</option>
			<option value="53"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '53')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '53') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('53', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('53' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>53</option>
			<option value="54"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '54')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '54') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('54', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('54' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>54</option>
			<option value="55"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '55')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '55') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('55', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('55' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>55</option>
			<option value="56"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '56')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '56') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('56', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('56' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>56</option>
			<option value="57"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '57')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '57') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('57', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('57' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>57</option>
			<option value="58"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '58')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '58') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('58', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('58' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>58</option>
			<option value="59"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '59')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& (($this->_aVars['aForms']['start_minute'] == '59') || (is_array($this->_aVars['aForms']['start_minute']) && in_array('59', $this->_aVars['aForms']['start_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('59' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>59</option>
		</select>
</span></div></div>
				</div>
		</div>	
		
		<div class="form-group" id="js_event_add_end_time">
				<label><?php echo _p('end_time'); ?></label>
				<div style="position: relative;" class="js_event_select">
				<div class="form-inline select_date"><div class="js_datepicker_core_end"><span class="js_datepicker_holder"><div style="display:none;"><select  name="val[end_month]" id="end_month" class="form-control js_datepicker_month">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '1') || (is_array($this->_aVars['aForms']['end_month']) && in_array('1', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('1' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'January' : _p('january')); ?></option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '2') || (is_array($this->_aVars['aForms']['end_month']) && in_array('2', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('2' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'February' : _p('february')); ?></option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '3') || (is_array($this->_aVars['aForms']['end_month']) && in_array('3', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('3' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'March' : _p('march')); ?></option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '4') || (is_array($this->_aVars['aForms']['end_month']) && in_array('4', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('4' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'April' : _p('april')); ?></option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '5') || (is_array($this->_aVars['aForms']['end_month']) && in_array('5', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('5' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'May' : _p('may')); ?></option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '6') || (is_array($this->_aVars['aForms']['end_month']) && in_array('6', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('6' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'June' : _p('june')); ?></option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '7') || (is_array($this->_aVars['aForms']['end_month']) && in_array('7', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('7' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'July' : _p('july')); ?></option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '8') || (is_array($this->_aVars['aForms']['end_month']) && in_array('8', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('8' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'August' : _p('august')); ?></option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '9') || (is_array($this->_aVars['aForms']['end_month']) && in_array('9', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('9' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'September' : _p('september')); ?></option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '10') || (is_array($this->_aVars['aForms']['end_month']) && in_array('10', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('10' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'October' : _p('october')); ?></option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '11') || (is_array($this->_aVars['aForms']['end_month']) && in_array('11', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('11' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'November' : _p('november')); ?></option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& (($this->_aVars['aForms']['end_month'] == '12') || (is_array($this->_aVars['aForms']['end_month']) && in_array('12', $this->_aVars['aForms']['end_month']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('12' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'December' : _p('december')); ?></option>
		</select>
<span class="field_separator"> / </span>		<select name="val[end_day]" id="end_day" class="form-control js_datepicker_day">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '1') || (is_array($this->_aVars['aForms']['end_day']) && in_array('1', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('1' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>1</option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '2') || (is_array($this->_aVars['aForms']['end_day']) && in_array('2', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('2' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>2</option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '3') || (is_array($this->_aVars['aForms']['end_day']) && in_array('3', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('3' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>3</option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '4') || (is_array($this->_aVars['aForms']['end_day']) && in_array('4', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('4' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>4</option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '5') || (is_array($this->_aVars['aForms']['end_day']) && in_array('5', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('5' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>5</option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '6') || (is_array($this->_aVars['aForms']['end_day']) && in_array('6', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('6' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>6</option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '7') || (is_array($this->_aVars['aForms']['end_day']) && in_array('7', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('7' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>7</option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '8') || (is_array($this->_aVars['aForms']['end_day']) && in_array('8', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('8' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>8</option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '9') || (is_array($this->_aVars['aForms']['end_day']) && in_array('9', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('9' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>9</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '10') || (is_array($this->_aVars['aForms']['end_day']) && in_array('10', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('10' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '11') || (is_array($this->_aVars['aForms']['end_day']) && in_array('11', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('11' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '12') || (is_array($this->_aVars['aForms']['end_day']) && in_array('12', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('12' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '13') || (is_array($this->_aVars['aForms']['end_day']) && in_array('13', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('13' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '14') || (is_array($this->_aVars['aForms']['end_day']) && in_array('14', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('14' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '15') || (is_array($this->_aVars['aForms']['end_day']) && in_array('15', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('15' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '16') || (is_array($this->_aVars['aForms']['end_day']) && in_array('16', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('16' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '17') || (is_array($this->_aVars['aForms']['end_day']) && in_array('17', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('17' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '18') || (is_array($this->_aVars['aForms']['end_day']) && in_array('18', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('18' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '19') || (is_array($this->_aVars['aForms']['end_day']) && in_array('19', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('19' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '20') || (is_array($this->_aVars['aForms']['end_day']) && in_array('20', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('20' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '21') || (is_array($this->_aVars['aForms']['end_day']) && in_array('21', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('21' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '22') || (is_array($this->_aVars['aForms']['end_day']) && in_array('22', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('22' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '23') || (is_array($this->_aVars['aForms']['end_day']) && in_array('23', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('23' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '24') || (is_array($this->_aVars['aForms']['end_day']) && in_array('24', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('24' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '25') || (is_array($this->_aVars['aForms']['end_day']) && in_array('25', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('25' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '26') || (is_array($this->_aVars['aForms']['end_day']) && in_array('26', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('26' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '27') || (is_array($this->_aVars['aForms']['end_day']) && in_array('27', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('27' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '28') || (is_array($this->_aVars['aForms']['end_day']) && in_array('28', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('28' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '29') || (is_array($this->_aVars['aForms']['end_day']) && in_array('29', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('29' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '30') || (is_array($this->_aVars['aForms']['end_day']) && in_array('30', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('30' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& (($this->_aVars['aForms']['end_day'] == '31') || (is_array($this->_aVars['aForms']['end_day']) && in_array('31', $this->_aVars['aForms']['end_day']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('31' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>31</option>
		</select>
<span class="field_separator"> / </span><?php $aYears = range(2018, 2019);   $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); ?>		<select name="val[end_year]" id="end_year" class="form-control js_datepicker_year">
<?php foreach ($aYears as $iYear): ?>			<option value="<?php echo $iYear; ?>"<?php echo ((isset($aParams['end_year']) && $aParams['end_year'] == $iYear) ? ' selected="selected"' : (!isset($this->_aVars['aForms']['end_year']) ? ($iYear == Phpfox::getTime('Y') ? ' selected="selected"' : '') : ($this->_aVars['aForms']['end_year'] == $iYear ? ' selected="selected"' : ''))); ?>><?php echo $iYear; ?></option>
<?php endforeach; ?>		</select>
</div><input type="text" name="js_end__datepicker" value="<?php if (isset($aParams['end_month'])):  echo $aParams['end_month'] . '/';  echo $aParams['end_day'] . '/';  echo $aParams['end_year'];  elseif (isset($this->_aVars['aForms'])):  if (isset($this->_aVars['aForms']['end_month'])):  switch(Phpfox::getParam("core.date_field_order")){  case "DMY":  echo $this->_aVars['aForms']['end_day'] . '/';  echo $this->_aVars['aForms']['end_month'] . '/';  echo $this->_aVars['aForms']['end_year'];  break;  case "MDY":  echo $this->_aVars['aForms']['end_month'] . '/';  echo $this->_aVars['aForms']['end_day'] . '/';  echo $this->_aVars['aForms']['end_year'];  break;  case "YMD":  echo $this->_aVars['aForms']['end_year'] . '/';  echo $this->_aVars['aForms']['end_month'] . '/';  echo $this->_aVars['aForms']['end_day'];  break;  }  endif;  else:  switch(Phpfox::getParam("core.date_field_order")){	case "DMY": echo Phpfox::getTime('j') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('Y'); break;	case "MDY": echo Phpfox::getTime('n') . '/' . Phpfox::getTime('j') . '/' . Phpfox::getTime('Y'); break;	case "YMD": echo Phpfox::getTime('Y') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('j'); break;} endif; ?>" class="form-control js_date_picker" /><div class="js_datepicker_image"></div></span> <span class="form-inline js_datepicker_selects"><span class="select-date-label">&nbsp;&nbsp;at&nbsp;&nbsp;</span>		<select class="form-control" name="val[end_hour]" id="end_hour">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '00') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('00', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('00' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '01') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('01', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('01' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '02') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('02', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('02' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '03') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('03', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('03' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '04') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('04', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('04' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '05') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('05', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('05' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '06') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('06', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('06' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '07') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('07', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('07' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '08') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('08', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('08' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '09') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('09', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('09' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '10') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('10', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('10' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '11') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('11', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('11' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '12') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('12', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('12' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '13') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('13', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('13' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '14') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('14', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('14' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '15') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('15', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('15' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '16') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('16', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('16' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '17') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('17', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('17' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '18') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('18', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('18' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '19') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('19', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('19' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '20') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('20', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('20' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '21') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('21', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('21' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '22') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('22', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('22' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& (($this->_aVars['aForms']['end_hour'] == '23') || (is_array($this->_aVars['aForms']['end_hour']) && in_array('23', $this->_aVars['aForms']['end_hour']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('23' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>23</option>
		</select><span class="select-date-separator">:</span>
		<select class="form-control" name="val[end_minute]" id="end_minute">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '00') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('00', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('00' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '01') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('01', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('01' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '02') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('02', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('02' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '03') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('03', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('03' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '04') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('04', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('04' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '05') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('05', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('05' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '06') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('06', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('06' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '07') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('07', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('07' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '08') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('08', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('08' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '09') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('09', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('09' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '10') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('10', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('10' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '11') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('11', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('11' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '12') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('12', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('12' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '13') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('13', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('13' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '14') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('14', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('14' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '15') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('15', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('15' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '16') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('16', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('16' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '17') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('17', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('17' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '18') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('18', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('18' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '19') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('19', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('19' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '20') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('20', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('20' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '21') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('21', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('21' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '22') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('22', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('22' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '23') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('23', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('23' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '24') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('24', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('24' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '25') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('25', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('25' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '26') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('26', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('26' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '27') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('27', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('27' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '28') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('28', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('28' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '29') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('29', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('29' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '30') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('30', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('30' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '31') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('31', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('31' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>31</option>
			<option value="32"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '32')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '32') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('32', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('32' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>32</option>
			<option value="33"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '33')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '33') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('33', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('33' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>33</option>
			<option value="34"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '34')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '34') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('34', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('34' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>34</option>
			<option value="35"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '35')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '35') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('35', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('35' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>35</option>
			<option value="36"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '36')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '36') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('36', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('36' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>36</option>
			<option value="37"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '37')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '37') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('37', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('37' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>37</option>
			<option value="38"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '38')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '38') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('38', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('38' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>38</option>
			<option value="39"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '39')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '39') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('39', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('39' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>39</option>
			<option value="40"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '40')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '40') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('40', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('40' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>40</option>
			<option value="41"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '41')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '41') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('41', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('41' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>41</option>
			<option value="42"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '42')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '42') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('42', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('42' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>42</option>
			<option value="43"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '43')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '43') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('43', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('43' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>43</option>
			<option value="44"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '44')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '44') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('44', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('44' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>44</option>
			<option value="45"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '45')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '45') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('45', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('45' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>45</option>
			<option value="46"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '46')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '46') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('46', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('46' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>46</option>
			<option value="47"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '47')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '47') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('47', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('47' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>47</option>
			<option value="48"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '48')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '48') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('48', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('48' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>48</option>
			<option value="49"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '49')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '49') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('49', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('49' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>49</option>
			<option value="50"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '50')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '50') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('50', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('50' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>50</option>
			<option value="51"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '51')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '51') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('51', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('51' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>51</option>
			<option value="52"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '52')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '52') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('52', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('52' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>52</option>
			<option value="53"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '53')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '53') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('53', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('53' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>53</option>
			<option value="54"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '54')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '54') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('54', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('54' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>54</option>
			<option value="55"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '55')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '55') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('55', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('55' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>55</option>
			<option value="56"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '56')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '56') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('56', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('56' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>56</option>
			<option value="57"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '57')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '57') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('57', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('57' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>57</option>
			<option value="58"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '58')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '58') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('58', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('58' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>58</option>
			<option value="59"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '59')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& (($this->_aVars['aForms']['end_minute'] == '59') || (is_array($this->_aVars['aForms']['end_minute']) && in_array('59', $this->_aVars['aForms']['end_minute']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('59' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>59</option>
		</select>
</span></div></div>
				</div>
		</div>		

		<div class="form-group">
			*<label for="location"><?php echo _p('location_venue'); ?></label>
				<input type="text" name="val[location]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['location']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['location']) : (isset($this->_aVars['aForms']['location']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['location']) : '')); ?>
" id="location" size="40" maxlength="200" class="form-control" />
		</div>
		
		<div id="js_event_add_country" class="item-event-add-country">
			<div class="form-group item-event-address">
					<label for="street_address"><?php echo _p('address'); ?></label>
					<input type="text" name="val[address]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['address']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['address']) : (isset($this->_aVars['aForms']['address']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['address']) : '')); ?>
" id="address" size="30" maxlength="200" class="form-control" />
			</div>			 			 
				
			<div class="form-group item-event-city">
					<label for="city"><?php echo _p('city'); ?></label>
					<input type="text" name="val[city]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['city']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['city']) : (isset($this->_aVars['aForms']['city']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['city']) : '')); ?>
" id="city" size="20" maxlength="200" class="form-control" />
			</div>		
			
			<div class="form-group item-event-postal">
					<label for="postal_code"><?php echo _p('zip_postal_code'); ?></label>
					<input type="text" name="val[postal_code]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['postal_code']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['postal_code']) : (isset($this->_aVars['aForms']['postal_code']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['postal_code']) : '')); ?>
" id="postal_code" size="10" maxlength="20" class="form-control" />
			</div>		
			 
			<div class="form-group item-event-country">
					<label for="country_iso"><?php echo _p('country'); ?></label>
					<?php Phpfox::getBlock('core.country-build', array('param'=> array (
))); ?>
<?php Phpfox::getBlock('core.country-child', array()); ?>
				</div>
			</div>
<?php if (! empty ( $this->_aVars['aForms']['current_image'] ) && ! empty ( $this->_aVars['aForms']['event_id'] )): ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'event','current_photo' => $this->_aVars['aForms']['current_image'],'id' => $this->_aVars['aForms']['event_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'event')); ?>
<?php endif; ?>
<?php if (empty ( $this->_aVars['sModule'] ) && Phpfox ::isModule('privacy')): ?>
            <div class="form-group-flow">
                    <label><?php echo _p('event_privacy'); ?></label>
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'event.control_who_can_see_this_event','privacy_no_custom' => true,'default_privacy' => 'event.display_on_profile')); ?>
            </div>
<?php endif; ?>
            <div class="">
                <input type="submit" value="<?php if ($this->_aVars['bIsEdit']):  echo _p('update');  else:  echo _p('submit');  endif; ?>" class="button btn-primary js_event_submit_form"/>
            </div>
    </div>

    <div id="js_event_block_invite" class="js_event_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'invite'): ?>style="display:none;"<?php endif; ?>>
        <div class="block">
            <div class="form-group">
                <label for="js_find_friend"><?php echo _p('invite_friends'); ?></label>
<?php if (isset ( $this->_aVars['aForms']['event_id'] )): ?>
                <div id="js_selected_friends" class="hide_it"></div>
<?php Phpfox::getBlock('friend.search', array('input' => 'invite','hide' => true,'friend_item_id' => $this->_aVars['aForms']['event_id'],'friend_module_id' => 'event')); ?>
<?php endif; ?>
            </div>
            <div class="form-group invite-friend-by-email">
                <label for="emails"><?php echo _p('invite_people_via_email'); ?></label>
                <input name="val[emails]" id="emails" class="form-control" data-component="tokenfield" data-type="email" >
                <p class="help-block"><?php echo _p('separate_multiple_emails_with_a_comma'); ?></p>
            </div>
            <div class="form-group">
                <label for="personal_message"><?php echo _p('add_a_personal_message'); ?></label>
                <textarea rows="1" name="val[personal_message]" id="personal_message" class="form-control textarea-auto-scale" placeholder="<?php echo _p('write_message'); ?>"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="<?php echo _p('send_invitations'); ?>" class="btn btn-primary" name="invite_submit"/>
            </div>

        </div>
    </div>

<?php if ($this->_aVars['bIsEdit']): ?>
	<div id="js_event_block_manage" class="js_event_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'manage'): ?>style="display:none;"<?php endif; ?>>
<?php Phpfox::getBlock('event.list', array()); ?>
	</div>
<?php endif; ?>
	
<?php if ($this->_aVars['bIsEdit'] && Phpfox ::getUserParam('event.can_mass_mail_own_members')): ?>
        <div id="js_event_block_email" class="js_event_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'email'): ?>style="display:none;"<?php endif; ?>>
            <p class="help-block">
<?php echo _p('send_out_an_email_to_all_the_guests_that_are_joining_this_event'); ?>
<?php if (isset ( $this->_aVars['aForms']['mass_email'] ) && $this->_aVars['aForms']['mass_email']): ?>
                    <br />
<?php echo _p('last_mass_email'); ?>: <?php echo Phpfox::getTime(Phpfox::getParam('mail.mail_time_stamp'), $this->_aVars['aForms']['mass_email']); ?>
<?php endif; ?>
            </p>

            <div class="mass-email-guests-block">
                <div id="js_send_email"<?php if (! $this->_aVars['bCanSendEmails']): ?> style="display:none;"<?php endif; ?>>
                    <div class="form-group">
                        <label for="js_mass_email_subject"><?php echo _p('subject'); ?></label>
                        <input type="text" name="val[mass_email_subject]" value="" size="30" id="js_mass_email_subject" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="js_mass_email_text"><?php echo _p('text'); ?></label>
                        <textarea class="form-control" rows="8" name="val[mass_email_text]" id="js_mass_email_text"></textarea>
                    </div>
                </div>
            </div>
            <ul>
                <li><input type="button" value="<?php echo _p('send'); ?>" class="btn btn-primary" onclick="$('#js_event_mass_mail_li').show(); $.ajaxCall('event.massEmail', 'type=message&amp;id=<?php echo $this->_aVars['aForms']['event_id']; ?>&amp;subject=' + $('#js_mass_email_subject').val() + '&amp;text=' + $('#js_mass_email_text').val()); return false;" /></li>
                <li id="js_event_mass_mail_li" style="display:none;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'v_middle')); ?> <span id="js_event_mass_mail_send">Sending mass email...</span></li>
            </ul>
            <div id="js_send_email_fail"<?php if ($this->_aVars['bCanSendEmails']): ?> style="display:none;"<?php endif; ?>>
                <p class="help-block">
<?php echo _p('you_are_unable_to_send_out_any_mass_emails_at_the_moment'); ?>
                    <br />
<?php echo _p('please_wait_till'); ?>: <span id="js_time_left"><?php echo Phpfox::getTime(Phpfox::getParam('mail.mail_time_stamp'), $this->_aVars['iCanSendEmailsTime']); ?></span>
                </p>
            </div>
        </div>
<?php endif; ?>
	

</form>

<?php echo Phpfox::getLib('template')->getSectionMenuJavaScript(); ?>

<script type="text/javascript">
<?php echo '
	$Behavior.resetDatepicker = function(){
		$(\'.js_event_select .js_date_picker\').datepicker(\'option\', \'maxDate\', \'+1y\');
	};
'; ?>

</script>

