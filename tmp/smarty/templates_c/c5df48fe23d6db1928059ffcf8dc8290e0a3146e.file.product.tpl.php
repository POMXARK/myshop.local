<?php /* Smarty version Smarty-3.1.6, created on 2012-01-04 15:26:01
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297864ef969149adb58-97454973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1325665920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297864ef969149adb58-97454973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ef96914a6204',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef96914a6204')) {function content_4ef96914a6204($_smarty_tpl) {?>

<h1><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h1>
<div>
    <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 <br />
    <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
<br />
    
    <span>
            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
            <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a> 
    </span>
</div><?php }} ?>