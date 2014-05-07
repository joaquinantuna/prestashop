<?php /* Smarty version Smarty-3.1.14, created on 2014-03-18 05:51:23
         compiled from "C:\xampp\htdocs\prestashop\admin8450\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3855328090b1ab3f0-77200921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e163a9abf6a082f98902984401994afbbc3b941f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin8450\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3855328090b1ab3f0-77200921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5328090b2625a8_51005916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5328090b2625a8_51005916')) {function content_5328090b2625a8_51005916($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;" href="#"><img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" /></a><?php }} ?>