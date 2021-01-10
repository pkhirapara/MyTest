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
                              <form action="{{url('/admin-panel/add-cate_post')}}" method="post">
                              {{csrf_field()}}

                              @if(session('response'))
                                <div class="alert alert-success">{{session('response')}}</div>
                              @endif
                                <div class="form-group form-row">
                                    <label class="col-md-3">Categoery </label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" name="cate" placeholder="Categoery" required>
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