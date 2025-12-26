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
	<?php get_header(); ?>
	
	
<section class="page-hero">
  <div class="page-hero-inner">
    <h1>Our hospital philosophy and strengths</h1>

    <nav class="breadcrumb">
      <a href="#">Home</a>
      <span>›</span>
      <a href="#">About our hospital</a>
      <span>›</span>
      <span class="current">Our hospital philosophy and strengths</span>
    </nav>
  </div>
</section>
<section class="philosophy">
  <div class="philo-inner">
    <h2>Our hospital philosophy</h2>
    <div class="philo-line"></div>

    <p class="philo-quote">“More friendly infertility treatment”</p>

    <p class="philo-text">
      These words express our desire to encourage communication and friendship between patients,
      doctors, and staff, so that infertility treatment, which can often be a gloomy experience,
      can be carried out in a positive manner. Our approximately 40 staff members will do their
      utmost to support as many patients as possible so that they can have children.
    </p>
  </div>
</section>





<section class="info-section">
  <div class="info-wrap">
	
    <div class="info-text">
		
      <p>
        Located a one-minute walk from Ikebukuro Exit 35, our clinic is open weekdays from
        8:00 AM to 8:00 PM (Mondays, Wednesdays, and Fridays), including weekends and holidays.
        We strive to remain a convenient clinic for our patients. To that end, we regularly
        conduct patient surveys and incorporate their feedback.
      </p>

      <p>
        Based on many of our patients' feedback, we have established a system where patients
        can arrive at our clinic at 8:00 AM on weekdays and have their consultation and payment
        completed by 9:00 AM, allowing them to prioritize their work and life commitments.
        Additionally, for those who wish to leave the clinic earlier than 9:00 AM, we offer a
        system where patients can leave immediately after their blood draw and pelvic exam and
        receive the results and treatment plan via phone.
      </p>
    </div>

    <div class="info-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Doctor-1.jpg" alt="Clinic location" />
    </div>
  </div>
</section>

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
    delay: 1500,
    disableOnInteraction: true,
	pauseOnMouseEnter: true,
  },
});

  </script>

	
	<?php get_footer(); ?>

</body>
</html>