<?php

define('DATA', __DIR__ . '/data');
define('GAMENAME', 'Офензива');

require_once 'lib/limonade.php';


function __autoload($class_name) {
    include "models/$class_name.php";
}

dispatch('/css/:style', 'AssetController::css');

//this two are always top
dispatch('/', 'MainController::index');
dispatch(Url::custom("*"), 'MainController::custom'); // * = :name
//other
dispatch(Url::articles("*"), 'MainController::articles'); // * = :type
dispatch(Url::article("*","*"), 'MainController::article'); // 1* = :type, 2* = :name
run();
?>
