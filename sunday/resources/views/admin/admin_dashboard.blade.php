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
                            <h1>Dashboard</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>   
                    </div>
        		</div>
            </div>
    	</div>
    </section>





@endsection