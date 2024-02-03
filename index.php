<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SiteName</title>
	<meta name="description" content="">
	<meta name="robots" content="index, follow">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
	<link rel="stylesheet" href="_assets_/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="_assets_/css/layout.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<link rel="shortcut icon" href="_assets_/images/favicon.ico">
	<link rel="apple-touch-icon" href="_assets_/images/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="72x72" href="_assets_/images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="114x114" href="_assets_/images/touch-icon-iphone4.png">
	<link rel="apple-touch-icon" sizes="144x144" href="_assets_/images/touch-icon-ipad2.png">
	
	<?php include "_includes_/calendar_css.php"; ?>

</head>
<body id="homepage">

<header>

	<a href="#main" id="skip" tabindex="0" class="btn">Skip to main content</a>

	<!--<ul id="navicons" class="d-none">
		<li><img src="_assets_/images/navicon-1.png" alt="1" class="nav-icon"></li>
		<li><img src="_assets_/images/navicon-2.png" alt="2" class="nav-icon"></li>
		<li><img src="_assets_/images/navicon-3.png" alt="3" class="nav-icon"></li>
		<li><img src="_assets_/images/navicon-4.png" alt="4" class="nav-icon"></li>
	</ul>--><!--/#navicons-->

	<div id="toggles" class="d-lg-none">
		<div id="search-toggle" class="fa fa-search"></div>
		<div id="nav-toggle" class="fa fa-bars"></div>
	</div><!--/#toggles-->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="./" id="logo"><img src="_assets_/images/logo.png" alt="navigation logo"></a>
			</div><!--/.col-md-3-->
			<nav class="col-md-6">
				<ul id="nav">
					<li><a href="./">Home</a></li>
					<li><a href="./">Departments</a>
						<ul>
							<li><span>First-level link</span></li>
							<li><a href="./">First-level link</a>
								<ul>
									<li><a href="/">Second-level link</a></li>
									<li><a href="/">Second-level link</a></li>
									<li><span>Second-level link</span></li>
									<li><a href="/">Second-level link</a></li>
									<li><a href="/">Second-level link</a></li>
								</ul>
							</li>
							<li><a href="./">First-level link</a></li>
							<li><a href="./">First-level link</a></li>
							<li><a href="./">First-level link</a></li>
						</ul>
					</li>
					<li><a href="./">About</a></li>
					<li><span>Information</span></li>
				</ul>
			</nav><!--/.col-md-6-->
			<div class="col-md-3">
				<div id="search">
					<form class="search-form" method="GET" action="search.php" role="search" aria-label="sitewide">
						<label class="fa fa-search" for="search-input"><span class="sr-only">Search</span></label>
						<input name="q" class="form-control search-input" placeholder="Enter search terms..." type="search" id="search-input">
						<button>Go</button>
					</form>
				</div><!-- /#search -->
				<div id="weather" class="weather"></div>
				<div id="social-media-links">
					<a href="./" class="social-media-link fa fa-facebook"><span class="sr-only">Facebook link</span></a>
					<a href="./" class="social-media-link fa fa-instagram"><span class="sr-only">Instagram link</span></a>
					<a href="./" class="social-media-link fa fa-twitter"><span class="sr-only">Twitter link</span></a>
				</div><!--/#social-media-links-->
				<div id="font-resizer">
					Resize text
					<button type="button" id="decrease-font" class="fa fa-minus"><span class="sr-only">Decrease font size</span></button>
					<button type="button" id="increase-font"  class="fa fa-plus"><span class="sr-only">Increase font size</span></button>
				</div><!--/#font-resizer-->
				<div id="google-translate" class="d-none">
					<script>
						function googleTranslateElementInit() {
							new google.translate.TranslateElement({pagelanguage: 'en',
								layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
								'google-translate');
						}
					</script>
				</div><!--/#google-translate-->
				<ul id="translation-links">
					<li><button type="button" id="translate-button" aria-label="translate website" aria-haspopup="true" aria-expanded="false">Translate <i class="fa fa-angle-down"></i></button>
						<ul class="clearfix" aria-labelledby="translate-button">
							<li><a href="#" class="Afrikaans" data-lang="Afrikaans">Afrikaans</a></li>
							<li><a href="#" class="Albanian" data-lang="Albanian">Albanian</a></li>
							<li><a href="#" class="Arabic" data-lang="Arabic">Arabic</a></li>
							<li><a href="#" class="Armenian" data-lang="Armenian">Armenian</a></li>
							<li><a href="#" class="Azerbaijani" data-lang="Azerbaijani">Azerbaijani</a></li>
							<li><a href="#" class="Basque" data-lang="Basque">Basque</a></li>
							<li><a href="#" class="Belarusian" data-lang="Belarusian">Belarusian</a></li>
							<li><a href="#" class="Bengali" data-lang="Bengali">Bengali</a></li>
							<li><a href="#" class="Bosnian" data-lang="Bosnian">Bosnian</a></li>
							<li><a href="#" class="Bulgarian" data-lang="Bulgarian">Bulgarian</a></li>
							<li><a href="#" class="Catalan" data-lang="Catalan">Catalan</a></li>
							<li><a href="#" class="Cebuano" data-lang="Cebuano">Cebuano</a></li>
							<li><a href="#" class="Chinese" data-lang="Chinese (Simplified)">Chinese (Simplified)</a></li>
							<li><a href="#" class="Chinese" data-lang="Chinese (Traditional)">Chinese (Traditional)</a></li>
							<li><a href="#" class="Croatian" data-lang="Croatian">Croatian</a></li>
							<li><a href="#" class="Czech" data-lang="Czech">Czech</a></li>
							<li><a href="#" class="Danish" data-lang="Danish">Danish</a></li>
							<li><a href="#" class="Dutch" data-lang="Dutch">Dutch</a></li>
							<li><a href="#" class="English" data-lang="English">English</a></li>
							<li><a href="#" class="Esperanto" data-lang="Esperanto">Esperanto</a></li>
							<li><a href="#" class="Estonian" data-lang="Estonian">Estonian</a></li>
							<li><a href="#" class="Filipino" data-lang="Filipino">Filipino</a></li>
							<li><a href="#" class="Finnish" data-lang="Finnish">Finnish</a></li>
							<li><a href="#" class="French" data-lang="French">French</a></li>
							<li><a href="#" class="Galician" data-lang="Galician">Galician</a></li>
							<li><a href="#" class="Georgian" data-lang="Georgian">Georgian</a></li>
							<li><a href="#" class="German" data-lang="German">German</a></li>
							<li><a href="#" class="Greek" data-lang="Greek">Greek</a></li>
							<li><a href="#" class="Gujarati" data-lang="Gujarati">Gujarati</a></li>
							<li><a href="#" class="Haitian Creole" data-lang="Haitian Creole">Haitian Creole</a></li>
							<li><a href="#" class="Hausa" data-lang="Hausa">Hausa</a></li>
							<li><a href="#" class="Hebrew" data-lang="Hebrew">Hebrew</a></li>
							<li><a href="#" class="Hindi" data-lang="">Hindi</a></li>
							<li><a href="#" class="Hmong" data-lang="Hmong">Hmong</a></li>
							<li><a href="#" class="Hungarian" data-lang="Hungarian">Hungarian</a></li>
							<li><a href="#" class="Icelandic" data-lang="Icelandic">Icelandic</a></li>
							<li><a href="#" class="Igbo" data-lang="Igbo">Igbo</a></li>
							<li><a href="#" class="Indonesian" data-lang="Indonesian">Indonesian</a></li>
							<li><a href="#" class="Irish" data-lang="Irish">Irish</a></li>
							<li><a href="#" class="Italian" data-lang="Italian">Italian</a></li>
							<li><a href="#" class="Japanese" data-lang="Japanese">Japanese</a></li>
							<li><a href="#" class="Javanese" data-lang="Javanese">Javanese</a></li>
							<li><a href="#" class="Kannada" data-lang="Kannada">Kannada</a></li>
							<li><a href="#" class="Khmer" data-lang="Khmer">Khmer</a></li>
							<li><a href="#" class="Korean" data-lang="Korean">Korean</a></li>
							<li><a href="#" class="Lao" data-lang="Lao">Lao</a></li>
							<li><a href="#" class="Latin" data-lang="Latin">Latin</a></li>
							<li><a href="#" class="Latvian" data-lang="Latvian">Latvian</a></li>
							<li><a href="#" class="Lithuanian" data-lang="Lithuanian">Lithuanian</a></li>
							<li><a href="#" class="Macedonian" data-lang="Macedonian">Macedonian</a></li>
							<li><a href="#" class="Malay" data-lang="Malay">Malay</a></li>
							<li><a href="#" class="Maltese" data-lang="Maltese">Maltese</a></li>
							<li><a href="#" class="Maori" data-lang="Maori">Maori</a></li>
							<li><a href="#" class="Marathi" data-lang="Marathi">Marathi</a></li>
							<li><a href="#" class="Mongolian" data-lang="Mongolian">Mongolian</a></li>
							<li><a href="#" class="Nepali" data-lang="Nepali">Nepali</a></li>
							<li><a href="#" class="Norwegian" data-lang="Norwegian">Norwegian</a></li>
							<li><a href="#" class="Persian" data-lang="Persian">Persian</a></li>
							<li><a href="#" class="Polish" data-lang="Polish">Polish</a></li>
							<li><a href="#" class="Portuguese" data-lang="Portuguese">Portuguese</a></li>
							<li><a href="#" class="Punjabi" data-lang="Punjabi">Punjabi</a></li>
							<li><a href="#" class="Romanian" data-lang="Romanian">Romanian</a></li>
							<li><a href="#" class="Russian" data-lang="Russian">Russian</a></li>
							<li><a href="#" class="Serbian" data-lang="Serbian">Serbian</a></li>
							<li><a href="#" class="Slovak" data-lang="Slovak">Slovak</a></li>
							<li><a href="#" class="Slovenian" data-lang="Slovenian">Slovenian</a></li>
							<li><a href="#" class="Somali" data-lang="Somali">Somali</a></li>
							<li><a href="#" class="Spanish" data-lang="Spanish">Spanish</a></li>
							<li><a href="#" class="Swahili" data-lang="Swahili">Swahili</a></li>
							<li><a href="#" class="Swedish" data-lang="Swedish">Swedish</a></li>
							<li><a href="#" class="Tamil" data-lang="Tamil">Tamil</a></li>
							<li><a href="#" class="Telugu" data-lang="Telugu">Telugu</a></li>
							<li><a href="#" class="Thai" data-lang="Thai">Thai</a></li>
							<li><a href="#" class="Turkish" data-lang="Turkish">Turkish</a></li>
							<li><a href="#" class="Ukrainian" data-lang="Ukrainian">Ukrainian</a></li>
							<li><a href="#" class="Urdu" data-lang="Urdu">Urdu</a></li>
							<li><a href="#" class="Vietnamese" data-lang="Vietnamese">Vietnamese</a></li>
							<li><a href="#" class="Welsh" data-lang="Welsh">Welsh</a></li>
							<li><a href="#" class="Yiddish" data-lang="Yiddish">Yiddish</a></li>
							<li><a href="#" class="Yoruba" data-lang="Yoruba">Yoruba</a></li>
							<li><a href="#" class="Zulu" data-lang="Zulu">Zulu</a></li>
						</ul>
					</li>
				</ul><!--/#translation-links-->
			</div><!--/.col-md-3-->
		</div><!--/.row-->
	</div><!--/.container-->
</header>
<section id="slider" class="tiny-slider-wrap">
	<ul class="tiny-slider">
		<li class='tiny-item'>
			<div class="tns-lazy-img tns-bg-slide" data-style="background:url('https://source.unsplash.com/collection/9562208/1920x1080') center no-repeat;background-size:cover"></div>
		</li>
		<li class='tiny-item'>
			<div class="tns-lazy-img tns-bg-slide" data-style="background:url('https://source.unsplash.com/collection/1673600/1920x1080') center no-repeat;background-size:cover"></div>
		</li>
		<li class='tiny-item'>
			<div class="tns-lazy-img tns-bg-slide" data-style="background:url('https://source.unsplash.com/collection/1513994/1920x1080') center no-repeat;background-size:cover"></div>
		</li>
	</ul><!--/.tiny-slider-->
	<h1 class="container text-center" id="slider-caption">Site caption</h1>
</section><!--/#slider-->
  
<main id="main">
	<div id="tiny-carousel">
		<!-- You should style carousels so that they load without stacking and disrupting the page as much as possible -->
		<ul class="tiny-carousel" data-tiny-items="4">
			<!-- Choose either all images or backgrounds: -->
			<!-- Example Using Images -->
			<li class="tiny-item"><a href="#"><img class="tns-lazy-img" data-src="https://source.unsplash.com/collection/9562208/1920x1080" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" role="presentation">Item 1</a></li>
			<!-- Example Using background styles -->
			<li class="tiny-item"><a href="#"><div class="tns-lazy-img" data-style="background:url('https://source.unsplash.com/collection/1673600/1920x1080') center no-repeat;background-size:cover" style="padding-bottom:52.4%;">Item 2</a></li>
			<li class="tiny-item"><a href="#"><img class="tns-lazy-img" data-src="https://source.unsplash.com/collection/1513994/1920x1080" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" role="presentation">Item 3</a></li>
			<li class="tiny-item"><a href="#"><img class="tns-lazy-img" data-src="https://source.unsplash.com/collection/1891993/1920x1080" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" role="presentation">Item 4</a></li>
			<li class="tiny-item"><a href="#"><img class="tns-lazy-img" data-src="https://source.unsplash.com/collection/548245/1920x1080" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" role="presentation">Item 5</a></li>
		</ul><!--/.tiny-carousel-->
	</div><!--/#tiny-carousel-->

	<div class="alert alert-dismissible floating-alert fade" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h2>Alert Title 30 characters Max</h2>
		<p>Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120</p>
		<p><a href="#" class="rz-btn">Read More</a></p>
	</div><!-- /.alert -->
	
	<div class="container">
		<div id="mini-events" data-template-file="template.html"></div>
	</div>

	<div class="container">
		<section class="row" aria-label="social media feeds">
			<div class="col-md-4">
				<div id="instagram-feed" class="fillLeft"></div>
			</div><!--/.col-md-4-->
			<div class="col-md-4">
				<div id="facebook-feed"></div>
			</div><!--/.col-md-4-->
			<div class="col-md-4">
				<div id="twitterfeed" class="fillRight withPadding"></div>
			</div><!--/.col-md-4-->
		</section><!--/.row-->
		<div class="row">
			<section class="col-md-6" aria-labelledby="newsletter-title">
				<h2 id="newsletter-title">City Newsletter</h2>
				<form class="signup submission" id="newsletter-signup"  action="optin.php" enctype="application/x-www-form-urlencoded" method="post">
					<input type="email" name="femail" placeholder="Enter your email address" aria-label="email address" required>
					<button class="btn rz-btn">Sign Up</button>
				</form><!--/.signup.submission#newsletter-signup-->
			</section><!--/.col-md-6-->
			<section class="col-md-6" aria-labelledby="notify-title">
				<h2 id="notify-title">Stay Updated</h2>
				<form action="enotify/index.php" id="enotify-signup" class="signup clearfix">
					<input type="email" name="email" placeholder="Enter your email address" aria-label="email address" required>
					<button class="btn btn-primary">Sign Up</button>
				</form><!--/.signup.clearfix#enotify-signup-->
			</section><!--/.col-md-6-->
		</div><!--/.row-->
	</div><!--/.container-->
	<!-- ENABLERS: update include statement with revize code -->
	<?php include "_includes_/share_widget.php"; ?>
</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				&copy; Sitename
			</div><!--/.col-md-6-->
			<div class="col-md-6" id="revize">
				Powered by <a href="https://www.revize.com" id="revize-link">revize.</a> Government Website Experts | <a href="./" id="revize-login">Login</a>
			</div><!--/.col-md-6#revize-->
		</div><!--/.row-->
	</div><!--/.container-->
</footer>

<script src="//development.revize.com/revize/plugins/revize_calendar/index.v2.js"></script>
<script src="_assets_/plugins/modernizr/modernizr.custom.js"></script>
<script src="_assets_/plugins/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="_assets_/plugins/matchHeight/dist/jquery.matchHeight-min.js"></script>
<script src="_assets_/plugins/revizeWeather/js/revizeWeather.min.js"></script>
<script src="_assets_/js/scripts.js"></script>

</body>
</html>
