<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:14 am */ ?>
<?php

 if ($this->_aVars['bIsEdit']): ?>
<!-- START update group -->
<div id="js_groups_add_holder">
	<form class="form" method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('groups.add'); ?>?id=<?php echo $this->_aVars['aForms']['page_id']; ?>" enctype="multipart/form-data">
		<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['page_id']; ?>" /></div>
		<div><input type="hidden" name="val[category_id]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['category_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['category_id']) : (isset($this->_aVars['aForms']['category_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['category_id']) : '')); ?>
" id="js_category_groups_add_holder" /></div>
        <div><input type="hidden" name="val[current_tab]" value="" id="current_tab"></div>

		<div id="js_groups_block_detail" class="js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'detail'): ?>style="display:none;"<?php endif; ?>>
<?php if (isset ( $this->_aVars['aDetailErrors'] )): ?>
            <div class="alert alert-danger">
                <strong><?php echo _p('error'); ?></strong>
                <ul>
<?php if (count((array)$this->_aVars['aDetailErrors'])):  foreach ((array) $this->_aVars['aDetailErrors'] as $this->_aVars['sError']): ?>
                    <li><?php echo $this->_aVars['sError']; ?></li>
<?php endforeach; endif; ?>
                </ul>
            </div>
<?php endif; ?>
			<div class="form-group">
                <label for="type_id"><?php echo _p('Category'); ?></label>
<?php if ($this->_aVars['aForms']['is_app']): ?>
<?php echo _p('App'); ?>
<?php else: ?>
					<div class="groups_add_category form-group">
						<select name="val[type_id]" class="form-control inline" id="type_id">
<?php if (count((array)$this->_aVars['aTypes'])):  foreach ((array) $this->_aVars['aTypes'] as $this->_aVars['aType']): ?>
							<option value="<?php echo $this->_aVars['aType']['type_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


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
								&& $aParams['type_id'] == $this->_aVars['aType']['type_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['type_id'])
									&& !isset($aParams['type_id'])
									&& (($this->_aVars['aForms']['type_id'] == $this->_aVars['aType']['type_id']) || (is_array($this->_aVars['aForms']['type_id']) && in_array($this->_aVars['aType']['type_id'], $this->_aVars['aForms']['type_id']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
>
<?php if (Phpfox ::isPhrase($this->_aVars['aType']['name'])): ?>
<?php echo _p($this->_aVars['aType']['name']); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aType']['name']); ?>
<?php endif; ?>
                            </option>
<?php endforeach; endif; ?>
						</select>
					</div>
					<div class="groups_sub_category form-group">
<?php if (count((array)$this->_aVars['aTypes'])):  foreach ((array) $this->_aVars['aTypes'] as $this->_aVars['aType']): ?>
<?php if (isset ( $this->_aVars['aType']['categories'] ) && is_array ( $this->_aVars['aType']['categories'] ) && count ( $this->_aVars['aType']['categories'] )): ?>
								<div class="js_groups_add_sub_category form-inline" id="js_groups_add_sub_category_<?php echo $this->_aVars['aType']['type_id']; ?>"<?php if ($this->_aVars['aType']['type_id'] != $this->_aVars['aForms']['type_id']): ?> style="display:none;"<?php endif; ?>>
									<select name="js_category_<?php echo $this->_aVars['aType']['type_id']; ?>" class="form-control inline">
										<option value=""><?php echo _p('select'); ?></option>
<?php if (count((array)$this->_aVars['aType']['categories'])):  foreach ((array) $this->_aVars['aType']['categories'] as $this->_aVars['aCategory']): ?>
										<option value="<?php echo $this->_aVars['aCategory']['category_id']; ?>" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('category_id') && in_array('category_id', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['category_id'])
								&& $aParams['category_id'] == $this->_aVars['aCategory']['category_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['category_id'])
									&& !isset($aParams['category_id'])
									&& (($this->_aVars['aForms']['category_id'] == $this->_aVars['aCategory']['category_id']) || (is_array($this->_aVars['aForms']['category_id']) && in_array($this->_aVars['aCategory']['category_id'], $this->_aVars['aForms']['category_id']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
>
<?php if (Phpfox ::isPhrase($this->_aVars['aCategory']['name'])): ?>
<?php echo _p($this->_aVars['aCategory']['name']); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aCategory']['name']); ?>
<?php endif; ?>
                                        </option>
<?php endforeach; endif; ?>
									</select>
								</div>
<?php endif; ?>
<?php endforeach; endif; ?>
					</div>
<?php endif; ?>
			</div>

			<div class="table form-group">
				<label for="title"><?php echo _p('Name'); ?></label>
<?php if ($this->_aVars['aForms']['is_app']): ?>
                <div><input type="hidden" name="val[title]" value="<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']); ?>" maxlength="64" size="40" /></div>
                <a href="<?php echo Phpfox::permalink('apps', $this->_aVars['aForms']['app_id'], $this->_aVars['aForms']['title'], false, null, (array) array (
)); ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']); ?></a>
<?php else: ?>
                <input type="text" name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" maxlength="64" size="40" class="form-control" id="title"/>
<?php endif; ?>
			</div>

			<div class="table_clear">
				<input type="submit" value="<?php echo _p('Update'); ?>" class="btn btn-primary"/>
			</div>
		</div>

		<div id="js_groups_block_url" class="block js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'url'): ?>style="display:none;"<?php endif; ?>>
			<div class="form-group">
				<label for="js_vanity_url_new"><?php echo _p('Vanity url'); ?></label>
                <div>
                    <span class="help-block"><?php echo Phpfox::getParam('core.path'); ?></span>
                    <input type="text" name="val[vanity_url]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['vanity_url']) : (isset($this->_aVars['aForms']['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['vanity_url']) : '')); ?>
" size="20" id="js_vanity_url_new" class="form-control"/>
                </div>
			</div>

			<div class="table_clear" id="js_groups_vanity_url_button">
				<ul class="table_clear_button">
					<li>
						<div><input type="hidden" name="val[vanity_url_old]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['vanity_url']) : (isset($this->_aVars['aForms']['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['vanity_url']) : '')); ?>
" size="20" id="js_vanity_url_old" /></div>
						<input type="button" value="<?php echo _p('Check url'); ?>" class="btn btn-primary" onclick="if ($('#js_vanity_url_new').val() != $('#js_vanity_url_old').val()) { $Core.processForm('#js_groups_vanity_url_button'); $($(this).parents('form:first')).ajaxCall('groups.changeUrl'); } return false;" />
					</li>
					<li class="table_clear_ajax"></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>

		<div id="js_groups_block_photo" class="js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'photo'): ?>style="display:none;"<?php endif; ?>>
<?php if (isset ( $this->_aVars['aPhotoErrors'] )): ?>
            <div class="alert alert-danger">
                <strong><?php echo _p('error'); ?></strong>
                <ul>
<?php if (count((array)$this->_aVars['aPhotoErrors'])):  foreach ((array) $this->_aVars['aPhotoErrors'] as $this->_aVars['sError']): ?>
                    <li><?php echo $this->_aVars['sError']; ?></li>
<?php endforeach; endif; ?>
                </ul>
            </div>
<?php endif; ?>
			<div id="js_groups_block_customize_holder">
                <div class="form-group-follow">
<?php if ($this->_aVars['bIsEdit'] && ! empty ( $this->_aVars['aForms']['image_path'] )): ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'groups','current_photo' => $this->_aVars['aForms']['image_path_200'],'id' => $this->_aVars['aForms']['page_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'groups')); ?>
<?php endif; ?>
                </div>

                <div id="js_submit_upload_image" class="table_clear">
                    <input type="submit" value="<?php echo _p('update_photo'); ?>" class="btn btn-primary"/>
                </div>
			</div>
		</div>

		<div id="js_groups_block_info" class="js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'info'): ?>style="display:none;"<?php endif; ?>>
<?php (($sPlugin = Phpfox_Plugin::get('groups.template_controller_add_1')) ? eval($sPlugin) : false); ?>
			<div class="table form-group">
                <div class="editor_holder"><?php echo Phpfox::getLib('phpfox.editor')->get('text', array (
  'id' => 'text',
));  Phpfox::getBlock('attachment.share', array('id'=> 'text')); ?></div>
                <div class="pt-1">
                    <input type="submit" value="<?php echo _p('Update'); ?>" class="btn btn-primary"/>
                </div>
            </div>
		</div>

		<div id="js_groups_block_permissions" class="block js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'permissions'): ?>style="display:none;"<?php endif; ?>>
			<div id="privacy_holder_table">
<?php if ($this->_aVars['bIsEdit']): ?>
				<div class="table form-group-follow hidden">
					<div class="table_left">
<?php echo _p('Group privacy'); ?>:
					</div>
					<div class="table_right extra_info_custom">
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'groups.control_who_can_see_this_page','privacy_no_custom' => true)); ?>
						<div class="extra_info">
<?php echo _p('Group privacy information'); ?>
						</div>
					</div>
				</div>
<?php endif; ?>

<?php if ($this->_aVars['bIsEdit']): ?>
				<div class="table form-group">
					<div class="table_left">
<?php echo _p('Groups privacy'); ?>
					</div>
					<div class="table_right">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <label><input type="radio" name="val[reg_method]" id="reg_method" value="0" <?php if ($this->_aVars['aForms']['reg_method'] == '0'): ?> checked<?php endif; ?>>&nbsp;<i class="fa fa-privacy fa-privacy-0"></i>&nbsp;<?php echo _p('Public'); ?></label>
                                <div class="extra_info"><?php echo _p("Anyone can see the group, its members and their posts."); ?></div>
                            </li>
                            <li class="list-group-item">
                                <label><input type="radio" name="val[reg_method]" id="reg_method" value="1" <?php if ($this->_aVars['aForms']['reg_method'] == '1'): ?> checked<?php endif; ?>>&nbsp;<i class="fa fa-unlock-alt" aria-hidden="true"></i>&nbsp;<?php echo _p('Closed'); ?></label>
                                <div class="extra_info"><?php echo _p("Anyone can find the group and see who's in it. Only members can see posts."); ?></div>
                            </li>
                            <li class="list-group-item">
                                <label><input type="radio" name="val[reg_method]" id="reg_method" value="2" <?php if ($this->_aVars['aForms']['reg_method'] == '2'): ?> checked<?php endif; ?>>&nbsp;<i class="fa fa-lock" aria-hidden="true"></i>&nbsp;<?php echo _p('Secret'); ?></label>
                                <div class="extra_info"><?php echo _p("Only members can find the group and see posts."); ?></div>
                            </li>
                        </ul>
					</div>
				</div>
<?php endif; ?>
                <div class="privacy-block-content">
<?php if (count((array)$this->_aVars['aPermissions'])):  foreach ((array) $this->_aVars['aPermissions'] as $this->_aVars['aPerm']): ?>
                    <div class="item-outer">
                        <div class="form-group">
                            <label><?php echo $this->_aVars['aPerm']['phrase']; ?></label>
                            <div>
                                <select name="val[perms][<?php echo $this->_aVars['aPerm']['id']; ?>]" class="form-control">
                                    <option value="1"<?php if ($this->_aVars['aPerm']['is_active'] == '1'): ?> selected="selected"<?php endif; ?>><?php echo _p('Members only'); ?></option>
                                    <option value="2"<?php if ($this->_aVars['aPerm']['is_active'] == '2'): ?> selected="selected"<?php endif; ?>><?php echo _p('Admins only'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
<?php endforeach; endif; ?>
                </div>
				<div class="table_clear">
					<input type="submit" value="<?php echo _p('Update'); ?>" class="btn btn-primary"/>
				</div>
			</div>
		</div>

		<div id="js_groups_block_admins" class="js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'admins'): ?>style="display:none;"<?php endif; ?>>
			<div class="table form-group">
<?php if (Phpfox ::getUserBy('profile_page_id')): ?>
<?php echo _p("Please login back as user to use this feature."); ?>
<?php else: ?>
<?php Phpfox::getBlock('friend.search-small', array('input_name' => 'admins','current_values' => $this->_aVars['aForms']['admins'])); ?>
<?php endif; ?>
			</div>

			<div class="table_clear">
				<input type="submit" value="<?php echo _p('Update'); ?>" class="btn btn-primary"/>
			</div>
		</div>

		<div id="js_groups_block_invite" class="js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'invite'): ?>style="display:none;"<?php endif; ?>>
			<div class="block">
                <div class="form-group">
                    <label for="js_find_friend"><?php echo _p('invite_friends'); ?></label>
<?php if (isset ( $this->_aVars['aForms']['page_id'] )): ?>
                    <div id="js_selected_friends" class="hide_it"></div>
<?php Phpfox::getBlock('friend.search', array('input' => 'invite','hide' => true,'friend_item_id' => $this->_aVars['aForms']['page_id'],'friend_module_id' => 'groups','in_form' => true)); ?>
<?php endif; ?>
                </div>
                <div class="form-group invite-friend-by-email">
                    <label for="emails"><?php echo _p('invite_people_via_email'); ?></label>
                    <input name="val[emails]" id="emails" class="form-control" data-component="tokenfield" data-type="email">
                    <p class="help-block"><?php echo _p('separate_multiple_emails_with_a_comma'); ?></p>
                </div>
                <div class="form-group">
                    <label for="personal_message"><?php echo _p('add_a_personal_message'); ?></label>
                    <textarea rows="1" name="val[personal_message]" id="personal_message" class="form-control textarea-auto-scale" placeholder="<?php echo _p('write_message'); ?>"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="<?php echo _p('send_invitations'); ?>" class="btn btn-primary"/>
                </div>
			</div>
		</div>

		<div id="js_groups_block_widget" class="block js_groups_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'widget'): ?>style="display:none;"<?php endif; ?>>
			<div class="table form-group">
				<div class="groups_create_new_widget">
                    <a role="button" class="btn btn-primary" onclick="$Core.box('groups.widget', 700, 'page_id=<?php echo $this->_aVars['aForms']['page_id']; ?>'); return false;"><?php echo _p('Create new widget'); ?></a>
				</div>
<?php if (! empty ( $this->_aVars['aBlockWidgets'] ) && ! empty ( $this->_aVars['aMenuWidgets'] )): ?>
                <p class="help-block"><?php echo _p('drag_to_order_your_blocks'); ?></p>
<?php endif; ?>

<?php if (! empty ( $this->_aVars['aBlockWidgets'] )): ?>
                <div class="mt-2">
                    <label><?php echo _p('block_type'); ?></label>
                    <table class="table table-striped drag-drop-table" id="js_drag_drop_block_type_block" data-app="core_groups" data-action-type="init" data-action="init_drag" data-table="#js_drag_drop_block_type_block" data-ajax="groups.orderWidget">
                        <thead>
                        <tr>
                            <th style="width: 20px"></th>
                            <th><?php echo _p('title'); ?></th>
                            <th style="width: 20px;"></th>
                        </tr>
                        </thead>
                        <tbody>
<?php if (count((array)$this->_aVars['aBlockWidgets'])):  foreach ((array) $this->_aVars['aBlockWidgets'] as $this->_aVars['aBlockWidget']): ?>
                        <tr id="js_groups_widget_<?php echo $this->_aVars['aBlockWidget']['widget_id']; ?>">
                            <td class="drag_handle" style="width: 30px; height: 30px;">
                                <input type="hidden" name="ordering[<?php echo $this->_aVars['aBlockWidget']['widget_id']; ?>]">
                            </td>
                            <td><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aBlockWidget']['title']); ?></td>
                            <td class="widget-actions">
                                <div class="dropdown">
                                    <a data-toggle="dropdown">
                                        <i class="fa fa-action"></i>
                                    </a>
                                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a role="button" onclick="$Core.box('groups.widget', 700, 'widget_id=<?php echo $this->_aVars['aBlockWidget']['widget_id']; ?>'); return false;">
                                                <span class="ico ico-pencilline-o mr-1"></span>
<?php echo _p('edit'); ?>
                                            </a>
                                        </li>
                                        <li class="item_delete">
                                            <a role="button" onclick="$Core.jsConfirm({}, function(){ $.ajaxCall('groups.deleteWidget', 'widget_id=<?php echo $this->_aVars['aBlockWidget']['widget_id']; ?>'); }, function(){}); return false;">
                                                <span class="ico ico-trash-alt-o mr-1"></span>
<?php echo _p('delete'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
<?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>

<?php endif; ?>
<?php if (! empty ( $this->_aVars['aMenuWidgets'] )): ?>
                <div class="mt-2">
                    <label><?php echo _p('menu_type'); ?></label>
                    <table class="table table-striped drag-drop-table" id="js_drag_drop_block_type_menu" data-app="core_groups" data-action-type="init" data-action="init_drag" data-table="#js_drag_drop_block_type_menu" data-ajax="groups.orderWidget">
                        <thead>
                        <tr>
                            <th style="width: 20px"></th>
                            <th><?php echo _p('title'); ?></th>
                            <th><?php echo _p('menu_title'); ?></th>
                            <th><?php echo _p('url_title'); ?></th>
                            <th style="width: 20px;"></th>
                        </tr>
                        </thead>
                        <tbody>
<?php if (count((array)$this->_aVars['aMenuWidgets'])):  foreach ((array) $this->_aVars['aMenuWidgets'] as $this->_aVars['aMenuWidget']): ?>
                        <tr>
                            <td class="drag_handle" style="width: 30px; height: 30px;">
                                <input type="hidden" name="ordering[<?php echo $this->_aVars['aMenuWidget']['widget_id']; ?>]">
                            </td>
                            <td><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aMenuWidget']['title']); ?></td>
                            <td><?php echo $this->_aVars['aMenuWidget']['menu_title']; ?></td>
                            <td><?php echo $this->_aVars['aMenuWidget']['url_title']; ?></td>
                            <td class="widget-actions">
                                <div class="dropdown">
                                    <a data-toggle="dropdown">
                                        <i class="fa fa-action"></i>
                                    </a>
                                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a role="button" onclick="$Core.box('groups.widget', 700, 'widget_id=<?php echo $this->_aVars['aMenuWidget']['widget_id']; ?>'); return false;">
                                                <span class="ico ico-pencilline-o mr-1"></span>
<?php echo _p('edit'); ?>
                                            </a>
                                        </li>
                                        <li class="item_delete">
                                            <a role="button" onclick="$Core.jsConfirm({}, function(){ $.ajaxCall('groups.deleteWidget', 'widget_id=<?php echo $this->_aVars['aMenuWidget']['widget_id']; ?>'); }, function(){}); return false;">
                                                <span class="ico ico-trash-alt-o mr-1"></span>
<?php echo _p('delete'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
<?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
<?php endif; ?>
<?php if (! count ( $this->_aVars['aBlockWidgets'] ) && ! count ( $this->_aVars['aMenuWidgets'] )): ?>
                <div class="alert alert-info"><?php echo _p('no_widget_found'); ?></div>
<?php endif; ?>
			</div>
		</div>
	
</form>

</div>
<!-- END of edit group -->
<?php else: ?>
<!-- START add group -->
<?php if (! Phpfox ::getUserBy('profile_page_id')): ?>
    <div id="js_groups_add_holder" class="item-container group-add">
        <div class="main_break"></div>
<?php if (count((array)$this->_aVars['aTypes'])):  foreach ((array) $this->_aVars['aTypes'] as $this->_aVars['aType']): ?>
        <div class="group-item" data-app="core_groups" data-action="add_new_group" data-type-id="<?php echo $this->_aVars['aType']['type_id']; ?>" data-action-type="click">
            <div class="item-outer">
            <div class="group-photo"
<?php if (! empty ( $this->_aVars['aType']['image_path'] )): ?>
                    style="background-image: url('<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aType']['image_server_id'],'path' => 'core.path_actual','file' => $this->_aVars['aType']['image_path'],'suffix' => '_200','return_url' => true)); ?>')"
<?php else: ?>
                    style="background-image: url('<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('path' => 'core.path_actual','file' => 'PF.Site/Apps/core-groups/assets/img/default-category/default_category.png','return_url' => true)); ?>')"
<?php endif; ?>
            >
                <div class="group-add-inner-link">
                    <div class="groups-add-info">
                        <span class="item-title">
<?php if (Phpfox ::isPhrase($this->_aVars['aType']['name'])): ?>
<?php echo _p($this->_aVars['aType']['name']); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aType']['name']); ?>
<?php endif; ?>
                        </span>
                        <div class="item-number-group">
<?php if ($this->_aVars['aType']['pages_count'] > 1): ?>
<?php echo $this->_aVars['aType']['pages_count']; ?> <?php echo _p('groups'); ?>
<?php else: ?>
<?php echo $this->_aVars['aType']['pages_count']; ?> <?php echo _p('_group'); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <a class="item-group-add" data-app="core_groups" data-action="add_new_group" data-type-id="<?php echo $this->_aVars['aType']['type_id']; ?>" data-action-type="click"><span class="ico ico-plus"></span></a>
                </div>
            </div>
        </div>
        </div>
<?php endforeach; endif; ?>
        <div class="clear"></div>
    </div>
<?php endif;  endif; ?>

<?php if (! empty ( $this->_aVars['aForms'] ) && isset ( $this->_aVars['aForms']['user_id'] )): ?>
    <?php echo '
    <script type="text/javascript">
        $Behavior.onLoadAdmins = function(){
            if (typeof $Core.searchFriendsInput !== \'undefined\') {
                $Core.searchFriendsInput.addLiveUser(';  echo $this->_aVars['aForms']['user_id'];  echo ')
            }
        }
    </script>
    '; ?>

<?php endif; ?>
