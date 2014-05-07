<?php /*%%SmartyHeaderCode:2295052f18b69c65d46-11187141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fcb0e4d087fa0ca67374c7c4d89c8ba6f88697e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1390226062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2295052f18b69c65d46-11187141',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5365a47d982d78_78281926',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365a47d982d78_78281926')) {function content_5365a47d982d78_78281926($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/prestashop/index.php?controller=history" title="Listado de mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://localhost/prestashop/index.php?controller=order-slip" title="Listado de mis vales de compra" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=addresses" title="Listado de mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/prestashop/index.php?mylogout" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>