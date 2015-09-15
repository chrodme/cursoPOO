<?php

class HelpController
{
    public function indexAction()
    {
        return new View('help',['titulo'=>'Titulo del contenido del homeController','contenido'=>'Cuerpo del contenido del homeController','encabezado'=>'Encabezado del contenido 1']);
    }

}