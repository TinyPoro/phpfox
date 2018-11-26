<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:35 am */ ?>
<?php

?>

<form method="get" class="form-search" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.browse'); ?>">
<div class="panel panel-default">
    <div class="panel-body">
            <div class="clearfix row">
                <div class="form-group col-sm-3">
                    <label ><?php echo _p('search'); ?></label>
<?php echo $this->_aVars['aFilters']['keyword']; ?>
                </div>
                <div class="form-group col-sm-3">
                    <label><?php echo _p('within'); ?></label>
<?php echo $this->_aVars['aFilters']['type']; ?>
                </div>
                <div class="form-group col-sm-3">
                    <label ><?php echo _p('group'); ?></label>
<?php echo $this->_aVars['aFilters']['group']; ?>
                </div>
                <div class="form-group col-sm-3">
                    <label ><?php echo _p('gender'); ?></label>
<?php echo $this->_aVars['aFilters']['gender']; ?>
                </div>
                <div id="js_admincp_search_options" class="hide">
                    <div class="form-group col-sm-3">
                        <label ><?php echo _p('location'); ?></label>
<?php echo $this->_aVars['aFilters']['country']; ?>
<?php Phpfox::getBlock('core.country-child', array('admin_search' => '1','country_child_filter' => true,'country_child_type' => 'browse')); ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <label ><?php echo _p('city'); ?></label>
<?php echo $this->_aVars['aFilters']['city']; ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <label ><?php echo _p('zip_postal_code'); ?></label>
<?php echo $this->_aVars['aFilters']['zip']; ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <label ><?php echo _p('ip_address'); ?></label>
<?php echo $this->_aVars['aFilters']['ip']; ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <label ><?php echo _p('age_group'); ?></label>
<?php echo $this->_aVars['aFilters']['from']; ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
<?php echo $this->_aVars['aFilters']['to']; ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <label ><?php echo _p('show_members'); ?></label>
<?php echo $this->_aVars['aFilters']['status']; ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <label ><?php echo _p('sort_results_by'); ?></label>
<?php echo $this->_aVars['aFilters']['sort']; ?>
                    </div>
<?php $this->assign('sFormGroupClass', 'col-sm-3'); ?>
<?php if (count((array)$this->_aVars['aCustomFields'])):  foreach ((array) $this->_aVars['aCustomFields'] as $this->_aVars['aCustomField']): ?>
                    <?php
						Phpfox::getLib('template')->getBuiltFile('custom.block.foreachcustom');
						?>
<?php endforeach; endif; ?>
                </div>
            </div>
            <div class="form-btn-group">
                <button type="submit" class="btn btn-primary" name="search[submit]"><i class="fa fa-search" aria-hidden="true"></i> <?php echo _p('search'); ?></button>
                <a class="btn btn-default" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.browse'); ?>"><?php echo _p('reset'); ?></a>
                <button type="button" class="btn btn-link" rel="<?php echo _p('view_less_search_options'); ?>" onclick="$('#js_admincp_search_options').toggleClass('hide'); var text = $(this).text(); $(this).text($(this).attr('rel')); $(this).attr('rel', text)">
<?php echo _p('view_more_search_options'); ?>
                </button>
            </div>
    </div>
</div>

</form>

