<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryTypesModel;
use Illuminate\Support\Facades\DB;

class CategoryTypesController extends Controller
{
    
    public function addCategory(Request $request){ //adding categories
        $request->validate([
            'add_cat' => 'required'
        ]);

        $add_cat_query = DB::table('category_types')->insert([
            'name' => $request->input('add_cat')
            
        ]);

        if($add_cat_query){
            return back()->with('success','Category have been save');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

    }
    public function updateCategory(Request $request){
        
    }

    
    
}
