<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categoeries;
use App\Models\blogs;

use Illuminate\Support\Facades\URL;


class AddblogController extends Controller
{
    //

    public function index()
    {
        $cate=categoeries::all();
        // echo "<pre>";
        // print_r($cate);
        return view('admin.add_blog', ['cate_date'=>$cate]);
    }

    public function add_blog(Request $req)
    {
        // echo "<pre>";
        // print_r($_POST);
        // echo "<pre>";
        // echo $req;
         // $url=$url=URL::to("/");
          //echo $url;



        //   $file = $req->file('blog_pic');

        //   $url=URL::to("/").'/uploads/'.$file->getClientOriginalName();
        //   echo $url;


        $blog= new blogs;
        $blog->cate_name=$req->input('cate');
        $blog->title=$req->input('title');
        $blog->author=$req->input('author');
        $blog->desc=$req->input('description');
        $file = $req->file('blog_pic');
        $file_name = $file->getClientOriginalName();

        // echo $file_name;
        // $ext=$file->getClientOriginalExtension();
        // echo "<br/>".$ext;
        // if($ext=="png" or $ext=="jpge" or $ext=="PNG" or $ext=="jpg")
        // {
        // }
        // else{
        //     echo "file extenstion does not match";
        // }

        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
        $url=URL::to("/").'/uploads/'. $file->getClientOriginalName();
        $blog->img_name=$url;
        $blog->save();
        return redirect('/admin-panel/add-blog')->with('response', 'Every Thing is Ok');

    }
}
