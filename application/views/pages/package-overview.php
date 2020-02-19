<section class="packsection packoverview mb-5 mall-24">
  <!-- //Load the navigation menu -->
  <?php $data['home'] = "changenev"; ?>
  <?php $this->load->view('pages/sections/navigation', $data); ?>
  <div class="container-fluid">
    <div class="col-xl-11 offset-xl-1 col-lg-11 offset-lg-1 col-md-12 m-auto">
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-6 cst-padding-0">
          <div class="pack-block">
            <div class="pakage-bannerblock">

            </div>
            <p class="text-center mt-4 mb-4 long-description"></p>
            <!-- Take part in sunset & sunrise views of Dubai Red Dunes safari overnig -->
            <ul class="list-inline text-center aminiteisvalue">
              <li class="list-inline-item ">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/amenities/clock.svg">
                <p class="daynnight"></p>
              </li>
              <li class="list-inline-item ">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/amenities/location.svg">
                <p class="locationtxt"></p>
              </li>
            </ul>

          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 cst-padding-0">
          <div class="row  form-block position-relative cst-position">
            <!-- <div class="col-12"> -->
            <!-- form card login -->
            <div class="card card-outline-secondary">
              <!-- <div class="card-header"> -->
              <!-- </div> -->
              <div class="card-body enqury-card">
                <h3 class="mb-10 h3">Want to Go For <br />A Memorable Holiday</h3>
                <p class="labeltext">Provide Your Details to Know Best Holiday Deals</p>
                <form autocomplete="off" name="createmail" class="form createmail" id="formLogin" role="form">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" id="input-packagename">
                        <label for="packagename">Package Name</label>

                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group" id="input-citydeparture">
                        <label for="city">City of Departure</label>
                        <input class="form-control from_where" name="from_where" required="" type="text">
                      </div>
                    </div>
                    <div class="contact">
                      <!-- <p class="mont-book text-center line">Contact Details</p> -->
                      <p class="background"><span>Contact Details</span></p>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group custom-formgroup1">
                        <label class="control-label">Date of Departure</label>
                        <div class="icon-input">
                          <i class="fa fa-calendar newfacalendar1"></i>
                          <input id="datepicker1" data-provide="datepicker" name="date_from" type="text" class="form-control date_from" placeholder="Select a date">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 pr-0">
                      <div class="form-group">
                        <label>Name</label>
                        <input class="form-control c_name" name="c_name" id="uname1" required="" type="text">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 pl-0">
                      <div class="form-group">
                        <label for="to1">Email</label>
                        <input class="form-control cst-pl cstpl-wd text-left pl-30 c_email myemail" name="c_email" required="" type="email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <!-- <span class="country-code">+91</span> -->
                        <input class="form-control country-code text-center" name="mobile" type="text" disable="disabled" readonly value="+91">
                        <input class="form-control pl-90 c_mobile" name="c_mobile" required="" type="text">
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <!-- <button class="btn btn-submit btn-lg" type="button">Submit</button> -->
                      <input type="submit" name="btncreatemail1" class="btn btn-submit btn-lg btncreatemail1" value="submit" />
                    </div>
                </form>
              </div>
              <!--/card-block-->
            </div>
            <!-- /form card login -->
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section packdetail overview-content-details">
  <div class="container-fluid">
    <div class="col-xl-10 offset-xl-2 col-lg-10 offset-lg-2 col-md-12 m-auto">
      <div class="row section hotel-overview"></div>
      <div class="row section hotel-included">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <h1>What's included</h1>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
          <ul class="inlude-description"></ul>
        </div>
      </div>
      <div class="row section hotel-excluded">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <h1>What's exclude</h1>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
          <ul class="exclude-content"></ul>
        </div>

      </div>
      <div class="row section">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 section">
          <h1>Hotel Details</h1>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 section custom-padding">
          <div class="hotel-description">

          </div>
        </div>
      </div>
      <div class="row section hotel-itinerary">

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <h1>Your itinerary</h1>
        </div>
        <!-- itenry track -->
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 iti_items">

        </div>
      </div>
      <div class="row section hotel-Info">
        <!-- itenry track -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 section">
          <h1>Additional Info</h1>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 section">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs cst-nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link btn-black active" data-toggle="tab" href="#home">Terms & Conditions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-black zbtn" data-toggle="tab" href="#menu1">Cancellation Policy</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content terms">
            <div id="home" class="container tab-pane  active mt-3">
              <div class="term-tab">
              </div>
            </div>
            <div id="menu1" class="container tab-pane  fade"><br>
              <div class="cancellation-tab">
              </div>

            </div>
          </div>
          <div class="col-md-12 col-sm-12 section p-0">
            <div class="dis  mt-5">
              <div class="ab">
                <p class="t">Hassle free<p>
              </div>

              <div class="cd">
                <p class="mont-book">support@holidaymate.in</p>
                <p class="mont-bold">+919845 944499</p>
              </div>

            </div>
            <!-- <p><span>Hassle Free.</span>support@holidaymate.in <br />+91 9845 944499</p> -->
          </div>
        </div>
      </div>
      <input type="hidden" id="base" value="<?php echo base_url(); ?>">
</section>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>


<!-- Jquery for Navigation Menu -->
<script>
  $('.sub-menu-item').on('mouseover', function(e) {
    var target = $(e.target).attr("data-region");
    $('.sub-item-desc-holder').find('.sub-item-desc').css("display", "none");
    $('.sub-item-desc-holder').find('[data-region="' + target + '"]').css("display", "flex");
  })
</script>

<script src="<?php echo base_url(); ?>assets/js/frontend/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/hotel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/home.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/package.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/mail.js"></script>
<script>
  package.getPackageDetails();
</script>