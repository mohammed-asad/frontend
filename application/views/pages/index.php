<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Holidaymate</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/header.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap-datepicker3" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<!--[if IE 7]>
      <link rel="stylesheet" href="css/fontello-ie7.css">
      <![endif]-->
	<!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
</head>

<body>

	<section class="navigation">
		<div class="nav-items-holder">
			<a href="" class="nav-item">Travel private</a>
			<div class="nav-item">
				Destinations
				<div class="sub-menu">
					<div class="sub-menu-items-holder">
						<div class="sub-menu-item-list">
							<div class="sub-menu-item">
								<span data-region="europe">
									Europe
								</span>
							</div>

							<div class="sub-menu-item">
								<span data-region="asia">
									Asia
								</span>
							</div>

							<div class="sub-menu-item">
								<span>
									America
								</span>
							</div>
						</div>
					</div>
					<div class="sub-item-desc-holder">
						<div class="sub-item-desc" data-region="europe">
							<div class="sub-item-item overview">
								<h2>Overview</h2>
							</div>
							<div class="sub-item-item countries">
								<ul>
									<li>Switzerland</li>
									<li>France</li>
									<li>Italy</li>
									<li>Turkey</li>
								</ul>
							</div>
						</div>
						<div class="sub-item-desc" data-region="asia">
							<div class="sub-item-item overview">
								<h2>Overview</h2>
							</div>
							<div class="sub-item-item countries">
								<ul>
									<li>India</li>
									<li>Indonesia</li>
									<li>Bangladesh</li>
									<li>Pakistan</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="" class="nav-item">Private trip</a>
		</div>
	</section>

	<section class="banner">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ul class="carousel-indicators custom-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<!-- Left and right controls -->
				<a class="carousel-control-prev cst-carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next cst-carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</ul>
			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item banner-inner active ">
					<img class="img-fluid" src="assets/images/home/background.png" alt="Los Angeles">
				</div>
				<div class="carousel-item banner-inner">
					<img class="img-fluid" src="assets/images/home/background.png" alt="Chicago">
				</div>
				<div class="carousel-item banner-inner">
					<img class="img-fluid" src="assets/images/home/background.png" alt="New York">
				</div>
			</div>
			<div class="row  form-block sm-form-none">
				<div class="col-xl-4 offset-xl-8 col-lg-4 offset-lg-8 col-md-7 offset-md-5 col-sm-6 offset-sm-6">
					<!-- form card login -->
					<div class="card card-outline-secondary">
						<!-- <div class="card-header"> -->
						<!-- </div> -->
						<div class="card-body enqury-card">
							<h3 class="mb-10">Book unique places to stay and things to do.</h3>
							<form autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="uname1">where</label>
											<input class="form-control" id="uname1" name="where" required="" type="text">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 pr-0">
										<!-- <div class="form-group">
										<label>From</label>
										<span class="date-image1">
											<img src="<?php echo base_url(); ?>assets/images/home/calendar.svg" title="date" alt="date">
										</span>
										<input name="fromdate" class="form-control cst-pr" id="pwd1" required="" type="date">
									</div> -->
										<div class="form-group custom-formgroup1">
											<label class="control-label">From</label>
											<div class="icon-input">
												<i class="fa fa-calendar newfacalendar1"></i>
												<input id="datepicker1" data-provide="datepicker" type="text" class="form-control" placeholder="Select a date">
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 pl-0">
										<!-- <div class="form-group">
										<label for="to1">To</label>
										<span class="date-image2">
											<img src="<?php echo base_url(); ?>assets/images/home/calendar.svg" title="date" alt="date">
										</span>
										<input class="form-control cst-pl cstpl-wd" id="to1" name="todate" required="" type="date">
									</div> -->
										<div class="form-group custom-formgroup2">
											<label class="control-label">To</label>
											<div class="icon-input">
												<i class="fa fa-calendar newfacalendar2"></i>
												<input id="datepicker2" data-provide="datepicker" type="text" class="form-control" placeholder="Select a date">
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 pr-0">
										<div class="form-group">
											<label>Name</label>
											<input name="uname" class="form-control cst-pr text-left" required="" type="text">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 pl-0">
										<div class="form-group">
											<label for="to1">Email</label>
											<input class="form-control cst-pl cstpl-wd text-left pl-30" name="email" required="" type="email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="mobile">Mobile Number</label>
											<!-- <span class="country-code">+91</span> -->
											<input class="form-control country-code text-center" name="mobile" type="text" disable="disabled" readonly value="+91">
											<input class="form-control pl-65" name="mobile" required="" type="text">
										</div>
									</div>
									<div class="col-md-12 text-center">
										<button class="btn btn-submit btn-lg" type="button">Submit</button>
									</div>
							</form>
						</div>
						<!--/card-block-->
					</div>
					<!-- /form card login -->
				</div>
			</div>
		</div>
	</section>
	<section class="cst-sm-form-block mt-5">
		<div class="row  form-block">
			<div class="col-sm-10 offset-sm-1">
				<!-- form card login -->
				<div class="card card-outline-secondary">
					<!-- <div class="card-header"> -->
					<!-- </div> -->
					<div class="card-body enqury-card">
						<h3 class="mb-10">Book unique places to stay and things to do.</h3>
						<form autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="uname1">where</label>
										<input class="form-control" id="uname1" name="where" required="" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>From</label>
										<span class="date-image1">
											<img src="<?php echo base_url(); ?>assets/images/home/calendar.svg" title="date" alt="date">
										</span>
										<input name="fromdate" class="form-control cst-pr" id="pwd1" required="" type="date">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="to1">To</label>
										<span class="date-image2">
											<img src="<?php echo base_url(); ?>assets/images/home/calendar.svg" title="date" alt="date">
										</span>
										<input class="form-control cst-pl cstpl-wd" id="to1" name="todate" required="" type="date">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 pr-0">
									<div class="form-group">
										<label>Name</label>
										<input name="uname" class="form-control cst-pr text-left" required="" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 pl-0">
									<div class="form-group">
										<label for="to1">Email</label>
										<input class="form-control cst-pl cstpl-wd text-left pl-30" name="email" required="" type="email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="mobile">Mobile Number</label>
										<!-- <span class="country-code">+91</span> -->
										<input class="form-control country-code text-center" name="mobile" type="text" disable="disabled" readonly value="+91">
										<input class="form-control pl-65" name="mobile" required="" type="text">
									</div>
								</div>
								<div class="col-md-12 text-center">
									<button class="btn btn-submit btn-lg" type="button">Submit</button>
								</div>
						</form>
					</div>
					<!--/card-block-->
				</div>
				<!-- /form card login -->
			</div>
		</div>
	</section>
	<section class="section new-cardblock">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
					<h2 class="text-center head1">Upcoming Tours</h2>
					<div class="row">
						<!-- card start -->
						<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
							<div class="card mt-3 mb-3">
								<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/card/Image.png">
								<div class="card-block">
									<div class="text-right mt-3">
										<!-- <i class="fa fa-heart active" aria-hidden="true"></i> -->
									</div>
									<h4 class="card-title text-center">Dubai</h4>
									<!-- <div class="meta">
                                 <a>Friends</a>
                                 </div> -->
									<div class="card-text text-center">
										<!-- <p class="text-center"></p> -->
										<small class="text-center"> Tour to Stunning Dubai 2N/3D</small>
									</div>
								</div>
								<div class="card-footer">
									<p class="d-inline price-align">Price <span>Rs. 00,000</span></p>
									<button class="btn btn-lg small-btn-submit float-right">View Details</button>
								</div>
							</div>
						</div>
						<!-- card end -->
						<!-- card start -->
						<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
							<div class="card mt-3 mb-3">
								<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/card/Image.png">
								<div class="card-block">
									<div class="text-right mt-3">
										<!-- <i class="fa fa-heart active" aria-hidden="true"></i> -->
									</div>
									<h4 class="card-title text-center">Dubai</h4>
									<!-- <div class="meta">
                                 <a>Friends</a>
                                 </div> -->
									<div class="card-text text-center">
										<!-- <p class="text-center"></p> -->
										<small class="text-center"> Tour to Stunning Dubai 2N/3D</small>
									</div>
								</div>
								<div class="card-footer">
									<p class="d-inline price-align">Price <span>Rs. 00,000</span></p>
									<button class="btn btn-lg small-btn-submit float-right">View Details</button>
								</div>
							</div>
						</div>
						<!-- card end -->

						<!-- card start -->
						<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
							<div class="card mt-3 mb-3">
								<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/card/Image.png">
								<div class="card-block">
									<div class="text-right mt-3">
										<!-- <i class="fa fa-heart active" aria-hidden="true"></i> -->
									</div>
									<h4 class="card-title text-center">Dubai</h4>
									<!-- <div class="meta">
                                 <a>Friends</a>
                                 </div> -->
									<div class="card-text text-center">
										<!-- <p class="text-center"></p> -->
										<small class="text-center"> Tour to Stunning Dubai 2N/3D</small>
									</div>
								</div>
								<div class="card-footer">
									<p class="d-inline price-align">Price <span>Rs. 00,000</span></p>
									<button class="btn btn-lg small-btn-submit float-right">View Details</button>
								</div>
							</div>
						</div>
						<!-- card end -->

						<!-- card start -->
						<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
							<div class="card mt-3 mb-3">
								<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/card/Image.png">
								<div class="card-block">
									<div class="text-right mt-3">
										<!-- <i class="fa fa-heart active" aria-hidden="true"></i> -->
									</div>
									<h4 class="card-title text-center">Dubai</h4>
									<!-- <div class="meta">
                                 <a>Friends</a>
                                 </div> -->
									<div class="card-text text-center">
										<!-- <p class="text-center"></p> -->
										<small class="text-center"> Tour to Stunning Dubai 2N/3D</small>
									</div>
								</div>
								<div class="card-footer">
									<p class="d-inline price-align">Price <span>Rs. 00,000</span></p>
									<button class="btn btn-lg small-btn-submit float-right">View Details</button>
								</div>
							</div>
						</div>
						<!-- card end -->
					</div>
				</div>
			</div>

	</section>

	<!-- Section: Testimonials v.2 -->
	<section class="text-center my-5">
		<div class="contianer">
			<!-- Section heading -->
			<h2 class="h1-responsive font-weight-bold my-5 text-center head1">Introducing Travel Private</h2>

			<div class="wrapper-carousel-fix text-white">
				<!-- Carousel Wrapper carousel-fade-->
				<div id="carousel-example-1" class="carousel no-flex testimonial-carousel" data-ride="carousel" data-interval="false">
					<!--Slides-->
					<div class="carousel-inner" role="listbox">
						<!--First slide-->
						<div class="carousel-item cstitem1 active">
							<!-- <div class="testimonial text-white"> -->

							<!--Content-->
							<!-- <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
								<h3 class="text-white">Travel Private</h3>
								<p>
									holiday<strong>mate</strong> motto when it comes to Travel Private means</p>
								<h4 class="font-weight-bold">Gathering with Family</h4> -->
							<!-- <h6 class="font-weight-bold my-3">Founder at ET Company</h6> -->
							<!--Review-->
							<!-- </div> -->
							<!-- </div> -->
							<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
								<div class="jumbotron custom-jumbotron">
									<h3 class="text-white">Travel Private</h3>
									<p>Bootstrap is the most popular HTML, CSS...</p>
								</div>
							</div>
						</div>
						<!--First slide-->
						<!--Second slide-->
						<div class="carousel-item cstitem2">
							<div class="testimonial">

								<!--Content-->
								<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
									<h3 class="text-white">Travel Private</h3>
									<p>
										<i class="fas fa-quote-left"></i>holiday<strong>mate</strong> motto when it comes to Travel Private means</p>
									<h4 class="font-weight-bold">Retreats With Colleagues</h4>
									<!-- <h6 class="font-weight-bold my-3">Founder at ET Company</h6> -->
									<!--Review-->
								</div>

							</div>
						</div>
						<!--Second slide-->
						<!--Third slide-->
						<div class="carousel-item cstitem3">
							<div class="testimonial">

								<!--Content-->
								<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
									<h3 class="text-white">Travel Private</h3>
									<p>
										<i class="fas fa-quote-left"></i>holiday<strong>mate</strong> motto when it comes to Travel Private means</p>
									<h4 class="font-weight-bold">Gathering with Family</h4>
									<!-- <h6 class="font-weight-bold my-3">Founder at ET Company</h6> -->
									<!--Review-->
								</div>
							</div>
						</div>
						<!--Third slide-->
					</div>
					<!--Slides-->
					<!--Controls-->
					<ul class="carousel-indicators custom-indicators text-left d-inline-flex">

						<li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-1" data-slide-to="1"></li>
						<li data-target="#carousel-example-1" data-slide-to="2"></li>

						<a class="carousel-control-prev left carousel-control cst-carousel-control-prev1" href="#carousel-example-1" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next right carousel-control cst-carousel-control-next1" href="#carousel-example-1" role="button" data-slide="next">
							<span class="carousel-control-next-icon"></span>
							<span class="sr-only">Next</span>
						</a>
						<!--Controls-->
					</ul>
				</div>
				<!-- Carousel Wrapper -->
			</div>
		</div>
	</section>

	<!-- Jquery for Navigation Menu -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script>
		$('.sub-menu-item').on('mouseover', function(e) {
			var target = $(e.target).attr("data-region");
			$('.sub-item-desc-holder').find('.sub-item-desc').css("display", "none");
			$('.sub-item-desc-holder').find('[data-region="' + target + '"]').css("display", "flex");
		})
	</script>

	<!-- Jquery for Navigation Menu -->