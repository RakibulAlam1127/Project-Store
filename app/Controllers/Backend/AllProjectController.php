<?php
/**
 * Created by PhpStorm.
 * User: Rakib
 * Date: 4/29/2019
 * Time: 10:06 AM
 */

namespace App\Controllers\Backend;


use App\Controllers\Controller;

class AllProjectController extends Controller
{
    public function getIndex()
    {
        view('allProject/index');
    }
}