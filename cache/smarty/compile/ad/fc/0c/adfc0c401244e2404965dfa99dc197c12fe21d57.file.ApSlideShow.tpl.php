<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:40:19
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:374474181591ef5c3435600-10033361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfc0c401244e2404965dfa99dc197c12fe21d57' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl',
      1 => 1447747635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374474181591ef5c3435600-10033361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'content_slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef5c349b988_22612492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef5c349b988_22612492')) {function content_591ef5c349b988_22612492($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div id="slideshow-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>
