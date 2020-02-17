<?php $data['home'] = "changenev"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>
<section class="gather-section ">
  <div class="container-fluid p-0">
    <div class="gather-jumbotron colleague">
      <div class="travel-content">
        <div class="text-center text-white">
          <h1>Retreats with Colleagues</h1>
          <p class="mt-3">Rejoice with your family on a perfect holiday</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
    <div class="trvalep-content mont-r">
      <p>The strength of the team is each individual member. The strength of each member is the team. Leave the desks for recreation and rejuvenation.</p>
      <p> Let holidaymate boost your corporate energy and take care of all your particulars.</p>
      <p>Get out on that breath taking hiking trail.</p>
      <p> Turn on the dirt biker and ATV skills in you.</p>
      <p> Try a PUT in the golf course.</p>
      <p> Feel the energy in tennis court swinging racket.</p>
      <p> Relax in the spa to stretch your collective bodies and minds.</p>
      <p> You ask for it, we have got it for you.</p>
      <p class="mt-3 mb-0"> holidaymate crafts corporate adventures that promote bonding, inspire new ideas, restore friendships, renew loyalty and provide perspective to move forward as a strong team.</p>
    </div>
  </div>
</section>
<section class="section3">
  <section class="">
    <div class="col-xl-10 offset-xl-1 ">

      <div class="slideshow-container">

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought1.jpg" style="width:100%">
          <div class="text">
            <p>If everyone is moving together, then success take care of itself. Its not about ideas, its about making ideas happen.</p>
            <p>- Create those ideas on a team outing and a Brain Storming trip with HolidayMate.</p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought2.jpg" style="width:100%">
          <div class="text">
            <p>Alone we can do so little; together we can do so much. The team building activity can be fun and
              productive too.</p>
            <p>- Do not worry about a symphony, HolidayMate can create an Orchestra of Team building</p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought3.jpg" style="width:100%">
          <div class="text">
            <p>The relentless hard work you put in as a team needs pampering and resurgence through a team trip.
              Life is about caring for team mates and building a rapport like concert.</p>
            <p>- Push to new Heights with HolidayMate Corporate tour packages and Reinvent your Passion.</p>
          </div>
        </div>
        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/retreatewithcoleaugethought4.jpg" style="width:100%">
          <div class="text">
            <p>When is comes to team, its not a solo work. Recreate the passion with your team which creates the
              balance between Work and Family and Friends.</p>
            <p>- Corporate Retreats with HolidayMate brings the satisfaction above all else.</p>
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