<!DOCTYPE html>
<html>
<head>
	<title>Project Flyer</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- css custom -->
<link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}">


<!-- start photo swipe css  -->
<link rel="stylesheet" type="text/css" href="{{ url('/dist/photoswipe.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/dist/default-skin/default-skin.css') }}">
<!-- end photo swipe css   -->


<!-- <link rel="stylesheet" type="text/css" src="{{ public_path('css/dropzone.css') }}">
 --><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('/dist/photoswipe.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/dist/photoswipe-ui-default.min.js') }}"></script>




</head>
<body>
  
	   <div class="container">	

			 <!-- Fixed navbar -->
		    <nav class="navbar navbar-inverse navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#">Bootstrap theme</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="#">Home</a></li>
		            <li><a href="#about">About</a></li>
		            <li><a href="#contact">Contact</a></li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="#">Action</a></li>
		                <li><a href="#">Another action</a></li>
		                <li><a href="#">Something else here</a></li>
		                <li role="separator" class="divider"></li>
		                <li class="dropdown-header">Nav header</li>
		                <li><a href="#">Separated link</a></li>
		                <li><a href="#">One more separated link</a></li>
		              </ul>
		            </li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>



           @yield('content')
    </div>

           @yield('footer.scripts')

</body>
</html>