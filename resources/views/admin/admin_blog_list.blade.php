@extends('admin/app')

@section('admin-panel')

<section class="dashboard-wrap mtb-40">
    	<div class="container">
            <div class="body-content">
        		<div class="row">
        			<div class="col-md-3">
                       @include('admin/layouts.sidebar')
                    </div>
                    <div class="col-md-9">
                        <div class="dash-right">
                            <div class="dash-header">
                                <div class="dash-title">
                                    <h1>Blogs</h1>
                                </div>
                                <div class="dash-nav">
                                    <a href="{{ url('admin-panel/add-blog') }}" class="btn btn-success">Add Post</a>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Category</th>
                                    <th>Blog Pic</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($blog_data as $blog_details)
                                <tr>
                                    <td>{{ $blog_details->cate_name }}</td>
                                    <td><img src="{{ $blog_details->img_name }}" style="height:50px;width:50px;border-radius:50%" ></td>
                                    <td>{{ $blog_details->title }}</td>
                                    <td>{{ $blog_details->author }}</td>
                                    <td>{{ $blog_details->desc }}</td>
                                    <td>
                                        <a href="{{ url('/admin-panel/admin-blog-list-edit/'.$blog_details->blog_id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
        		</div>
            </div>
    	</div>
    </section>




@endsection
