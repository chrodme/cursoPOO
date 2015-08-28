<?php
class ContactosController
{
    public function indexAction()
    {
        return new View('contactos',['ciudad'=>'Puno']);
    }
    public function cityAction($city)
    {
        exit('Contactos ciudad - '.$city);
    }

}