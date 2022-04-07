<?php
session_start();
ob_start();

define('URL', 'http://localhost/Projeto_PHP_MVC/');
define('URLADM', 'http://localhost/Projeto_PHP_MVC/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao DB
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');
 
//teste IPAC
/* define('DBNAME', 'ipaconli_form'); */
