<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\PostModel;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
	function post(){
		return view('blog.post');
	}

    function add(Request $request){
    	$request->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'content' => 'required'
    	]);



    	$blog_post_query = DB::table('blog_post')->insert([
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
