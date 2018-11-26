<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 10:08 am */ ?>
<?php 

 if (count ( $this->_aVars['aPages'] )): ?>
<div class="help-block"><?php echo _p('select_switch_below_to_use_this_site_as_a_page'); ?></div>

<div class="login-as-page-items">
<?php if (count((array)$this->_aVars['aPages'])):  $this->_aPhpfoxVars['iteration']['pages'] = 0;  foreach ((array) $this->_aVars['aPages'] as $this->_aVars['aPage']):  $this->_aPhpfoxVars['iteration']['pages']++; ?>

    <div class="item-outer">
        <div class="item-inner">
            <div class="item-media-src s-6 mr-1">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aPage'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?>
            </div>
            <div class="item-info">
                <a href="<?php echo $this->_aVars['aPage']['link']; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aPage']['title']), 20); ?></a>
                <button type="button" name="switch" class="btn btn-sm btn-gradient btn-primary" onclick="$.ajaxCall('pages.processLogin', 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>', 'GET')">
<?php echo _p('switch'); ?>
                </button>
            </div>
        </div>
    </div>
<?php endforeach; endif; ?>
</div>
<?php else: ?>
<div class="help-block">
<?php echo _p('you_currently_do_not_have_any_pages', array('link' => $this->_aVars['sLink'])); ?>
</div>
<?php endif; ?>
