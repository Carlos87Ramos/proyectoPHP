<?php 
//////////////////////////
// valores de uri
/////////////////////////
define('URI', $_SERVER['REQUEST_URI']);

define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);
/////////////////////////////////////
#Valores de ruta. 
////////////////////////////////////////////////
define('HELPER_PATH','system/helpers/');
define('CORE','system/core/'); 
define('PATH_CONTROLLERS','app/controllers/');

define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('FOLDER_PATH','/proyectoPHP');
define('PATH_VIEWS',FOLDER_PATH .'/app/views/');
define( 'LIBS_ROUTE' , ROOT . FOLDER_PATH . '/system/libs/');
define('PATH_UPLOAD_IMAGES',ROOT.'/uploads/');
define('DEFAULT_CONTROLLER','Home');
define('PATH_HEADER', ROOT .FOLDER_PATH .'/app/views/template/');

////////////////////////////
// valores de base de datos
/////////////////////////////
define('HOST','localhost');
define('USER', 'root');
define('PASSWORD','');
define('DB_NAME','Zanja_Honda');


