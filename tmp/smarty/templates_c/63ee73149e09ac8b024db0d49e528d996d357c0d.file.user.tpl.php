<?php /* Smarty version Smarty-3.1.6, created on 2012-01-04 14:06:33
         compiled from "../views/default\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8974ef96b3c917c58-14128635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ee73149e09ac8b024db0d49e528d996d357c0d' => 
    array (
      0 => '../views/default\\user.tpl',
      1 => 1325665951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8974ef96b3c917c58-14128635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ef96b3c9845b',
  'variables' => 
  array (
    'arUser' => 0,
    'rsUserOrders' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef96b3c9845b')) {function content_4ef96b3c9845b($_smarty_tpl) {?>

<h1>Ваши регистрационные даные:</h1>
Логин (email) : <?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
<br />
Имя :<input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /><br />
Тел :<input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /><br />
Адрес :<textarea  id="newAdress"  /><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea><br />
<br /><br />

Новый пароль :<input type="password" id="newPwd1" value="" /><br />
Повтор пароля :<input type="password" id="newPwd2" value="" /><br />
<br /><br />

Для того чтобы сохранить данные введите текущий пароль :<br />
<input type="password" id="curPwd" value="" /><br /><br />
<input type="button" value="Сохранить изменения" onClick="updateUserData();"/>
<hr />

<h2>Заказы:</h2>

<table border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>№</th>
		<th>Действие</th>
		<th>ID заказа</th>
		<th>Статус</th>
		<th>Дата создания</th>
		<th>Дата оплаты</th>
		<th>Дополнительная информация</th>
	</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsUserOrders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']++;
?>
<tr>
	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'];?>
</td>
	<td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;" >Показать товар заказа</a></td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
</tr>

<tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
	<td colspan="7">
    <?php if ($_smarty_tpl->tpl_vars['item']->value['children']){?>
		<table border="1" cellpadding="1" cellspacing="1" width="100%">
			<tr>
				<th>№</th>
				<th>ID</th>
				<th>Название</th>
				<th>Цена</th>
				<th>Количество</th>
			</tr>
       <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
		   <tr>
			   <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
</td>
			   <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></td>
			   <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
			   <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
		   </tr>
       <?php } ?>
	   </table>
    <?php }?>
	</td>
</tr>

<?php } ?>
</table><?php }} ?>