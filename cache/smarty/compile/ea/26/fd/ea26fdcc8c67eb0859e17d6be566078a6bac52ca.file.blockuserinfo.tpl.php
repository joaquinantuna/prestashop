<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:16
         compiled from "C:\xampp\htdocs\prestashop\themes\matrice\modules\blockuserinfo\blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28380536047d881b327-54025062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea26fdcc8c67eb0859e17d6be566078a6bac52ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\matrice\\modules\\blockuserinfo\\blockuserinfo.tpl',
      1 => 1398818664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28380536047d881b327-54025062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'customerName' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'cart_qties' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047d8ca2dd8_25396329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047d8ca2dd8_25396329')) {function content_536047d8ca2dd8_25396329($_smarty_tpl) {?>

<!-- Block user information module HEADER -->
<div id="header_user">
  <ul class="header_links">
   <li>
		<?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'blockuserinfo'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>,
			<b><?php echo $_smarty_tpl->tpl_vars['customerName']->value;?>
</b> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
my-account.php"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?mylogout" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		<?php }else{ ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
my-account.php" id="try-1"><?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		<?php }?>
   </li>
 </ul>
 <ul class="shopping_cart">
 <h4><?php echo smartyTranslate(array('s'=>'Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 : </a></h4>	
    <li>
	<span class="ajax_cart_no_product <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?>hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'empty','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
      <span class="ajax_cart_quantity"><?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
<?php }?></span>
      <span class="ajax_cart_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value!=1){?> hidden<?php }?>">
        <?php echo smartyTranslate(array('s'=>'product','mod'=>'blockuserinfo'),$_smarty_tpl);?>

        <span class="ajax_cart_total"><?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true)),$_smarty_tpl);?>
<?php }?></span>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
order.php" title="<?php echo smartyTranslate(array('s'=>'view','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
order.php?step=1" id="button_order_cart" title="<?php echo smartyTranslate(array('s'=>'check out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'check out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
     </span>
     <span class="ajax_cart_product <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value<2){?> hidden<?php }?>">
        <?php echo smartyTranslate(array('s'=>'products','mod'=>'blockuserinfo'),$_smarty_tpl);?>

        <span class="ajax_cart_total"><?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true)),$_smarty_tpl);?>
<?php }?></span>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
order.php" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'view','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
order.php?step=1" id="button_order_cart" title="<?php echo smartyTranslate(array('s'=>'check out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'check out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
     </span>              
    </li>
  </ul>
</div>
<!-- /Block user information module HEADER -->
<?php }} ?>