<?php


class AboutController
{
    public function indexAction()
    {return new View('about',['titulo'=>'Titulo del contenido del homeController','contenido'=>'Cuerpo del contenido del homeController','encabezado'=>'Encabezado del contenido 1']);}

}