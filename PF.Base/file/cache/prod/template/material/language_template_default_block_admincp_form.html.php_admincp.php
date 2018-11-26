<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 12:27 pm */ ?>
<?php
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: form.html.php 2655 2011-06-03 11:40:56Z Miguel_Espinoza $
 */
 
 

?>
<div class="lang_table">
<?php if (count((array)$this->_aVars['aLanguages'])):  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['aLanguage']):  if ($this->_aVars['sType'] == 'text'): ?>
    <div class="form-group">
        <label><?php echo $this->_aVars['aLanguage']['title']; ?></label>
        <input required type="text" name="val[<?php echo $this->_aVars['sId']; ?>]<?php if (isset ( $this->_aVars['aLanguage']['phrase_var_name'] )): ?>[<?php echo $this->_aVars['aLanguage']['phrase_var_name']; ?>]<?php endif; ?>[<?php echo $this->_aVars['aLanguage']['language_id']; ?>]<?php if (isset ( $this->_aVars['sMode'] )): ?>[<?php echo $this->_aVars['sMode']; ?>]<?php endif; ?>" value="<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['aLanguage']['post_value']); ?>" placeholder="<?php echo $this->_aVars['aLanguage']['title']; ?>" class="form-control"/>
    </div>
<?php elseif ($this->_aVars['sType'] == 'label'): ?>
<?php if ($this->_aVars['aLanguage']['post_value'] != ''): ?>
        <div class="lang_title">
<?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['aLanguage']['post_value']); ?> <small>(<?php echo $this->_aVars['aLanguage']['title']; ?>)</small>
        </div>
<?php endif;  else: ?>
    <div class="form-group">
        <label><?php echo $this->_aVars['aLanguage']['title']; ?></label>
        <textarea required class="form-control" cols="50" rows="5" name="val[<?php echo $this->_aVars['sId']; ?>]<?php if (isset ( $this->_aVars['aLanguage']['phrase_var_name'] )): ?>[<?php echo $this->_aVars['aLanguage']['phrase_var_name']; ?>]<?php endif; ?>[<?php echo $this->_aVars['aLanguage']['language_id']; ?>]<?php if (isset ( $this->_aVars['sMode'] )): ?>[<?php echo $this->_aVars['sMode']; ?>]<?php endif; ?>"><?php echo Phpfox::getLib('parse.output')->htmlspecialchars($this->_aVars['aLanguage']['post_value']); ?></textarea>
    </div>
<?php endif; ?>
    <div class="clear"></div>
<?php endforeach; endif; ?>
</div>
