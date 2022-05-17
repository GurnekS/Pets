<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('pet.php');

$pet = new Pet("Rover", "brown");
$pet2 = new Pet("Chachi", "purple");
$pet3 = new Pet("pink");
$pet->eat();
$pet2->eat();
$pet3->eat();
$pet->sleeping();
$pet->talking();


////Require the autoload file
//require_once ('vendor/autoload.php');
//
////Create an instance of the Base class
//$f3 = Base::instance();
//
////Define a default route
//$f3->route('GET /', function () {
////    echo '<h1>Pet home</h1>';
//
//    $view = new Template();
//    echo $view->render('views/pet-home.html');
//    }
//
//);
//
////Run fat free
//$f3-> run();