<!-- //Load the navigation menu -->
<?php $data['home'] = "home"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>

<!-- Blur content Starts -->
<div class="other-container">
	<!-- Slidee Banner -->
	<section class="banner mall-24">
		<div class="header-banner">

		</div>

		<!-- Form -->
		<!-- <div class="mt-5 enquiry-form"> -->
		<div class="row form-block enquiry-form">
			<!--	<div class="col-xl-6 offset-xl-6 col-lg-8 offset-lg-4 col-md-8 offset-md-2 custom-md-6 col-sm-10 offset-sm-1">
				 form card login -->
			<div class="card card-outline-secondary">
				<!-- <div class="card-header"> -->
				<!-- </div> -->
				<div class="card-body enqury-card">
					<h3 class="mb-10">Book unique places to stay and things to do.</h3>
					<form autocomplete="off" class="form createmail" id="formLogin" name="createmail" role="form">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="uname1">where</label>
									<input class="form-control from_where" id="uname1" name="from_where" required="" type="text">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 pr-0">
								<div class="form-group custom-formgroup1">
									<label class="control-label">From</label>
									<div class="icon-input">
										<i class="fa fa-calendar newfacalendar1"></i>
										<input id="datepicker1" name="date_from" data-provide="datepicker" data-date-format="dd/mm/yyyy" type="text" class="form-control date_from" placeholder="Select a date">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 pl-0">
								<div class="form-group custom-formgroup2">
									<label class="control-label custom-to">To</label>
									<div class="icon-input">
										<i class="fa fa-calendar newfacalendar2"></i>
										<input id="datepicker2" name="date_to" data-provide="datepicker" data-date-format="dd/mm/yyyy" type="text" class="form-control date_to" placeholder="Select a date">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 pr-0">
								<div class="form-group">
									<label>Name</label>
									<input name="c_name" class="form-control cst-pr text-left c_name" required="" type="text">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 pl-0">
								<div class="form-group">
									<label for="to1" class="ml-3">Email</label>
									<input class="form-control cst-pl cstpl-wd text-left pl-30 c_email" name="c_email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="mobile">Mobile Number</label>
									<span class="form-control country-code text-center">+91</span>
									<input class="form-control pl-90 c_mobile" name="c_mobile" required="" type="text">
								</div>
							</div>
							<div class="col-md-12 text-center">
								<!-- <button class="btn btn-submit btn-lg" type="button">Submit</button> -->
								<input type="submit" name="btncreatemail" class="btn btn-submit btn-lg btncreatemail" value="submit" />
							</div>
					</form>
				</div>
				<!--/card-block-->
				<!--</div>
				 /form card login -->
			</div>
		</div>
		<!-- </div> -->
	</section>

	<section class="section ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 m-auto p-xl-0">
					<h2 class="text-center head1">Upcoming Tours</h2>
					<div class="row new-cardblock packages"></div>
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
<input type="hidden" id="base" value="<?php echo base_url(); ?>">
<!-- Blur content Starts -->

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
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
	// $('#carousel-example-1').carousel({
	// 	interval: 3000,
	// 	cycle: true
	// });
</script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

<script src="<?php echo base_url(); ?>assets/js/frontend/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/home.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/home-slider.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/package.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/mail.js"></script>
<script>
	package.getPackage();
</script>