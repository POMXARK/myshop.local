<?php /* Smarty version Smarty-3.1.6, created on 2012-02-12 14:49:50
         compiled from "../views/texturia/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13866950734f37994e88c925-32348571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37edc12307879bd82153e63759ca8e46dace188a' => 
    array (
      0 => '../views/texturia/admin.tpl',
      1 => 1329043786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13866950734f37994e88c925-32348571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f37994e8eef9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f37994e8eef9')) {function content_4f37994e8eef9($_smarty_tpl) {?>

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