<section class="navigation">
	<div class="blur-backdrop"></div>
	<a href="#" class="logo">
		<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/logo/gray-logo.svg" alt="">
		</div>
		<div class="nav-items-holder">
			<a href="" class="nav-item">
				<span>
					Travel private
				</span>
			</a>
			<div class="nav-item" data-bluritem="true">
				<span>Destinations</span>
				<div class="sub-menu">
					<!-- Sub Menu Start-->
					<div class="sub-menu-items-holder">
						<!-- Sub Menu Region Start-->
						<div class="sub-menu-item-list">
							<div class="sub-menu-item active">
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
								<span data-region="america">
									America
								</span>
							</div>

						</div>
						<!-- Sub Menu Region Ends-->

						<!-- Sub Menu Detauls Start-->
						<div class="sub-item-desc-holder">
							<div class="sub-item-desc" data-region="europe">
								<div class="sub-item-item overview">
									<h4>Overview</h4>
									<p>Europe is a continent located entirely in the Northern Hemisphere and mostly in the Eastern Hemisphere.
										It is bordered by the Arctic Ocean to the north,
										the Atlantic Ocean to the west, Asia to the east, and the Mediterranean Sea to the south.
										It comprises the westernmost part of Eurasia.
									</p>
								</div>
								<div class="sub-item-item countries">
									<h4>Destinations</h4>
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
									<h4 class="mb-2">Overview</h4>
									<p>Europe is a continent located entirely in the Northern Hemisphere and mostly in the Eastern Hemisphere.
										It is bordered by the Arctic Ocean to the north,
										the Atlantic Ocean to the west, Asia to the east, and the Mediterranean Sea to the south.
										It comprises the westernmost part of Eurasia.</p>
								</div>
								<div class="sub-item-item countries">
									<h4 class="mb-2">Destinations</h4>
									<ul>
										<li>India</li>
										<li>Indonesia</li>
										<li>Bangladesh</li>
										<li>Pakistan</li>
									</ul>
								</div>
							</div>

						</div>
						<!-- Sub Menu Detauls End-->
					</div>
					<!-- Sub Menu End-->
				</div>
			</div>
			<a href="" class="nav-item">
				<span>
					Private trip
				</span>
			</a>
		</div>
</section>

<!-- Blur content Starts -->
<div class="other-container">
	<!-- Slidee Banner -->
	<section class="banner mall-24">
		<div class="header-banner">
			<img src="<?php echo base_url(); ?>assets/images/home/background.png" alt="">
			<img src="<?php echo base_url(); ?>assets/images/home/background.png" alt="">
		</div>

		<!-- Form -->
		<!-- <div class="mt-5 enquiry-form"> -->
		<div class="row form-block enquiry-form">
			<div class="col-md-6 offset-md-6 custom-md-6 col-sm-10 offset-sm-1">
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
									<div class="form-group custom-formgroup1">
										<label class="control-label">From</label>
										<div class="icon-input">
											<i class="fa fa-calendar newfacalendar1"></i>
											<input id="datepicker1" data-provide="datepicker" type="text" class="form-control" placeholder="Select a date">
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 pl-0">
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
		<!-- </div> -->
	</section>

	<section class="section new-cardblock">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
					<h2 class="text-center head1">Upcoming Tours</h2>
					<div class="row">
						<!-- card start -->
						<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
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
						<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
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
						<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
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
						<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
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
	<section class="text-center section">
		<div class="contianer">
			<!-- Section heading -->
			<h2 class="h1-responsive font-weight-bold text-center head1">Introducing Travel Private</h2>

			<div class="wrapper-carousel-fix text-white mall-24">
				<!-- Carousel Wrapper carousel-fade-->
				<div id="carousel-example-1" class="carousel no-flex testimonial-carousel" data-ride="carousel" data-interval="false">
					<!--Slides-->
					<div class="carousel-inner" role="listbox">
						<!--First slide-->
						<div class="carousel-item cstitem1 active">
							<!-- <div class="testimonial text-white"> -->

							<!--Content-->
							<div class="jumbotron custom-jumbotronhome">
								<div class="col-sm-12 col-md-12 col-lg-4">
									<h1 class="text-white">Travel</h1>
									<h1 class="text-white">Private</h1>
									<p>holiday<span>mate</span> motto when it comes to</p>
									<h4>Gathering with Family</h4>
								</div>
							</div>
						</div>
						<!--First slide-->
						<!--Second slide-->
						<div class="carousel-item cstitem2">
							<div class="jumbotron custom-jumbotronhome">
								<div class="col-sm-12 col-md-12 col-lg-4">
									<!--Content-->
									<h1 class="text-white">Travel</h1>
									<h1 class="text-white">Private</h1>
									<p>holiday<span>mate</span> motto when it comes to</p>
									<h4>Celebration with Friends</h4>
								</div>
							</div>
						</div>
						<!--Second slide-->
						<!--Third slide-->
						<div class="carousel-item cstitem3">
							<div class="jumbotron custom-jumbotronhome">
								<!--Content-->
								<div class="col-sm-12 col-md-12 col-lg-4">
									<h1 class="text-white">Travel</h1>
									<h1 class="text-white">Private</h1>
									<p>holiday<span>mate</span> motto when it comes to</p>
									<h4>Retreats With Colleagues</h4>
								</div>
							</div>
						</div>
						<!--Third slide-->
						<div class="csthome-indict">
							<div class="col-sm-12 col-md-12 col-lg-4">
								<!--Controls-->
								<a class="carousel-control-prev left carousel-control cst-carousel-control-prev2" href="#carousel-example-1" role="button" data-slide="prev">
									<span class=""></span>
								</a>
								<ul class="carousel-indicators custom-indicators1 text-left d-inline-flex">

									<li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-1" data-slide-to="1"></li>
									<li data-target="#carousel-example-1" data-slide-to="2"></li>
									<!--Controls-->
								</ul>
								<a class="carousel-control-next right carousel-control cst-carousel-control-next2" href="#carousel-example-1" role="button" data-slide="next">
									<span class=""></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!--Slides-->

				<!-- Carousel Wrapper -->
			</div>
		</div>
	</section>
</div>
<!-- Blur content Starts -->

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- Jquery for Navigation Menu -->
<script>
	$('.sub-menu-item').on('mouseover', function(e) {
		var target = $(e.target).attr("data-region");
		$('.sub-item-desc-holder').find('.sub-item-desc').css("display", "none");
		$('.sub-item-desc-holder').find('[data-region="' + target + '"]').css("display", "flex");
	})
</script>
<script>
	$('#carousel-example-1').carousel({
		interval: 3000,
		cycle: true
	});
</script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/home.js"></script>
<script>
	$('.header-banner').slick({
		autoplay: true,
		arrows: true,
		autoplaySpeed: 2000,
		dots: true,
		adaptiveHeight: true
	});
</script>