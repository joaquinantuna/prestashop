<script type="text/javascript">
<!--
	var baseDir = '{$base_dir_ssl}';
-->
</script>

{capture name=path}<a href="{$link->getPageLink('my-account.php', true)}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Your personal information'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h1>{l s='Your personal information'}</h1>

{include file="$tpl_dir./errors.tpl"}

{if isset($confirmation) && $confirmation}
	<p class="success">
		{l s='Your personal information has been successfully updated.'}
		{if isset($pwd_changed)}<br />{l s='Your password has been sent to your e-mail:'} {$email|escape:'htmlall':'UTF-8'}{/if}
	</p>
{else}
	<p>{l s='Please do not hesitate to update your personal information if it has changed.'}</p>
    <p class="dash">&#8212;&#8212;</p>
	
	<form action="{$link->getPageLink('identity.php', true)}" method="post" class="std" id="identity">
		<fieldset>
			<p class="radio">
				<span>{l s='Title'}</span>
				<input type="radio" id="id_gender1" name="id_gender" value="1" {if $smarty.post.id_gender == 1 OR !$smarty.post.id_gender}checked="checked"{/if} />
				<label for="id_gender1">{l s='Mr.'}</label>
				<input type="radio" id="id_gender2" name="id_gender" value="2" {if $smarty.post.id_gender == 2}checked="checked"{/if} />
				<label for="id_gender2">{l s='Ms.'}</label>
			</p>
			<p class="required text">
				<label for="firstname">{l s='First name'}</label>
				<input type="text" id="firstname" name="firstname" value="{$smarty.post.firstname}" /> <sup>*</sup>
			</p>
			<p class="required text">
				<label for="lastname">{l s='Last name'}</label>
				<input type="text" name="lastname" id="lastname" value="{$smarty.post.lastname}" /> <sup>*</sup>
			</p>
			<p class="required text">
				<label for="email">{l s='E-mail'}</label>
				<input type="text" name="email" id="email" value="{$smarty.post.email}" /> <sup>*</sup>
			</p>
			<p class="required text">
				<label for="old_passwd">{l s='Current Password'}</label>
				<input type="password" name="old_passwd" id="old_passwd" /> <sup>*</sup>
			</p>
			<p class="password text">
				<label for="passwd">{l s='New Password'}</label>
				<input type="password" name="passwd" id="passwd" />
			</p>
			<p class="password text">
				<label for="confirmation">{l s='Confirmation'}</label>
				<input type="password" name="confirmation" id="confirmation" />
			</p>
			<p class="select text">
				<label>{l s='Date of Birth'}</label>
				<select name="days" id="days">
					<option value="">-</option>
					{foreach from=$days item=v}
						<option value="{$v|escape:'htmlall':'UTF-8'}" {if ($sl_day == $v)}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
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
					{foreach from=$months key=k item=v}
						<option value="{$k|escape:'htmlall':'UTF-8'}" {if ($sl_month == $k)}selected="selected"{/if}>{l s="$v"}&nbsp;</option>
					{/foreach}
				</select>
				<select id="years" name="years">
					<option value="">-</option>
					{foreach from=$years item=v}
						<option value="{$v|escape:'htmlall':'UTF-8'}" {if ($sl_year == $v)}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
					{/foreach}
				</select>
			</p>
			<p class="checkbox">
				<input type="checkbox" id="newsletter" name="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == 1} checked="checked"{/if} />
				<label for="newsletter">{l s='Sign up for our newsletter'}</label>
			</p>
			<p class="checkbox">
				<input type="checkbox" name="optin" id="optin" value="1" {if isset($smarty.post.optin) && $smarty.post.optin == 1} checked="checked"{/if} />
				<label for="optin">{l s='Receive special offers from our partners'}</label>
			</p>
			<p style="padding:1em 0 0 12.2em">
 		     <input type="submit" id="submitIdentity" name="submitIdentity" value="{l s='Save'}" />
             <em class="required"><sup>*</sup>{l s='Required field'}</em>
			</p>
		</fieldset>
	</form>
	<p id="security_informations">
		{l s='[Insert customer data privacy clause or law here, if applicable]'}
	</p>
{/if}

<ul class="footer_links">
	<li><a href="{$link->getPageLink('my-account.php', true)}"><img src="{$img_dir}icon/my-account.gif" alt="" class="icon" /></a><a href="{$link->getPageLink('my-account.php', true)}">{l s='Back to Your Account'}</a></li>
	<li><a href="{$base_dir}"><img src="{$img_dir}icon/home.gif" alt="" class="icon" /></a><a href="{$base_dir}">{l s='Home'}</a></li>
</ul>
