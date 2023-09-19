<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'tech',
        'project_link'
    ];

    public function category(){
        return $this->belongsTo(Categorie::class);
    }

  
}
