<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;

class IndexController extends Controller
{
    public function findAll_blogpost()
    {
        $blog_post = IndexModel::all();
        return view('blog.index', ['blog_post' =>$blog_post]);
    }
}
