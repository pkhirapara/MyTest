@extends('user/app')
@section('title','Contact Us')
@section('main-content')


<section class="blog-detail mtb-40">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8">
                    @if(session('response'))
                        <div class="alert alert-success">{{session('response')}}</div>
                    @endif
    				<div class="blog-left">
                        <h1>{{ $blog_detail[0]->title }}</h1>
                        <div class="posted-on">
                            <p>Author <span>{{ $blog_detail[0]->author }}</span> on <span>{{$blog_detail[0]->created_at}}</span></p>
                        </div>
                        <div class="detail-img">
    					   <img src="{{ $blog_detail[0]->img_name }}" alt="blog1" />
                        </div>
                        <div class="blog-desc">
        					<p style="text-align:justify">{{$blog_detail[0]->desc}} </p>

                        </div>
    				</div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email Id</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="text-align:center;font-size:32px;margin-top:3%;margin-bottom:3%"> Comments Here !</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('/single-blog-details-comments/'.$blog_detail[0]->blog_id)}}" method="post">
                            @csrf

                            <input type="hidden" name="blog_id" value="{{$blog_detail[0]->blog_id}}"/>
                                <div class="form-group">
                                    <label for="email">User Name</label>
                                    <input type="text" class="form-control" id="email" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Email Id</label>
                                    <input type="text" class="form-control"  id="pwd" name="email_id">
                                </div>
                                <div class="form-group">
                                    <label for="email">Comments</label>
                                    <textarea id="" cols="30" rows="10" class="form-control" name="desc"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    </div>
    			</div>
    			<div class="col-md-4">
    				<div class="blog-right">
                        <div class="right-widget recent-post">
                            <h3>Recent Blogs</h3>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img1.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 1</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img2.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 2</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img3.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 3</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img4.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 4</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img5.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 5</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                         <div class="right-widget categories">
                             <h3>Categories</h3>
                             <ul>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Opinion</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Style</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
                         </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


@endsection
