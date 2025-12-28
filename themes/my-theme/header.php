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
                     
    <nav class="pro-nav">
      <a href="">Home</a> 
      <a href="">About</a>
      <a href="">Services</a>
      <a href="">Doctors</a>
      <a href="">Careers</a>
      <a href="">Contact Us</a>
    </nav>

    <a href="" class="pro-cta">Find Us</a>

  </div>
</header>





<main>
