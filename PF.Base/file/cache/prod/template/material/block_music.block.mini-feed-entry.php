<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 10:38 am */ ?>
<article class="music_row item-music item-feed-music-song" id="js_controller_music_track_<?php echo $this->_aVars['aSong']['song_id']; ?>" data-songid="<?php echo $this->_aVars['aSong']['song_id']; ?>" xmlns="http://www.w3.org/1999/html">
    <div class="item-outer <?php if (! isset ( $this->_aVars['aSong']['is_in_feed'] ) && $this->_aVars['aSong']['hasPermission']): ?>item-manage<?php endif; ?>">
        <div class="item-media">
            <span class="button-play" onclick="$Core.music.playSongRow(this)"><i class="ico ico-play-o"></i></span>
        </div>
        <div class="item-inner">
            <div class="item-title">
                <a class="" href="<?php if ($this->_aVars['bIsSponsorFeed'] && $this->_aVars['iSponsorId']):  echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('view' => $this->_aVars['iSponsorId']));  else:  echo Phpfox::permalink('music', $this->_aVars['aSong']['song_id'], $this->_aVars['aSong']['title'], false, null, (array) array (
));  endif; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aSong']['title']); ?></a>
            </div>
        </div>
        <div class="feed-music-action ">
            <div class="item-statistic dot-separate">
<?php if ($this->_aVars['aSong']['total_play'] != 1): ?>
<?php echo _p('music_total_plays', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_play']))); ?>
<?php else: ?>
<?php echo _p('music_total_play', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_play']))); ?>
<?php endif; ?>
            </div>
            <div class="feed-music-action-inner">
                <a class="feed-music-action-icon" href="<?php echo Phpfox::permalink('music', $this->_aVars['aSong']['song_id'], $this->_aVars['aSong']['title'], false, null, (array) array (
)); ?>"><i class="ico ico-external-link"></i></a>
                <div class="dropdown js_music_dropdown_add_to_playlist item-option-playlist">
                        <span role="button" class="row_edit_bar_action feed-music-action-icon" data-toggle="dropdown" data-song-id="<?php echo $this->_aVars['aSong']['song_id']; ?>" onclick="$Core.music.loadUserPlaylist(this);">
                            <i class="ico ico-list-plus"></i>
                        </span>
                    <ul class="dropdown-menu dropdown-menu-right js-music-prevent-browser-scroll">
                        <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.add-to-playlist');
						?>
                    </ul>
                </div>
<?php if (Phpfox ::getUserParam('music.can_download_songs')): ?>
                    <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.download', array('id' => $this->_aVars['aSong']['song_id'])); ?>" class="feed-music-action-icon no_ajax_link download" title="<?php echo _p('download'); ?>">
                        <span>
                            <i class="ico ico-download-alt" aria-hidden="true"></i>
                        </span>
                    </a>
<?php endif; ?>
            </div>
            <div class="feed-music-action-more js_feed_music_action_more">
                <span class="item-icon"><i class="ico  ico-dottedmore-vertical-o"></i></span>
            </div>
        </div>
    </div>
    
    <div class="item-player music_player">
        <div class="audio-player dont-unbind-children js_player_holder  <?php if (! Phpfox ::getUserParam('music.can_download_songs')): ?>disable-download<?php endif; ?>">
            <div class="js_music_controls">
                <a href="javascript:void(0)" class="js_music_repeat ml-1" title="<?php echo _p('repeat'); ?>">
                    <i class="ico ico-play-repeat-o"></i>
                </a>
                
            </div>
            <audio class="js_song_player" src="<?php echo $this->_aVars['aSong']['song_path']; ?>" type="audio/mp3" controls="controls"></audio>
        </div>
    </div>
 
</article>
