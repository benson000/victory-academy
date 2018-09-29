<!DOCTYPE html>
<html>
	<head>
		<title>Victory Academy</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="animate.css">
		<script src="parallax.js-1.5.0/parallax.js"></script>

		<style type="text/css">
			.forum:hover { background-color: #380606; }
		</style>
	</head>

	<body>
		<!-- NAVIGATION BAR -->
		<div>
			<nav class="navbar navbar-expand-md navbar-dark bg-primary" style="background-color: blue;">
				<div class="container">
					<a class="navbar-brand navbar-animation-logo" href="#"><img src="img/logo.png" width="80" height=80"></a>
					<h2 style="color: white;">Victory Academy</h2>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				    </button>

					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul id="navMenu" class="navbar-nav ml-auto">
							<li class="nav-item navbar-animation">
								<a class="nav-link" href="http://library.victoryacademy.ac.id/" style="color: white;">E-Library<span class="sr-only"></span></a>
							</li>

							<li class="nav-item navbar-animation">
								<a class="nav-link" href="http://student.victoryacademy.ac.id/" style="color: white;">Student</a>
							</li>

							<li class="nav-item navbar-animation">
								<a class="nav-link" href="http://staff.victoryacademy.ac.id/" style="color: white;">Staff</a>
							</li>

							<li class="nav-item navbar-animation">
								<a class="nav-link" href="#" style="color: white;">About</a>
							</li>

							<!-- Modal trigger -->
							<!-- <li id="hamburger-li" class="nav-item">
								<a id="triggerModal" href="#fullScreenModal" data-toggle="modal">
									<i class="fa fa-bars" style="font-size: 1.5em; margin: 8px; color: white;">
										<span></span>
									</i>
								</a>
							</li> -->
							<!-- Modal trigger -->
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- NAVIGATION BAR -->

		<!-- NAVIGATION RIBBON -->
		<div style="background-color: #1855bf;">
			<div class="container">
				<nav class="nav nav-pills">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" href="#" style="color: white;">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" style="color: white;">Profile</a>
						</li>

						<li id="menuDropDown" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Admission</a>

							<div class="dropdown-menu bg-primary">
								<a class="dropdown-item" href="#">Elementary School</a>
								<a class="dropdown-item" href="#">Junior High School School</a>
								<a class="dropdown-item" href="#">High School</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" style="color: white;">Academic</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" style="color: white;">News & Updates</a>
						</li>

						<li class="nav-item">
							<a class="nav-link disabled" href="#" style="color: white;">Contact Us</a>
						</li>
					</ul>

					<ul class="nav ml-auto">
						<li class="nav-item">
							<a href="#pablo" class="nav-link" style="color: white;">
							  <i class="fab fa-facebook-square rounded-circle"></i>
							<div class="ripple-container"></div></a>
						</li>

						<li class="nav-item">
							<a href="#pablo" class="nav-link" style="color: white;">
							  <i class="fab fa-twitter"></i>
							</a>
						</li>

						<li class="nav-item">
							<a href="#pablo" class="nav-link" style="color: white;">
							  <i class="fab fa-instagram"></i>
							</a>
						</li>
	                </ul>
				</nav>
			</div>
		</div>
		<!-- NAVIGATION RIBBON -->

		<!-- SLIDER IMAGES -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/slider/slider1.jpg" alt="First slide" width="500" height="700">

					<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="fas fa-map-marker-alt"></i> Victory Academy
						</h4>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider/slider2.jpg" alt="Second slide" width="500" height="700"">

					<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="fas fa-map-marker-alt"></i> Victory Academy
						</h4>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider/slider3.jpg" alt="Third slide" width="500" height="700">

					<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="fas fa-map-marker-alt"></i> Victory Academy
						</h4>
					</div>
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<!-- <i class="fas fa-arrow-circle-left" style="font-size: 80px;"></i> -->
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<!-- <i class="fas fa-arrow-circle-right" style="font-size: 80px;"></i> -->
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- SLIDER IMAGES -->

		<!-- Short Announcement -->
		<div class="row">
			<div class="col" style="margin: 30px;">
				<div class="row">
					<div class="col">
						<img src="img/logo.png" alt="Avatar" border="5" style="border-radius: 50%; width: 120px; height: 120px;">
					</div>

					<div class="col" style="margin-left: -90px;">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>

			<div class="col" style="margin: 30px;">
				<div class="row">
					<div class="col">
						<img src="img/logo.png" alt="Avatar" border="5" style="border-radius: 50%; width: 120px; height: 120px;">
					</div>

					<div class="col" style="margin-left: -90px;">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>

			<div class="col" style="margin: 30px;">
				<div class="row">
					<div class="col">
						<img src="img/logo.png" alt="Avatar" border="5" style="border-radius: 50%; width: 120px; height: 120px;">
					</div>

					<div class="col" style="margin-left: -90px;">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Short Announcement -->

		<!-- SLIDER IMAGES -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/slider/slider4.jpg" alt="First slide" width="500" height="700">

					<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="fas fa-map-marker-alt"></i> Victory Academy
						</h4>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider/slider5.jpg" alt="Second slide" width="500" height="700"">

					<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="fas fa-map-marker-alt"></i> Victory Academy
						</h4>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider/slider6.jpg" alt="Third slide" width="500" height="700">

					<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="fas fa-map-marker-alt"></i> Victory Academy
						</h4>
					</div>
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<!-- <i class="fas fa-arrow-circle-left" style="font-size: 80px;"></i> -->
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<!-- <i class="fas fa-arrow-circle-right" style="font-size: 80px;"></i> -->
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- SLIDER IMAGES -->
	</body>

	<footer>
		<script type="text/javascript">
			import Vue from 'vue';
			import VueCarousel from 'vue-carousel';

			Vue.use(VueCarousel);
		</script>
	</footer>
</html>