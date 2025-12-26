<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Home Page | Inspired by Keiai</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php get_header(); ?>

    
    <header class="main-header">
        <div class="container">
            <div class="logo">KEIAI CLINIC STYLE</div>
            <nav class="nav-menu">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Treatments</a>
                <a href="#">Access</a>
                <a href="#" class="btn-reservation">Web Reservation</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-image-placeholder">
            <div class="hero-content">
                <h1>Warm Medical Care & Latest Technology</h1>
                <p>Supporting your journey with empathy and expertise.</p>
            </div>
        </div>
    </section>

    <section class="section strength">
        <div class="container">
            <h2 class="section-title">Our Strengths</h2>
            <div class="grid">
                <?php 
                $strengths = [
                    ['title' => 'Evening Access', 'desc' => 'Open until 20:00 for working patients.'],
                    ['title' => 'Proven Results', 'desc' => 'High pregnancy rates with advanced technology.'],
                    ['title' => 'Consistent Care', 'desc' => 'See the same doctor throughout your treatment.']
                ];
                foreach($strengths as $item): ?>
                    <div class="card hover-effect">
                        <div class="pic-space small"><span>Image Space</span></div>
                        <h3><?php echo $item['title']; ?></h3>
                        <p><?php echo $item['desc']; ?></p>
                        <a href="#" class="link-more">Learn More →</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section treatment">
        <div class="container">
            <h2 class="section-title">Medical Services</h2>
            <div class="grid-4">
                <?php 
                $services = ['IVF', 'Infertility Testing', 'General Treatment', 'Counseling'];
                foreach($services as $service): ?>
                    <div class="service-box hover-zoom">
                        <div class="pic-space medium"><span><?php echo $service; ?> Image</span></div>
                        <h4><?php echo $service; ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>