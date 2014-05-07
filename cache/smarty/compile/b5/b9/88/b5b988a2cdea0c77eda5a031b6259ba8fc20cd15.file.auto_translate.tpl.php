<?php /* Smarty version Smarty-3.1.14, created on 2014-02-05 00:35:07
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\translations\auto_translate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3176652f1792b4c4b47-45639471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b988a2cdea0c77eda5a031b6259ba8fc20cd15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\translations\\auto_translate.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3176652f1792b4c4b47-45639471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'not_available' => 0,
    'tooltip_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f1792b53ec66_39797787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f1792b53ec66_39797787')) {function content_52f1792b53ec66_39797787($_smarty_tpl) {?>

<input type="button" class="button" id="translate_all" value="<?php echo smartyTranslate(array('s'=>'Translate with Google (experimental).'),$_smarty_tpl);?>
" />
<script type="text/javascript">
	var gg_translate = {
		language_code : '<?php echo $_smarty_tpl->tpl_vars['language_code']->value;?>
',
		not_available : '<?php echo $_smarty_tpl->tpl_vars['not_available']->value;?>
',
		tooltip_title : '<?php echo $_smarty_tpl->tpl_vars['tooltip_title']->value;?>
'
	};
</script><?php }} ?>