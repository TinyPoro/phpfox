<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 20, 2018, 10:12 am */ ?>
<?php if (! empty ( $this->_aVars['sPublicMessage'] )): ?>
<div class="public_message <?php if ($this->_aVars['sPublicMessageType'] != 'success'): ?>public_message_<?php echo $this->_aVars['sPublicMessageType'];  endif; ?>" id="public_message" data-auto-close="<?php echo $this->_aVars['sPublicMessageAutoClose']; ?>">
    <span><?php echo $this->_aVars['sPublicMessage']; ?></span>
    <span class="ico ico-close-circle-o" onclick="$Core.publicMessageSlideDown();"></span>
</div>
<script type="text/javascript">
	$Behavior.theme_admincp_error = function()
	{
		$('#public_message').show();
	};
</script>
<?php endif; ?>
<div id="core_js_messages">
<?php if (count ( $this->_aVars['aErrors'] )):  if (count((array)$this->_aVars['aErrors'])):  foreach ((array) $this->_aVars['aErrors'] as $this->_aVars['sErrorMessage']): ?>
	<div class="error_message"><?php echo $this->_aVars['sErrorMessage']; ?></div>
<?php endforeach; endif;  unset($this->_aVars['sErrorMessage'], $this->_aVars['sample']);  endif; ?>
</div>
