<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:52:46
         compiled from "C:\xampp\htdocs\prestashop\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1531252f18b5e501bd6-90205131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95e3dee108750f67b254daad06274133a3872914' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1531252f18b5e501bd6-90205131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f18b5e53ec68_44006370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f18b5e53ec68_44006370')) {function content_52f18b5e53ec68_44006370($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>