<?php

//-------------configuração banco de dados
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR');
session_start();
define('URLBASEPATH', __DIR__ . '/../');
define('BASEPATH', __DIR__ . DIRECTORY_SEPARATOR);
define('BASEPATHFILE', __FILE__);
define('BASEPATHVIRTUAL', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
define('DOMINIO', $_SERVER['SERVER_NAME']);
define('TITULOSITE', 'NÚCLEO INVESTIGACION INTERNACIONAL EN CIENCIAS MEDICAS');
define('TEMPOFALHA', '15');
define('TENTATIVAFALHA', '3');
define('DATATIMEATUAL', date("Y-m-d H:i:s"));
//----------------------------------------------------------------
//servidor local true
$servidorLocal = true;

//servidor da internet false
//$servidorLocal = false;
if ($servidorLocal) {
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '010203');
    define('DBNAME', 'bancoSuaMaquina');
} else {
    define('HOST', '15.235.55.95');
    define('USER', 'userLuciano');
    define('PASS', 'Gold20@23');
    define('DBNAME', 'lucianoBd');
}


