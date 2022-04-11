<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="{{asset('front/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="{{asset('front/assets/js/jquery-1.11.0.min.js')}}"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="{{asset('front/assets/js/simpleCart.min.js')}}"> </script>
<link href="{{asset('front/assets/css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('front/assets/js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="{{asset('front/assets/js/jquery.easydropdown.js')}}"></script>
@yield('css')
</head>
<body> 
    @include('front.datas.header')
    @yield('master')
    @include('front.datas.footer')
    @yield('js')
</body>
</html>