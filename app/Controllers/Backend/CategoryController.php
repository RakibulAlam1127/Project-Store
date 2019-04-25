<?php
namespace App\Controllers\Backend;
use App\Controllers\Controller;
use App\Model\Category;
use Respect\Validation\Validator;

class CategoryController extends Controller{

      public function getIndex()
      {
          view('category/index');
      }

      public function postIndex()
      {
           $errors = [];
           $validator = new Validator();
           $category = $_POST['category'];
           $category = validation($category);
           if ($validator::alnum()->validate($category) === false){
             $errors['category'] = 'Category Name Must be Alphabets';
           }
           if (strlen($category)>50){
               $errors['category'] = 'Category Name is too Long';
           }

           if (strlen($category)<4){
               $errors['category'] = 'Category Name too short';
           }

           $categories = Category::all();


            foreach ($categories as $item){
                if ($item->category == $category){
                    $errors['category'] = '<strong>'.$category.'</strong>'.' Category Name Are Already Exist!';
                }
            }

           if (empty($errors)){

               Category::create([
                   'category' => $category,
                    'u_id' => $_SESSION['user']['id']
               ]);

                $_SESSION['success'] = 'Successfully Add Category';
                header('Location:category');
                exit();

           }else{
               $_SESSION['errors'] = $errors;
               header('Location:category');
               exit();

           }

      }


      public function getEdit()
      {
          view('category/edit');
      }

      public function getUpdate($id = null)
      {
          $id = $_GET['id'];
           if ($id === null){
               view('category/edit');
               exit();
           }

           $_SESSION['id'] = $id;
          view('category/update');
          exit();


      }

      public function postUpdate($id = null)
      {


          if ($id === null){
              header('Location:edit');
              exit();
          }


          $errors = [];
          $category = $_POST['update_cat'];
          $validator = new Validator();

          $category = validation($category);
          if ($validator::alnum()->validate($category) ===false){
              $errors['category'] = 'Category Name Must be Alphabets';
          }
          if (strlen($category)>50){
              $errors['category'] = 'Category Name is too Long';
          }

          if (strlen($category)<4){
              $errors['category'] = 'Category Name too short';
          }


          $categories = Category::all();


          foreach ($categories as $item){
              if ($item->category == $category){
                  $errors['category'] = '<strong>'.$category.'</strong>'.' Category Name Are Already Exist!';
              }
          }


              if (empty($errors)){


                  $category = Category::find($_SESSION['id']);
                   var_dump($category);
                   die();
                  $category->update([
                      'category' => $category
                  ]);

                  $_SESSION['success'] = 'Category Upgrade Successfully';
                  header('Location:edit');
                  exit();
              }else{
                  $_SESSION['errors'] = $errors;
                  header('Location:update');
                  exit();
              }






      }


  }