@extends('layouts.admin')
@section('title', 'Catgeorie')
@section('content')


    <div class="card">
        <div class=" d-flex justify-content-btween align-items-center ">
            <h1 class="card-header">@yield('title')</h1>
            <a href=" {{ route('admin.categorie.create') }} " class="btn btn-primary flex-row align-items-center ms-auto">Add Categorie</a> 
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Categorie</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($categories as $category)
                <tr class="table-default">
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="{{ route('admin.categorie.edit', $category) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                           
                           
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete 
                              
                              </a>
                          </div>
                        </div>
                      </td>
                </tr> 
                @endforeach
             
               
                
            </tbody>
          </table>
          {{ $categories->links() }}
        </div>
      </div>
@endsection