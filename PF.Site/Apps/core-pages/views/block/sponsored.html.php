<?php
defined('PHPFOX') or exit('NO DICE!');
?>
<div class="page-sponsored-sideblock page-sideblock-container">
    <div class="sticky-label-icon sticky-sponsored-icon">
        <span class="flag-style-arrow"></span>
        <i class="ico ico-sponsor"></i>
    </div>
    {foreach from=$aSponsoredPages name=pages item=page}
    <div class="page-item">
        <div class="page-cover"
             style="background-image:url(
            {if $page.cover_image_path}
                {img server_id=$page.cover_image_server_id path='photo.url_photo' file=$page.cover_image_path return_url=true}
            {else}
                {img file=$sDefaultCoverPath return_url=true}
            {/if}
        )">
            <div class="page-shadow">
                <div class="page-avatar">
                    {img user=$page href=$page.url}
                </div>

                <div class="page-like">
                    <b>{$page.total_like}</b>
                    <span>
                        {if $page.total_like == 1}{_p var='like'}{else}{_p var='likes'}{/if}
                    </span>
                </div>
            </div>
        </div>

        <div class="page-info">
            <div class="page-name">
                <a href="{$page.url}">{$page.title}</a>
            </div>

            <div class="category-name">
                {_p var=$page.type_name}
                {if $page.category_name}
                » {_p var=$page.category_name}
                {/if}
            </div>
        </div>
    </div>
    {/foreach}
</div>
