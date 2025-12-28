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
  <a href="http://clinic-ohana.test/">Home</a>

  <!-- 👇 ONLY THIS PART WILL CHANGE -->
  <div class="nav-dropdown">
    <a href="http://clinic-ohana.test/about/" class="dropdown-toggle">
      About
    </a>

    <div class="dropdown-menu">
      <a href="http://clinic-ohana.test/about/">Our hospital<span>›</span></a>
      <a href="http://clinic-ohana.test/about/treatment-results/">Treatment results <span>›</span></a>
      <a href="http://clinic-ohana.test/about/director-introduction/">Director introduction <span>›</span></a>
      <a href="http://clinic-ohana.test/about/doctor-introduction/">Doctor introduction <span>›</span></a>
      <a href="http://clinic-ohana.test/about/introduction-to-the-hospital/">Introduction to the hospital <span>›</span></a>
    </div>
  </div>
  <!-- 👆 END -->

  <a href="http://clinic-ohana.test/services/">Services</a>
  <a href="http://clinic-ohana.test/doctors/">Doctors</a>
  <a href="http://clinic-ohana.test/careers/">Careers</a>
  <a href="http://clinic-ohana.test/contact-us/">Contact Us</a>
</nav>



  </div>
</header>
<script>
document.querySelector('.dropdown-toggle').addEventListener('click', function(e) {
  e.preventDefault();
  const menu = this.nextElementSibling;
  menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});

// close when clicking outside
document.addEventListener('click', function(e) {
  if (!e.target.closest('.nav-dropdown')) {
    document.querySelector('.dropdown-menu').style.display = 'none';
  }
});
</script>





<main>
