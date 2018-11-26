<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 3:33 am */ ?>
<?php

 if (! Phpfox ::getUserBy('profile_page_id') && Phpfox ::isUser() && isset ( $this->_aVars['aPage'] )): ?>
<?php if (! ( isset ( $this->_aVars['aPage'] ) && isset ( $this->_aVars['aPage']['is_reg'] ) && $this->_aVars['aPage']['is_reg'] )): ?>
<?php if (isset ( $this->_aVars['aPage'] ) && ! empty ( $this->_aVars['aPage']['is_liked'] )): ?>
        <div class="dropdown">
            <a data-toggle="dropdown" class="btn btn-default btn-icon item-icon-joined btn-round">
                <span class="ico ico-check"></span>
<?php echo _p('joined'); ?>
                <span class="ml-1 ico ico-caret-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a role="button" onclick="$.ajaxCall('like.delete', 'type_id=groups&amp;item_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&amp;reload=1'); return false;">
                        <span class="ico ico-close"></span>
<?php echo _p('unjoin'); ?>
                    </a>
                </li>
            </ul>
        </div>
<?php else: ?>
        <button class="btn btn-primary btn-round btn-gradient btn-icon item-icon-join" onclick="$(this).remove(); <?php if ($this->_aVars['aPage']['reg_method'] == '1' && ! isset ( $this->_aVars['aPage']['is_invited'] )): ?> $.ajaxCall('groups.signup', 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>'); <?php else: ?>$.ajaxCall('like.add', 'type_id=groups&amp;item_id=<?php echo $this->_aVars['aPage']['page_id']; ?>&amp;reload=1');<?php endif; ?> return false;">
            <span class="ico ico-plus"></span><?php echo _p('join'); ?>
        </button>
<?php endif; ?>
<?php endif;  endif; ?>

