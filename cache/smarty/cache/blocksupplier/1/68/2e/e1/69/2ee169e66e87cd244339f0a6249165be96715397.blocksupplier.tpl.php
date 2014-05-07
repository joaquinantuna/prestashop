<?php /*%%SmartyHeaderCode:2368252f18b5d40d994-05427672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ee169e66e87cd244339f0a6249165be96715397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1390226062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2368252f18b5d40d994-05427672',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5365a47c669627_42422742',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365a47c669627_42422742')) {function content_5365a47c669627_42422742($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=supplier" title="Proveedores">Proveedores</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="last_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=3&amp;controller=supplier" title="Más sobre Edificio Viena">Edificio Viena</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=3&amp;controller=supplier">Edificio Viena</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>