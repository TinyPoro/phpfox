<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 8:24 am */ ?>
<?php 

 

?>
	<div id="js_comment_<?php echo $this->_aVars['aComment']['comment_id']; ?>" class="js_mini_feed_comment comment_mini js_mini_comment_item_<?php echo $this->_aVars['aComment']['item_id']; ?> <?php if (isset ( $this->_aVars['aComment']['children'] ) && count ( $this->_aVars['aComment']['children']['comments'] )): ?>has-replies<?php endif; ?>">
<?php if (( Phpfox ::getUserParam('comment.delete_own_comment') && Phpfox ::getUserId() == $this->_aVars['aComment']['user_id'] ) || Phpfox ::getUserParam('comment.delete_user_comment') || ( defined ( 'PHPFOX_IS_PAGES_VIEW' ) && defined ( 'PHPFOX_PAGES_ITEM_TYPE' ) && Phpfox ::getService(PHPFOX_PAGES_ITEM_TYPE)->isAdmin('' . $this->_aVars['aPage']['page_id'] . '' ) ) || ( Phpfox ::getUserParam('comment.can_delete_comment_on_own_item') && isset ( $this->_aVars['aFeed'] ) && isset ( $this->_aVars['aFeed']['feed_link'] ) && $this->_aVars['aFeed']['user_id'] == Phpfox ::getUserId()) || ( Phpfox ::getUserParam('comment.edit_own_comment') && Phpfox ::getUserId() == $this->_aVars['aComment']['user_id'] ) || Phpfox ::getUserParam('comment.edit_user_comment') || ( Phpfox ::isModule('report') && Phpfox ::getUserParam('report.can_report_comments') && $this->_aVars['aComment']['user_id'] != Phpfox ::getUserId() && ! User_Service_Block_Block ::instance()->isBlocked(null, $this->_aVars['aComment']['user_id'] ) )): ?>
        <div class="item-options-holder comment-options-holder">
            <a role="button" data-toggle="dropdown" href="#" class="item-options">
				<span class="ico ico-angle-down"></span>
			</a>
            <ul class="dropdown-menu dropdown-menu-right">
<?php if (( Phpfox ::getUserParam('comment.edit_own_comment') && Phpfox ::getUserId() == $this->_aVars['aComment']['user_id'] ) || Phpfox ::getUserParam('comment.edit_user_comment')): ?>
                    <li>
                        <a href="inline#?type=text&amp;&amp;simple=true&amp;id=js_comment_text_<?php echo $this->_aVars['aComment']['comment_id']; ?>&amp;call=comment.updateText&amp;comment_id=<?php echo $this->_aVars['aComment']['comment_id']; ?>&amp;data=comment.getText" class="quickEdit">
                            <span class="ico ico-pencilline-o mr-1"></span> <?php echo _p('edit'); ?>
                        </a>
                    </li>
<?php endif; ?>

<?php if (Phpfox ::isModule('report') && Phpfox ::getUserParam('report.can_report_comments') && $this->_aVars['aComment']['user_id'] != Phpfox ::getUserId() && ! User_Service_Block_Block ::instance()->isBlocked(null, $this->_aVars['aComment']['user_id'] )): ?>
                    <li>
                        <a href="#?call=report.add&amp;height=210&amp;width=400&amp;type=comment&amp;id=<?php echo $this->_aVars['aComment']['comment_id']; ?>" class="inlinePopup" title="<?php echo _p('report_a_comment'); ?>">
                            <span class="ico ico-warning-o mr-1"></span>
<?php echo _p('report'); ?>
                        </a>
                    </li>
<?php endif; ?>

<?php if (( Phpfox ::getUserParam('comment.delete_own_comment') && Phpfox ::getUserId() == $this->_aVars['aComment']['user_id'] ) || Phpfox ::getUserParam('comment.delete_user_comment') || ( defined ( 'PHPFOX_IS_PAGES_VIEW' ) && defined ( 'PHPFOX_PAGES_ITEM_TYPE' ) && Phpfox ::getService(PHPFOX_PAGES_ITEM_TYPE)->isAdmin('' . $this->_aVars['aPage']['page_id'] . '' ) ) || ( Phpfox ::getUserParam('comment.can_delete_comment_on_own_item') && isset ( $this->_aVars['aFeed'] ) && isset ( $this->_aVars['aFeed']['feed_link'] ) && $this->_aVars['aFeed']['user_id'] == Phpfox ::getUserId())): ?>
                    <li class="item-delete">
                        <a href="#" onclick="$Core.jsConfirm({message:'<?php echo _p('are_you_sure', array('phpfox_squote' => true)); ?>'}, function(){$.ajaxCall('comment.InlineDelete', 'type_id=<?php echo $this->_aVars['aComment']['type_id']; ?>&amp;comment_id=<?php echo $this->_aVars['aComment']['comment_id'];  if (defined ( 'PHPFOX_IS_THEATER_MODE' )): ?>&photo_theater=1<?php endif;  if (! $this->_aVars['aComment']['parent_id']): ?>&item_id=<?php echo $this->_aVars['aComment']['item_id'];  endif; ?>', 'GET');},function(){}); return false;">
                            <span class="ico ico-trash-alt-o  mr-1"></span> <?php echo _p('delete'); ?>
                        </a>
                    </li>
<?php endif; ?>
            </ul>
        </div>
<?php endif; ?>

		<div class="comment_mini_image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aComment'],'suffix' => '_50_square','max_width' => 40,'max_height' => 40)); ?>
		</div>
		<div class="comment_mini_content">
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aComment']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aComment']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aComment']['user_name'], ((empty($this->_aVars['aComment']['user_name']) && isset($this->_aVars['aComment']['profile_page_id'])) ? $this->_aVars['aComment']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aComment']['user_id'], $this->_aVars['aComment']['full_name']), 30, '...') . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aComment']['user_id']) ? '' : '</a>') . '</span>'; ?><div id="js_comment_text_<?php echo $this->_aVars['aComment']['comment_id']; ?>" class="comment_mini_text <?php if ($this->_aVars['aComment']['view_id'] == '1'): ?>row_moderate<?php endif; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('parse.output')->feedStrip($this->_aVars['aComment']['text']), '300', 'comment.view_more', true), 30); ?></div>
			<div class="comment_mini_action">
				<ul>
<?php Phpfox::getBlock('like.link', array('like_type_id' => 'feed_mini','like_owner_id' => $this->_aVars['aComment']['user_id'],'like_item_id' => $this->_aVars['aComment']['comment_id'],'like_is_liked' => $this->_aVars['aComment']['is_liked'],'like_is_custom' => true)); ?>
					
					<span class="total-like js_like_link_holder" <?php if ($this->_aVars['aComment']['total_like'] == 0): ?>style="display:none"<?php endif; ?>>
						<span onclick="return $Core.box('like.browse', 450, 'type_id=feed_mini&amp;item_id=<?php echo $this->_aVars['aComment']['comment_id']; ?>');">
							<span class="js_like_link_holder_info">
<?php echo $this->_aVars['aComment']['total_like']; ?>
							</span>
						</span>
					</span>
<?php if (Phpfox ::getParam('comment.comment_is_threaded') && Phpfox ::getUserParam('feed.can_post_comment_on_feed')): ?>
<?php if (( ( isset ( $this->_aVars['bForceNoReply'] ) && $this->_aVars['bForceNoReply'] ) && ! User_Service_Block_Block ::instance()->isBlocked(null, $this->_aVars['aComment']['user_id'] ) ) || $this->_aVars['aComment']['parent_id']): ?>
						
<?php else: ?>
							<li><a role="button" class="js_comment_feed_new_reply" rel="<?php echo $this->_aVars['aComment']['comment_id']; ?>"><?php echo _p('reply'); ?></a></li>
<?php endif; ?>
<?php endif; ?>

<?php if (Phpfox ::getUserParam('comment.can_moderate_comments') && $this->_aVars['aComment']['view_id'] == '1'): ?>
						<li>
							<a href="#" onclick="$('#js_comment_text_<?php echo $this->_aVars['aComment']['comment_id']; ?>').removeClass('row_moderate'); $(this).remove(); $.ajaxCall('comment.moderateSpam', 'id=<?php echo $this->_aVars['aComment']['comment_id']; ?>&amp;action=approve&amp;inacp=0'); return false;"><?php echo _p('approve'); ?></a>
						</li>
<?php endif; ?>
					<li class="comment_mini_entry_time_stamp"><?php if (isset ( $this->_aVars['aComment']['unix_time_stamp'] )):  echo Phpfox::getLib('date')->convertTime($this->_aVars['aComment']['unix_time_stamp'], 'core.global_update_time');  else:  echo Phpfox::getLib('date')->convertTime($this->_aVars['aComment']['time_stamp'], 'core.global_update_time');  endif; ?></li>
				</ul>
			</div>
		</div>		
		<div id="js_comment_form_holder_<?php echo $this->_aVars['aComment']['comment_id']; ?>" class="js_comment_form_holder"></div>

		<div id="js_comment_mini_child_holder_<?php echo $this->_aVars['aComment']['comment_id']; ?>" class="comment_mini_child_holder<?php if (isset ( $this->_aVars['aComment']['children'] ) && $this->_aVars['aComment']['children']['total'] > 0): ?> comment_mini_child_holder_padding<?php endif; ?>">
<?php if (isset ( $this->_aVars['aComment']['children'] ) && isset ( $this->_aVars['aComment']['children']['total'] ) && $this->_aVars['aComment']['children']['total'] > 0): ?>
				<div class="comment_mini_child_view_holder" id="comment_mini_child_view_holder_<?php echo $this->_aVars['aComment']['comment_id']; ?>">
					<a href="#" onclick="$.ajaxCall('comment.viewAllComments', 'comment_type_id=<?php echo $this->_aVars['aComment']['type_id']; ?>&amp;item_id=<?php echo $this->_aVars['aComment']['item_id']; ?>&amp;comment_id=<?php echo $this->_aVars['aComment']['comment_id']; ?>', 'GET'); return false;">
						+<?php echo number_format($this->_aVars['aComment']['children']['total']); ?> <?php echo _p('replies'); ?>
						<span class="ico ico-angle-down"></span>
						</a>
				</div>
<?php endif; ?>
			<div id="js_comment_children_holder_<?php echo $this->_aVars['aComment']['comment_id']; ?>" class="comment_mini_child_content">				
<?php if (isset ( $this->_aVars['aComment']['children'] ) && isset ( $this->_aVars['aComment']['children']['comments'] ) && count ( $this->_aVars['aComment']['children']['comments'] )): ?>
<?php if (count((array)$this->_aVars['aComment']['children']['comments'])):  foreach ((array) $this->_aVars['aComment']['children']['comments'] as $this->_aVars['aCommentChilded']): ?>
<?php Phpfox::getBlock('comment.mini', array('comment_custom' => $this->_aVars['aCommentChilded'])); ?>
<?php endforeach; endif; ?>
<?php else: ?>
					<div id="js_feed_like_holder_<?php echo $this->_aVars['aComment']['comment_id']; ?>"> </div>
<?php endif; ?>
				
			</div>
		</div>		
	</div>
<?php if (isset ( $this->_aVars['bForceNoReply'] ) && ! $this->_aVars['bForceNoReply'] && ! empty ( $this->_aVars['bIsAjaxAdd'] )): ?>
<script>
    $Core.updateCommentCounter('<?php echo $this->_aVars['aComment']['type_id']; ?>',<?php echo $this->_aVars['aComment']['item_id']; ?>, '+');
</script>
<?php endif; ?>
