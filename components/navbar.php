<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.jpg" alt="logo" class="logo-img">
        <h1 class="sitename">Happiness Plans</h1>
      </a>
      <?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
    <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About</a></li>
    <li><a href="destinations.php" class="<?= ($currentPage == 'destinations.php') ? 'active' : '' ?>">Destinations</a></li>
    <li><a href="gallery.php" class="<?= ($currentPage == 'gallery.php') ? 'active' : '' ?>">Gallery</a></li>
    <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
    <li><a href="admin.php" class="<?= ($currentPage == 'admin.php') ? 'active' : '' ?>">Admin</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>



    </div>
  </header>