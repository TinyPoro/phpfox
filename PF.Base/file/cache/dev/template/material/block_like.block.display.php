<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 3:21 am */ ?>
<?php
    
 if (isset ( $this->_aVars['ajaxLoadLike'] ) && $this->_aVars['ajaxLoadLike']): ?>
<div id="js_like_body_<?php echo $this->_aVars['aFeed']['feed_id']; ?>">
<?php endif; ?>

<?php if (Phpfox ::getParam('like.show_user_photos')): ?>
	<div class="activity_like_holder comment_mini" style="position:relative;">
		<a href="#" class="like_count_link js_hover_title" onclick="return $Core.box('like.browse', 450, 'type_id=<?php if (isset ( $this->_aVars['aFeed']['like_type_id'] )):  echo $this->_aVars['aFeed']['like_type_id'];  else:  echo $this->_aVars['aFeed']['type_id'];  endif; ?>&amp;item_id=<?php echo $this->_aVars['aFeed']['item_id']; ?>');">
<?php echo number_format($this->_aVars['aFeed']['feed_total_like']); ?>
			<span class="js_hover_info">
<?php if (defined ( 'PHPFOX_IS_THEATER_MODE' )):  echo _p('likes');  else:  echo _p('people_who_like_this');  endif; ?>
			</span>
		</a>
<?php Phpfox::getBlock('like.displayactions', array('aFeed' => $this->_aVars['aFeed'])); ?>

		<div class="like_count_link_holder">
<?php if (count((array)$this->_aVars['aFeed']['likes'])):  $this->_aPhpfoxVars['iteration']['likes'] = 0;  foreach ((array) $this->_aVars['aFeed']['likes'] as $this->_aVars['aLikeRow']):  $this->_aPhpfoxVars['iteration']['likes']++; ?>

<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aLikeRow'],'suffix' => '_50_square','max_width' => 32,'max_height' => 32,'class' => 'js_hover_title v_middle')); ?>&nbsp;
<?php endforeach; endif; ?>
		</div>
	</div>
<?php else: ?>

<?php if (! empty ( $this->_aVars['aFeed']['feed_like_phrase'] )): ?>
	<div class="activity_like_holder" id="activity_like_holder_<?php echo $this->_aVars['aFeed']['feed_id']; ?>">
<?php echo $this->_aVars['aFeed']['feed_like_phrase']; ?>
	</div>
<?php else: ?>
	<div class="activity_like_holder activity_not_like">
<?php echo _p('when_not_like'); ?>
	</div>
<?php endif; ?>

<?php endif;  if (isset ( $this->_aVars['ajaxLoadLike'] ) && $this->_aVars['ajaxLoadLike']): ?>
</div>
<?php endif; ?>

