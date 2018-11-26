<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 2:58 am */ ?>
<?php



 if (! isset ( $this->_aVars['bIsFriendController'] )):  if (count ( $this->_aVars['aFriends'] )): ?>
<ul id="js_new_friend_holder_drop">
<?php endif; ?>
<?php endif; ?>
<?php if (! count ( $this->_aVars['aFriends'] )): ?>
<?php if (! PHPFOX_IS_AJAX): ?>
<?php if (! isset ( $this->_aVars['bIsFriendController'] )): ?>
    <div class="drop_data_empty">
<?php else: ?>
        <div class="extra_info">
<?php endif; ?>
<?php echo _p('no_new_requests'); ?>
        </div>
<?php endif; ?>
<?php else: ?>
        <div class="item-container item-container-friends-incoming" id="collection-friends-incoming">
<?php if (count((array)$this->_aVars['aFriends'])):  $this->_aPhpfoxVars['iteration']['friends'] = 0;  foreach ((array) $this->_aVars['aFriends'] as $this->_aVars['aFriend']):  $this->_aPhpfoxVars['iteration']['friends']++; ?>

<?php if (! isset ( $this->_aVars['bIsFriendController'] )): ?>
            <li id="js_new_friend_request_<?php echo $this->_aVars['aFriend']['request_id']; ?>" class="holder_notify_drop_data with_padding<?php if ($this->_aPhpfoxVars['iteration']['friends'] == 1): ?> first<?php endif; ?> js_friend_request_<?php echo $this->_aVars['aFriend']['request_id'];  if (! $this->_aVars['aFriend']['is_seen']): ?> is_new<?php endif; ?>">
<?php else: ?>
                <article class="friend-incoming-item js_friend_request_<?php echo $this->_aVars['aFriend']['request_id']; ?> <?php if (! $this->_aVars['aFriend']['is_seen']): ?>is_new<?php endif; ?>" data-url="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aFriend']['user_name']); ?>" data-uid="<?php echo $this->_aVars['aFriend']['request_id']; ?>" id="request-<?php echo $this->_aVars['aFriend']['request_id']; ?>">
<?php endif; ?>
<?php if (isset ( $this->_aVars['bIsFriendController'] )): ?>
                        <div class=" moderation_row">
                            <label class="item-checkbox">
                                <input type="checkbox" class="js_global_item_moderate" name="item_moderate[]" value="<?php echo $this->_aVars['aFriend']['request_id']; ?>"/>
                                <i class="ico ico-square-o"></i>
                            </label>
                        </div>
<?php endif; ?>
                        <div class="item-outer">
                            <div class="item-media-src" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aFriend']['user_name']); ?>">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aFriend'],'max_width' => '50','max_height' => '50','suffix' => '_50_square')); ?>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aFriend']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aFriend']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aFriend']['user_name'], ((empty($this->_aVars['aFriend']['user_name']) && isset($this->_aVars['aFriend']['profile_page_id'])) ? $this->_aVars['aFriend']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aFriend']['user_id'], $this->_aVars['aFriend']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aFriend']['user_id']) ? '' : '</a>') . '</span>'; ?>
                                </div>
                                <div class="item-info">
<?php if ($this->_aVars['aFriend']['relation_data_id'] > 0): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/heart.png','class' => 'v_middle')); ?> <?php echo _p('relationship_request'); ?>
<?php else: ?>
<?php if (isset ( $this->_aVars['aFriend']['mutual_friends'] ) && $this->_aVars['aFriend']['mutual_friends']['total'] > 0): ?>
                                            <a href="#" onclick="$Core.box('friend.getMutualFriends', 300, 'user_id=<?php echo $this->_aVars['aFriend']['friend_user_id']; ?>'); return false;">
<?php if ($this->_aVars['aFriend']['mutual_friends']['total'] == 1): ?>
<?php if (count((array)$this->_aVars['aFriend']['mutual_friends']['friends'])):  foreach ((array) $this->_aVars['aFriend']['mutual_friends']['friends'] as $this->_aVars['aMutualFriend']): ?>
                                                <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aMutualFriend']['user_name']); ?>"><?php echo $this->_aVars['aMutualFriend']['full_name']; ?></a> <?php echo _p('is_a_mutual_friend'); ?>
<?php endforeach; endif; ?>
<?php else: ?>
<?php echo _p('total_mutual_friends', array('total' => $this->_aVars['aFriend']['mutual_friends']['total'])); ?>
<?php endif; ?>
                                            </a>
<?php else: ?>
<?php Phpfox::getBlock('user.info', array('friend_user_id' => $this->_aVars['aFriend']['friend_user_id'],'number_of_info' => '1')); ?>
<?php endif; ?>
<?php endif; ?>
<?php (($sPlugin = Phpfox_Plugin::get('friend.template_block_accept__1')) ? eval($sPlugin) : false); ?>

<?php if (! empty ( $this->_aVars['aFriend']['message'] )): ?>
                                    <div class="extra_info">
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aFriend']['message'],false), 20, 'friend.view_more', true); ?>
                                    </div>
<?php endif; ?>
                                </div>

                                <div class="drop_data_content">
                                    <div class="drop_data_user">
                                        <div class="drop_data_action">
                                            <div class="js_drop_data_button" id="drop_down_<?php echo $this->_aVars['aFriend']['request_id']; ?>">
                                                <ul class="table_clear_button inline">
                                                    <li><a type="button" name="" value="" class="button btn-icon btn btn-primary btn-sm " onclick="$(this).parents('.drop_data_action').find('.js_drop_data_add').show(); <?php if ($this->_aVars['aFriend']['relation_data_id'] > 0): ?> $.ajaxCall('custom.processRelationship', 'relation_data_id=<?php echo $this->_aVars['aFriend']['relation_data_id']; ?>&amp;type=accept&amp;request_id=<?php echo $this->_aVars['aFriend']['request_id']; ?>'); <?php else: ?> $.ajaxCall('friend.processRequest', 'type=yes&amp;user_id=<?php echo $this->_aVars['aFriend']['user_id']; ?>&amp;request_id=<?php echo $this->_aVars['aFriend']['request_id']; ?>&amp;manage_all_request=true'); <?php endif; ?>" ><span class="ico ico-check"></span><span class="item-text"><?php echo _p('confirm'); ?></span></a></li>
                                                    <li><a type="button" name="" value="" class="btn-delete btn-icon button button_off btn btn-default btn-sm " onclick="$(this).parents('.drop_data_action').find('.js_drop_data_add').show(); <?php if ($this->_aVars['aFriend']['relation_data_id'] > 0): ?> $.ajaxCall('custom.processRelationship', 'relation_data_id=<?php echo $this->_aVars['aFriend']['relation_data_id']; ?>&amp;type=deny&amp;request_id=<?php echo $this->_aVars['aFriend']['request_id']; ?>'); <?php else: ?> $.ajaxCall('friend.processRequest', 'type=no&amp;user_id=<?php echo $this->_aVars['aFriend']['user_id']; ?>&amp;request_id=<?php echo $this->_aVars['aFriend']['request_id']; ?>&amp;manage_all_request=true'); <?php endif; ?>" ><span class="ico ico-close" style="display: none;"></span><span class="item-text"><?php echo _p('delete_request'); ?></span></a></li>
                                                </ul>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
        
                                        <div class="dropdown extra_info_middot dropup" style="display:none;">
                                            <a class="btn btn-icon btn-default btn-sm" type="button" data-toggle="dropdown"><span class="ico ico-check"></span><?php echo _p('friend'); ?>
                                                <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a role="button" onclick="$Core.composeMessage({user_id: <?php echo $this->_aVars['aFriend']['user_id']; ?>}); return false;"><span class="ico ico-comment-o"></span><span class="item-text"><?php echo _p('send_message'); ?></span></a></li>
                                                <li><a role="button" onclick="$Core.jsConfirm({}, function(){$.ajaxCall('friend.delete', 'friend_user_id=<?php echo $this->_aVars['aFriend']['user_id']; ?>&reload=1');}, function(){}); return false;"><span class="ico ico-user1-del-o"></span><span class="item-text"><?php echo _p('unfriend'); ?></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
<?php if (! isset ( $this->_aVars['bIsFriendController'] )): ?>
            </li>
<?php else: ?>
        </article>
<?php endif; ?>
<?php endforeach; endif; ?>
    </div>
<?php endif; ?>
<?php if (! isset ( $this->_aVars['bIsFriendController'] )): ?>
<?php if (count ( $this->_aVars['aFriends'] )): ?>
</ul>

<?php echo '
<script type="text/javascript">
  var $iTotalFriends = parseInt($(\'#js_total_new_friend_requests\').html());
  var $iNewTotalFriends = 0;
  $(\'#js_new_friend_holder_drop li.holder_notify_drop_data\').each(function()
  {
    $iNewTotalFriends++;
  });

  $iTotalFriends = parseInt(($iTotalFriends - $iNewTotalFriends));
  if ($iTotalFriends < 0)
  {
    $iTotalFriends = 0;
  }

  if ($iTotalFriends === 0)
  {
    $(\'span#js_total_new_friend_requests\').html(\'\').hide();
  }
  else
  {
    $(\'span#js_total_new_friend_requests\').html($iTotalFriends);
  }
</script>
'; ?>


<?php endif; ?>
<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('friend.accept'); ?>" class="holder_notify_drop_link"><?php echo _p('see_all_friend_requests'); ?></a>
<?php endif; ?>
