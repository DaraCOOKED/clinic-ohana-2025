<?php get_header(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
     integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/.style/contact-us.css">

<!-- Header -->

<section class="page-hero">
  <div class="hero-inner">
    <h1>The hospital Contact</h1>
    <nav class="breadcrumb">
      <a href="#">Home</a>
      <span>›</span>
      <a href="#">Contact our hospital</a>
      <span>›</span>
      <span class="current">The Our contact hospital </span>
    </nav>
  </div>
</section>


<section class="inquiry-section">
  <div class="inquiry-container">
    <h2 class="inquiry-title">inquiry</h2>
    <div class="inquiry-line"></div>

    <p class="inquiry-text">
      We accept inquiries by phone or through the inquiry form below.<br>
      If your inquiry is urgent, please contact us by phone.
    </p>

    <a href="tel:0339873090" class="inquiry-phone">
      <span class="phone-icon"><i class="fa-brands fa-telegram"></i></span>
      097-9999-044
    </a>
  </div>
</section>

<section class="contact-form-section">
  <div class="contact-container">
    <h2 class="contact-title">Contact form</h2>
    <div class="contact-line"></div>

    <form class="contact-form">
      <div class="form-row">
        <label>Type of inquiry <span class="required">Required</span></label>
        <select class="nice-select">
    <option>About medical treatment</option>
    <option>About appointment</option>
    <option>Other</option>
    </select>

      </div>

      <div class="form-row">
        <label>Name <span class="required">Required</span></label>
        <input type="text">
      </div>

      <div class="form-row">
        <label>Furigana <span class="required">Required</span></label>
        <input type="text">
      </div>

      <div class="form-row">
        <label>Email address <span class="required">Required</span></label>
        <input type="email">
      </div>

      <div class="form-row">
        <label>Telephone number <span class="required">Required</span></label>
        <input type="tel">
      </div>

      <div class="form-row textarea-row">
        <label>Inquiry details <span class="required">Required</span></label>
        <textarea rows="5"></textarea>
      </div>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</section>

<section class="about-me">
  <h2 class="section-title">The Responsible</h2>

  <div class="about-wrapper">
    <!-- Left -->
    <div class="about-left">
      <h3 class="name">Mr junpank</h3>
      <p class="role">The owner of the Clinic</p>

      <p class="desc">
        Our doctor is a highly qualified and experienced medical professional dedicated to providing safe, effective, and compassionate care.
         With a strong commitment to patient well-being, they focus on accurate diagnosis, personalized treatment, and 
         long-term health support. Every patient is treated with respect, care, and the highest medical standards
      </p>

      <ul class="info">
        <li><i class="fa-solid fa-location-crosshairs"></i> Phnom Penh, Cambodia</li>
        <li><i class="fa-regular fa-message"></i> somnang@example.com</li>
        <li>🌐 ohana-clinic.com</li>
      </ul>
    </div>

    <!-- Center -->
    <div class="about-center">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image3.jpg" alt="Profile">
    </div>

    <!-- Right -->
    <div class="about-right">
      <h4>My Professional Skills</h4>

      <div class="skill">
        <span>Medical Knowledge</span>
        <div class="bar"><div style="width:95%"></div></div>
      </div>

      <div class="skill">
        <span>Patient Care</span>
        <div class="bar"><div style="width:85%"></div></div>
      </div>

      <div class="skill">
        <span>Professionalism</span>
        <div class="bar"><div style="width:90%"></div></div>
      </div>

      <div class="skill">
        <span>Interpersonal & Communication Skills</span>
        <div class="bar"><div style="width:80%"></div></div>
      </div>
    </div>
  </div>
</section>










<?php get_footer(); ?>