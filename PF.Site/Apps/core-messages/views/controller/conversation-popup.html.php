<?php
defined('PHPFOX') or exit('NO DICE!');
?>
<div id="js_main_mail_thread_holder" class="core-messages__title-conversation js_conversation_popup_main">
    <input type="hidden" id="js_core_messages_url_send_message" value="{url link='mail.send-message'}">
    <div class="mail-messages js_mail_messages_content dont-unbind-children" id="js_conversation_content_popup" data-id="{$aThread.thread_id}">
        {foreach from=$aMessages name=messages item=aMail}
        {template file='mail.block.entry'}
        {/foreach}
        <div id="mail_threaded_new_message"></div>
        <div id="mail_threaded_new_message_scroll"></div>
        <div class="js_template_message_is_user">
            <div class="mail_content">
                <div class="mail_text"></div>
            </div>
        </div>
        <input type="hidden" value="1" id="js_check_load_more_conversation_content">
    </div>
    <div class="mail_thread_form_holder">
        <div class="mail_thread_form_holder_inner">
            {if $bCanReplyThread}
            {$sCreateJs}
            <form method="post" action="{url link='mail.conversation-popup' id=$aThread.thread_id}" id="js_form_send_message" class="js_ajax_mail_thread" onsubmit="return coreMessages.onSendMessage(this);">
                <div id="js_mail_error"></div>
                <div> <input type="hidden" value="{value type='input' id='message'}" id="message" name="val[message]"></div>
                <div><input type="hidden" name="val[thread_id]" value="{$aThread.thread_id}" /></div>
                <div><input type="hidden" name="val[attachment]" class="js_attachment" value="{value type='input' id='attachment'}" /></div>

            </form>
            {else}
            <div class="message">{_p var='can_not_reply_due_to_privacy_settings'}</div>
            {/if}
        </div>
    </div>
</div>
{template file='mail.block.message-footer'}
{literal}
<script type="text/javascript">
    $Behavior.conversation_popup = function() {
        coreMessages.initConversationContentCustomScroll();
        if($('.js_conversation_popup_main').closest('.js_box_content').length && ($('.js_conversation_popup_main').find('.mail_thread_holder').length <= 10))
        {
            setTimeout(function () {
                $('.js_conversation_popup_main').find('.js_mail_messages_content:first').mCustomScrollbar('scrollTo','bottom',{scrollInertia:0});
            },100);
        }

        if ($Core.hasPushState()) {
            window.addEventListener("popstate", function (e) {
                if($('#js_main_mail_thread_holder').closest('.js_box_content').length)
                {
                    var oDomObj = $('#js_main_mail_thread_holder').get(0);
                    js_box_remove(oDomObj);
                }
            });
        }
    }
</script>
{/literal}