<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:17
         compiled from "C:\xampp\htdocs\prestashop\modules\promotions\promotions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7368536047d9c65d46-87988289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad21bc87795963da27400f2fe2925782ce9250d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\promotions\\promotions.tpl',
      1 => 1398818731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7368536047d9c65d46-87988289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbLines' => 0,
    'liHeight' => 0,
    'base_dir' => 0,
    'product' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047d9dd40a6_23344143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047d9dd40a6_23344143')) {function content_536047d9dd40a6_23344143($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><div class="footer_stuffs" style="height:100px; overflow:hidden">
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(360, null, 0);?>
<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['nbLines'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbLi']->value/ceil($_smarty_tpl->tpl_vars['nbItemsPerLine']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['ulHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbLines']->value*$_smarty_tpl->tpl_vars['liHeight']->value, null, 0);?>
 <h4>
   <strong><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'promotions'),$_smarty_tpl);?>
</strong>
   <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
prices-drop.php">+ <?php echo smartyTranslate(array('s'=>'See more','mod'=>'promotions'),$_smarty_tpl);?>
</a>
 </h4>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['promotionsProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['promotionsProducts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['promotionsProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['promotionsProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['promotionsProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
<li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['promotionsProducts']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['promotionsProducts']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['promotionsProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0){?>last_item_of_line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['promotionsProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1){?>first_item_of_line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['promotionsProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['promotionsProducts']['total']-($_smarty_tpl->getVariable('smarty')->value['foreach']['promotionsProducts']['total']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value))){?>last_line<?php }?>">
<p class="linked_img">
<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium');?>
" height="60" width="60" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" /></a>
</p>
</li>
<?php } ?>
<?php }else{ ?>
<p><?php echo smartyTranslate(array('s'=>'No specials','mod'=>'promotions'),$_smarty_tpl);?>
</p>
<?php }?>
</div>
<!-- /MODULE Promotions -->

<?php }} ?>