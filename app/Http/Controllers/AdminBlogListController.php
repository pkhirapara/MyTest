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
        $blogs=blogs::all();
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
}
