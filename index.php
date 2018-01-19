<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>SiteName</title>
	<meta name="description" content="">
	<meta name="robots" content="index, follow">

	<link rel="stylesheet" href="_assets_/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="_assets_/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="_assets_/css/animate.min.css">
	<link rel="stylesheet" href="_assets_/plugins/owl.carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="_assets_/css/layout.css">

	<link rel="shortcut icon" href="_assets_/images/favicon.ico">
	<link rel="apple-touch-icon" href="_assets_/images/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="72x72" href="_assets_/images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="114x114" href="_assets_/images/touch-icon-iphone4.png">
	<link rel="apple-touch-icon" sizes="144x144" href="_assets_/images/touch-icon-ipad2.png">

	<!--[if !IE]><!-->
	<link rel="stylesheet" href="_assets_/plugins/add-to-homescreen/style/addtohomescreen.css">
	<script src="_assets_/plugins/add-to-homescreen/src/addtohomescreen.min.js"></script>
	<script>addToHomescreen();</script>
	<!--<![endif]-->

	<!-- Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body id="homepage">

<div id="loader-wrapper"><img src="_assets_/images/ripple.gif" alt="Loading..."></div><!-- /.loader-wrapper -->

<div class="main-wrap">
	<div class="container">

		<header>
			<div class="row">

				<div class="col-md-12">
					<div class="page-header"><h2>Sample Header plus nav</h2></div><!-- /.page-header -->
				</div><!-- /.col-md-12 -->

				<div id="header" class="col-md-12 clearfix">

					<a href="" class="logo"><h1 class="h4">Logo</h1></a>

					<ul id="nav">
						<li><a href="">Home</a></li>
						<li><a href="">Departments</a>
							<ul>
								<li><a href="">Management</a>
									<ul>
										<li><a href="">Management</a></li>
										<li><a href="">Finance</a></li>
										<li><a href="">Planning</a></li>
										<li><a href="">Public Works</a></li>
										<li><a href="">Police</a></li>
										<li><a href="">Fire / EMS</a></li>
										<li><a href="">Libraries</a></li>
										<li><a href="">Education</a></li>
										<li><a href="">Parks &amp; Recreation</a></li>
										<li><a href="">Information Technology</a></li>
									</ul>
								</li>
								<li><a href="">Finance</a></li>
								<li><a href="">Planning</a></li>
								<li><a href="">Public Works</a></li>
								<li><a href="">Police</a></li>
								<li><a href="">Fire / EMS</a></li>
								<li><a href="">Libraries</a></li>
								<li><a href="">Education</a></li>
								<li><a href="">Parks &amp; Recreation</a></li>
								<li><a href="">Information Technology</a></li>
							</ul>
						</li>
						<li><a href="">About</a>
							<ul>
								<li><a href="">About The Area</a></li>
								<li><a href="">Maps</a></li>
								<li><a href="">Links</a></li>
								<li><a href="">Photos</a></li>
							</ul>
						</li>
						<li><span>Information</span>
							<ul>
								<li><span>How Do I?</span>
									<ul>
										<li><a href="">Management</a></li>
										<li><a href="">Finance</a></li>
										<li><a href="">Planning</a></li>
										<li><a href="">Public Works</a></li>
										<li><a href="">Police</a></li>
										<li><a href="">Fire / EMS</a></li>
										<li><a href="">Libraries</a></li>
										<li><a href="">Education</a></li>
										<li><a href="">Parks &amp; Recreation</a></li>
										<li><a href="">Information Technology</a></li>
									</ul>
								</li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">News</a></li>
								<li><a href="">Announcements</a></li>
								<li><a href="">Jobs</a></li>
								<li><a href="">Minutes</a></li>
								<li><a href="">RFP's</a></li>
							</ul>
						</li>
					</ul>

					<div id="search">
						<form class="search-form" method="get" action="search.php">
							<label class="fa fa-search" for="search-input"></label>
							<input name="q" class="form-control search-input" placeholder="Enter search terms..." type="search" id="search-input">
							<button>Go</button>
						</form>
					</div><!-- /#search -->

				</div><!-- /#header -->
			</div><!-- /.row -->
		</header>

		<div class="weather">
			<div id="weather"></div><!-- /#weather -->
		</div><!-- /.weather -->

		<div class="row">
			<div class="col-md-12">

				<div id="slider">
					<ul class="bxslider">
					  <li style="background:url('_assets_/images/slide1.jpg') center no-repeat;background-size:cover"></li>
					  <li style="background:url('_assets_/images/slide2.jpg') center no-repeat;background-size:cover"></li>
					</ul>
				</div><!-- /#slider -->

			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-6">
				<div id="instafeed"></div>
			</div><!-- /.col-md-12 -->
			<div class="col-md-6">
				<div id="twitterfeed"></div>
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->

		<div class="row ">
			<div class="col-md-6 col1">
				<h2>City Newsletter</h2>
                <form class="signup submission" id="newletter-signup"  action="optin.php" enctype="application/x-www-form-urlencoded" method="post">
					<input type="email" name="femail" placeholder="Enter your email address" required>
					<button>Sign Up</button>
				</form>
			</div><!-- /.col-md-6 -->

			<div class="col-md-6">
				<h2>Stay Updated</h2>
				<form action="enotify/index.php" id="enotify-signup" class="signup clearfix">
					<input type="email" name="email" placeholder="Enter your email address" required>
					<button>Sign Up</button>
				</form>
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->

	</div><!-- /.container -->

	<footer id="footer">

		<span id="revize-login">
			<span class="powered-by-revize">
				Powered By <a id="powered-by-revize-link" target="_blank" href="http://www.revize.com">Revize</a>
			</span>
			<a id="revize-login-link" href="">Login</a>
		</span>

	</footer><!-- /#footer -->

	<div class="alert alert-dismissible floating-alert fade in os-animation" data-os-animation="fadeInUpBig" data-os-animation-delay="2s" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h1>Alert Title 30 characters Max</h1>
		<p>Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120</p>
		<p><a href="#" class="btn">Read More</a></p>
	</div><!-- /.alert -->

</div><!-- /.main-wrap -->


<!-- Share widget make into an include file -->
<button type="button" class="share-btn floating-share-btn" data-toggle="modal" data-target="#shareModal">
	<i class="fa fa-share-alt"></i>
</button>

<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Share this page</h4>
			</div>
			<div class="modal-body">
				<div class="copylink">
					<p>Copy and paste this code into your website.</p>
					<pre>&lt;a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">Your Link Name&lt;/a&gt;</pre>
				</div><!-- /.copylink -->
				<div class="share-btns">
					<p>Share this page on your favorite Social network</p>
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-facebook" onclick="return !window.open(this.href, 'facebook ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-facebook"></i> Facebook
							</a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.twitter.com/home?status=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-twitter" onclick="return !window.open(this.href, 'twitter ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-twitter"></i> Twitter
							</a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.plus.google.com/share?url=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-google" onclick="return !window.open(this.href, 'google ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-google-plus"></i> Google Plus
							</a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.reddit.com/submit?url=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-reddit" onclick="return !window.open(this.href, 'redit ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-reddit"></i> Reddit
							</a>
						</div>
					</div><!-- /.row -->
				</div><!-- /.share-btns -->
				<button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Close</button>
			</div><!-- /.modal-body -->
		</div>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Share widget make into an include file -->


<script src="_assets_/js/jquery.min.js"></script>
<script src="_assets_/plugins/modernizr/modernizr.custom.js"></script>
<script src="_assets_/plugins/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
<script src="_assets_/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="_assets_/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="_assets_/plugins/twitter/js/jquery.tweet.min.js"></script>
<script src="_assets_/plugins/instafeed/instafeed.min.js"></script>
<script src="_assets_/plugins/sticky/jquery.sticky.js"></script>
<script src="_assets_/plugins/matchHeight/dist/jquery.matchHeight-min.js"></script>
<script src="_assets_/plugins/revizeWeather/js/revizeWeather.min.js"></script>
<script src="_assets_/plugins/waypoints/waypoints.min.js"></script>
<script src="_assets_/js/scripts.js"></script>

</body>
</html>