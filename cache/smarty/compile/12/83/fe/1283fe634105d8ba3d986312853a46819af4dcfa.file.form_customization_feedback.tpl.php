<?php /* Smarty version Smarty-3.1.14, created on 2014-02-05 00:34:56
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\orders\form_customization_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2862252f1792003d099-59982962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1283fe634105d8ba3d986312853a46819af4dcfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\orders\\form_customization_feedback.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2862252f1792003d099-59982962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'customization_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f179200f4246_95851032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f179200f4246_95851032')) {function content_52f179200f4246_95851032($_smarty_tpl) {?>
<html>
<head>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
		<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
</head>
<body>
	<script type="text/javascript">
	<?php if ($_smarty_tpl->tpl_vars['customization_errors']->value){?>
		parent.customization_errors = true;
	<?php }else{ ?>
		parent.customization_errors = false;
		parent.$('#products_err', window.parent.document).hide();
	<?php }?>
	var id_selected_product = parent.$('#id_product option:selected').val();
	if (parent.searchProducts())
	{
		parent.$('#products_err', window.parent.document).html('<?php echo $_smarty_tpl->tpl_vars['customization_errors']->value;?>
');
		parent.$('#id_product option[value="'+id_selected_product+'"]').attr('selected', true);
		parent.$('#id_product').change();
	}
	</script>
	</body>
</html>
<?php }} ?>