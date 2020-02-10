<!-- //Load the navigation menu -->
<?php $data['home'] = "changenev"; ?>
<?php $this->load->view('pages/sections/navigation', $data); ?>

<section class="mall-24">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-md-12 p-0">
        <div class="region1-banner text-center"></div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="regionname"></div>
    <div class="region-content1">

    </div>
  </div>
</section>
<section class="section new-cardblock">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 m-auto p-xl-0">

        <div class="row packages">

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
<script src="<?php echo base_url(); ?>assets/js/frontend/package.js"></script>
<script src="<?php echo base_url(); ?>assets/js/frontend/region.js"></script>
<!-- 
<script>
  home.getCountryByName();
</script>
<script>
  package.getCountrypackage();
</script> -->