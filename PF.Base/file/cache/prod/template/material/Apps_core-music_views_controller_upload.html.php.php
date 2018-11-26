<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:34 am */ ?>
<?php

?>

<div id="js_actual_upload_form" class="music-share-song">
<?php if ($this->_aVars['bIsEdit']): ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.upload', array('album' => $this->_aVars['iAlbumId'])); ?>" enctype="multipart/form-data">
	<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['song_id']; ?>" /></div>
	<div><input type="hidden" name="upload_via_song" value="1" /></div>
<?php else: ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.upload'); ?>" enctype="multipart/form-data" id="js_music_upload_form">
    <input type="hidden" name="val[time_stamp]" id="js_upload_time_stamp" value="<?php echo $this->_aVars['iTimestamp']; ?>"/>
<?php endif; ?>
<?php if (isset ( $this->_aVars['sModule'] ) && $this->_aVars['sModule']): ?>
		<div><input type="hidden" name="val[callback_module]" value="<?php echo $this->_aVars['sModule']; ?>" /></div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['iItem'] ) && $this->_aVars['iItem']): ?>
		<div><input type="hidden" name="val[callback_item_id]" value="<?php echo $this->_aVars['iItem']; ?>" /></div>
<?php endif; ?>
<?php if (! $this->_aVars['bIsEdit']): ?>
        <div id="js_custom_privacy_input_holder">
        </div>

        <div class="form-group">
            <label for="js_music_album_select"><?php echo _p('album'); ?>:</label>
            <select name="val[album_id]" id="js_music_album_select" class="form-control">
                <option value="0"><?php echo _p('select_an_album'); ?>:</option>
<?php if (count((array)$this->_aVars['aAlbums'])):  foreach ((array) $this->_aVars['aAlbums'] as $this->_aVars['aAlbum']): ?>
                    <option value="<?php echo $this->_aVars['aAlbum']['album_id']; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aAlbum']['name']); ?></option>
<?php endforeach; endif; ?>
            </select>
        </div>

         <div class="form-group">
            <label for="js_music_album_genre"> <?php echo _p('genre'); ?>:</label>
            <select class="form-control" multiple="multiple" id="js_music_album_genre" name="val[genre][]">
<?php if (count((array)$this->_aVars['aGenres'])):  foreach ((array) $this->_aVars['aGenres'] as $this->_aVars['aGenre']): ?>
                    <option value="<?php echo $this->_aVars['aGenre']['genre_id']; ?>" <?php if (isset ( $this->_aVars['aForms']['genres'] ) && in_array ( $this->_aVars['aGenre']['genre_id'] , $this->_aVars['aForms']['genres'] )): ?>selected<?php endif; ?>>
<?php echo _p($this->_aVars['aGenre']['name']); ?>
                    </option>
<?php endforeach; endif; ?>
            </select>
        </div>
<?php if (isset ( $this->_aVars['sModule'] ) && $this->_aVars['sModule']): ?>
            <input type="hidden" name="val[privacy]" value="0">
<?php else: ?>
            <div id="js_song_privacy_holder">
                <div class="form-group">
                    <label><?php echo _p('privacy'); ?>:</label>
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'music.control_who_can_see_these_song_s','default_privacy' => 'music.default_privacy_setting')); ?>
                </div>
            </div>
<?php endif; ?>
		<div id="js_music_upload_song">

<?php Phpfox::getBlock('core.upload-form', array('type' => 'music_song')); ?>

            <div class="alert alert-danger text-center mb-2 mt-2" id="js_error_message" style="display: none"></div>
            <div style="display: none" id="js_total_success_holder">
                <b><?php echo _p('successfully_uploads'); ?>: <span id="js_total_success">0</span> <?php echo _p('song_s'); ?></b>
            </div>

            <div class="form-group">
                <input type="hidden" name="max_file" id="js_max_file_upload" value="<?php echo $this->_aVars['iMaxFileUpload']; ?>">
            </div>

            <div class="form-group">

                <ul id="js_music_uploaded_section" class="music-uploaded-control item-container">
                </ul>
            </div>

            <p class="help-block">
                <a href="javascript:void(0);" id="js_done_upload" style="display: none !important;" class="btn btn-primary"><?php echo _p('finish'); ?></a>
            </p>
		</div>
<?php else: ?>
            <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.upload');
						?>
           <div class="form-group">
                <button onclick="$Core.music.editSong(this,false); return false;" id="js_music_song_submit_<?php echo $this->_aVars['aForms']['song_id']; ?>" data-id="<?php echo $this->_aVars['aForms']['song_id']; ?>" class="button btn-primary"><?php echo _p('update'); ?></button>
            </div>
<?php endif; ?>
	
</form>

</div>

