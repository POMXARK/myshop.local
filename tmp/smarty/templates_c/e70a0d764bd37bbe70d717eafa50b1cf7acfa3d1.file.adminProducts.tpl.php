<?php /* Smarty version Smarty-3.1.6, created on 2012-02-04 22:01:19
         compiled from "../views/default/adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20247528894f2516570be4f7-76714194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70a0d764bd37bbe70d717eafa50b1cf7acfa3d1' => 
    array (
      0 => '../views/default/adminProducts.tpl',
      1 => 1328378477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20247528894f2516570be4f7-76714194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f2516574fbf6',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'rsCategories' => 0,
    'itemCat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2516574fbf6')) {function content_4f2516574fbf6($_smarty_tpl) {?><h2>Товар</h2>

    <table border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>№</th>
            <th>ID</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Категория</th>
            <th>Описание</th>
            <th>Удалить</th>
            <th>Изображение</th>
			<th>Сохранить</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td>
                    <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
                </td>
                <td>
                    <input type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
                </td>
                
                <td>
                    <select id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <option value="0">Главная Категория
                        <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id']==$_smarty_tpl->tpl_vars['itemCat']->value['id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                        <?php } ?>
                    </select>
                </td>
                <td>
                    <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                    </textarea>
                </td>
                <td>
                    <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>checked="checked"<?php }?> />
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['image']){?>
                    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" />                    
                    <?php }?>
                     <form action="/admin/upload/" method="post" enctype="multipart/form-data">
                        <input type="file" name="filename"><br> 
                        <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="submit" value="Загрузить"><br>
                    </form>
                </td>
				<td>
                    <input type="button" value="Сохранить" onclick="updateProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
                </td>
            </tr>

        <?php } ?>
    </table><?php }} ?>