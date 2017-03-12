<!doctype html>

<html lang="en" class="no-js">
<head>
	<title>Vove Hostel</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
   	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/all.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    	<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    	<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/waypoints.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Static navbar -->
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img alt="" src="images/logo.png"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">Home</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/room">Room</a></li>
							<li><a class="active" href="/reservation">Reservation</a></li>
							<li><a href="/services">services</a></li>
							<li><a href="/gallery">gallery</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<!-- home 
			================================================== -->
		<div class="section">
	    		<div id="reservation">
	      			<div class="reservation-img">
	        			<img src="http://backpackhostel.net/wp-content/uploads/2015/09/banner_3.jpg" class="w100">
	        			<div class="reservation-title">
	        				<div class="visible-lg visible-md visible-sm">
            					<h3 class="mdH">BOOKING</h3>
            				</div>
            				<div class="visible-xs">
            					<h3 class="mgb xsH">BOOKING</h3>
            				</div>
	        			</div>
	      			</div>    
	    		</div>
		</div>
		<!-- End home -->

		<!-- reservation-content -->
		<div class="section">
			<div class="reservation-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 text-left mgb10 visible-lg visible-md visible-sm">
						            		<ul class="breacrumb">
						              			<li class="tab active-tab">1. Date</li>
								              	<li class="tab">2. Room</li>
								              	<li class="tab">3. Reservation</li>
								              	<li class="tab">4. Confirmation</li>
						             		</ul>
						          		</div>
						          		<div class="col-md-12 text-left mgb10 visible-xs">
						            		<ul class="breacrumbxs">
						              			<li class="tab active-tab">1. Date</li>
								              	<li class="tab">2. Room</li>
								              	<li class="tab">3. Reservation</li>
								              	<li class="tab">4. Confirmation</li>
						             		</ul>
						          		</div>
						          	</div>
						</div>
						<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
                        	<div class="col-md-12 dp p20">
                            	<h4 class="text-center ttY p10 Br"> Your Reservation</h4>
                            	@if(count($errors) > 0)
			                    	<div class="alert alert-danger">
			                    		@foreach($errors->all() as $err)
			                    			{{$err}}<br>
			                    		@endforeach
			                    	</div>
			                    @endif

			                    @if(session('thongbao'))
			                    	<div class="alert alert-success">
			                    			{{session('thongbao')}}
			                    	</div>

			                    @endif
                            	 <form action="/datgiuong" method="POST" enctype="multipart/form-data">
                            	 	<input type="hidden" name="_token" value="{{csrf_token()}}">
	                            	<div class="col-md-12">
                                		<div class="row">
                                			<div class="col-md-8 col-sm-8 col-xs-8 form-group">
                                    			<label>Check In</label>
                                    			<span class="help-block">
                                    			<div class="form-group">
                                        			<input type="date" name="ngay_bat_dau" class="form-control">
                                    			</div>
                                			</div>
                                			<div class="col-md-4 col-sm-4 col-xs-4 form-group">
                                    			<label>Night</label>
                                    			<span class="help-block">
                                    			<select class="form-control" name="so_ngay">
                                        				<option>1</option>
                                            			<option>2</option>
                                            			<option>3</option>
                                            			<option>4</option>
                                            			<option>5</option>
                                            			<option>6</option>
                                            			<option>7</option>
                                    			</select>
                                			</div>
                                		</div>
	                            	</div>
	                            	<div class="col-md-12">
                                		<div class="row">
                                			<div class="col-md-8 col-sm-8 col-xs-8 form-group">
                                    			<label>Check Out</label>
                                    			<span class="help-block">
                                    			<div class="form-group">
                                    				<input type="date" name="ngay_ket_thuc" class="form-control">
                                    			</div>
                                			</div>
                                			<div class="col-md-4 col-sm-4 col-xs-4 form-group">
                                        		<label>Guest</label>
                                       		<span class="help-block">
                                        		<select class="form-control" name="so_giuong">
                                                		<option>1</option>
                                                		<option>2</option>
                                                		<option>3</option>
                                                		<option>4</option>
                                                		<option>5</option>
                                                		<option>6</option>
                                                		<option>7</option>
                                        		</select>
                                			</div>
                                		</div>
	                            	</div>
	                            	<div class="col-md-12 text-center">
	                                    <button class="btn btn-success"> Check Availability</button>
	                            	</div>
	                            </form>
                        	</div>
	                      </div>
					</div>
				</div>
			</div>
		</div>
		<!-- End reservation-content -->

		<!-- form chat facebook
			================================================== -->
		<div class="fixed-bottom-right">
	            	<button onclick="formchat()" id="chao"><i class="fa fa-comments-o" aria-hidden="true"></i> Nhắn tin</button> 
	            	<div id="chat">
	                		<i class="fa fa-angle-down" aria-hidden="true" onclick="an()" style="font-size:25px;"></i>
	                		<iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/VoveHostel/&tabs=messages&width=300&height=400&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=337996186364028" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	                	</div>
	        	</div>
	       	<!-- End form chat facebook -->

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a class="footer-logo" href="index-2.html"><img src="images/logo.png" alt=""></a>
					</div>
					<div class="col-md-9">
						<div class="copyright-line">
							<span>Copyright 2013 Thematic | Theme by Nunforest</span>
							<ul class="social-icons">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
								<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>					
								<li><a class="dribble" href="#"><i class="fa fa-dribbble"></i></a></li>					
								<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>					
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End home -->

	</div>
	<!-- End Container -->	
	<script type="text/javascript">
		$(document).ready(function() {
			select = function() {
				window.location.href = '/check' ;
			}
			formchat = function() {
                                    	$('#chao').removeClass('show');
                                    	$('#chat').removeClass('hide');
                                    	$('#chao').addClass('hide');
                                    	$('#chat').addClass('show');
                            	}	
                            	an = function() {
                                    	$('#chao').removeClass('hide');
                                    	$('#chat').removeClass('show');
                                    	$('#chao').addClass('show');
                                    	$('#chat').addClass('hide');
                            	}  
		});
	</script>

	<!-- <script type="text/javascript" src="js/smooth-scroll.js"></script> -->
	<script type="text/javascript" src="js/circle-skill.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>