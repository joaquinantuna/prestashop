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

{capture name=path}{l s='Contact'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}
<div class="contact_form">
 <div id="contact">
<h1>{l s='Customer Service'} - {if isset($customerThread) && $customerThread}{l s='Your reply'}{else}{l s='Contact us'}{/if}</h1>
<ul id="contact_head">
 <h3>{l s='Send a message'}</h3>
 <p>{l s='For questions about an order or for more information about our products'}.</p>
 <p class="dash_ct">&#8212;&#8212;</p>
</ul>
{if isset($confirmation)}
	<p>{l s='Your message has been successfully sent to our team.'}</p>
	<ul class="footer_links">
		<li><a href="{$base_dir}"><img class="icon" alt="" src="{$img_dir}icon/home.gif"/></a><a href="{$base_dir}">{l s='Home'}</a></li>
	</ul>
{elseif isset($alreadySent)}
	<p>{l s='Your message has already been sent.'}</p>
	<ul class="footer_links">
		<li><a href="{$base_dir}"><img class="icon" alt="" src="{$img_dir}icon/home.gif"/></a><a href="{$base_dir}">{l s='Home'}</a></li>
	</ul>
{else}
	{include file="$tpl_dir./errors.tpl"}
	<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="std" enctype="multipart/form-data">
		<fieldset>
				<label for="id_contact">{l s='Subject Heading'}</label>
			<p class="select">
			{if isset($customerThread.id_contact)}
				{foreach from=$contacts item=contact}
					{if $contact.id_contact == $customerThread.id_contact}
						<input type="text" id="contact_name" name="contact_name" value="{$contact.name|escape:'htmlall':'UTF-8'}" readonly="readonly" />
						<input type="hidden" name="id_contact" value="{$contact.id_contact}" />
					{/if}
				{/foreach}
			</p>
			{else}
				<select id="id_contact" name="id_contact" onchange="showElemFromSelect('id_contact', 'desc_contact')">
					<option value="0">{l s='-- Choose --'}</option>
				{foreach from=$contacts item=contact}
					<option value="{$contact.id_contact|intval}" {if isset($smarty.post.id_contact) && $smarty.post.id_contact == $contact.id_contact}selected="selected"{/if}>{$contact.name|escape:'htmlall':'UTF-8'}</option>
				{/foreach}
				</select>
			</p>
			<p id="desc_contact0" class="desc_contact">&nbsp;</p>
				{foreach from=$contacts item=contact}
					<p id="desc_contact{$contact.id_contact|intval}" class="desc_contact" style="display:none;">
					 {$contact.description|escape:'htmlall':'UTF-8'}
					</p>
				{/foreach}
			{/if}
			<label for="email">{l s='E-mail address'}</label>
			<p class="text">
				{if isset($customerThread.email)}
					<input type="text" id="email" name="from" value="{$customerThread.email}" readonly="readonly" />
				{else}
					<input type="text" id="email" name="from" value="{$email}" />
				{/if}
			</p>
		{if !$PS_CATALOG_MODE}
			{if (!isset($customerThread.id_order) || $customerThread.id_order > 0)}
				<label for="id_order">{l s='Order ID'}</label>
			<p class="text">
				{if !isset($customerThread.id_order) && isset($isLogged) && $isLogged == 1}
					<select name="id_order" ><option value="0">{l s='-- Choose --'}</option>{$orderList}</select>
				{elseif !isset($customerThread.id_order) && !isset($isLogged)}
					<input type="text" name="id_order" id="id_order" value="{if isset($customerThread.id_order) && $customerThread.id_order > 0}{$customerThread.id_order|intval}{else}{if isset($smarty.post.id_order)}{$smarty.post.id_order|intval}{/if}{/if}" />
				{elseif $customerThread.id_order > 0}
					<input type="text" name="id_order" id="id_order" value="{$customerThread.id_order|intval}" readonly="readonly" />
				{/if}
			</p>
			{/if}
			{if isset($isLogged) && $isLogged}
			<label for="id_product">{l s='Product'}</label>
			<p class="text">
				{if !isset($customerThread.id_product)}
					<select name="id_product" style="width:300px;"><option value="0">{l s='-- Choose --'}</option>{$orderedProductList}</select>
				{elseif $customerThread.id_product > 0}
					<input type="text" name="id_product" id="id_product" value="{$customerThread.id_product|intval}" readonly="readonly" />
				{/if}
			</p>
			{/if}
		{/if}
		{if $fileupload == 1}
			<label for="fileUpload">{l s='Attach File'}</label>
			<p class="text">
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
				<input type="file" name="fileUpload" id="fileUpload" />
			</p>
		{/if}
			<label for="message">{l s='Message'}</label>
		<p class="textarea">
			 <textarea id="message" name="message" rows="10" cols="10" style="width:340px;height:150px">{if isset($message)}{$message|escape:'htmlall':'UTF-8'|stripslashes}{/if}</textarea>
		</p>
		<p>
			<input type="submit" name="submitMessage" id="submitMessage" value="{l s='Send'}" class="button_large" onclick="$(this).hide();" />
		</p>
	</fieldset>
</form>
{/if}
</div>
</div>
