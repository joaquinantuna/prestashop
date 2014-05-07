<!-- MODULE Block new products -->
<div class="footer_stuffs">
	<h4>
     <strong>{l s='New products' mod='blocknewproducts'}</strong>
     <a href="{$base_dir}new-products.php">+ {l s='See more' mod='blocknewproducts'}</a>
	</h4>
	{if $new_products}
			{foreach from=$new_products item=product name=myLoop}
		{/foreach}
 {if $new_products|@count > 0} 	  
		<li>
          <a href="{$new_products.0.link}" title="{$new_products.0.legend|escape:'htmlall':'UTF-8'}">
           <img src="{$link->getImageLink($new_products.0.link_rewrite, $new_products.0.id_image, 'home')}" height="60" width="60" alt="{$new_products.0.legend|escape:'htmlall':'UTF-8'}" />
          </a>
  		</li>
{/if}
 {if $new_products|@count > 1} 	  
		<li>
          <a href="{$new_products.1.link}" title="{$new_products.1.legend|escape:'htmlall':'UTF-8'}">
           <img src="{$link->getImageLink($new_products.1.link_rewrite, $new_products.1.id_image, 'home')}" height="60" width="60" alt="{$new_products.1.legend|escape:'htmlall':'UTF-8'}" />
          </a>
  		</li>
{/if}
 {if $new_products|@count > 2} 	  
		<li>
          <a href="{$new_products.2.link}" title="{$new_products.2.legend|escape:'htmlall':'UTF-8'}">
           <img src="{$link->getImageLink($new_products.2.link_rewrite, $new_products.2.id_image, 'home')}" height="60" width="60" alt="{$new_products.2.legend|escape:'htmlall':'UTF-8'}" />
          </a>
  		</li>
{/if}
 {if $new_products|@count > 3} 	  
		<li>
          <a href="{$new_products.3.link}" title="{$new_products.3.legend|escape:'htmlall':'UTF-8'}">
           <img src="{$link->getImageLink($new_products.3.link_rewrite, $new_products.3.id_image, 'home')}" height="60" width="60" alt="{$new_products.3.legend|escape:'htmlall':'UTF-8'}" />
          </a>
  		</li>
{/if}
	     {else}
		<p>{l s='No new product at this time' mod='blocknewproducts'}</p>
	{/if}
</div>
<!-- /MODULE Block new products -->
