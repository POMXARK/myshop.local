<?php

/**
 * 
 * Файл настроек
 * 
 */

// Выводим все ошибки и предупреждения
ini_set('display_errors', 1);
error_reporting(E_ALL);

//> используемый шаблон 
$template = 'default';
//$template = 'texturia';
$templateAdmin = 'admin';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "/templates/{$template}/");
define ('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
//<

// Константы для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');


//> Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('teplateWebPath', TemplateWebPath);
//<