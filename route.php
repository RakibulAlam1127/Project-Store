<?php

use App\Controllers\Backend\AdminDashboardController;
use App\Controllers\Backend\CategoryController;
use App\Controllers\Backend\DashboardController;
use App\Controllers\Backend\FindProjectController;
use App\Controllers\Backend\MyProjectController;
use App\Controllers\Backend\SupervisorController;
use App\Controllers\Backend\UploadProjectController;
use App\Controllers\Frontend\HomeController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

$router = new RouteCollector(new RouteParser());

$router->filter('auth',function(){
   if (!isset($_SESSION['user'])){
       $errors[] = 'You are not Logged In';
       $_SESSION['errors'] = $errors;
       header('Location:login');
       exit();
   }
});




 //Route for HomeControllers;
 $router->controller('/',HomeController::class);




$router->group(['before' => 'auth','prefix'=>'dashboard'],function(RouteCollector $router){
    $router->controller('/',DashboardController::class);
    $router->controller('/myproject',MyProjectController::class);
    $router->controller('/uploadproject',UploadProjectController::class);
    $router->controller('/category',CategoryController::class);
    $router->controller('/supervisor',SupervisorController::class);
    $router->controller('/findProject',FindProjectController::class);


});
























?>