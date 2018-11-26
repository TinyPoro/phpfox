<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:35 am */ ?>
<?php

?>
<div class="js_music_add_to_playlist_<?php echo $this->_aVars['aSong']['song_id']; ?> dropdown-menu-playlist" id="">
    <li class="dropdown-header">
<?php echo _p('add_to_playlist'); ?>
    </li>

    <li class="music-quick-list-playlist ">
        <div class="item-alert item-error js_music_add_to_playlist_error_<?php echo $this->_aVars['aSong']['song_id']; ?>" hidden></div>
        <div class="item-alert item-success js_music_add_to_playlist_success_<?php echo $this->_aVars['aSong']['song_id']; ?>" hidden></div>
        <div class="playlist-container js_music_list_playlist_<?php echo $this->_aVars['aSong']['song_id']; ?>">
<?php if (! empty ( $this->_aVars['isDetailPage'] )): ?>
<?php Phpfox::getBlock('music.user-playlist', array('song_id' => $this->_aVars['aSong']['song_id'])); ?>
<?php else: ?>
                <span class="form-spin-it p-1">
                    <i class="fa fa-spin fa-circle-o-notch"></i>
                </span>
<?php endif; ?>
        </div>
    </li>
    <li class="music-quick-add-playlist-title" data-song-id="<?php echo $this->_aVars['aSong']['song_id']; ?>" onclick="$Core.music.toggleQuickAddPlaylistForm(this);">
        <a data-id="<?php echo $this->_aVars['aSong']['song_id']; ?>">
<?php echo _p('add_to_new_playlist'); ?>
            <i class="pull-right ico ico-angle-down js_down" aria-hidden="true"></i>
            <i class="pull-right ico ico-angle-up js_up" aria-hidden="true" hidden></i>
        </a>
    </li>
    <li class="music-playlist-quick-add-form js_music_quick_add_playlist_form" style="display:none">
        <div class="js_music_playlist_quick_form_<?php echo $this->_aVars['aSong']['song_id']; ?>" id="" >
            <input type="text" name="name" class="js_music_quick_add_playlist_name form-control"/>
            <div class="music-quick-add-playlist-button">
                <button class="btn btn-primary btn-sm js_submit" data-song-id="<?php echo $this->_aVars['aSong']['song_id']; ?>" onclick="$Core.music.addPlaylist(this);">
                    <span><?php echo _p('Create'); ?></span>
                </button>
                <button class="btn btn-default btn-sm js_cancel" data-song-id="<?php echo $this->_aVars['aSong']['song_id']; ?>" onclick="$Core.music.toggleQuickAddPlaylistForm(this);">
                    <span><?php echo _p('Cancel'); ?></span>
                </button>
            </div>
        </div>
    </li>
</div>

