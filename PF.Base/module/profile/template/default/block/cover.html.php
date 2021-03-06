<?php
defined('PHPFOX') or exit('NO DICE!');
?>

<div id="js_cover_photo_iframe_loader_error"></div>
<form class="form" id="change-cover-form"
      onsubmit="$Core.CoverPhoto.submitForm();event.preventDefault();"
      enctype="multipart/form-data" action="{url link='photo.frame'}" method="post">
    <div><input type="hidden" name="val[action]" value="upload_photo_via_share"/></div>
    <div><input type="hidden" name="val[is_cover_photo]" value="1"/></div>
    {if isset($iPageId) && !empty($iPageId)}
    <div>
        <input type="hidden" name="val[page_id]" value="{$iPageId}"/>
    </div>
    {/if}
    {if isset($iGroupId) && !empty($iGroupId)}
    <div>
        <input type="hidden" name="val[groups_id]" value="{$iGroupId}"/>
    </div>
    {/if}
    <div class="form-group">
        <input type="file" accept="image/*" name="image[]" id="global_attachment_photo_file_input" value=""
               onchange="$(this).parents('form:first').submit();" class="form-control"/>
    </div>
</form>

<script>
  $Core.CoverPhoto.maxUploadFileSize = {$iMaxUploadFileSize};
  $Core.CoverPhoto.phrases.upload_error = '{_p var='upload_error'}';
  $Core.CoverPhoto.phrases.photo_larger_than_limit = '{_p var='your_photo_is_larger_than_limit_file_size_mb' size=$sMaxUploadFileSize}. {_p var='upload_another_photo'}?';
  $Core.CoverPhoto.phrases.change_photo = '{_p var='change_photo'}';
  $Core.CoverPhoto.phrases.cancel = '{_p var='cancel'}';
  $('#global_attachment_photo_file_input').trigger('click');
</script>