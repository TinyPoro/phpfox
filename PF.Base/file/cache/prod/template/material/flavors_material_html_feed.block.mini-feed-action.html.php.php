<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:30 am */ ?>
<?php

?>

<div class="js_feed_comment_border">
<?php (($sPlugin = Phpfox_Plugin::get('feed.template_block_mini_feed_action_border')) ? eval($sPlugin) : false); ?>
    <div id="js_feed_mini_action_holder_<?php if (isset ( $this->_aVars['aFeed']['like_type_id'] ) && ! isset ( $this->_aVars['aFeed']['is_app'] )):  echo $this->_aVars['aFeed']['like_type_id'];  else:  echo $this->_aVars['aFeed']['type_id'];  endif; ?>_<?php if (isset ( $this->_aVars['aFeed']['like_item_id'] ) && ! isset ( $this->_aVars['aFeed']['is_app'] )):  echo $this->_aVars['aFeed']['like_item_id'];  else:  echo $this->_aVars['aFeed']['item_id'];  endif; ?>" class="comment_mini_content_holder<?php if (( isset ( $this->_aVars['aFeed']['is_app'] ) && $this->_aVars['aFeed']['is_app'] && isset ( $this->_aVars['aFeed']['app_object'] ) )): ?> _is_app<?php endif; ?>"<?php if (( isset ( $this->_aVars['aFeed']['is_app'] ) && $this->_aVars['aFeed']['is_app'] && isset ( $this->_aVars['aFeed']['app_object'] ) )): ?> data-app-id="<?php echo $this->_aVars['aFeed']['app_object']; ?>"<?php endif; ?>>
            <div class="comment_mini_content_holder_icon"<?php if (isset ( $this->_aVars['aFeed']['marks'] ) || ( isset ( $this->_aVars['aFeed']['likes'] ) && is_array ( $this->_aVars['aFeed']['likes'] ) ) || ( isset ( $this->_aVars['aFeed']['total_comment'] ) && $this->_aVars['aFeed']['total_comment'] > 0 )):  else:  endif; ?>></div>
                <div class="comment_mini_content_border">

                    <div class="comment-mini-content-commands">
                        <div class="button-like-share-block <?php if (isset ( $this->_aVars['aFeed']['total_action'] )): ?>comment-has-<?php echo $this->_aVars['aFeed']['total_action']; ?>-actions<?php endif; ?>">
<?php if ($this->_aVars['aFeed']['can_like']): ?>
                            <div class="feed-like-link">
<?php if (isset ( $this->_aVars['aFeed']['like_item_id'] )): ?>
<?php Phpfox::getBlock('like.link', array('like_type_id' => $this->_aVars['aFeed']['like_type_id'],'like_item_id' => $this->_aVars['aFeed']['like_item_id'],'like_is_liked' => $this->_aVars['aFeed']['feed_is_liked'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('like.link', array('like_type_id' => $this->_aVars['aFeed']['like_type_id'],'like_item_id' => $this->_aVars['aFeed']['item_id'],'like_is_liked' => $this->_aVars['aFeed']['feed_is_liked'])); ?>
<?php endif; ?>

                                <span class="counter" onclick="return $Core.box('like.browse', 450, 'type_id=<?php if (isset ( $this->_aVars['aFeed']['like_type_id'] )):  echo $this->_aVars['aFeed']['like_type_id'];  else:  echo $this->_aVars['aFeed']['type_id'];  endif; ?>&amp;item_id=<?php echo $this->_aVars['aFeed']['item_id']; ?>');"><?php if (! empty ( $this->_aVars['aFeed']['feed_total_like'] )):  echo $this->_aVars['aFeed']['feed_total_like'];  endif; ?></span>

                            </div>
<?php endif; ?>
<?php if (( ! isset ( $this->_aVars['sFeedType'] ) || $this->_aVars['sFeedType'] != 'mini' ) && $this->_aVars['aFeed']['can_comment']): ?>
                                <div class="feed-comment-link">
                                    <a href="#" title="<?php echo _p('comment'); ?>" onclick="$('#js_feed_comment_form_textarea_<?php echo $this->_aVars['aFeed']['feed_id']; ?>').focus();return false;"><span class="ico ico-comment-o"></span></a>
                                    <span class="counter"><?php if (! empty ( $this->_aVars['aFeed']['total_comment'] )):  echo $this->_aVars['aFeed']['total_comment'];  endif; ?></span>
                                </div>
<?php endif; ?>
<?php if ($this->_aVars['aFeed']['can_share']): ?>
                            <div class="feed-comment-share-holder">
<?php $this->assign('empty', false); ?>
<?php if ($this->_aVars['aFeed']['privacy'] == '0' || $this->_aVars['aFeed']['privacy'] == '1' || $this->_aVars['aFeed']['privacy'] == '2'): ?>
<?php if (isset ( $this->_aVars['aFeed']['share_type_id'] )): ?>
<?php Phpfox::getBlock('share.link', array('type' => 'feed','display' => 'menu_btn','url' => $this->_aVars['aFeed']['feed_link'],'title' => $this->_aVars['aFeed']['feed_title'],'sharefeedid' => $this->_aVars['aFeed']['item_id'],'sharemodule' => $this->_aVars['aFeed']['share_type_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('share.link', array('type' => 'feed','display' => 'menu_btn','url' => $this->_aVars['aFeed']['feed_link'],'title' => $this->_aVars['aFeed']['feed_title'],'sharefeedid' => $this->_aVars['aFeed']['item_id'],'sharemodule' => $this->_aVars['aFeed']['type_id'])); ?>
<?php endif; ?>
<?php else: ?>
<?php Phpfox::getBlock('share.link', array('type' => 'feed','display' => 'menu_btn','url' => $this->_aVars['aFeed']['feed_link'],'title' => $this->_aVars['aFeed']['feed_title'])); ?>
<?php endif; ?>
                                <span class="counter"><?php if (! empty ( $this->_aVars['aFeed']['total_share'] )):  echo $this->_aVars['aFeed']['total_share'];  endif; ?></span>
                            </div>
<?php endif; ?>
                        </div>


<?php (($sPlugin = Phpfox_Plugin::get('feed.template_block_mini_feed_action_commands_1')) ? eval($sPlugin) : false); ?>

                    </div>
                </div><!-- // .comment_mini_content_border -->
    </div><!-- // .comment_mini_content_holder -->
</div>

<script type="text/javascript">
	<?php echo '
	$Behavior.hideEmptyFeedOptions = function() {
		$(\'[data-component="feed-options"] ul.dropdown-menu\').each(function() {
			if ($(this).children().length == 0) {
				$(this).closest(\'[data-component="feed-options"]\').hide();
			}
		});
	}
	'; ?>

</script>
