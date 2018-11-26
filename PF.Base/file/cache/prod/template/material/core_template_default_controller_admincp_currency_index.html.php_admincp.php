<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:44 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: index.html.php 1558 2010-05-04 12:51:22Z Raymond_Benc $
 */
 
 

?>
<div class="table-responsive">
    <table class="table table-admin" id="js_drag_drop">
        <thead>
            <tr class="nodrop">
                <th class="w20"></th>
                <th class="w40"><?php echo _p('id'); ?></th>
                <th class="t_center w60"><?php echo _p('symbol'); ?></th>
                <th><?php echo _p('currency'); ?></th>
                <th class="w140"><?php echo _p('format_uppercase'); ?></th>
                <th class="w80"><?php echo _p('default'); ?></th>
                <th class="w60"><?php echo _p('active'); ?></th>
                <th class="w80 text-center"><?php echo _p('settings'); ?></th>
            </tr>
        </thead>
        <tbody>
<?php if (count((array)$this->_aVars['aCurrencies'])):  $this->_aPhpfoxVars['iteration']['currencies'] = 0;  foreach ((array) $this->_aVars['aCurrencies'] as $this->_aVars['aCurrency']):  $this->_aPhpfoxVars['iteration']['currencies']++; ?>

            <tr>
                <td class="drag_handle">
                    <input type="hidden" name="val[ordering][<?php echo $this->_aVars['aCurrency']['currency_id']; ?>]" value="<?php echo $this->_aVars['aCurrency']['ordering']; ?>" />
                </td>
                <td class="t_center"><?php echo $this->_aVars['aCurrency']['currency_id']; ?></td>
                <td class="t_center">
                    <strong class="text-danger"><?php echo $this->_aVars['aCurrency']['symbol']; ?></strong>
                </td>
                <td><?php echo _p($this->_aVars['aCurrency']['phrase_var']); ?></td>
                <td class="w140"><?php echo _p($this->_aVars['aCurrency']['format']); ?></td>
                <td class="on_off">
<?php if ($this->_aVars['aCurrency']['is_active']): ?>
                    <div class="js_item_is_active <?php if (( ! $this->_aVars['aCurrency']['is_default'] )): ?>hide<?php endif; ?>">
                        <a href="#?call=core.updateCurrencyDefault&amp;id=<?php echo $this->_aVars['aCurrency']['currency_id']; ?>&amp;active=0" class="js_item_active_link js_remove_default" title="<?php echo _p('set_as_default'); ?>"></a>
                    </div>
                    <div class="js_item_is_not_active <?php if ($this->_aVars['aCurrency']['is_default']): ?>hide<?php endif; ?>">
                        <a href="#?call=core.updateCurrencyDefault&amp;id=<?php echo $this->_aVars['aCurrency']['currency_id']; ?>&amp;active=1" class="js_item_active_link js_remove_default" title="<?php echo _p('set_as_default'); ?>"></a>
                    </div>
<?php endif; ?>
                </td>
                <td class="on_off">
<?php if (( ! $this->_aVars['aCurrency']['is_default'] )): ?>
                    <div class="js_item_is_active <?php if (! $this->_aVars['aCurrency']['is_active']): ?>hide<?php endif; ?>">
                        <a href="#?call=core.updateCurrencyActivity&amp;id=<?php echo $this->_aVars['aCurrency']['currency_id']; ?>&amp;active=0" class="js_item_active_link" title="<?php echo _p('deactivate'); ?>"></a>
                    </div>
                    <div class="js_item_is_not_active <?php if ($this->_aVars['aCurrency']['is_active']): ?>hide<?php endif; ?>">
                        <a href="#?call=core.updateCurrencyActivity&amp;id=<?php echo $this->_aVars['aCurrency']['currency_id']; ?>&amp;active=1" class="js_item_active_link" title="<?php echo _p('activate'); ?>"></a>
                    </div>
<?php endif; ?>
                </td>
                <td class="text-center">
                    <a class="js_drop_down_link" title="<?php echo _p('manage'); ?>" role="button"></a>
                    <div class="link_menu">
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.core.currency.add', array('id' => $this->_aVars['aCurrency']['currency_id'])); ?>"><?php echo _p('edit'); ?></a></li>
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.core.currency', array('delete' => $this->_aVars['aCurrency']['currency_id'])); ?>" class="sJsConfirm" data-message="<?php echo _p('are_you_sure', array('phpfox_squote' => true)); ?>"><?php echo _p('delete'); ?></a></li>
                        </ul>
                    </div>
                </td>
            </tr>
<?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
