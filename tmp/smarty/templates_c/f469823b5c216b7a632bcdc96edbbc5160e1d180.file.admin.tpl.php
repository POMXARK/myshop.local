<?php /* Smarty version Smarty-3.1.6, created on 2012-01-22 13:11:08
         compiled from "../views/default/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1839056694f1289ea8fcb83-03574492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f469823b5c216b7a632bcdc96edbbc5160e1d180' => 
    array (
      0 => '../views/default/admin.tpl',
      1 => 1327223466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1839056694f1289ea8fcb83-03574492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f1289eaafa7f',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1289eaafa7f')) {function content_4f1289eaafa7f($_smarty_tpl) {?>

<div id="blockNewCategory">
    Новая категория:
    <input name="newCategoryName" id="newCategoryName" type="text" value="" />
    <br />
    Является подкатегорией для

    <select name="generalCatId">
        <option value="0">Главная Категория
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

        <?php } ?>
    </select>
    <br />
    <input type="button" onclick="newCategory();" value="Добавить категорию"/>
</div><?php }} ?>