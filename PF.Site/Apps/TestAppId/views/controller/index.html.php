{if !count($aItems)}
{if !PHPFOX_IS_AJAX}
<div class="extra_info">
    {_p var='no_to_to_list_item_found'}
</div>
{/if}
{else}
{if !PHPFOX_IS_AJAX}
<div class="item-collections item-collections-2">
    {/if}

    {foreach from=$aItems name=aItem item=aItem}
    <article>
        <a href="{ permalink module='todo.view' id=$aItem.task_id title=$aItem.name }"><h4>{$aItem.name}</h4></a>
        <p>{$aItem.description}</p>
        <abbr>
            <span>Status:</span><span>
            { if $aItem.task_status >0 }complete{else}in-complete{/if}
            </span><br/>
            <span>Created:</span><span>
            {$aItem.time_stamp|convert_time}
            </span><br/>
        </abbr>
    </article>
    {/foreach}
    {pager}
    {if !PHPFOX_IS_AJAX}
</div>
{/if}
{/if}