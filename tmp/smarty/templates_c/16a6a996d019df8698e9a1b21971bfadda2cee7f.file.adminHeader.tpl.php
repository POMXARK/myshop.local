<?php /* Smarty version Smarty-3.1.6, created on 2012-02-12 14:49:50
         compiled from "../views/texturia/adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17626798704f37994e70d642-47009871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a6a996d019df8698e9a1b21971bfadda2cee7f' => 
    array (
      0 => '../views/texturia/adminHeader.tpl',
      1 => 1329043787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17626798704f37994e70d642-47009871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f37994e85c79',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f37994e85c79')) {function content_4f37994e85c79($_smarty_tpl) {?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/main.js"></script>
    </head>
    
    <body>
        <div id="header">
			<h1>Управление сайтом</h1>
		</div>
 <?php echo $_smarty_tpl->getSubTemplate ('adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
 
 <div id="centerColumn">
<?php }} ?>