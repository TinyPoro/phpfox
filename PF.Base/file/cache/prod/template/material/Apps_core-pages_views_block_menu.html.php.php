<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:32 am */ ?>
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
<div class="page-block-action block">
    <div class="item-inner">
        <div class="item-info-main">
            <div class="item-image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aPageUser'],'suffix' => '_50_square')); ?>
            </div>
            <div class="item-info">
                <div class="item-title"><a href="<?php echo $this->_aVars['aPage']['link']; ?>"><?php echo $this->_aVars['aPage']['full_name']; ?></a></div>
                <div class="item-like-count">
<?php if ($this->_aVars['aPage']['total_like'] == 1): ?>
<?php echo _p('1_like'); ?>
<?php else: ?>
<?php echo _p('total_like_likes', array('total_like' => $this->_aVars['aPage']['total_like'])); ?>
<?php endif; ?>
                </div>
            </div> 
        </div>
<?php if (! empty ( $this->_aVars['aPage']['is_liked'] ) && ! Phpfox ::getUserBy('profile_page_id')): ?>
        <div class="item-btn-like dropdown">
            <button class="btn btn-primary btn-round dropdown-toggle btn-sm btn-icon" type="button" data-toggle="dropdown"><span class="ico ico-check"></span><?php echo _p('liked'); ?>
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a role="button" onclick="$.ajaxCall('like.delete', 'type_id=pages&item_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&reload=true'); return false;"><span class="ico ico-thumbdown-o"></span><?php echo _p('unlike'); ?></a></li>
            </ul>
        </div>
<?php else: ?>
        <a href="#" class="btn btn-round btn-icon btn-default btn-sm pages_like_join" onclick="$(this).remove(); <?php if ($this->_aVars['aPage']['reg_method'] == '1' && ! isset ( $this->_aVars['aPage']['is_invited'] )): ?> $.ajaxCall('groups.signup', 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>'); <?php else: ?>$.ajaxCall('like.add', 'type_id=pages&amp;item_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&amp;reload=1');<?php endif; ?> return false;">
            <span class="ico ico-thumbup-o"></span><?php echo _p('like'); ?>
        </a>
<?php endif; ?>
    </div>
    <ul class="item-page-action">
<?php if ($this->_aVars['aPage']['is_admin']): ?>
            <li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('pages.add', array('id' => $this->_aVars['aPage']['page_id'])); ?>"><i class="ico ico-pencil"></i><?php echo _p('edit_page'); ?></a></li>
<?php endif; ?>
<?php if ($this->_aVars['aPage']['view_id'] == 0): ?>
<?php Phpfox::getBlock('share.link', array('type' => 'pages','url' => $this->_aVars['aPage']['link'],'title' => $this->_aVars['aPage']['title'],'display' => 'menu','sharefeedid' => $this->_aVars['aPage']['page_id'],'sharemodule' => 'pages','extra_content' => '<i class="ico ico-share"></i>')); ?>
<?php endif; ?>
<?php if (! $this->_aVars['aPage']['is_admin'] && Phpfox ::getUserParam('pages.can_claim_page') && empty ( $this->_aVars['aPage']['claim_id'] )): ?>
            <li>
                <a href="#?call=contact.showQuickContact&amp;height=600&amp;width=600&amp;page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>" class="inlinePopup" title="<?php echo _p('claim_page'); ?>" data-app="core_pages" data-component="claim">
                    <i class="fa fa-paper-plane"></i><?php echo _p('claim_page'); ?>
                </a>
            </li>
<?php endif; ?>
<?php if (Phpfox ::isModule('report') && ( $this->_aVars['aPage']['user_id'] != Phpfox ::getUserId())): ?>
        <li><a href="#?call=report.add&amp;height=210&amp;width=400&amp;type=pages&amp;id=<?php echo $this->_aVars['aPage']['page_id']; ?>" class="inlinePopup" title="<?php echo _p('Report this Page'); ?>"><i class="ico ico-warning"></i><?php echo _p('report'); ?></a></li>
<?php endif; ?>
    </ul>
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
