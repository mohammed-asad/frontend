<section class="gather-section">
  <div class="container-fluid">
    <div class="gather-jumbotron">
      <div class="travel-content">
        <div class="row">
          <div class="col-12">
            <div class="text-center text-white">
              <h1>Gathering with Family</h1>
              <p class="mt-3">Rejoice with your family on a perfect holiday</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12">
    <div class="trvalep-content">
      <p>Travelling with the family is a way of learning and exploring while making memories with the people you love the most.
        Mom wants the spa, kids want to dive in pool, dad need to relish nature, grand parents want some adventure.
        Oh Yeah!!! holidaymate has got it covered all.</p>

      <p>We Fabricate the best travel advisory, making sure you spend each moment on tour with your family creating unforgettable memories.</p>
      <p> There will be hours full of exercises designed to learn and explore for all ages. Stay together, Eat, Cuddle and Relax with Love.</p>
    </div>
  </div>
</section>
<section class="section3">
  <section class="">
    <div class="col-xl-10 offset-xl-1 ">

      <div class="slideshow-container">

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/others/gather.png" style="width:100%">
          <div class="text">
            <p>Home is where the best place is!!! <br>When you are with your family, far away destination holiday just feels like home.</p>
            <p>- Choice and Flexibility, choose your family holiday with holidaymate</p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/others/gather.png" style="width:100%">
          <div class="text">
            <p>A happy family is but an earlier heaven, the next holiday you choose with your family will be an heavenly experience</p>
            <p>- HolidayMate makes you create everlasting memories with FOCUS on FAMILY.</p>
          </div>
        </div>

        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/others/gather.png" style="width:100%">
          <div class="text">
            <p>In this amazing world with eternal beauty its endless exploration when you take a trip with your family.</p>
            </p>- Use Your Pace and Rejoice with your family by choosing Exquisite HolidayMate Tour plans<p>
          </div>
        </div>
        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/others/gather.png" style="width:100%">
          <div class="text">
            <p>On the ocean of life when you sail on the family ship, choose HolidayMate as your compass.</p>
            </p>- Endless Exploration family tours from HolidayMate<p>
          </div>
        </div>
        <div class="mySlides ">
          <img src="<?php echo base_url(); ?>assets/images/others/gather.png" style="width:100%">
          <div class="text">
            <p>Family are God’s gift to you, as you are to them. A family trip is a celebration.</p>
            </p>- Let the HolidayMate plan the Itinerary that you choose to explore<p>
          </div>
        </div>



        <a class="prev" onclick="plusSlides(-1)"></a>
        <a class="next" onclick="plusSlides(1)"></a>

      </div>
    </div>
  </section>
  <section class="section3">
    <div class="col-xl-10 offset-xl-1">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="gather-card">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base.png" alt="Gathering">
            <h4> Gathering with Family</h4>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="gather-card">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base1.png" alt="Gathering">
            <h4>Celebration with Friends</h4>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="gather-card">
            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/others/base2.png" alt="Gathering">
            <h4>Retreats With Colleagues</h4>
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