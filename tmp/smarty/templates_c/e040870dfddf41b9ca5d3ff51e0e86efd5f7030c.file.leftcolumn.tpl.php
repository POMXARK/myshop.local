<?php /* Smarty version Smarty-3.1.6, created on 2012-02-13 21:38:52
         compiled from "../views/texturia/leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19949959504f3690ca632121-21581568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e040870dfddf41b9ca5d3ff51e0e86efd5f7030c' => 
    array (
      0 => '../views/texturia/leftcolumn.tpl',
      1 => 1329154671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19949959504f3690ca632121-21581568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f3690ca78757',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
    'arUser' => 0,
    'hideLoginBox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3690ca78757')) {function content_4f3690ca78757($_smarty_tpl) {?><div id="jf-right">

<div class="jfmod module" id="Mod52">
    <div class="jfmod-top"></div>
    <div class="jfmod-mid">
        <h3>Меню:</h3>
        <div class="jfmod-content">
            <ul class="menu">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                <li class="item44"><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span></a></li>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                    <ul class="menu" style="padding:0px 0px 10px 20px;">
                    <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                    <li class="item44"><a  href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><span><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</span></a></li>
                    <?php } ?>
                    </ul>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    </div>
<div class="jfmod-bot"></div>
</div>

<div class="jfmod module_blue" id="Mod66">
    <div class="jfmod-top"></div>
        <div class="jfmod-mid">
            <h3>Корзина</h3>
            <div class="jfmod-content"><div class="joomimg66_main">
                <div class="joomimg_row" style="font-size: 16px;">
                     <a href="/cart/" title="Перейти в корзину">В корзине</a>
                    <span id="cartCntItems">
                        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
                    </span>    
                </div>
                <div class="joomimg_clr"></div>
            </div></div>
        </div>
		<div class="jfmod-bot"></div>
 </div>
 
			
<div class="jfmod module_orangebold" id="Mod53">
    <div class="jfmod-top"></div>
    <div class="jfmod-mid">
   
    <div class="jfmod-content">
        
    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
        <div id="userBox">
            <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br />
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>
    
    <?php }else{ ?>
        <div id="userBox" class="hideme">
            <a href="#" id="userLink"></a><br />
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>
        <?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)){?>
            <div id="loginBox">
                <div id="form-login">
                    Введите логин и пароль	
                    <fieldset class="input">
                        <p id="form-login-username">
                            <input type="text" id="loginEmail" value="Username" name="username" class="inputbox" alt="username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';">
                        </p>
                        <p id="form-login-password">
                            <input type="password" id="loginPwd" value="Password" name="passwd" class="inputbox" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';" alt="password">
                        </p>
                        <p style="text-align:right">

                        <input type="button" class="buttonLogin" onclick="login();" value="Войти"/>
                        </p>
                    </fieldset>
                </div>
            </div>
        <div id="registerBox">
                <div class="re-link menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                <div id="form-login">
                <fieldset class="input">
                        <div id="registerBoxHidden" class="hideme">
                            <p>
                            email:<br />
                            <input type="text" id="email" name="email" value=""/><br />
                            пароль: <br />
                            <input type="password" id="pwd1" name="pwd1" value=""/><br />
                            повторить пароль:<br />
                            <input type="password" id="pwd2" name="pwd2" value=""/><br />
                            </p>
                            <input type="button" class="buttonLogin" onclick="registerNewUser();" value="Зарегистрироваться"/>
                            
                        </div>
                </fieldset>        
                </div>
                <p></p>	
        </div>
            
        <?php }?>
    <?php }?>
    </div></div>
<div class="jfmod-bot"></div>
</div>
		
 
 
	
</div><?php }} ?>