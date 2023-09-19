@extends('layouts.admin')
@section('title', $categorie->exists ? 'Modifie Categorie' : "Add Categorie")
@section('content')
    <h1 class="">@yield('title')</h1>

<form action="{{ route($categorie->exists ? "admin.categorie.update" : "admin.categorie.store"  , $categorie) }}" method="post" enctype="multipart/form-data">
 @csrf
 @method($categorie->exists ? "put" : "post")
    <div class="row mt-5 ">
        @include('shared.input', ['class'=>"col", 'name'=>'name', 'value'=> $categorie->name])
    </div>


    <button class="btn btn-success">
        @if ($categorie->exists)
          Modifier  
        @else
           Add 
        @endif
    </button>
</form>
@endsection