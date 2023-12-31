<?php

defined ('BASEPATH') or exit ('No se permite acceso directo');

class  Router {
// atributo
   public $uri;

   public $controller;

   public $method;

   public $param;
// constructor de la clase 
  public function __construct()
{

        $this->setUri ();
        $this->setController ();
        $this->setMethod ();
        $this->setParam ();

}

   public function setUri()
{
   $this->uri = explode('/',URI);
}
   public function setController()
{

   $this->controller = $this->uri[2]==='' ? DEFAULT_CONTROLLER :$this->uri[2];
}

  public function setMethod()

{

$this->method = ! empty($this->uri[3])? $this->uri[3]:'exec';

}
public function setParam()

{
  if (REQUEST_METHOD === 'POST'){
     $this->param = $_POST;

     //Pasar la informacion  de la imagen por parametro
     if (!empty($_FILES)) 
     $this->param += $_FILES;
  }
   else if (REQUEST_METHOD === 'GET')
{

$this->param = ! empty($this->uri[4]) ? $this->uri[4]:'';

}

}

  public function getUri (){
   return $this->uri;
  }
  public function getController (){
   return $this->controller;
  }
  public function getMethod (){
   
   return $this->method;
  }
  public function getParam (){
   return $this->param;
  }
 }