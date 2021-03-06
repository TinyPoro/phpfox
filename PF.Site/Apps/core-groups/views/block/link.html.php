<?php
defined('PHPFOX') or exit('NO DICE!');
?>
{if $aPage.bCanEdit}
<li><a href="{url link='groups.add' id=$aPage.page_id}"><span class="ico ico-gear-form-o mr-1"></span>{_p('manage')}</a></li>
{/if}
{if $aPage.bCanFeature}
<li><a id="js_feature_{$aPage.page_id}" {if $aPage.is_featured} style="display:none;"{/if} href="#" title="{_p var='feature'}" onclick="$(this).hide(); $('#js_unfeature_{$aPage.page_id}').show(); $.ajaxCall('groups.feature', 'page_id={$aPage.page_id}&amp;type=1'); return false;"><span class="ico ico-diamond mr-1"></span>{_p var='feature'}</a></li>
<li><a id="js_unfeature_{$aPage.page_id}" {if !$aPage.is_featured} style="display:none;"{/if} href="#" title="{_p var='un_feature'}" onclick="$(this).hide(); $('#js_feature_{$aPage.page_id}').show(); $.ajaxCall('groups.feature', 'page_id={$aPage.page_id}&amp;type=0'); return false;"><span class="ico ico-diamond-o mr-1"></span>{_p var='unfeature'}</a></li>
{/if}
{if $aPage.bCanSponsor}
<li>
    <a href="#" id="js_sponsor_{$aPage.page_id}" onclick="$('#js_sponsor_{$aPage.page_id}').hide();$('#js_unsponsor_{$aPage.page_id}').show();$.ajaxCall('groups.sponsor','page_id={$aPage.page_id}&type=0', 'GET'); return false;" style="{if $aPage.is_sponsor != 1}display:none;{/if}">
        <span class="ico ico-sponsor mr-1"></span>{_p var='unsponsor_this_group'}
    </a>
    <a href="#" id="js_unsponsor_{$aPage.page_id}" onclick="$('#js_sponsor_{$aPage.page_id}').show();$('#js_unsponsor_{$aPage.page_id}').hide();$.ajaxCall('groups.sponsor','page_id={$aPage.page_id}&type=1', 'GET'); return false;" style="{if $aPage.is_sponsor == 1}display:none;{/if}">
        <span class="ico ico-sponsor mr-1"></span>{_p var='sponsor_this_group'}
    </a>
</li>
{elseif $aPage.bCanPurchaseSponsor}
<li>
    <a id="js_unsponsor_{$aPage.page_id}" href="{permalink module='ad.sponsor' id=$aPage.page_id}section_groups/" style="{if $aPage.is_sponsor == 1}display:none;{/if}">
        <span class="ico ico-sponsor mr-1"></span>{_p var='sponsor_this_group'}
    </a>
    <a href="#" id="js_sponsor_{$aPage.page_id}" onclick="$('#js_sponsor_{$aPage.page_id}').hide();$('#js_unsponsor_{$aPage.page_id}').show();$.ajaxCall('groups.sponsor','page_id={$aPage.page_id}&type=0', 'GET'); return false;" style="{if $aPage.is_sponsor != 1}display:none;{/if}">
        <span class="ico ico-sponsor mr-1"></span>{_p var='unsponsor_this_group'}
    </a>
</li>
{/if}
{if Phpfox::isAdmin() || Phpfox::getUserId() == $aPage.user_id}
<li>
    <a href="#" onclick="tb_show('', $.ajaxBox('groups.showReassignOwner', 'height=400&amp;width=600&amp;page_id={$aPage.page_id}')); return false;">
        <span class="ico ico-user2-next-o mr-1"></span>{_p var='reassign_owner'}
    </a>
</li>
{/if}
{if $aPage.bCanDelete}
<li class="item_delete">
    <a href="{url link='groups' delete=$aPage.page_id}" class="sJsConfirm" class="no_ajax_link">
        <span class="ico ico-trash-alt-o mr-1"></span>
        {_p('delete_this_group')}
    </a>
</li>
{/if}