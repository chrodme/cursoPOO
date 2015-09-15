<?php

class HomeController
{
    protected $vars = ['titulo'=>'Titulo del contenido del homeController','contenido'=>'Cuerpo del contenido del homeController','encabezado'=>'Encabezado del contenido 1'];

    public function indexAction()
    {
        $vars = $this->getVars();
        return new View('home',$vars);
    }
    public function getVars()
    {
        return $this->vars;
    }

}
