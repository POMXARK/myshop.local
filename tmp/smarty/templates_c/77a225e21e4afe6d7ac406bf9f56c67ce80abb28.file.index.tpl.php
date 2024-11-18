<?php /* Smarty version Smarty-3.1.6, created on 2012-02-18 20:51:28
         compiled from "../views/texturia/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19398481294f32bd62356f14-94845333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a225e21e4afe6d7ac406bf9f56c67ce80abb28' => 
    array (
      0 => '../views/texturia/index.tpl',
      1 => 1329583886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19398481294f32bd62356f14-94845333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f32bd6235ae7',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f32bd6235ae7')) {function content_4f32bd6235ae7($_smarty_tpl) {?>


 <div class="joomcat">
    <div class="joomcat65_row">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
            <div style="width:216px !important;margin-right:10px;" class="joomcat65_imgct ">
                <div class="joomcat65_img cat_img">
                    <a  href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" />
                    </a>
                </div>
                <div style="padding-bottom:10px;padding-top:0px;" class="joomcat65_txt">
                    <ul>
                    <li><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    </ul>
                </div>
            </div>

            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
            <div class="joomcat65_clr"></div>
    </div>
                <div class="joomcat65_row">
            <?php }?> 
            
        <?php } ?>
                </div>
    
  
</div>
  


<?php }} ?>