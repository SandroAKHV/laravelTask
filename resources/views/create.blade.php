<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel</title>
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/> 

    <link href="{{asset('assets/img/favicon.png')}}" rel=icon>

    <!-- web-fonts -->
    <link href='{{asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500')}}' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{asset('assets/fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{asset('assets/css/mobile-menu.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    {{-- @yield('seo') --}}
 
</head>

<body >
    <div class="container">
        <form action="{{ route('adminstore')}}" method="POST">
            @csrf
            <label>name:</label>
            <input required type="text" name="name" class="form-control"placeholder="name" "/>
          
            <label>image :</label>
            <input class="form-control" type="file" class="form-control" name="image">
            <label>description :</label>
            <textarea required name="description" class="form-control" cols="10" rows="10"  " placeholder="desc"></textarea>
            <label>userid:</label>
            <input required type="text" name="userid" class="form-control" placeholder="userid" />
          
            <button class="btn brn-primary">submit</button>
        </form>
    </div>

</body>
</html>