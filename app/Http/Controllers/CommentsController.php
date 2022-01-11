<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CommentModel;

class CommentsController extends Controller
{
    //
    public function addComments(Request $request){ //adding comments
        $request->validate([
            'comment' => 'required'
        ]);

        $add_comment= DB::table('blog_post_comments')->insert([
            'comment' => $request->input('comment'),
            'user_id' => 1,
            'blog_post_id' => $request->input('blog_id')  
        ]);
        
        if($add_comment){
            return back()->with('success','Data have been save');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }



    
}
