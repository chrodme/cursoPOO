<?php
class ContactosController
{
    public function indexAction()
    {
        return new View('contactos',['ciudad'=>'Vacio']);
    }
    public function cityAction($city)
    {
        return new View('contactos',['ciudad'=>$city]);
    }

}