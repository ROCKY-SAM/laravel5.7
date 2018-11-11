<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class PagesController extends Controller
{
    //

    public function index(){
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
    public function store(){
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/');
    }
    public function edit($id){
        $project = new Project();
        return view('projectEdit',[
            'project' => $project->find($id)
        ]);
    }
    public function update(){
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect(/project);
    }
}
