{*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 1.4 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if isset($products)}
	<!-- Products list -->
	<ul id="product_list" class="categorie_product clear">
	{foreach from=$products item=product name=products}
		<li class="ajax_block_product {if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if} {if $smarty.foreach.products.index % 2}alternate_item{else}item{/if} clearfix">

          <p id="product_list_stuffs">
           {if isset($product.new) && $product.new == 1}<span class="new_product"><strong>{l s='New'}</strong><br /></span>{/if}
		   {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
            <span class="new_product"><strong>{l s='On sale!'}</strong></span>
		   {elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
            <span class="on_sale"><strong>{l s='Reduced price!'}</strong> <strike>{convertPrice price=$product.price_without_reduction}</strike><br /></span>
           {/if}
		   {if isset($product.online_only) && $product.online_only}<span class="online_only"><strong>{l s='Online only!'}</strong></span>{/if}
          </p>

		  <p>
          <a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_img_link" title="{$product.name|escape:'htmlall':'UTF-8'}">
           <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'large')}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} />
          </a>
          </p>

		  <h3>
            <a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:25:'...'|escape:'htmlall':'UTF-8'}</a>
          </h3>
                
		  <p class="product_desc"><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.description_short|truncate:360:'...'|strip_tags:'UTF-8'|escape:'htmlall':'UTF-8'}">{$product.description_short|truncate:130:'...'|strip_tags:'UTF-8'}</a></p>

          {if isset($comparator_max_item) && $comparator_max_item}
           <p class="check_list_compare" style="margin-top:0.5em">
             <input type="checkbox" onclick="checkForComparison({$comparator_max_item})" class="comparator" id="comparator_item_{$product.id_product}" value="{$product.id_product}" checked="checked" /> 
             <label for="comparator_item_{$product.id_product}">{l s='Select to compare'}</label>
            </p>
          {/if}
		
          
          <p class="pprice">
           {if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
            <span>
             {if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
            </span>
           {/if}
           <a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{l s='View'}">{l s='view'}</a>
           {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
            {if ($product.allow_oosp || $product.quantity > 0) && $product.customizable != 2}
             <a class="ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart.php')}?add&amp;id_product={$product.id_product|intval}{if isset($static_token)}&amp;token={$static_token}{/if}" title="{l s='Add to cart'}">{l s='cart'}</a>
            {else}
              <strike>{l s='Add to cart'}<strike>
            {/if}
           {/if}
        </p>
        
		</li>
	{/foreach}
	</ul>
	<!-- /Products list -->
{/if}
