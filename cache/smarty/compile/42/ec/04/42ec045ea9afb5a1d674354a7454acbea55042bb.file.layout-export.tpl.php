<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 03:02:06
         compiled from "C:\xampp\htdocs\prestashop\admin8450\themes\default\template\layout-export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14312535f4e6ed97019-99150982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42ec045ea9afb5a1d674354a7454acbea55042bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin8450\\themes\\default\\template\\layout-export.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14312535f4e6ed97019-99150982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'export_precontent' => 0,
    'export_headers' => 0,
    'header' => 0,
    'export_content' => 0,
    'line' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535f4e6f07a121_82922817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f4e6f07a121_82922817')) {function content_535f4e6f07a121_82922817($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['export_precontent']->value;?>
<?php  $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['header']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['header']->key => $_smarty_tpl->tpl_vars['header']->value){
$_smarty_tpl->tpl_vars['header']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
;<?php } ?>
<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>

<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['line']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
;<?php } ?>
<?php } ?><?php }} ?>