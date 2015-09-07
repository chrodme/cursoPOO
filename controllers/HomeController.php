<?php

class HomeController
{
    protected $vars = ['titulo'=>'Titulo del contenido del homeController','contenido'=>'Cuerpo del contenido del homeController'];

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
