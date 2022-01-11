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

    public function deleteCategory($id){ //delete category
        //check 1st if the selected category is existing before delete
        if(DB::table('blog_post_categories')->where('category_id', $id)->exists()){
            echo "exists";
        }else{
            $cat_type = CategoryTypesModel::find($id);
            $cat_type->delete();
            return redirect()->back()->with(['message' => 'Successfully Deleted!']);
        }
        
    }

    
    
}
