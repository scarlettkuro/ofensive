<?php

define('DATA', __DIR__ . '/data');
define('GAMENAME', 'Офензива');

require_once 'lib/limonade.php';
require_once 'models/Article.php';
require_once 'models/Group.php';
require_once 'models/Url.php';
require_once 'models/Utils.php';

dispatch('/css/:style', 'AssetController::css');

dispatch('/', 'MainController::index');
dispatch(Url::story(), 'MainController::story');
dispatch(Url::custom("*"), 'MainController::custom');
dispatch(Url::articles("*"), 'MainController::articles'); // * = :type
dispatch(Url::article("*","*"), 'MainController::article'); // * = :type
run();
?>
