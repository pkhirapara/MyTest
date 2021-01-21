@extends('admin/app')

@section('admin-panel')

<section class="dashboard-wrap mtb-40">
    	<div class="container">
            <div class="body-content">
        		<div class="row">
        			<div class="col-md-3">
                      @include('admin/layouts/sidebar')
                    </div>
                    <div class="col-md-9">
                        <div class="dash-right">
                            <div class="dash-header">
                              <div class="dash-title">
                                  <h1>Create Blog</h1>
                              </div>
                            </div>
                            <div class="blog-form">
                              <form action="{{ url('/admin-panel/add-blog-post') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group form-row">
                                    <label class="col-md-3">Select categoery </label>
                                    <div class="col-md-9">
                                    <select  class="form-control" name="cate">
                                       <option>Select categoery</option>
                                       @if(count($cate_date)>0)
                                        @foreach($cate_date->all() as $cate_vale)
                                             <option value="{{$cate_vale->cate_name}}">{{$cate_vale->cate_name}}</option>
                                        @endforeach
                                      @endif
                               </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3">Title </label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" name="title" placeholder="Title" required>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3">Author </label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" name="author" placeholder="Author" required>
                                    </div>
                                </div>

                                <div class="form-group form-row">
                                  <label class="col-md-3">Upload Image</label>
                                  <div class="col-md-9">
                                    <input type="file" id="image" name="blog_pic"/>
                                  </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3">Description <span class="required">*</span></label>
                                    <div class="col-md-9">
                                      <textarea name="description" rows="5" class="form-control" placeholder="Description" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
        		</div>
            </div>
    	</div>
    </section>




@endsection
