<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <!-- header  -->
   <?php require_once 'components/header.php' ?>
  <!-- end header  -->

</head>
<body class="about-page">
  
  <!-- navbar  -->
  <?php require_once 'components/navbar.php' ?>
  <!-- end navbar  -->
  <main class="main">
 

     <!-- Page Title -->
     <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Messages</h1>
     
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Message</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section id="travel-about" class="travel-about section">
  <div class="container mt-5">
    <h2>Submitted Contact Messages</h2>
    <div class="table-responsive mt-3">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Sl No.</th>
            <th>Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $file = 'contact_messages.txt';
          if (file_exists($file)) {
              $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
              $serial = 1;
              foreach ($lines as $line) {
                  $parts = explode('|', $line);
                  if (count($parts) === 5) {
                      echo '<tr>';
                      echo '<td>' . $serial++ . '</td>';
                      echo '<td>' . htmlspecialchars($parts[0]) . '</td>';
                      echo '<td>' . htmlspecialchars($parts[1]) . '</td>';
                      echo '<td>' . htmlspecialchars($parts[2]) . '</td>';
                      echo '<td>' . htmlspecialchars($parts[3]) . '</td>';
                      echo '<td>' . htmlspecialchars($parts[4]) . '</td>';
                      echo '</tr>';
                  }
              }
          } else {
              echo '<tr><td colspan="6">No messages found.</td></tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

        </section>
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
