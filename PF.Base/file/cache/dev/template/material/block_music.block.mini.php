<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 26, 2018, 4:31 am */ ?>
<?php
    
?>

<div class="music_row album-item" data-songid="<?php echo $this->_aVars['aSong']['song_id']; ?>" xmlns="http://www.w3.org/1999/html">
    <div class="item-outer song">
        <div class="item-media">
            <div class="item-media-inner">
                <span class="music-bg-thumb thumb-border" onclick="$Core.music.playSongRow(this)" style="background-image: url(
<?php if ($this->_aVars['aSong']['image_path']): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('return_url' => "true",'server_id' => $this->_aVars['aSong']['image_server_id'],'path' => 'music.url_image','file' => $this->_aVars['aSong']['image_path'],'suffix' => '')); ?>
<?php else: ?>
<?php echo $this->_aVars['sDefaultThumbnail']; ?>
<?php endif; ?>
                    )"><span class="music-overlay"><i class="ico ico-play-circle-o"></i></span></span>
            </div>
        </div>

        <div class="item-inner song">
            <div class="item-title">
                <a href="<?php if (empty ( $this->_aVars['aSong']['sponsor_id'] )):  echo Phpfox::permalink('music', $this->_aVars['aSong']['song_id'], $this->_aVars['aSong']['title'], false, null, (array) array (
));  else:  echo Phpfox::getLib('phpfox.url')->makeUrl('ad.sponsor', array('view' => $this->_aVars['aSong']['sponsor_id']));  endif; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aSong']['title']); ?></a>
            </div>

            <div class="item-statistic">
                <span><?php echo _p('by'); ?> <?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aSong']['user_name'] . '">' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aSong']['user_id']) ? '' : '<a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aSong']['user_name'], ((empty($this->_aVars['aSong']['user_name']) && isset($this->_aVars['aSong']['profile_page_id'])) ? $this->_aVars['aSong']['profile_page_id'] : null))) . '">') . '' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aSong']['user_id'], $this->_aVars['aSong']['full_name']), 0) . '' . (Phpfox::getService('user.block')->isBlocked(null, $this->_aVars['aSong']['user_id']) ? '' : '</a>') . '</span>'; ?></span>
                
                <span>
<?php if ($this->_aVars['aSong']['total_play'] != 1): ?>
<?php echo _p('music_total_plays', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_play']))); ?>
<?php else: ?>
<?php echo _p('music_total_play', array('total' => Phpfox::getService('core.helper')->shortNumber($this->_aVars['aSong']['total_play']))); ?>
<?php endif; ?>
                </span>
            </div>
        </div>
    </div>
    <div class="item-player music_player hide">
        <div class="audio-player dont-unbind-children js_player_holder">
            <audio class="js_song_player" src="<?php echo $this->_aVars['aSong']['song_path']; ?>" type="audio/mp3" controls="controls"></audio>
        </div>
    </div>
</div>
