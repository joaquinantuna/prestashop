<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:18
         compiled from "C:\xampp\htdocs\prestashop\themes\matrice\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13446536047da03d093-99271609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4701ec82ad9b54a1a28e17f1e8ad3165f7839151' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\matrice\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1398818664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13446536047da03d093-99271609',
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
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047da3567e4_83203497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047da3567e4_83203497')) {function content_536047da3567e4_83203497($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><!-- MODULE Home Featured Products -->
<div class="block products_block">
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
    <div class="block_content">
     <?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(360, null, 0);?>
     <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
     <?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
     <?php $_smarty_tpl->tpl_vars['nbLines'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbLi']->value/ceil($_smarty_tpl->tpl_vars['nbItemsPerLine']->value), null, 0);?>
     <?php $_smarty_tpl->tpl_vars['ulHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbLines']->value*$_smarty_tpl->tpl_vars['liHeight']->value, null, 0);?>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
        <?php $_smarty_tpl->tpl_vars['productLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category']), null, 0);?>
        <li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0){?>last_item_of_line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1){?>first_item_of_line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']-($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value))){?>last_line<?php }?>">

		  <p>
          <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" class="product_img_link" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">
           <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'large');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)){?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> />
          </a>
          </p>

		  <h5>
            <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],25,'...'), 'htmlall', 'UTF-8');?>
</a>
          </h5>
                
		  <p class="product_desc"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape(strip_tags($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['description_short'],360,'...')), 'htmlall', 'UTF-8');?>
"><?php echo strip_tags($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['description_short'],130,'...'));?>
</a></p>

          <p class="pprice">
           <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
            <span>
             <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
            </span>
           <?php }?>
           <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeatured'),$_smarty_tpl);?>
</a>
           <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
            <?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2){?>
             <a class="ajax_add_to_cart_button" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart.php');?>
?add&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)){?>&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'cart','mod'=>'homefeatured'),$_smarty_tpl);?>
</a>
            <?php }else{ ?>
              <strike><?php echo smartyTranslate(array('s'=>'cart','mod'=>'homefeatured'),$_smarty_tpl);?>
</strike>
            <?php }?>
           <?php }?>
        </p>
         </li>
         <?php } ?>
        </ul>
    </div>
    <?php }else{ ?>
    <p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</p>
<?php }?>
</div>
<!-- /MODULE Home Featured Products -->
<?php }} ?>