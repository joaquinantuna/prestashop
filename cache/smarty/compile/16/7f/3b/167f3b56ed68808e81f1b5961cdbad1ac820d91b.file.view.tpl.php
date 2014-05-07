<?php /* Smarty version Smarty-3.1.14, created on 2014-05-03 17:13:45
         compiled from "C:\xampp\htdocs\prestashop\modules\blocklayered\views\templates\admin\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6237536051c88d24d5-26870581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '167f3b56ed68808e81f1b5961cdbad1ac820d91b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocklayered\\views\\templates\\admin\\view.tpl',
      1 => 1399151609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6237536051c88d24d5-26870581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536051c8d1cef1_77340655',
  'variables' => 
  array (
    'message' => 0,
    'limit_warning' => 0,
    'uri' => 0,
    'price_indexer_url' => 0,
    'full_price_indexer_url' => 0,
    'attribute_indexer_url' => 0,
    'url_indexer_url' => 0,
    'filters_templates' => 0,
    'template' => 0,
    'current_url' => 0,
    'hide_values' => 0,
    'show_quantities' => 0,
    'full_tree' => 0,
    'category_depth' => 0,
    'price_use_tax' => 0,
    'index_cdt' => 0,
    'index_qty' => 0,
    'index_mnf' => 0,
    'index_cat' => 0,
    'PS_LAYERED_INDEXED' => 0,
    'token' => 0,
    'id_lang' => 0,
    'base_folder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536051c8d1cef1_77340655')) {function content_536051c8d1cef1_77340655($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }?>
<div id="ajax-message-ok" class="conf ajax-message alert alert-success" style="display: none">
	<span class="message"></span>
</div>
<div id="ajax-message-ko" class="error ajax-message alert alert-danger" style="display: none">
	<span class="message"></span>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)){?>
	<div class="error">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type']=='suhosin'){?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>


			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.post.max_vars.'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.request.max_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase the Suhosin limit to'),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for max_input_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase this limit to'),$_smarty_tpl);?>

		<?php }?>
		<?php echo smartyTranslate(array('s'=>'%s at least, or you will have to edit the translation files manually.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),$_smarty_tpl);?>

	</div>
<?php }?>
<fieldset>
	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/img/cogs.gif" alt="<?php echo smartyTranslate(array('s'=>'Indexes and caches','mod'=>'blocklayered'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'Indexes and caches','mod'=>'blocklayered'),$_smarty_tpl);?>
</legend>
	<div id="indexing-warning" class="alert alert-warning" style="display: none">
		<?php echo smartyTranslate(array('s'=>'Indexing is in progress. Please do not leave this page','mod'=>'blocklayered'),$_smarty_tpl);?>

	</div>
	<div class="row">
		<a type="button" class="ajaxcall-recurcive button" href="<?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Index all missing prices','mod'=>'blocklayered'),$_smarty_tpl);?>
</a>
		<a type="button" class="ajaxcall-recurcive button" href="<?php echo $_smarty_tpl->tpl_vars['full_price_indexer_url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Rebuild entire price index','mod'=>'blocklayered'),$_smarty_tpl);?>
</a>
		<a type="button" class="ajaxcall button" id="attribute-indexer" rel="attribute" href="<?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Build attribute index','mod'=>'blocklayered'),$_smarty_tpl);?>
</a>
		<a type="button" class="ajaxcall button" id="url-indexer" rel="price" href="<?php echo $_smarty_tpl->tpl_vars['url_indexer_url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Build URL index','mod'=>'blocklayered'),$_smarty_tpl);?>
</a>
	</div>
	<div class="clearfix">&nbsp;</div>
	<div class="row">
		<div class="info">
			<?php echo smartyTranslate(array('s'=>'You can set a cron job that will rebuild price index using the following URL:','mod'=>'blocklayered'),$_smarty_tpl);?>

			<br />
			<strong><?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
</strong>
			<br/>
			<br />
			<?php echo smartyTranslate(array('s'=>'You can set a cron job that will rebuild attribute index using the following URL:','mod'=>'blocklayered'),$_smarty_tpl);?>

			<br />
			<strong><?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
</strong>
			<br/>
			<br />
			<?php echo smartyTranslate(array('s'=>'You can set a cron job that will rebuild URL index using the following URL:','mod'=>'blocklayered'),$_smarty_tpl);?>

			<br />
			<strong><?php echo $_smarty_tpl->tpl_vars['url_indexer_url']->value;?>
</strong>			
		</div>
	</div>
	<div class="row">
		<div class="info"><?php echo smartyTranslate(array('s'=>'A nightly rebuild is recommended.','mod'=>'blocklayered'),$_smarty_tpl);?>
</div>
	</div>
</fieldset>
<div class="clearfix">&nbsp;</div>
<fieldset>
	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/img/cogs.gif" alt="<?php echo smartyTranslate(array('s'=>'Filters templates','mod'=>'blocklayered'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'Filters templates (%d)','sprintf'=>array(count($_smarty_tpl->tpl_vars['filters_templates']->value)),'mod'=>'blocklayered'),$_smarty_tpl);?>
</legend>
	<?php if (count($_smarty_tpl->tpl_vars['filters_templates']->value)>0){?>
	<div class="row">
		<table class="table table-filter-templates">
			<thead>
				<tr>
					<th class="center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID','mod'=>'blocklayered'),$_smarty_tpl);?>
</span></th>
					<th><span class="title_box text-left"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'blocklayered'),$_smarty_tpl);?>
</span></th>
					<th class="center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blocklayered'),$_smarty_tpl);?>
</span></th>
					<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Created on','mod'=>'blocklayered'),$_smarty_tpl);?>
</span></th>
					<th><span class="title_box text-right"><?php echo smartyTranslate(array('s'=>'Actions','mod'=>'blocklayered'),$_smarty_tpl);?>
</span></th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
				<tr>
					<td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
</td>
					<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</td>
					<td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['n_categories'];?>
</td>
					<td><?php echo Tools::displayDate($_smarty_tpl->tpl_vars['template']->value['date_add'],null,true);?>
</td>
					<td class="text-right">
						<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&edit_filters_template=1&id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
" class="btn btn-default"><img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
img/edit.gif" alt="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'blocklayered'),$_smarty_tpl);?>
" /><?php echo smartyTranslate(array('s'=>'Edit','mod'=>'blocklayered'),$_smarty_tpl);?>
</a> 
						<?php }?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&deleteFilterTemplate=1&id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
"
						onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Do you really want to delete this filter template?','mod'=>'blocklayered'),$_smarty_tpl);?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
img/cross.png" alt="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'blocklayered'),$_smarty_tpl);?>
" /><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'blocklayered'),$_smarty_tpl);?>
</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="clearfix">&nbsp;</div>
	</div>
	<?php }else{ ?>
		<div class="info"><?php echo smartyTranslate(array('s'=>'No filter template found.','mod'=>'blocklayered'),$_smarty_tpl);?>
</div>
	<?php }?>
	<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)){?>
	<div class="row">
		<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&add_new_filters_template=1" class="button"><?php echo smartyTranslate(array('s'=>'Add new filters template','mod'=>'blocklayered'),$_smarty_tpl);?>
</a>
	</div>
	<?php }?>
</fieldset>
<div class="clearfix">&nbsp;</div>
<fieldset>
	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/img/cogs.gif" alt="<?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'blocklayered'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'blocklayered'),$_smarty_tpl);?>
</legend>
	<form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post">
		<table class="table-configurations">
			<tbody>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Hide filter values when no product is matching','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_hide_0_values" id="ps_layered_hide_0_values_on" value="1"<?php if ($_smarty_tpl->tpl_vars['hide_values']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_hide_0_values_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_hide_0_values" id="ps_layered_hide_0_values_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['hide_values']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_hide_0_values_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Show the number of matching products','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_on" value="1"<?php if ($_smarty_tpl->tpl_vars['show_quantities']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_show_qties_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['show_quantities']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_show_qties_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Show products from subcategories','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_on" value="1"<?php if ($_smarty_tpl->tpl_vars['full_tree']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_full_tree_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['full_tree']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_full_tree_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Category filter depth (0 for no limits, 1 by default)','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="text" name="ps_layered_filter_category_depth" value="<?php if ($_smarty_tpl->tpl_vars['category_depth']->value!==false){?><?php echo $_smarty_tpl->tpl_vars['category_depth']->value;?>
<?php }else{ ?>1<?php }?>" class="fixed-width-sm" />
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Use tax to filter price','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_tax']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_price_usetax_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_tax']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_price_usetax_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Allow indexing robots (Google, Yahoo!, Bing, etc.) to use the Condition filter','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_filter_index_condition" id="ps_layered_filter_index_condition_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_cdt']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_condition_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_filter_index_condition" id="ps_layered_filter_index_condition_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_cdt']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_condition_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Allow indexing robots Google, Yahoo!, Bing, etc.) to use the Availability filter','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_filter_index_availability" id="ps_layered_filter_index_availability_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_qty']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_availability_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_filter_index_availability" id="ps_layered_filter_index_availability_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_qty']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_availability_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Allow indexing robots (Google, Yahoo!, Bing, etc.) to use the Manufacturer filter','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_filter_index_manufacturer" id="ps_layered_filter_index_manufacturer_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_mnf']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_manufacturer_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_filter_index_manufacturer" id="ps_layered_filter_index_manufacturer_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_mnf']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_manufacturer_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Allow indexing robots (Google, Yahoo!, Bing, etc.) to use the Category filter','mod'=>'blocklayered'),$_smarty_tpl);?>

					</td>
					<td>
						<input type="radio" name="ps_layered_filter_index_category" id="ps_layered_filter_index_category_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_cat']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_category_on" class="radioCheck">
							<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="ps_layered_filter_index_category" id="ps_layered_filter_index_category_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_cat']->value){?> checked="checked"<?php }?>>
						<label for="ps_layered_filter_index_category_off" class="radioCheck">
							<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl);?>

						</label>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<button type="submit" class="btn btn-default" name="submitLayeredSettings"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save configuration','mod'=>'blocklayered'),$_smarty_tpl);?>
</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</fieldset>

<script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value)){?>var PS_LAYERED_INDEXED = <?php echo $_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value;?>
;<?php }?>
	var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var id_lang = <?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
;
	var base_folder = '<?php echo $_smarty_tpl->tpl_vars['base_folder']->value;?>
';
	var translations = new Array();

	translations['in_progress']                   = '<?php echo smartyTranslate(array('s'=>'(in progress)','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['url_indexation_finished']       = '<?php echo smartyTranslate(array('s'=>'URL indexing finished','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['attribute_indexation_finished'] = '<?php echo smartyTranslate(array('s'=>'Attribute indexing finished','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['url_indexation_failed']         = '<?php echo smartyTranslate(array('s'=>'URL indexing failed','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['attribute_indexation_failed']   = '<?php echo smartyTranslate(array('s'=>'Attribute indexing failed','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['price_indexation_finished']     = '<?php echo smartyTranslate(array('s'=>'Price indexing finished','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['price_indexation_failed']       = '<?php echo smartyTranslate(array('s'=>'Price indexing failed','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['price_indexation_in_progress']  = '<?php echo smartyTranslate(array('s'=>'(in progress, %s products price to index)','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['loading']                       = '<?php echo smartyTranslate(array('s'=>'Loading...','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['delete_all_filters_templates']  = '<?php echo smartyTranslate(array('s'=>'You selected -All categories-: all existing filter templates will be deleted. Is it OK?','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['no_selected_categories']        = '<?php echo smartyTranslate(array('s'=>'You must select at least one category','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl);?>
';
</script>
<?php }} ?>