<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:30 am */ ?>
<?php

?>

<?php if (! isset ( $this->_aVars['sHidden'] )):  $this->assign('sHidden', '');  endif; ?>

<?php if (( isset ( $this->_aVars['sHeader'] ) && ( ! PHPFOX_IS_AJAX || isset ( $this->_aVars['bPassOverAjaxCall'] ) || isset ( $this->_aVars['bIsAjaxLoader'] ) ) ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE )): ?>

<div class="<?php echo $this->_aVars['sHidden']; ?> block<?php if (( defined ( 'PHPFOX_IN_DESIGN_MODE' ) ) && ( ! isset ( $this->_aVars['bCanMove'] ) || ( isset ( $this->_aVars['bCanMove'] ) && $this->_aVars['bCanMove'] == true ) )): ?> js_sortable<?php endif;  if (isset ( $this->_aVars['sCustomClassName'] )): ?> <?php echo $this->_aVars['sCustomClassName'];  endif; ?>"<?php if (isset ( $this->_aVars['sBlockBorderJsId'] )): ?> id="js_block_border_<?php echo $this->_aVars['sBlockBorderJsId']; ?>"<?php endif;  if (defined ( 'PHPFOX_IN_DESIGN_MODE' ) && Phpfox_Module ::instance()->blockIsHidden('js_block_border_' . $this->_aVars['sBlockBorderJsId'] . '' )): ?> style="display:none;"<?php endif; ?> data-toggle="<?php echo $this->_aVars['sToggleWidth']; ?>">
<?php if (! empty ( $this->_aVars['sHeader'] ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE )): ?>
		<div class="title <?php if (defined ( 'PHPFOX_IN_DESIGN_MODE' )): ?>js_sortable_header<?php endif; ?>">
<?php if (isset ( $this->_aVars['sBlockTitleBar'] )): ?>
<?php echo $this->_aVars['sBlockTitleBar']; ?>
<?php endif; ?>
<?php if (( isset ( $this->_aVars['aEditBar'] ) && Phpfox ::isUser())): ?>
			<div class="js_edit_header_bar">
				<a href="#" title="<?php echo _p('edit_this_block'); ?>" onclick="$.ajaxCall('<?php echo $this->_aVars['aEditBar']['ajax_call']; ?>', 'block_id=<?php echo $this->_aVars['sBlockBorderJsId'];  if (isset ( $this->_aVars['aEditBar']['params'] )):  echo $this->_aVars['aEditBar']['params'];  endif; ?>'); return false;">
					<span class="ico ico-pencilline-o"></span>
				</a>
			</div>
<?php endif; ?>
<?php if (empty ( $this->_aVars['sHeader'] )): ?>
<?php echo $this->_aVars['sBlockShowName']; ?>
<?php else: ?>
<?php echo $this->_aVars['sHeader']; ?>
<?php endif; ?>
		</div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aEditBar'] )): ?>
	<div id="js_edit_block_<?php echo $this->_aVars['sBlockBorderJsId']; ?>" class="edit_bar hidden"></div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aMenu'] ) && count ( $this->_aVars['aMenu'] )): ?>
<?php unset($this->_aVars['aMenu']); ?>
<?php endif; ?>
	<div class="content"<?php if (isset ( $this->_aVars['sBlockJsId'] )): ?> id="js_block_content_<?php echo $this->_aVars['sBlockJsId']; ?>"<?php endif; ?>>
<?php endif; ?>
		<!-- tab all members-->
<?php if ($this->_aVars['sTab'] == 'all'): ?>
<?php if (count((array)$this->_aVars['aMembers'])):  foreach ((array) $this->_aVars['aMembers'] as $this->_aVars['aUser']): ?>
    <article class="groups-member" id="groups-member-<?php echo $this->_aVars['aUser']['user_id']; ?>">
        <?php
						Phpfox::getLib('template')->getBuiltFile('user.block.rows');
						?>

<?php if ($this->_aVars['bIsAdmin']): ?>
        <div class="moderation_row">
            <label class="item-checkbox">
                <input type="checkbox" class="js_global_item_moderate" name="item_moderate[]" value="<?php echo $this->_aVars['aUser']['user_id']; ?>" />
                <i class="ico ico-square-o"></i>
            </label>
        </div>
        <div class="dropdown item-bar-action">
            <a role="button" data-toggle="dropdown" class="btn btn-sm s-4" aria-expanded="true">
                <span class="ico ico-gear-o"></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a role="button" data-app="core_groups" data-action-type="click" data-action="remove_member"
                       data-message="<?php echo _p('are_you_sure_you_want_to_delete_this_user_from_the_group'); ?>"
                       data-group-id="<?php echo $this->_aVars['iGroupId']; ?>" data-user-id="<?php echo $this->_aVars['aUser']['user_id']; ?>"
                    >
                        <i class="fa fa-trash"></i> <?php echo _p('delete'); ?>
                    </a>
                </li>
            </ul>
        </div>
<?php endif; ?>
    </article>
<?php endforeach; endif; ?>
<!-- tab pending members -->
<?php elseif ($this->_aVars['sTab'] == 'pending'): ?>
<?php if (! count ( $this->_aVars['aMembers'] )): ?>
    <div class="container">
        <div class="alert alert-info">
<?php echo _p('there_is_no_pending_request'); ?>
        </div>
    </div>
<?php endif; ?>
<?php if (count((array)$this->_aVars['aMembers'])):  foreach ((array) $this->_aVars['aMembers'] as $this->_aVars['aUser']): ?>
    <article class="groups-member" id="groups-member-<?php echo $this->_aVars['aUser']['user_id']; ?>">
        <?php
						Phpfox::getLib('template')->getBuiltFile('user.block.rows');
						?>

        <div class="dropdown item-bar-action">
            <a role="button" data-toggle="dropdown" class="btn btn-sm s-4" aria-expanded="true">
                <span class="ico ico-gear-o"></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a role="button" onclick="$.ajaxCall('groups.approvePendingRequest', 'sign_up=<?php echo $this->_aVars['aUser']['signup_id']; ?>&user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>')">
                        <i class="fa fa-check-square-o"></i> <?php echo _p('approve'); ?>
                    </a>
                </li>
                <li>
                    <a role="button" data-app="core_groups" data-action-type="click" data-action="remove_pending"
                       data-message="<?php echo _p('are_you_sure_you_want_to_delete_this_user_from_the_group'); ?>"
                       data-signup-id="<?php echo $this->_aVars['aUser']['signup_id']; ?>" data-user-id="<?php echo $this->_aVars['aUser']['user_id']; ?>"
                    >
                        <i class="fa fa-trash"></i> <?php echo _p('delete'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </article>
<?php endforeach; endif; ?>
<!-- tab admin -->
<?php elseif ($this->_aVars['sTab'] == 'admin'): ?>
<?php if (count((array)$this->_aVars['aMembers'])):  foreach ((array) $this->_aVars['aMembers'] as $this->_aVars['aUser']): ?>
    <article class="groups-member" id="groups-member-<?php echo $this->_aVars['aUser']['user_id']; ?>">
        <?php
						Phpfox::getLib('template')->getBuiltFile('user.block.rows');
						?>

<?php if ($this->_aVars['bIsOwner'] && $this->_aVars['aUser']['user_id'] != Phpfox ::getUserId()): ?>
        <div class="dropdown item-bar-action">
            <a role="button" data-toggle="dropdown" class="btn btn-sm s-4" aria-expanded="true">
                <span class="ico ico-gear-o"></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a role="button" data-app="core_groups" data-action-type="click" data-action="remove_admin"
                       data-message="<?php echo _p('are_you_sure_you_want_to_remove_admin_role_from_this_user'); ?>"
                       data-group-id="<?php echo $this->_aVars['iGroupId']; ?>" data-user-id="<?php echo $this->_aVars['aUser']['user_id']; ?>"
                    >
                        <i class="fa fa-trash"></i> <?php echo _p('remove_admin'); ?>
                    </a>
                </li>
                <li>
                    <a role="button" data-app="core_groups" data-action-type="click" data-action="remove_member"
                       data-message="<?php echo _p('are_you_sure_you_want_to_delete_this_user_from_the_group'); ?>"
                       data-group-id="<?php echo $this->_aVars['iGroupId']; ?>" data-user-id="<?php echo $this->_aVars['aUser']['user_id']; ?>"
                    >
                        <i class="fa fa-trash"></i> <?php echo _p('delete'); ?>
                    </a>
                </li>
            </ul>
        </div>
<?php endif; ?>
    </article>
<?php endforeach; endif;  endif; ?>
<!-- not show pagination when search member -->
<?php if ($this->_aVars['sSearch'] && ! count ( $this->_aVars['aMembers'] ) && $this->_aVars['sTab'] != 'pending'): ?>
<div class="container">
    <div class="alert alert-info">
<?php echo _p('there_is_no_members_found'); ?>
    </div>
</div>
<?php endif; ?>

<?php if (! $this->_aVars['sSearch']):  if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager');  endif; ?>



<?php if (( isset ( $this->_aVars['sHeader'] ) && ( ! PHPFOX_IS_AJAX || isset ( $this->_aVars['bPassOverAjaxCall'] ) || isset ( $this->_aVars['bIsAjaxLoader'] ) ) ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE )): ?>
	</div>
<?php if (isset ( $this->_aVars['aFooter'] ) && count ( $this->_aVars['aFooter'] )): ?>
	<div class="bottom">
<?php if (count ( $this->_aVars['aFooter'] ) == 1): ?>
<?php if (count((array)$this->_aVars['aFooter'])):  $this->_aPhpfoxVars['iteration']['block'] = 0;  foreach ((array) $this->_aVars['aFooter'] as $this->_aVars['sPhrase'] => $this->_aVars['sLink']):  $this->_aPhpfoxVars['iteration']['block']++; ?>

<?php if ($this->_aVars['sLink'] == '#'): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'ajax_image')); ?>
<?php endif; ?>
<?php if (is_array ( $this->_aVars['sLink'] )): ?>
            <a class="btn btn-block <?php if (! empty ( $this->_aVars['sLink']['class'] )): ?> <?php echo $this->_aVars['sLink']['class'];  endif; ?>" href="<?php if (! empty ( $this->_aVars['sLink']['link'] )):  echo $this->_aVars['sLink']['link'];  else: ?>#<?php endif; ?>" <?php if (! empty ( $this->_aVars['sLink']['attr'] )):  echo $this->_aVars['sLink']['attr'];  endif; ?> id="js_block_bottom_link_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a>
<?php else: ?>
            <a class="btn btn-block" href="<?php echo $this->_aVars['sLink']; ?>" id="js_block_bottom_link_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a>
<?php endif; ?>
<?php endforeach; endif; ?>
<?php else: ?>
		<ul>
<?php if (count((array)$this->_aVars['aFooter'])):  $this->_aPhpfoxVars['iteration']['block'] = 0;  foreach ((array) $this->_aVars['aFooter'] as $this->_aVars['sPhrase'] => $this->_aVars['sLink']):  $this->_aPhpfoxVars['iteration']['block']++; ?>

				<li id="js_block_bottom_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"<?php if ($this->_aPhpfoxVars['iteration']['block'] == 1): ?> class="first"<?php endif; ?>>
<?php if ($this->_aVars['sLink'] == '#'): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'ajax_image')); ?>
<?php endif; ?>
					<a href="<?php echo $this->_aVars['sLink']; ?>" id="js_block_bottom_link_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a>
				</li>
<?php endforeach; endif; ?>
		</ul>
<?php endif; ?>
	</div>
<?php endif; ?>
</div>
<?php endif;  unset($this->_aVars['sHeader'], $this->_aVars['sComponent'], $this->_aVars['aFooter'], $this->_aVars['sBlockBorderJsId'], $this->_aVars['bBlockDisableSort'], $this->_aVars['bBlockCanMove'], $this->_aVars['aEditBar'], $this->_aVars['sDeleteBlock'], $this->_aVars['sBlockTitleBar'], $this->_aVars['sBlockJsId'], $this->_aVars['sCustomClassName'], $this->_aVars['aMenu']); ?>