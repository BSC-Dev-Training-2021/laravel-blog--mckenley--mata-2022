<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Support\Facades\DB;
use App\Models\CommentModel;
class ArticleController extends Controller
{ 
    public function InnerJoinGet($id){
        $blog_post = ArticleModel::find($id); // show blogpsot
       
        $cat_types = DB::table('category_types') //show the selected categories on that blogpost
            ->select('name')
            ->leftjoin('blog_post_categories', 'blog_post_categories.category_id', '=', 'category_types.id')
            ->leftjoin('blog_post', 'blog_post.id', '=', 'blog_post_categories.blog_post_id')
            ->where('blog_post.id', $id)
            ->get();

        return view('blog.article', ['category' => $cat_types], ['blog_post' => $blog_post]);
    }

}
