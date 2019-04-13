<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function eamesLounge(){
        return view('projects.elr');
    }
}
