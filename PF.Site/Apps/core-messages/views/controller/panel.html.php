{$sScript}
{if $aMessages}
<ul class="panel-items" id="core-messages-conversation-item-panel">
    {foreach from=$aMessages item=aMail}
    <li class="panel-item {if $aMail.viewer_is_new} is_new{/if}">
        <div class="panel-item-content">
            <div class="core-messages__list-photo">
                {if $aMail.is_group}
                {foreach from=$aMail.avatar_for_group item=aUserAvatar}
                {img user=$aUserAvatar suffix='_50_square' max_width=50 max_height=50}
                {/foreach}
                {else}
                {if $aMail.user_id == Phpfox::getUserId()}
                {img user=$aMail suffix='_50_square' max_width=50 max_height=50 no_link=true}
                {else}
                {if (isset($aMail.user_id) && !empty($aMail.user_id))}
                {img user=$aMail suffix='_50_square' max_width=50 max_height=50 no_link=true}
                {/if}
                {/if}
                {/if}
            </div>
            <div class="notification-delete {if $aMail.viewer_is_new} is_new{/if}">
                <a href="#" class="js_hover_title noToggle" onclick="$.ajaxCall('mail.delete', 'id={$aMail.thread_id}', 'GET'); $(this).parents('li:first').slideUp(); return false;">
                    <span class="ico ico-inbox"></span>
                    <span class="js_hover_info">
						{_p var='archive'}
					</span>
                </a>
            </div>
            </a>
            <a onclick="coreMessages.bContinueLoadMoreConversationContent = true;$(this).closest('.panel-item').removeClass('is_new').find('.message-unread:first').removeClass('is_new');$(this).closest('.panel-item').find('.notification-delete:first').removeClass('is_new');$(this).removeClass('is_new');" href="{url link='mail.conversation-popup' id=$aMail.thread_id}" class="popup {if $aMail.viewer_is_new} is_new{/if} js_conversation_panel_item" data-id="{$aMail.thread_id}" rel="core-messages__conversation" id="js_panel_item_{$aMail.thread_id}"></a>


            <div class="content">
                <div class="fullname-time">
                    <div class="name fw-bold">
                        {$aMail.thread_name}
                    </div>
                    <div class="time">
                        {$aMail.time_stamp|convert_time}

                        <span class="message-unread s-1 {if $aMail.viewer_is_new} is_new{/if}"></span>
                    </div>
                </div>

                {if Phpfox::getParam('mail.show_preview_message')}
                <div class="preview item_view_content">
                    {if isset($aMail.last_user_id) && $aMail.last_user_id == Phpfox::getUserId()}<span class="ico ico-reply-o"></span> {/if}
                    {if $aMail.show_text_html}{$aMail.preview|stripbb}{else}{$aMail.preview|cleanbb|clean}{/if}
                </div>
                {/if}
            </div>
        </div>
    </li>
    {/foreach}
</ul>
{else}
<div class="empty-message">
    <img src="{param var='core.path_actual'}PF.Site/flavors/material/assets/images/empty-message.svg" alt="">
    {_p var='you_have_no_messages'}
</div>
{/if}
<div class="panel-actions" id="core-messages-conversation-item-panel-actions">
    {if Phpfox::getUserParam('mail.can_compose_message')}
    <a href="{url link='mail.compose'}" class="s-5 popup js_hover_title btn-compose">
        <span class="ico ico-comment-plus-o"></span>
        <span class="js_hover_info">{_p var='compose'}</span>
    </a>
    {/if}
</div>

{literal}
<script type="text/javascript">
    $Behavior.panel_conversation_item = function () {
        if($('#page_mail_index').length)
        {
            $('.popup','#core-messages-conversation-item-panel').off('click').click(function () {
                var iId = $(this).data('id');
                var view = $('#js_search_view').val();
                $.ajaxCall("mail.loadThreadController","thread_id=" + iId + "&view=" + view);
                return false;;
            });
            $('.popup','#core-messages-conversation-item-panel-actions').off('click').click(function () {
                $.ajaxCall('mail.loadComposeController');
                return false;
            });
        }
    }
</script>
{/literal}