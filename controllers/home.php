<?php
$confidencial = "wow such private very confidential";
$language = "PHP";
$titulo = 'Mejorando PHP -- Titulo';
// llamando una funcion
view('home', compact('language', 'titulo'));
