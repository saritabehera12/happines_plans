<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <!-- header  -->
   <?php require_once 'components/header.php' ?>
  <!-- end header  -->
</head>

<body class="gallery-page">

  <!-- navbar  -->
  <?php require_once 'components/navbar.php' ?>
  <!-- end navbar  -->


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Gallery</h1>
      
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Gallery</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Gallery Slider Section -->
    <section id="gallery-slider" class="gallery-slider section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="gallery-container">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 800,
                "autoplay": {
                  "delay": 4000
                },
                "effect": "coverflow",
                "grabCursor": true,
                "centeredSlides": true,
                "slidesPerView": "auto",
                "coverflowEffect": {
                  "rotate": 50,
                  "stretch": 0,
                  "depth": 100,
                  "modifier": 1,
                  "slideShadows": true
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 10
                  },
                  "768": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                  },
                  "1024": {
                    "slidesPerView": 3,
                    "spaceBetween": 30
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="gallery-item">
                  <div class="gallery-img">
                    <a class="glightbox" data-gallery="images-gallery" href="assets/img/pic1.jpg">
                      <img src="assets/img/pic1.jpg" class="img-fluid" alt="">
                      <div class="gallery-overlay">
                        <i class="bi bi-plus-circle"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <div class="gallery-img">
                    <a class="glightbox" data-gallery="images-gallery" href="assets/img/waterfall.jpg">
                      <img src="assets/img/waterfall.jpg" class="img-fluid" alt="">
                      <div class="gallery-overlay">
                        <i class="bi bi-plus-circle"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <div class="gallery-img">
                    <a class="glightbox" data-gallery="images-gallery" href="assets/img/lights.jpg">
                      <img src="assets/img/lights.jpg" class="img-fluid" alt="">
                      <div class="gallery-overlay">
                        <i class="bi bi-plus-circle"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <div class="gallery-img">
                    <a class="glightbox" data-gallery="images-gallery" href="assets/img/goa.jpg">
                      <img src="assets/img/goa.jpg" class="img-fluid" alt="">
                      <div class="gallery-overlay">
                        <i class="bi bi-plus-circle"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <div class="gallery-img">
                    <a class="glightbox" data-gallery="images-gallery" href="assets/img/group.jpg">
                      <img src="assets/img/group.jpg" class="img-fluid" alt="">
                      <div class="gallery-overlay">
                        <i class="bi bi-plus-circle"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <div class="gallery-img">
                    <a class="glightbox" data-gallery="images-gallery" href="assets/img/treehouse.jpg">
                      <img src="assets/img/treehouse.jpg" class="img-fluid" alt="">
                      <div class="gallery-overlay">
                        <i class="bi bi-plus-circle"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>

      </div>

    </section><!-- /Gallery Slider Section -->

 
  </main>

 <!-- footer  -->
<?php require_once 'components/footer.php' ?>
 <!-- endfooter  -->
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>