<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 10:38 am */ ?>
<div class="quizzes-app feed <?php if (empty ( $this->_aVars['aQuiz']['image_path'] )): ?>no-photo<?php endif; ?>">
	<div class="quizzes-media">
<?php if (! empty ( $this->_aVars['aQuiz']['image_path'] )): ?>
            <a class="item-media-bg" href="<?php if ($this->_aVars['bIsFeedSponsor'] && $this->_aVars['iSponsorId']):  echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('view' => $this->_aVars['iSponsorId']));  else:  echo Phpfox::permalink('quiz', $this->_aVars['aQuiz']['quiz_id'], $this->_aVars['aQuiz']['title'], false, null, (array) array (
));  endif; ?>"
               style="background-image: url(<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aQuiz']['server_id'],'path' => 'quiz.url_image','file' => $this->_aVars['aQuiz']['image_path'],'suffix' => '','return_url' => true)); ?>)">
            </a>
<?php endif; ?>
		<span class="quizzes-vote-number <?php if ($this->_aVars['aQuiz']['total_play'] > 99): ?>more<?php endif; ?>"><b><?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aQuiz']['total_play']); ?></b><?php if ($this->_aVars['aQuiz']['total_play'] == 1):  echo _p('quiz_total_play');  else:  echo _p('quiz_total_plays');  endif; ?></span>
	</div>
	<div class="quizzes-inner pl-2 pr-2">
		<a href="<?php if ($this->_aVars['bIsFeedSponsor'] && $this->_aVars['iSponsorId']):  echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('view' => $this->_aVars['iSponsorId']));  else:  echo Phpfox::permalink('quiz', $this->_aVars['aQuiz']['quiz_id'], $this->_aVars['aQuiz']['title'], false, null, (array) array (
));  endif; ?>" class="quizzes-title fw-bold"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aQuiz']['title']); ?></a>
		<div class="quizzes-description item_view_content"><?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('parse.output')->feedStrip(Phpfox::getLib('phpfox.parse.bbcode')->stripCode($this->_aVars['aQuiz']['description'])), 55); ?></div>
	</div>
</div>
