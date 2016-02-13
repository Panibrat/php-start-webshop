<?php

/*
$string = date("d-m-Y");//'21-11-2015';
$pattern = '/(.+)-(.+)-(.+)/';
$replacement = 'Month: $2 ,Day: $1, Year: $3';
echo preg_replace($pattern, $replacement, $string);
die;
 
$string = '/news/sport/114';
$pattern = '~/news/([a-z]+)/([0-9]+)~';
$replacement = 'news/view/$1/$2';
echo preg_replace($pattern, $replacement, $string);
*/
// FRONT CONTROLLER



// 1. Общие настройки
ini_set("display_errors", 1);
error_reporting(E_ALL);


// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/Db.php');
//echo (ROOT.'/components/Router.php');

// 3. Установка соединения с БД



// 4. Вызов Router
$router = new Router();
$router->run();