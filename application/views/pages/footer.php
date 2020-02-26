<!-- Footer id="footerid" class="page-footer font-small indigo" -->
<footer class="mall-24">

  <!-- Footer Links  text-center text-md-left-->
  <div class="col-xl-10 m-auto">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-5 mx-auto p-0 wow fadeInLeft">

        <!-- Links -->
        <h5 class="text-uppercase mt-3 mb-4">CONTACT US</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">+91 9845 944499</a>
          </li>
          <li>
            <a href="#!">Lavanya – +91 9845944499</a>
          </li>
          <li>
            <a href="#!">Rajat-David - +91 9880212129</a>
          </li>
          <li>
            <a href="#!">support@holidaymate.com</a>
          </li>
          <!-- <li>
            <a href="#!">Find a Store</a>
          </li> -->

        </ul>

      </div>
      <!-- Grid column -->

      <!-- <hr class="clearfix w-100 d-md-none"> -->

      <!-- Grid column -->
      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-7 mx-auto p-0 wow fadeInLeft">

        <!-- Links -->
        <h5 class="text-uppercase mt-3 mb-4">CUSTOMER RERVICE</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Contact Us</a>
          </li>
          <li>
            <a href="#!">Ordering & Payment</a>
          </li>
          <li>
            <a href="#!">FAQ</a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <!-- <hr class="clearfix w-100 d-md-none"> -->

      <!-- Grid column -->
      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-5 mx-auto p-0 wow fadeInRight" data-wow-duration="1500ms">

        <!-- Links -->
        <h5 class="text-uppercase mt-3 mb-4">INFORMATION</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">About us</a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>terms_and_condition">Terms & Conditions</a>
          </li>
          <li>
            <a href="#!">Contact Us</a>
          </li>
          <li>
            <a href="#!">Sitemap</a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <!-- <hr class="clearfix w-100 d-md-none"> -->

      <!-- Grid column -->
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-7 mx-auto p-0">
        <div class="wow fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
          <!-- Links -->
          <h5 class="text-uppercase mt-3 mb-4">Subscribe to Holidaymate via Email</h5>

          <ul class="list-unstyled">
            <li>
              <a class="lastlink" href="#!">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</a>
            </li>

            <section class="text-center mt-2">
              <form action="#" name="createsubscriber" class="createsubscriber" method="Post">
                <div class="mb-3 d-flex">
                  <input type="text" class="form-control subscribe sub_email" name="sub_email" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">

                  <input type="submit" name="createsubscriber" class="btn subscribe-btn createsubscriber" value="Subscribe" />
                </div>
              </form>
            </section>
          </ul>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright </div> -->
  <!-- Copyright -->

</footer>
<input type="hidden" id="base" value="<?php echo base_url(); ?>">
<!-- Footer -->

<script src="<?php echo base_url(); ?>assets/js/frontend/footer.js"></script>

<script>
  footer.addSubscriber();
</script>
<script src="<?php echo base_url(); ?>assets/js/animate/wow.min.js"></script>
<script>
  wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: true, // default
    onLoad: true,
    onScroll: true,
    live: true // default

  })
  wow.init();
  // new WOW().init();
</script>

</body>
<!-- <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script> -->

</html>