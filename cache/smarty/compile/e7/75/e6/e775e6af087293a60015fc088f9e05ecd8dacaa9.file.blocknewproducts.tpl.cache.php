<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 13:49:53
         compiled from "C:\xampp\htdocs\prestashop\modules\blocknewproducts\blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1358535fe641af79e0-16879783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e775e6af087293a60015fc088f9e05ecd8dacaa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocknewproducts\\blocknewproducts.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1358535fe641af79e0-16879783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'new_products' => 0,
    'product' => 0,
    'mediumSize' => 0,
    'newproduct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535fe641ca2dd9_01089721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535fe641ca2dd9_01089721')) {function content_535fe641ca2dd9_01089721($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<h4 class="title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content">
	<?php if ($_smarty_tpl->tpl_vars['new_products']->value!==false){?>
		<ul class="product_images clearfix">
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['index']++;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['newProducts']['index']<2){?>
				<li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['newProducts']['first']){?> class="first"<?php }?>><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'html', 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'html', 'UTF-8');?>
" /></a></li>
			<?php }?>
		<?php } ?>
		</ul>
		<dl class="products">
		<?php  $_smarty_tpl->tpl_vars['newproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['newproduct']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['newproduct']->iteration=0;
 $_smarty_tpl->tpl_vars['newproduct']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['newproduct']->key => $_smarty_tpl->tpl_vars['newproduct']->value){
$_smarty_tpl->tpl_vars['newproduct']->_loop = true;
 $_smarty_tpl->tpl_vars['newproduct']->iteration++;
 $_smarty_tpl->tpl_vars['newproduct']->index++;
 $_smarty_tpl->tpl_vars['newproduct']->first = $_smarty_tpl->tpl_vars['newproduct']->index === 0;
 $_smarty_tpl->tpl_vars['newproduct']->last = $_smarty_tpl->tpl_vars['newproduct']->iteration === $_smarty_tpl->tpl_vars['newproduct']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['newproduct']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['newproduct']->last;
?>
			<dt class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newproduct']->value['name'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['newproduct']->value['name']), 'html', 'UTF-8');?>
</a></dt>
			<?php if ($_smarty_tpl->tpl_vars['newproduct']->value['description_short']){?><dd class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['newproduct']->value['description_short']),75,'...');?>
</a><br /><a href="<?php echo $_smarty_tpl->tpl_vars['newproduct']->value['link'];?>
" class="lnk_more"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></dd><?php }?>
		<?php } ?>
		</dl>
		<p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
" class="button_large">&raquo; <?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></p>
	<?php }else{ ?>
		<p>&raquo; <?php echo smartyTranslate(array('s'=>'Do not allow new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<!-- /MODULE Block new products -->
<?php }} ?>