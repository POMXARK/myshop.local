<?php
session_start(); // стартуем сессию

// если в сессии нет массива корзины то создаем его
if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();    
}

include_once '../config/config.php';        // Инициализация настроек
include_once '../config/db.php';            // Инициализация базы данных
include_once '../library/main_functions.php'; // Основные функции

// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

//d($_SESSION);
//d($_GET);
//d($_SERVER);
//echo $controllerName . ' | ' .  $actionName . '<br />';

// если в сессии есть данные об авторизированном пользователе, то передаем
// их в шаблон
if(isset($_SESSION['user'])){
    $smarty->assign('arUser', $_SESSION['user']); 
}

// инициализируем переменную шаблонизатора количества элементов в корзине
$smarty->assign('cartCntItems', count($_SESSION['cart'])); 


// загружаем запрашиваемую страницу
loadPage($smarty, $controllerName, $actionName);