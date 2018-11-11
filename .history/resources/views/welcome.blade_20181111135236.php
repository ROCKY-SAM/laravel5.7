@extends('layout')

@section('title')
    Welcome
@endsection


@section('content')
    <h1>My {{ $foo }} website</h1>
    This is the main page


    <div id="accordion">
    @foreach ($projects as $project)

    <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$project->title}}" aria-expanded="true" aria-controls="collapseOne">
              {{ $project->title }}
            </button>
          </h5>
        </div>
    
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            {{ $project->description }}
          </div>
        </div>
      </div>   


    @endforeach
    </div>



@endsection