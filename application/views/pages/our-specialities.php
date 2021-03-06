<!-- //Load the navigation menu -->
<?php $data['home'] = "changenev"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>

<section class="section2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
        <div class="spacelity-banner text-center">
          <img src="<?php echo base_url(); ?>assets/images/gather/why-holidaymate.svg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section1">
  <div class="col-md-9 m-auto">
    <div class="specialities">
      <p class="wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">We are not here to say We are unique. But we have identified that you are unique. Each one are distinctive and every traveller’s story is different. You are our Guest from the time you logged into our Site. In one word being “Guest centric” is our mission, vision and Secret of our Success. </p>
      <p class="wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1500ms">The only potential you need to possess is the enthusiasm to travel. Travel simple or premium. Travel solo or have a Famjam. But travel only with holidaymate. We will fulfill your dream destination in your number, in the way you have planned to do it. You will tell your travel story to your family and friends starting with “I booked my vacation with holidaymate and I had an amazing experience and I am looking forward to travel more destinations with holidaymate”. </p>
      <p class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1500ms">We will live in your stories and probably we will become part of all your near and dear ones Stories, Stanzas, Poems and Prose, may be a song too. </p>
      <p class="wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="1500ms">That one sentence is our expectation from you, and we will strive hard to make it happen.</p>
    </div>
  </div>
</section>
<section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
        <div class="middle-banner text-center">
          <img src="<?php echo base_url(); ?>assets/images/gather/our-sprecialities.svg" alt="" class="img-fluid d-none d-sm-none d-md-block d-lg-block d-xl-block m-auto">
          <img src="<?php echo base_url(); ?>assets/images/gather/our-specialities-mobi.svg" alt="" class="img-fluid d-block d-sm-block d-md-none d-lg-none d-xl-none m-auto">
        </div>
      </div>
    </div>
  </div>
</section>
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
<script src="<?php echo base_url(); ?>assets/js/frontend/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/home.js"></script>