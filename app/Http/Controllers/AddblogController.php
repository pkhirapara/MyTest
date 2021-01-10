<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categoeries;
use App\Models\blogs;


class AddblogController extends Controller
{
    //

    public function index()
    {
        // $cate=categoeries::all();
        return view('admin.add_blog');
    }
    // public function add_blog(Request $req)
    // {
    //     $blog= new blogs;
    //     $blog->cate_name=$req->input('cate');
    //     $blog->title=$req->input('title');
    //     $blog->author=$req->input('author');
    //     $blog->desc=$req->input('description');
    //     $file = $req->file('blog_pic');
    //     $file_name=$file->getClientOriginalName();

    //     $destinationPath = 'uploads';
    //     $file->move($destinationPath,$file->getClientOriginalName());
    //     $blog->img_name=$file_name;
    //     $blog->save();
    //     return redirect('/admin-panel/add-blog')->with('response','Every Thing is Ok');

    // }
}
