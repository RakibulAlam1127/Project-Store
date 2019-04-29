<?php
/**
 * Created by PhpStorm.
 * User: Rakib
 * Date: 4/28/2019
 * Time: 1:08 PM
 */

namespace App\Controllers\Backend;


use App\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function getIndex()
    {

        view('admin/index');

    }
}