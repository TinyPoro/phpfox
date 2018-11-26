<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 19, 2018, 11:55 am */ ?>
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

