<?php /* Smarty version Smarty-3.1.6, created on 2012-02-21 21:32:44
         compiled from "../views/default/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19235988924eecc9bacf80f6-00424622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91f57c222de0d3586f12f49b68664f2b1b3a4073' => 
    array (
      0 => '../views/default/cart.tpl',
      1 => 1329155181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19235988924eecc9bacf80f6-00424622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4eecc9bae8c97',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eecc9bae8c97')) {function content_4eecc9bae8c97($_smarty_tpl) {?>

<h1>Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
В корзине пусто.
        
<?php }else{ ?>
 

<div>
    <form action="/cart/order/" method="POST">
<h2>Данные заказа</h2>
 <table>
     <tr>
         <td>
             №
         </td>
         <td>
             Наименование
         </td>
         <td>  
            Количество
         </td>
         <td>  
            Цена за еденицу
         </td>
         <td>  
            Цена
         </td>
         <td>  
            Действие
         </td>
     </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
    <tr>
        <td>
             <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>

         </td>
        <td>
             <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
             
         </td>
         <td>  
            <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
         </td>
         <td>  
             <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

            </span>
         </td>
         <td>  
             <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

             </span>
         </td>
         <td>  
            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из корзины">Удалить</a>
            <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент">Восстановить</a>
         </td>
         
     </tr>
    <?php } ?>
 </table>
 
 
<input type="submit" value="Оформить заказ"/>    
       </form>
</div>
<?php }?> <?php }} ?>