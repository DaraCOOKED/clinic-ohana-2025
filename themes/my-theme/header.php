<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?></head>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<body <?php body_class(); ?>>
<header class="clinic-header">
  <div class="header-inner">
    <div class="logo">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/output.png" alt=""></a>
    </div>
    <button class="mobile-toggle" aria-label="Toggle menu">
  <span></span>
  <span></span>
  <span></span>
</button>

  <nav class="pro-nav" id="main-nav">

  <a href="http://clinic-ohana.test/">Home</a>

  <div class="nav-dropdown">
    <a href="http://clinic-ohana.test/about/" class="dropdown-toggle">About</a>

    <div class="dropdown-menu">
      <a href="http://clinic-ohana.test/about/">Our hospital</a>
      <a href="http://clinic-ohana.test/about/treatment-results/">Treatment results</a>
      <a href="http://clinic-ohana.test/about/director-introduction/">Director introduction</a>
      <a href="http://clinic-ohana.test/about/doctor-introduction/">Doctor introduction</a>
      <a href="http://clinic-ohana.test/about/introduction-to-the-hospital/">Introduction to the hospital</a>
    </div>
  </div>

  <a href="http://clinic-ohana.test/services/">Services</a>
  <a href="http://clinic-ohana.test/doctors/">Doctors</a>
  <a href="http://clinic-ohana.test/careers/">Careers</a>
  <a href="http://clinic-ohana.test/contact-us/">Contact Us</a>

</nav>




  </div>
</header>
<script>




document.addEventListener("DOMContentLoaded", function () {

  const toggle = document.querySelector(".mobile-toggle");
  const nav = document.getElementById("main-nav");
  const dropdown = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.querySelector(".dropdown-menu");

  if (!toggle || !nav) {
    console.log("Menu elements not found");
    return;
  }

  // Toggle main menu
  toggle.addEventListener("click", function () {
    nav.classList.toggle("active");
  });

  // Toggle dropdown on mobile
  if (dropdown && dropdownMenu) {
    dropdown.addEventListener("click", function (e) {
      if (window.innerWidth < 992) {
        e.preventDefault();
        dropdownMenu.style.display =
          dropdownMenu.style.display === "block" ? "none" : "block";
      }
    });
  }

  // Close dropdown when clicking outside
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".nav-dropdown")) {
      if (dropdownMenu) dropdownMenu.style.display = "none";
    }
  });

});




</script>




<main>
