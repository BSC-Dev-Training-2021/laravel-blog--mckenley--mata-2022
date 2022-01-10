<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryTypesModel;

class CategoryTypesController extends Controller
{
    public function findAll()
    {
        $category_types = CategoryTypesModel::all();
        return view('blog.post', ['category_types' => $category_types]);
        return view('blog.category', ['category_types' => $category_types])
    }
    
    
}
