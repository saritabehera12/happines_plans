<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- header  -->
  <?php require_once 'components/header.php' ?>
  <!-- end header  -->
</head>

<body class="index-page">

  <!-- navbar  -->
  <?php require_once 'components/navbar.php' ?>
  <!-- end navbar  -->
  <main class="main">

    <!-- Travel Hero Section -->
    <section id="travel-hero" class="travel-hero section dark-background">

      <div class="hero-background">
        <video autoplay="" muted="" loop="">
          <source src="assets/img/travel/video-2.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
      </div>

      <div class="container position-relative">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="hero-text" data-aos="fade-up" data-aos-delay="100">
              <h1 class="hero-title">Discover Your Perfect Journey</h1>
              <p class="hero-subtitle">Crafting Bespoke Itineraries for Discering Travelers.</p>
              <div class="hero-buttons">
                <a href="destinations.php" class="btn btn-primary me-3">Explore Our Exclusive Destinations.</a>
              
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="booking-form-wrapper" data-aos="fade-left" data-aos-delay="200">
              <div class="booking-form">
                <h3 class="form-title">Plan Your Adventure</h3>
                <form id="contactForm"  method="post" class="php-email-form">
                <div class="form-group mb-3">
                        <label for="checkin">Name</label>
                        <input type="text" name="name"  class="form-control" required="">
                      </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="checkin">Email</label>
                        <input type="text" name="email"  class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="checkout">Subject</label>
                        <input type="text" name="subject" class="form-control" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="Happiness Plans-type">Message</label>
                    <input type="text" name="message" class="form-control" required="">
                  </div>

                  <button type="submit" name= "submit"   class="btn btn-primary w-100">Find Your Perfect Trip</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Travel Hero Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- About Us Content -->
        <div class="row align-items-center mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h3>Explore the World with Confidence</h3>
              <p>✈️ Welcome to Happiness Plan – Your Journey to Joy Begins Here! 🌍
                At Happiness Plan, we believe that travel is more than just visiting new places — it's about creating unforgettable memories, discovering yourself, and finding happiness in every moment.

               </p>
              <p> Whether you're dreaming of relaxing on a tropical beach, exploring ancient cultures, or adventuring through scenic mountains, Happiness Plan curates personalized travel experiences that bring your dreams to life.
                
                From budget getaways to luxury escapes, honeymoon packages to family holidays, solo trips to group adventures — we plan it all, with love and care.</p>
              <div class="stats-row">
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Happy Travelers</div>
                </div>
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Countries Covered</div>
                </div>
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Years Experience</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-image">
              <img src="assets/img/pic1.jpg" alt="Travel Experience" class="img-fluid rounded-4 w-100">
              <div class="experience-badge">
                <div class="experience-number">15+</div>
                <div class="experience-text">Years of Excellence</div>
              </div>
            </div>
          </div>
        </div><!-- End About Us Content -->

        <!-- Why Choose Us -->
        <div class="why-choose-section">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3>Why Choose Us </h3>
             
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <h4>Local Experts</h4>
                <p>Our local experts ensure you experience every destination like a true insider.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h4>Safe &amp; Secure</h4>
                <p>Your safety is our top priority — travel worry-free with our trusted plans.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-cash"></i>
                </div>
                <h4>Best Prices</h4>
                <p>Enjoy unbeatable travel deals without compromising on comfort or quality</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <h4>24/7 Support</h4>
                <p>Wherever you go, our support team is just a call away — anytime, anywhere..</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h4>Global Destinations</h4>
                <p>Explore handpicked destinations across the world tailored to your travel dreams.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-star-fill"></i>
                </div>
                <h4>Premium Experience</h4>
                <p>Erom luxury stays to curated tours — we craft journeys you’ll never forget.</p>
              </div>
            </div>
          </div><!-- End Features Grid -->
        </div><!-- End Why Choose Us -->

      </div>

    </section><!-- /Why Us Section -->

    <!-- Featured Destinations Section -->
    <section id="featured-destinations" class="featured-destinations section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Destinations</h2>
        <div><span>Check Our</span> <span class="description-title">Featured Destinations</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="featured-destination">
              <div class="destination-overlay">
                <img src="assets/img/lights.jpg" alt="Tropical Paradise" class="img-fluid">
                <div class="destination-info">
                  <span class="destination-tag">Popular Choice</span>
                  <h3>Tropical Paradise</h3>
                  <p class="location"><i class="bi bi-geo-alt-fill"></i> Maldives</p>
                  <p class="description">Pristine beaches, crystal-clear waters, and luxury overwater villas await in this tropical paradise destination.</p>
                  <div class="destination-meta">
                    <div class="Happiness Planss-count">
                      <i class="bi bi-collection"></i>
                      <span>22 Packages</span>
                    </div>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <span>4.9 (412)</span>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row g-3">

              <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                <div class="compact-destination">
                  <div class="destination-image">
                    <img src="assets/img/waterfall.jpg" alt="Mountain Adventure" class="img-fluid">
                    <div class="badge-offer">Best Value</div>
                  </div>
                  <div class="destination-details">
                    <h4>Mountain Adventure</h4>
                    <p class="location"><i class="bi bi-geo-alt"></i> Nepal</p>
                    <p class="brief">Breathtaking Himalayan peaks and ancient Buddhist temples create an unforgettable spiritual journey.</p>
                    <div class="stats-row">
                      <span class="Happiness Plans-count"><i class="bi bi-calendar-check"></i> 16 Happiness Planss</span>
                
                    </div>
               
                  </div>
                </div>
              </div>

              <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                <div class="compact-destination">
                  <div class="destination-image">
                    <img src="assets/img/treehouse.jpg" alt="Cultural Heritage" class="img-fluid">
                  </div>
                  <div class="destination-details">
                    <h4>Cultural Heritage</h4>
                    <p class="location"><i class="bi bi-geo-alt"></i> Peru</p>
                    <p class="brief">Discover ancient civilizations, colorful markets, and archaeological wonders in the heart of South America.</p>
                    <div class="stats-row">
                      <span class="Happiness Plans-count"><i class="bi bi-calendar-check"></i> 9 Expeditions</span>
                 
                    </div>
         
                  </div>
                </div>
              </div>

              <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                <div class="compact-destination">
                  <div class="destination-image">
                    <img src="assets/img/goa.jpg" alt="Safari Experience" class="img-fluid">
                    <div class="badge-offer limited">Limited Spots</div>
                  </div>
                  <div class="destination-details">
                    <h4>Boat Experience</h4>
                    <p class="location"><i class="bi bi-geo-alt"></i> Goa</p>
                    <p class="brief">Witness the Big Five and experience the great migration in Africa's most spectacular wildlife reserves.</p>
                    <div class="stats-row">
                      <span class="Happiness Plans-count"><i class="bi bi-calendar-check"></i> 11 Safaris</span>
               
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Featured Destinations Section -->


    <!-- Testimonials Home Section -->
    <section id="testimonials-home" class="testimonials-home section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div><span>What Our Customers</span> <span class="description-title">Are Saying</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>We hired Urbania taxi service from Happiness plans for 4 days. The trip was an out station family trip.
                    The driver was courteous and well behaved. The taxi condition was good. The owner Mr Harshit kept his promises as per our discussion.
                    I recommend the services to everyone.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/d.png" class="testimonial-img" alt="">
                <h3>Dr Jatin Agarwal's </h3>
             
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>A gorgeous n wonderful tour.
                    As a tourist I was fully satisfied. My expectations about Baku tour was little low but the way Harshit sir dealt with the free time situations was very good. Food traveling arrangements transfers n lastly guide team all where up to the mark.
                    Keep it up Happiness group.
                    I will definitely be a coustomer again for your service's.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/v.png" class="testimonial-img" alt="">
                <h3>Vineet Arora</h3>
          
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>It was great experience with Jehan Numa Retreat, Bhopal, visited with family. Happiness plans suggested this resort. It was seamless check-in experience, Happiness plans co-founder Mr. Harshit provided all required input to make the trip exciting. We recommend Happiness Plans for all you International and Domestic Travels experiences..</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/v.png" class="testimonial-img" alt="">
                <h3>Vandna Bhasaniya</h3>
     
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>We had a wonderful trip.Vehicle was very good and driver was also very polite and professional.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/s2.png" class="testimonial-img" alt="">
                <h3>Sumit Bohra</h3>
       
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Home Section -->


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
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- jQuery (for AJAX) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Stop default form submit

  const formData = new FormData(this);

  fetch('forms/contact.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
      Swal.fire('Message Sent', data.message, 'success');
      document.getElementById('contactForm').reset();
    } else {
      Swal.fire('Error', data.message || 'Something went wrong.', 'error');
    }
  })
  .catch(error => {
    Swal.fire('Error', 'Failed to send message. Try again.', 'error');
    console.error(error);
  });
});
</script>
</body>

</html>