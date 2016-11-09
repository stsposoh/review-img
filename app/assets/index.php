<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');

// Конфиг сайта
include_once './config.php';
include_once './libs/php/default.php';
include_once './variables.php';

//функционал
include_once './modules/allpages.php';

// Роутер
include_once './modules/'.$_GET['module'].'/'.$_GET['page'].'.php';
include_once './skins/'.Core::$SKIN.'/index.tpl';
?>