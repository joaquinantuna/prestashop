<?php /*%%SmartyHeaderCode:1816652f18b5a7de294-69897392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc309f282d3552806e2b60ec1522d405ef025cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1390222460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816652f18b5a7de294-69897392',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5365a47b538351_23616333',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365a47b538351_23616333')) {function content_5365a47b538351_23616333($_smarty_tpl) {?>	
	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<li ><a href="http://localhost/prestashop/index.php">Cervezas</a><ul><li ><a href="http://localhost/prestashop/index.php?id_category=7&amp;controller=category">Cuello Largo</a></li><li ><a href="http://localhost/prestashop/index.php?id_category=6&amp;controller=category">Transparentes</a></li><li ><a href="http://localhost/prestashop/index.php?id_category=11&amp;controller=category">Ambar</a></li><li ><a href="http://localhost/prestashop/index.php?id_category=10&amp;controller=category">Verdes</a></li><li ><a href="http://localhost/prestashop/index.php?id_category=9&amp;controller=category">Tapa Corona</a></li><li ><a href="http://localhost/prestashop/index.php?id_category=13&amp;controller=category">TwistOff</a></li><li ><a href="http://localhost/prestashop/index.php?id_category=12&amp;controller=category">330cc</a></li><li ><a href="http://localhost/prestashop/index.php?id_category=8&amp;controller=category">350 cc</a></li></ul></li><li><a href="http://localhost/prestashop/index.php?id_cms_category=1&amp;controller=cms">Inicio</a><ul><li ><a href="http://localhost/prestashop/index.php?id_cms=1&controller=cms">Entrega</a></li><li ><a href="http://localhost/prestashop/index.php?id_cms=2&controller=cms">Aviso legal</a></li><li ><a href="http://localhost/prestashop/index.php?id_cms=3&controller=cms">Condiciones de uso</a></li><li ><a href="http://localhost/prestashop/index.php?id_cms=4&controller=cms">Sobre</a></li><li ><a href="http://localhost/prestashop/index.php?id_cms=5&controller=cms">Pago seguro</a></li></ul></li>

							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/prestashop/index.php?controller=search" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
<?php }} ?>