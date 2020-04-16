<?php
    // Retrieving Json Data
    $url = file_get_contents('https://pomber.github.io/covid19/timeseries.json');
    $data = json_decode($url, true);

    // Counting the number of days in the Json File
    foreach($data as $key => $value) {
        $days_count = count($value) - 1;
        $days_count_prev = $days_count - 1;
    }

    $total_confirmed = 0;
    $total_recovered = 0;
    $total_deaths = 0;

    // Total Cases Calculation
    foreach($data as $key => $value) {
        $total_confirmed = $total_confirmed + $value[$days_count]['confirmed'];
        $total_recovered = $total_recovered + $value[$days_count]['recovered'];
        $total_deaths = $total_deaths + $value[$days_count]['deaths'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="An initiative to track the spread of Coronavirus (COVID-19) in India and around the World">
	<meta name="keywords" content="coronavirus, corona, covid, covid19, covid-19, covidindia, india, virus, pandemic, world">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>COVID-19 Tracker</title>
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
		#scrollUp {
			background-image: url('images/top.png');
			bottom: 20px;
			right: 20px;
			width: 38px;
			height: 38px;
			text-indent: -999999px;
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
				<li class="nav-item active">
					<a class="nav-link" href="http://covid19tracking.gq">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="covid-india">COVID-19 India</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about">About</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="jumbotron text-center">
		<h1 class="display-4">COVID-19 World Tracker</h1>
		<p class="lead text-muted">An open-source project to keep track of all the COVID-19 cases around the world.</p>
		<hr class="my-4">
		<a class="btn btn-primary btn-lg" href="covid-india" role="button">View COVID-19 India Data</a>
	</div>

	<div class="container mb-4">
		<h5 class="text-center text-muted">COVID-19 Live Updates Worldwide</h5><hr>
		<div class="row text-center">
			<div class="col-lg-4 mb-2 text-warning">
				<h4>Confirmed</h4>
				<h5><?= number_format($total_confirmed) ?></h5>
			</div>
			<div class="col-lg-4 mb-2 text-success">
				<h4>Recovered</h4>
				<h5><?= number_format($total_recovered) ?></h5>
			</div>
			<div class="col-lg-4 mb-2 text-danger">
				<h4>Deceased</h4>
				<h5><?= number_format($total_deaths) ?></h5>
			</div>
		</div>
	</div>

	<div class="jumbotron text-center">
		<h4 class="text-info">"Prevention is Better than Cure".</h4>
		<h5 class="text-muted">#StayHomeStaySafe</h5>
		<h5 class="text-muted">#LetsFightTogether</h5>
	</div>

	<div class="container mb-4">
		<h5 class="text-center text-primary">COVID-19 Live Updates Countrywise</h5>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-sm text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Country</th>
						<th scope="col">Confirmed</th>
						<th scope="col">Recovered</th>
						<th scope="col">Deceased</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($data as $key => $value) {
							$increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
					?>
					<tr>
						<th scope="row"><?= $key ?></th>
						<td>
                            <?php if ($increase != 0) { ?>
                               	<small class="text-danger ml-1"><i class="fas fa-arrow-up"></i><?= $increase ?></small>  
                            <?php } ?>
                            <?= $value[$days_count]['confirmed'] ?> 
                        </td>
						<td><?= $value[$days_count]['recovered'] ?></td>
						<td><?= $value[$days_count]['deaths'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<footer class="py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; <?= date('Y'); ?> Covid19Tracking. All Rights Reserved. Made With <i class="fas fa-heart text-danger"></i> By <a href="https://github.com/iamsourin" target="_blank">Sourin Das</a>.</p>
		</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
	<script>
		$(document).ready(function () {
			// DataTable Plugin
			$('table').DataTable({
				paging: false,
				info: false
			});

			// ScrollUp Plugin
			$(function(){
  				$.scrollUp();
			});
		});
	</script>
</body>
</html>