<?php $data['home'] = "changenev"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>
<section class="gather-section ">
  <div class="container-fluid p-0">
    <div class="gather-jumbotron colleague">
      <div class="travel-content">
        <div class="text-center text-white">
          <h1 class="wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">Retreats with Colleagues</h1>
          <p class="mt-3 wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1500ms">Talent wins games, teamwork wins Championships</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
    <div class="trvalep-content mont-r">
      <p class="wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">The strength of the team is each individual member. The strength of each member is the team. Leave the desks for recreation and rejuvenation.</p>
      <p class="wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1500ms"> Let holidaymate boost your corporate energy and take care of all your particulars.</p>
      <p class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1500ms">Get out on that breath taking hiking trail.</p>
      <p class="wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="1500ms"> Turn on the dirt biker and ATV skills in you.</p>
      <p class="wow fadeInLeft" data-wow-delay="2s" data-wow-duration="1500ms"> Try a PUT in the golf course.</p>
      <p class="wow fadeInLeft" data-wow-delay="2.3s" data-wow-duration="1500ms"> Feel the energy in tennis court swinging racket.</p>
      <p class="wow fadeInLeft" data-wow-delay="2.6s" data-wow-duration="1500ms"> Relax in the spa to stretch your collective bodies and minds.</p>
      <p class="wow fadeInLeft" data-wow-delay="3s" data-wow-duration="1500ms"> You ask for it, we have got it for you.</p>
      <p class="mt-3 mb-0 wow fadeInLeft" data-wow-delay="3.2s" data-wow-duration="1500ms"> holidaymate crafts corporate adventures that promote bonding, inspire new ideas, restore friendships, renew loyalty and provide perspective to move forward as a strong team.</p>
    </div>
  </div>
</section>
<section>
  <button class="btn btn-info fixedbutton" data-toggle="modal" data-target="#mycstModal"><i class="fa fa-angle-left" aria-hidden="true"></i> Book Now</button>
  <!-- Modal -->
  <div class="modal left fade" id="mycstModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        </div> -->

        <div class="modal-body">
          <!-- Form -->
          <div class="row form-block enquiry-form">
            <!--	<div class="col-xl-6 offset-xl-6 col-lg-8 offset-lg-4 col-md-8 offset-md-2 custom-md-6 col-sm-10 offset-sm-1">
				 form card login -->
            <div class="card card-outline-secondary">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <div class="card-body enqury-card">
                <h3 class="mb-10 dsb">Book unique places to stay and things to do.</h3>
                <h4 class="mb-10 dsn">Book unique places to<br> stay and things to do.</h4>
                <form autocomplete="off" class="form createmail" id="formLogin" name="createmail" role="form">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="uname1">where</label>
                        <input class="form-control to_where" id="uname1" name="to_where" required="" type="text">
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
                      <p class="information">Your information will be Kept Confidential</p>
                    </div>
                </form>
              </div>
              <!--/card-block-->
              <!--</div>
				 /form card login -->
            </div>
          </div>
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
</section>
<section class="section3">
  <section class="">
    <div class="col-xl-10 offset-xl-1 ">

      <div class="slideshow-container">

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought1.jpg" style="width:100%">
          <div class="text">
            <p>If everyone is moving together, then success take care of itself. Its not about ideas, its about making ideas happen.</p>
            <p>- Create those ideas on a team outing and a <span class="mont-bold">Brain Storming</span> trip with HolidayMate.</p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought2.jpg" style="width:100%">
          <div class="text">
            <p>Alone we can do so little; together we can do so much. The team building activity can be fun and
              productive too.</p>
            <p>- Do not worry about a symphony, HolidayMate can create an Orchestra of <span class="mont-bold">Team building</span></p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought3.jpg" style="width:100%">
          <div class="text">
            <p>The relentless hard work you put in as a team needs pampering and resurgence through a team trip.
              Life is about caring for team mates and building a rapport like concert.</p>
            <p><span class="mont-bold">- Push to new Heights</span> with HolidayMate Corporate tour packages and Reinvent your Passion.</p>
          </div>
        </div>
        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought4.jpg" style="width:100%">
          <div class="text">
            <p>When is comes to team, its not a solo work. Recreate the passion with your team which creates the
              balance between Work and Family and Friends.</p>
            <p><span class="mont-bold">- Corporate Retreats</span> with HolidayMate brings the satisfaction above all else.</p>
          </div>
        </div>


        <div class="arrow">

          <a class="prev" onclick="plusSlides(-1)"></a>
          <a class="next" onclick="plusSlides(1)"></a>
        </div>
      </div>
    </div>
  </section>
  <section class="section3">
    <div class="col-xl-10 offset-xl-1">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-md-3 mb-sm-4 mb-4">
          <div class="gather-card">
            <a href="<?php echo base_url() ?>gathering/family">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/travelprivate/498x349_FG.jpg" alt="Family Gathering">
              <h4> Gathering with Family</h4>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-md-3 mb-sm-4 mb-4">
          <div class="gather-card">
            <a href="<?php echo base_url() ?>gathering/friends">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/travelprivate/498x349_Celebfrind.jpg" alt="Friends Gathering">
              <h4>Celebration with Friends</h4>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-md-3 mb-sm-4 mb-4">
          <div class="gather-card">
            <a href="<?php echo base_url() ?>gathering/colleagues">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/travelprivate/498x349_RetreatCol.jpg" alt="Colleagues Gathering">
              <h4>Retreats With Colleagues</h4>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-md-3 mb-sm-4 mb-4">
          <div class="gather-card">
            <a href="<?php echo base_url() ?>gathering/solotrip">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/travelprivate/498x349_Solo_trip.jpg" alt="Solo Trip">
              <h4>Solo Trip</h4>
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>


  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>

  <!-- Jquery for Navigation Menu -->
  <script>
    $('.sub-menu-item').on('mouseover', function(e) {
      var target = $(e.target).attr("data-region");
      $('.sub-item-desc-holder').find('.sub-item-desc').css("display", "none");
      $('.sub-item-desc-holder').find('[data-region="' + target + '"]').css("display", "flex");
    })
  </script>

  <script>
    var slideIndex = 1;

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    var slide;

    function showSlides(n) {
      var slides = document.querySelectorAll(".mySlides");
      clearTimeout(slide);
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
      slide = setTimeout(function() {
        slideIndex += 1;
        showSlides(slideIndex)
      }, 10000); // Change image every 2 seconds
    }

    showSlides(slideIndex);
  </script>
  <script src="<?php echo base_url(); ?>assets/js/frontend/utils.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/frontend/home.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/frontend/mail.js"></script>