<?php

date_default_timezone_set("America/Bahia");
setlocale(LC_ALL, 'pt-BR', 'pt-BR-utf8', 'portuguese');

//Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));


//Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));