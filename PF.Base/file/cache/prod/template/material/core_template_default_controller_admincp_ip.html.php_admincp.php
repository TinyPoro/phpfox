<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:36 am */ ?>
<?php

 if (count ( $this->_aVars['aResults'] ) && is_array ( $this->_aVars['aResults'] )): ?>
<?php if (count((array)$this->_aVars['aResults'])):  foreach ((array) $this->_aVars['aResults'] as $this->_aVars['aResult']): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title"><?php echo $this->_aVars['aResult']['table']; ?></div>
        </div>
        <div class="panel-body">
<?php if (isset ( $this->_aVars['aResult']['th'] )): ?>
            <div class="table-responsive">
                <table class="table table-admin">
                    <thead>
                    <tr>
<?php if (count((array)$this->_aVars['aResult']['th'])):  foreach ((array) $this->_aVars['aResult']['th'] as $this->_aVars['sTh']): ?>
                        <th><?php echo $this->_aVars['sTh']; ?></th>
<?php endforeach; endif; ?>
                    </tr>
                    </thead>
                    <tbody>
<?php if (count((array)$this->_aVars['aResult']['results'])):  foreach ((array) $this->_aVars['aResult']['results'] as $this->_aVars['iKey'] => $this->_aVars['aValues']): ?>
                    <tr<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> class="tr"<?php endif; ?>>
<?php if (count((array)$this->_aVars['aValues'])):  foreach ((array) $this->_aVars['aValues'] as $this->_aVars['sValue']): ?>
                        <td><?php echo $this->_aVars['sValue']; ?></td>
<?php endforeach; endif; ?>
                    </tr>
<?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
<?php else: ?>
<?php if (isset ( $this->_aVars['aResult']['results'] )): ?>
<?php if (count((array)$this->_aVars['aResult']['results'])):  foreach ((array) $this->_aVars['aResult']['results'] as $this->_aVars['sKey'] => $this->_aVars['sValue']): ?>
                    <div class="form-group flex-row col-md-6">
                        <div class="table_left">
<?php echo $this->_aVars['sKey']; ?>:
                        </div>
                        <div class="table_right">
<?php echo $this->_aVars['sValue']; ?>
                        </div>
                    </div>
<?php endforeach; endif; ?>
<?php endif; ?>
<?php endif; ?>
        </div>
    </div>
<?php endforeach; endif;  else: ?>
<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.core.ip'); ?>" class="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title"><?php echo _p('search'); ?></div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="search"><?php echo _p('ip_address'); ?></label>
                <input type="text" name="search" value="" class="form-control" size="40" id="search"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> <?php echo _p('search'); ?></button>
            </div>
        </div>
    </div>

</form>

<?php endif; ?>
