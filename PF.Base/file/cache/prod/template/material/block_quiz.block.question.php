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

<div class="form-group full_question_holder quizzes-app">
	<label class="question_number_title">
<?php if (isset ( $this->_aPhpfoxVars['iteration']['question'] ) && $this->_aPhpfoxVars['iteration']['question'] <= Phpfox ::getUserParam('quiz.min_questions')): ?>
			*
<?php endif; ?>
<?php echo _p('question'); ?> <?php if (isset ( $this->_aPhpfoxVars['iteration']['question'] )):  echo $this->_aPhpfoxVars['iteration']['question'];  endif; ?>
	</label>
<?php if (( isset ( $this->_aPhpfoxVars['iteration']['question'] ) && $this->_aPhpfoxVars['iteration']['question'] <= Phpfox ::getUserParam('quiz.min_questions')) || ( isset ( $this->_aVars['Question']['iQuestionIndex'] ) && $this->_aVars['Question']['iQuestionIndex'] <= Phpfox ::getUserParam('quiz.min_questions')) || ( ! isset ( $this->_aPhpfoxVars['iteration']['question'] ) && ! isset ( $this->_aVars['Question']['iQuestionIndex'] ) )): ?>
		<div id="removeQuestion">
<?php else: ?>
		<div id="removeQuestion">
<?php endif; ?>
			<a href="#" onclick="return $Core.quiz.removeQuestion(this);"><i class="ico ico-trash-o"></i></a>
		</div>

		<input type="text" class="form-control question_title" placeholder="<?php echo _p('enter_question_here'); ?>" name="val[q][<?php if (isset ( $this->_aVars['Question']['question_id'] )):  echo $this->_aVars['Question']['question_id'];  elseif (isset ( $this->_aPhpfoxVars['iteration']['question'] )):  echo $this->_aPhpfoxVars['iteration']['question'];  else: ?>0<?php endif; ?>][question]" value="<?php if (isset ( $this->_aVars['Question']['question'] )):  echo $this->_aVars['Question']['question'];  endif; ?>" maxlength="200" size="30" />

		<div class="form-group quiz-answer">
			<div class="answer_holder answers_holder" id="">
<?php if (isset ( $this->_aVars['Question']['answers'] )): ?>
<?php if (count((array)$this->_aVars['Question']['answers'])):  $this->_aPhpfoxVars['iteration']['iAnswer'] = 0;  foreach ((array) $this->_aVars['Question']['answers'] as $this->_aVars['aAnswer']):  $this->_aPhpfoxVars['iteration']['iAnswer']++; ?>

						<div class="p_2 answer_parent <?php if (isset ( $this->_aVars['aAnswer']['is_correct'] ) && $this->_aVars['aAnswer']['is_correct'] == 1): ?>correctAnswer<?php endif; ?>">
							<input type="hidden" class="hdnCorrectAnswer" name="val[q][<?php if (isset ( $this->_aVars['Question']['question_id'] )):  echo $this->_aVars['Question']['question_id'];  elseif (isset ( $this->_aPhpfoxVars['iteration']['question'] )):  echo $this->_aPhpfoxVars['iteration']['question'];  else: ?>0<?php endif; ?>][answers][<?php if (isset ( $this->_aVars['aAnswer']['answer_id'] ) && $this->_aVars['aAnswer']['answer_id'] != ''):  echo $this->_aVars['aAnswer']['answer_id'];  else:  echo $this->_aPhpfoxVars['iteration']['iAnswer'];  endif; ?>][is_correct]" value="<?php if (isset ( $this->_aVars['aAnswer']['is_correct'] )):  echo $this->_aVars['aAnswer']['is_correct'];  else: ?>found none<?php endif; ?>">
<?php if (isset ( $this->_aVars['aAnswer']['answer_id'] )): ?>
<!--								-->
								<input type="hidden" name="val[q][<?php if (isset ( $this->_aVars['Question']['question_id'] )):  echo $this->_aVars['Question']['question_id'];  elseif (isset ( $this->_aPhpfoxVars['iteration']['question'] )):  echo $this->_aPhpfoxVars['iteration']['question'];  else: ?>0<?php endif; ?>][answers][<?php if (isset ( $this->_aVars['aAnswer']['answer_id'] ) && $this->_aVars['aAnswer']['answer_id'] != ''):  echo $this->_aVars['aAnswer']['answer_id'];  else:  echo $this->_aPhpfoxVars['iteration']['iAnswer'];  endif; ?>][answer_id]" class="hdnAnswerId"  value="<?php if (! isset ( $this->_aVars['bErrors'] ) || $this->_aVars['bErrors'] == false):  echo $this->_aVars['aAnswer']['answer_id'];  endif; ?>">
								<input type="hidden" name="val[q][<?php if (isset ( $this->_aVars['Question']['question_id'] )):  echo $this->_aVars['Question']['question_id'];  elseif (isset ( $this->_aPhpfoxVars['iteration']['question'] )):  echo $this->_aPhpfoxVars['iteration']['question'];  else: ?>0<?php endif; ?>][answers][<?php if (isset ( $this->_aVars['aAnswer']['answer_id'] ) && $this->_aVars['aAnswer']['answer_id'] != ''):  echo $this->_aVars['aAnswer']['answer_id'];  else:  echo $this->_aPhpfoxVars['iteration']['iAnswer'];  endif; ?>][question_id]" class="hdnQuestionId"  value="<?php if (isset ( $this->_aVars['aAnswer']['question_id'] )):  echo $this->_aVars['aAnswer']['question_id'];  endif; ?>">
<?php else: ?>
<!--								-->
<?php endif; ?>
							<input type="text" name="val[q][<?php if (isset ( $this->_aVars['Question']['question_id'] )):  echo $this->_aVars['Question']['question_id'];  elseif (isset ( $this->_aPhpfoxVars['iteration']['question'] )):  echo $this->_aPhpfoxVars['iteration']['question'];  else: ?>0<?php endif; ?>][answers][<?php if (isset ( $this->_aVars['aAnswer']['answer_id'] ) && $this->_aVars['aAnswer']['answer_id'] != ''):  echo $this->_aVars['aAnswer']['answer_id'];  elseif (isset ( $this->_aPhpfoxVars['iteration']['iAnswer'] )):  echo $this->_aPhpfoxVars['iteration']['iAnswer'];  else:  echo $this->_aPhpfoxVars['iteration']['iAnswer'];  endif; ?>][answer]" tabindex="" class="form-control answer " value="<?php echo $this->_aVars['aAnswer']['answer']; ?>" maxlength="100" onblur="<?php echo 'if(this.value == \'\'){ this.value = \'';  echo $this->_aVars['aAnswer']['answer'];  echo '\';}'; ?>
" onfocus="<?php echo 'if ( (this.value.length == \'Answer X...\'.length || this.value.length == \'Answer XY...\'.length) && (this.value.substr(0,\'Answer \'.length) == \'Answer \') && (this.value.substr(\'Answer X\'.length, 3) == \'...\')){this.value = \'\';}'; ?>
" />

							<a href="#" class="a_addAnswer" onclick="return $Core.quiz.appendAnswer(this);">
								<i class="ico ico-plus-circle-o"></i>
							</a>
							<a href="#" class="a_removeAnswer_<?php echo $this->_aPhpfoxVars['iteration']['iAnswer']; ?>" id="a_removeAnswer" onclick="return $Core.quiz.deleteAnswer(this);">
								<i class="ico ico-minus-circle-o"></i>
							</a>
							<a href="#" class="a_setCorrect_<?php echo $this->_aPhpfoxVars['iteration']['iAnswer']; ?>" id="a_setCorrect" onclick="return $Core.quiz.setCorrect(this);">
								<i class="ico ico-circle-o"></i>
							</a>
						</div>
<?php endforeach; endif; ?>
<?php else: ?>
<?php for ($this->_aVars['i']=1; $this->_aVars['i'] <= $this->_aVars['iDefaultAnswers']; $this->_aVars['i']++): ?>
						<div id="answer_[iQuestionId]_<?php echo $this->_aVars['i']; ?>" class="p_2 answer_parent form-group">
							<input name="val[q][<?php if (isset ( $this->_aVars['Question']['question_id'] )):  echo $this->_aVars['Question']['question_id'];  elseif (isset ( $this->_aPhpfoxVars['iteration']['question'] )):  echo $this->_aPhpfoxVars['iteration']['question'];  else: ?>0<?php endif; ?>][answers][<?php echo $this->_aVars['i']; ?>][is_correct]" type="hidden" class="hdnCorrectAnswer" value="0">
							<input type="hidden" class="hdnAnswerId"  value="">
							<input type="hidden" class="hdnQuestionId"  value="">
							<input class="form-control answer" placeholder="<?php echo _p('answer'); ?>" type="text" name="" tabindex="<?php echo $this->_aVars['i']; ?>" class="answer answer_<?php echo $this->_aVars['i']; ?>" value="" maxlength="100" />
							<a href="#" class="a_addAnswer" onclick="return $Core.quiz.appendAnswer(this);">
								<i class="ico ico-plus-circle-o"></i>
							</a>
							<a href="#" class="a_removeAnswer_<?php echo $this->_aVars['i']; ?>" id="a_removeAnswer" onclick="return $Core.quiz.deleteAnswer(this);">
								<i class="ico ico-minus-circle-o"></i>
							</a>
							<a href="#" class="a_setCorrect_<?php echo $this->_aVars['i']; ?>" id="a_setCorrect" onclick="return $Core.quiz.setCorrect(this);">
								<i class="ico ico-circle-o"></i>
							</a>
						</div>
<?php endfor; ?>
<?php endif; ?>
			</div>
		</div>
</div>

