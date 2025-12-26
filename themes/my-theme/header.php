<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?></head>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<body <?php body_class(); ?>>
<header class="clinic-header">
  <div class="header-inner">
    <div class="logo">
      <a href="#">Ohana Clinic</a>
    </div>

    <nav class="main-nav">
      <a href="#">Home</a>
      <a href="#">First Visit</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Access</a>
      <a href="#">Contact</a>
    </nav>

    <div class="header-cta">
      <span class="phone">03-3987-3090</span>
      <a href="#" class="book">Web Booking</a>
    </div>
  </div>
</header>





<main>
