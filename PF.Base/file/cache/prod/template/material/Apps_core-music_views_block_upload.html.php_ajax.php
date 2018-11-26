<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:35 am */ ?>
<?php 
     
?>

<?php if (isset ( $this->_aVars['bIsEditAlbum'] ) && $this->_aVars['bIsEditAlbum'] && ! isset ( $this->_aVars['bIsUploaded'] )): ?>
    <div id="js_music_upload_song" class="music-share-song">
        <div class="form-group">
            <label for=""><?php echo _p('genre'); ?>:</label>
                
            <select class="form-control" multiple="multiple" name="val[genre][]">
<?php if (count((array)$this->_aVars['aGenres'])):  foreach ((array) $this->_aVars['aGenres'] as $this->_aVars['aGenre']): ?>
                    <option value="<?php echo $this->_aVars['aGenre']['genre_id']; ?>" <?php if (isset ( $this->_aVars['aForms']['genres'] ) && in_array ( $this->_aVars['aGenre']['genre_id'] , $this->_aVars['aForms']['genres'] )): ?>selected<?php endif; ?>>
<?php echo _p($this->_aVars['aGenre']['name']); ?>
                    </option>
<?php endforeach; endif; ?>
            </select>
        </div>
        <input type="hidden" name="val[time_stamp]" id="js_upload_time_stamp" value="<?php echo $this->_aVars['iTimestamp']; ?>"/>

<?php Phpfox::getBlock('core.upload-form', array('type' => 'music_song','id' => '')); ?>

        <div class="alert alert-danger text-center mb-2" id="js_error_message" style="display: none"></div>
            <div style="display: none" id="js_total_success_holder">
                <b><?php echo _p('successfully_uploads'); ?>: <span id="js_total_success">0</span> <?php echo _p('song_s'); ?></b>
            </div>
        <div class="form-group">
            <input type="hidden" name="max_file" id="js_max_file_upload" value="<?php echo $this->_aVars['iMaxFileUpload']; ?>">
        </div>

        <ul id="js_music_uploaded_section" class="music-uploaded-control item-container">
        </ul>

        <p class="help-block">
            <a href="javascript:void(0);" id="js_done_upload" style="display: none !important;" class="btn btn-primary"><?php echo _p('finish'); ?></a>
        </p>
    </div>
<?php if ($this->_aVars['bIsEdit']): ?>
        <input type="hidden" name="val[inline]" value="1" />
        <input type="hidden" name="val[album_id]" id="js_album_id" value="<?php echo $this->_aVars['aForms']['album_id']; ?>" />
<?php endif;  else: ?>

    <div class="js_uploaded_file_holder music-item item-outer" id="js_file_holder_<?php echo $this->_aVars['aForms']['song_id']; ?>">
<?php if (! empty ( $this->_aVars['aForms']['error'] ) && ! $this->_aVars['bIsEdit']): ?>
            <div class="item-inner">
                <p class="text-danger"><?php echo $this->_aVars['aForms']['title']; ?> - <?php echo $this->_aVars['aForms']['error']; ?></p>
                <div class="item-actions">
                    <a href="javascript:void(0)" onclick="$(this).parents('.js_uploaded_file_holder').remove();"><i class="ico ico-close"></i></a>
                </div>
            </div>
<?php else: ?>
<?php if (! $this->_aVars['bIsEdit']): ?>
            <div class="item-inner">
                <span id="js_song_image_<?php echo $this->_aVars['aForms']['song_id']; ?>" class="music-icon-upload"><i class="ico ico-music-note-o"></i></span>
                <a class="item-title " id="js_song_title_<?php echo $this->_aVars['aForms']['song_id']; ?>" href="<?php echo Phpfox::permalink('music', $this->_aVars['aForms']['song_id'], $this->_aVars['aForms']['title'], false, null, (array) array (
)); ?>"><?php echo $this->_aVars['aForms']['title']; ?></a>
                <div class="item-actions">
<?php if (isset ( $this->_aVars['aForms']['canEdit'] ) && $this->_aVars['aForms']['canEdit']): ?>
                        <a href="javascript:void(0)" title="<?php echo _p('edit'); ?>" onclick="$Core.music.showForm(this);" class="js_show_form"><i class="ico ico-compose"></i></a>
                        <a href="javascript:void(0)" title="<?php echo _p('close'); ?>" style="display: none;" onclick="$Core.music.hideForm(this);" class="js_hide_form" data-id=<?php echo $this->_aVars['aForms']['song_id']; ?>><i class="ico ico-compose"></i></a>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aForms']['canDelete'] ) && $this->_aVars['aForms']['canDelete']): ?>
                        <a href="javascript:void(0)" class="delete" title="<?php echo _p('delete_this_song'); ?>" onclick="$Core.music.deleteSongInAddForm(this);" data-id="<?php echo $this->_aVars['aForms']['song_id']; ?>" data-album-id="<?php echo $this->_aVars['aForms']['album_id']; ?>"><i class="ico ico-close"></i></a>
<?php endif; ?>
                </div>
            </div>
<?php endif; ?>

            <div class="js_music_form_holder" <?php if (! $this->_aVars['bIsEdit']): ?>style="display: none;"<?php endif; ?>>
<?php if (! $this->_aVars['bIsEdit']): ?>
                    <div class="valid_message" id="js_music_upload_valid_message" style="display:none;">
<?php echo _p('successfully_uploaded_the_mp3'); ?>
                    </div>
<?php endif; ?>
                <div>
                    <input type="hidden" name="val[attachment<?php if (! $this->_aVars['bIsEdit']): ?>_<?php echo $this->_aVars['aForms']['song_id'];  endif; ?>]" class="js_attachment" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['attachment']) : (isset($this->_aVars['aForms']['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['attachment']) : '')); ?>
" />
                </div>
<?php if (isset ( $this->_aVars['sModule'] ) && $this->_aVars['sModule']): ?>

<?php else: ?>
                    <div id="js_custom_privacy_input_holder<?php if (! $this->_aVars['bIsEdit']): ?>_<?php echo $this->_aVars['aForms']['song_id'];  endif; ?>">
<?php if ($this->_aVars['bIsEdit'] && Phpfox ::isModule('privacy')): ?>
<?php if (isset ( $this->_aVars['bIsEditAlbum'] )): ?>
<?php Phpfox::getBlock('privacy.build', array('privacy_item_id' => $this->_aVars['aForms']['album_id'],'privacy_module_id' => 'music_album')); ?>
<?php else: ?>
<?php Phpfox::getBlock('privacy.build', array('privacy_item_id' => $this->_aVars['aForms']['song_id'],'privacy_module_id' => 'music_song')); ?>
<?php endif; ?>
<?php endif; ?>
                    </div>
<?php endif; ?>
                <div class="music-app info-each-item">
                    <div class="form-group" <?php if ($this->_aVars['bIsEdit'] && ! $this->_aVars['aForms']['album_id'] && ! $this->_aVars['bCanSelectAlbum']): ?>style="display:none;"<?php endif; ?>>
                        <label><?php echo _p('album'); ?>:</label>
                        <select name="<?php if (! $this->_aVars['bIsEdit']): ?>val[<?php echo $this->_aVars['aForms']['song_id']; ?>][album_id]<?php else: ?>val[album_id]<?php endif; ?>" id="js_music_album_select" class="form-control" <?php if (isset ( $this->_aVars['bCanSelectAlbum'] ) && ! $this->_aVars['bCanSelectAlbum']): ?>disabled<?php endif; ?> onchange="if (empty(this.value)) { $(this).closest('.js_music_form_holder').find('.js_song_privacy_holder').slideDown(); } else { $(this).closest('.js_music_form_holder').find('.js_song_privacy_holder').slideUp(); }">
<?php if (! isset ( $this->_aVars['bCanSelectAlbum'] ) || $this->_aVars['bCanSelectAlbum']): ?><option value="0"><?php echo _p('select_an_album'); ?>:</option><?php endif; ?>
<?php if (count((array)$this->_aVars['aAlbums'])):  foreach ((array) $this->_aVars['aAlbums'] as $this->_aVars['aAlbum']): ?>
                                <option value="<?php echo $this->_aVars['aAlbum']['album_id']; ?>" <?php if (isset ( $this->_aVars['aForms']['album_id'] ) && ( $this->_aVars['aForms']['album_id'] == $this->_aVars['aAlbum']['album_id'] )): ?>selected<?php endif; ?>><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aAlbum']['name']); ?></option>
<?php endforeach; endif; ?>
                        </select>
                    </div>

                    <div class="form-group song_name">
                        <label>*<?php echo _p('song_name'); ?>:</label>
<?php if (! $this->_aVars['bIsEdit']): ?>
                            <input class="form-control close_warning js_song_name" type="text" name="val[<?php echo $this->_aVars['aForms']['song_id']; ?>][title]" value="<?php echo $this->_aVars['aForms']['title']; ?>" size="30" id="title_<?php echo $this->_aVars['aForms']['song_id']; ?>" />
<?php else: ?>
                            <input class="form-control close_warning" type="text" name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" size="30" id="title" />
<?php endif; ?>
                    </div>

                    <div class="form-group song_name">
                         <label><?php echo _p('description'); ?>:</label>
<?php if (! $this->_aVars['bIsEdit']): ?>
                            <div class="editor_holder"><?php echo Phpfox::getLib('phpfox.editor')->get('description_'.$this->_aVars['aForms']['song_id'], array (
  'id' => '\'description_\'.$this->_aVars[\'aForms\'][\'song_id\']',
));  Phpfox::getBlock('attachment.share', array('id'=> 'description_'.$this->_aVars['aForms']['song_id'])); ?></div>
<?php else: ?>
                            <div class="editor_holder"><?php echo Phpfox::getLib('phpfox.editor')->get('description', array (
  'id' => 'description',
));  Phpfox::getBlock('attachment.share', array('id'=> 'description')); ?></div>
<?php endif; ?>
                    </div>

                    <div class="_form_extra">
<?php if (! isset ( $this->_aVars['bIsEditAlbum'] )): ?>
                            <div class="form-group" style="display:none;">
                                <label>
<?php if (isset ( $this->_aVars['aUploadAlbums'] ) && count ( $this->_aVars['aUploadAlbums'] )): ?>
<?php echo _p('album'); ?>:
<?php else: ?>
<?php echo _p('album_name'); ?>:
<?php endif; ?>
                                </label>
<?php if (isset ( $this->_aVars['aUploadAlbums'] ) && count ( $this->_aVars['aUploadAlbums'] )): ?>
                                    <select class="form-control" name="val[<?php echo $this->_aVars['aForms']['song_id']; ?>][album_id]" id="music_album_id_select" onchange="if (empty(this.value)) { $('#js_song_privacy_holder').slideDown(); } else { $('#js_song_privacy_holder').slideUp(); }">
                                        <option value=""><?php echo _p('select'); ?>:</option>
<?php if (count((array)$this->_aVars['aUploadAlbums'])):  foreach ((array) $this->_aVars['aUploadAlbums'] as $this->_aVars['aAlbum']): ?>
                                            <option value="<?php echo $this->_aVars['aAlbum']['album_id']; ?>"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('album_id') && in_array('album_id', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['album_id'])
								&& $aParams['album_id'] == $this->_aVars['aAlbum']['album_id'])

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['album_id'])
									&& !isset($aParams['album_id'])
									&& (($this->_aVars['aForms']['album_id'] == $this->_aVars['aAlbum']['album_id']) || (is_array($this->_aVars['aForms']['album_id']) && in_array($this->_aVars['aAlbum']['album_id'], $this->_aVars['aForms']['album_id']))))
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							?>
><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aAlbum']['name']); ?></option>
<?php endforeach; endif; ?>
                                    </select>
                                    <div class="extra_info_link"><a href="#" onclick="$('#js_create_new_music_album').show(); $('#js_create_new_music_album input').focus(); return false;"><?php echo _p('or_create_a_new_album'); ?></a></div>
<?php endif; ?>
                            </div>
<?php endif; ?>

                        <div class="form-group song_name">
                            <label><?php echo _p('genre'); ?>:</label>
                            <select class="form-control" multiple="multiple" name="<?php if (! $this->_aVars['bIsEdit']): ?>val[<?php echo $this->_aVars['aForms']['song_id']; ?>][genre][]<?php else: ?>val[genre][]<?php endif; ?>">
<?php if (count((array)$this->_aVars['aGenres'])):  foreach ((array) $this->_aVars['aGenres'] as $this->_aVars['aGenre']): ?>
                                <option value="<?php echo $this->_aVars['aGenre']['genre_id']; ?>" <?php if (in_array ( $this->_aVars['aGenre']['genre_id'] , $this->_aVars['aForms']['genres'] )): ?>selected<?php endif; ?>>
<?php echo _p($this->_aVars['aGenre']['name']); ?>
                                </option>
<?php endforeach; endif; ?>
                            </select>
                        </div>

                        <div class="form-group" id="js_upload_photo_section_<?php echo $this->_aVars['aForms']['song_id']; ?>">
                            <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.upload-photo');
						?>
                        </div>

<?php if (isset ( $this->_aVars['sModule'] ) && $this->_aVars['sModule']): ?>
<?php else: ?>
<?php if (! isset ( $this->_aVars['bIsEditAlbum'] ) && Phpfox ::isModule('privacy')): ?>
                            <div id="js_song_privacy_holder" class="js_song_privacy_holder" <?php if ($this->_aVars['aForms']['album_id'] > 0): ?>style="display:none"<?php endif; ?>>
                                <div class="form-group">
                                    <label><?php echo _p('privacy'); ?>:</label>
<?php if (! $this->_aVars['bIsEdit']): ?>
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_array' => $this->_aVars['aForms']['song_id'],'privacy_info' => 'music.control_who_can_see_this_song','default_privacy' => 'music.default_privacy_setting','privacy_custom_id' => 'js_custom_privacy_input_holder_'.$this->_aVars['aForms']['song_id'].'')); ?>
<?php else: ?>
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'music.control_who_can_see_this_song','default_privacy' => 'music.default_privacy_setting')); ?>
<?php endif; ?>
                                </div>
                            </div>
<?php endif; ?>
<?php endif; ?>
<?php if (! $this->_aVars['bIsEdit'] && isset ( $this->_aVars['aForms']['canEdit'] ) && $this->_aVars['aForms']['canEdit']): ?>
                            <div class="form-group">
                                <buton class="btn btn-primary" type="submit" id="js_music_song_submit_<?php echo $this->_aVars['aForms']['song_id']; ?>" onclick="$Core.music.editSong(this,true); return false;" data-id="<?php echo $this->_aVars['aForms']['song_id']; ?>"><?php echo _p('update'); ?></buton>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
<?php endif; ?>
    </div>
<?php endif; ?>
