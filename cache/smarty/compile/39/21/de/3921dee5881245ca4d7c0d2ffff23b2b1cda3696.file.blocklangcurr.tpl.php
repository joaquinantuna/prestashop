<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:18
         compiled from "C:\xampp\htdocs\prestashop\modules\blocklangcurr\blocklangcurr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24903536047da3d0901-15189815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3921dee5881245ca4d7c0d2ffff23b2b1cda3696' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocklangcurr\\blocklangcurr.tpl',
      1 => 1398818732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24903536047da3d0901-15189815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'request_uri' => 0,
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'currencies' => 0,
    'f_currency' => 0,
    'id_currency_cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047da40d992_16689451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047da40d992_16689451')) {function content_536047da40d992_16689451($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
blocklangcurr.js"></script>
<!-- Block langcurr module -->
<div id="blocklangcurr">
	<form id="setLanguage" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
    <select name="selectlanguage" id="selectlanguage" onchange="setLanguage(this.value)">    
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
		<?php } ?>
        </select>
        <input type="hidden" name="id_lang" id="id_lang" value=""/>
        <input type="hidden" name="SubmitCurrency" value="" />
    </form>        

	<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
     <select onchange="setCurrency(this.value)">
        <?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_currency_cookie']->value==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?> selected<?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>

        </option>
        <?php } ?>
        </select>
        <input type="hidden" name="id_currency" id="id_currency" value=""/>
        <input type="hidden" name="SubmitCurrency" value="" />
	</form>        
</div>
<!-- /Block langcurr module --><?php }} ?>