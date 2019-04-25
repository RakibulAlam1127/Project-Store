<?php
require 'vendor/autoload.php';

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;
use Illuminate\Database\Capsule\Manager as Capsule;

//Session start
session_start();


//Database connection goes here.
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'project_store',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->bootEloquent();
$capsule->setAsGlobal();


$users = Capsule::table('users')->first();


$router = new RouteCollector(new RouteParser());

//this is Our base URL
define('BASE_URL','http://localhost/project_store/');

//this is Our dashboard access url
define('DASH_URL','http://localhost/project_store/dashboard/');

require_once 'route.php';

$dispatcher = new Dispatcher($router->getData());
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$url = str_replace('project_store', '', $url);

//die(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    echo $response;
}catch(HttpRouteNotFoundException $e){
    echo $e->getMessage();
    die();
}catch (HttpMethodNotAllowedException $exception){
    echo $exception->getMessage();
    die();
}

?>

