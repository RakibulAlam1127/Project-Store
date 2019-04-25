<?php
namespace App\Controllers\Backend;
use App\Controllers\Controller;

class MyProjectController extends Controller{

 public function getIndex()
 {
     view('myProjects/index');
 }



}