<?php /* Smarty version Smarty-3.1.14, created on 2014-02-05 00:35:12
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\invalid_token.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3233652f179302625a4-13338065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12089902c44367887ecd362890a1e69f8596d86c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\invalid_token.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3233652f179302625a4-13338065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f179302dc6c6_39327960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f179302dc6c6_39327960')) {function content_52f179302dc6c6_39327960($_smarty_tpl) {?>

<html>
	<head>
		<title><?php echo smartyTranslate(array('s'=>'Invalid security token'),$_smarty_tpl);?>
</title>
	</head>
	<body style="font-family:Arial,Verdana,Helvetica,sans-serif;background-color:#EC8686">
		<div style="background-color:#FAE2E3;border:1px solid #000000;color:#383838;font-weight:700;line-height:20px;margin:0 0 10px;padding:10px 15px;width:500px">
			<img src="../img/admin/error2.png" style="margin:-4px 5px 0 0;vertical-align:middle">
			<?php echo smartyTranslate(array('s'=>'Invalid security token'),$_smarty_tpl);?>

		</div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="get" style="float:left;background: #E3E3E3;border-color: #CCCCCC #BBBBBB #A0A0A0;border-left: 1px solid #BBBBBB;border-radius: 3px 3px 3px 3px;border-right: 1px solid #BBBBBB;border-style: solid;border-width: 1px;color: #000000;margin: 20px 10px;padding:10px;text-align:center;vertical-align:middle;">
			<?php echo smartyTranslate(array('s'=>'I understand the risks and I really want to display this page'),$_smarty_tpl);?>

		</a>
		<a href="index.php" method="get" style="float:left;background: #E3E3E3;border-color: #CCCCCC #BBBBBB #A0A0A0;border-left: 1px solid #BBBBBB;border-radius: 3px 3px 3px 3px;border-right: 1px solid #BBBBBB;border-style: solid;border-width: 1px;color: #000000;margin: 20px 10px;padding:10px;text-align:center;vertical-align:middle;">
			<?php echo smartyTranslate(array('s'=>'Take me out of here!'),$_smarty_tpl);?>

		</a>
	</body>
</html><?php }} ?>