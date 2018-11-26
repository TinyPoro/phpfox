<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:35 am */ ?>
<?php 
 
 

 if (isset ( $this->_aVars['aPager'] ) && $this->_aVars['aPager']['totalPages'] > 1): ?>
	<div class="pager_outer">
        <ul class="pagination">
<?php if (! isset ( $this->_aVars['bIsMiniPager'] )): ?>
            <li class="pager_total hide"><?php echo _p('page_x_of_x', array('current' => $this->_aVars['aPager']['current'],'total' => $this->_aVars['aPager']['totalPages'])); ?></li>
<?php endif; ?>

<?php if (isset ( $this->_aVars['aPager']['prevUrl'] )): ?>
            <li class="pager-prev">
                <a <?php if ($this->_aVars['sAjax']): ?>href="<?php echo $this->_aVars['aPager']['prevUrl']; ?>" onclick="$(this).parent().parent().parent().parent().find('.sJsPagerDisplayCount').html($.ajaxProcess('<?php echo _p('loading'); ?>')); $.ajaxCall('<?php echo $this->_aVars['sAjax']; ?>', 'page=<?php echo $this->_aVars['aPager']['prevAjaxUrl'];  echo $this->_aVars['aPager']['sParams']; ?>'); $Core.addUrlPager(this); return false;"<?php else: ?>href="<?php echo $this->_aVars['aPager']['prevUrl']; ?>"<?php endif; ?>>
                    <span class="ico ico-arrow-left"></span>
                </a>
            </li>
<?php endif; ?>

<?php if (count((array)$this->_aVars['aPager']['urls'])):  $this->_aPhpfoxVars['iteration']['pager'] = 0;  foreach ((array) $this->_aVars['aPager']['urls'] as $this->_aVars['sLink'] => $this->_aVars['sPage']):  $this->_aPhpfoxVars['iteration']['pager']++; ?>

				<li <?php if (! isset ( $this->_aVars['aPager']['firstUrl'] ) && $this->_aPhpfoxVars['iteration']['pager'] == 1): ?> class="first <?php if ($this->_aVars['aPager']['current'] == $this->_aVars['sPage']): ?>active<?php endif; ?>"<?php else:  if ($this->_aVars['aPager']['current'] == $this->_aVars['sPage']): ?> class="active"<?php endif;  endif; ?>>
                    <a <?php if ($this->_aVars['sAjax']): ?>href="<?php echo $this->_aVars['sLink']; ?>" onclick="<?php if ($this->_aVars['sLink']): ?>$(this).parent().parent().parent().parent().find('.sJsPagerDisplayCount').html($.ajaxProcess('<?php echo _p('loading'); ?>')); $.ajaxCall('<?php echo $this->_aVars['sAjax']; ?>', 'page=<?php echo $this->_aVars['sPage'];  echo $this->_aVars['aPager']['sParams']; ?>'); $Core.addUrlPager(this);<?php endif; ?> return false;<?php else: ?>href="<?php if ($this->_aVars['sLink']):  echo $this->_aVars['sLink'];  else: ?>javascript:void(0);<?php endif;  endif; ?>"><?php echo $this->_aVars['sPage']; ?></a>
                </li>
<?php endforeach; endif; ?>

<?php if (isset ( $this->_aVars['aPager']['nextUrl'] )): ?>
            <li class="pager-next">
                <a <?php if ($this->_aVars['sAjax']): ?>href="<?php echo $this->_aVars['aPager']['nextUrl']; ?>" onclick="$(this).parent().parent().parent().parent().find('.sJsPagerDisplayCount').html($.ajaxProcess('<?php echo _p('loading'); ?>')); $.ajaxCall('<?php echo $this->_aVars['sAjax']; ?>', 'page=<?php echo $this->_aVars['aPager']['nextAjaxUrl'];  echo $this->_aVars['aPager']['sParams']; ?>'); $Core.addUrlPager(this); return false;"<?php else: ?>href="<?php echo $this->_aVars['aPager']['nextUrl']; ?>"<?php endif; ?>>
                    <span class="ico ico-arrow-right"></span>
                </a>
            </li>
<?php endif; ?>
        </ul>
	</div>
<?php endif; ?>
