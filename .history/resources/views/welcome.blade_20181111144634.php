@extends('layout')

@section('title')
    Welcome
@endsection


@section('content')
This is the main page
<br>
<div class="row">
    <div class="col-10"> <h1>My {{ $foo }} website</h1> </div>
    <div class="col-2" > <a href="/project/create" class="btn btn-outline-info"> New Project </a> </div>
</div>    


    <div id="accordion">
    @foreach ($projects as $project)

    <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
          <button style="text-decoration: none;color: black;font-weight: bold;" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$project->title}}" aria-expanded="true" aria-controls="collapseOne">
              <h5>{{ $project->title }}</h5>
            </button>
          </h5>
        </div>
    
        <div id="collapseOne{{$project->title}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            {{ $project->description }}
          </div>
        </div>
      </div>   


    @endforeach
    </div>



@endsection