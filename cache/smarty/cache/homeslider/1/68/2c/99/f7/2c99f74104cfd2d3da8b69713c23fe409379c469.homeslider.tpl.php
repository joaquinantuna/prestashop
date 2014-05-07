<?php /*%%SmartyHeaderCode:3119452f18b6540d995-83265354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c99f74104cfd2d3da8b69713c23fe409379c469' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\homeslider\\homeslider.tpl',
      1 => 1390222462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3119452f18b6540d995-83265354',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5365a47d036782_48158857',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365a47d036782_48158857')) {function content_5365a47d036782_48158857($_smarty_tpl) {?>
<!-- Module HomeSlider -->
<script type="text/javascript">
	var homeslider_loop = false;
var homeslider_speed = 500;
var homeslider_pause = 3000;
</script>
<ul id="homeslider">
			<li>
			<a href="prestashop/index.php?id_product=1&amp;controller=product" title="This is a sample picture">
			<img src="http://localhost/prestashop/modules/homeslider/images/6ccb176e2602ed676896c21e2ba91f6b.jpg" alt="sample-1" height="300" width="535" />
			</a>
		</li>
	</ul>
<!-- /Module HomeSlider -->
<?php }} ?>