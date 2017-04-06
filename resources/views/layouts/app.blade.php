<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="../public/bower_components/bootstrap/dist/css/bootstrap.css">
  	<link rel="stylesheet" href="../public/bower_components/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/main.css">
  	<link rel="stylesheet" href="css/backend.css">

</head>



<body ng-app="petitionSite">
	<!-- ....................................... Loading Header  ............... -->

	<div class="mainheader">
		<nav class="navbar  ">
		  <div class="container-fluid">
				<div class="container">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		  <a href="/new-working-backend/public/"> <img class="navbar-brand"  id="logo" src="images/logo.png"/> </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul id="menuElements" class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> Login</a></li>
                <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <strong>Welcome: </strong>  {{ Auth::user()->name }} </span>
                    </a>
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              <li><a href="/new-working-backend/public/"><i class="fa fa-btn fa-home"></i> Go to Homepage</a></li>

                </li>
            @endif
	      </ul>
		    </div><!-- /.navbar-collapse -->

			</div>
		  </div><!-- /.container-fluid -->
		</nav>
	<div class="main-title col-sm-12 text-center">
		<h1>	Create Your Free Petition <br />
					In 3 Easy Steps</h1>
	</div>

	<div class=" headr-steps col-sm-12"  >
	<div class="container">


	<h2 class="col-sm-4"><i class="fa fa-check-square-o" aria-hidden="true"></i> Enter Petition Detials</h2>
	<h2 class="col-sm-4"><i class="fa fa-check-square-o" aria-hidden="true"></i> Enter Your Infomration</h2>
	<h2 class="col-sm-4"><i class="fa fa-check-square-o" aria-hidden="true"></i> Collect Signatures</h2>
	</div>
	</div>


	<div class="header-buttonn col-sm-12 text-center">
	<a href="#loginn"><p> <button id="header-button" type="button" class="btn btn-success btn-lg">Start The New Petition Now <i class="fa fa-share" aria-hidden="true"></i></button>  </p></a>
	</div>
	</div>


  @yield('content')



	<!-- ....................................... Footer ............... -->

	<footer class="footer-basic-centered">

                              <p class="footer-company-motto"><i>Create Your Free Petition
                      In 3 Easy Steps</i></p>

                              <p class="footer-links">
                                <a href="#">Home</a>
                                ·
                                <a href="#">Blog</a>
                                ·
                                <a href="#">About</a>
                                ·
                                <a href="#">FAQ</a>
                                ·
                                <a href="#">Contact</a>
                              </p>

                              <p class="footer-company-name">FreeVote &copy; 2017</p>

  </footer>




<body id="app-layout">


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
