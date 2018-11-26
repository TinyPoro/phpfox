<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:31 am */ ?>
<?php 

 if ($this->_aVars['bIsEdit']): ?>
<div id="js_pages_add_holder">
	<form class="form" method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('pages.add', array('id' => $this->_aVars['aForms']['page_id'])); ?>" enctype="multipart/form-data">
		<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['page_id']; ?>" /></div>
		<div><input type="hidden" name="val[category_id]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['category_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['category_id']) : (isset($this->_aVars['aForms']['category_id']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['category_id']) : '')); ?>
" id="js_category_pages_add_holder" /></div>
        <div><input type="hidden" name="val[current_tab]" value="" id="current_tab"></div>

        <!-- Detail Start -->
		<div id="js_pages_block_detail" class="js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'detail'): ?>style="display:none;"<?php endif; ?>>
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
				<label for="type_id"><?php echo _p('category'); ?></label>
                <div class="pages_add_category form-group">
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
                <div class="pages_sub_category form-group">
<?php if (count((array)$this->_aVars['aTypes'])):  foreach ((array) $this->_aVars['aTypes'] as $this->_aVars['aType']): ?>
<?php if (isset ( $this->_aVars['aType']['categories'] ) && is_array ( $this->_aVars['aType']['categories'] ) && count ( $this->_aVars['aType']['categories'] )): ?>
                            <div class="js_pages_add_sub_category form-inline" id="js_pages_add_sub_category_<?php echo $this->_aVars['aType']['type_id']; ?>"<?php if ($this->_aVars['aType']['type_id'] != $this->_aVars['aForms']['type_id']): ?> style="display:none;"<?php endif; ?>>
                                <select name="js_category_<?php echo $this->_aVars['aType']['type_id']; ?>" class="form-control inline">
                                    <option value=""><?php echo _p('select'); ?></option>
<?php if (count((array)$this->_aVars['aType']['categories'])):  foreach ((array) $this->_aVars['aType']['categories'] as $this->_aVars['aCategory']): ?>
                                    <option value="<?php echo $this->_aVars['aCategory']['category_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


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
			</div>
			
			<div class="form-group">
				<label for="title"><?php echo _p('name'); ?></label>
<?php if ($this->_aVars['aForms']['is_app']): ?>
                <div><input type="hidden" name="val[title]" value="<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']); ?>" maxlength="200" size="40"/></div>
                <a href="<?php echo Phpfox::permalink('apps', $this->_aVars['aForms']['app_id'], $this->_aVars['aForms']['title'], false, null, (array) array (
)); ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']); ?></a>
<?php else: ?>
                <input name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" maxlength="64" size="40" class="form-control" id="title"/>
<?php endif; ?>
			</div>
			
			<div class="form-group">
                <label for="landing_page"><?php echo _p('landing_page'); ?></label>
                <select name="val[landing_page]" class="form-control" id="landing_page">
<?php if (count((array)$this->_aVars['aForms']['landing_pages'])):  foreach ((array) $this->_aVars['aForms']['landing_pages'] as $this->_aVars['aLanding']): ?>
<?php if (isset ( $this->_aVars['aLanding']['landing'] )): ?>
                    <option value="<?php echo $this->_aVars['aLanding']['landing']; ?>"<?php if (isset ( $this->_aVars['aLanding']['is_selected'] ) && $this->_aVars['aLanding']['is_selected']): ?> selected<?php endif; ?>><?php echo $this->_aVars['aLanding']['phrase']; ?></option>
<?php endif; ?>
<?php endforeach; endif; ?>
                </select>
			</div>

            <input type="submit" value="<?php echo _p('update'); ?>" class="btn btn-primary"/>
		</div>
        <!-- Detail End -->

        <!-- Photo START -->
		<div id="js_pages_block_url" class="block js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'url'): ?>style="display:none;"<?php endif; ?>>
			<div class="form-group">
                <label for="js_vanity_url_new"><?php echo _p('vanity_url'); ?></label>
                <div class="help-block"><?php echo Phpfox::getParam('core.path'); ?></div>
                <input name="val[vanity_url]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['vanity_url']) : (isset($this->_aVars['aForms']['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['vanity_url']) : '')); ?>
" size="20" id="js_vanity_url_new" class="form-control"/>
			</div>
			
			<div id="js_pages_vanity_url_button">
                <div><input type="hidden" name="val[vanity_url_old]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['vanity_url']) : (isset($this->_aVars['aForms']['vanity_url']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['vanity_url']) : '')); ?>
" size="20" id="js_vanity_url_old" /></div>
                <input type="button" value="<?php echo _p('check_url'); ?>" class="btn btn-primary" data-app="core_pages" data-action="check_url" data-action-type="click" />
			</div>
		</div>
		
		<div id="js_pages_block_photo" class="js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'photo'): ?>style="display:none;"<?php endif; ?>>
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
			<div id="js_pages_block_customize_holder">
				<div class="form-group-follow">
<?php if ($this->_aVars['bIsEdit'] && ! empty ( $this->_aVars['aForms']['image_path'] )): ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'pages','current_photo' => $this->_aVars['aForms']['image_path_200'],'id' => $this->_aVars['aForms']['page_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'pages')); ?>
<?php endif; ?>
				</div>

				<div id="js_submit_upload_image" class="table_clear">
					<input type="submit" value="<?php echo _p('update_photo'); ?>" class="btn btn-primary"/>
				</div>
			</div>
		</div>
        <!-- Photo END -->

		<div id="js_pages_block_info" class="js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'info'): ?>style="display:none;"<?php endif; ?>>
<?php (($sPlugin = Phpfox_Plugin::get('pages.template_controller_add_1')) ? eval($sPlugin) : false); ?>
			<div class="form-group">
                <div class="editor_holder"><?php echo Phpfox::getLib('phpfox.editor')->get('text', array (
  'id' => 'text',
));  Phpfox::getBlock('attachment.share', array('id'=> 'text')); ?></div>
			</div>
			<div class="form-group">
				<input type="submit" value="<?php echo _p('update'); ?>" class="btn btn-primary"/>
			</div>
		</div>
		
		<div id="js_pages_block_permissions" class="block js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'permissions'): ?>style="display:none;"<?php endif; ?>>
			<div id="privacy_holder_table">
<?php if ($this->_aVars['bIsEdit']): ?>
				<div class="form-group-follow hidden">
					<label><?php echo _p('page_privacy'); ?></label>
					<div class="extra_info_custom">
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'pages.control_who_can_see_this_page','privacy_no_custom' => true)); ?>
						<p class="help-block">
<?php echo _p('pages_privacy_information'); ?>
						</p>
					</div>			
				</div>				
<?php endif; ?>

                <div class="privacy-block-content">
<?php if (count((array)$this->_aVars['aPermissions'])):  foreach ((array) $this->_aVars['aPermissions'] as $this->_aVars['aPerm']): ?>
                    <div class="item-outer">
                        <div class="form-group">
                            <label><?php echo $this->_aVars['aPerm']['phrase']; ?></label>
                            <div>
                                <select name="val[perms][<?php echo $this->_aVars['aPerm']['id']; ?>]" class="form-control" id="perms_<?php echo $this->_aVars['aPerm']['id']; ?>">
                                    <option value="0"<?php if ($this->_aVars['aPerm']['is_active'] == '0'): ?> selected="selected"<?php endif; ?>><?php echo _p('anyone'); ?></option>
                                    <option value="1"<?php if ($this->_aVars['aPerm']['is_active'] == '1'): ?> selected="selected"<?php endif; ?>><?php echo _p('members_only'); ?></option>
                                    <option value="2"<?php if ($this->_aVars['aPerm']['is_active'] == '2'): ?> selected="selected"<?php endif; ?>><?php echo _p('admins_only'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
<?php endforeach; endif; ?>
                </div>
				<div class="form-group">
					<input type="submit" value="<?php echo _p('update'); ?>" class="btn btn-primary"/>
				</div>
			</div>
		</div>
		
		<div id="js_pages_block_admins" class="js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'admins'): ?>style="display:none;"<?php endif; ?>>
			<div class="form-group">
<?php if (Phpfox ::getUserBy('profile_page_id')): ?>
<?php echo _p("Please login back as user to use this feature."); ?>
<?php else: ?>
<?php Phpfox::getBlock('friend.search-small', array('input_name' => 'admins','current_values' => $this->_aVars['aForms']['admins'])); ?>
<?php endif; ?>
			</div>

			<div class="form-group">
				<input type="submit" value="<?php echo _p('update'); ?>" class="btn btn-primary"/>
			</div>
		</div>

		<div id="js_pages_block_invite" class="js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'invite'): ?>style="display:none;"<?php endif; ?>>
			<div class="block">
                <div class="form-group">
                    <label for="js_find_friend"><?php echo _p('invite_friends'); ?></label>
<?php if (isset ( $this->_aVars['aForms']['page_id'] )): ?>
                    <div id="js_selected_friends" class="hide_it"></div>
<?php Phpfox::getBlock('friend.search', array('input' => 'invite','hide' => true,'friend_item_id' => $this->_aVars['aForms']['page_id'],'friend_module_id' => 'pages','in_form' => true)); ?>
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
                    <input type="submit" value="<?php echo _p('send_invitations'); ?>" class="btn btn-primary"/>
                </div>
			</div>
		</div>

		<div id="js_pages_block_widget" class="block js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'widget'): ?>style="display:none;"<?php endif; ?>>
			<div class="form-group">
				<div class="pages_create_new_widget">
					<a role="button" class="btn btn-primary" onclick="$Core.box('pages.widget', 700, 'page_id=<?php echo $this->_aVars['aForms']['page_id']; ?>'); return false;"><?php echo _p('create_new_widget'); ?></a>
				</div>

<?php if (! empty ( $this->_aVars['aBlockWidgets'] ) && ! empty ( $this->_aVars['aMenuWidgets'] )): ?>
                <p class="help-block"><?php echo _p('drag_to_order_your_blocks'); ?></p>
<?php endif; ?>

<?php if (! empty ( $this->_aVars['aBlockWidgets'] )): ?>
                <label><?php echo _p('block_type'); ?></label>
                <table class="table table-striped drag-drop-table" id="js_drag_drop_block_type_block" data-app="core_pages" data-action-type="init" data-action="init_drag" data-table="#js_drag_drop_block_type_block" data-ajax="pages.orderWidget">
                    <thead>
                        <tr>
                            <th style="width: 20px"></th>
                            <th><?php echo _p('title'); ?></th>
                            <th style="width: 20px;"></th>
                        </tr>
                    </thead>
                    <tbody>
<?php if (count((array)$this->_aVars['aBlockWidgets'])):  foreach ((array) $this->_aVars['aBlockWidgets'] as $this->_aVars['aBlockWidget']): ?>
                        <tr>
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
                                            <a href="#" onclick="$Core.box('pages.widget', 700, 'widget_id=<?php echo $this->_aVars['aBlockWidget']['widget_id']; ?>'); return false;"><span class="ico ico-pencilline-o mr-1"></span> <?php echo _p('edit'); ?></a>
                                        </li>
                                        <li class="item_delete">
                                            <a href="#" onclick="$Core.jsConfirm({}, function(){ $.ajaxCall('pages.deleteWidget', 'widget_id=<?php echo $this->_aVars['aBlockWidget']['widget_id']; ?>'); }, function(){}); return false;"><span class="ico ico-trash-o mr-1"></span> <?php echo _p('delete'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
<?php endforeach; endif; ?>
                    </tbody>
                </table>
<?php endif; ?>
<?php if (! empty ( $this->_aVars['aMenuWidgets'] )): ?>
                <label><?php echo _p('menu_type'); ?></label>
                <table class="table table-striped drag-drop-table" id="js_drag_drop_block_type_menu" data-app="core_pages" data-action-type="init" data-action="init_drag" data-table="#js_drag_drop_block_type_menu" data-ajax="pages.orderWidget">
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
                                            <a href="#" onclick="$Core.box('pages.widget', 700, 'widget_id=<?php echo $this->_aVars['aMenuWidget']['widget_id']; ?>'); return false;"><span class="ico ico-pencilline-o mr-1"></span> <?php echo _p('edit'); ?></a>
                                        </li>
                                        <li class="item_delete">
                                            <a href="#" onclick="$Core.jsConfirm({}, function(){ $.ajaxCall('pages.deleteWidget', 'widget_id=<?php echo $this->_aVars['aMenuWidget']['widget_id']; ?>'); }, function(){}); return false;"><span class="ico ico-trash-o mr-1"></span> <?php echo _p('delete'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
<?php endforeach; endif; ?>
                    </tbody>
                </table>
<?php endif; ?>
<?php if (! count ( $this->_aVars['aBlockWidgets'] ) && ! count ( $this->_aVars['aMenuWidgets'] )): ?>
                    <div class="alert alert-info"><?php echo _p('no_widget_found'); ?></div>
<?php endif; ?>
            </div>
		</div>
		
<?php if (Phpfox ::getParam('core.google_api_key')): ?>
			<div id="js_pages_block_location" class="block js_pages_block page_section_menu_holder" <?php if (empty ( $this->_aVars['sActiveTab'] ) || $this->_aVars['sActiveTab'] != 'location'): ?>style="display:none;"<?php endif; ?>>
                <div class="col-md-7">
                    <div id="js_location" data-app="core_pages" data-action="init_google_map" data-action-type="init" <?php if (isset ( $this->_aVars['sLat'] )): ?>data-lat="<?php echo $this->_aVars['sLat']; ?>"<?php endif; ?> <?php if (isset ( $this->_aVars['sLng'] )): ?>data-lng="<?php echo $this->_aVars['sLng']; ?>"<?php endif; ?> <?php if (isset ( $this->_aVars['sLocationName'] )): ?>data-lname="<?php echo $this->_aVars['sLocationName']; ?>"<?php endif; ?>></div>
                </div>
                <div class="col-md-5">
                    <div class="form-group" id="js_location_enter">
                        <p><?php echo _p('place_your_page_in_the_map'); ?></p>
                        <p><?php echo _p('you_can_also_write_your_address'); ?></p>
                        <input name="val[location][name]" id="txt_location_name" autocomplete="off" class="form-control">
                        <div id="js_add_location_suggestions" style="display: none; width: 100%;"></div>
                        <div>
                            <input type="hidden" name="val[location][latlng]" id="txt_location_latlng">
                        </div>
                    </div>
                    <div class="table_clear">
                        <input type="submit" value="<?php echo _p('update'); ?>" class="btn btn-primary"/>
                    </div>
                </div>
			</div>
<?php endif; ?>
	
</form>

</div>
<!-- Edit page END -->
<?php else:  if (Phpfox ::getUserBy('profile_page_id')):  echo _p('logged_in_as_a_page', array('full_name' => $this->_aVars['aGlobalProfilePageLogin']['full_name']));  else: ?>
<div id="js_pages_add_holder" class="item-container page-add">
	<div class="main_break"></div>
<?php if (count((array)$this->_aVars['aTypes'])):  foreach ((array) $this->_aVars['aTypes'] as $this->_aVars['aType']): ?>
	<div class="page-item" data-app="core_pages" data-action="add_new_page" data-type-id="<?php echo $this->_aVars['aType']['type_id']; ?>" data-action-type="click">
        <div class="item-outer">
            <div class="page-photo"
<?php if (! empty ( $this->_aVars['aType']['image_path'] )): ?>
                 style="background-image: url('<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aType']['image_server_id'],'path' => 'core.path_actual','file' => $this->_aVars['aType']['image_path'],'suffix' => '_200','return_url' => true)); ?>')"
<?php else: ?>
                 style="background-image: url('<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('path' => 'core.path_actual','file' => 'PF.Site/Apps/core-pages/assets/img/default-category/default_category.png','return_url' => true)); ?>')"
<?php endif; ?>
            >
                <div class="page-add-inner-link">
                    <div class="pages-add-info">
                        <span class="item-title">
<?php if (Phpfox ::isPhrase($this->_aVars['aType']['name'])): ?>
<?php echo _p($this->_aVars['aType']['name']); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aType']['name']); ?>
<?php endif; ?>
                        </span>
                        <div class="item-number-page">
<?php echo $this->_aVars['aType']['pages_count']; ?> <?php echo _p('pages'); ?>
                        </div>
                    </div>
                    <a class="item-page-add" data-app="core_pages" data-action="add_new_page" data-type-id="<?php echo $this->_aVars['aType']['type_id']; ?>" data-action-type="click"><span class="ico ico-plus"></span></a>
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
