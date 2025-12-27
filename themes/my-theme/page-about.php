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

	<header class="hero-section">
        <div class="overlay">
			<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="Ohana Clinic">
            <div class="hero-content">
                <h1>Our Philosophy & Strengths</h1>
                <p>Supporting your journey to parenthood with care and expertise.</p>
            </div>
        </div>
    </header>

    <main class="container">
        
        <section class="philosophy-main">
            <div class="text-block">
                <h2 class="section-title">Clinic Philosophy</h2>
                <h3 class="catchphrase">"Friendlier Infertility Treatment"</h3>
                <p>
                    This phrase embodies our wish for patients, doctors, and staff to communicate openly and build friendly relationships. Infertility treatment can often feel overwhelming or gloomy; we aim to make the process as bright and supportive as possible. Our team of approximately 40 staff members is dedicated to helping as many patients as possible realize their dream of having a child.
                </p>
            </div>
            <div class="image-placeholder main-img">
                <span>IMAGE: CLINIC INTERIOR / TEAM PHOTO</span>
            </div>
        </section>

        <section class="strengths-grid">
            
            <div class="strength-card">
                <div class="image-placeholder small-img"><span>IMAGE: ACCESSIBILITY</span></div>
                <h3>Accessible Medical Care</h3>
                <p>Located 1 minute from Ikebukuro Exit 35. We offer late hours until 8:00 PM (Mon/Wed/Fri) and are open on weekends and holidays. We prioritize your work-life balance by offering early 8:00 AM appointments so you can finish by 9:00 AM.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img"><span>IMAGE: DOCTOR</span></div>
                <h3>Consistent Care by the Director</h3>
                <p>To avoid discrepancies in treatment plans, the Director personally handles policy decisions, consultations, and surgeries. This ensures a consistent medical opinion and an environment where it is easy to communicate your wishes.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img"><span>IMAGE: COUNSELING</span></div>
                <h3>Counseling Support</h3>
                <p>Our staff includes certified infertility counselors and midwives. We listen closely to your concerns and provide support from various professional perspectives to ease your anxieties.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img"><span>IMAGE: TECHNOLOGY</span></div>
                <h3>Advanced Technology</h3>
                <p>We actively participate in academic conferences to integrate the latest medical knowledge. By creating the optimal culture environment and using cutting-edge testing, we strive to maximize pregnancy success rates.</p>
            </div>

        </section>

        <section class="referral-section">
            <h2 class="section-title">Specialized Network</h2>
            <p>We provide a wide range of specialized care, including gynecological oncology with Professor Kyoko Tanaka, male infertility specialists, and fetal ultrasounds with Professor Mamoru Tanaka from Keio University. We ensure you receive the best care through our extensive medical network.</p>
        </section>

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