<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 19, 2018, 12:05 pm */ ?>
<?php

?>

<?php echo $this->_aVars['sCreateJs']; ?>
<form class="form" method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.setting'); ?>" id="js_form" onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>">
<?php if (Phpfox ::getUserId() == $this->_aVars['aForms']['user_id']): ?>

    <div class="accout-setting-form">
        <div class="profile-basic-info-edit">
<?php if (Phpfox ::getUserParam('user.can_change_own_full_name')): ?>
<?php if (Phpfox ::getParam('user.split_full_name')): ?>
            <input type="hidden" name="val[full_name]" id="full_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['full_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['full_name']) : (isset($this->_aVars['aForms']['full_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['full_name']) : '')); ?>
" size="30" />
            <div class="item-info">
                <div class="form-group">
                    <label for="first_name" class=""><?php echo _p('first_name'); ?>:</label>
                    <input class="form-control" type="text" name="val[first_name]" id="first_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['first_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['first_name']) : (isset($this->_aVars['aForms']['first_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['first_name']) : '')); ?>
" size="30" <?php if ($this->_aVars['iTotalFullNameChangesAllowed'] != 0 && $this->_aVars['aForms']['total_full_name_change'] >= $this->_aVars['iTotalFullNameChangesAllowed']): ?>readonly="readonly"<?php endif; ?> />
<?php if ($this->_aVars['iTotalFullNameChangesAllowed'] > 0): ?>
                    <p class="help-block">
<?php echo _p('total_full_name_change_out_of_allowed', array('total_full_name_change' => $this->_aVars['aForms']['total_full_name_change'],'allowed' => $this->_aVars['iTotalFullNameChangesAllowed'])); ?>
                    </p>
<?php endif; ?>
                </div>
            </div>

            <div class="item-info">
                <div class="form-group">
                    <label for="last_name" class=""><?php echo _p('last_name'); ?>:</label>
                    <input class="form-control" type="text" name="val[last_name]" id="last_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['last_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['last_name']) : (isset($this->_aVars['aForms']['last_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['last_name']) : '')); ?>
" size="30" <?php if ($this->_aVars['iTotalFullNameChangesAllowed'] != 0 && $this->_aVars['aForms']['total_full_name_change'] >= $this->_aVars['iTotalFullNameChangesAllowed']): ?>readonly="readonly"<?php endif; ?> />
                </div>
            </div>
<?php else: ?>
            <div class="item-info">
                <div class="form-group">
                    <label for="full_name" class="">*<?php echo $this->_aVars['sFullNamePhrase']; ?>:</label>
<?php if ($this->_aVars['iTotalFullNameChangesAllowed'] != 0 && $this->_aVars['aForms']['total_full_name_change'] >= $this->_aVars['iTotalFullNameChangesAllowed']): ?>
                    <input class="form-control" type="text" name="val[full_name]" id="full_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['full_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['full_name']) : (isset($this->_aVars['aForms']['full_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['full_name']) : '')); ?>
" size="30" readonly="readonly" />
<?php else: ?>
                    <input class="form-control" type="text" name="val[full_name]" id="full_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['full_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['full_name']) : (isset($this->_aVars['aForms']['full_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['full_name']) : '')); ?>
" size="30" />
<?php endif; ?>

<?php if ($this->_aVars['iTotalFullNameChangesAllowed'] > 0): ?>
                    <div class="help-block">
<?php echo _p('total_full_name_change_out_of_allowed', array('total_full_name_change' => $this->_aVars['aForms']['total_full_name_change'],'allowed' => $this->_aVars['iTotalFullNameChangesAllowed'])); ?>
                    </div>
<?php endif; ?>
                </div>
            </div>
<?php endif; ?>
<?php endif; ?>

<?php if (Phpfox ::getUserParam('user.can_change_own_user_name') && ! Phpfox ::getParam('user.profile_use_id')): ?>
            <div class="item-info">
                <div class="form-group">
                    <label for="user_name" class="">*<?php echo _p('username'); ?>:</label>
<?php if ($this->_aVars['aForms']['total_user_change'] >= $this->_aVars['iTotalChangesAllowed'] && $this->_aVars['iTotalChangesAllowed'] > 0): ?>
                    <input class="form-control" type="text" name="val[user_name]" id="user_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['user_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['user_name']) : (isset($this->_aVars['aForms']['user_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['user_name']) : '')); ?>
" size="30" readonly="readonly" />
<?php else: ?>
                    <input class="form-control" type="text" name="val[user_name]" id="user_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['user_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['user_name']) : (isset($this->_aVars['aForms']['user_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['user_name']) : '')); ?>
" size="30" />
<?php endif; ?>
<?php if ($this->_aVars['iTotalChangesAllowed'] > 0): ?>
                    <div class="help-block">
<?php echo _p('total_user_change_out_of_total_user_name_changes', array('total_user_change' => $this->_aVars['aForms']['total_user_change'],'total' => $this->_aVars['iTotalChangesAllowed'])); ?>
                    </div>
<?php endif; ?>
                    <div><input type="hidden" name="val[old_user_name]" id="old_user_name" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['user_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['user_name']) : (isset($this->_aVars['aForms']['user_name']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['user_name']) : '')); ?>
" size="30" /></div>
                </div>
            </div>
<?php endif; ?>

<?php if (Phpfox ::getUserParam('user.can_change_email')): ?>
            <div class="item-info">
                <div class="form-group">
                    <label for="email" class="">*<?php echo _p('email_address'); ?>:</label>
<?php if ($this->_aVars['bEnable2StepVerification']): ?>
                    <div class="help-block">
                        <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.passcode'); ?>"><?php echo _p('get_new_google_authencator_barcode_when_you_change_email'); ?></a>
                    </div>
<?php endif; ?>
                    <input class="form-control" type="text" <?php if (Phpfox ::getParam('user.verify_email_at_signup')): ?>onfocus="$('#js_email_warning').show();" <?php endif; ?>name="val[email]" id="email" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['email']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['email']) : (isset($this->_aVars['aForms']['email']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['email']) : '')); ?>
" size="30" />
<?php if (Phpfox ::getParam('user.verify_email_at_signup')): ?>
                    <div class="help-block" style="display:none;" id="js_email_warning">
<?php echo _p('changing_your_email_address_requires_you_to_verify_your_new_email'); ?>
                    </div>
<?php endif; ?>
                </div>
            </div>
<?php endif; ?>

<?php if (! Phpfox ::getUserBy('fb_user_id')): ?>
            <div class="item-info">
                <div class="form-group">
                    <label for="password" class="">*<?php echo _p('password'); ?></label>
                    <div id="js_password_info">
                        <input type="password" class="form-control" value="your-password" />
                        <a href="#" class="btn btn-primary btn-gradient" onclick="tb_show('<?php echo _p('change_password', array('phpfox_squote' => true)); ?>', $.ajaxBox('user.changePassword', 'height=250&amp;width=500')); return false;"><?php echo _p('change_password'); ?></a>
                    </div>
                </div>
            </div>
<?php endif; ?>

            <div class="item-info">
                <div class="form-group">
                    <label for="language_id"><?php echo _p('primary_language'); ?></label>
                    <select class="form-control" name="val[language_id]" id="language_id">
<?php if (count((array)$this->_aVars['aLanguages'])):  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['aLanguage']): ?>
                        <option value="<?php echo $this->_aVars['aLanguage']['language_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('language_id') && in_array('language_id', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['language_id'])
								&& $aParams['language_id'] == $this->_aVars['aLanguage']['language_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['language_id'])
									&& !isset($aParams['language_id'])
									&& (($this->_aVars['aForms']['language_id'] == $this->_aVars['aLanguage']['language_id']) || (is_array($this->_aVars['aForms']['language_id']) && in_array($this->_aVars['aLanguage']['language_id'], $this->_aVars['aForms']['language_id']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aLanguage']['title']); ?></option>
<?php endforeach; endif; ?>
                    </select>
                </div>
            </div>

            <div class="item-info">
                <div class="form-group" id="tbl_time_zone">
                    <label><?php echo _p('time_zone'); ?></label>
                    <select class="form-control" name="val[time_zone]" id="time_zone">
<?php if (count((array)$this->_aVars['aTimeZones'])):  foreach ((array) $this->_aVars['aTimeZones'] as $this->_aVars['sTimeZoneKey'] => $this->_aVars['sTimeZone']): ?>
                        <option value="<?php echo $this->_aVars['sTimeZoneKey']; ?>"<?php if (( empty ( $this->_aVars['aForms']['time_zone'] ) && $this->_aVars['sTimeZoneKey'] == Phpfox ::getParam('core.default_time_zone_offset')) || ( ! empty ( $this->_aVars['aForms']['time_zone'] ) && $this->_aVars['aForms']['time_zone'] == $this->_aVars['sTimeZoneKey'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_aVars['sTimeZone']; ?></option>
<?php endforeach; endif; ?>
                    </select>
<?php if (PHPFOX_USE_DATE_TIME != true && Phpfox ::getParam('core.identify_dst')): ?>
                    <div class="help-block">
                        <label><input type="checkbox" name="val[dst_check]" value="1" class="v_middle" <?php if ($this->_aVars['aForms']['dst_check']): ?>checked="checked" <?php endif; ?>/> <?php echo _p('enable_dst_daylight_savings_time'); ?></label>
                    </div>
<?php endif; ?>
                </div>
            </div>

<?php if (Phpfox ::getUserParam('user.can_edit_currency')): ?>
            <div class="item-info">
                <div class="form-group">
                    <label><?php echo _p('preferred_currency'); ?></label>
                    <select  class="form-control" name="val[default_currency]">
                        <option value=""><?php echo _p('select'); ?>:</option>
<?php if (count((array)$this->_aVars['aCurrencies'])):  foreach ((array) $this->_aVars['aCurrencies'] as $this->_aVars['sCurrency'] => $this->_aVars['aCurrency']): ?>
                        <option value="<?php echo $this->_aVars['sCurrency']; ?>"<?php if ($this->_aVars['aForms']['default_currency'] == $this->_aVars['sCurrency']): ?> selected="selected"<?php endif; ?>><?php echo _p($this->_aVars['aCurrency']['name']); ?></option>
<?php endforeach; endif; ?>
                    </select>
                    <p class="help-block">
<?php echo _p('show_prices_and_make_purchases_in_this_currency'); ?>
                    </p>
                </div>
            </div>
<?php endif; ?>

<?php (($sPlugin = Phpfox_Plugin::get('user.template_controller_setting')) ? eval($sPlugin) : false); ?>
        </div>

        <div class="from-group-button">
            <button type="submit" class="btn btn-gradient btn-primary"><?php echo _p('save'); ?></button>
            <p class="help-block">*<?php echo _p('required_fields'); ?></p>
        </div>
    </div>

    <div class="accout-setting-form">
<?php if (isset ( $this->_aVars['aGateways'] ) && is_array ( $this->_aVars['aGateways'] ) && count ( $this->_aVars['aGateways'] )): ?>
        <div class="profile-edit-headline">
            <span class="content"><?php echo _p('payment_methods'); ?></span>
        </div>

        <div class="profile-basic-info-edit">
<?php if (count((array)$this->_aVars['aGateways'])):  foreach ((array) $this->_aVars['aGateways'] as $this->_aVars['aGateway']): ?>
            <div class="form-sub-group">
                <div class="sub-group-title"><?php echo $this->_aVars['aGateway']['title']; ?></div>
                <div class="sub-group-desc"><?php echo $this->_aVars['aGateway']['description']; ?></div>
                <div class="sub-group-elems">
<?php if (count((array)$this->_aVars['aGateway']['custom'])):  foreach ((array) $this->_aVars['aGateway']['custom'] as $this->_aVars['sFormField'] => $this->_aVars['aCustom']): ?>
                    <div class="item-info">
                        <div class="form-group">
                            <label><?php echo $this->_aVars['aCustom']['phrase']; ?></label>
<?php if (( isset ( $this->_aVars['aCustom']['type'] ) && $this->_aVars['aCustom']['type'] == 'textarea' )): ?>
                            <textarea  class="form-control" name="val[gateway_detail][<?php echo $this->_aVars['aGateway']['gateway_id']; ?>][<?php echo $this->_aVars['sFormField']; ?>]" cols="50" rows="8"><?php if (isset ( $this->_aVars['aCustom']['user_value'] )):  echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aCustom']['user_value']);  endif; ?></textarea>
<?php else: ?>
                            <input  class="form-control" type="text" name="val[gateway_detail][<?php echo $this->_aVars['aGateway']['gateway_id']; ?>][<?php echo $this->_aVars['sFormField']; ?>]" value="<?php if (isset ( $this->_aVars['aCustom']['user_value'] )):  echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aCustom']['user_value']);  endif; ?>" size="40" />
<?php endif; ?>
<?php if (! empty ( $this->_aVars['aCustom']['phrase_info'] )): ?>
                            <div class="help-block">
<?php echo $this->_aVars['aCustom']['phrase_info']; ?>
                            </div>
<?php endif; ?>
                        </div>
                    </div>
<?php endforeach; endif; ?>
                </div>
            </div>
<?php endforeach; endif; ?>
        </div>
        <div class="from-group-button">
            <button type="submit" class="btn btn-primary"><?php echo _p('save'); ?></button>
        </div>
<?php endif; ?>

<?php if (( Phpfox ::getUserParam('user.can_delete_own_account'))): ?>
        <div class="form-group mt-2 mb-0">
            <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.remove'); ?>"><?php echo _p('cancel_account'); ?></a>
        </div>
<?php endif; ?>
            <div class="form-group mt-2">
                <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.export'); ?>"><?php echo _p('download_a_copy_of_your_data'); ?></a>
            </div>
    </div>
<?php endif; ?>

</form>


