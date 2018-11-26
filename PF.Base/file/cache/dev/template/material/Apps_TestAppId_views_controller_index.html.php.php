<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 2:39 am */ ?>
<?php if (! count ( $this->_aVars['aItems'] )):  if (! PHPFOX_IS_AJAX): ?>
<div class="extra_info">
<?php echo _p('no_to_to_list_item_found'); ?>
</div>
<?php endif;  else:  if (! PHPFOX_IS_AJAX): ?>
<div class="item-collections item-collections-2">
<?php endif; ?>

<?php if (count((array)$this->_aVars['aItems'])):  $this->_aPhpfoxVars['iteration']['aItem'] = 0;  foreach ((array) $this->_aVars['aItems'] as $this->_aVars['aItem']):  $this->_aPhpfoxVars['iteration']['aItem']++; ?>

    <article>
        <a href="<?php echo Phpfox::permalink('todo.view', $this->_aVars['aItem']['task_id'], $this->_aVars['aItem']['name'], false, null, (array) array (
)); ?>"><h4><?php echo $this->_aVars['aItem']['name']; ?></h4></a>
        <p><?php echo $this->_aVars['aItem']['description']; ?></p>
        <abbr>
            <span>Status:</span><span>
<?php if ($this->_aVars['aItem']['task_status'] > 0): ?>complete<?php else: ?>in-complete<?php endif; ?>
            </span><br/>
            <span>Created:</span><span>
<?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aItem']['time_stamp']); ?>
            </span><br/>
        </abbr>
    </article>
<?php endforeach; endif; ?>
<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager'); ?>
<?php if (! PHPFOX_IS_AJAX): ?>
</div>
<?php endif;  endif; ?>
