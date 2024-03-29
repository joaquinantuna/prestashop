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

<script type="text/javascript">
// <![CDATA[
	{if !$opc}
	var baseDir = '{$base_dir_ssl}';
	var orderProcess = 'order';
	{/if}
	var addresses = new Array();
	{foreach from=$addresses key=k item=address}
		addresses[{$address.id_address|intval}] = new Array('{$address.company|addslashes}', '{$address.firstname|addslashes}', '{$address.lastname|addslashes}', '{$address.address1|addslashes}', '{$address.address2|addslashes}', '{$address.postcode|addslashes}', '{$address.city|addslashes}', '{$address.country|addslashes}', '{$address.state|default:''|addslashes}');
	{/foreach}
//]]>
</script>

{if !$opc}
{capture name=path}{l s='Addresses'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}
{/if}

{if !$opc}
{assign var='current_step' value='address'}
{if !$opc}<div class="table_block">{/if}
{include file="$tpl_dir./order-steps.tpl"}
{if !$opc}<h1>{l s='Addresses'}</h1>{else}<h2>1. {l s='Addresses'}</h2>{/if}
{include file="$tpl_dir./errors.tpl"}

<form action="{$link->getPageLink('order.php', true)}" method="post">
{else}
<div id="opc_account" class="opc-main-block">
{if !$opc}<h1>{l s='Addresses'}</h1>{else}<h1>1. {l s='Addresses'}</h1>{/if}
	<div id="opc_account-overlay" class="opc-overlay" style="display: none;"></div>
{/if}
	<div class="addresses">
		<p class="address_delivery select">
			<label for="id_address_delivery">{l s='Choose a delivery address:'}</label>
			<select name="id_address_delivery" id="id_address_delivery" class="address_select" onchange="updateAddressesDisplay();{if $opc}updateAddressSelection();{/if}">
			{foreach from=$addresses key=k item=address}
				<option value="{$address.id_address|intval}" {if $address.id_address == $cart->id_address_delivery}selected="selected"{/if}>{$address.alias|escape:'htmlall':'UTF-8'}</option>
			{/foreach}
			</select>
		</p>
		<p class="checkbox">
			<input type="checkbox" name="same" id="addressesAreEquals" value="1" onclick="updateAddressesDisplay();{if $opc}updateAddressSelection();{/if}" {if $cart->id_address_invoice == $cart->id_address_delivery || $addresses|@count == 1}checked="checked"{/if} />
			<label for="addressesAreEquals">{l s='Use the same address for billing.'}</label>
		</p>
		<p id="address_invoice_form" class="select" {if $cart->id_address_invoice == $cart->id_address_delivery}style="display: none;"{/if}>
		{if $addresses|@count > 1}
			<label for="id_address_invoice" class="strong">{l s='Choose a billing address:'}</label>
			<select name="id_address_invoice" id="id_address_invoice" class="address_select" onchange="updateAddressesDisplay();{if $opc}updateAddressSelection();{/if}">
			{section loop=$addresses step=-1 name=address}
				<option value="{$addresses[address].id_address|intval}" {if $addresses[address].id_address == $cart->id_address_invoice && $cart->id_address_delivery != $cart->id_address_invoice}selected="selected"{/if}>{$addresses[address].alias|escape:'htmlall':'UTF-8'}</option>
			{/section}
			</select>
			{else}
				<BR /><a style="margin-top:21px;" href="{$link->getPageLink('address.php', true)}?back=order.php&amp;step=1&select_address=1{if $back}&mod={$back}{/if}" title="{l s='Add'}" class="address_add_new">{l s='Add a new address'}</a>
			{/if}
		</p>
		<div class="clear"></div>
        <br />
		<ul class="address item" id="address_delivery">
			<li class="address_title">{l s='Your delivery address'}</li>
			<li class="address_company"></li>
			<li class="address_name"></li>
			<li class="address_address1"></li>
			<li class="address_address2"></li>
			<li class="address_city"></li>
			<li class="address_country"></li>
			<li class="address_update"><a href="{$link->getPageLink('address.php', true)}?id_address={$address.id_address|intval}&amp;back=order.php&amp;step=1{if $back}&mod={$back}{/if}" title="{l s='Update'}">{l s='Update'}</a></li>
		</ul>
		<ul class="address alternate_item" id="address_invoice">
			<li class="address_title">{l s='Your billing address'}</li>
			<li class="address_company"></li>
			<li class="address_name"></li>
			<li class="address_address1"></li>
			<li class="address_address2"></li>
			<li class="address_city"></li>
			<li class="address_country"></li>
			<li class="address_update"><a href="{$link->getPageLink('address.php', true)}?id_address={$address.id_address|intval}&amp;back=order.php&amp;step=1{if $back}&mod={$back}{/if}" title="{l s='Update'}">{l s='Update'}</a></li>
		</ul>
		<br class="clear" />
		<p class="address_add submit">
			<a href="{$link->getPageLink('address.php', true)}?back=order.php&amp;step=1{if $back}&mod={$back}{/if}" title="{l s='Add'}" class="address_add_new">{l s='Add a new address'}</a>
		</p>
		{if !$opc}
		<div id="ordermsg">
			<p>{l s='If you would like to add a comment about your order, please write it below.'}</p>
			<p class="textarea"><textarea cols="77" rows="3" name="message">{if isset($oldMessage)}{$oldMessage}{/if}</textarea></p>
		</div>
		{/if}
	</div>
{if !$opc}
	<p class="cart_navigation submit">
     <span>
		<input type="hidden" class="hidden" name="step" value="2" />
		<input type="hidden" name="back" value="{$back}" />
		<a href="{$link->getPageLink('order.php', true)}?step=0{if $back}&back={$back}{/if}" title="{l s='Previous'}" class="button_large">&laquo; {l s='Previous'}</a>
		<input type="submit" name="processAddress" value="{l s='Next'}" class="exclusive" />
	 </span>
    </p>
</form>
{else}
</div>
{/if}
{if !$opc}</div>{/if}
