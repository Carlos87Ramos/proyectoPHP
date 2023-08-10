<?php

class Session 
{
    private static  $session = NULL;

    private function __construct(){}

    public static function getSession()
    {
        if( is_null (self::$session)){
            self::$session = new Session();
            self::$session->init();
        }
        return self::$session;
    }
     public function init()
    
    
    {
        session_start();

    }

    public function add($Key,$value)

    {
     $_SESSION[$Key] = $value;

    }

    public function get($Key) 
    {

        return !empty($_SESSION[$Key]) ?  $_SESSION[$Key] : null;

    }

    public function getAll()

    {

        return $_SESSION;
    }

    public function remove( $key)
    {
        if (!empty($_SESSION[$key]))   
        
        unset($_SESSION[$key]);

    }

    public function close()
    {

        session_unset();
        session_destroy();
    }

    public function getStatus()
    {
        return session_status();
    }
}
