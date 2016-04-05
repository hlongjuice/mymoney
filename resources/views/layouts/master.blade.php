<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/jquery-ui.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/jquery-ui.theme.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/jquery-ui.structure.min.css')}}" rel="styleshhet">
	<link href="{{ asset('css/image-picker.css')}}" rel="stylesheet">
	<link href="{{ asset('css/mymoney.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="{{ asset('js/jquery-1.11.3.min.js')}}"></script>
	  <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
	  <script src="{{ asset('js/image-picker.min.js')}}"></script>
	</head>
	<body>
	  @include('layouts.navbar')
	  <div class="container my-container">
	   @yield('content') {{-- Main Content--}}
		
	  </div>
	    @yield('page-script')
	</body>
	</html>