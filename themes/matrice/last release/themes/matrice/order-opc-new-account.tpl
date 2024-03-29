<div id="opc_new_account" class="opc-main-block">
	<div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div>
	<h1>1. {l s='Account'}</h1>
	<form action="{$link->getPageLink('authentication.php', true)}?back=order-opc.php" method="post" id="login_form" class="std">
			<h3>{l s='Already registered?'} <a href="#" id="openLoginFormBlock" class="creat_account">{l s='Click here'}</a></h3>
		<fieldset>
			<div id="login_form_content" style="display:none;">
				<!-- Error return block -->
				<div id="opc_login_errors" class="error" style="display:none;"></div>
				<!-- END Error return block -->
				<p class="text">
					<label for="login_email">{l s='E-mail address'}</label>
					<span><input type="text" class="text" id="login_email" name="email" /></span>
				</p>
				<p class="text">
					<label for="passwd">{l s='Password'}</label>
					<span><input type="password" class="text" id="passwd" name="passwd" /></span>
				</p>
				<p>
					{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
					<input type="submit" id="SubmitLogin" name="SubmitLogin" class="submit_create" value="{l s='Log in'}" />
                    <br /><a href="{$base_dir}password.php" class="lost_password">{l s='Forgot your password?'}</a>
				</p>
			</div>
		</fieldset>
	</form>
	<form action="#" method="post" id="new_account_form" class="std">
			<h3 id="new_account_title">{l s='New Customer'}</h3>
		<fieldset>
			<div id="opc_account_choice">
				<div class="opc_float_left opc_float_right">
					<h4>{l s='Instant Checkout'}</h4>
					<p>
						<input type="button" class="exclusive_large" id="opc_guestCheckout" value="{l s='Checkout as guest'}" />
					</p>
				</div>
				
				<div class="opc_float" style="float:right">
					<h4>{l s='Create your account today and enjoy:'}</h4>
					<ul class="bullet">
						<li>{l s='Personalized and secure access'}</li>
						<li>{l s='Fast and easy check out'}</li>
					</ul>
					<p>
						<input type="button" class="submit_login" id="opc_createAccount" value="{l s='Create an account'}" />
					</p>
				</div>
				<div class="clear"></div>
			</div>
			<div id="opc_account_form">
				<script type="text/javascript">
				// <![CDATA[
				idSelectedCountry = {if isset($guestInformations) && $guestInformations.id_state}{$guestInformations.id_state|intval}{else}false{/if};
				{if isset($countries)}
					{foreach from=$countries item='country'}
						{if isset($country.states) && $country.contains_states}
							countries[{$country.id_country|intval}] = new Array();
							{foreach from=$country.states item='state' name='states'}
								countries[{$country.id_country|intval}].push({ldelim}'id' : '{$state.id_state}', 'name' : '{$state.name|escape:'htmlall':'UTF-8'}'{rdelim});
							{/foreach}
						{/if}
						{if $country.need_identification_number}
							countriesNeedIDNumber.push({$country.id_country|intval});
						{/if}	
						{if isset($country.need_zip_code)}
							countriesNeedZipCode[{$country.id_country|intval}] = {$country.need_zip_code};
						{/if}
					{/foreach}
				{/if}
				//]]>
				{if $vat_management}
					{literal}
					function vat_number()
					{
						if ($('#company').val() != '')
							$('#vat_number_block').show();
						else
							$('#vat_number_block').hide();
					}
					function vat_number_invoice()
					{
						if ($('#company_invoice').val() != '')
							$('#vat_number_block_invoice').show();
						else
							$('#vat_number_block_invoice').hide();
					}
					
					$(document).ready(function() {
						$('#company').blur(function(){
							vat_number();
						});
						$('#company_invoice').blur(function(){
							vat_number_invoice();
						});
						vat_number();
						vat_number_invoice();
					});
					{/literal}
				{/if}
				</script>
				<!-- Error return block -->
				<div id="opc_account_errors" class="error" style="display:none;"></div>
				<!-- END Error return block -->
				<!-- Account -->
				<input type="hidden" id="is_new_customer" name="is_new_customer" value="0" />
				<input type="hidden" id="opc_id_customer" name="opc_id_customer" value="{if isset($guestInformations) && $guestInformations.id_customer}{$guestInformations.id_customer}{else}0{/if}" />
				<input type="hidden" id="opc_id_address_delivery" name="opc_id_address_delivery" value="{if isset($guestInformations) && $guestInformations.id_address_delivery}{$guestInformations.id_address_delivery}{else}0{/if}" />
				<input type="hidden" id="opc_id_address_invoice" name="opc_id_address_invoice" value="{if isset($guestInformations) && $guestInformations.id_address_delivery}{$guestInformations.id_address_delivery}{else}0{/if}" />
                <p class="radio required">
                    <span>{l s='Title'}</span>
                    <input type="radio" name="id_gender" id="id_gender1" value="1" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == 1}checked="checked"{/if} />
                    <label for="id_gender1" class="top">{l s='Mr.'}</label>
                    <input type="radio" name="id_gender" id="id_gender2" value="2" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == 2}checked="checked"{/if} />
                    <label for="id_gender2" class="top">{l s='Ms.'}</label>
                </p>
				<p class="required text">
					<label for="email">{l s='E-mail'}</label>
					<input type="text" class="text" id="email" name="email" value="{if isset($guestInformations) && $guestInformations.email}{$guestInformations.email}{/if}" />
					<sup>*</sup>
				</p>
				<p class="required password is_customer_param">
					<label for="passwd">{l s='Password'}</label>
					<input type="password" class="text" name="passwd" id="passwd" />
					<sup>*</sup>
					<span class="form_info">{l s='(5 characters min.)'}</span>
				</p>
				<p class="required text">
					<label for="firstname">{l s='First name'}</label>
					<input type="text" class="text" id="customer_firstname" name="customer_firstname" onblur="$('#firstname').val($(this).val());" value="{if isset($guestInformations) && $guestInformations.customer_firstname}{$guestInformations.customer_firstname}{/if}" />
					<sup>*</sup>
				</p>
				<p class="required text">
					<label for="lastname">{l s='Last name'}</label>
					<input type="text" class="text" id="customer_lastname" name="customer_lastname" onblur="$('#lastname').val($(this).val());" value="{if isset($guestInformations) && $guestInformations.customer_lastname}{$guestInformations.customer_lastname}{/if}" />
					<sup>*</sup>
				</p>
				<p class="select">
					<label>{l s='Date of Birth'}</label>
					<select id="days" name="days">
						<option value="">-</option>
						{foreach from=$days item=day}
							<option value="{$day|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_day == $day)} selected="selected"{/if}>{$day|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
						{/foreach}
					</select>
					{*
						{l s='January'}
						{l s='February'}
						{l s='March'}
						{l s='April'}
						{l s='May'}
						{l s='June'}
						{l s='July'}
						{l s='August'}
						{l s='September'}
						{l s='October'}
						{l s='November'}
						{l s='December'}
					*}
					<select id="months" name="months">
						<option value="">-</option>
						{foreach from=$months key=k item=month}
							<option value="{$k|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_month == $k)} selected="selected"{/if}>{l s="$month"}&nbsp;</option>
						{/foreach}
					</select>
					<select id="years" name="years">
						<option value="">-</option>
						{foreach from=$years item=year}
							<option value="{$year|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_year == $year)} selected="selected"{/if}>{$year|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
						{/foreach}
					</select>
				</p>
				<p class="checkbox">
					<input type="checkbox" name="newsletter" id="newsletter" value="1" {if isset($guestInformations) && $guestInformations.newsletter}checked="checked"{/if} />
					<label for="newsletter">{l s='Sign up for our newsletter'}</label>
				</p>
				<p class="checkbox" >
					<input type="checkbox"name="optin" id="optin" value="1" {if isset($guestInformations) && $guestInformations.optin}checked="checked"{/if} />
					<label for="optin">{l s='Receive special offers from our partners'}</label>
				</p>
                <br class="clear" />
				<h3>{l s='Delivery address'}</h3>
				<div id="vat_number_block" style="display:none;">
					<p class="text">
						<label for="vat_number">{l s='VAT number'}</label>
						<input type="text" class="text" name="vat_number" id="vat_number" value="{if isset($guestInformations) && $guestInformations.vat_number}{$guestInformations.vat_number}{/if}" />
					</p>
				</div>
				<p class="required text dni">
					<label for="dni">{l s='Identification number'}</label>
					<input type="text" class="text" name="dni" id="dni" value="{if isset($guestInformations) && $guestInformations.dni}{$guestInformations.dni}{/if}" />
					<span class="form_info">{l s='DNI / NIF / NIE'}</span>
				</p>
				<p class="required text">
					<label for="firstname">{l s='First name'}</label>
					<input type="text" class="text" id="firstname" name="firstname" value="{if isset($guestInformations) && $guestInformations.firstname}{$guestInformations.firstname}{/if}" />
					<sup>*</sup>
				</p>
				<p class="required text">
					<label for="lastname">{l s='Last name'}</label>
					<input type="text" class="text" id="lastname" name="lastname" value="{if isset($guestInformations) && $guestInformations.lastname}{$guestInformations.lastname}{/if}" />
					<sup>*</sup>
				</p>
				<p class="required text">
					<label for="address1">{l s='Address'}</label>
					<input type="text" class="text" name="address1" id="address1" value="{if isset($guestInformations) && $guestInformations.address1}{$guestInformations.address1}{/if}" />
					<sup>*</sup>
				</p>
				<p class="text is_customer_param">
					<label for="address2">{l s='Address (Line 2)'}</label>
					<input type="text" class="text" name="address2" id="address2" value="" />
				</p>
				<p class="required postcode text">
					<label for="postcode">{l s='Zip / Postal code'}</label>
					<input type="text" class="text" name="postcode" id="postcode" value="{if isset($guestInformations) && $guestInformations.postcode}{$guestInformations.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
					<sup>*</sup>
				</p>
				<p class="required text">
					<label for="city">{l s='City'}</label>
					<input type="text" class="text" name="city" id="city" value="{if isset($guestInformations) && $guestInformations.city}{$guestInformations.city}{/if}" />
					<sup>*</sup>
				</p>
				<p class="required select">
					<label for="id_country">{l s='Country'}</label>
					<select name="id_country" id="id_country">
						<option value="">-</option>
						{foreach from=$countries item=v}
						<option value="{$v.id_country}" {if (isset($guestInformations) AND $guestInformations.id_country == $v.id_country) OR (!isset($guestInformations) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>
						{/foreach}
					</select>
					<sup>*</sup>
				</p>
				<p class="required id_state select">
					<label for="id_state">{l s='State'}</label>
					<select name="id_state" id="id_state">
						<option value="">-</option>
					</select>
					<sup>*</sup>
				</p>
				<p class="text">
					<label for="phone">{l s='Home phone'}</label>
					<input type="text" class="text" name="phone" id="phone" value="{if isset($guestInformations) && $guestInformations.phone}{$guestInformations.phone}{/if}" />
                     <sup>*</sup>
				</p>
				<p class="text is_customer_param">
					<label for="phone_mobile">{l s='Mobile phone'}</label>
					<input type="text" class="text" name="phone_mobile" id="phone_mobile" value="" />
				</p>
				<p class="text">
					<label for="company">{l s='Company'}</label>
					<input type="text" class="text" id="company" name="company" value="{if isset($guestInformations) && $guestInformations.company}{$guestInformations.company}{/if}" />
				</p>
				<p id="extra_labels">
					<span for="other">{l s='Additional information'}</span>
					<textarea name="other" id="other" cols="26" rows="3"></textarea>
				</p>
				<input type="hidden" name="alias" id="alias" value="{l s='My address'}" />
				
				<p class="checkbox is_customer_param">
					<input type="checkbox" name="invoice_address" id="invoice_address" />
					<label for="invoice_address">{l s='Please use another address for invoice'}</label>
				</p>
				<br class="clear" />
				<div id="opc_invoice_address" class="is_customer_param">
					<h3>{l s='Invoice address'}</h3>
					<p class="text is_customer_param">
						<label for="company_invoice">{l s='Company'}</label>
						<input type="text" class="text" id="company_invoice" name="company_invoice" value="" />
					</p>
					<div id="vat_number_block_invoice" class="is_customer_param" style="display:none;">
						<p class="text">
							<label for="vat_number_invoice">{l s='VAT number'}</label>
							<input type="text" class="text" id="vat_number_invoice" name="vat_number_invoice" value="" />
						</p>
					</div>
					<p class="required text dni_invoice">
						<label for="dni">{l s='Identification number'}</label>
						<input type="text" class="text" name="dni" id="dni" value="{if isset($guestInformations) && $guestInformations.dni}{$guestInformations.dni}{/if}" />
						<span class="form_info">{l s='DNI / NIF / NIE'}</span>
					</p>
					<p class="required text">
						<label for="firstname_invoice">{l s='First name'}</label>
						<input type="text" class="text" id="firstname_invoice" name="firstname_invoice" value="" />
						<sup>*</sup>
					</p>
					<p class="required text">
						<label for="lastname_invoice">{l s='Last name'}</label>
						<input type="text" class="text" id="lastname_invoice" name="lastname_invoice" value="" />
						<sup>*</sup>
					</p>
					<p class="required text">
						<label for="address1_invoice">{l s='Address'}</label>
						<input type="text" class="text" name="address1_invoice" id="address1_invoice" value="" />
						<sup>*</sup>
					</p>
					<p class="text is_customer_param">
						<label for="address2_invoice">{l s='Address (Line 2)'}</label>
						<input type="text" class="text" name="address2_invoice" id="address2_invoice" value="" />
					</p>
					<p class="required postcode text">
						<label for="postcode_invoice">{l s='Zip / Postal Code'}</label>
						<input type="text" class="text" name="postcode_invoice" id="postcode_invoice" value="" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
						<sup>*</sup>
					</p>
					<p class="required text">
						<label for="city_invoice">{l s='City'}</label>
						<input type="text" class="text" name="city_invoice" id="city_invoice" value="" />
						<sup>*</sup>
					</p>
					<p class="required select">
						<label for="id_country_invoice">{l s='Country'}</label>
						<select name="id_country_invoice" id="id_country_invoice">
							<option value="">-</option>
							{foreach from=$countries item=v}
							<option value="{$v.id_country}" {if ($sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>
							{/foreach}
						</select>
						<sup>*</sup>
					</p>
					<p class="required id_state_invoice select" style="display:none;">
						<label for="id_state_invoice">{l s='State'}</label>
						<select name="id_state_invoice" id="id_state_invoice">
							<option value="">-</option>
						</select>
						<sup>*</sup>
					</p>
					<p class="text">
						<label for="phone_invoice">{l s='Home phone'}</label>
						<input type="text" class="text" name="phone_invoice" id="phone_invoice" value="" /> <sup>*</sup>
					</p>
					<p class="text is_customer_param">
						<label for="phone_mobile_invoice">{l s='Mobile phone'}</label>
						<input type="text" class="text" name="phone_mobile_invoice" id="phone_mobile_invoice" value="" />
					</p>
					<p id="extra_labels">
						<span for="other_invoice">{l s='Additional information'}</span>
						<textarea name="other_invoice" id="other_invoice" cols="26" rows="3" ></textarea>
					</p>
					<input type="hidden" name="alias_invoice" id="alias_invoice" value="{l s='My Invoice address'}" />
				</div>
				<p>
				<input type="submit"  name="submitAccount" id="submitAccount" value="{l s='Save'}" />
				<sup>*</sup>{l s='Required field'}
				</p>
				<p style="color: green;display: none;" id="opc_account_saved">
					{l s='Account informations saved successfully'}
				</p>
				<!-- END Account -->
			</div>
		</fieldset>
	</form>
	<div class="clear"></div>
</div>
