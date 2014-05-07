<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:17
         compiled from "C:\xampp\htdocs\prestashop\themes\matrice\modules\blocknewsletter\blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26298536047d994c5f6-75838474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85218ab437814d7ace3d316fc0edf69d1e5d0ee5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\matrice\\modules\\blocknewsletter\\blocknewsletter.tpl',
      1 => 1398818664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26298536047d994c5f6-75838474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047d99c6718_12482834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047d99c6718_12482834')) {function content_536047d99c6718_12482834($_smarty_tpl) {?>

<!-- Block Newsletter module-->

	 <div class="block newsletter">
       <h4><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</h4>
       <p><?php echo smartyTranslate(array('s'=>'new products, special offers! Get on the mailing list','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</p>
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" method="post">
			<p><input type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
';" class="input_buttonnewsletter" /></p>
			<p>
				<select name="action">
					<option value="0"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==0){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
					<option value="1"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==1){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Unsubscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
				</select>
				<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'blocknewsletter'),$_smarty_tpl);?>
" class="buttonnewsletter" name="submitNewsletter" />
			</p>
		</form>
</div>

<!-- /Block Newsletter module-->
<?php }} ?>