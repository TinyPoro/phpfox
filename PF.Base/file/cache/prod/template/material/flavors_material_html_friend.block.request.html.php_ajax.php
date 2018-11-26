<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 12:53 pm */ ?>
<?php 

 

 echo '
	<script type="text/javascript">
	$Core.loadStaticFile(getParam(\'sJsHome\') + \'static/jscript/jquery/plugin/jquery.limitTextarea.js\');
	function processList(sValue)
	{
		if (sValue == \'\')
		{
			return false;
		}
		
		if (sValue == \'create_new\')
		{
			$(\'#js_list_options\').hide(); 
			$(\'#js_add_new_list\').show();
			return false;
		}
		
		return false;
	}

	function resetList()
	{
		$(\'#js_add_new_list\').hide(); 
		$(\'#js_list_options\').show();
		
		$(\'option\').each(function()
		{
			this.selected = false;
		});
		
		return false;	
	}
	</script>
'; ?>



<form method="post" action="#" id="js_process_request" onsubmit="return false;">
<?php if ($this->_aVars['bInvite']): ?>
	<div>
		<input type="hidden" name="val[invite]" value="true" />
	</div>
<?php endif;  if ($this->_aVars['bSuggestion']): ?>
	<div>
		<input type="hidden" name="val[suggestion]" value="true" />
	</div>
<?php endif;  if ($this->_aVars['bPageSuggestion']): ?>
	<div>
		<input type="hidden" name="val[page_suggestion]" value="true" />
	</div>
<?php endif; ?>
<div>
	<input type="hidden" name="val[user_id]" value="<?php echo $this->_aVars['aUser']['user_id']; ?>" />
</div>
<div class="item-user-request-outer">
<div class="item-user-request-cover" style="background-image:url('<?php echo $this->_aVars['aUser']['cover_photo_link']; ?>')"></div>
<div class="user-request-main">	
<div class="item-user-request-image" id="profile_picture_container">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?>
</div>
<div class="request_text item-user-request-info">
<?php if ($this->_aVars['sError']): ?>
<?php if ($this->_aVars['sError'] == 'already_asked'): ?>
		<div><?php echo _p('you_have_already_asked_full_name_to_be_your_friend', array('full_name' => $this->_aVars['aUser']['full_name'])); ?></div>
<?php elseif ($this->_aVars['sError'] == 'user_asked_already'): ?>
		<div><?php echo _p('full_name_has_already_asked_to_be_your_friend', array('full_name' => $this->_aVars['aUser']['full_name'])); ?></div>
		<div class="p_4">
<?php echo _p('would_you_like_to_accept_their_request_to_be_friends'); ?>
			<div class="p_4 item-user-request-info-button">
				<input type="submit" onclick="$('#js_process_request').ajaxCall('friend.processRequest', 'type=yes&amp;user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>');" value="<?php echo _p('yes'); ?>" class="button btn-primary" />
				<input type="submit" onclick="$('#js_process_request').ajaxCall('friend.processRequest', 'type=no&amp;user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>');" value="<?php echo _p('no'); ?>" class="button btn-primary" />
			</div>
		</div>	
<?php elseif ($this->_aVars['sError'] == 'same_user'): ?>
		<div><?php echo _p('cannot_add_yourself_as_a_friend'); ?></div>
<?php elseif ($this->_aVars['sError'] == 'already_friends'): ?>
		<div><?php echo _p('you_are_already_friends_with_full_name', array('full_name' => $this->_aVars['aUser']['full_name'])); ?></div>
<?php endif; ?>
</div>
<?php else: ?>
	<div class="item-user-alert"><?php echo _p('user_link_will_have_to_confirm_that_you_are_friends', array('user' => $this->_aVars['aUser'])); ?></div>
<?php if ($this->_aVars['iMutualCount']): ?>
	<div class="item-user-mutualfriend"><?php if ($this->_aVars['iMutualCount'] == 1):  echo _p('1_mutual_friend');  else:  echo _p('total_mutual_friends', array('total' => $this->_aVars['iMutualCount']));  endif; ?></div>
<?php endif; ?>
<?php if ($this->_aVars['sAdditionalInfo']): ?>
	<div class="item-user-info"><?php echo $this->_aVars['sAdditionalInfo']; ?></div>
<?php endif; ?>
	</div>
	</div>
	<div class="clear"></div>
	<div class="p_top_15 item-user-request-action">
		<div class="table_clear" id="container_submit_friend_request">
			<button type="submit" onclick="$(this).attr('disabled', 'disabled');<?php if ($this->_aVars['bSuggestion']): ?>$('#js_friend_suggestion').hide(); $('#js_friend_suggestion_loader').show(); <?php endif; ?>$('#js_process_image').show(); $('#js_process_request').ajaxCall('friend.addRequest');"  class="btn btn-primary btn-icon"><span class="ico ico-user1-plus-o "></span><?php echo _p('send_friend_request'); ?></button> <span id="js_process_image" style="display:none;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif')); ?></span>
		</div>
        <div class="alert alert-success ml-2 mr-2" id="friend_request_alert" style="display: none;">
<?php echo _p('friend_request_successfully_sent'); ?>
        </div>
	</div>
<?php endif; ?>
</div>

</form>

<script type="text/javascript">$Core.init();</script>
