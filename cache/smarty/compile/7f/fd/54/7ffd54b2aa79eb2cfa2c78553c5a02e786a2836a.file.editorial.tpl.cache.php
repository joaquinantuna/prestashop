<?php /* Smarty version Smarty-3.1.14, created on 2014-05-03 11:35:56
         compiled from "C:\xampp\htdocs\prestashop\modules\editorial\editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204253650cdc59a6f8-40025804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ffd54b2aa79eb2cfa2c78553c5a02e786a2836a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\editorial\\editorial.tpl',
      1 => 1390222462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204253650cdc59a6f8-40025804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editorial' => 0,
    'homepage_logo' => 0,
    'image_path' => 0,
    'link' => 0,
    'image_width' => 0,
    'image_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53650cdcad9356_86832354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53650cdcad9356_86832354')) {function content_53650cdcad9356_86832354($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Module Editorial -->
<div id="editorial_block_center" class="editorial_block">
	<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_home_logo_link){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['editorial']->value->body_home_logo_link, 'htmlall', 'UTF-8');?>
" title="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['editorial']->value->body_title, 'htmlall', 'UTF-8'));?>
"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value){?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path']->value), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['editorial']->value->body_title, 'htmlall', 'UTF-8'));?>
" <?php if ($_smarty_tpl->tpl_vars['image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['image_height']->value;?>
" <?php }?>/><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_home_logo_link){?></a><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_logo_subheading){?><p id="editorial_image_legend"><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_logo_subheading);?>
</p><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_title){?><h1><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_title);?>
</h1><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_subheading){?><h2><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_subheading);?>
</h2><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph);?>
</div><?php }?>
</div>
<!-- /Module Editorial -->
<?php }} ?>