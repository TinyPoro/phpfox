<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 19, 2018, 11:55 am */ ?>
<?php 

 

?>

<a href="#" type="button" id="btn_display_with_friend" class="js_btn_display_with_friend activity_feed_share_this_one_link parent js_hover_title dont-unbind-children" onclick="return false;">
    <span class="ico ico-user1-plus-o"></span>
    <span class="js_hover_info">
<?php echo _p('tag_friends'); ?>
    </span>
</a>

<script type="text/javascript">
    $Behavior.prepareTagsInit = function()
    {
<?php if (isset ( $this->_aVars['iFeedId'] ) && $this->_aVars['iFeedId']): ?>
            $Core.FeedTag.iFeedId = <?php echo $this->_aVars['aForms']['feed_id']; ?>;
<?php endif; ?>
        $Core.FeedTag.init();
    }
</script>

<?php echo Phpfox::getLib('template')->addScript('tag-friends.js', 'module_feed',true); ?>
