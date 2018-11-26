<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:44 am */ ?>
<?php

?>
<div class="admincp_apps_holder">
	<section>
		<div class="themes">
<?php if (count((array)$this->_aVars['themes'])):  foreach ((array) $this->_aVars['themes'] as $this->_aVars['theme']): ?>
			<article <?php if (( $this->_aVars['theme']['is_default'] )): ?> id="is-default"<?php endif; ?> <?php echo $this->_aVars['theme']['image']; ?>>
				<h1>
					<a class= href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.manage', array('id' => $this->_aVars['theme']['theme_id'])); ?>">
						<span><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['theme']['name']); ?></span>
						<em><?php echo _p('edit'); ?></em>
					</a>
					<a class="touch_screen" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.manage', array('id' => $this->_aVars['theme']['theme_id'])); ?>">
					</a>
				</h1>
			</article>
<?php endforeach; endif; ?>
		</div>
	</section>

	<section class="preview">
		<h1><?php echo _p('featured_themes'); ?></h1>
		<div class="phpfox_store_featured" data-type="themes" data-parent="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.store', array('load' => 'themes')); ?>"></div>
	</section>
</div>
