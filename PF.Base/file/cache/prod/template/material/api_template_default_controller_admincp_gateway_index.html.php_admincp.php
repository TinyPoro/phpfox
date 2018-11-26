<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:44 am */ ?>
<?php 

?>
<div class="table-responsive">
    <table class="table table-admin">
        <thead>
            <tr>
                <th><?php echo _p('title'); ?></th>
                <th class="t_center w100"><?php echo _p('test_mode'); ?></th>
                <th class="t_center w100"><?php echo _p('active'); ?></th>
                <th class="t_center w80"><?php echo _p('settings'); ?></th>
            </tr>
        </thead>
        <tbody>
<?php if (count((array)$this->_aVars['aGateways'])):  foreach ((array) $this->_aVars['aGateways'] as $this->_aVars['iKey'] => $this->_aVars['aGateway']): ?>
            <tr>
                <td><?php echo $this->_aVars['aGateway']['title']; ?></td>
                <td class="on_off">
                    <div class="js_item_is_active <?php if (! $this->_aVars['aGateway']['is_test']): ?>hide<?php endif; ?>">
                        <a href="#?call=api.updateGatewayTest&amp;gateway_id=<?php echo $this->_aVars['aGateway']['gateway_id']; ?>&amp;active=0" class="js_item_active_link" title="<?php echo _p('disable_test_mode'); ?>"></a>
                    </div>
                    <div class="js_item_is_not_active <?php if ($this->_aVars['aGateway']['is_test']): ?>hide<?php endif; ?>">
                        <a href="#?call=api.updateGatewayTest&amp;gateway_id=<?php echo $this->_aVars['aGateway']['gateway_id']; ?>&amp;active=1" class="js_item_active_link" title="<?php echo _p('enable_test_mode'); ?>"></a>
                    </div>
                </td>
                <td class="on_off">
                    <div class="js_item_is_active <?php if (! $this->_aVars['aGateway']['is_active']): ?>hide<?php endif; ?>">
                        <a href="#?call=api.updateGatewayActivity&amp;gateway_id=<?php echo $this->_aVars['aGateway']['gateway_id']; ?>&amp;active=0" class="js_item_active_link" title="<?php echo _p('deactivate'); ?>"></a>
                    </div>
                    <div class="js_item_is_not_active <?php if ($this->_aVars['aGateway']['is_active']): ?>hide<?php endif; ?>">
                        <a href="#?call=api.updateGatewayActivity&amp;gateway_id=<?php echo $this->_aVars['aGateway']['gateway_id']; ?>&amp;active=1" class="js_item_active_link" title="<?php echo _p('activate'); ?>"></a>
                    </div>
                </td>
                <td class="t_center">
                    <a role="button" class="js_drop_down_link" title="Manage"></a>
                    <div class="link_menu">
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.api.gateway.add', array('id' => $this->_aVars['aGateway']['gateway_id'])); ?>" class="popup"><?php echo _p('edit'); ?></a></li>
                        </ul>
                    </div>
                </td>
            </tr>
<?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
