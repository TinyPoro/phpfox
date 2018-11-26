<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:44 am */ ?>
<?php
/**
 * [PHPFOX_HEADER]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: controller.html.php 64 2009-01-19 15:05:54Z Raymond_Benc $
 */



?>
<div class="manage-plans core-subscriptions-manage-packages">
    <form id="admin-manage-plans-form" method="get" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.index'); ?>">
        <div class="col-md-6 input-filter">
            <label><?php echo _p('Package Type'); ?></label>
            <select name="val[type]" class="form-control">
                <option value=""><?php echo _p('Any'); ?></option>
<?php if (count((array)$this->_aVars['aTypes'])):  foreach ((array) $this->_aVars['aTypes'] as $this->_aVars['typekey'] => $this->_aVars['typevalue']): ?>
                    <option value="<?php echo $this->_aVars['typekey']; ?>" <?php if (! empty ( $this->_aVars['aSearch']['type'] )):  if ($this->_aVars['typekey'] == $this->_aVars['aSearch']['type']): ?>selected="true"<?php endif;  endif; ?>><?php echo $this->_aVars['typevalue']; ?></option>
<?php endforeach; endif; ?>
            </select>
        </div>
        <div class="col-md-6 input-filter">
            <label><?php echo _p('Package Status'); ?></label>
            <select name="val[status]" class="form-control">
                <option value=""><?php echo _p('Any'); ?></option>
<?php if (count((array)$this->_aVars['aPackageStatus'])):  foreach ((array) $this->_aVars['aPackageStatus'] as $this->_aVars['statuskey'] => $this->_aVars['statusvalue']): ?>
                <option value="<?php echo $this->_aVars['statuskey']; ?>" <?php if (! empty ( $this->_aVars['aSearch']['status'] )):  if ($this->_aVars['statuskey'] == $this->_aVars['aSearch']['status']): ?>selected="true"<?php endif;  endif; ?>><?php echo $this->_aVars['statusvalue']; ?></option>
<?php endforeach; endif; ?>
            </select>
        </div>
        <div class="col-md-6 input-filter">
            <label><?php echo _p('Statistics by time period'); ?></label>
            <select name="val[period]" class="form-control" id="period">
<?php if (count((array)$this->_aVars['aPeriod'])):  foreach ((array) $this->_aVars['aPeriod'] as $this->_aVars['periodkey'] => $this->_aVars['periodvalue']): ?>
                <option value="<?php echo $this->_aVars['periodkey']; ?>" <?php if (! empty ( $this->_aVars['aSearch']['period'] )):  if ($this->_aVars['periodkey'] == $this->_aVars['aSearch']['period']): ?>selected="true"<?php endif;  endif; ?>><?php echo $this->_aVars['periodvalue']; ?></option>
<?php endforeach; endif; ?>
            </select>
        </div>
        <div class="dont-unbind-children col-md-6 input-filter date-filter <?php if (! empty ( $this->_aVars['aSearch']['period'] ) && $this->_aVars['aSearch']['period'] == 'custom'): ?>show<?php else: ?>hidden<?php endif; ?>">
            <label><?php echo _p('From'); ?></label>
            <div class="select-date">
                <div>
                    <input name="val[from]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['from']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['from']) : (isset($this->_aVars['aForms']['from']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['from']) : '')); ?>
" class="form-control" id="date-from">
                </div>
                <span>-</span>
                <div>
                    <input name="val[to]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['to']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['to']) : (isset($this->_aVars['aForms']['to']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['to']) : '')); ?>
" class="form-control"  id="date-to">
                </div>
            </div>
        </div>
        <div class="col-md-12 action-button">
            <button type="submit" class="btn btn-danger input-filter"><?php echo _p('Search'); ?></button>
        </div>
    
</form>

</div>
<?php if (count ( $this->_aVars['aPackages'] )): ?>
    <div class="panel panel-default table-responsive">
        <table class="table table-admin" id="_sort" data-sort-url="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('subscribe.admincp.order', array('table' => 'subscribe_package','field' => 'package_id')); ?>">
            <thead>
                <tr>
                    <th></th>
                    <th class="t_center w30"><?php echo _p('ID'); ?></th>
                    <th class="t_center"><?php echo _p('Package Title'); ?></th>
                    <th class="t_center"><?php echo _p('Cost'); ?></th>
                    <th class="t_center w100"><?php echo _p('Type'); ?></th>
                    <th class="t_center w60"><?php echo _p('Status'); ?></th>
                    <th class="t_center w160"><?php echo _p('Last Updated'); ?></th>
                    <th class="t_center w80"><?php echo _p('sub_active'); ?></th>
                    <th class="t_center w80"><?php echo _p('Expired'); ?></th>
                    <th class="t_center w80"><?php echo _p('Cancelled'); ?></th>
                    <th class="t_center w20"><?php echo _p('Settings'); ?></th>
                </tr>
            </thead>
            <tbody>
<?php if (count((array)$this->_aVars['aPackages'])):  foreach ((array) $this->_aVars['aPackages'] as $this->_aVars['iKey'] => $this->_aVars['aPackage']): ?>
                    <tr data-sort-id="<?php echo $this->_aVars['aPackage']['package_id']; ?>">
                        <td class="sortable" >
                            <i class="fa fa-sort"></i>
                        </td>
                        <td class="t_center"><?php echo $this->_aVars['aPackage']['package_id']; ?></td>
                        <td class="t_center"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.add', array('id' => $this->_aVars['aPackage']['package_id'])); ?>"><?php echo _p($this->_aVars['aPackage']['title']); ?> <?php if (! empty ( $this->_aVars['aPackage']['is_popular'] )): ?>(<?php echo _p('Most Popular'); ?>)<?php endif; ?></a></td>
                        <td class="t_center"><?php echo $this->_aVars['aPackage']['currency_symbol'];  echo $this->_aVars['aPackage']['default_cost']; ?></td>
                        <td class="t_center"><?php echo $this->_aVars['aPackage']['type']; ?></td>
                        <td class="on_off">
                            <div class="js_item_is_active" <?php if (! $this->_aVars['aPackage']['is_active']): ?>style="display:none"<?php endif; ?>>
                            <a href="#?call=subscribe.updateActivity&amp;package_id=<?php echo $this->_aVars['aPackage']['package_id']; ?>&amp;active=0" class="js_item_active_link" title="<?php echo _p('deactivate'); ?>"></a>
                            </div>
                            <div class="js_item_is_not_active" <?php if ($this->_aVars['aPackage']['is_active']): ?>style="display:none"<?php endif; ?>>
                            <a href="#?call=subscribe.updateActivity&amp;package_id=<?php echo $this->_aVars['aPackage']['package_id']; ?>&amp;active=1" class="js_item_active_link" title="<?php echo _p('activate'); ?>"></a>
                            </div>
                        </td>
                        <td class="t_center"><?php if (! empty ( $this->_aVars['aPackage']['time_updated'] )):  echo Phpfox::getLib('date')->convertTime($this->_aVars['aPackage']['time_updated']);  endif; ?></td>
                        <td class="t_center"><?php if (! empty ( $this->_aVars['aPackage']['statistic_completed'] )): ?><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.list', array('search[title]' => $this->_aVars['aPackage']['title'],'search[status]' => 'completed','search[period]' => $this->_aVars['sDefaultPeriod'],'search[from]' => $this->_aVars['aSearch']['from'],'search[to]' => $this->_aVars['aSearch']['to'])); ?>"><?php echo $this->_aVars['aPackage']['statistic_completed']['total']; ?></a><?php else: ?><a href="javascript:void(0)">0</a><?php endif; ?></td>
                        <td class="t_center"><?php if (! empty ( $this->_aVars['aPackage']['statistic_expire'] )): ?><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.list', array('search[title]' => $this->_aVars['aPackage']['title'],'search[status]' => $this->_aVars['aPackage']['statistic_expire']['status'],'search[period]' => $this->_aVars['sDefaultPeriod'],'search[from]' => $this->_aVars['aSearch']['from'],'search[to]' => $this->_aVars['aSearch']['to'])); ?>"><?php echo $this->_aVars['aPackage']['statistic_expire']['total']; ?></a><?php else: ?><a href="javascript:void(0)">0</a><?php endif; ?></td>
                        <td class="t_center"><?php if (! empty ( $this->_aVars['aPackage']['statistic_cancel'] )): ?><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.list', array('search[title]' => $this->_aVars['aPackage']['title'],'search[status]' => $this->_aVars['aPackage']['statistic_cancel']['status'],'search[period]' => $this->_aVars['sDefaultPeriod'],'search[from]' => $this->_aVars['aSearch']['from'],'search[to]' => $this->_aVars['aSearch']['to'])); ?>"><?php echo $this->_aVars['aPackage']['statistic_cancel']['total']; ?></a><?php else: ?><a href="javascript:void(0)">0</a><?php endif; ?></td>
                        <td class="t_center">
                            <a role="button" class="js_drop_down_link" title="<?php echo _p('manage'); ?>"></a>
                            <div class="link_menu">
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.add', array('id' => $this->_aVars['aPackage']['package_id'])); ?>"><?php echo _p('edit_package'); ?></a></li>
                                    <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe', array('delete' => $this->_aVars['aPackage']['package_id'])); ?>" class="sJsConfirm" data-message="<?php echo _p('are_you_sure', array('phpfox_squote' => true)); ?>"><?php echo _p('delete_package'); ?></a></li>
<?php if (! $this->_aVars['aPackage']['is_popular']): ?>
                                        <li><a href="javascript:void(0)" onclick="$.ajaxCall('subscribe.markPackagePopular','id=<?php echo $this->_aVars['aPackage']['package_id']; ?>')"><?php echo _p('Mark as Most Popular'); ?></a></li>
<?php endif; ?>
                                    <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.list', array('search[title]' => $this->_aVars['aPackage']['title'])); ?>"><?php echo _p('View Subscriptions'); ?></a></li>
                                </ul>
                            </div>
                        </td>

                    </tr>
<?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager');  elseif (empty ( $this->_aVars['bError'] ) && ! $this->_aVars['bHasPackage']): ?>
    <div class="alert alert-empty col-md-12">
        <h4><?php echo _p('no_packages_have_been_added'); ?></h4><br/>
        <a class="btn btn-info" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.add'); ?>"><?php echo _p('create_a_new_package'); ?></a>
    </div>
<?php else: ?>
    <div class="alert alert-empty col-md-12">
        <h4><?php echo _p('no_packages_have_been_added'); ?></h4><br/>
    </div>
<?php endif; ?>
<script type="text/javascript">
    var calendar_image = "<?php echo Phpfox::getParam('subscribe.app_url').'assets/images/calendar.gif';?>";
    var isBESubscription = true;
</script>
