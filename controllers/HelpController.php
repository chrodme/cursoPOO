<?php

class HelpController
{
    public function indexAction()
    {
        return new View('help',['titulo'=>'Help me']);
    }

}