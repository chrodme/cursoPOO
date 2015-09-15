<?php
class ContactosController
{
    public function indexAction()
    {
        return new View('contactos',['titulo'=>'Titulo del contenido del homeController','contenido'=>'Cuerpo del contenido del homeController','encabezado'=>'Encabezado del contenido 1']);
    }
    public function cityAction($city)
    {
        return new View('contactos',['ciudad'=>$city]);
    }

}