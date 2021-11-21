<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPostController extends Controller
{
    public function index(){
        return view('backoffice.newpost');
    }
}
