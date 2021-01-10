<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
    @include('admin/layouts/header')
   
</head>
<body>
@include('admin/layouts/navbar')

@section('admin-panel')



@show





@include('admin/layouts/footer')

</body>
</html>
