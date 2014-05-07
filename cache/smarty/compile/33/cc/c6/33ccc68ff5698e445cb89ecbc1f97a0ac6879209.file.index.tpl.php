<?php /* Smarty version Smarty-3.1.14, created on 2014-02-05 00:35:25
         compiled from "C:\xampp\htdocs\prestashop\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:697652f1793d16e365-78218171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33ccc68ff5698e445cb89ecbc1f97a0ac6879209' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\mobile\\index.tpl',
      1 => 1390222462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '697652f1793d16e365-78218171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f1793d1ab3f2_42911343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f1793d1ab3f2_42911343')) {function content_52f1793d1ab3f2_42911343($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>