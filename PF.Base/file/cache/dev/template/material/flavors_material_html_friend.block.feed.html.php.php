<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 3:21 am */ ?>
<?php  
    
?>

    <div class="mutual-friends">
<?php Phpfox::getBlock('user.friendship', array('friend_user_id' => $this->_aVars['aUserFriendFeed']['user_id'],'type' => 'icon','extra_info' => true)); ?>
    </div>
<div class="gender-location">
<?php if (isset ( $this->_aVars['aUserFriendFeed']['gender_name'] )): ?>
    <div class="item-gender"><?php echo $this->_aVars['aUserFriendFeed']['gender_name']; ?></div>
<?php endif; ?>


<?php if (User_Service_Privacy_Privacy ::instance()->hasAccess('' . $this->_aVars['aUserFriendFeed']['user_id'] . '' , 'profile.view_location' ) && ( ! empty ( $this->_aVars['aUserFriendFeed']['city_location'] ) || ! empty ( $this->_aVars['aUserFriendFeed']['country_child_id'] ) || ! empty ( $this->_aVars['aUserFriendFeed']['location'] ) )): ?>
    <div class="item-location">
        <span><?php echo _p('lives_in'); ?></span>
<?php if (! empty ( $this->_aVars['aUserFriendFeed']['city_location'] )):  echo $this->_aVars['aUserFriendFeed']['city_location'];  endif; ?>
<?php if (! empty ( $this->_aVars['aUserFriendFeed']['city_location'] ) && ( ! empty ( $this->_aVars['aUserFriendFeed']['country_child_id'] ) || ! empty ( $this->_aVars['aUserFriendFeed']['location'] ) )): ?>,<?php endif; ?>
<?php if (! empty ( $this->_aVars['aUserFriendFeed']['country_child_id'] )): ?>&nbsp;<?php echo Phpfox::getService('core.country')->getChild($this->_aVars['aUserFriendFeed']['country_child_id']);  endif; ?> <?php if (! empty ( $this->_aVars['aUserFriendFeed']['location'] )):  echo $this->_aVars['aUserFriendFeed']['location'];  endif; ?>
    </div>
<?php endif; ?>
</div>
