<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:44 am */ ?>
<?php 

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?php echo _p('default_user_groups'); ?></div>
    </div>
    <table class="table table-admin">
        <thead>
        <tr>
            <th><?php echo _p('title'); ?></th>
            <th class="w100"><?php echo _p('users'); ?></th>
            <th class="w80 t_center"><?php echo _p('settings'); ?></th>
        </tr>
        </thead>
        <tbody>
<?php if (count((array)$this->_aVars['aGroups']['special'])):  foreach ((array) $this->_aVars['aGroups']['special'] as $this->_aVars['iKey'] => $this->_aVars['aGroup']): ?>
        <tr>
            <td><?php echo Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('locale')->convert($this->_aVars['aGroup']['title'])); ?></td>
            <td><?php if ($this->_aVars['aGroup']['user_group_id'] == 3): ?>N/A<?php else:  echo $this->_aVars['aGroup']['total_users'];  endif; ?></td>
            <td class="t_center">
<?php if (Phpfox ::getUserParam('user.can_edit_user_group') || Phpfox ::getUserParam('user.can_manage_user_group_settings')): ?>
                <a role="button" class="js_drop_down_link" title="Manage"></a>
                <div class="link_menu">
                    <ul class="dropdown-menu dropdown-menu-right">
<?php if (Phpfox ::getUserParam('user.can_manage_user_group_settings')): ?>
                        <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.add', array('group_id' => $this->_aVars['aGroup']['user_group_id'],'setting' => 'true','module' => 'core')); ?>"><?php echo _p('manage_user_settings'); ?></a></li>
<?php endif; ?>
<?php if (Phpfox ::getUserParam('user.can_edit_user_group')): ?>
                        <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.add', array('group_id' => $this->_aVars['aGroup']['user_group_id'])); ?>" class="popup"><?php echo _p('edit_user_group'); ?></a></li>
<?php endif; ?>
                    </ul>
                </div>
<?php endif; ?>
            </td>
        </tr>
<?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
<?php if (isset ( $this->_aVars['aGroups']['custom'] )): ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?php echo _p('custom_user_groups'); ?></div>
    </div>
    <div class="table-responsive">
        <table class="table table-admin">
            <thead>
            <tr>
                <th><?php echo _p('title'); ?></th>
                <th class="w100"><?php echo _p('users'); ?></th>
                <th class="w80 t_center"><?php echo _p('settings'); ?></th>
            </tr>
            </thead>
            <tbody>
<?php if (count((array)$this->_aVars['aGroups']['custom'])):  foreach ((array) $this->_aVars['aGroups']['custom'] as $this->_aVars['iKey'] => $this->_aVars['aGroup']): ?>
            <tr>
                <td><?php echo Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('locale')->convert($this->_aVars['aGroup']['title'])); ?></td>
                <td><?php if ($this->_aVars['aGroup']['user_group_id'] == 3):  echo _p('n_a');  else:  echo $this->_aVars['aGroup']['total_users'];  endif; ?></td>
                <td class="t_center">
<?php if (Phpfox ::getUserParam('user.can_edit_user_group') || Phpfox ::getUserParam('user.can_manage_user_group_settings') || Phpfox ::getUserParam('user.can_delete_user_group')): ?>
                    <a role="button" class="js_drop_down_link" title="Manage"></a>
                    <div class="link_menu">
                        <ul class="dropdown-menu dropdown-menu-right">
<?php if (Phpfox ::getUserParam('user.can_manage_user_group_settings')): ?>
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.add', array('group_id' => $this->_aVars['aGroup']['user_group_id'],'setting' => 'true','module' => 'core')); ?>"><?php echo _p('manage_user_settings'); ?></a></li>
<?php endif; ?>
<?php if (Phpfox ::getUserParam('user.can_edit_user_group')): ?>
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.add', array('group_id' => $this->_aVars['aGroup']['user_group_id'])); ?>" class="popup"><?php echo _p('edit_user_group'); ?></a></li>
<?php endif; ?>
<?php if (! $this->_aVars['aGroup']['is_special'] && Phpfox ::getUserParam('user.can_delete_user_group')): ?>
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.delete', array('id' => $this->_aVars['aGroup']['user_group_id'])); ?>"><?php echo _p('delete'); ?></a></li>
<?php endif; ?>
                        </ul>
                    </div>
<?php endif; ?>
                </td>
            </tr>
<?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>
