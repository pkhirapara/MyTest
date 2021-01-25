<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Models\categoeries;
use App\Models\blogs;
use App\Models\Comment;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $cate_val = $request->input('val');

        // echo $cate_val;

        $cate=categoeries::all();
        $blog=blogs::all();
        // echo "<pre>";
        // print_r($cate);
        // die();
        if($cate_val=="")
        {
            return view('user.home', ['cate_data' => $cate, 'blog_data' => $blog]);
        }
        else
        {
            $blog = DB::table('blogs')->where('cate_name', $cate_val)->get();
            return view('user.home', ['cate_data' => $cate, 'blog_data' => $blog]);
        }

    }

    public function show($id)
    {
        $blog = DB::table('blogs')->where('blog_id', $id)->get();
        // echo "<pre>";
        // print_r($blog);
        return view('user.blog_details', ['blog_detail'=>$blog]);
    }

    public function comments(Request $req, $id)
    {
        // echo "<pre>";
        // print_r($_POST);
        // die();
        $comment=new comment();
        $comment->blog_id=$req->input('blog_id');
        $comment->username=$req->input('username');
        $comment->email_id=$req->input('email_id');
        $comment->comment=$req->input('desc');
        $comment->save();

        return redirect('/single-blog-details/'.$id)->with('response', 'comment added successfully');
    }
}
