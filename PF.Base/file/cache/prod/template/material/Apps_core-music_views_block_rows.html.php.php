<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 10:38 am */ ?>
<?php
	
 if (! isset ( $this->_aVars['bIsInFeed'] ) || ( isset ( $this->_aVars['bIsInFeed'] ) && ! $this->_aVars['bIsInFeed'] )): ?>
    <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.mini-entry');
						 else: ?>
    <div class="item-container music-listing">
<?php if (count((array)$this->_aVars['aSongs'])):  $this->_aPhpfoxVars['iteration']['song'] = 0;  foreach ((array) $this->_aVars['aSongs'] as $this->_aVars['iKey'] => $this->_aVars['aSong']):  $this->_aPhpfoxVars['iteration']['song']++; ?>

            <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.mini-feed-entry');
						?>
<?php endforeach; endif; ?>
    </div>
<?php endif; ?>
