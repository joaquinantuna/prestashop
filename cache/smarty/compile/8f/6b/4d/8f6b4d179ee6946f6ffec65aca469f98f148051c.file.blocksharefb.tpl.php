<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 05:09:17
         compiled from "C:\xampp\htdocs\prestashop\modules\blocksharefb\blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8419535f6c3de11138-92419234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6b4d179ee6946f6ffec65aca469f98f148051c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocksharefb\\blocksharefb.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8419535f6c3de11138-92419234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535f6c3df05378_27248184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f6c3df05378_27248184')) {function content_535f6c3df05378_27248184($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>