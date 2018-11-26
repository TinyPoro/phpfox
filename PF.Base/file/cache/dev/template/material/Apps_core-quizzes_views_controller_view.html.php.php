<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 4:07 am */ ?>
<?php
	 
?>

<?php if (isset ( $this->_aVars['aQuiz'] )): ?>
	<div class="item_view quizzes-app">
		<?php
						Phpfox::getLib('template')->getBuiltFile('quiz.block.entry');
						?>

<?php Phpfox::getBlock('share.addthis', array('url' => $this->_aVars['aQuiz']['bookmark'],'title' => $this->_aVars['aQuiz']['title'],'description' => $this->_aVars['sShareDescription'])); ?>
	    
		<div id="js_comment_module" <?php if ($this->_aVars['aQuiz']['view_id'] == 1): ?>style="display:none;" class="js_moderation_on"<?php endif; ?>>
			<div class="item-detail-feedcomment"><?php Phpfox::getBlock('feed.comment', array()); ?></div>
		</div>	
	</div>
<?php else: ?>
	<div class="extra_info">
<?php echo _p('the_link_that_brought_you_here_is_wrong'); ?>
		<ul class="action">
			<li><a href="<?php echo $this->_aVars['sRealLink']; ?>"><?php echo _p('click_here_to_get_the_quiz_from_the_real_owner'); ?></a></li>
		</ul>
	</div>
<?php endif; ?>
