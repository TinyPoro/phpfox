<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 3:33 am */ ?>
<?php

 if ($this->_aVars['sLocation']): ?>
<div class="user-location" title="<?php echo $this->_aVars['sLocation']; ?>">
<?php echo $this->_aVars['sLocation']; ?>
</div>
<?php endif; ?>

<?php if ($this->_aVars['sGender']): ?>
<div class="user-gender" title="<?php echo $this->_aVars['sGender']; ?>">
<?php echo $this->_aVars['sGender']; ?>
</div>
<?php endif; ?>

<?php if ($this->_aVars['sJoined']): ?>
<div class="user-joined" title="<?php echo _p('joined'); ?>: <?php echo $this->_aVars['sJoined']; ?>">
<?php echo _p('joined'); ?>: <?php echo $this->_aVars['sJoined']; ?>
</div>
<?php endif; ?>

