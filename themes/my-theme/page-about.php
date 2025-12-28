<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About-Page</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/.style/about-page.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

</head>
<body>



<section class="same-doctor">
  <div class="same-doctor__container">
    <div class="same-doctor__text">
      <h2>Same doctor's visit</h2>
      <p>
        When multiple doctors treat one patient, there is a possibility that the treatment plan
        and explanations given by each doctor may differ. However, at our hospital, the director
        alone decides the treatment plan, performs the examination and surgery, so there are no
        differences of opinion between doctors. We listen to the opinions and wishes of patients
        and create an environment where communication is easy.
      </p>
    </div>

    <div class="same-doctor__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/nek-kru-india.jpg" alt="">
    </div>
  </div>
</section>
<section class="same-doctor">
  <div class="same-doctor__container">
    <div class="same-doctor__text">
      <h2>Counseling System</h2>
      <p>
        We have staff who are qualified infertility counselors and nurses with midwifery qualifications, so we can talk to you about a variety of topics.
        We listen carefully to what our patients have to say and all of our staff are eager to support you, so 
		please feel free to contact us with any concerns you may have.
      </p>
    </div>

    <div class="same-doctor__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/counseling-system.webp" alt="">
    </div>
  </div>
</section>


<section class="workspace-section">
  <h2 class="workspace-title">Our workspace</h2>

   <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-1.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-2.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-3.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-4.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-5.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-6.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-7.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-8.avif" alt="">
	  </div>
      <div class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/during-work-9.avif" alt="">
	  </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>


  <section class="appointment-cta">
  <div class="appointment-cta__container">
    <h2>Make an appointment with an ophthalmologist</h2>

    <p class="appointment-cta__phone">
      Have questions?
      <a href="tel:+855087465283">(+855) 097-566-9924</a>
    </p>

    <a href="/contact" class="appointment-cta__btn">
       	Book an Appointment
    </a>
  </div>
</section>



<section class="contact-section">
  <h2 class="contact-title">Contact Us</h2>

  <form class="contact-form">
    <div class="form-group">
      <label>Full Name</label>
      <input type="text" placeholder="Your full name" required>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label><p>Email</p></label>
        <input type="email" placeholder="e.g. adamsmith@company.com" required>
      </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" placeholder="e.g. 123-456-7890" required>
      </div>
    </div>

    <div class="form-group">
      <label>Message</label>
      <textarea placeholder="Your message"></textarea>
    </div>

    <button type="submit" class="submit-btn">Submit</button>
  </form>
</section>

<section>
<div class="swiper logoSwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/during-work-1.avif"></div>
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/during-work-2.avif"></div>
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/during-work-3.avif"></div>
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/during-work-4.avif"></div>
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/during-work-5.avif"></div>
  </div>
</div>
</section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
 
  <!-- Initialize Swiper -->
  <script>
    const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: 2.5,
  spaceBetween: 30,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  autoplay: {
    delay: 1250,
    disableOnInteraction: true,
	  pauseOnMouseEnter: true,
  },
});

for (let i = 0; i < array.length; i++) {
  const element = array[i];
  const swiper = new Swiper('.logoSwiper', {
    slidesPerView: 'auto',
    spaceBetween: 25,
    loop: true,
    speed: 1500,
    autoplay: {
      delay: 0,
      disableOnInteraction: true,
      pauseOnMouseEnter: true,
    },
  });
}

  </script>

  
f
	<?php get_footer(); ?>

</body>
</html>