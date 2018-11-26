<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:35 am */ ?>
<article class="music_row item-music" id="js_controller_music_track_<?php echo $this->_aVars['aSong']['song_id']; ?>" data-songid="<?php echo $this->_aVars['aSong']['song_id']; ?>" xmlns="http://www.w3.org/1999/html">
    <div class="item-outer">
        <div class="item-media">
            <a class="music-bg-thumb thumb-border" href="<?php echo Phpfox::permalink('music', $this->_aVars['aSong']['song_id'], $this->_aVars['aSong']['title'], false, null, (array) array (
)); ?>"
                style="background-image: url(
<?php if (! empty ( $this->_aVars['aSong']['image_path'] )): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('return_url' => "true",'server_id' => $this->_aVars['aSong']['image_server_id'],'path' => 'music.url_image','file' => $this->_aVars['aSong']['image_path'],'suffix' => '_200_square','max_width' => '200','max_height' => '200')); ?>
<?php else: ?>
<?php echo Phpfox::getParam('music.default_song_photo'); ?>
<?php endif; ?>
                )">
            </a>
            
            <span class="button-play hide" onclick="$Core.music.playSongRow(this)"><i class="ico ico-play-o"></i></span>
            <div class="flag_style_parent">
<?php if (isset ( $this->_aVars['sMusicView'] ) && $this->_aVars['sMusicView'] == 'my' && $this->_aVars['aSong']['view_id'] == 1): ?>
                <div class="sticky-label-icon sticky-pending-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-clock-o"></i>
                </div>
<?php endif; ?>
<?php if ($this->_aVars['aSong']['is_sponsor']): ?>
                <div class="sticky-label-icon sticky-sponsored-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-sponsor"></i>
                </div>
<?php endif; ?>
<?php if ($this->_aVars['aSong']['is_featured']): ?>
                <div class="sticky-label-icon sticky-featured-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-diamond"></i>
                </div>
<?php endif; ?>
            </div>
        </div>

        <div class="item-inner <?php if (! isset ( $this->_aVars['aSong']['is_in_feed'] ) && $this->_aVars['aSong']['hasPermission']): ?>item-manage<?php endif; ?>">
            <div class="item-title mt-2">
                <a class="fw-bold" href="<?php echo Phpfox::permalink('music', $this->_aVars['aSong']['song_id'], $this->_aVars['aSong']['title'], false, null, (array) array (
)); ?>">
<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aSong']['title']); ?>
                </a>
            </div>

            <div class="item-info">
                <div class="left">
<?php if (isset ( $this->_aVars['aSong']['genres'] ) && $this->_aVars['iTotal'] = count ( $this->_aVars['aSong']['genres'] )): ?>
                        <div class="item-categories">
                            <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.song-genres');
						?>
                        </div>
<?php endif; ?>
                    <div class="item-info-inner">
<?php if (! isset ( $this->_aVars['aSong']['is_in_feed'] )): ?>
                        <div class="item-author">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aSong'],'suffix' => '_120_square')); ?>
                            <div class="pl-1">
                                <span class="user_info"><?php echo _p('by'); ?> <?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aSong']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aSong']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aSong']['user_name'], ((empty($this->_aVars['aSong']['user_name']) && isset($this->_aVars['aSong']['profile_page_id'])) ? $this->_aVars['aSong']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aSong']['user_id'], $this->_aVars['aSong']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aSong']['user_id']) ? '' : '</a>') . '</span>'; ?></span>
                                <span class="time_info"><?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aSong']['time_stamp']); ?></span>
                            </div>
                        </div>
<?php endif; ?>
                    </div>
                </div>
                <div class="item-statistic dot-separate">
                    <span>
<?php if ($this->_aVars['aSong']['total_view'] != 1): ?>
<?php echo _p('music_total_views', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_view']))); ?>
<?php else: ?>
<?php echo _p('music_total_view', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_view']))); ?>
<?php endif; ?>
                    </span>
                    <span>
<?php if ($this->_aVars['aSong']['total_play'] != 1): ?>
<?php echo _p('music_total_plays', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_play']))); ?>
<?php else: ?>
<?php echo _p('music_total_play', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_play']))); ?>
<?php endif; ?>
                    </span>
                </div>
            </div>

            <span class="button-play" onclick="$Core.music.playSongRow(this)"><i class="ico ico-play-o"></i></span>
        </div>
        
<?php if (! isset ( $this->_aVars['aSong']['is_in_feed'] )): ?>
            <div class="<?php if ($this->_aVars['bShowModerator']): ?> moderation_row<?php endif; ?>">
<?php if (! empty ( $this->_aVars['bShowModerator'] )): ?>
                   <label class="item-checkbox">
                       <input type="checkbox" class="js_global_item_moderate" name="item_moderate[]" value="<?php echo $this->_aVars['aSong']['song_id']; ?>" id="check<?php echo $this->_aVars['aSong']['song_id']; ?>" />
                       <i class="ico ico-square-o"></i>
                   </label>
<?php endif; ?>
            </div>
<?php endif; ?>
        <div class="item-option">
<?php if (! isset ( $this->_aVars['aSong']['is_in_feed'] )): ?>
<?php if ($this->_aVars['aSong']['hasPermission']): ?>
                <div class="dropdown js_music_dropdown_add_to_playlist item-option-playlist">
                    <span role="button" class="row_edit_bar_action" data-toggle="dropdown" data-song-id="<?php echo $this->_aVars['aSong']['song_id']; ?>" onclick="$Core.music.loadUserPlaylist(this);">
                        <i class="ico ico-list-plus"></i>
                    </span>
                    <ul class="dropdown-menu dropdown-menu-right js-music-prevent-browser-scroll">
                        <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.add-to-playlist');
						?>
                    </ul>
                </div>
                <div class="dropdown">
                    <span role="button" class="row_edit_bar_action" data-toggle="dropdown">
                        <i class="ico ico-gear-o"></i>
                    </span>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <?php
						Phpfox::getLib('template')->getBuiltFile('music.block.menu');
						?>
                    </ul>
                </div>
                
<?php endif; ?>
<?php endif; ?>
        </div>
    </div>

    <div class="item-player music_player">
        <div class="audio-player dont-unbind-children js_player_holder <?php if (! $this->_aVars['aSong']['canDownload']): ?>disable-download<?php endif; ?>">
            <div class="js_music_controls">
                <a href="javascript:void(0)" class="js_music_repeat" title="<?php echo _p('repeat'); ?>">
                    <i class="ico ico-play-repeat-o"></i>
               </a>
<?php if ($this->_aVars['aSong']['canDownload']): ?>
                <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.download', array('id' => $this->_aVars['aSong']['song_id'])); ?>" class="no_ajax_link download" title="<?php echo _p('download'); ?>">
                    <span>
                        <i class="ico ico-download-alt" aria-hidden="true"></i>
                    </span>
                </a>
<?php endif; ?>
            </div>
            <audio class="js_song_player" src="<?php echo $this->_aVars['aSong']['song_path']; ?>" type="audio/mp3" controls="controls"></audio>
        </div>
    </div>
</article>
