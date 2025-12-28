<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Home Page | Inspired by Keiai</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/.style/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

    <?php get_header(); ?>







    <section class="hero">
        <div class="hero-content">
            <h1>Gentle Care, <br>Advanced Technology.</h1>
            <p>We provide a warm environment where patients feel heard and supported throughout their journey.</p>
            <a href="" class="cta-button">Learn More</a>
        </div>
    </section>

    <section class="strengths container">
        <h2 class="section-title">Our Strengths</h2>
        <div class="grid">
            <?php
            $strengths = [
                ["Title" => "Flexible Hours", "Desc" => "Open from 8:00 AM to 8:00 PM for working professionals."],
                ["Title" => "High Success Rates", "Desc" => "Utilizing the latest technology for optimal results."],
                ["Title" => "Consistent Care", "Desc" => "Consult with the same doctor for a personalized plan."]
            ];
            foreach ($strengths as $item): ?>
                <div class="card">
                    <h3><?php echo $item['Title']; ?></h3>
                    <p><?php echo $item['Desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <main class="container">


    <div class="nav-container">
        <?php
        $items = [
            ['icon' => 'fa-thumbs-up', 'text' => 'General Check-up'],
            ['icon' => 'fa-truck-medical', 'text' => 'Emergency & Trauma'],
            ['icon' => 'fa-heart', 'text' => 'Heart'],
            ['icon' => 'fa-lungs', 'text' => 'GI Center'], 
            ['icon' => 'fa-bone', 'text' => 'Bone'],
            ['icon' => 'fa-venus', 'text' => 'Women'],
            ['icon' => 'fa-baby', 'text' => 'Children'],
            ['icon' => 'fa-bed-pulse', 'text' => 'ICU'],
            ['icon' => 'fa-brain', 'text' => 'Brain'],
            ['icon' => 'fa-person-rays', 'text' => 'Urology']
        ];

        foreach ($items as $item) {
            echo "<div class='nav-item'>
                    <div class='icon-wrapper'>
                        <i class='fa-solid {$item['icon']}'></i>
                    </div>
                    <div class='text-label'>{$item['text']}</div>
                </div>";
        }
        ?>
    </div>





        <section class="strengths-grid">

            <div class="strength-card">
                <div class="image-placeholder small-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/doctor.png" alt="Ohana Clinic"> 
                
            </div>
                <h3>Accessible Medical Care</h3>
                <p>Located 1 minute from Ikebukuro Exit 35. We offer late hours until 8:00 PM (Mon/Wed/Fri) and are open on weekends and holidays. We prioritize your work-life balance by offering early 8:00 AM appointments so you can finish by 9:00 AM.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/care.png" alt="Ohana Clinic">
                </div>
                <h3>Consistent Care by the Director</h3>
                <p>To avoid discrepancies in treatment plans, the Director personally handles policy decisions, consultations, and surgeries. This ensures a consistent medical opinion and an environment where it is easy to communicate your wishes.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/counseling.png" alt="Ohana Clinic">
                </div>
                <h3>Counseling Support</h3>
                <p>Our staff includes certified infertility counselors and midwives. We listen closely to your concerns and provide support from various professional perspectives to ease your anxieties.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/technology.png" alt="Ohana Clinic">
                </div>
                <h3>Counseling Support</h3>
                <p>Our staff includes certified infertility counselors and midwives. We listen closely to your concerns and provide support from various professional perspectives to ease your anxieties.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/counseling.png" alt="Ohana Clinic">
                </div>
                <h3>Counseling Support</h3>
                <p>Our staff includes certified infertility counselors and midwives. We listen closely to your concerns and provide support from various professional perspectives to ease your anxieties.</p>
            </div>

            <div class="strength-card">
                <div class="image-placeholder small-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/technology.png" alt="Ohana Clinic">
                </div>
                <h3>Advanced Technology</h3>
                <p>We actively participate in academic conferences to integrate the latest medical knowledge. By creating the optimal culture environment and using cutting-edge testing, we strive to maximize pregnancy success rates.</p>
            </div>

        </section>

       
        <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/image1.jpg" alt="Ohana Clinic"></div>
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/image2.jpg" alt="Ohana Clinic"></div>
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/image3.jpg" alt="Ohana Clinic"></div>
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/image4.avif" alt="Ohana Clinic"></div>
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/image5.jpg" alt="Ohana Clinic"></div>
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/image6.jpg" alt="Ohana Clinic"></div>
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/image7.jpeg" alt="Ohana Clinic"></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>



    


        <section class="referral-section">
            <h2 class="section-title">Specialized Network</h2>
            <p>We provide a wide range of specialized care, including gynecological oncology with Professor Kyoko Tanaka, male infertility specialists, and fetal ultrasounds with Professor Mamoru Tanaka from Keio University. We ensure you receive the best care through our extensive medical network.</p>
        </section>

    </main>



    <?php get_footer(); ?>
</body>
</html>