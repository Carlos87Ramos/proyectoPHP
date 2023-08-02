<?php 

header ('Content-type:text/html;charset=utf-8');
define('BASEPATH',true);

require 'system/config.php';
require 'system/core/autoload.php';

$router = new Router();

$controller = $router-> getController();
$method = $router-> getMethod();

$param = $router->getParam();

if (!CoreHelper::validateController($controller)) 
$controller = "ErrorPage";

require PATH_CONTROLLERS."{$controller}/{$controller}Controller.php";

$controller .= 'Controller';

if (CoreHelper::validateController($controller,$method)) 
$method = 'exec';
 // ejecucion final del controlador ; metodo Y parametros obtenidos de la uri. 

$controller = new $controller;
$controller-> $method($param);

?>
