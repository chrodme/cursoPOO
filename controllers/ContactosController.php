<?php
class ContactosController
{
    public function indexAction()
    {
        return new View('contactos',['titulo'=>'Contactos','contenido'=>'']);
    }
    public function cityAction($city)
    {
        return new View('contactos',['ciudad'=>$city]);
    }

}