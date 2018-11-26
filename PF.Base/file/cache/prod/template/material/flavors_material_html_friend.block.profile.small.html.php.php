<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 23, 2018, 3:04 am */ ?>
<?php



?>
<div class="block">
	<div class="title">
<?php echo _p('friends'); ?>
	</div>
	<div class="content user_rows_block_content" id="js_block_content_profile_friend">
		<div class="user_rows_mini core-friend-block">
<?php if (count((array)$this->_aVars['aFriends'])):  foreach ((array) $this->_aVars['aFriends'] as $this->_aVars['aUser']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('user.block.rows');
						?>
<?php endforeach; endif; ?>
		</div>
	</div>

<?php if ($this->_aVars['aSubject']['total_friend'] > count ( $this->_aVars['aFriends'] )): ?>
    <div class="bottom">
        <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl(''.$this->_aVars['aSubject']['user_name'].'.friend'); ?>">
<?php echo _p('view_all_friends', array('total' => $this->_aVars['aSubject']['total_friend'])); ?>
		</a>
	</div>
<?php endif; ?>
</div>


<?php if (count((array)$this->_aVars['aFriendLists'])):  foreach ((array) $this->_aVars['aFriendLists'] as $this->_aVars['aLists']): ?>
<div class="block">
	<div class="title">
<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aLists']['name']); ?>
	</div>
	<div class="content" id="js_block_content_profile_friend">
		<div class="user_rows_mini core-friend-block">
<?php if (count((array)$this->_aVars['aLists']['friends'])):  foreach ((array) $this->_aVars['aLists']['friends'] as $this->_aVars['aUser']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('user.block.rows');
						?>
<?php endforeach; endif; ?>
		</div>
	</div>

<?php if ($this->_aVars['aLists']['friends_total'] > count ( $this->_aVars['aLists']['friends'] )): ?>
	<div class="bottom">
        <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl(''.$this->_aVars['aSubject']['user_name'].'.friend', array('list' => $this->_aVars['aLists']['list_id'])); ?>">
<?php echo _p('view_all_friends', array('total' => $this->_aVars['aLists']['friends_total'])); ?>
		</a>
	</div>
<?php endif; ?>
</div>
<?php endforeach; endif; ?>
