<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blogs;
use App\Models\categoeries;
use Illuminate\Support\Facades\URL;

class AdminBlogListController extends Controller
{
    //

    public function index()
    {
        // $blogs=blogs::all()->paginate(5);
        $blogs=DB::table('blogs')->paginate(4);
        $cate=categoeries::all();
        return view('admin.admin_blog_list', ['blog_data' => $blogs, 'cate_data' => $cate]);
    }

    public function edit($id)
    {
        // echo $id;
        // die();
        $blog_de = DB::table('blogs')->where('blog_id', $id)->get();
        // echo "<pre>";
        // print_r($blog_de);
        // die();

        return view('admin.admin_blog_list_edit', ['blog_data' => $blog_de]);
    }
    public function update(Request $req,$id)
    {
        // echo "<pre>";
        // print_r($_POST);
        //         echo $id;
        //         die();


        $file = $req->file('blog_pic');
        // echo $file;
        // echo "<br/>";

    //    $file_name=$file->getClientOriginalName();
    //     echo $file_name;

        if($file=="")
        {
            DB::table('blogs')
                  ->where('blog_id', $id)
                  ->update(['cate_name'=>$req->catename,'title'=>$req->title,'author'=>$req->author,'desc'=>$req->description,'img_name'=>$req->prev_img]);
                  return redirect('/admin-panel/admin-blog-list')->with('response','Update Successfully');
        }
        else{

            // echo "<pre>";
            // print_r($_POST);

            $p_img=$req->prev_img;
            // echo $p_img;
            $data=explode("/", $p_img);
            // echo "<pre>";
            // print_r($data);
            $delete_img_name=$data[4];
            // echo "<br/>";
            // echo $delete_img_name;
            $file = $req->file('blog_pic');
            $file_name=$file->getClientOriginalName();
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
            $url=URL::to("/").'/uploads/'.$file->getClientOriginalName();

            DB::table('blogs')
                ->where('blog_id', $id)
                ->update(['cate_name'=>$req->catename,'title'=>$req->title,'author'=>$req->author,'desc'=>$req->description,'img_name'=>$url]);

            unlink('uploads/'.$delete_img_name);
            return redirect('/admin-panel/admin-blog-list')->with('response', 'Update Successfully');

        }

        //   DB::table('blogs')
        //       ->where('blog_id', $id)
        //       ->update(['cate_name'=>$req->catename,'title'=>$req->title,'author'=>$req->author,'desc'=>$req->description,'img_name'=>$req->prev_img]);
        //       return redirect('/admin-panel/admin-blog-list')->with('response','Update Successfully');
    }
}
