<!-- MODULE Home Featured Products -->
<div class="block products_block">
{if isset($products) AND $products}
    <div class="block_content">
     {assign var='liHeight' value=360}
     {assign var='nbItemsPerLine' value=4}
     {assign var='nbLi' value=$products|@count}
     {assign var='nbLines' value=$nbLi/$nbItemsPerLine|ceil}
     {assign var='ulHeight' value=$nbLines*$liHeight}
      <ul>
        {foreach from=$products item=product name=homeFeaturedProducts}
        {assign var='productLink' value=$link->getProductLink($product.id_product, $product.link_rewrite, $product.category)}
        <li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1}first_item_of_line{/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - ($smarty.foreach.homeFeaturedProducts.total % $nbItemsPerLine))}last_line{/if}">

		  <p>
          <a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_img_link" title="{$product.name|escape:'htmlall':'UTF-8'}">
           <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'large')}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} />
          </a>
          </p>

		  <h5>
            <a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:25:'...'|escape:'htmlall':'UTF-8'}</a>
          </h5>
                
		  <p class="product_desc"><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.description_short|truncate:360:'...'|strip_tags:'UTF-8'|escape:'htmlall':'UTF-8'}">{$product.description_short|truncate:130:'...'|strip_tags:'UTF-8'}</a></p>

          <p class="pprice">
           {if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
            <span>
             {if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
            </span>
           {/if}
           <a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{l s='View' mod='homefeatured'}">{l s='View' mod='homefeatured'}</a>
           {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
            {if ($product.allow_oosp || $product.quantity > 0) && $product.customizable != 2}
             <a class="ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart.php')}?add&amp;id_product={$product.id_product|intval}{if isset($static_token)}&amp;token={$static_token}{/if}" title="{l s='Add to cart' mod='homefeatured'}">{l s='cart' mod='homefeatured'}</a>
            {else}
              <strike>{l s='cart' mod='homefeatured'}</strike>
            {/if}
           {/if}
        </p>
         </li>
         {/foreach}
        </ul>
    </div>
    {else}
    <p>{l s='No featured products' mod='homefeatured'}</p>
{/if}
</div>
<!-- /MODULE Home Featured Products -->
