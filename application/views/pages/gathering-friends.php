<?php $data['home'] = "changenev"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>
<section class="gather-section ">
  <div class="container-fluid p-0">
    <div class="gather-jumbotron friends">
      <div class="travel-content">
        <div class="text-center text-white">
          <h1>Celebration with Friends</h1>
          <p class="mt-3">Rejoice with your family on a perfect holiday</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
    <div class="trvalep-content mont-r">
      <p>The bond of friendship gets deeper and stronger with travel dairies.
        Down the life time when you sit on a couch and get nostalgic about that particular moment with your pals and buddies…..
        Well….. Priceless isn’t it…?</p>
      <p>The world is a book, and those who do not travel read only the cover page.
        The friends come in every chapter of that amazing book.</p>
      <p> A bucket list is not complete without friends.</p>
      <p>The best Cappuccino</p>
      <p>View of an Ionian Sea <p>That mountain u conquered </p>
        <p>To celebrate your important milestones</p>
        <p>Everything is best when you are with your friends.</p>
        <p>Get in touch with HolidayMate to know more about touring with friends to make memories.</p>

        <p>We Fabricate the best travel advisory, making sure you spend each moment on tour with your family creating unforgettable memories.</p>
        <p> There will be hours full of exercises designed to learn and explore for all ages. Stay together, Eat, Cuddle and Relax with Love.</p>
    </div>
  </div>
</section>
<section class="section3">

  <div class="col-xl-10 offset-xl-1 ">

    <div class="slideshow-container">

      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
        <div class="text">
          <p>You are not born just to pay bills, there is an explorer waiting inside you.
            Disconnect from Work and Chaos for a while and plan the adventure with your friends</p>
          <p>- Dive in, to Plethora of adventures through HolidayMate </p>
        </div>
      </div>

      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
        <div class="text">
          <p>Life is meant for big adventures and good friends, OH YEAH!!! Friends that travel together, stay together for ever.</p>
          <p>- Don’t Sweat the Details, leave it to HolidayMate to bring out the best plan for you and your buddies</p>
        </div>
      </div>

      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
        <div class="text">
          <p>Good Times and Crazy friends make the best memories. Let the HolidayMate create those best times for you with your buddies.</p>
          <p>- Travel at Your Pace, leave the planning and execution to HolidayMate</p>
        </div>
      </div>
      <div class="mySlides ">
        <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
        <div class="text">
          <p>The real voyage of discovery consists not in seeking new landscapes but in having new eyes. Pack your bags, choose your friends and say “Here we GO”</p>
          <p>- At HolidayMate, you get Custom Journeys, tailor made for you through your choice.<p>
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
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-md-3 mb-sm-3 md-3">
        <div class="gather-card">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base.png" alt="Gathering">
          <h4> Gathering with Family</h4>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-md-3 mb-sm-3 md-3">
        <div class="gather-card">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base1.png" alt="Gathering">
          <h4>Celebration with Friends</h4>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-md-3 mb-sm-3 md-3">
        <div class="gather-card">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base2.png" alt="Gathering">
          <h4>Retreats With Colleagues</h4>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-md-3 mb-sm-3 md-3">
        <div class="gather-card">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/gather/solo.jpg" alt="Gathering">
          <h4>Solo Trip</h4>
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
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    // var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    // for (i = 0; i < dots.length; i++) {
    //   dots[i].className = dots[i].className.replace(" active", "");
    // }
    slides[slideIndex - 1].style.display = "block";
    // dots[slideIndex - 1].className += " active";
  }
</script>
<script src="<?php echo base_url(); ?>assets/js/frontend/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/home.js"></script>