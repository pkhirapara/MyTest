<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blogger</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
    	<div class="container">
	      <a class="navbar-brand" href="index.html">
	      	<img src="{{ asset('images/logo.png') }}" alt="Angular Project" />
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarCollapse">
	        <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bloglist.html">Blog</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="login.html" class="nav-link">Login</a>
                </li>
            </ul>
	      </div>
  		</div>
    </nav>
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
    <footer>
    	<div class="container">
    		<div class="copyright">
    			<div>Designed by RSGiTECH</div>
    		</div>
    	</div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
