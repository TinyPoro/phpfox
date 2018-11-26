<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:37 am */ ?>
<?php
	 
?>

<?php if (isset ( $this->_aVars['bIsViewingQuiz'] )): ?>
	<div class="item_info pr-3">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aQuiz'],'suffix' => '_50_square')); ?>
	    <div class="item_info_author">
	        <div><?php echo _p('by'); ?> <?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aQuiz']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aQuiz']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aQuiz']['user_name'], ((empty($this->_aVars['aQuiz']['user_name']) && isset($this->_aVars['aQuiz']['profile_page_id'])) ? $this->_aVars['aQuiz']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aQuiz']['user_id'], $this->_aVars['aQuiz']['full_name']), 50, '...') . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aQuiz']['user_id']) ? '' : '</a>') . '</span>'; ?></div>
	        <div class="time"><?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aQuiz']['time_stamp']); ?></div>
	    </div>
	</div>

	<div class="item-comment mb-2">
<?php if ($this->_aVars['aQuiz']['view_id'] == 0): ?>
            <div>
<?php Phpfox::getBlock('feed.mini-feed-action', array()); ?>
           </div>
       
       <span class="item-total-view">
           <span><b><?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aQuiz']['total_view']); ?></b> <?php if ($this->_aVars['aQuiz']['total_view'] == 1):  echo _p('view');  else:  echo _p('views_lowercase');  endif; ?></span>
           <span><b><?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aQuiz']['total_play']); ?></b> <?php if ($this->_aVars['aQuiz']['total_play'] == 1):  echo _p('quiz_total_play');  else:  echo _p('quiz_total_plays');  endif; ?></span>
       </span>
<?php endif; ?>
    </div>

<?php if ($this->_aVars['aQuiz']['hasPermission']): ?>
        <div class="item_bar">
            <div class="dropdown">
                <span role="button" data-toggle="dropdown" class="item_bar_action">
                    <i class="ico ico-gear-o"></i>
                </span>
                <ul class="dropdown-menu dropdown-menu-right">
                    <?php
						Phpfox::getLib('template')->getBuiltFile('quiz.block.link');
						?>
                </ul>
            </div>
        </div>
<?php endif; ?>

	<div class="item-content">
<?php if (! empty ( $this->_aVars['aQuiz']['image_path'] )): ?>
            <div class="item-media mr-2">
                <span style="background-image: url('<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('thickbox' => true,'server_id' => $this->_aVars['aQuiz']['server_id'],'title' => $this->_aVars['aQuiz']['title'],'path' => 'quiz.url_image','file' => $this->_aVars['aQuiz']['image_path'],'suffix' => '','return_url' => true)); ?>');"></span>
            </div>
<?php endif; ?>
        <div class="item_view_content">
<?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['aQuiz']['description']), 200, 'feed.view_more', true), 55); ?>
        </div>
    </div>

<?php if (( isset ( $this->_aVars['aQuiz']['view_id'] ) && $this->_aVars['aQuiz']['view_id'] == 1 )): ?>
        <?php
						Phpfox::getLib('template')->getBuiltFile('core.block.pending-item-action');
						?>
<?php endif;  endif; ?>
		
<div id="js_quiz_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>" class="<?php if (isset ( $this->_aPhpfoxVars['iteration']['quizzes'] )): ?> <?php if (is_int ( $this->_aPhpfoxVars['iteration']['quizzes'] / 2 )): ?>row1<?php else: ?>row2<?php endif;  if ($this->_aPhpfoxVars['iteration']['quizzes'] == 1): ?> row_first<?php endif;  endif; ?>">
	<div id="js_message_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>" style="display: none;"></div>	
	<div class="item_content">
<?php if ($this->_aVars['aQuiz']['total_attachment']): ?>
<?php Phpfox::getBlock('attachment.list', array('sType' => 'quiz','iItemId' => $this->_aVars['aQuiz']['quiz_id'])); ?>
<?php endif; ?>
<?php if (isset ( $this->_aVars['bShowResults'] ) && $this->_aVars['bShowResults']): ?>
			<?php
						Phpfox::getLib('template')->getBuiltFile('quiz.block.result');
						?>
<?php elseif (isset ( $this->_aVars['bShowUsers'] ) && $this->_aVars['bShowUsers']): ?>
            <div class="quiz_user_title text-uppercase"><?php echo _p('member_results'); ?> <span>(<?php echo Phpfox::getService('core.helper')->shortNumber($this->_aVars['aQuiz']['total_play']); ?>)</span></div>
			<div class="quiz_user_lists js_quiz_user_lists" id="quiz_taken_by">
<?php if (count((array)$this->_aVars['aQuiz']['aTakenBy'])):  $this->_aPhpfoxVars['iteration']['users'] = 0;  foreach ((array) $this->_aVars['aQuiz']['aTakenBy'] as $this->_aVars['aUser']):  $this->_aPhpfoxVars['iteration']['users']++; ?>

					<div class="quiz_user_list">
						<div class="quiz_user_list_left">
							<div class="quiz_user_list_number fw-bold"><?php echo $this->_aVars['aUser']['index']; ?></div>
							<div class="quiz_user_image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser']['user_info'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?>
								<div class="quiz_user_inner">
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aUser']['user_info']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_info']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aUser']['user_info']['user_name'], ((empty($this->_aVars['aUser']['user_info']['user_name']) && isset($this->_aVars['aUser']['user_info']['profile_page_id'])) ? $this->_aVars['aUser']['user_info']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aUser']['user_info']['user_id'], $this->_aVars['aUser']['user_info']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aUser']['user_info']['user_id']) ? '' : '</a>') . '</span>'; ?>
									<time><?php echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aUser']['time_stamp']); ?></time>
								</div>
							</div>
						</div>
						<div class="quiz_user_list_right">
							<div class="quiz_percentage fw-bold"><?php if (( Phpfox ::getParam('quiz.show_percentage_in_results'))):  echo $this->_aVars['aUser']['iSuccessPercentage']; ?>%<?php else:  echo $this->_aVars['aUser']['total_correct']; ?>/<?php echo $this->_aVars['aUser']['iTotalCorrectAnswers'];  endif; ?></div>
							<div class="quiz_button ml-2"><a href="<?php echo Phpfox::permalink('quiz', $this->_aVars['aQuiz']['quiz_id'], $this->_aVars['aQuiz']['title'], false, null, (array) array (
)); ?>results/id_<?php echo $this->_aVars['aUser']['user_info']['user_id']; ?>/" id="quiz_inner_title_<?php echo $this->_aVars['aQuiz']['quiz_id']; ?>" class="button btn btn-default"><?php echo _p('view_results'); ?></a></div>
						</div>
					</div>
<?php endforeach; else: ?>
				    <div class="t_left"><?php echo _p('be_the_first_to_answer_this_quiz'); ?></div>
<?php endif; ?>
<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager'); ?>
			</div>
<?php else: ?>
<?php if (isset ( $this->_aVars['bIsViewingQuiz'] )): ?>
<?php if (isset ( $this->_aVars['aQuiz']['question'] )): ?>
					<form class="quiz-form" name="js_form_answer" method="post" action="<?php echo Phpfox::permalink('quiz', $this->_aVars['aQuiz']['quiz_id'], $this->_aVars['aQuiz']['title'], false, null, (array) array (
)); ?>answer/">
							<div class="quiz_questions mb-3" >
<?php if (count((array)$this->_aVars['aQuiz']['question'])):  $this->_aPhpfoxVars['iteration']['questions'] = 0;  foreach ((array) $this->_aVars['aQuiz']['question'] as $this->_aVars['iQuestionId'] => $this->_aVars['aQuestion']):  $this->_aPhpfoxVars['iteration']['questions']++; ?>

									<div class="quiz_questions_inner <?php if (isset ( $this->_aVars['aAnswers'] ) && ! isset ( $this->_aVars['aAnswers'][$this->_aVars['iQuestionId']] )): ?>bg-danger<?php endif; ?>">
										<div class="quiz_questions_nummberlist"><?php echo $this->_aPhpfoxVars['iteration']['questions']; ?></div>
										<div class="quiz_answers">
											<div class="quiz_answers_title fw-bold mb-1"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aQuestion']['question']); ?></div>
<?php if (count((array)$this->_aVars['aQuestion']['answer'])):  $this->_aPhpfoxVars['iteration']['answers'] = 0;  foreach ((array) $this->_aVars['aQuestion']['answer'] as $this->_aVars['iAnswerId'] => $this->_aVars['sAnswer']):  $this->_aPhpfoxVars['iteration']['answers']++; ?>

												<div class="quiz_answer">
													<div class="radio">
														<label>
															<input class="checkbox" <?php if (! $this->_aVars['bCanAnswer']): ?>disabled<?php endif; ?> name="val[answer][<?php echo $this->_aVars['iQuestionId']; ?>]" value="<?php echo $this->_aVars['iAnswerId']; ?>" style="vertical-align: middle;" type="radio" <?php if (isset ( $this->_aVars['aAnswers'][$this->_aVars['iQuestionId']] ) && $this->_aVars['aAnswers'][$this->_aVars['iQuestionId']] == $this->_aVars['iAnswerId']): ?>checked<?php endif; ?>>
															<i class="ico ico-circle-o"></i>
															<span title="<?php echo $this->_aVars['sAnswer']; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['sAnswer']); ?></span>
														</label>
													</div>
												</div>
<?php endforeach; endif; ?>
										</div>
									</div>
<?php endforeach; endif; ?>
							</div>
<?php if (isset ( $this->_aVars['aQuiz']['view_id'] ) && $this->_aVars['aQuiz']['view_id'] != 1 && $this->_aVars['bCanAnswer']): ?>
							<button class="btn btn-primary"><?php echo _p('submit_your_answers'); ?></button>
<?php endif; ?>
					
</form>

<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php if (! isset ( $this->_aVars['bIsViewingQuiz'] ) && isset ( $this->_aVars['aQuiz']['aFeed'] )): ?>
<?php Phpfox::getBlock('feed.comment', array('aFeed' => $this->_aVars['aQuiz']['aFeed'])); ?>
<?php endif; ?>
	</div>		
</div>

