<?php /* Smarty version Smarty-3.1.6, created on 2012-02-23 11:39:20
         compiled from "../views/texturia/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18288660364f37a2ea05e387-51765141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6da500120acf32917c13307a88c327874c3338' => 
    array (
      0 => '../views/texturia/product.tpl',
      1 => 1329845427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18288660364f37a2ea05e387-51765141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f37a2ea18a29',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f37a2ea18a29')) {function content_4f37a2ea18a29($_smarty_tpl) {?>
<div id="jf-content">
<div id="image_detail" class="gallery">
  
  <div>
    <h3 id="jg_photo_title" class="jg_imgtitle">
      <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>

    </h3>
  </div>
    
  <div style="text-align:center;" class="jg_dtl_photo" id="jg_dtl_photo">
      <img width="675" id="jg_photo_big" class="jg_photo" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
  </div>
       
  
    
<div class="jg_photo_details" style="font-size: 20px; padding-top: 20px;">
    <div class="jg_details">
            <div class="sectiontableentry2">
        <div class="jg_photo_left">
            Стоимость        </div>
        <div id="jg_photo_date" class="jg_photo_right">
            <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</div>
        </div>
    </div>
    <div class="jg_detailnavi" style="padding-top: 8px;">
        <div class="jg_iconbar" >
            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
            <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a> 
        </div>
    </div>
    <div style="clear: both;"></div>
</div>
    
      <div class="jg_photo_description">
        <div id="jg_photo_description_label">
          Описание
        </div>
        <div class="jg_photo_des">
          <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
        </div>
      </div>
  <div class="sectiontableheader">
    &nbsp;
  </div>
</div>

</div><?php }} ?>