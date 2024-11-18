<?php /* Smarty version Smarty-3.1.6, created on 2012-02-21 21:32:00
         compiled from "../views/default/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16352626194ee8d40989f224-56231415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03be405d95652b2f22cc0b288652122179328d0' => 
    array (
      0 => '../views/default/product.tpl',
      1 => 1329845519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16352626194ee8d40989f224-56231415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ee8d409b8b78',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee8d409b8b78')) {function content_4ee8d409b8b78($_smarty_tpl) {?>
    <h3 id="jg_photo_title" class="jg_imgtitle">
      <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>

    </h3>
    
      <img  width="575" id="jg_photo_big" class="jg_photo" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
       
  
    
            Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
            <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a> 
    
         <p> Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }} ?>