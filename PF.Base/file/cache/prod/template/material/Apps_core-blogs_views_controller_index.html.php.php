<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:30 am */ ?>
<?php

 if (! count ( $this->_aVars['aBlogs'] )): ?>
<?php if (! PHPFOX_IS_AJAX): ?>
        <div class="extra_info">
<?php echo _p('no_blogs_found'); ?>
        </div>
<?php endif;  else: ?>
<?php if (! PHPFOX_IS_AJAX): ?>
        <div class="item-container with-blog blog-listing" id="container-blog">
<?php endif; ?>
<?php if (count((array)$this->_aVars['aBlogs'])):  $this->_aPhpfoxVars['iteration']['blog'] = 0;  foreach ((array) $this->_aVars['aBlogs'] as $this->_aVars['aItem']):  $this->_aPhpfoxVars['iteration']['blog']++; ?>

        <?php
						Phpfox::getLib('template')->getBuiltFile('blog.block.entry');
						?>
<?php endforeach; endif; ?>
<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager'); ?>
<?php if ($this->_aVars['bShowModerator']): ?>
<?php Phpfox::getBlock('core.moderation'); ?>
<?php endif; ?>
<?php if (! PHPFOX_IS_AJAX): ?>
        </div>
<?php endif;  endif; ?>

