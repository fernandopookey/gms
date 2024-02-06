  <!-- Get In Touch Section Begin -->
  <div class="gettouch-section">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="gt-text">
                      <i class="fa fa-map-marker"></i>
                      <p>333 Middle Winchendon Rd, Rindge,<br /> NH 03461</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="gt-text">
                      <i class="fa fa-mobile"></i>
                      <ul>
                          <li>125-711-811</li>
                          <li>125-668-886</li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="gt-text email">
                      <i class="fa fa-envelope"></i>
                      <p>Support.gymcenter@gmail.com</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Get In Touch Section End -->

  <!-- Footer Section Begin -->
  <section class="footer-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="fs-about">
                      <div class="fa-logo">
                          <a href="#"><img src="{{ asset('gym/img/logo.png') }}" alt=""></a>
                      </div>
                      <p>Founded by Gamelab Indonesia in 2011, GYM
                          GAMELAB empowers people to become the best version of themselves.</p>
                      <div class="fa-social">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-youtube-play"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a>
                          <a href="#"><i class="fa  fa-envelope-o"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-6">
                  <div class="fs-widget">
                      <h4>Useful links</h4>
                      <ul>
                          <li><a href="#">About</a></li>
                          <li><a href="#">Blog</a></li>
                          <li><a href="#">Classes</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-6">
                  <div class="fs-widget">
                      <h4>Support</h4>
                      <ul>
                          <li><a href="#">Login</a></li>
                          <li><a href="#">My account</a></li>
                          <li><a href="#">Subscribe</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="fs-widget">
                      <h4>Tips & Guides</h4>
                      <div class="fw-recent">
                          <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                          <ul>
                              <li>3 min read</li>
                              <li>20 Comment</li>
                          </ul>
                      </div>
                      <div class="fw-recent">
                          <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                          <ul>
                              <li>3 min read</li>
                              <li>20 Comment</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="copyright-text">
                      <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;
                          <script>
                              document.write(new Date().getFullYear());
                          </script> All rights reserved | This template is made with <i
                              class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                              target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
          <div class="search-close-switch">+</div>
          <form class="search-model-form">
              <input type="text" id="search-input" placeholder="Search here.....">
          </form>
      </div>
  </div>
  <!-- Search model end -->

  <!-- Js Plugins -->
  <script src="{{ asset('gym/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('gym/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('gym/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('gym/js/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('gym/js/jquery.barfiller.js') }}"></script>
  <script src="{{ asset('gym/js/jquery.slicknav.js') }}"></script>
  <script src="{{ asset('gym/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('gym/js/main.js') }}"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

  <script>
      function redirectToHomeWithHero() {
          console.log("Mengarahkan ke halaman utama dengan hero");
          window.location.href = "{{ route('home') }}#hero";
      }
  </script>

  <script>
      function redirectToHomeWithAbout() {
          console.log("Mengarahkan ke halaman utama dengan about");
          window.location.href = "{{ route('home') }}#about";
      }
  </script>

  <script>
      function redirectToHomeWithClass() {
          console.log("Mengarahkan ke halaman utama dengan our class");
          window.location.href = "{{ route('home') }}#ourclass";
      }
  </script>

  <script>
      function redirectToHomeWithPackages() {
          console.log("Mengarahkan ke halaman utama dengan packages");
          window.location.href = "{{ route('home') }}#packages";
      }
  </script>

  <script>
      function redirectToHomeWithTeam() {
          console.log("Mengarahkan ke halaman utama dengan team");
          window.location.href = "{{ route('home') }}#team";
      }
  </script>



  </body>

  </html>
