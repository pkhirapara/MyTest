<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blogs;
use App\Models\categoeries;
use Illuminate\Support\Facades\URL;

class AddblogController extends Controller
{
    //

    public function index()
    {
        $cate=categoeries::all();

        return view('admin.add_blog', ['cate_date' => $cate]);
    }

    public function add_blog(Request $req)
    {

        $url=URL::to("/");
        echo $url;

        $blog= new blogs;
        $blog->cate_name=$req->input('cate');
        $blog->title=$req->input('title');
        $blog->author=$req->input('author');
        $blog->desc=$req->input('description');
        $blog->img_name=$req->input('blog_pic');

        $file = $req->file('blog_pic');
        $file_name=$file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
        $url=URL::to("/").'/uploads/'.$file->getClientOriginalName();
        $blog->img_name=$url;
        $blog->save();
        return redirect('/admin-panel/add-blog')->with('response', 'Everything is Ok');

    }
}
