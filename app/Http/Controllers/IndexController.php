<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function findAll_blogpost()
    {
        
        $blog_post = IndexModel::all();
        return view('blog.index', ['blog_post' =>$blog_post]);
    }
    public function filterblog($id){

        $blog_post = DB::table('blog_post') //show the selected categories on that blogpost
            ->select('*')
            ->join('blog_post_categories', 'blog_post_categories.blog_post_id', '=', 'blog_post.id')
            ->where('blog_post_categories.category_id', $id)
            ->get();
        return view('blog.index', ['blog_post' =>$blog_post]);
    }
}
