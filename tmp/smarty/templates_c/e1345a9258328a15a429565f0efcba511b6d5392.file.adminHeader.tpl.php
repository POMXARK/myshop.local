<?php /* Smarty version Smarty-3.1.6, created on 2012-01-22 13:11:01
         compiled from "../views/default/adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16993017964f128f637eaa05-99799458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1345a9258328a15a429565f0efcba511b6d5392' => 
    array (
      0 => '../views/default/adminHeader.tpl',
      1 => 1327223458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16993017964f128f637eaa05-99799458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f128f638d28f',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f128f638d28f')) {function content_4f128f638d28f($_smarty_tpl) {?>
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