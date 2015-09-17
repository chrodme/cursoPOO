<?php


class AboutController
{
    public function indexAction()
    {
        return new View('about',['titulo'=>'Acerca de ....','contenido'=>'']);
    }

}