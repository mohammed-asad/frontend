<section class="gather-section ">
  <div class="container-fluid p-0">
    <div class="gather-jumbotron solo">
      <div class="travel-content">
        <div class="text-center text-white">
          <h1>As you Travel Solo</h1>
          <!-- <p class="mt-3">Rejoice with your family on a perfect holiday</p> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
    <div class="trvalep-content mont-r">
      <p>At Holidaymate we encourage the individuals to take the Solotrip we organise. Go on Solotrip but dont feel lonely as u will be with the group of unknown but equally enthusiastic group of people. Do the things which you always wanted to do but shy(ed) away to do in front of your family/friends.</p>
      <p> This Lonetrips will make you Beat out those deep fears and phobias which are accumulated within you from long and gives the gut to do the things which you longed to do but haven't done cause of the peer pressures. On Holidaymate 's Rediscovery trips there are no one who wants to judge you nor want to get judged.
      </p>
      <p>Find new Passions
        Break the Chains with the Past,
        Do little drama, Dance a lot
        Discover a New You
        Find the answers you seek by yourself. Love yourself first because "An empty Lantern gives no light, Self-care is the fuel that allows your light shine brightly". While you re-evalue yourself, we will have your back and we say you are safe with us even in unknown location and with unknown People.</p>
    </div>
  </div>
</section>
<section class="section3">
  <section class="">
    <div class="col-xl-10 offset-xl-1 ">

      <div class="slideshow-container">

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
          <div class="text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
            <p>- Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
          <div class="text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.text ever since the 1500s, </p>
            <p>- Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
          <div class="text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <p>- Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/gather/friends.png" style="width:100%">
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
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="gather-card">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base.png" alt="Gathering">
            <h4> Gathering with Family</h4>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="gather-card">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base1.png" alt="Gathering">
            <h4>Celebration with Friends</h4>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="gather-card">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base2.png" alt="Gathering">
            <h4>Retreats With Colleagues</h4>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
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