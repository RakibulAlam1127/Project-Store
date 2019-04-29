<?php
namespace App\Controllers\Backend;
use App\Controllers\Controller;
use App\Model\Project;
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
         $project_file = $_FILES['file'];
         $category = validation($_POST['category']);
         $year = validation($_POST['year']);
         $desc = validation($_POST['desc']);
         $name = validation($_POST['name']);


         if ($validator::alnum()->validate($title) === false){
             $errors['title'] = 'Title contains Alphabetic';
         }
         if (strlen($title)>100){
             $errors['title'] = 'Title is too long';
         }
         if (strlen($title)<10){
             $errors['title'] = 'Title is Too short';
         }

         if (strlen($year) != 4){
           $errors['year'] = 'Year Contains 4 Digits';
         }

         if (strlen($desc) > 1000){
           $errors['desc'] = 'Project Description is too long';
         }
         if (strlen($desc)<5){
             $errors['desc'] = 'Project Description is too short';
         }

         if ($validator::alnum()->validate($name) === false){
             $errors['name'] = 'Author Name Contains Alphabetic';
         }
         if (strlen($name)>50){
           $errors['name'] = 'Author name is too long';
         }
         if (strlen($name)<3){
             $errors['name'] = 'Author name is too short';
         }



         if (empty($errors)){
             $file_name = 'project_file'.time();
             $extention = explode('.',$project_file['name']);
             $ext = end($extention);
            $upload =  move_uploaded_file($project_file['tmp_name'],'upload_file/project_file/'.$file_name.'.'.$ext);


             if ($upload){

                 Project::create([
                     'title' => $title,
                     'file' => $file_name.'.'.$ext,
                     'category' => $category,
                     'user_id'  => $_SESSION['user']['id'],
                     'year' => $year,
                     'author_name' => $name,
                     'desc'     => $desc
                 ]);

             }else{
                 $errors['file'] = 'Project File Not Uploaded Successfully';
                 $_SESSION['errors'] = $errors;
                 header('Location:uploadproject');
                 exit();
             }


             $_SESSION['success'] = 'Project Uploaded Successfully';
             header('Location:uploadproject');
             exit();

         }else{
             $_SESSION['errors'] = $errors;
             header('Location:uploadproject');
             exit();
         }



         







     }

}