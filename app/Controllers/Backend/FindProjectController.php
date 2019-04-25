<?php
namespace App\Controllers\Backend;
use App\Controllers\Controller;

class FindProjectController extends Controller{

    public function getIndex()
    {
        view('findProject/index');
    }
}