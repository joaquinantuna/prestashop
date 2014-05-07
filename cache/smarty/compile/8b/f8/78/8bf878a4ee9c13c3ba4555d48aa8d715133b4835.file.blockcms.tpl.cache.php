<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:18
         compiled from "C:\xampp\htdocs\prestashop\themes\matrice\modules\blockcms\blockcms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15732536047da44aa25-97117724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf878a4ee9c13c3ba4555d48aa8d715133b4835' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\matrice\\modules\\blockcms\\blockcms.tpl',
      1 => 1398818664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15732536047da44aa25-97117724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'display_stores_footer' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'base_dir' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047da66ff39_52331283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047da66ff39_52331283')) {function content_536047da66ff39_52331283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['block']->value==1){?>
	<!-- Block CMS module -->
	<?php  $_smarty_tpl->tpl_vars['cms_title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_title']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_title']->key => $_smarty_tpl->tpl_vars['cms_title']->value){
$_smarty_tpl->tpl_vars['cms_title']->_loop = true;
?>
         <ul class="block_various_links">
          <h4><a href="<?php echo $_smarty_tpl->tpl_vars['cms_title']->value['category_link'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['cms_title']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['category_name'];?>
<?php }?></a></h4>
            <?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value){
$_smarty_tpl->tpl_vars['cms_page']->_loop = true;
?>
                <?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])){?><li class="bullet"><b style="margin-left:2em;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['cms_page']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['name'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['name'], 'html', 'UTF-8');?>
</a>
                </b></li><?php }?>
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value){
$_smarty_tpl->tpl_vars['cms_page']->_loop = true;
?>
             <?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])){?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['cms_page']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], 'html', 'UTF-8');?>
</a></li>
             <?php }?>
            <?php } ?>
             <?php if ($_smarty_tpl->tpl_vars['cms_title']->value['display_store']){?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
             <?php }?>
        </ul>
	<?php } ?>
	<!-- /Block CMS module -->
<?php }else{ ?>
	<!-- MODULE Block footer -->
	<ul class="block_various_links" id="block_various_links_footer">
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
         <li class="first_item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
        <?php }?>
		 <li class="<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>first_<?php }?>item">
          <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products.php');?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>
</a>
         </li>
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
         <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['display_stores_footer']->value){?>
         <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
        <?php }?>
		<li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact-form.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
		<?php  $_smarty_tpl->tpl_vars['cmslink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmslink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cmslinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmslink']->key => $_smarty_tpl->tpl_vars['cmslink']->value){
$_smarty_tpl->tpl_vars['cmslink']->_loop = true;
?>
		 <?php if ($_smarty_tpl->tpl_vars['cmslink']->value['meta_title']!=''){?>
		  <li class="item"><a href="<?php echo addslashes($_smarty_tpl->tpl_vars['cmslink']->value['link']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], 'htmlall', 'UTF-8');?>
</a></li>
		 <?php }?>
		<?php } ?>
	</ul>
	<p><?php echo smartyTranslate(array('s'=>'Powered by','mod'=>'blockcms'),$_smarty_tpl);?>
 <a href="http://www.prestashop.com">PrestaShop</a>&trade;</p>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
cms.php?id_cms=5"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
payment_logo.gif" alt="image" /></a></p>

	<!-- /MODULE Block footer -->
<?php }?><?php }} ?>