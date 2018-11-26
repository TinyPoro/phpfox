<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:32 am */ ?>
<?php 

 if (! Phpfox ::getUserBy('profile_page_id') && Phpfox ::isUser()): ?>
<?php if (isset ( $this->_aVars['aPage'] ) && $this->_aVars['aPage']['reg_method'] == '2' && ! isset ( $this->_aVars['aPage']['is_invited'] ) && $this->_aVars['aPage']['page_type'] == '1'): ?>
<?php else: ?>
<?php if (isset ( $this->_aVars['aPage'] ) && isset ( $this->_aVars['aPage']['is_reg'] ) && $this->_aVars['aPage']['is_reg']): ?>
<?php else: ?>
<?php if (isset ( $this->_aVars['aPage'] ) && ! empty ( $this->_aVars['aPage']['is_liked'] )): ?>
            <div class="dropdown">
                <a role="button" class="btn btn-round btn-default btn-icon item-icon-liked pages_like_join pages_unlike_unjoin" data-toggle="dropdown">
                    <span class="ico ico-thumbup"></span><?php echo _p('liked'); ?><span class="ml-1 ico ico-caret-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a role="button" onclick="$.ajaxCall('like.delete', 'type_id=pages&amp;item_id=<?php echo $this->_aVars['aPage']['page_id']; ?>'); return false;">
                            <span class="mr-1 ico ico-thumbdown"></span><?php echo _p('unlike'); ?>
                        </a>
                    </li>
                </ul>
            </div>
<?php else: ?>
            <button class="btn btn-round btn-primary btn-gradient btn-icon item-icon-like" onclick="$.ajaxCall('like.add', 'type_id=pages&item_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&reload=1');">
                <span class="ico ico-thumbup-o"></span><?php echo _p('like'); ?>
            </button>
<?php endif; ?>
<?php endif; ?>
<?php endif;  endif; ?>

