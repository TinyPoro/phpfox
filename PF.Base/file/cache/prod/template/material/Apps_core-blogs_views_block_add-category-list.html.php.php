<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 3:30 am */ ?>
<?php

 if (! empty ( $this->_aVars['sCategories'] )): ?>
    <label for="category"><?php echo _p('categories'); ?></label>
    <select class="form-control" <?php if ($this->_aVars['bMultiple']): ?>name="val[selected_categories][]" multiple="multiple" size="8"<?php else: ?>name="val[parent_id]"<?php endif; ?> style="max-width:100%">
<?php if (! $this->_aVars['bMultiple']): ?><option value=""><?php echo _p('select'); ?>:</option><?php endif; ?>
<?php echo $this->_aVars['sCategories']; ?>
    </select>
<?php endif; ?>

