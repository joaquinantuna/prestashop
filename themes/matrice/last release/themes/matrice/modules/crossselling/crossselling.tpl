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

{if isset($orderProducts) && count($orderProducts)}
<div class="products_block accessories_block" id="idTab16">
	<h6>{l s='Customers who bought this product also bought:' mod='crossselling'}</h6>
    <ul>
        {foreach from=$orderProducts item='orderProduct' name=orderProduct}
        <li>
         <a href="{$orderProduct.link}" title="{$orderProduct.name|htmlspecialchars}">
             {assign var='myImage' value=$orderProduct.product_id|cat:'-'|cat:$orderProduct.id_image}
            <img src="{$link->getImageLink($orderProduct.link_rewrite, $myImage, 'large')}" alt="{$orderProduct.name|htmlspecialchars}" />
         </a>
         <h5>
          <a href="{$orderProduct.link}" title="{$orderProduct.name|htmlspecialchars}">
           {$orderProduct.name|truncate:15:'...'|escape:'htmlall':'UTF-8'}
          </a>
         </h5>
         <p class="pprice">
          {if $crossDisplayPrice AND $orderProduct.show_price == 1 AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
            <span>{convertPrice price=$orderProduct.displayed_price}</span>
          {/if}
          <a title="{l s='View' mod='crossselling'}" href="{$orderProduct.link}">{l s='View' mod='crossselling'}</a><br />
         </p>
        </li>
        {/foreach}
    </ul>
</div>
{/if}
