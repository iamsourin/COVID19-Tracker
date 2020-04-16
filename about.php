<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="An initiative to track the spread of Coronavirus (COVID-19) in India and around the World">
	<meta name="keywords" content="coronavirus, corona, covid, covid19, covid-19, covidindia, india, virus, pandemic, world">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>COVID-19 Tracker | About</title>
	<meta name="google-site-verification" content="N1XsczeRRR31ELsrQZW2Za6pxjF6VeJ7Qp3DasddAqI" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Roboto', sans-serif;
		}
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163584552-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-163584552-1');
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-54JNJRK');
	</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54JNJRK" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="http://covid19tracking.gq">COVID-19 Tracker</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="http://covid19tracking.gq">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="covid-india">COVID-19 India</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="about">About <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md-6">
				<img src="images/corona.jpg" class="img-fluid mb-2" alt="">
			</div>
			<div class="col-md-6">
				<h3>What is COVID-19?</h3>
				<p class="text-muted">Coronavirus disease 2019 (COVID-19) is defined as illness caused by a novel coronavirus now called severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2; formerly called 2019-nCoV), which was first identified amid an outbreak of respiratory illness cases in Wuhan City, Hubei Province, China. It was initially reported to the WHO on December 31, 2019. On January 30, 2020, the WHO declared the COVID-19 outbreak a global health emergency. On March 11, 2020, the WHO declared COVID-19 a global pandemic, its first such designation since declaring H1N1 influenza a pandemic in 2009.</p>
			</div>
		</div>
	</div>

	<div class="container my-5" style="background-color: #fff1b0;">
		<div class="row">
			<div class="col-md-6">
				<img src="images/symptoms.png" class="img-fluid my-3" alt="">
			</div>
			<div class="col-md-6">
				<h5 class="text-uppercase text-center font-weight-bold mt-4 mb-3" style="color: #fa7c01">How It Spreads</h5>
				<img src="images/block-one.png" class="img-fluid" alt="">
				<h5 class="text-uppercase text-center font-weight-bold mt-4 mb-3" style="color: #5e8e12">Prevention</h5>
				<img src="images/block-two.png" class="img-fluid mb-5" alt="">
			</div>
		</div>
	</div>

	<footer class="py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; <?= date('Y'); ?> Covid19Tracking. All Rights Reserved. Made With <i class="fas fa-heart text-danger"></i> By <a href="https://github.com/iamsourin" target="_blank">Sourin Das</a>.</p>
		</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>