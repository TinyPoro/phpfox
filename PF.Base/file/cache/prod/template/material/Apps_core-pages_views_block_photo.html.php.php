<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:32 am */ ?>
<?php 

?>
<div class="pages-profile-banner">
    <div class="profiles_banner <?php if ($this->_aVars['aCoverPhoto'] !== false): ?>has_cover<?php endif; ?>">
        <div class="profiles_banner_bg">
            <div class="cover_bg"></div>
<?php if ($this->_aVars['aCoverPhoto']): ?>
            <a href="<?php echo Phpfox::permalink('photo', $this->_aVars['aCoverImage']['photo_id'], $this->_aVars['aCoverImage']['title'], false, null, (array) array (
)); ?>">
<?php endif; ?>
                <div class="cover" id="cover_bg_container">
<?php if ($this->_aVars['aCoverPhoto']): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aCoverPhoto']['server_id'],'path' => 'photo.url_photo','file' => $this->_aVars['aCoverPhoto']['destination'],'suffix' => '_1024','title' => $this->_aVars['aCoverPhoto']['title'],'class' => "visible-lg cover_photo")); ?>
                    <span style="background-image: url(<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aCoverPhoto']['server_id'],'path' => 'photo.url_photo','file' => $this->_aVars['aCoverPhoto']['destination'],'suffix' => '_1024','return_url' => true)); ?>)" class="hidden-lg"></span>
<?php else: ?>
                    <span style="background-image: url(<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('file' => $this->_aVars['sDefaultCoverPath'],'return_url' => true)); ?>)"></span>
<?php endif; ?>
                </div>
<?php if ($this->_aVars['aCoverPhoto']): ?>
            </a>
<?php endif; ?>
            <div class="item-icon-flag">
<?php if ($this->_aVars['aPage']['is_sponsor']): ?>
                <div class="sticky-label-icon sticky-sponsored-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-sponsor"></i>
                </div>
<?php endif; ?>
<?php if ($this->_aVars['aPage']['is_featured']): ?>
                <div class="sticky-label-icon sticky-featured-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-diamond"></i>
                </div>
<?php endif; ?>
<?php if (( isset ( $this->_aVars['sView'] ) && $this->_aVars['sView'] == 'my' && $this->_aVars['aPage']['view_id'] == 1 )): ?>
                <div class="sticky-label-icon sticky-pending-icon">
                    <span class="flag-style-arrow"></span>
                    <i class="ico ico-clock-o"></i>
                </div>
<?php endif; ?>
            </div>
        </div>

<?php if ($this->_aVars['bCanChangeCover']): ?>
        <div class="dropdown change-cover-block">
            <a role="button" data-toggle="dropdown" class=" btn btn-primary btn-gradient" id="js_change_cover_photo">
                <span class="ico ico-camera"></span>
            </a>

            <ul class="dropdown-menu">
                <li class="cover_section_menu_item">
                    <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('pages.'.$this->_aVars['aPage']['page_id']); ?>photo">
<?php echo _p('choose_from_photos'); ?>
                    </a>
                </li>
                <li class="cover_section_menu_item">
                    <a href="#" onclick="$Core.box('profile.logo', 500, 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>'); return false;">
<?php echo _p('upload_photo'); ?>
                    </a>
                </li>
<?php if (! empty ( $this->_aVars['aPage']['cover_photo_id'] )): ?>
                <li class="cover_section_menu_item hidden-sm hidden-md hidden-xs">
                    <a role="button" onclick="repositionCoverPhoto('pages',<?php echo $this->_aVars['aPage']['page_id']; ?>)">
<?php echo _p('reposition'); ?>
                    </a>
                </li>
                <li class="cover_section_menu_item">
                    <a href="#" onclick="$.ajaxCall('pages.removeLogo', 'page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>'); return false;">
<?php echo _p('remove_cover_photo'); ?>
                    </a>
                </li>
<?php endif; ?>
            </ul>
        </div>
<?php endif; ?>

        <div class="profile-info-block">
            <div class="profile-image">
                <div class="profile_image_holder">
<?php if (Phpfox ::isModule('photo') && isset ( $this->_aVars['aProfileImage'] ) && $this->_aVars['aProfileImage']['photo_id']): ?>
                    <a href="<?php echo Phpfox::permalink('photo', $this->_aVars['aProfileImage']['photo_id'], $this->_aVars['aProfileImage']['title'], false, null, (array) array (
)); ?>">
                        <div class="img-wrapper">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aPage']['image_server_id'],'title' => $this->_aVars['aPage']['title'],'path' => 'pages.url_image','file' => $this->_aVars['aPage']['pages_image_path'],'suffix' => '_200_square','no_default' => false,'max_width' => 200,'time_stamp' => true)); ?>
                        </div>
                    </a>
<?php else: ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('thickbox' => true,'server_id' => $this->_aVars['aPage']['image_server_id'],'title' => $this->_aVars['aPage']['title'],'path' => 'pages.url_image','file' => $this->_aVars['aPage']['pages_image_path'],'suffix' => '_200_square','no_default' => false,'max_width' => 200,'time_stamp' => true)); ?>
<?php endif; ?>

<?php if ($this->_aVars['bCanChangePhoto']): ?>
                    <form method="post" enctype="multipart/form-data" action="#" class="">
                        <label for="upload_avatar" class="btn-primary btn-gradient" onclick="$('#pages-profile-photo').trigger('click');">
                            <span class="ico ico-camera"></span>
                        </label>
                        <input type="file" name="image" accept="image/*" id="pages-profile-photo" data-url="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('pages.photo'); ?>" class="ajax_upload" data-custom="page_id=<?php echo $this->_aVars['aPage']['page_id']; ?>"/>
                    
</form>

<?php endif; ?>
                </div>
            </div>

            <div class="profile-info">
                <div class="profile-extra-info">
                    <h1 title="<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aPage']['title']); ?>"><a><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aPage']['title']); ?></a></h1>
                    <div class="profile-info-detail">
<?php if ($this->_aVars['aPage']['parent_category_name']): ?>
                        <a href="<?php echo $this->_aVars['aPage']['type_link']; ?>" class="">
<?php if (Phpfox ::isPhrase($this->_aVars['aPage']['parent_category_name'])): ?>
<?php echo _p($this->_aVars['aPage']['parent_category_name']); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPage']['parent_category_name']); ?>
<?php endif; ?>
                        </a> »
<?php endif; ?>
<?php if ($this->_aVars['aPage']['category_name']): ?>
                        <a href="<?php echo $this->_aVars['aPage']['category_link']; ?>" class="">
<?php if (Phpfox ::isPhrase($this->_aVars['aPage']['category_name'])): ?>
<?php echo _p($this->_aVars['aPage']['category_name']); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPage']['category_name']); ?>
<?php endif; ?>
                        </a> -
<?php endif; ?>
                        <span class="">
<?php echo $this->_aVars['aPage']['total_like']; ?> <?php if ($this->_aVars['aPage']['total_like'] >= 2): ?> <?php echo _p('likes');  else:  echo _p('like');  endif; ?>
                    </span>
                    </div>
                </div>

                <div class="profile-actions">
<?php if (( Phpfox ::getUserParam('pages.can_edit_all_pages') || $this->_aVars['aPage']['is_admin'] )): ?>
                    <div class="profile-action-block profiles-owner-actions">
<?php if (isset ( $this->_aVars['aSubPagesMenus'] ) && count ( $this->_aVars['aSubPagesMenus'] )): ?>
<?php if (count((array)$this->_aVars['aSubPagesMenus'])):  $this->_aPhpfoxVars['iteration']['submenu'] = 0;  foreach ((array) $this->_aVars['aSubPagesMenus'] as $this->_aVars['iKey'] => $this->_aVars['aSubMenu']):  $this->_aPhpfoxVars['iteration']['submenu']++; ?>

                        <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aSubMenu']['url']); ?>" class="btn btn-success">
<?php if (( isset ( $this->_aVars['aSubMenu']['title'] ) )): ?>
<?php echo $this->_aVars['aSubMenu']['title']; ?>
<?php else: ?>
<?php echo _p($this->_aVars['aSubMenu']['var_name']); ?>
<?php endif; ?>
                        </a>
<?php endforeach; endif; ?>
<?php endif; ?>
                    </div>
<?php endif; ?>
                    <div class="profile-action-block profiles-viewer-actions">
                        <?php
						Phpfox::getLib('template')->getBuiltFile('pages.block.joinpage');
						?>

<?php if ($this->_aVars['aPage']['showItemActions'] || $this->_aVars['bCanClaim']): ?>
                        <div class="dropdown">
                            <a class="btn" role="button" data-toggle="dropdown">
                                <span class="ico ico-dottedmore-o"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <?php
						Phpfox::getLib('template')->getBuiltFile('pages.block.link');
						?>
                            </ul>
                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profiles-menu set_to_fixed">
        <ul data-component="menu">
            <div class="overlay"></div>
            <li class="profile-image-holder">
                <a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('pages.'.$this->_aVars['aPage']['page_id']); ?>">
<?php if (Phpfox ::isModule('photo') && isset ( $this->_aVars['aProfileImage'] ) && $this->_aVars['aProfileImage']['photo_id']): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aPage']['image_server_id'],'title' => $this->_aVars['aPage']['title'],'path' => 'pages.url_image','file' => $this->_aVars['aPage']['pages_image_path'],'suffix' => '_200_square','no_default' => false,'max_width' => 32,'time_stamp' => true)); ?>
<?php else: ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('thickbox' => true,'server_id' => $this->_aVars['aPage']['image_server_id'],'title' => $this->_aVars['aPage']['title'],'path' => 'pages.url_image','file' => $this->_aVars['aPage']['pages_image_path'],'suffix' => '_200_square','no_default' => false,'max_width' => 32,'time_stamp' => true)); ?>
<?php endif; ?>
                </a>
            </li>
<?php if (count((array)$this->_aVars['aPageMenus'])):  foreach ((array) $this->_aVars['aPageMenus'] as $this->_aVars['aPageMenu']): ?>
            <li>
                <a href="<?php echo $this->_aVars['aPageMenu']['url']; ?>" <?php if (! empty ( $this->_aVars['aPageMenu']['is_active'] )): ?>class="active"<?php endif; ?>>
<?php if (( isset ( $this->_aVars['aPageMenu']['menu_icon'] ) )): ?>
                    <span class="<?php echo $this->_aVars['aPageMenu']['menu_icon']; ?>"></span>
<?php else: ?>
                    <span class="ico ico-calendar-star-o"></span>
<?php endif; ?>
                    <span>
<?php echo $this->_aVars['aPageMenu']['phrase']; ?>
                </span>
                </a>
            </li>
<?php endforeach; endif; ?>
            <li class="dropdown dropdown-overflow hide explorer">
                <a data-toggle="dropdown" role="button">
                    <span class="ico ico-dottedmore-o"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                </ul>
            </li>
        </ul>
<?php (($sPlugin = Phpfox_Plugin::get('pages.block_photo_menus')) ? eval($sPlugin) : false); ?>
    </div>
</div>
<?php if (isset ( $this->_aVars['iCoverPhotoPosition'] )): ?>
<style type="text/css">
	.profiles_banner_bg .cover img.cover_photo
	{
	position: relative;
	left: 0;
	top: <?php if (empty ( $this->_aVars['iCoverPhotoPosition'] )): ?>0<?php else:  echo $this->_aVars['iCoverPhotoPosition']; ?>px<?php endif; ?>;
	}
</style>
<?php endif; ?>
