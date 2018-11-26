{if !empty($aComparePackages)}
    {assign var=aPackages value=$aComparePackages}
    {template file='subscribe.block.compare'}
{else}
<div class="alert alert-danger">
    {_p var='Packages for compare not found'}
</div>
{/if}
