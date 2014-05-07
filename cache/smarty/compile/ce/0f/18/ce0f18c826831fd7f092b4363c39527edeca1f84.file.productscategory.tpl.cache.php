<?php /* Smarty version Smarty-3.1.14, created on 2014-05-03 17:22:43
         compiled from "C:\xampp\htdocs\prestashop\modules\productscategory\productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850253655e238cbbc0-19917986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0f18c826831fd7f092b4363c39527edeca1f84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\productscategory\\productscategory.tpl',
      1 => 1390222462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850253655e238cbbc0-19917986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'ProdDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'middlePosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53655e23c5f439_62570965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53655e23c5f439_62570965')) {function content_53655e23c5f439_62570965($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['categoryProducts']->value)&&count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false){?>
<div class="clearfix blockproductscategory">
	<h2 class="productscategory_h2"><?php echo count($_smarty_tpl->tpl_vars['categoryProducts']->value);?>
 <?php echo smartyTranslate(array('s'=>'other products in the same category:','mod'=>'productscategory'),$_smarty_tpl);?>
</h2>
	<div id="<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>5){?>productscategory<?php }else{ ?>productscategory_noscroll<?php }?>">
	<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>5){?><a id="productscategory_scroll_left" title="<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'productscategory'),$_smarty_tpl);?>
" href="javascript:{}"><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'productscategory'),$_smarty_tpl);?>
</a><?php }?>
	<div id="productscategory_list">
		<ul <?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>5){?>style="width: <?php echo smarty_function_math(array('equation'=>"width * nbImages",'width'=>107,'nbImages'=>count($_smarty_tpl->tpl_vars['categoryProducts']->value)),$_smarty_tpl);?>
px"<?php }?>>
			<?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value){
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?>
			<li <?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)<6){?>style="width:60px"<?php }?>>
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="lnk_img" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" /></a>
				<p class="product_name">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],14,'...'), 'htmlall', 'UTF-8');?>
</a>
				</p>
				<?php if ($_smarty_tpl->tpl_vars['ProdDisplayPrice']->value&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
				<p class="price_display">
					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
				</p>
				<?php }else{ ?>
				<br />
				<?php }?>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>5){?><a id="productscategory_scroll_right" title="<?php echo smartyTranslate(array('s'=>'Next','mod'=>'productscategory'),$_smarty_tpl);?>
" href="javascript:{}"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'productscategory'),$_smarty_tpl);?>
</a><?php }?>
	</div>
	<script type="text/javascript">
		$('#productscategory_list').trigger('goto', [<?php echo $_smarty_tpl->tpl_vars['middlePosition']->value;?>
-3]);
	</script>
</div>
<?php }?>
<?php }} ?>