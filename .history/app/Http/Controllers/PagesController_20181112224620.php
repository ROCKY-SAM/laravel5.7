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
    public function store(Project $project){
        $project->create(request(['title','description']));
        return redirect('/');
    }
    public function edit(Project $project){
        return view('projectEdit',compact('project'));
    }
    public function update(Project $project){
        $project->update(request(['title','description']));
        return redirect('/project');
    }
    public function destroy(Project $project){
        $project->delete();
        return redirect('/project');
    }
}
