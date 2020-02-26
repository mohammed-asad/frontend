<?php $data['home'] = "changenev"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>
<section class="gather-section ">
  <div class="container-fluid p-0">
    <div class="gather-jumbotron friends">
      <div class="travel-content">
        <div class="text-center text-white">
          <h1 class="wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">Celebration with Friends</h1>
          <p class="mt-3 wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1500ms">Without friends, you cannot score your bucket list</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
    <div class="trvalep-content mont-r">
      <p class="wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">The bond of friendship gets deeper and stronger with travel dairies.
        Down the life time when you sit on a couch and get nostalgic about that particular moment with your pals and buddies…..
        Well….. Priceless isn’t it…?</p>
      <p class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1500ms">The world is a book, and those who do not travel read only the cover page.
        The friends come in every chapter of that amazing book.</p>
      <p class="wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="1500ms"> A bucket list is not complete without friends.</p>
      <p class="wow fadeInLeft" data-wow-delay="1.9s" data-wow-duration="1500ms">The best Cappuccino</p>
      <p class="wow fadeInLeft" data-wow-delay="2.3s" data-wow-duration="1500ms">View of an Ionian Sea</p>
      <p class="wow fadeInLeft" data-wow-delay="2.8s" data-wow-duration="1500ms">That mountain u conquered </p>
      <p class="wow fadeInLeft" data-wow-delay="3s" data-wow-duration="1500ms">To celebrate your important milestones</p>
      <p class="wow fadeInLeft" data-wow-delay="3.3s" data-wow-duration="1500ms">Everything is best when you are with your friends.</p>
      <p class="wow fadeInLeft" data-wow-delay="3.6s" data-wow-duration="1500ms">Get in touch with HolidayMate to know more about touring with friends to make memories.</p>

      <p class="wow fadeInLeft" data-wow-delay="4s" data-wow-duration="1500ms">We Fabricate the best travel advisory, making sure you spend each moment on tour with your family creating unforgettable memories.</p>
      <p class="wow fadeInLeft" data-wow-delay="4.5s" data-wow-duration="1500ms"> There will be hours full of exercises designed to learn and explore for all ages. Stay together, Eat, Cuddle and Relax with Love.</p>
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

  <div class="col-xl-10 offset-xl-1 ">

    <div class="slideshow-container">

      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
        <div class="text">
          <p>You are not born just to pay bills, there is an explorer waiting inside you.
            Disconnect from Work and Chaos for a while and plan the adventure with your friends</p>
          <p><span class="mont-bold">- Dive in,</span> to Plethora of adventures through HolidayMate </p>
        </div>
      </div>

      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/celebretwithfriendthought2.jpg" style="width:100%">
        <div class="text">
          <p>Life is meant for big adventures and good friends, OH YEAH!!! Friends that travel together, stay together for ever.</p>
          <p><span class="mont-bold">- Don’t Sweat the Details,</span> leave it to HolidayMate to bring out the best plan for you and your buddies</p>
        </div>
      </div>

      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/celebretwithfriendthought3.jpg" style="width:100%">
        <div class="text">
          <p>Good Times and Crazy friends make the best memories. Let the HolidayMate create those best times for you with your buddies.</p>
          <p>- Travel at <span class="mont-bold">Your Pace,</span> leave the planning and execution to HolidayMate</p>
        </div>
      </div>
      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/celebretwithfriendthought1.jpg" style="width:100%">
        <div class="text">
          <p>The real voyage of discovery consists not in seeking new landscapes but in having new eyes. Pack your bags, choose your friends and say “Here we GO”</p>
          <p>- At HolidayMate, you get <span class="mont-bold">Custom Journeys,</span> tailor made for you through your choice.<p>
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
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="gather-card">
          <a href="<?php echo base_url() ?>gathering/family">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/travelprivate/498x349_FG.jpg" alt="Family Gathering">
            <h4> Gathering with Family</h4>
          </a>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="gather-card">
          <a href="<?php echo base_url() ?>gathering/colleagues">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/travelprivate/498x349_RetreatCol.jpg" alt="Colleagues Gathering">
            <h4>Retreats With Colleagues</h4>
          </a>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
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