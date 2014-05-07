<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:18
         compiled from "C:\xampp\htdocs\prestashop\themes\matrice\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19171536047daa7d8c5-18892093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca0e652cdfee113751c400e4a38ed30bf414daf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\matrice\\footer.tpl',
      1 => 1398818663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19171536047daa7d8c5-18892093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047daa7d8c4_92688443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047daa7d8c4_92688443')) {function content_536047daa7d8c4_92688443($_smarty_tpl) {?>

	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
	<div id="left_column" class="column"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
    <div class="clear"></div>
    <div id="right_column"><ul><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</ul></div>
<!-- Footer -->
<div id="footer">
<div class="path" id="block_various_links_footer"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
</div>
 </div>
</div>
</div>
</div>

	 <?php }?>
 </body>
</html><?php }} ?>