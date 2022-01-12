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

        if(DB::table('category_types')->where('name',$request->input('add_cat'))->exists()){
            return back()->with('fail', 'Category is already existed');
        }else{
            $add_cat_query = DB::table('category_types')->insert([
            'name' => $request->input('add_cat')
            ]);
            return back()->with('success', 'Successfully added');
        }

        
    }

    public function update($id){ // function where show the form on category.blade.php
        $cat = CategoryTypesModel::find($id); // show blogpsot
        return view('blog.category', ['cat'=>$cat]);
    }

    public function updateCategory(Request $request){ // update the record on database
        $cat = $request->input('update_cat');
        $id = $request->input('cat_id');
        $date = now();
        $updated_cat = CategoryTypesModel::where('id', $id)->update([
            'name'=> $cat
        ]);
        return view('blog.category');
    }

    public function deleteCategory($id){ //delete category
        //check 1st if the selected category is existing before delete
        if(DB::table('blog_post_categories')->where('category_id', $id)->exists()){
            return back()->with('fail','The selected category is has a blogpost.');
        }else{
            $cat_type = CategoryTypesModel::find($id);
            $cat_type->delete();
            return redirect()->back()->with(['message' => 'Successfully Deleted!']);
        }
        
    }

    
    
}
