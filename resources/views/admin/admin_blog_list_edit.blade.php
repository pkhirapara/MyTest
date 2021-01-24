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
                                  <h1>Edit Blog</h1>
                              </div>
                            </div>
                            <div class="blog-form">
                              <form action="{{ url('/admin-panel/admin-blog-list-update/'.$blog_data[0]->blog_id)}}" method="post" enctype="multipart/form-data">
                              @csrf
                              @if(session('response'))
                                <div class="alert alert-success">{{session('response')}}</div>
                              @endif
                              <div class="form-group form-row">
                                    <label class="col-md-3">Select categoery </label>
                                    <div class="col-md-9">
                                     <select name="catename" id="">
                                      @foreach($blog_data as $cate_value)

                                              <option value="{{$blog_data[0]->cate_name}}"
                                              @if($cate_value->cate_name == $blog_data[0]->cate_name)
                                               {{'selected="selected"'}}
                                                @endif
                                               >
                                                  {{$cate_value->cate_name}}


                                              </option>
                                              @endforeach


                                      </select>



                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3">Title </label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" value="{{ $blog_data[0]->title}}" name="title" placeholder="Title" required>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3">Author </label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" name="author" value="{{ $blog_data[0]->author}}" placeholder="Author" required>
                                    </div>
                                </div>


                                <div class="form-group form-row">
                                    <label class="col-md-3">Description <span class="required">*</span></label>
                                    <div class="col-md-9">
                                      <textarea name="description" rows="5"  class="form-control" placeholder="Description" required>{{ $blog_data[0]->desc}}</textarea>
                                    </div>
                                </div>

                                 <div class="form-group form-row">

                                  <label class="col-md-3">Upload Image</label>
                                  <div class="col-md-9">
                                  <input type="hidden" value="{{ $blog_data[0]->img_name}}" name="prev_img"/>
                                  <img src="{{ $blog_data[0]->img_name}}" style="height:50px;width:50px"/>
                                    <input type="file" id="image" name="blog_pic" />
                                  </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-primary" name="saveblog">Save</button>
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
