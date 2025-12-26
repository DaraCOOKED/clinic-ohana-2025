<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About-Page</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/.style/about-page.css">

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

    </main>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Keiai Clinic. All Rights Reserved.</p>
    </footer>

	
	<?php get_footer(); ?>

</body>
</html>