<?php
// require_once "vendor/autoload.php";

use Src\Model\Entity\Router;


$request = $_SERVER['REQUEST_URI'];

$script_name = dirname($_SERVER['SCRIPT_NAME']);

$url = str_replace($script_name, '', $request);

$url = parse_url($url, PHP_URL_PATH);

$url = trim($url, '/');

$router = new Router();


$router->add('register', ['AuthController', 'getRegister']);
$router->add('AddUser', ['AuthController', 'inputCheck']);




$router->dispatch($url);
