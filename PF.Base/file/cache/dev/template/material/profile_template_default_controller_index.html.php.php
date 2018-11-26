<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 4:31 am */ ?>
<?php 

?>
<script>
  var bCheckinInit = false;
  $Behavior.prepareInit = function()
  {
    if($Core.Feed !== undefined) {
        $Core.Feed.sGoogleKey = '<?php echo Phpfox::getParam('core.google_api_key'); ?>';
        $Core.Feed.googleReady('<?php echo Phpfox::getParam('core.google_api_key'); ?>');
      }
  }
</script>

