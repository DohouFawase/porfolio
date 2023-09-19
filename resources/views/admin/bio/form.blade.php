@extends("layouts.admin")
@section('title', $bio->exists? 'Modifier Bio': 'Add Bio')

@section('content')
    <form action=" {{ route($bio->exists ? 'admin.bio.update' : 'admin.bio.store', $bio) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method($bio->exists ? 'put': 'post')
        <div class="row mt-5 ">
            @include('shared.input', ['class'=>"col", 'name'=>'name', 'value'=> $bio->name])
            @include('shared.input', ['class'=>"col", 'name'=>'second_name', 'value'=> $bio->second_name])
        </div>
        <div class="row mt-5 ">
            <div class="col">
                @if ($bio->image)
                    <img src="/bios/{{$bio->image}}" alt="" class="image-fluid">
                @else
                    
                @endif
            </div>
            @include('shared.file', ['class'=>"col", 'name'=>'image', 'value'=> $bio->image])
        
        </div>
    
        <div class="row mt-5 ">
            @include('shared.input', ['class'=>"col", 'name'=>'description', 'value'=> $bio->description])
        </div>
        <button>
            @if ($bio->exists)
                Modifie
            @else
                Add 
            @endif
        </button>
    </form>
@endsection