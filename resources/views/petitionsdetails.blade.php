

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
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
  	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="../css/main.css">
  	<link rel="stylesheet" href="../css/backend.css">

</head>



<body ng-app="petitionSite">

<!--  ..................................   FB JS SDK ....................................-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--  ..................................   Titter JS SDK ....................................-->

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
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
		  <a href="/new-working-backend/public/"> <img class="navbar-brand"  id="logo" src="../images/logo.png"/> </a>
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


  <!-- ............................. Social content ------------------->

<div class="container-social">
  <div class="container">

  <h3 id="titleelement" style="color:#1c2c3c;">Spread The Word </h3>
  <div class="social-buttons">


  <div class="fb-share-button"  id="fbid" data-href="new-working-backend/public/petitions/{{$petition->id}}" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
  <!-- Place this tag where you want the share button to render. -->

  <a class="twitter-share-button"
    href="https://twitter.com/intent/tweet?text=Check%20out%20this%20petition!"
    data-size="large">
  Tweet</a>
  </div>

</div>
</div>


<!-- ............................. content ------------------->

<div class=" row-content">
<div class="container">
  <div class="tabs-content-wrapper">
              <div class="container">

                      <div class="petitions-list col-sm-12">
                                      <div id="listElement" class="petition-item clearfix">
                  <div class="img-wrapper col-sm-4">
                      <a href="#">
                          <img src="../images/{{$petition->photo}}.jpg" alt="Save Hillview Street Dogs"/>
                      </a>
                  </div>
                  <div class="petition-item-content col-sm-8">
                      <a href="/" id="petitionTitle" class="title-tab">{{$petition->title}}</a>
                      <div id="petitiondescription" class="description"></div>
                        {{$petition->description}}
                      <div class="button-vote text-right">
                      </div>
                                      </div>

              </div>
            </div>
          </div>

        </div>

</div>
</div>

<div class="container">
  <h3 id="titleelement" style="color:#1c2c3c;">Signatures <span>(Signed by: {{$petition->signatures->count()}})</span> </h3>


  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($petition->signatures as $index => $sign)

        <tr>

          <td>{{$index +1}}</td>
          <td>{{$sign->firstname}}</td>
          <td>{{$sign->lastname}}</td>
          <td>...</td>

        </tr>
                @endforeach
      </tbody>
    </table>
    </div>
  </div>



<div class="container">


  <meta name="csrf-token" content="{{ csrf_token() }}" />

<br />
<br />
  @if (Auth::user())
  <h2>Add signature</h2>
  <form method="POST" action="/new-working-backend/public/petitions/{{$petition->id}}/signatures">
    <div class="form-group">

       <input type="text" name ="firstname" class="form-control" id="firstname" placeholder="Enter your firstname" required>
       <input type="text" name ="lastname" class="form-control" id="lastname" placeholder="Enter your firstname" required>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </div>

    <!--<div class="form-group">
      <label for="lastname">Lastname</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter your lastname">
    </div>-->


    <button type="submit" class="btn btn-danger">Add Signature <i class="fa fa-pencil" aria-hidden="true"></i></button>
  </form>
  </div>
  @else
  <div class="container text-center">
    <div class="alert alert-danger" role="alert">Please <b>REGISTER</b> first in order to sign the petition</div>
  </div>
  @endif





</div>





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
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>
