<?php

namespace App\Http\Controllers\web\porfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Bio;
use App\Models\admin\Categorie;
use App\Models\admin\Project;
use Termwind\Components\Dd;

class PortfolioController extends Controller
{
    //
    public function index(string $lug){
        $category = Categorie::all();
        //dd($category);
        $bio = Bio::orderBy("created_at", "asc")->paginate(0);
       $project = Project::with('category')->get();
    
        return view("web.portfolio.index", [
            "bios"=>$bio,
           "categories"=>$category,
            "projects"=>$project,
        ]);
    }




    
}
