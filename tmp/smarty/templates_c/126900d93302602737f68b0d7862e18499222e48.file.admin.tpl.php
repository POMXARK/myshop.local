<?php /* Smarty version Smarty-3.1.6, created on 2012-03-03 09:53:20
         compiled from "../views/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13287609634f3fd8b885b6c3-05871586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126900d93302602737f68b0d7862e18499222e48' => 
    array (
      0 => '../views/admin/admin.tpl',
      1 => 1330753992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13287609634f3fd8b885b6c3-05871586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f3fd8b89b9f6',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3fd8b89b9f6')) {function content_4f3fd8b89b9f6($_smarty_tpl) {?>

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
</div>
<?php }} ?>