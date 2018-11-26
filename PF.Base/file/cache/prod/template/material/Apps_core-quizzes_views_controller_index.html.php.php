<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:31 am */ ?>
<?php 
	 
?>

<?php if (count ( $this->_aVars['aQuizzes'] )): ?>
<?php if (! PHPFOX_IS_AJAX): ?><div class="item-container quizzes-app main"><?php endif; ?>
<?php if (count((array)$this->_aVars['aQuizzes'])):  $this->_aPhpfoxVars['iteration']['quizzes'] = 0;  foreach ((array) $this->_aVars['aQuizzes'] as $this->_aVars['aQuiz']):  $this->_aPhpfoxVars['iteration']['quizzes']++; ?>

		    <?php
						Phpfox::getLib('template')->getBuiltFile('quiz.block.rows');
						?>
<?php endforeach; endif; ?>
<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager'); ?>
<?php if (! PHPFOX_IS_AJAX): ?></div><?php endif; ?>
<?php if ($this->_aVars['bCanModerate']): ?>
<?php Phpfox::getBlock('core.moderation'); ?>
<?php endif; ?>
<?php else: ?>
<?php if (! PHPFOX_IS_AJAX): ?>
			<div class="extra_info">
<?php echo _p('no_quizzes_found'); ?>
			</div>
<?php endif;  endif; ?>

