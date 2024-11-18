<?php /* Smarty version Smarty-3.1.6, created on 2012-02-18 14:38:53
         compiled from "../views/admin/adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13552481824f3f7ed2c385f1-30185058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e73db88c29c16937b1faf309b36a10618991bc' => 
    array (
      0 => '../views/admin/adminHeader.tpl',
      1 => 1329561433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13552481824f3f7ed2c385f1-30185058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f3f7ed2d4a05',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f3f7ed2d4a05')) {function content_4f3f7ed2d4a05($_smarty_tpl) {?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/admin.js"></script>
    </head>
    
    <body>
        <div id="header">
			<h1>Управление сайтом</h1>
		</div>
 <?php echo $_smarty_tpl->getSubTemplate ('adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
 
 <div id="centerColumn">
<?php }} ?>