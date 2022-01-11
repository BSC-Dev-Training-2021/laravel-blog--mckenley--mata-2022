<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Models\PostModel;
use App\Http\Models\CategoryTypesModel;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
	public function post(){
		return view('blog.post');
	}

    public function addPost(Request $request){ // post data to database
    	$request->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'content' => 'required'
    	]);

    	if($request->hasFile('image')){ // images save
		    $image = $request->file('image');
		    $image_name = $image->getClientOriginalName();
		    $imagename = $image_name;
		    $image->move(public_path('/image'),$imagename);

		    $image_path = "/image/" . $imagename;
		}

    	$blog_post_query = DB::table('blog_post')->insert([ //data to be save
    		'title' => $request->input('title'),
    		'description' => $request->input('description'),
    		'content' => $request->input('content'),
    		'img_link' => $image_path,
    		'created_by' => 1
    	]);

    	if($blog_post_query){
    		return back()->with('success','Data have been save');
    	}else{
    		return back()->with('fail', 'Something went wrong');
    	}
    }
}
