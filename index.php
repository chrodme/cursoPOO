<?php
/*
 * El frontend controller se encarga de
 * configurar nuestra aplicacion
 */
require 'config.php';
//require 'helpers.php';
//Library
require 'Library/Request.php';
require 'Library/Inflector.php';
require 'Library/Response.php';
require 'Library/View.php';
require 'library/DataBAse.php';

if(empty($_GET['url']))
{
    $url = "";
}
else
{
    $url = $_GET['url'];
}

$request = new Request($url);
$request->execute();