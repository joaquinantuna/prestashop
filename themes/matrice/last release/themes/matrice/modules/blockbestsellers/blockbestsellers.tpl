<!-- MODULE Block best sellers -->
<div class="footer_stuffs">
 <h4>
   <strong>{l s='Top sellers' mod='blockbestsellers'}</strong>
   <a href="{$base_dir}best-sales.php">+ {l s='See more' mod='blockbestsellers'}</a>
 </h4>
 {if $best_sellers|@count > 0}
    <li>
       <a href="{$best_sellers.0.link}" title="{$best_sellers.0.legend|escape:'htmlall':'UTF-8'}">
        <img src="{$link->getImageLink($best_sellers.0.link_rewrite, $best_sellers.0.id_image, 'home')}" height="60" width="60" alt="{$best_sellers.0.legend|escape:'htmlall':'UTF-8'}" />
       </a>
    </li>
 {if $best_sellers|@count > 1}
    <li>
       <a href="{$best_sellers.1.link}" title="{$best_sellers.1.legend|escape:'htmlall':'UTF-8'}">
        <img src="{$link->getImageLink($best_sellers.1.link_rewrite, $best_sellers.1.id_image, 'home')}" height="60" width="60" alt="{$best_sellers.1.legend|escape:'htmlall':'UTF-8'}" />
       </a>
    </li>
 {/if}
 {if $best_sellers|@count > 2}
    <li>
       <a href="{$best_sellers.2.link}" title="{$best_sellers.2.legend|escape:'htmlall':'UTF-8'}">
        <img src="{$link->getImageLink($best_sellers.2.link_rewrite, $best_sellers.2.id_image, 'home')}" height="60" width="60" alt="{$best_sellers.2.legend|escape:'htmlall':'UTF-8'}" />
       </a>
    </li>
 {/if}
 {if $best_sellers|@count > 3}
    <li>
       <a href="{$best_sellers.3.link}" title="{$best_sellers.3.legend|escape:'htmlall':'UTF-8'}">
        <img src="{$link->getImageLink($best_sellers.3.link_rewrite, $best_sellers.3.id_image, 'home')}" height="60" width="60" alt="{$best_sellers.3.legend|escape:'htmlall':'UTF-8'}" />
       </a>
    </li>
 {/if}
{else}
<li class="warning">{l s='No best sellers at this time' mod='blockbestsellers'}</li>
{/if}
</div>
<!-- /MODULE Block best sellers -->

