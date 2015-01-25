@include('login_logout')
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Perpustakaan terintegrasi menyediakan koleksi buku dalam skala besar dan bervariasi yang didukung oleh beberapa perpustakaan yang telah bekerja sama.">
		<meta name="author" content="">

		<title>Perpustakaan Terintegrasi</title>

		<!-- Bootstrap Core CSS -->
		{{ HTML::style('css/bootstrap.css') }}

		<!-- Custom CSS -->
		{{ HTML::style('css/half-slider.css') }}
		{{ HTML::style('css/customfonts.css') }}
		{{ HTML::style('css/bethstyle.css') }}
		{{ HTML::style('addons/jquery.smartmenus.bootstrap.css') }}

		{{ HTML::style('css/alertify.min.css') }}
		{{ HTML::style('css/themes/default.min.css') }}


		<style>
		    .panel-default{
		        margin-top:30px;
		        width:415px;
		    }
		    /*panel-default responsive*/
		    @media (max-width: 470px) {
		        .panel-default{
		            width:350px;
		        }
		    }
		    @media (max-width: 400px) {
		        .panel-default{
		            width:300px;
		        }
		    }
		    @media (max-width: 350px) {
		        .panel-default{
		            width:250px;
		        }
		    }
		</style>

		<!-- Logo Title-->
		<link rel="shortcut icon" href="{{ URL::asset('images/icons/book.ico')}}" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	</head>

	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
			<div class="container parent-search">
				@if(Auth::guest())
					@yield('loggedout')
				@else
					@yield('loggedin')
				@endif
				
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" id="judul" href="index.html">Server Perpustakaan Terintegrasi</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						@if(Auth::guest())
						    <li class="visible-xs hidden-lg" data-toggle="modal" data-target=".bs-modal-sm">
						        <a href="{{URL::to('login')}}">MASUK</a>
						    </li>
					    @else
					    	<li class="visible-xs hidden-lg" data-toggle="modal" data-target=".bs-modal-sm">
					    	    <a href="{{URL::to('logout')}}">KELUAR</a>
					    	</li>
					    @endif
					</ul>

				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				</div>
				<button id="btn-cari-home" class="btn btn-default visible-xs visible-sm" title="Cari" data-toggle="modal" data-target=".bs-modal-cari"><i class="glyphicon glyphicon-search"></i></button>
			</div>
			<!-- /.container -->
		</nav>

		<!-- Page Content -->
		<div class="container">
			<!--Modal Cari-->
		   @yield('searchbox')
			<!-- End Modal Content --> 

			<div id="konten">
				@yield('content')
			</div>
			<!--/.konten-->
		</div>
		<!-- /.container -->

		<!-- Footer -->
		<footer class="bg-footer">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12">
		                <p>Copyright &copy; Perpustakaan Terintegrasi 2014</p>
		            </div>
		        </div>
		    <!-- /.row -->
		    </div>
		</footer>


	    <!-- Footer -->
	    <!-- jQuery Version 1.11.0 -->
	    {{HTML::script('js/Jquery/jquery-1.11.0.js')}}

	    <!-- Bootstrap Core JavaScript -->
	    {{HTML::script('js/Bootstrap/bootstrap.min.js')}}

	    <!-- Style -->
	    <!-- HeadRoom  -->
	    <style>
	        .headroom--unpinned {
	            top: -370px;
	        }
	    </style>

	    {{HTML::script('js/Headroom/headroom.js')}}
	    {{HTML::script('js/Headroom/jQuery.headroom.js')}}

		<!-- Multilevel Dropdown-->
		<!-- SmartMenus jQuery plugin -->
		{{HTML::script('js/Smartmenus/jquery.smartmenus.js')}}

		{{HTML::script('js/Shorten/jquery.shorten.js')}}

		<!-- SmartMenus jQuery Bootstrap Addon -->
	    {{HTML::script('addons/jquery.smartmenus.bootstrap.js')}}
	    {{HTML::script('js/alertify/alertify.min.js')}}

	    {{HTML::script('js/typeahead/bootstrap3-typeahead.min.js')}}

		<script>
			//HeadRoom
			$(document).ready(function(){
				$(".navbar-fixed-top").headroom();
				@yield('additional_javascript')
			});
		</script> 
	</body>
</html>
