<!DOCTYPE html>

<head>
	<title>Petition Site</title>
	<meta charset="utf-8">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../public/bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="../public/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/backend.css">

</head>
<body ng-app="petitionSite">
	<!-- ....................................... Loading Header  ............... -->

	<div class="mainheader">
		<nav class="navbar">
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
@if (Auth::guest())
                <li><a href="/new-working-backend/public/home"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> Login</a></li>
                <li><a href="/new-working-backend/public/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>

            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <strong>Welcome: </strong>  {{ Auth::user()->name }} </span>
                    </a>
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              <li><a href="/new-working-backend/public/home"><i class="fa fa-btn fa-dashboard"></i> Go to Dashboard</a></li>

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
	<a href="/new-working-backend/public/home#loginn"><p> <button id="header-button" type="button" class="btn btn-success btn-lg">Start The New Petition Now <i class="fa fa-share" aria-hidden="true"></i></button>  </p></a>
	</div>
	</div>

	<!-- ....................................... Homepage content ............... -->

<div class=" row-content">
	<div class="container">
<div class="left col-sm-6">

<h2 id="titleelement">FREE ONLINE PETITIONS</h2>
<p>
	Create a powerful online petition in just a few minutes. No technical knowledge is needed to start your online petition. Just click the button above and you'll be ready to start collecting signatures for your online petition right away.
	 iPetitions: the most flexible online activism tools on the Internet.
</p>
<a id= "index-link" href="#"> To find out more - check our About page!</a>
</div>
<div class="right col-sm-6 ">
	<img id="checklistpic" src="images/checklist.jpg" />
</div>
	</div>
</div>

<div class=" row-contentt container">
	<h2 id="titleelement">Top 5 Recent Petitions</h2>

	<ul class="nav nav-tabs text-center">
	  <li role="presentation" class="active"><a href="#">Politics</a></li>
	  <li role="presentation" ng-model="taxes"><a href="#">Taxes</a></li>
	  <li role="presentation"><a href="#">Envorionement</a></li>
	  <li role="presentation"><a href="#">Employement</a></li>
	  <li role="presentation"><a href="#">Racism</a></li>
	</ul>
</div>

<!-- ....................................... p-etitions content ............... -->


	<div class="tabs-content-wrapper">
	            <div class="container" ng-controller="mainController">
	                    <div class="petitions-list col-sm-12" ng-repeat="petition in petitions | limitTo:quantity | orderBy:'-id'">
	                                    <div id="listElement" class="petition-item clearfix">
	                <div class="img-wrapper col-sm-4">
	                    <a href="#">
	                        <img src="../public/images/@{{petition.photo}}.jpg" alt="Save Hillview Street Dogs"/>
	                    </a>
	                </div>
	                <div class="petition-item-content col-sm-8">
	                    <a href="/new-working-backend/public/petitions#firstpetition" id="petitionTitle" class="title-tab">@{{petition.title  }}</a>
	                    <div id="petitiondescription" class="description"></div>
												@{{petition.description}}
											<div class="button-vote text-right">
										<a href="/new-working-backend/public/petitions#firstpetition"		<button type="button" class="btn btn-danger">Click & See All Petitions Now </button> </a>
											</div>
	                                    </div>

	            </div>
						</div>
					</div>

				</div>
<div id="counter1">

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


<!-- ................................... Loading scripts ..................... -->

<script src="../public/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="../public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../public/bower_components/angular/angular.min.js"></script>
<script src="../public/js/core.js"></script>



<script src="js/main.js"></script>

</body>
