<?php /* Smarty version Smarty-3.1.14, created on 2014-02-05 00:34:54
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\modules\tab_modules_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:982852f1791ecdfe64-57562304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a34b591633e5b7e9d7fc1a9eda15177996939e28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\modules\\tab_modules_list.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982852f1791ecdfe64-57562304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_modules_list' => 0,
    'admin_module_favorites_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f1791edd40a9_05102464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f1791edd40a9_05102464')) {function content_52f1791edd40a9_05102464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\function.cycle.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)&&!empty($_smarty_tpl->tpl_vars['tab_modules_list']->value)){?>
<script type="text/javascript">
	$(document).ready(function() {

		$('#nav_tabs_modules_installed').click(function () { showInstalledModules() });
		$('#nav_tabs_modules_not_installed').click(function () { showNotInstalledModules() });

		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])){?>
			showInstalledModules();
		<?php }else{ ?>
			showNotInstalledModules();
		<?php }?>
		
		bindTabModuleListAction();
	});
	
	function showInstalledModules(element)
	{
		$('#tab_modules_list_not_installed').hide();
		$('#tab_modules_list_installed').show();
		$('#nav_tabs_modules_installed').parent('li').addClass('active');
		$('#nav_tabs_modules_not_installed').parent('li').removeClass('active');
		return false;
	}
	
	function showNotInstalledModules(element)
	{
		$('#tab_modules_list_installed').hide();
		$('#tab_modules_list_not_installed').show();
		$(element).parent('li').addClass('active');
		$('#nav_tabs_modules_not_installed').parent('li').removeClass('active');
		return false;
	}
</script>
	<ul class="nav-tabs-modules">
	<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])){?>
		<li><a id="nav_tabs_modules_installed" href="#" onclick=""><?php echo smartyTranslate(array('s'=>'Installed'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])){?>
		<li><a href="#" id="nav_tabs_modules_not_installed" ><?php echo smartyTranslate(array('s'=>'Not Installed'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	</ul>
	<div id="modules_list_container_content" style="clear:both">
	<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])){?>
	<table id="tab_modules_list_installed" style="clear:both">
		<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
			<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp1), 0);?>

		<?php } ?>
	</table>
	<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])){?>
	<table id="tab_modules_list_not_installed" style="display:none;clear:both">
		<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
			<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp2), 0);?>

		<?php } ?>
	</table>
	<?php }?>
	</div>
<?php }?>
<p style="text-align:right;text-decoration:underline;padding-right:10px"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_module_favorites_view']->value;?>
" style="color:#666"><?php echo smartyTranslate(array('s'=>'More options'),$_smarty_tpl);?>
</a></p><?php }} ?>