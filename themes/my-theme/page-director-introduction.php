<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/.style/director-introduction.css">



<section class="page-hero">
  <div class="hero-inner">
    <h1>Director Introduction</h1>

    <nav class="breadcrumb">
      <a href="#">Home</a>
      <span>›</span>
      <a href="#">About our hospital</a>
      <span>›</span>
      <span class="current">Our hospital philosophy and strengths</span>
    </nav>
  </div>
</section>





<section class="director-section">
  <div class="director-container">
    
    <div class="director-text">
      <h2 class="director-title">Director: Mr. Dubai Meng</h2>

      <p class="director-message">
        We strive to provide warm medical care and cutting-edge technology that fully respects the feelings of each patient.
      </p>

      <ul class="director-list">
        <li><strong>Doctor of Medicine, Keio University</strong></li>
        <li>Japan Society of Obstetrics and Gynecology Certified Obstetrician-Gynecologist</li>
        <li>Certified Clinical Geneticist by the Japan Society of Human Genetics and the Japan Society of Genetic Counseling (until March 2024)</li>
        <li>Japan Society of Reproductive Medicine certified reproductive medicine specialist and instructor</li>
        <li>Maternal protection law designated doctor</li>
        <li>Part-time lecturer at Keio University School of Medicine</li>
      </ul>
    </div>

    <div class="director-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/mrdubai.jpg" alt="Director Yuji Takehara">
    </div>

  </div>
</section>


<section class="career-section">
  <div class="career-container">

    <h2 class="career-title">Career</h2>
    <span class="career-line"></span>

    <p class="career-desc">
      After completing my medical training, I have worked in several hospitals and clinics,
      focusing on women’s health, prenatal care, and minimally invasive surgery. Below is a summary
      of my professional experience.
    </p>

    <div class="career-table">
      <div class="career-row career-head">
        <div>Tenure</div>
        <div>Track Record</div>
        <div>Job Type</div>
      </div>

      <div class="career-row">
        <div>2015 – 2018</div>
        <div>General Hospital, Department of Obstetrics and Gynecology</div>
        <div>Resident Doctor</div>
      </div>

      <div class="career-row">
        <div>2018 – 2020</div>
        <div>City Women’s Clinic</div>
        <div>Obstetrician-Gynecologist</div>
      </div>

      <div class="career-row">
        <div>2020 – 2023</div>
        <div>International Medical Center</div>
        <div>Senior Specialist</div>
      </div>

      <div class="career-row">
        <div>2023 – Present</div>
        <div>Sunrise Fertility Clinic</div>
        <div>Medical Director</div>
      </div>

    </div>

  </div>
</section>


<section class="affiliation-section">
  <div class="affiliation-container">

    <h2 class="affiliation-title">Affiliated academic societies, etc.</h2>
    <span class="affiliation-line"></span>

    <ul class="affiliation-list">
      <li>Japanese Fertilization and Implantation Society — Councilor</li>
      <li>Chief Secretary of Toshima Ward Obstetricians and Gynecologists Association</li>
      <li>Japan Society of Obstetrics and Gynecology</li>
      <li>Japan Society for Reproductive Medicine</li>
      <li>Japanese Society for Regenerative Medicine</li>
      <li>Tokyo Obstetrician and Gynecologists Association</li>
      <li>Toshima Ward Medical Association</li>
      <li>Suginami Ward Keio Sanshikai</li>
    </ul>

  </div>
</section>



<script>
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".director-section");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add("active");
      }
    });
  }, { threshold: 0.3 });

  observer.observe(section);
});
</script>


<?php get_footer(); ?>  