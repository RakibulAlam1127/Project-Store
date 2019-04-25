<?php
namespace App\Controllers\Backend;
use App\Controllers\Controller;
use Respect\Validation\Validator;

class UploadProjectController extends Controller{

     public function getIndex()
     {
         view('uploadProject/index');
     }

     public function postIndex()
     {
         $validator = new Validator();
         $errors = [];
         $title = validation($_POST['title']);
         $file = $_FILES['file'];
         $category = validation($_POST['category']);
         $year = validation($_POST['year']);
         $name = validation($_POST['name']);


         if ($validator::alnum()->noWhitespace()->validate($title) === false){
             $errors['title'] = 'Title contains Alphabetic';
         }
         if (strlen($title)>100){
             $errors['title'] = 'Title is too long';
         }
         if (strlen($title)<10){
             $errors['title'] = 'Title is Too short';
         }

         







     }

}