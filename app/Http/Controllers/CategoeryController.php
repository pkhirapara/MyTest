<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoeries;

class CategoeryController extends Controller
{
    //
    public function index()
    {
        return view('admin.add_categoery');
    }
    public function add_cate(Request $request)
    {
           $cate= new categoeries;
           $cate->cate_name=$request->input('cate');
           $cate->save();
           return redirect('/admin-panel/add-cate')->with('response', 'Add Categoery Successfully');

    }
}
