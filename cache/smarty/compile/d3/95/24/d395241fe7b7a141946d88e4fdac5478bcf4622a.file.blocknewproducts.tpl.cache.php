<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:17
         compiled from "C:\xampp\htdocs\prestashop\themes\matrice\modules\blocknewproducts\blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6507536047d9a037a1-12862516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd395241fe7b7a141946d88e4fdac5478bcf4622a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\matrice\\modules\\blocknewproducts\\blocknewproducts.tpl',
      1 => 1398818664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6507536047d9a037a1-12862516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'new_products' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047d9bebc23_38635811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047d9bebc23_38635811')) {function content_536047d9bebc23_38635811($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><!-- MODULE Block new products -->
<div class="footer_stuffs">
	<h4>
     <strong><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</strong>
     <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
new-products.php">+ <?php echo smartyTranslate(array('s'=>'See more','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
	</h4>
	<?php if ($_smarty_tpl->tpl_vars['new_products']->value){?>
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<?php } ?>
 <?php if (count($_smarty_tpl->tpl_vars['new_products']->value)>0){?> 	  
		<li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['new_products']->value[0]['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[0]['legend'], 'htmlall', 'UTF-8');?>
">
           <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['new_products']->value[0]['link_rewrite'],$_smarty_tpl->tpl_vars['new_products']->value[0]['id_image'],'home');?>
" height="60" width="60" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[0]['legend'], 'htmlall', 'UTF-8');?>
" />
          </a>
  		</li>
<?php }?>
 <?php if (count($_smarty_tpl->tpl_vars['new_products']->value)>1){?> 	  
		<li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['new_products']->value[1]['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[1]['legend'], 'htmlall', 'UTF-8');?>
">
           <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['new_products']->value[1]['link_rewrite'],$_smarty_tpl->tpl_vars['new_products']->value[1]['id_image'],'home');?>
" height="60" width="60" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[1]['legend'], 'htmlall', 'UTF-8');?>
" />
          </a>
  		</li>
<?php }?>
 <?php if (count($_smarty_tpl->tpl_vars['new_products']->value)>2){?> 	  
		<li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['new_products']->value[2]['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[2]['legend'], 'htmlall', 'UTF-8');?>
">
           <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['new_products']->value[2]['link_rewrite'],$_smarty_tpl->tpl_vars['new_products']->value[2]['id_image'],'home');?>
" height="60" width="60" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[2]['legend'], 'htmlall', 'UTF-8');?>
" />
          </a>
  		</li>
<?php }?>
 <?php if (count($_smarty_tpl->tpl_vars['new_products']->value)>3){?> 	  
		<li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['new_products']->value[3]['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[3]['legend'], 'htmlall', 'UTF-8');?>
">
           <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['new_products']->value[3]['link_rewrite'],$_smarty_tpl->tpl_vars['new_products']->value[3]['id_image'],'home');?>
" height="60" width="60" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new_products']->value[3]['legend'], 'htmlall', 'UTF-8');?>
" />
          </a>
  		</li>
<?php }?>
	     <?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No new product at this time','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>
<!-- /MODULE Block new products -->
<?php }} ?>