<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 8:30 am */ ?>
<?php
    
?>
<div class="groups-block-members">
    <div class="item-group-search-header">
        <div class="item-group-search-member input-group">
            <input class="form-control" type="search" placeholder="<?php echo _p('search_member'); ?>"
                   data-app="core_groups" data-action-type="keyup" data-action="search_member"
                   data-result-container=".search-member-result" data-container=".search-member-result"
                   data-listing-container=".groups-member-listing" data-group-id="<?php echo $this->_aVars['iGroupId']; ?>"
            />
            <span class="input-group-btn" aria-hidden="true">
                <button class="btn " type="submit">
                     <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
    <div class="page_section_menu page_section_menu_header">
        <ul class="nav nav-tabs nav-justified">
            <li class="active">
                <a data-toggle="tab" href="#all" data-app="core_groups" data-action-type="click"
                   data-action="change_tab" data-tab="all" data-container=".groups-member-listing"
                   data-group-id="<?php echo $this->_aVars['iGroupId']; ?>" data-result-container=".search-member-result"
                >
<?php echo _p('all_members'); ?> <span class="member-count" id="all-members-count">(<?php echo $this->_aVars['iTotalMembers']; ?>)</span>
                </a>
            </li>
<?php if ($this->_aVars['bIsAdmin']): ?>
            <li>
                <a data-toggle="tab" href="#pending" data-app="core_groups" data-action-type="click"
                   data-action="change_tab" data-tab="pending" data-container=".groups-member-listing"
                   data-group-id="<?php echo $this->_aVars['iGroupId']; ?>" data-result-container=".search-member-result"
                >
<?php echo _p('pending_requests'); ?> <span class="member-count" id="pending-members-count">(<?php echo $this->_aVars['iTotalPendings']; ?>)</span>
                </a>
            </li>
<?php endif; ?>
<?php if (isset ( $this->_aVars['iTotalAdmins'] ) && $this->_aVars['bCanViewAdmins']): ?>
            <li>
                <a data-toggle="tab" href="#admin" data-app="core_groups" data-action-type="click"
                   data-action="change_tab" data-tab="admin" data-container=".groups-member-listing"
                   data-group-id="<?php echo $this->_aVars['iGroupId']; ?>" data-result-container=".search-member-result"
                >
<?php echo _p('group_admins'); ?> <span class="member-count" id="admin-members-count">(<?php echo $this->_aVars['iTotalAdmins']; ?>)</span>
                </a>
            </li>
<?php endif; ?>
        </ul>
    </div>

    <div class="tab-content groups-member-container groups-member-listing">
<?php Phpfox::getBlock('groups.search-member', array('tab' => 'all','group_id' => $this->_aVars['iGroupId'],'container' => '.groups-member-listing')); ?>
    </div>

    <div class="search-member-result groups-member-container hide"></div>
    <div class="groups-searching hide">
        <i class="fa fa-spinner fa-spin"></i>
    </div>
</div>

<?php if ($this->_aVars['bIsAdmin'] && $this->_aVars['iTotalMembers']):  Phpfox::getBlock('core.moderation');  endif; ?>
