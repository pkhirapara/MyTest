@extends('user/app')

@section('main-content')

<section class="banner">
    <div class="banner-box">
        <div class="intro-text">
            <div class="intro-text-box">
                <h1>Lorem Ipsum is simply dummy text</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
        <img src="{{ asset('images/banner.jpg') }}" alt="banner" />
    </div>
</section>
<section class="featured-blog mtb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{ asset('images/img1.jpg') }}" alt="blog1" />
                    <h3>Sample blog post 1</h3>
                    <p>by <span>RSGiTECH</span> on <span>October 22, 2018</span></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="detail.html" class="btn btn-danger">Read more...</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{ asset('images/img2.jpg') }}" alt="blog1" />
                    <h3>Sample blog post 2</h3>
                    <p>by <span>RSGiTECH</span> on <span>October 22, 2018</span></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="detail.html" class="btn btn-danger">Read more...</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{ asset('images/img3.jpg') }}" alt="blog1" />
                    <h3>Sample blog post 3</h3>
                    <p>by <span>RSGiTECH</span> on <span>October 22, 2018</span></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="detail.html" class="btn btn-danger">Read more...</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{ asset('images/img4.jpg') }}" alt="blog1" />
                    <h3>Sample blog post 4</h3>
                    <p>by <span>RSGiTECH</span> on <span>October 22, 2018</span></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="detail.html" class="btn btn-danger">Read more...</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{ asset('images/img5.jpg') }}" alt="blog1" />
                    <h3>Sample blog post 5</h3>
                    <p>by <span>RSGiTECH</span> on <span>October 22, 2018</span></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="detail.html" class="btn btn-danger">Read more...</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{ asset('images/img6.jpg') }}" alt="blog1" />
                    <h3>Sample blog post 6</h3>
                    <p>by <span>RSGiTECH</span> on <span>October 22, 2018</span></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="detail.html" class="btn btn-danger">Read more...</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
