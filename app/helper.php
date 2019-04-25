<?php

if (!function_exists('view')){
    function view($view){
      require_once __DIR__.'/../views/'.$view.'.php';
    }
}

  function validation($data){
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    $data = trim($data);
    return $data;
  }
