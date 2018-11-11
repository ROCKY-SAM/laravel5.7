<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class PagesController extends Controller
{
    //

    public function home(){

        $project = Project::all();
        return $project;
        return view('welcome',[
            'foo' => 'Laravel'
        ]);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
