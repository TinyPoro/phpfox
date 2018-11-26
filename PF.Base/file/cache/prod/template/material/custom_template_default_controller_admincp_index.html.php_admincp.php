<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:44 am */ ?>
<?php 

 if (count ( $this->_aVars['aGroups'] )): ?>
<div id="js_menu_drop_down" style="display:none;">
	<div class="link_menu dropContent" style="display:block;">
		<ul>
			<li><a href="#" onclick="return $Core.custom.action(this, 'edit');"><?php echo _p('edit'); ?></a></li>
			<li><a href="#active" onclick="return $Core.custom.action(this, 'active');"><?php echo _p('set_to_inactive'); ?></a></li>
			<li><a href="#" onclick="$Core.custom.action(this, 'delete');return false;"><?php echo _p('delete'); ?></a></li>
		</ul>
	</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form" method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.custom'); ?>">
            <div class="sortable">
                <ul class="dont-unbind">
<?php if (count((array)$this->_aVars['aGroups'])):  $this->_aPhpfoxVars['iteration']['groups'] = 0;  foreach ((array) $this->_aVars['aGroups'] as $this->_aVars['mGroup'] => $this->_aVars['aGroup']):  $this->_aPhpfoxVars['iteration']['groups']++; ?>

                    <li class="<?php if ($this->_aVars['mGroup'] !== 'PHPFOX_EMPTY_GROUP'): ?>group<?php endif;  if ($this->_aPhpfoxVars['iteration']['groups'] == 1): ?> first<?php endif; ?>">
<?php if ($this->_aVars['mGroup'] === 'PHPFOX_EMPTY_GROUP'):  echo _p('general');  else: ?>
                        <div class="hide"><input type="hidden" name="group[<?php echo $this->_aVars['aGroup']['group_id']; ?>]" value="<?php echo $this->_aVars['aGroup']['ordering']; ?>" /></div>
                        <a href="#?id=<?php echo $this->_aVars['aGroup']['group_id']; ?>&amp;type=group" class="js_drop_down" id="js_group_<?php echo $this->_aVars['aGroup']['group_id']; ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/draggable.png','alt' => '','class' => 'v_middle'));  if (! $this->_aVars['aGroup']['is_active']): ?><del><?php endif;  echo _p($this->_aVars['aGroup']['phrase_var_name']);  if (! empty ( $this->_aVars['aGroup']['user_group_name'] )): ?> (<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aGroup']['user_group_name']); ?>)<?php endif; ?></a><?php if (! $this->_aVars['aGroup']['is_active']): ?></del><?php endif;  endif; ?></a>
<?php if (isset ( $this->_aVars['aGroup']['child'] )): ?>
                        <ul class="dont-unbind">
<?php if (count((array)$this->_aVars['aGroup']['child'])):  $this->_aPhpfoxVars['iteration']['fields'] = 0;  foreach ((array) $this->_aVars['aGroup']['child'] as $this->_aVars['aField']):  $this->_aPhpfoxVars['iteration']['fields']++; ?>

                            <li class="field">
                                <div style="display:none;"><input type="hidden" name="field[<?php echo $this->_aVars['aField']['field_id']; ?>]" value="<?php echo $this->_aVars['aField']['ordering']; ?>" /></div>
                                <a href="#?id=<?php echo $this->_aVars['aField']['field_id']; ?>&amp;type=field" class="js_drop_down" id="js_field_<?php echo $this->_aVars['aField']['field_id']; ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/draggable.png','alt' => '','class' => 'v_middle')); ?> <?php if (! $this->_aVars['aField']['is_active']): ?><del><?php endif;  echo _p($this->_aVars['aField']['phrase_var_name']);  if (! empty ( $this->_aVars['aGroup']['user_group_name'] )): ?> (<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aGroup']['user_group_name']); ?>)<?php endif;  if (! $this->_aVars['aField']['is_active']): ?></del><?php endif; ?></a>
                            </li>
<?php endforeach; endif; ?>
                        </ul>
<?php endif; ?>
                    </li>
<?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="form-group"></div>
            <div class="form-group">
                <input type="submit" value="<?php echo _p('update_order'); ?>" class="btn btn-primary" />
            </div>
        
</form>

    </div>
</div>
<?php else: ?>
<div class="alert alert-empty">
<?php echo _p('no_custom_fields_have_been_added'); ?>
    <a target="_blank" class="btn btn-info no_ajax" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.custom.add'); ?>"><?php echo _p('add_a_new_custom_field'); ?></a>
</div>
<?php endif; ?>
