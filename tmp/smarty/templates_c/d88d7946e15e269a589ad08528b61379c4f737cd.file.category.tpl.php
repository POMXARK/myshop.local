<?php /* Smarty version Smarty-3.1.6, created on 2012-02-21 23:16:19
         compiled from "../views/texturia/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2950309664f377d51b17950-12887036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88d7946e15e269a589ad08528b61379c4f737cd' => 
    array (
      0 => '../views/texturia/category.tpl',
      1 => 1329845194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2950309664f377d51b17950-12887036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f377d51b1996',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsChildCats' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f377d51b1996')) {function content_4f377d51b1996($_smarty_tpl) {?>
<h1>Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

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

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsChildCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
<?php } ?><?php }} ?>