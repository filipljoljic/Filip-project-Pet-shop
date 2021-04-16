<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require dirname(__FILE__).'/../vendor/autoload.php';

//die('this request was sent to the index.php file');


Flight::route('/', function(){
  echo 'Hello world!';
});

Flight::route('/cao', function(){
  echo 'Hello world2!';
});

Flight::start();
 ?>
