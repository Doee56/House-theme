  <!-- Footer -->
  <footer>
      <div class="container">
          <div class="row">

              <div class="col-12 grid-auto-lg">
                  <div class="brand">
                      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php the_field('logo', 6); ?>"
                              alt="Logo footer"></a>
                      <div class="social grid-gap-xxxxs">
                          <a href="https://www.facebook.com" rel="nofollow noreferrer noopener" target="_blank"><img
                                  src="<?php bloginfo('template_directory') ?>/img/facebook.svg" alt="Facebook"></a>
                          <a href="https://www.instagram.com/?hl=pl" rel="nofollow noreferrer noopener"
                              target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/instagram.svg"
                                  alt="Instagram"></a>
                          <a href="https://www.linkedin.com" rel="nofollow noreferrer noopener" target="_blank"><img
                                  src="<?php bloginfo('template_directory') ?>/img/linkedin.svg" alt="linkedin"></a>
                          <a href="https://twitter.com" rel="noreferrer" target="_blank"><img
                                  src="<?php bloginfo('template_directory') ?>/img/twitter.svg" alt="Twitter"></a>
                      </div>
                  </div>
                  <div class="footer-menu__menu1">
                      <h5>Menu</h5>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Case studies</a></li>
                      <li><a href="#">Career</a></li>
                      <li><a href="#">Contact</a></li>
                  </div>
                  <div class="footer-menu__menu2">
                      <h5>Menu</h5>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Case studies</a></li>
                      <li><a href="#">Career</a></li>
                      <li><a href="#">Contact</a></li>
                  </div>
                  <div class="newsletter">
                      <h5>Newsletter</h5>
                      <form action="/">
                          <input type="email" name="email" required placeholder="Your e-mail">
                          <button type="submit" for="email" value="Zapisuję się">Zapisuję się</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php bloginfo('template_directory') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php bloginfo('template_directory') ?>/js/script.js"></script>
  <?php wp_footer(); ?>
  </div>
  </body>

  </html>