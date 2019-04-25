<?php
/**
 * Created by PhpStorm.
 * User: Rakib
 * Date: 4/11/2019
 * Time: 9:36 AM
 */

namespace App\Controllers\Backend;


class SupervisorController
{
     public function getIndex()
     {
         view('supervisor/index');
     }
}