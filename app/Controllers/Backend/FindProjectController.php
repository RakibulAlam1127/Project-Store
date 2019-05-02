<?php
namespace App\Controllers\Backend;
use App\Controllers\Controller;
use App\Model\Project;

class FindProjectController extends Controller{

    public function getIndex()
    {
        view('findProject/index');
    }

    public function postIndex()
    {
        $title = $_POST['title'];
        $category = $_POST['category'];

         $title = validation($title);
         $category = validation($category);
          $errors = [];



         if (strlen($title) > 200){
             $errors['title'] = 'Project title is too Long';
         }

         if (strlen($title)<10){
             $errors['title'] = 'Project title is too short';
         }

         if (empty($errors)){

             $findProject = Project::where('category',$category)->orWhere('title', 'like', '%' .$title. '%')->get();
              if (count($findProject) >= 1){
                  $_SESSION['found'] = $findProject;
                  header('Location:findProject/found');
                  exit();
              }else{
                  $_SESSION['count'] = count($findProject);
                  $errors['error'] = 'Not Found ';
                  $_SESSION['errors'] = $errors;
                  header("Location:findProject");
                  exit();
              }
         }else{
             $_SESSION['errors'] = $errors;
              header("Location:findProject");
              exit();
         }
    }

    public function getFound()
    {
        view('findProject/found');
    }
}