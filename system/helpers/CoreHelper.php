<?php

defined('BASEPATH') or exit ('no se permite acceso directo');

class CoreHelper
{

    public static Function  validateController($controller)
    {
        
        if (!is_file(PATH_CONTROLLERS ."{$controller}/{$controller}Controller.php"))
            return false;
        return true;
    } 

public static function  validateMethodController($controller,$method)
{
    if (! method_exists($controller,$method))
        return false;
        return true;
}
}