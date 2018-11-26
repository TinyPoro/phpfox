<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:35 am */ ?>
<?php

?>

<?php if (isset ( $this->_aVars['aCustomField']['fields'] )): ?>
<?php if (count((array)$this->_aVars['aCustomField']['fields'])):  foreach ((array) $this->_aVars['aCustomField']['fields'] as $this->_aVars['aField']): ?>
		<div class="form-group <?php if (isset ( $this->_aVars['sFormGroupClass'] )):  echo $this->_aVars['sFormGroupClass'];  endif; ?>">
			<label><?php echo _p($this->_aVars['aField']['phrase_var_name']); ?></label>
<?php if ($this->_aVars['aField']['var_type'] == 'textarea' || $this->_aVars['aField']['var_type'] == 'text'): ?>
            <input type="text" class="form-control js_custom_search" name="custom[<?php echo $this->_aVars['aField']['field_id']; ?>]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams[''.$this->_aVars['aField']['field_id'].'']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams[''.$this->_aVars['aField']['field_id'].'']) : (isset($this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].'']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].'']) : '')); ?>
" size="25" />
<?php elseif ($this->_aVars['aField']['var_type'] == 'select'): ?>
            <!-- custom input type select -->
            <select name="custom[<?php echo $this->_aVars['aField']['field_id']; ?>]" class="form-control js_custom_search">
                <option value=""><?php echo _p('any'); ?></option>
<?php if (count((array)$this->_aVars['aField']['options'])):  foreach ((array) $this->_aVars['aField']['options'] as $this->_aVars['aOption']): ?>
                <option value="<?php echo $this->_aVars['aOption']['option_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].''])
 && is_numeric(''.$this->_aVars['aOption']['option_id'].'') && in_array(''.$this->_aVars['aOption']['option_id'].'', $this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].'']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams[''.$this->_aVars['aOption']['option_id'].''])
								&& $aParams[''.$this->_aVars['aOption']['option_id'].''] == $this->_aVars['aOption']['option_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].''])
									&& !isset($aParams[''.$this->_aVars['aOption']['option_id'].''])
									&& (($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].''] == $this->_aVars['aOption']['option_id']) || (is_array($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].'']) && in_array($this->_aVars['aOption']['option_id'], $this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].'']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p($this->_aVars['aOption']['phrase_var_name']); ?></option>
<?php endforeach; endif; ?>
            </select>
<?php elseif ($this->_aVars['aField']['var_type'] == 'multiselect'): ?>
            <!-- custom input type multi select -->
            <select name="custom[<?php echo $this->_aVars['aField']['field_id']; ?>][]" multiple class="form-control js_custom_search" >
                <option value="0"><?php echo _p('any'); ?></option>
<?php if (count((array)$this->_aVars['aField']['options'])):  foreach ((array) $this->_aVars['aField']['options'] as $this->_aVars['aOption']): ?>
                <option value="<?php echo $this->_aVars['aOption']['option_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].''])
 && is_numeric(''.$this->_aVars['aOption']['option_id'].'') && in_array(''.$this->_aVars['aOption']['option_id'].'', $this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].'']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams[''.$this->_aVars['aOption']['option_id'].''])
								&& $aParams[''.$this->_aVars['aOption']['option_id'].''] == $this->_aVars['aOption']['option_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].''])
									&& !isset($aParams[''.$this->_aVars['aOption']['option_id'].''])
									&& (($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].''] == $this->_aVars['aOption']['option_id']) || (is_array($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].'']) && in_array($this->_aVars['aOption']['option_id'], $this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].'']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p($this->_aVars['aOption']['phrase_var_name']); ?></option>
<?php endforeach; endif; ?>
            </select>
<?php elseif ($this->_aVars['aField']['var_type'] == 'radio'): ?>

<?php if (count((array)$this->_aVars['aField']['options'])):  foreach ((array) $this->_aVars['aField']['options'] as $this->_aVars['aOption']): ?>
            <div class="custom-radio-wrapper">
                <label>
                    <input type="radio" name="custom[<?php echo $this->_aVars['aField']['field_id']; ?>]" value="<?php echo $this->_aVars['aOption']['option_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric(''.$this->_aVars['aOption']['option_id'].'') && in_array(''.$this->_aVars['aOption']['option_id'].'', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams[''.$this->_aVars['aOption']['option_id'].'']) && $aParams[''.$this->_aVars['aOption']['option_id'].''] == ''.$this->_aVars['aOption']['option_id'].''))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].'']) && !isset($aParams[''.$this->_aVars['aOption']['option_id'].'']) && $this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].''] == ''.$this->_aVars['aOption']['option_id'].'')
 {
    echo ' checked="checked" ';}
 else
 {
 }
}
?> 
 class="js_custom_search">
                    <span class="custom-radio"></span>
<?php echo _p($this->_aVars['aOption']['phrase_var_name']); ?>
                </label>
            </div>
<?php endforeach; endif; ?>
<?php elseif ($this->_aVars['aField']['var_type'] == 'checkbox'): ?>
<?php if (count((array)$this->_aVars['aField']['options'])):  foreach ((array) $this->_aVars['aField']['options'] as $this->_aVars['aOption']): ?>
            <div class="custom-checkbox-wrapper">
                <label>
                    <input type="checkbox" name="custom[<?php echo $this->_aVars['aField']['field_id']; ?>][<?php echo $this->_aVars['aOption']['option_id']; ?>]" value="<?php echo $this->_aVars['aOption']['option_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].''])
 && is_numeric(''.$this->_aVars['aOption']['option_id'].'') && in_array(''.$this->_aVars['aOption']['option_id'].'', $this->_aVars['aForms'][''.$this->_aVars['aField']['field_id'].'']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams[''.$this->_aVars['aOption']['option_id'].''])
								&& $aParams[''.$this->_aVars['aOption']['option_id'].''] == $this->_aVars['aOption']['option_id'])

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].''])
									&& !isset($aParams[''.$this->_aVars['aOption']['option_id'].''])
									&& (($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].''] == $this->_aVars['aOption']['option_id']) || (is_array($this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].'']) && in_array($this->_aVars['aOption']['option_id'], $this->_aVars['aForms'][''.$this->_aVars['aOption']['option_id'].'']))))
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo "";
								}
							}
							?>
 class="js_custom_search v_middle">
                    <span class="custom-checkbox"></span>
<?php echo _p($this->_aVars['aOption']['phrase_var_name']); ?>
                </label>
            </div>
<?php endforeach; endif; ?>
<?php endif; ?>
		</div>
<?php endforeach; endif;  endif; ?>
