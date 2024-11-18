<?php /* Smarty version Smarty-3.1.6, created on 2012-02-21 21:16:46
         compiled from "../views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8663258454ee4a4ad133cf5-16873145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdba5b3e744fb99042215648705161ce6110d6' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1329055070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8663258454ee4a4ad133cf5-16873145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ee4a4ad320c1',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee4a4ad320c1')) {function content_4ee4a4ad320c1($_smarty_tpl) {?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
    
    <body>
        <div id="header">
			<h1>my shop - интернет магазин</h1>
		</div>
 <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
 
 <div id="centerColumn">
<?php }} ?>