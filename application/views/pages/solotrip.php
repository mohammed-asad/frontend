<?php $data['home'] = "changenev"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>
<section class="gather-section ">
  <div class="container-fluid p-0">
    <div class="gather-jumbotron solo">
      <div class="travel-content">
        <div class="text-center text-white">
          <h1 class="wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">As you travel solo</h1>
          <!-- <p class="mt-3">Rejoice with your family on a perfect holiday</p> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
    <div class="trvalep-content mont-r">
      <p class="wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">At Holidaymate we encourage the individuals to take the Solotrip we organise. Go on Solotrip but dont feel lonely as u will be with the group of unknown but equally enthusiastic group of people. Do the things which you always wanted to do but shy(ed) away to do in front of your family/friends.</p>
      <p class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1500ms"> This Lonetrips will make you Beat out those deep fears and phobias which are accumulated within you from long and gives the gut to do the things which you longed to do but haven't done cause of the peer pressures. On Holidaymate 's Rediscovery trips there are no one who wants to judge you nor want to get judged.
      </p>
      <p class="wow fadeInLeft" data-wow-delay="1.6s" data-wow-duration="1500ms">Find new Passions
        Break the Chains with the Past,
        Do little drama, Dance a lot
        Discover a New You
        Find the answers you seek by yourself. Love yourself first because "An empty Lantern gives no light, Self-care is the fuel that allows your light shine brightly". While you re-evalue yourself, we will have your back and we say you are safe with us even in unknown location and with unknown People.</p>
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
          <img src="<?php echo base_url(); ?>assets/images/gather/solothought1.jpg" style="width:100%">
          <div class="text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
            <p>- Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/solothought2.jpg" style="width:100%">
          <div class="text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.text ever since the 1500s, </p>
            <p>- Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/solothought3.jpg" style="width:100%">
          <div class="text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <p>- Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/solothought4.jpg" style="width:100%">
          <div class="text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever, </p>
            <p>- Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
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
            <a href="<?php echo base_url() ?>gathering/friends">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/travelprivate/498x349_Celebfrind.jpg" alt="Friends Gathering">
              <h4>Celebration with Friends</h4>
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