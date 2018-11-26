<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 19, 2018, 11:56 am */ ?>
<?php 

 

 if (isset ( $this->_aVars['sNotShareFriend'] ) && $this->_aVars['sNotShareFriend']): ?>
<div class="alert alert-warning"><?php echo $this->_aVars['sNotShareFriend']; ?></div>
<?php else:  if (! PHPFOX_IS_AJAX): ?>
<form method="get" action="<?php echo $this->_aVars['sProfileLink']; ?>" class="form">
    <div class="form-group">
<?php echo $this->_aVars['aFilters']['search']; ?>
    </div>

</form>

<br/>
<?php endif;  if (( $this->_aVars['aFriends'] )):  if (! PHPFOX_IS_AJAX): ?>
<div class="item-container user-listing" id="collection-user-profiles">
<?php endif;  if (count((array)$this->_aVars['aFriends'])):  $this->_aPhpfoxVars['iteration']['friend'] = 0;  foreach ((array) $this->_aVars['aFriends'] as $this->_aVars['aUser']):  $this->_aPhpfoxVars['iteration']['friend']++; ?>

    <article class="user-item">
        <?php
						Phpfox::getLib('template')->getBuiltFile('user.block.rows_wide');
						?>
    </article>
<?php endforeach; endif;  if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager');  if (! PHPFOX_IS_AJAX): ?>
</div>
<?php endif;  elseif (! PHPFOX_IS_AJAX): ?>
<div class="alert alert-info">
<?php echo _p('no_friend_found'); ?>.
</div>
<?php endif; ?>
<?php endif; ?>
