<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public function findId($id){
        $blog_post = ArticleModel::find($id);
        return view('blog.article', ['blog_post' => $blog_post]);
    }
}
