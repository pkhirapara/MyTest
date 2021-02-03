@extends('user/app')
@section('title','My Blogs')
@section('main-content')




<section class="banner">
    	<div class="banner-box">
    		<div class="intro-text">
    			<div class="intro-text-box">
		    		<h1>Lorem Ipsum is simply dummy text</h1>
		    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
	    		</div>
    		</div>
    		<img src="{{asset('images/banner.jpg')}}" alt="banner" />
    	</div>
    </section>
    <section class="featured-blog mtb-40">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
                    <div class="dash-left">
                        <ul>
                            <li class="active"><a href="{{ url('/admin-panel')}}" class="active">Category</a></li>
                            @foreach($cate_data as $cate_value)
                                <li><a href="{{ URL::to('/?val='.$cate_value->cate_name) }}">{{ $cate_value->cate_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
    			</div>
    			<div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            @if(session('response'))
                                <div class="alert alert-success">{{session('response')}}</div>
                            @endif
                            @foreach($blog_data as $blog_value)
                                <div class="col-md-4">
                                    <div class="blog-box">
                                        <img src="{{$blog_value->img_name}}" alt="blog1" style="height:200px;width:100%"/>
                                        <h3>{{$blog_value->title}}</h3>
                                        <p>Author <span>{{$blog_value->author}}</span></p>
                                        <p>{{$blog_value->desc, 100}} </p>
                                        <a href="{{url('single-blog-details/'.$blog_value->blog_id)}}" class="btn btn-danger">Read more...</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
    			</div>

    		</div>
    	</div>
    </section>


@endsection
