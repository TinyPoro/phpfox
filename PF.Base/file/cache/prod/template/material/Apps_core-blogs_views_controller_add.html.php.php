<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:30 am */ ?>
<?php 

?>

<script type="text/javascript">
<?php echo '
	function plugin_addFriendToSelectList()
	{
		$(\'#js_allow_list_input\').show();
	}
'; ?>

</script>
<div class="main_break">
<?php echo $this->_aVars['sCreateJs']; ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('blog.add'); ?>" id="core_js_blog_form" onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>" enctype="multipart/form-data">

<?php if (isset ( $this->_aVars['iItem'] ) && isset ( $this->_aVars['sModule'] )): ?>
			<div><input type="hidden" name="val[module_id]" value="<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['sModule']); ?>" /></div>
			<div><input type="hidden" name="val[item_id]" value="<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['iItem']); ?>" /></div>
<?php endif; ?>
		<div id="js_custom_privacy_input_holder">
<?php if ($this->_aVars['bIsEdit'] && ( ! isset ( $this->_aVars['sModule'] ) || empty ( $this->_aVars['sModule'] ) )): ?>
<?php Phpfox::getBlock('privacy.build', array('privacy_item_id' => $this->_aVars['aForms']['blog_id'],'privacy_module_id' => 'blog')); ?>
<?php endif; ?>
		</div>
		<div><input type="hidden" name="val[attachment]" class="js_attachment" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['attachment']) : (isset($this->_aVars['aForms']['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['attachment']) : '')); ?>
" /></div>

<?php if ($this->_aVars['bIsEdit']): ?>
			<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['blog_id']; ?>" /></div>
<?php endif; ?>

<?php (($sPlugin = Phpfox_Plugin::get('blog.template_controller_add_hidden_form')) ? eval($sPlugin) : false); ?>

        <div class="form-group">
            <label for="title">*<?php echo _p('title'); ?></label>
            <input class="form-control close_warning" type="text" name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" id="title" size="40" />
        </div>

<?php if (! empty ( $this->_aVars['aForms']['current_image'] ) && ! empty ( $this->_aVars['aForms']['blog_id'] )): ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'blog','current_photo' => $this->_aVars['aForms']['current_image'],'id' => $this->_aVars['aForms']['blog_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'blog')); ?>
<?php endif; ?>

<?php (($sPlugin = Phpfox_Plugin::get('blog.template_controller_add_textarea_start')) ? eval($sPlugin) : false); ?>

        <div class="form-group">
            <label for="text">*<?php echo _p('post'); ?></label>
            <div class="editor_holder"><?php echo Phpfox::getLib('phpfox.editor')->get('text', array (
  'id' => 'text',
));  Phpfox::getBlock('attachment.share', array('id'=> 'text')); ?></div>
        </div>

        <div class="form-group">
<?php Phpfox::getBlock('blog.add-category-list', array()); ?>
        </div>

<?php if (Phpfox ::isModule('tag') && Phpfox ::getParam('tag.enable_tag_support')): ?>
<?php Phpfox::getBlock('tag.add', array('sType' => 'blog')); ?>
<?php endif; ?>

<?php if (! isset ( $this->_aVars['sModule'] ) || empty ( $this->_aVars['sModule'] )): ?>
        <div class="form-group">
            <label for="text"><?php echo _p('control_who_can_see_this_blog'); ?></label>
<?php if (Phpfox ::isModule('privacy')): ?>
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','default_privacy' => 'blog.default_privacy_setting')); ?>
<?php endif; ?>
        </div>
<?php endif; ?>
		
<?php if (Phpfox ::isModule('captcha') && Phpfox ::getUserParam('captcha.captcha_on_blog_add')): ?>
<?php Phpfox::getBlock('captcha.form', array('sType' => 'blog')); ?>
<?php endif; ?>
		
<?php (($sPlugin = Phpfox_Plugin::get('blog-template_controller_add_textarea_end')) ? eval($sPlugin) : false); ?>

<?php if (Phpfox ::getParam('core.display_required')): ?>
        <div class="form-group">
            * <?php echo _p('required_fields'); ?>
        </div>
<?php endif; ?>

		<div class="form-group blog-add-button-group">
<?php (($sPlugin = Phpfox_Plugin::get('blog.template_controller_add_submit_buttons')) ? eval($sPlugin) : false); ?>

<?php if ($this->_aVars['bIsEdit'] && $this->_aVars['aForms']['post_status'] == 2): ?>
                <input type="submit" name="val[draft_update]" value="<?php echo _p('update'); ?>" class="btn btn-primary" />
                <input type="submit" name="val[draft_publish]" value="<?php echo _p('publish'); ?>" class="btn btn-default" />
<?php else: ?>
                <input type="submit" name="val[<?php if ($this->_aVars['bIsEdit']): ?>update<?php else: ?>publish<?php endif; ?>]" value="<?php if ($this->_aVars['bIsEdit']):  echo _p('update');  else:  echo _p('publish');  endif; ?>" class="btn btn-primary" />
<?php endif; ?>

<?php if (! $this->_aVars['bIsEdit']): ?>
                <input type="submit" name="val[draft]" value="<?php echo _p('save_as_draft'); ?>" class="btn btn-default" />
<?php endif; ?>
            <input type="button" name="val[preview]" value="<?php echo _p('preview'); ?>" class="btn btn-default" onclick="tb_show('<?php echo _p('blog_preview', array('phpfox_squote' => true)); ?>', $.ajaxBox('blog.preview', 'height=400&amp;width=600&amp;text=' + encodeURIComponent(core_blogs_get_content('text'))), null, '', false,'POST');" />
		</div>

	
</form>

</div>

