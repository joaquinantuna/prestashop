<?php /* Smarty version Smarty-3.1.14, created on 2014-04-29 20:46:17
         compiled from "C:\xampp\htdocs\prestashop\themes\matrice\modules\editorial\editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24929536047d9ec82e7-14974659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0499bcd3f6e40b32b3b614b89a18fecd01f008df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\matrice\\modules\\editorial\\editorial.tpl',
      1 => 1398818664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24929536047d9ec82e7-14974659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_536047d9f05371_71978913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536047d9f05371_71978913')) {function content_536047d9f05371_71978913($_smarty_tpl) {?><!-- Module Editorial -->
<link href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
themes/matrice/modules/editorial/prod.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
themes/matrice/modules/editorial/jquery_002.js"></script>

<script type="text/javascript" charset="utf-8">
		$(window).load(function()
		{
			init_slideshow()
		})
		
		init_slideshow = function()
		{
			$('#home_slides').cycle({
				fx:'fade',
				timeout:8000,
				pager:'#slide_navigation',
				after:update_slide_caption,
				before:fade_slide_caption
			})
		}
		
		fade_slide_caption = function(next, previous)
		{
			caption_container = $('#project_caption')
			caption_container.fadeOut('fast')
		}
		
		update_slide_caption = function(next, previous)
		{
			caption_container = $('#project_caption')

			caption = $('span.slide_caption', previous)
			caption_container.fadeIn('fast')
			caption_container.html(caption.html())
			
		}
</script>

<div id="home_slideshow">
 <ul style="position: relative; width: 900px; height: 384px;" id="home_slides">
  <li style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 4; opacity: 1;"> 
   <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
themes/matrice/modules/editorial/images/1.jpg" alt="image" />  </a> 
   <span class="slide_caption"> 
       <?php echo smartyTranslate(array('s'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','mod'=>'editorial'),$_smarty_tpl);?>
<br />
       <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules/" class="link"> <?php echo smartyTranslate(array('s'=>'More','mod'=>'editorial'),$_smarty_tpl);?>
 </a> 
   </span> 
  </li>
  <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 2; opacity: 0;"> 
   <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
themes/matrice/modules/editorial/images/2.jpg" alt="image" /> </a> 
   <span class="slide_caption"> 
       <?php echo smartyTranslate(array('s'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of.','mod'=>'editorial'),$_smarty_tpl);?>
<br />
       <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules/" class="link"> <?php echo smartyTranslate(array('s'=>'More','mod'=>'editorial'),$_smarty_tpl);?>
 </a> 
   </span> 
  </li>
  <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 2; opacity: 0;"> 
   <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
themes/matrice/modules/editorial/images/3.jpg" alt="image" /> </a>
   <span class="slide_caption"> 
       <?php echo smartyTranslate(array('s'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.','mod'=>'editorial'),$_smarty_tpl);?>
 <br />
       <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules/" class="link"> <?php echo smartyTranslate(array('s'=>'More','mod'=>'editorial'),$_smarty_tpl);?>
 </a> 
   </span> 
  </li>
  <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 1; opacity: 0;"> 
   <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
themes/matrice/modules/editorial/images/4.jpg" alt="image" /> </a> 
   <span class="slide_caption">
       <?php echo smartyTranslate(array('s'=>'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.','mod'=>'editorial'),$_smarty_tpl);?>
 <br />
       <a href="http://dgcraft.free.fr/blog/index.php/category/free-prestashop-modules/" class="link"> <?php echo smartyTranslate(array('s'=>'More','mod'=>'editorial'),$_smarty_tpl);?>
 </a> 
   </span> 
  </li>
	</ul>
	<div id="home_slideshow_violator" class="clearfix">
	 <div style="display: block;" id="project_caption"></div><div id="slide_navigation" class="clearfix"></div>
	</div>
  </div><?php }} ?>