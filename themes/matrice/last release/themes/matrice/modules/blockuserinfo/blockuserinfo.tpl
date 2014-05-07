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

<!-- Block user information module HEADER -->
<div id="header_user">
  <ul class="header_links">
   <li>
		{l s='Welcome' mod='blockuserinfo'}{if $logged},
			<b>{$customerName}</b> 
            <a href="{$base_dir_ssl}my-account.php">{l s='My account' mod='blockuserinfo'}</a>
            <a href="{$base_dir}index.php?mylogout" title="{l s='Log me out' mod='blockuserinfo'}">{l s='Log out' mod='blockuserinfo'}</a>
		{else}
			<a href="{$base_dir_ssl}my-account.php" id="try-1">{l s='Log in' mod='blockuserinfo'}</a>
		{/if}
   </li>
 </ul>
 <ul class="shopping_cart">
 <h4>{l s='Cart' mod='blockuserinfo'} : </a></h4>	
    <li>
	<span class="ajax_cart_no_product {if $cart_qties > 0}hidden{/if}">{l s='empty' mod='blockuserinfo'}</span>
      <span class="ajax_cart_quantity">{if $cart_qties > 0}{$cart_qties}{/if}</span>
      <span class="ajax_cart_product{if $cart_qties != 1} hidden{/if}">
        {l s='product' mod='blockuserinfo'}
        <span class="ajax_cart_total">{if $cart_qties > 0}{convertPrice price=$cart->getOrderTotal(true)}{/if}</span>
        <a href="{$base_dir_ssl}order.php" title="{l s='view' mod='blockuserinfo'}">{l s='View' mod='blockuserinfo'}</a>
        <a href="{$base_dir_ssl}order.php?step=1" id="button_order_cart" title="{l s='check out' mod='blockuserinfo'}">{l s='check out' mod='blockuserinfo'}</a>
     </span>
     <span class="ajax_cart_product {if $cart_qties < 2} hidden{/if}">
        {l s='products' mod='blockuserinfo'}
        <span class="ajax_cart_total">{if $cart_qties > 0}{convertPrice price=$cart->getOrderTotal(true)}{/if}</span>
        <a href="{$base_dir_ssl}order.php" title="{l s='View' mod='blockuserinfo'}">{l s='view' mod='blockuserinfo'}</a>
        <a href="{$base_dir_ssl}order.php?step=1" id="button_order_cart" title="{l s='check out' mod='blockuserinfo'}">{l s='check out' mod='blockuserinfo'}</a>
     </span>              
    </li>
  </ul>
</div>
<!-- /Block user information module HEADER -->
