<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="An initiative to track the spread of Coronavirus (COVID-19) in India and around the World">
	<meta name="keywords" content="coronavirus, corona, covid, covid19, covid-19, covidindia, india, virus, pandemic, world">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>COVID-19 Tracker | India</title>
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
				<li class="nav-item">
					<a class="nav-link" href="http://covid19tracking.gq">Home</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="covid-india">COVID-19 India <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about">About</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="jumbotron text-center">
		<h1 class="display-4">COVID-19 India Tracker</h1>
		<p class="lead text-muted">An open-source project to keep track of all the COVID-19 cases around the country.</p>
		<hr class="my-4">
		<a class="btn btn-primary btn-lg" href="http://covid19tracking.gq" role="button">View COVID-19 World Data</a>
	</div>

	<div class="container mb-4">
		<h5 class="text-center text-muted">COVID-19 Live Updates Across India</h5><hr>
		<div class="row text-center">
			<?php
				$url = file_get_contents('https://api.covid19india.org/data.json');
				$data = json_decode($url, true);
				$states = count($data['statewise']);
				$i = 0;
			?>
			<div class="col-lg-3 col-sm-6 text-warning">
				<h4>Confirmed</h4>
				<h6>+<?= $data['statewise'][$i]['deltaconfirmed'] ?></h6>
				<h5><?= number_format($data['statewise'][$i]['confirmed']) ?></h5>
			</div>
			<div class="col-lg-3 col-sm-6 text-primary">
				<h4>Active</h4><br>
				<h5><?= number_format($data['statewise'][$i]['active']) ?></h5>
			</div>
			<div class="col-lg-3 col-sm-6 text-success">
				<h4>Recovered</h4>
				<h6>+<?= $data['statewise'][$i]['deltarecovered'] ?></h6>
				<h5><?= number_format($data['statewise'][$i]['recovered']) ?></h5>
			</div>
			<div class="col-lg-3 col-sm-6 text-danger">
				<h4>Deceased</h4>
				<h6>+<?= $data['statewise'][$i]['deltadeaths'] ?></h6>
				<h5><?= number_format($data['statewise'][$i]['deaths']) ?></h5>
			</div>
		</div>
	</div>

	<div class="jumbotron text-center">
		<h4 class="text-info">"Prevention is Better than Cure".</h4>
		<h5 class="text-muted">#StayHomeStaySafe</h5>
		<h5 class="text-muted">#IndiaFightsCorona</h5>
	</div>

	<div class="container mb-3">
		<h5 class="text-primary float-left">COVID-19 Live Updates Statewise</h5><br><br>
		<h6 class="text-muted float-left">Last Updated : <?= $data['statewise'][$i]['lastupdatedtime'] ?> IST</h6>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-sm text-center" id="dataTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">State / UT</th>
						<th scope="col">Confirmed</th>
						<th scope="col">Active</th>
						<th scope="col">Recovered</th>
						<th scope="col">Deceased</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						while ($i < $states) {
					?>
					<tr>
						<td><?= $data['statewise'][$i]['state'] ?></td>
						<td>
							<?php if ($data['statewise'][$i]['deltaconfirmed'] != 0) { ?>
								<small class="text-warning ml-1"><i class="fas fa-arrow-up"></i>
									<?= $data['statewise'][$i]['deltaconfirmed'] ?>
								</small>
							<?php } ?>
							<?= $data['statewise'][$i]['confirmed'] ?>
						</td>
						<td><?= $data['statewise'][$i]['active'] ?></td>
						<td>
							<?php if ($data['statewise'][$i]['deltarecovered'] != 0) { ?>
								<small class="text-success ml-1"><i class="fas fa-arrow-up"></i>
									<?= $data['statewise'][$i]['deltarecovered'] ?>
								</small>
							<?php } ?>
							<?= $data['statewise'][$i]['recovered'] ?>
						</td>
						<td>
							<?php if ($data['statewise'][$i]['deltadeaths'] != 0) { ?>
								<small class="text-danger ml-1"><i class="fas fa-arrow-up"></i>
									<?= $data['statewise'][$i]['deltadeaths'] ?>
								</small>
							<?php } ?>
							<?= $data['statewise'][$i]['deaths'] ?>
						</td>
					</tr>
					<?php
						$i++;
						}
					?>
				</tbody>

				<tr class="bg-dark text-white">
					<td>Total</td>
					<td>
						<?php if ($data['statewise'][0]['deltaconfirmed'] != 0) { ?>
							<small class="text-warning ml-1"><i class="fas fa-arrow-up"></i>
								<?= $data['statewise'][0]['deltaconfirmed'] ?>
							</small>
						<?php } ?>
						<?= number_format($data['statewise'][0]['confirmed']) ?>
					</td>
					<td><?= number_format($data['statewise'][0]['active']) ?></td>
					<td>
						<?php if ($data['statewise'][0]['deltarecovered'] != 0) { ?>
							<small class="text-success ml-1"><i class="fas fa-arrow-up"></i>
								<?= $data['statewise'][0]['deltarecovered'] ?>
							</small>
						<?php } ?>
						<?= number_format($data['statewise'][0]['recovered']) ?>
					</td>
					<td>
						<?php if ($data['statewise'][0]['deltadeaths'] != 0) { ?>
							<small class="text-danger ml-1"><i class="fas fa-arrow-up"></i>
								<?= $data['statewise'][0]['deltadeaths'] ?>
							</small>
						<?php } ?>
						<?= number_format($data['statewise'][0]['deaths']) ?>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="container">
		<h3 class="text-center text-info">COVID-19 Live Data Chart</h3>
	</div>

	<canvas id="myChart"></canvas>

	<div class="container">
		<p class="text-center text-info">*Click on the Confirmed / Recovered / Deceased buttons above to see the chart
		individually.*</p>
	</div>

	<div class="container mb-4">
		<h4 class="text-center">Central Helpline Number For Corona Virus : <span class="text-danger">+91-11-23978046</span></h4>
		<h5 class="text-center">Helpline Numbers of States & Union Territories (UTs)</h5>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-sm text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name of State</th>
						<th scope="col">Helpline No.</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Andhra Pradesh</td>
						<td>0866-2410978</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Arunachal Pradesh</td>
						<td>9436055743</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Assam</td>
						<td>6913347770</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Bihar</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Chhattisgarh</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">6</th>
						<td>Goa</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">7</th>
						<td>Gujarat</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">8</th>
						<td>Haryana</td>
						<td>8558893911</td>
					</tr>
					<tr>
						<th scope="row">9</th>
						<td>Himachal Pradesh</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">10</th>
						<td>Jharkhand</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>Karnataka</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">12</th>
						<td>Kerala</td>
						<td>0471-2552056</td>
					</tr>
					<tr>
						<th scope="row">13</th>
						<td>Madhya Pradesh</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">14</th>
						<td>Maharashtra</td>
						<td>020-26127394</td>
					</tr>
					<tr>
						<th scope="row">15</th>
						<td>Manipur</td>
						<td>3852411668</td>
					</tr>
					<tr>
						<th scope="row">16</th>
						<td>Meghalaya</td>
						<td>108</td>
					</tr>
					<tr>
						<th scope="row">17</th>
						<td>Mizoram</td>
						<td>102</td>
					</tr>
					<tr>
						<th scope="row">18</th>
						<td>Nagaland</td>
						<td>7005539653</td>
					</tr>
					<tr>
						<th scope="row">19</th>
						<td>Odisha</td>
						<td>9439994859</td>
					</tr>
					<tr>
						<th scope="row">20</th>
						<td>Punjab</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">21</th>
						<td>Rajasthan</td>
						<td>0141-2225624</td>
					</tr>
					<tr>
						<th scope="row">22</th>
						<td>Sikkim</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">23</th>
						<td>Tamil Nadu</td>
						<td>044-29510500</td>
					</tr>
					<tr>
						<th scope="row">24</th>
						<td>Telangana</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">25</th>
						<td>Tripura</td>
						<td>0381-2315879</td>
					</tr>
					<tr>
						<th scope="row">26</th>
						<td>Uttarakhand</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">27</th>
						<td>Uttar Pradesh</td>
						<td>18001805145</td>
					</tr>
					<tr>
						<th scope="row">28</th>
						<td>West Bengal</td>
						<td>1800313444222, 03323412600</td>
					</tr>

					<tr class="bg-dark text-white">
						<th scope="col">#</th>
						<th scope="col">Name of Union Territory (UT)</th>
						<th scope="col">Helpline No.</th>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td>Andaman and Nicobar Islands</td>
						<td>03192-232102</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Chandigarh</td>
						<td>9779558282</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Dadra and Nagar Haveli and Daman & Diu</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Delhi</td>
						<td>011-22307145</td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Jammu & Kashmir</td>
						<td>01912520982, 0194-2440283</td>
					</tr>
					<tr>
						<th scope="row">6</th>
						<td>Ladakh</td>
						<td>01982256462</td>
					</tr>
					<tr>
						<th scope="row">7</th>
						<td>Lakshadweep</td>
						<td>104</td>
					</tr>
					<tr>
						<th scope="row">8</th>
						<td>Puducherry</td>
						<td>104</td>
					</tr>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
	<script>
		$(document).ready(function () {
			// DataTable Plugin
			$('#dataTable').DataTable({
				paging: false,
				info: false
			});

			// ScrollUp Plugin
			$(function(){
  				$.scrollUp();
			});

			// Get JSON data from url
			$.getJSON("https://api.covid19india.org/data.json", function (data) {
				var states = [];
				var confirmed = [];
				var recovered = [];
				var deaths = [];

				var total_active;
				var total_confirmed;
				var total_recovered;
				var total_deaths;

				// Take the first element in statewise array and add the objects values into the above variables
				total_active = data.statewise[0].active;
				total_confirmed = data.statewise[0].confirmed;
				total_recovered = data.statewise[0].recovered;
				total_deaths = data.statewise[0].deaths;

				// The each loop select a single statewise array element
				// Take the data in that array and add it to variables
				$.each(data.statewise, function (id, obj) {
					states.push(obj.state);
					confirmed.push(obj.confirmed);
					recovered.push(obj.recovered);
					deaths.push(obj.deaths);
				});

				// Remove the first element in the states, confirmed, recovered, and deaths as that is the total value
				states.shift();
				confirmed.shift();
				recovered.shift();
				deaths.shift();

				// console.log(confirmed);
				$("#confirmed").append(total_confirmed);
				$("#active").append(total_active);
				$("#recovered").append(total_recovered);
				$("#deaths").append(total_deaths);

				// Chart initialization
				var myChart = document.getElementById("myChart").getContext("2d");
				var chart = new Chart(myChart, {
					type: "line",
					data: {
						labels: states,
						datasets: [
							{
								label: "Confirmed Cases",
								data: confirmed,
								backgroundColor: "#f1c40f",
								minBarLength: 100,
							},
							{
								label: "Recovered",
								data: recovered,
								backgroundColor: "#2ecc71",
								minBarLength: 100,
							},
							{
								label: "Deceased",
								data: deaths,
								backgroundColor: "#e74c3c",
								minBarLength: 100,
							},
						],
					},
					option: {},
				});
			});
		});
	</script>
</body>
</html>