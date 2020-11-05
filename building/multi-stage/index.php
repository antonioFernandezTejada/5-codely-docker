<?php

require_once _DIR_ . '/vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}',
));

$twig = new Twig_Enviroment($loader);

echo $twig->render('index', array('name' => 'Antonio'));