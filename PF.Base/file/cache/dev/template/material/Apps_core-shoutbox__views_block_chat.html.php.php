<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 8:24 am */ ?>
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
		<?php

?>
<div class="hidden" id="current_user_avatar">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_50_square','class' => "img-responsive",'title' => $this->_aVars['aUser']['full_name'])); ?>
</div>
<div class="panel-body msg_container_base shoutbox-container">
<?php if (count((array)$this->_aVars['aShoutboxes'])):  foreach ((array) $this->_aVars['aShoutboxes'] as $this->_aVars['sKey'] => $this->_aVars['aShoutbox']): ?>
    <div class="row msg_container <?php if ($this->_aVars['aShoutbox']['type'] == 's'): ?> base_sent <?php else: ?> base_receive <?php endif; ?>" id="shoutbox_message_<?php echo $this->_aVars['aShoutbox']['shoutbox_id']; ?>" data-value="<?php echo $this->_aVars['aShoutbox']['shoutbox_id']; ?>">
        <div class="msg_container_row shoutbox-item <?php if ($this->_aVars['aShoutbox']['type'] == 's'): ?> item-sent <?php else: ?> item-receive <?php endif; ?>">
<?php if ($this->_aVars['aIsAdmin'] || $this->_aVars['iUserId'] == $this->_aVars['aShoutbox']['user_id']): ?>
            <button type="button" class="close" data-toggle="shoutbox-dismiss" data-value="<?php echo $this->_aVars['aShoutbox']['shoutbox_id']; ?>"><i class="ico ico-close-circle" aria-hidden="true"></i></button>
<?php endif; ?>
            <div class="item-outer <?php if ($this->_aVars['aIsAdmin'] || $this->_aVars['iUserId'] == $this->_aVars['aShoutbox']['user_id']): ?>can-delete<?php endif; ?>">
                <div class="item-media-source">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aShoutbox'],'suffix' => '_50_square','width' => 32,'height' => 32,'class' => "img-responsive",'title' => $this->_aVars['aShoutbox']['full_name'])); ?>
                </div>
                <div class="item-inner">  
                    <div class="title_avatar item-shoutbox-body <?php if ($this->_aVars['aShoutbox']['type'] == 'r'): ?> msg_body_receive <?php elseif ($this->_aVars['aShoutbox']['type'] == 's'): ?> msg_body_sent <?php endif; ?> " title="<?php echo $this->_aVars['aShoutbox']['full_name']; ?>" data-toggle="tooltip"> 
                    <div class=" item-title">
                        <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aShoutbox']['user_name']); ?>" title="<?php echo $this->_aVars['aShoutbox']['full_name']; ?>">
<?php echo $this->_aVars['aShoutbox']['full_name']; ?>
                        </a>
                    </div>
                    <div class="messages_body item-message">
                        <div class="item-message-info ">
<?php echo $this->_aVars['aShoutbox']['text']; ?>
                        </div>
                    </div>
                    </div>
                    <span class=" item-time message_convert_time" data-id="<?php echo $this->_aVars['aShoutbox']['timestamp']; ?>"><?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aShoutbox']['timestamp']); ?></span>
                </div>   
            </div>
            
            
        </div>
    </div>
<?php endforeach; endif; ?>
</div>
<?php if ($this->_aVars['bCanShare']): ?>
<div class="panel-footer">
    <div class="input-group">
        <textarea rows='1' data-toggle="shoutbox" data-name="text" maxlength="255" id="shoutbox_text_message_field" type="text" class="form-control chat_input" placeholder="<?php echo _p('write_message'); ?>"/></textarea>
        <!-- <span class="input-group-btn">
            <button data-name="shoutbox-submit" class="btn btn-primary" id="btn-chat"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </span> -->
    </div>
    <div class="item-footer-sent">
        <div class="item-count"><span id="pf_shoutbox_text_counter">0</span>/255</div>
        <span class="item-btn-sent">
            <button data-name="shoutbox-submit" class="btn btn-primary btn-xs" id="btn-chat"><i class="ico ico-paperplane" aria-hidden="true"></i></button>
        </span>
    </div>
</div>
<?php endif; ?>
<input type="hidden" value="<?php echo $this->_aVars['sModuleId']; ?>" data-toggle="shoutbox" data-name="parent_module_id">
<input type="hidden" value="<?php echo $this->_aVars['iItemId']; ?>" data-toggle="shoutbox" data-name="parent_item_id">
<!--error-->
<div id="shoutbox_error" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo _p("Error"); ?></h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
<?php echo _p("type_something_to_chat"); ?>
                </div>
            </div>
        </div>

    </div>
</div>




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
