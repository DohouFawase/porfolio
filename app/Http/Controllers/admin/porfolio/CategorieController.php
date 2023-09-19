<?php

namespace App\Http\Controllers\admin\porfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CategorieRequest;
use App\Http\Requests\admin\CategoriFormRequest;
use App\Models\admin\Categorie;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
       
        return view('admin.categorie.index',[
            "categories"=>Categorie::orderBy('created_at', "desc")->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorie = new Categorie();
        return view('admin.categorie.form',[
            'categorie'=>$categorie
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriFormRequest $request)
    {
        //
        $validedata= $request->validated();

        $categorie = Categorie::create($validedata);
      
        
        return to_route("admin.categorie.index")->with("success", "New category add succesfyly");
  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
        return view('admin.categorie.form',[
            'categorie'=>$categorie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriFormRequest $request, Categorie $categorie)
    {
        //
        $validedata= $request->validated();
         $categorie->update($validedata);
         return to_route("admin.categorie.index")->with("success", "Your category is Modifie succesfuly");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
