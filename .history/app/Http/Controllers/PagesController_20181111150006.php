<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class PagesController extends Controller
{
    //

    public function home(){
        $project = Project::all();
        return view('welcome',[
            'foo' => 'Laravel',
            'projects' => $project
        ]);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function create(){
        return view('projectCreate');
    }
    public function save(){
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/');
    }
}
