<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 23, 2018, 11:51 am */ ?>
<?php

?>

<?php if (empty ( $this->_aVars['no_button'] ) && Phpfox ::isUser() && Phpfox ::isModule('friend') && Phpfox ::getUserParam('friend.can_add_friends')): ?>
<?php if (! $this->_aVars['is_friend']): ?>
    <div class="btn-addfriend">
        <a class="btn btn-primary btn-gradient s-5 btn-round" href="#" onclick="return $Core.addAsFriend('<?php echo $this->_aVars['user_id']; ?>'<?php if (! empty ( $this->_aVars['bInSuggestionsBlock'] )): ?>,true<?php endif; ?>);" title="<?php echo _p('add_to_friends'); ?>">
<?php if ($this->_aVars['type'] == 'string'): ?>
            <span class="ico ico-user1-plus-o"></span>
<?php echo _p('add_as_friend'); ?>
<?php else: ?>
            <span class="ico ico-user1-plus-o"></span>
<?php endif; ?>
        </a>
    </div>
<?php endif;  endif; ?>

<?php if ($this->_aVars['show_extra']): ?>
<div class="friend-info">
    <ul class="mutual-friends-list">
<?php if ($this->_aVars['mutual_count'] == 0): ?>
<?php if (! empty ( $this->_aVars['aUserFriendFeed'] ) && ! empty ( $this->_aVars['aUserFriendFeed']['total_friend'] )): ?>
<?php if ($this->_aVars['aUserFriendFeed']['total_friend'] == 1):  echo _p('total_friend', array('total' => $this->_aVars['aUserFriendFeed']['total_friend']));  else:  echo _p('total_friends', array('total' => $this->_aVars['aUserFriendFeed']['total_friend']));  endif; ?>
<?php elseif (! empty ( $this->_aVars['aUser']['total_friend'] )): ?>
<?php if ($this->_aVars['aUser']['total_friend'] == 1):  echo _p('total_friend', array('total' => $this->_aVars['aUser']['total_friend']));  else:  echo _p('total_friends', array('total' => $this->_aVars['aUser']['total_friend']));  endif; ?>
<?php endif; ?>
<?php else: ?>
<?php if ($this->_aVars['no_mutual_list']): ?>
<?php if (! empty ( $this->_aVars['aUserFriendFeed'] ) && ! empty ( $this->_aVars['aUserFriendFeed']['user_id'] )): ?>
                    <a href="#" onclick="$Core.box('friend.getMutualFriends', 450, 'user_id=<?php echo $this->_aVars['aUserFriendFeed']['user_id']; ?>');return false;">
<?php else: ?>
                    <a href="#" onclick="$Core.box('friend.getMutualFriends', 450, 'user_id=<?php echo $this->_aVars['user_id']; ?>');return false;">
<?php endif; ?>
<?php if ($this->_aVars['mutual_count'] == 1): ?>
<?php echo _p('1_mutual_friend'); ?>
<?php else: ?>
<?php echo _p('total_mutual_friends', array('total' => $this->_aVars['mutual_count'])); ?>
<?php endif; ?>
                </a>
<?php else: ?>
<?php if ($this->_aVars['mutual_count'] == 1): ?>
<?php echo _p('1_mutual_friend'); ?>
<?php else: ?>
<?php echo _p('total_mutual_friends', array('total' => $this->_aVars['mutual_count'])); ?>
<?php endif; ?>
                :
<?php if (count((array)$this->_aVars['mutual_list'])):  foreach ((array) $this->_aVars['mutual_list'] as $this->_aVars['iKey'] => $this->_aVars['aMutualFriend']): ?>
                <li class="user_profile_link_span" id="js_user_name_link_<?php echo $this->_aVars['aMutualFriend']['user_name']; ?>">
                    <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aMutualFriend']['user_name']); ?>"><?php echo $this->_aVars['aMutualFriend']['full_name']; ?></a>
                </li>
<?php endforeach; endif; ?>
<?php if ($this->_aVars['mutual_remain'] > 0): ?>
<?php echo _p('and'); ?>
                    <a href="#" onclick="$Core.box('friend.getMutualFriends', 450, 'user_id=<?php if (! empty ( $this->_aVars['aUserFriendFeed'] ) && ! empty ( $this->_aVars['aUserFriendFeed']['user_id'] )):  echo $this->_aVars['aUserFriendFeed']['user_id'];  else:  echo $this->_aVars['user_id'];  endif; ?>');return false;"><?php if ($this->_aVars['mutual_remain'] == 1):  echo _p('1_other');  else:  echo _p('total_others', array('total' => $this->_aVars['mutual_remain']));  endif; ?></a>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
    </ul>
</div>
<?php endif; ?>
