<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:40:17
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/footer_links/ApBlockLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798716409591ef5c1a121c4-15206591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd2c9fb5d9d262b716161d6774da2b5c3325a7c7' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/footer_links/ApBlockLink.tpl',
      1 => 1447747626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798716409591ef5c1a121c4-15206591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'item' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef5c1a60cb5_75471569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef5c1a60cb5_75471569')) {function content_591ef5c1a60cb5_75471569($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockLink -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value;?>



<div id="blockLink-<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['form_id'];?>
" class="ApBlockLink">
    <div class="block footer-block">
        <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['name'];?>
</h4>
        <ul class="toggle-footer list-group bullet">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['title']&&$_smarty_tpl->tpl_vars['item']->value['link']) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value;?>
<?php }} ?>
