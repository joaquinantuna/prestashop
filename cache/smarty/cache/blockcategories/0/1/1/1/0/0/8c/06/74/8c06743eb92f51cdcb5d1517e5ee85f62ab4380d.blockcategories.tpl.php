<?php /*%%SmartyHeaderCode:2328752f18b5c487ab7-26227278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c06743eb92f51cdcb5d1517e5ee85f62ab4380d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1390226062,
      2 => 'file',
    ),
    '5cd8a89fbef5ec2c85df1c6f2fda9c94a7586363' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1390226062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2328752f18b5c487ab7-26227278',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5365a47c38cf65_11408425',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365a47c38cf65_11408425')) {function content_5365a47c38cf65_11408425($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categorías</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/prestashop/index.php?id_category=7&amp;controller=category" 		title="Botellas de todos los tipos con cuello largo">Cuello Largo</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=6&amp;controller=category" 		title="Botellas de todos los tipos transparentes">Transparentes</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=11&amp;controller=category" 		title="Botellas de todos los tipos color &nbsp;ambar">Ambar</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=10&amp;controller=category" 		title="Botellas de todos los tipos verdes">Verdes</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=9&amp;controller=category" 		title="Botellas de todos los tipos con tapa tipo corona">Tapa Corona</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=13&amp;controller=category" 		title="Botellas de todos los tipos con tapa tipo TwistOff">TwistOff</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=12&amp;controller=category" 		title="Botellas de todos los tipos de 330cc">330cc</a>
	</li>

												
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=8&amp;controller=category" 		title="Botellas de todos los tipos de 350cc">350 cc</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>