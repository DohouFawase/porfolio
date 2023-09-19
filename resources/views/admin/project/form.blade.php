@extends('layouts.admin')
@section('title', $project->exists ? 'Modifie Categorie' : "Add Categorie")
@section('content')
    <h1 class="">@yield('title')</h1>

<form action="{{ route($project->exists ? "admin.project.update" : "admin.project.store"  , $project) }}" method="post" enctype="multipart/form-data">
 @csrf
 @method($project->exists ? "put" : "post")
 
    <div class="row mt-5 ">
        @include('shared.input', ['class'=>"col", 'name'=>'name', 'value'=> $project->name])
        @include('shared.input', ['class'=>"col", 'name'=>'tech', 'value'=> $project->tech])
    </div>
    <div class="row mt-5 ">
        @include('shared.input', ['class'=>"col", 'name'=>'project_link', 'value'=> $project->project_link])
    </div>

    <div class="row mt-5 ">
        @include('shared.input', ['class'=>"col", 'name'=>'description', 'value'=> $project->description])
    </div>


    <button class="btn btn-success">
        @if ($project->exists)
          Modifier  
        @else
           Add 
        @endif
    </button>
</form>
@endsection