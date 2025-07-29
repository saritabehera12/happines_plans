<?php
session_start();
$login_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';

    // Replace this with your own secure password
    $correct_password = 'admin123';

    if ($password === $correct_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: message.php');
        exit;
    } else {
        $login_error = 'Invalid password.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <!-- header  -->
   <?php require_once 'components/header.php' ?>
  <!-- end header  -->

</head>
<body>

<body class="about-page">
  
  <!-- navbar  -->
  <?php require_once 'components/navbar.php' ?>

   <!-- Page Title -->
   <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Login</h1>
        
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Admin Login</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
  <!-- end navbar  -->
    <main class="main">
        <section id="travel-about" class="travel-about section">
            <div class="container mt-5" style="max-width: 400px;">
                <h3 class="mb-4">Admin Login</h3>
                <?php if ($login_error): ?>
                    <div class="alert alert-danger"><?= $login_error ?></div>
                <?php endif; ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="password" class="form-label">Enter Admin Password</label>
                        <input type="password" name="password" class="form-control" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
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
