<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:37 am */ ?>
<?php
/**
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		phpFox
 * @package  		Quiz
 * @version 		4.5.3
 *
 */
 
?>

<?php echo $this->_aVars['sCreateJs']; ?>
<div style="display:none;" id="hiddenQuestion">
	<div id="js_quiz_layout_default">
		<?php
						Phpfox::getLib('template')->getBuiltFile('quiz.block.question');
						?>
	</div>
</div>
<form method="post" action="<?php echo $this->_aVars['sFormAction']; ?>" id="js_add_quiz_form" name="js_add_quiz_form" <?php if ($this->_aVars['bShowTitle']): ?>onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>"<?php endif; ?> <?php if (Phpfox ::getUserParam('quiz.can_upload_picture')): ?>enctype="multipart/form-data"<?php endif; ?>>
	<div id="js_custom_privacy_input_holder">
<?php if (isset ( $this->_aVars['aQuiz']['quiz_id'] )): ?>
<?php Phpfox::getBlock('privacy.build', array('privacy_item_id' => $this->_aVars['aQuiz']['quiz_id'],'privacy_module_id' => 'quiz')); ?>
<?php endif; ?>
	</div>	
<?php if (isset ( $this->_aVars['aQuiz']['quiz_id'] )): ?>
	  <input type="hidden" name="val[quiz_id]"  value="<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>" />
	  <input type="hidden" name="quiz_id"  value="<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>" />
<?php endif; ?>
    <input type="hidden" name="val[attachment]" class="js_attachment" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['attachment']) : (isset($this->_aVars['aForms']['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['attachment']) : '')); ?>
" />
<?php if (! $this->_aVars['bShowTitle']): ?><div style="display:none;"><?php endif; ?>
		<div class="form-group">
            <label>*<?php echo _p('title'); ?>:</label>
            <input class="form-control close_warning" type="text" name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" id="title" maxlength="150" size="40" />
		</div>
		<div class="form-group">
            <label>*<?php echo _p('description'); ?>:</label>
			<div class="editor_holder"><?php echo Phpfox::getLib('phpfox.editor')->get('description', array (
  'id' => 'description',
));  Phpfox::getBlock('attachment.share', array('id'=> 'description')); ?></div>
		</div>
		
<?php if (! $this->_aVars['bShowTitle']): ?><div style="display:none;"><?php endif; ?>
<?php if (Phpfox ::getUserParam('quiz.can_upload_picture')): ?>
<?php if (! empty ( $this->_aVars['aQuiz']['current_image'] ) && ! empty ( $this->_aVars['aQuiz']['quiz_id'] )): ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'quiz','current_photo' => $this->_aVars['aQuiz']['current_image'],'id' => $this->_aVars['aQuiz']['quiz_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('core.upload-form', array('type' => 'quiz')); ?>
<?php endif; ?>
<?php endif; ?>

<?php if (! $this->_aVars['bShowTitle']): ?>
	</div>
<?php endif; ?>
<!--		-->
		
<?php if (! $this->_aVars['bShowTitle']): ?></div><?php endif; ?>
<?php if (! $this->_aVars['bShowQuestions']): ?><div style="display:none"><?php endif; ?>
		<div id="js_quiz_container">
<?php if (isset ( $this->_aVars['aQuiz']['questions'] )): ?>
<?php if (count((array)$this->_aVars['aQuiz']['questions'])):  $this->_aPhpfoxVars['iteration']['question'] = 0;  foreach ((array) $this->_aVars['aQuiz']['questions'] as $this->_aVars['Question']):  $this->_aPhpfoxVars['iteration']['question']++; ?>

			<?php
						Phpfox::getLib('template')->getBuiltFile('quiz.block.question');
						?>
<?php endforeach; endif; ?>
<?php else: ?>
<!--			-->
<?php endif; ?>
		</div>
		
		<div class="quiz_add_new_question text-right form-group">
			<a href="#" id="js_add_question"><i class="ico ico-plus mr-1"></i><?php echo _p('add_another_question'); ?></a>
		</div>		
		
<?php if (! $this->_aVars['bShowQuestions']): ?></div><?php endif; ?>
	
<?php if (Phpfox ::isModule('privacy')): ?>
		<div class="form-group">
			<label><?php echo _p('privacy'); ?>:</label>
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'quiz.control_who_can_see_this_quiz','default_privacy' => 'quiz.default_privacy_setting')); ?>
		</div>
<?php if (Phpfox ::isModule('comment')): ?>
		<div class="table form-group-follow hidden">
			<div class="table_left">
<?php echo _p('comment_privacy'); ?>:
			</div>
			<div class="table_right">	
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy_comment','privacy_info' => 'quiz.control_who_can_comment_on_this_quiz','privacy_no_custom' => true)); ?>
			</div>			
		</div>
<?php endif; ?>
<?php endif; ?>
	
<div class="table_clear">
			<ul class="table_clear_button">
				<li><input id="js_quiz_submit_button" type="submit" value="<?php if (isset ( $this->_aVars['aQuiz']['quiz_id'] )):  echo _p('update');  else:  echo _p('submit');  endif; ?>" class="button btn-primary"/></li>
			</ul>
			<div class="clear"></div>
		</div>

</form>


