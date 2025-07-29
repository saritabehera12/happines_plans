<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <!-- header  -->
   <?php require_once 'components/header.php' ?>

</head>

<body class="destinations-page">
  <!-- navbar  -->
  <?php require_once 'components/navbar.php' ?>
  <!-- end navbar  -->

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Destinations</h1>
       
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Destinations</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Travel Destinations Section -->
    <section id="travel-destinations" class="travel-destinations section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2>Uncover Captivating Travel Experiences</h2>
            <p class="mb-5">From the bustling energy of cosmopolitan cities to the serene embrace of untouched wilderness, embark on incredible journeys to the planet's most enchanting destinations. We're here to help you craft memories that will last a lifetime.</p>
          </div>
        </div>

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="destination-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">All Locales</li>
            <li data-filter=".filter-tropical">Tropical</li>
            <li data-filter=".filter-mountain">Alpine</li>
            <li data-filter=".filter-urban">Cityscapes</li>
            <li data-filter=".filter-historical">Heritage</li>
            <li data-filter=".filter-coastal">Seaside</li>
          </ul><!-- End Destination Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-coastal">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-2.webp" alt="Maldives" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag luxury">Elysian</span>
                    <div class="destination-info">
                      <h4>Maldives</h4>
                      <p>A cluster of idyllic islands, boasting sapphire waters and charming overwater retreats.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 15 Escapes</span>
                        <span class="starting-price">From $2,450</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-historical">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-4.webp" alt="Rome, Italy" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag cultural">Historic</span>
                    <div class="destination-info">
                      <h4>Rome, Italy</h4>
                      <p>The timeless city, where ancient ruins meet breathtaking Renaissance artistry.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 18 Excursions</span>
                        <span class="starting-price">From $1,320</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-mountain">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-6.webp" alt="Swiss Alps" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag adventure">Alpine</span>
                    <div class="destination-info">
                      <h4>Swiss Alps</h4>
                      <p>Grandiose peaks and unspoiled mountain hamlets await your discovery.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 10 Treks</span>
                        <span class="starting-price">From $1,980</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-tropical">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-8.webp" alt="Costa Rica" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag nature">Eco-Venture</span>
                    <div class="destination-info">
                      <h4>Costa Rica</h4>
                      <p>Lush rainforests, abundant wildlife, and responsible eco-Happiness Plansism experiences.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 14 Expeditions</span>
                        <span class="starting-price">From $1,650</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-urban">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-10.webp" alt="Dubai, UAE" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag modern">Cosmopolitan</span>
                    <div class="destination-info">
                      <h4>Dubai, UAE</h4>
                      <p>A dazzling skyline where futuristic visions meet authentic Arabian warmth.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 20 Journeys</span>
                        <span class="starting-price">From $1,470</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-coastal">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-12.webp" alt="Amalfi Coast, Italy" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag romantic">Enchanting</span>
                    <div class="destination-info">
                      <h4>Amalfi Coast</h4>
                      <p>Striking cliffs and picturesque villages perched above the cerulean Mediterranean.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 13 Getaways</span>
                        <span class="starting-price">From $1,850</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-tropical">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-14.webp" alt="Thailand" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag popular">Vibrant</span>
                    <div class="destination-info">
                      <h4>Thailand</h4>
                      <p>Gilded temples, pristine beaches, and bustling street markets await.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 22 Packages</span>
                        <span class="starting-price">From $1,100</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-mountain">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-16.webp" alt="Nepal Himalayas" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag trekking">Ascent</span>
                    <div class="destination-info">
                      <h4>Nepal Himalayas</h4>
                      <p>Home to the world's highest peaks and ancient, serene Buddhist sanctuaries.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 8 Quests</span>
                        <span class="starting-price">From $2,300</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-historical">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-18.webp" alt="Egypt Pyramids" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag ancient">Timeless</span>
                    <div class="destination-info">
                      <h4>Egypt</h4>
                      <p>The eternal wonders of pharaohs and the majestic flow of the River Nile.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 16 Expeditions</span>
                        <span class="starting-price">From $1,750</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-urban">
              <a href="destination-details.html" class="destination-tile">
                <div class="tile-image">
                  <img src="assets/img/travel/destination-20.webp" alt="Singapore" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag family">Family-Friendly</span>
                    <div class="destination-info">
                      <h4>Singapore</h4>
                      <p>A modern garden city, celebrated for its bold architecture and diverse culinary scene.</p>
                      <div class="destination-stats">
                        <span class="Happiness Planss-available"><i class="bi bi-map"></i> 17 Adventures</span>
                        <span class="starting-price">From $1,399</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->

          </div><!-- End Destinations Container -->

        </div>
      </div>

    </section><!-- /Travel Destinations Section -->

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