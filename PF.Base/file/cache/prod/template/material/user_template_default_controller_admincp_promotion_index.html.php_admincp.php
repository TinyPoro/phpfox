<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:44 am */ ?>
<?php 

 if (count ( $this->_aVars['aPromotions'] )): ?>
<div class="alert alert-info"><?php echo _p('the_first_promotion_which_satisfy_the_criteria_will_be_applied_for_user'); ?></div>
<div class="table-responsive">
    <table class="table table-admin">
        <thead>
            <tr>
                <th <?php echo Phpfox::getService('core.helper')->tableSort('',"ug1.title asc","ug1.title desc", $this->_aVars['sCurrent'], "sort", 'asc'); ?>><?php echo _p('user_group'); ?></th>
                <th <?php echo Phpfox::getService('core.helper')->tableSort('',"ug2.title asc","ug2.title desc", $this->_aVars['sCurrent'], "sort", 'asc'); ?>><?php echo _p('upgraded_user_group'); ?></th>
                <th <?php echo Phpfox::getService('core.helper')->tableSort("t_center","up.total_activity asc","up.total_activity desc", $this->_aVars['sCurrent'], "sort", 'asc'); ?>><?php echo _p('total_activity'); ?></th>
                <th <?php echo Phpfox::getService('core.helper')->tableSort("t_center","up.total_day asc","up.total_day desc", $this->_aVars['sCurrent'], "sort", 'asc'); ?>><?php echo _p('total_days_registered'); ?></th>
                <th <?php echo Phpfox::getService('core.helper')->tableSort('',"up.time_stamp asc","up.time_stamp desc", $this->_aVars['sCurrent'], "sort", 'asc'); ?>><?php echo _p('created_on'); ?></th>
                <th class="w80 t_center"><?php echo _p('settings'); ?></th>
            </tr>
        </thead>
        <tbody>
<?php if (count((array)$this->_aVars['aPromotions'])):  $this->_aPhpfoxVars['iteration']['promotions'] = 0;  foreach ((array) $this->_aVars['aPromotions'] as $this->_aVars['aPromotion']):  $this->_aPhpfoxVars['iteration']['promotions']++; ?>

            <tr>
                <td><?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPromotion']['user_group_title']); ?></td>
                <td><?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPromotion']['upgrade_user_group_title']); ?></td>
                <td class="t_center"><?php echo $this->_aVars['aPromotion']['total_activity']; ?></td>
                <td class="t_center"><?php echo $this->_aVars['aPromotion']['total_day']; ?></td>
                <td><?php echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aPromotion']['time_stamp']); ?></td>
                <td class="t_center">
                    <a role="button" class="js_drop_down_link" title="Manage"></a>
                    <div class="link_menu">
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion.add', array('id' => $this->_aVars['aPromotion']['promotion_id'])); ?>" class="popup"><?php echo _p('edit'); ?></a></li>
                            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion', array('delete' => $this->_aVars['aPromotion']['promotion_id'])); ?>" class="sJsConfirm"><?php echo _p('delete'); ?></a></li>
                        </ul>
                    </div>
                </td>
            </tr>
<?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
<?php else: ?>
<div class="message">
<?php echo _p('no_promotions_found'); ?>
</div>
<?php endif; ?>
