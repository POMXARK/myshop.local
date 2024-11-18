<?php /* Smarty version Smarty-3.1.6, created on 2012-01-04 11:27:40
         compiled from "../views/default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112694ef9690f3e4957-77262952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efe512959f670dcfbe2dc8447081a8ad91a48b' => 
    array (
      0 => '../views/default\\category.tpl',
      1 => 1325664664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112694ef9690f3e4957-77262952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ef9690f46ff0',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef9690f46ff0')) {function content_4ef9690f46ff0($_smarty_tpl) {?>

<h1>Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>


<div>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
<?php } ?>
</div>

<?php }} ?>