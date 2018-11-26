<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 12:27 pm */ ?>
<?php

 if (! $this->_aVars['bIsEdit']): ?>
<div id="js_group_holder" style="display:none;">
<?php echo $this->_aVars['sGroupCreateJs']; ?>
	<form class="form" method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.custom.add'); ?>" id="js_group_field" onsubmit="if (<?php echo $this->_aVars['sGroupGetJsForm']; ?>) <?php echo '{ $(this).ajaxCall(\'custom.addGroup\'); }'; ?>
 return false;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?php echo _p('group_details'); ?></div>
            </div>
            <div class="panel-body">
                <div <?php if ($this->_aVars['bIsEdit']): ?> style="display:none;"<?php endif; ?> >
<?php Phpfox::getBlock('admincp.product.form', array('class' => true)); ?>
<?php Phpfox::getBlock('admincp.module.form', array('class' => false)); ?>
                    <div class="form-group">
                        <label for="val_type_id" class="required"><?php echo _p('location'); ?></label>
                        <select name="val[type_id]" class="form-control type_id" id="val_type_id">
                            <option value=""><?php echo _p('select'); ?>:</option>
<?php if (count((array)$this->_aVars['aGroupTypes'])):  foreach ((array) $this->_aVars['aGroupTypes'] as $this->_aVars['sVar'] => $this->_aVars['sPhrase']): ?>
                            <option value="<?php echo $this->_aVars['sVar']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('type_id') && in_array('type_id', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['type_id'])
								&& $aParams['type_id'] == $this->_aVars['sVar'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['type_id'])
									&& !isset($aParams['type_id'])
									&& (($this->_aVars['aForms']['type_id'] == $this->_aVars['sVar']) || (is_array($this->_aVars['aForms']['type_id']) && in_array($this->_aVars['sVar'], $this->_aVars['aForms']['type_id']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo $this->_aVars['sPhrase']; ?></option>
<?php endforeach; endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="val_user_group_id"><?php echo _p('user_group'); ?></label>
                        <select name="val[user_group_id]" id="val_user_group_id" class="form-control">
                            <option value=""><?php echo _p('select'); ?>:</option>
<?php if (count((array)$this->_aVars['aUserGroups'])):  foreach ((array) $this->_aVars['aUserGroups'] as $this->_aVars['iKey'] => $this->_aVars['aGroup']): ?>
                            <option value="<?php echo $this->_aVars['aGroup']['user_group_id']; ?>" <?php if ($this->_aVars['bIsEdit'] && $this->_aVars['aGroup']['user_group_id'] == $this->_aVars['aForms']['user_group_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_aVars['aGroup']['title']; ?></option>
<?php endforeach; endif; ?>
                        </select>
                        <div class="help-block">
<?php echo _p('select_only_if_you_want_a_specific_user_group_to_have_special_custom_fields'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="required"><?php echo _p('group'); ?></label>
<?php if ($this->_aVars['bIsEdit']): ?>
<?php Phpfox::getBlock('language.admincp.form', array('type' => 'text','id' => 'group','value' => $this->_aVars['aForms']['group'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('language.admincp.form', array('type' => 'text','id' => 'group')); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="<?php echo _p('add_group'); ?>" class="btn btn-primary" />
                    <input type="button" value="<?php echo _p('cancel_uppercase'); ?>" class="btn btn-danger" id="js_cancel_new_group" />
                </div>
            </div>
        </div>

	
</form>

</div>
<?php endif; ?>

<div id="js_field_holder">
<?php echo $this->_aVars['sCustomCreateJs']; ?>
	<form class="form" method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.custom.add'); ?>" id="js_custom_field" onsubmit="<?php echo $this->_aVars['sCustomGetJsForm']; ?>">
<?php if ($this->_aVars['bIsEdit']): ?>
		<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['field_id']; ?>" /></div>
		<div><input type="hidden" name="val[module_id]" value="<?php echo $this->_aVars['aForms']['module_id']; ?>"></div>
<?php endif; ?>

        <div class="panel panel-default">
            <div class="panel-body">
                <div <?php if ($this->_aVars['bIsEdit']): ?> style="display:none;"<?php endif; ?> >
<?php Phpfox::getBlock('admincp.product.form', array('class' => true)); ?>
                </div>
                <div class="form-group">
                <label for="js_group_listing"><?php echo _p('group'); ?></label>
                <div class="form-group">
                    <select name="val[group_id]" id="js_group_listing" class="form-control">
<?php if (count((array)$this->_aVars['aGroups'])):  foreach ((array) $this->_aVars['aGroups'] as $this->_aVars['aGroup']): ?>
                        <option value="<?php echo $this->_aVars['aGroup']['group_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('group_id') && in_array('group_id', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['group_id'])
								&& $aParams['group_id'] == $this->_aVars['aGroup']['group_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['group_id'])
									&& !isset($aParams['group_id'])
									&& (($this->_aVars['aForms']['group_id'] == $this->_aVars['aGroup']['group_id']) || (is_array($this->_aVars['aForms']['group_id']) && in_array($this->_aVars['aGroup']['group_id'], $this->_aVars['aForms']['group_id']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p($this->_aVars['aGroup']['phrase_var_name']); ?></option>
<?php endforeach; endif; ?>
                    </select>
<?php if (! $this->_aVars['bIsEdit'] && Phpfox ::getUserParam('custom.can_add_custom_fields_group')): ?>
                    <div class="table_clear_more_options"><a role="button"  class="no-ajax" id="js_create_new_group"><?php echo _p('create_a_new_group'); ?></a></div>
<?php endif; ?>
                </div>
            </div>
                <div class="form-group">
                <label for="is_required"><?php echo _p('required'); ?></label>
                <div class="custom-radio-wrapper">
                    <label class="radio-inline">
                        <input type="radio" name="val[is_required]" value="1" class="v_middle checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('is_required') && in_array('is_required', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['is_required']) && $aParams['is_required'] == '1'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['is_required']) && !isset($aParams['is_required']) && $this->_aVars['aForms']['is_required'] == '1')
 {
    echo ' checked="checked" ';}
 else
 {
 }
}
?> 
/>
                        <span class="custom-radio"></span>
<?php echo _p('yes'); ?>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="val[is_required]" value="0" class="v_middle checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('is_required') && in_array('is_required', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['is_required']) && $aParams['is_required'] == '0'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['is_required']) && !isset($aParams['is_required']) && $this->_aVars['aForms']['is_required'] == '0')
 {
    echo ' checked="checked" ';}
 else
 {
 if (!isset($this->_aVars['aForms']) || ((isset($this->_aVars['aForms']) && !isset($this->_aVars['aForms']['is_required']) && !isset($aParams['is_required']))))
{
 echo ' checked="checked"';
}
 }
}
?> 
/>
                        <span class="custom-radio"></span>
<?php echo _p('no'); ?>
                    </label>
                </div>
            </div>
                <div class="form-group">
                <label for="on_signup"><?php echo _p('include_on_registration'); ?></label>
                <div class="custom-radio-wrapper">
                    <label class="radio-inline">
                        <input type="radio" name="val[on_signup]" value="1" class="v_middle checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('on_signup') && in_array('on_signup', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['on_signup']) && $aParams['on_signup'] == '1'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['on_signup']) && !isset($aParams['on_signup']) && $this->_aVars['aForms']['on_signup'] == '1')
 {
    echo ' checked="checked" ';}
 else
 {
 }
}
?> 
/>
                        <span class="custom-radio"></span>
<?php echo _p('yes'); ?>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="val[on_signup]" value="0" class="v_middle checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('on_signup') && in_array('on_signup', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['on_signup']) && $aParams['on_signup'] == '0'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['on_signup']) && !isset($aParams['on_signup']) && $this->_aVars['aForms']['on_signup'] == '0')
 {
    echo ' checked="checked" ';}
 else
 {
 if (!isset($this->_aVars['aForms']) || ((isset($this->_aVars['aForms']) && !isset($this->_aVars['aForms']['on_signup']) && !isset($aParams['on_signup']))))
{
 echo ' checked="checked"';
}
 }
}
?> 
/>
                        <span class="custom-radio"></span>
<?php echo _p('no'); ?>
                    </label>
                </div>
            </div>
                <div class="form-group">
                    <label for="is_search"><?php echo _p('include_on_search_user'); ?></label>
                    <div class="custom-radio-wrapper">
                        <label class="radio-inline">
                            <input type="radio" name="val[is_search]" value="1" class="v_middle checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('is_search') && in_array('is_search', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['is_search']) && $aParams['is_search'] == '1'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['is_search']) && !isset($aParams['is_search']) && $this->_aVars['aForms']['is_search'] == '1')
 {
    echo ' checked="checked" ';}
 else
 {
 if (!isset($this->_aVars['aForms']) || ((isset($this->_aVars['aForms']) && !isset($this->_aVars['aForms']['is_search']) && !isset($aParams['is_search']))))
{
 echo ' checked="checked"';
}
 }
}
?> 
/>
                            <span class="custom-radio"></span>
<?php echo _p('yes'); ?>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="val[is_search]" value="0" class="v_middle checkbox" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('is_search') && in_array('is_search', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['is_search']) && $aParams['is_search'] == '0'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['is_search']) && !isset($aParams['is_search']) && $this->_aVars['aForms']['is_search'] == '0')
 {
    echo ' checked="checked" ';}
 else
 {
 }
}
?> 
/>
                            <span class="custom-radio"></span>
<?php echo _p('no'); ?>
                        </label>
                    </div>
                </div>
                <div <?php if ($this->_aVars['bShowUserGroups'] == false): ?> style="display:none;"<?php endif; ?>>
                    <div class="form-group">
                        <label for="user_group_id"><?php echo _p('user_group'); ?></label>
                        <select id="user_group_id" name="val[user_group_id]" class="form-control">
                            <option value=""><?php echo _p('select'); ?>:</option>
<?php if (count((array)$this->_aVars['aUserGroups'])):  foreach ((array) $this->_aVars['aUserGroups'] as $this->_aVars['iKey'] => $this->_aVars['aGroup']): ?>
                            <option value="<?php echo $this->_aVars['aGroup']['user_group_id']; ?>" <?php if ($this->_aVars['bIsEdit'] && $this->_aVars['aGroup']['user_group_id'] == $this->_aVars['aForms']['user_group_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_aVars['aGroup']['title']; ?></option>
<?php endforeach; endif; ?>
                        </select>
                        <p class="help-block"><?php echo _p('select_only_if_you_want_a_specific_user_group_to_have_special_custom_fields'); ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="type_id" class="required"><?php echo _p('location'); ?></label>
                    <select id="type_id" name="val[type_id]" class="type_id form-control" required>
                        <option value=""><?php echo _p('select'); ?>:</option>
<?php if (count((array)$this->_aVars['aTypes'])):  foreach ((array) $this->_aVars['aTypes'] as $this->_aVars['sVar'] => $this->_aVars['sPhrase']): ?>
                        <option value="<?php echo $this->_aVars['sVar']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('type_id') && in_array('type_id', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['type_id'])
								&& $aParams['type_id'] == $this->_aVars['sVar'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['type_id'])
									&& !isset($aParams['type_id'])
									&& (($this->_aVars['aForms']['type_id'] == $this->_aVars['sVar']) || (is_array($this->_aVars['aForms']['type_id']) && in_array($this->_aVars['sVar'], $this->_aVars['aForms']['type_id']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo $this->_aVars['sPhrase']; ?></option>
<?php endforeach; endif; ?>
                    </select>
                </div>

                <div class="form-group"<?php if ($this->_aVars['bIsEdit']): ?> style="display:none;"<?php endif; ?>>
                    <label for="var_type" class="required"><?php echo _p('type'); ?></label>
                    <select id="var_type" name="val[var_type]" class="var_type form-control" required>
                        <option value=""><?php echo _p('select'); ?>:</option>
                        <option value="textarea"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('var_type') && in_array('var_type', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['var_type'])
								&& $aParams['var_type'] == 'textarea')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['var_type'])
									&& !isset($aParams['var_type'])
									&& (($this->_aVars['aForms']['var_type'] == 'textarea') || (is_array($this->_aVars['aForms']['var_type']) && in_array('textarea', $this->_aVars['aForms']['var_type']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p('text_area'); ?></option>
                        <option value="text"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('var_type') && in_array('var_type', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['var_type'])
								&& $aParams['var_type'] == 'text')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['var_type'])
									&& !isset($aParams['var_type'])
									&& (($this->_aVars['aForms']['var_type'] == 'text') || (is_array($this->_aVars['aForms']['var_type']) && in_array('text', $this->_aVars['aForms']['var_type']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p('text_input_60_characters_max'); ?></option>
                        <option value="select"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('var_type') && in_array('var_type', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['var_type'])
								&& $aParams['var_type'] == 'select')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['var_type'])
									&& !isset($aParams['var_type'])
									&& (($this->_aVars['aForms']['var_type'] == 'select') || (is_array($this->_aVars['aForms']['var_type']) && in_array('select', $this->_aVars['aForms']['var_type']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p('selection'); ?></option>
                        <option value="multiselect"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('var_type') && in_array('var_type', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['var_type'])
								&& $aParams['var_type'] == 'multiselect')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['var_type'])
									&& !isset($aParams['var_type'])
									&& (($this->_aVars['aForms']['var_type'] == 'multiselect') || (is_array($this->_aVars['aForms']['var_type']) && in_array('multiselect', $this->_aVars['aForms']['var_type']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p('multiple_selection'); ?></option>
                        <option value="radio"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('var_type') && in_array('var_type', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['var_type'])
								&& $aParams['var_type'] == 'radio')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['var_type'])
									&& !isset($aParams['var_type'])
									&& (($this->_aVars['aForms']['var_type'] == 'radio') || (is_array($this->_aVars['aForms']['var_type']) && in_array('radio', $this->_aVars['aForms']['var_type']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p('radio'); ?></option>
                        <option value="checkbox"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('var_type') && in_array('var_type', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['var_type'])
								&& $aParams['var_type'] == 'checkbox')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['var_type'])
									&& !isset($aParams['var_type'])
									&& (($this->_aVars['aForms']['var_type'] == 'checkbox') || (is_array($this->_aVars['aForms']['var_type']) && in_array('checkbox', $this->_aVars['aForms']['var_type']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo _p('checkbox'); ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">*<?php echo _p('name'); ?></label>
<?php if ($this->_aVars['bIsEdit'] && isset ( $this->_aVars['aForms']['name'] ) && Phpfox ::isPhrase('$aForms.name')): ?>
<?php Phpfox::getBlock('language.admincp.form', array('type' => 'text','id' => 'name','mode' => 'text','value' => $this->_aVars['aForms']['name'])); ?>
<?php else: ?>
<?php if (isset ( $this->_aVars['aForms']['name'] ) && is_array ( $this->_aVars['aForms']['name'] )): ?>
<?php if (count((array)$this->_aVars['aForms']['name'])):  foreach ((array) $this->_aVars['aForms']['name'] as $this->_aVars['sPhrase'] => $this->_aVars['aValues']): ?>
<?php Phpfox::getBlock('language.admincp.form', array('type' => 'text','id' => 'name','mode' => 'text','value' => $this->_aVars['aForms']['name'])); ?>
<?php endforeach; endif; ?>
<?php else: ?>
<?php Phpfox::getBlock('language.admincp.form', array('type' => 'text','id' => 'name','mode' => 'text')); ?>
<?php endif; ?>
<?php endif; ?>
                </div>
            </div>
        </div>
        <!-- value section -->
        <div class="panel panel-default">
            <div class="panel-body">
<?php if ($this->_aVars['bIsEdit'] && isset ( $this->_aVars['aForms']['option'] )): ?>
                <label><?php echo _p('current_values'); ?></label>
                <div>
<?php if (count((array)$this->_aVars['aForms']['option'])):  $this->_aPhpfoxVars['iteration']['options'] = 0;  foreach ((array) $this->_aVars['aForms']['option'] as $this->_aVars['iKey'] => $this->_aVars['aOptions']):  $this->_aPhpfoxVars['iteration']['options']++; ?>

                    <div class="table js_current_value js_option_holder" id="js_current_value_<?php echo $this->_aVars['iKey']; ?>">
                        <span><?php echo _p('option_count', array('count' => $this->_aPhpfoxVars['iteration']['options'])); ?>:</b> <a href="#?id=<?php echo $this->_aVars['iKey']; ?>" class="js_delete_current_option"><i class="fa fa-remove"></i></a></span>
                        <div class="form-group">
<?php Phpfox::getBlock('language.admincp.form', array('type' => 'text','id' => 'current','value' => $this->_aVars['aOptions'],'mode' => 'text')); ?>
                        </div>
                    </div>
<?php endforeach; endif; ?>
                </div>
<?php endif; ?>
                <!---->
                <div id="js_sample_option" style="display:none;">
                    <div class="js_option_holder">
                        <div class="form-group">
                            <span><?php echo _p('option_html_count'); ?>:</b> <span class="js_option_delete"></span></span>
<?php if (count((array)$this->_aVars['aLanguages'])):  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['aLang']): ?>
                            <div>
                                <input type="text" name="val[option][#][<?php echo $this->_aVars['aLang']['language_id']; ?>][text]" value="" placeholder="<?php echo $this->_aVars['aLang']['title']; ?>" class="form-control"/>
                            </div>
<?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>
                <div class="_table" id="tbl_option_holder" <?php if (! $this->_aVars['bIsEdit']): ?> style="display:none;"<?php endif; ?> >
                <label><?php if ($this->_aVars['bIsEdit']):  echo _p("Extra Values");  else:  echo _p('values');  endif; ?></label>
                <div id="js_option_holder"></div>
            </div>
            <div class="table_clear_more_options" id="tbl_add_custom_option" <?php if (! $this->_aVars['bIsEdit']): ?> style="display:none;"<?php endif; ?> >
            <a role="button" class="js_add_custom_option"><?php echo _p('add_new_option'); ?></a>
        </div>
        </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <input type="submit" value="<?php if ($this->_aVars['bIsEdit']):  echo _p('update');  else:  echo _p('add');  endif; ?>" class="btn btn-primary" />
                </div>
            </div>
        </div>
	
</form>

</div>

