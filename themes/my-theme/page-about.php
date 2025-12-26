<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About-Page</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/.style/about-page.css">


	<header class="header">
		<div class="container">
			<h1>Keiai Clinic</h1>
			<p>Fertility Treatment / IVF / Recurrent Pregnancy Loss</p>
		</div>
	</header>

	<main class="container">
		<section class="hero-section">
			<h2>Our Philosophy & Strengths</h2>
			<div class="image-placeholder main-banner">
				<span><img src="<?php echo get_template_directory_uri(); ?>/images/69.jpg" alt="Ohana Clinic"></span>
			</div>
		</section>

		<section class="philosophy-content">
			<div class="card">
				<h3>Our Philosophy</h3>
				<p class="tagline">"Fertility treatment with even better relationships"</p>
				<p>
					This phrase reflects our desire for patients, doctors, and staff to communicate well and build strong bonds. 
					We want to transform fertility treatment—which can often feel somber—into a positive and bright experience. 
					Our team of approximately 40 staff members is fully committed to helping as many patients as possible fulfill their dream of having a child.
				</p>
			</div>

			<div class="grid">
				<div class="card">
					<div class="image-placeholder small"><span>[Clinic Accessibility Image]</span></div>
					<h4>Accessible Treatment System</h4>
					<p>Located just 1 minute from Ikebukuro Station (Exit 35). We offer late-night consultations until 8:00 PM on Mon/Wed/Fri, and we are open on weekends and holidays.</p>
					<p>We conduct regular patient surveys to improve our services, ensuring that you can prioritize your work and life while receiving treatment.</p>
				</div>

				<div class="card">
					<div class="image-placeholder small"><span>[Doctor Consultation Image]</span></div>
					<h4>Consistency in Care</h4>
					<p>To avoid discrepancies in treatment plans, our Director personally handles the decision-making, examinations, and procedures. This ensures a consistent medical opinion and an environment where it is easy to communicate your wishes.</p>
				</div>

				<div class="card">
					<div class="image-placeholder small"><span>[Counseling Image]</span></div>
					<h4>Supportive Counseling</h4>
					<p>We have certified infertility counselors and midwives on staff. We listen closely to our patients and provide comprehensive support from various professional perspectives to alleviate any anxieties.</p>
				</div>

				<div class="card">
					<div class="image-placeholder small"><span>[Technology Image]</span></div>
					<h4>Advanced Technology & Research</h4>
					<p>We actively participate in academic conferences to stay updated with the latest medical knowledge. By sharing these insights with our entire team, we create the optimal environment for successful pregnancies.</p>
				</div>
			</div>
		</section>

		<section class="clinic-info">
			<h3>Medical Specialties & Access</h3>
			<p><strong>Address:</strong> 4F Fujiki Building, 1-12-8 Higashi-Ikebukuro, Toshima-ku, Tokyo 170-0013</p>
			<p><strong>Phone:</strong> 03-3987-3090</p>
		</section>
	</main>

	
	<?php get_footer(); ?>

</body>
</html>