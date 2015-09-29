<?php
class ContactosController
{
    protected $data = null;
    public function indexAction()
    {
        return new View('contactos', ['titulo' => 'Contactos', 'contenido' => '']);
    }

    public function loadData()
    {
        $db = new DataBase(["host" => "localhost", "user" => "root", "password" => "", "db" => "db_cursopoo"]);
        $result = $db->makeQuery("select tus_login from t_user");

        return new View('contactos',['titulo'=>'Titulo del contenido del homeController','contenido'=>'Cuerpo del contenido del homeController','encabezado'=>'Encabezado del contenido 1']);
    }
    public function cityAction($city)
    {
        return new View('contactos',['ciudad'=>$city]);
    }

}