<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:35 am */ ?>
<?php

?>

<?php if ($this->_aVars['bCanWrite']): ?>
    <form method="post" class="form" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('current'); ?>" id="js_form">
        <div id="client_details" class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?php echo _p('Enter your license ID & Key:'); ?></div>
            </div>
            <div class="panel-body"><div><input type="hidden" id="license_trial" name="val[is_trial]" value="0"></div>
                <div class="form-group">
                    <label for="license_id"><?php echo _p('License ID'); ?></label>
                    <input required class="form-control"  autocomplete="off" type="text" name="val[license_id]" id="license_id" value="<?php echo $this->_aVars['aVals']['license_id']; ?>" size="30" placeholder="<?php echo _p('License ID'); ?>" />
                </div>
                <div class="form-group">
                    <label for="license_key"><?php echo _p('License Key'); ?></label>
                    <input required class="form-control" autocomplete="off" type="password" name="val[license_key]" id="license_key" value="<?php echo $this->_aVars['aVals']['license_key']; ?>" size="30" placeholder="<?php echo _p('License Key'); ?>" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" role="button"><?php echo _p('save_changes'); ?></button>
                    <a class="btn btn-info" role="button" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp'); ?>"><?php echo _p('cancel'); ?></a>
                </div>
            </div>
        </div>
    
</form>

<?php else: ?>
    <div class="error error_message">
<?php echo _p("Do not permission to edit file 'PF.Base/settings/license.sett.php'. Please change its permission or use ftp to edit it"); ?>
    </div>
<?php endif; ?>

