<?php /* Smarty version Smarty-3.1.6, created on 2012-01-04 16:18:43
         compiled from "../views/default\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295444ef96b346445f2-84871650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666b6bc8023c125a090718b73de3d72f4408aabe' => 
    array (
      0 => '../views/default\\order.tpl',
      1 => 1325690104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295444ef96b346445f2-84871650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ef96b34717a8',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'arUser' => 0,
    'buttonClass' => 0,
    'name' => 0,
    'phone' => 0,
    'adress' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef96b34717a8')) {function content_4ef96b34717a8($_smarty_tpl) {?>

<h2>Данные заказа</h2>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
<table>
     <tr>
         <td>№</td>
         <td>Наименование</td>
         <td>Количество</td>
         <td>Цена за еденицу</td>
         <td>Стоимость</td>
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
        <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
         <td>  
             <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
               <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
" /> 
				 <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

             </span>
         </td>
         <td>  
             <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" /> 
				 <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

            </span>
         </td>
         <td>  
             <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				 <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
" /> 
            <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

             </span>
         </td>
     </tr>
    <?php } ?>
 </table>
 
 <h2>Данные заказчика</h2>
<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
	<?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable('', null, 0);?>
<?php }else{ ?>
	
	<div id="loginBox">
		<div class="menuCaption">Авторизация</div>
		Логин: 
		<input type="text" id="loginEmail" name="loginEmail" value=""/><br />
		Пароль: 
		<input type="password" id="loginPwd" name="loginPwd" value=""/><br />
		<input type="button" onclick="login();" value="Войти"/>
	</div> 
	
	 <div id="registerBox">
		  или <br />
	<div class="menuCaption">Регистрация нового пользователя:</div>
	email* :<br />
	<input type="text" id="email" name="email" value=""/><br />
	пароль* : <br />
	<input type="password" id="pwd1" name="pwd1" value=""/><br />
	повторить пароль* :<br />
	<input type="password" id="pwd2" name="pwd2" value=""/><br />
	
	Имя* :<input type="text" id="name" name="name" value="" /><br />
	Тел* :<input type="text" id="phone" name="phone" value="" /><br />
	Адрес* :<textarea  id="adress" name="adress" /></textarea><br />

	<input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
	</div>
	<?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable("class='hideme'", null, 0);?>
<?php }?>
<div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
>
	<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
		<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['name'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['phone'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['adress'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['adress'], null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable('', null, 0);?><?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable('', null, 0);?><?php $_smarty_tpl->tpl_vars['adress'] = new Smarty_variable('', null, 0);?>
	<?php }?>
	Имя* :<input type="text" id="nameOrder"   name="nameOrder"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /><br />
	Тел* :<input type="text" id="phoneOrder"  name="phoneOrder" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" /><br />
	Адрес* :<textarea id="adressOrder" name="adressOrder" /><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</textarea><br />
	<input id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();"/>
</div>

</form>
	<?php }} ?>