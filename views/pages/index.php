<?php
    $pageTitle = "Home — Savadub Limited"; 
    $pageDescription = "Savadub Limited is a global venture and talent studio bridging African innovation with worldwide execution through engineering, SaaS products, and talent mobility.";

    // Start capturing the HTML content
    ob_start(); 
?>


<div>
    <!-- ===== HERO ===== -->
    <section class="hero-section pb-5" id="home">
        <div class="hero-bg-grid"></div>
        <div class="hero-orb hero-orb--1"></div>
        <div class="hero-orb hero-orb--2"></div>
        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-hero">
                <div class="col-lg-7">
                    <div class="hero-eyebrow mb-3" data-aos="fade-up" data-aos-delay="100">
                        <span class="badge-label">Global Venture &amp; Talent Studio</span>
                    </div>
                    <h1 class="hero-headline" data-aos="fade-up" data-aos-delay="200">
                        Where Expressive <span class="text-accent-red">Innovation</span><br>
                        Meets Global <span class="text-accent-blue">Execution</span>
                    </h1>
                    <p class="hero-subtext mt-4" data-aos="fade-up" data-aos-delay="300">
                        We bridge the gap between ambition and achievement — building high-growth SaaS,
                        engineering world-class digital products, and mobilizing elite African talent
                        for the global market.
                    </p>
                    <div class="hero-cta-group mt-5" data-aos="fade-up" data-aos-delay="400">
                        <a href="/ventures" class="btn btn-savadub-primary me-3">Explore Ventures</a>
                        <a href="#three-gates" class="btn btn-savadub-outline">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-flex justify-content-center" data-aos="fade-left" data-aos-delay="300">
                    <div class="hero-visual">
                        <div class="hero-globe-ring ring-1"></div>
                        <div class="hero-globe-ring ring-2"></div>
                        <div class="hero-globe-ring ring-3"></div>
                        <div class="hero-logo-mark">
                            <svg viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" width="120">
                                <text x="0" y="65" font-family="Syne" font-weight="800" font-size="72"
                                    fill="white">S</text>
                                <text x="42" y="65" font-family="Syne" font-weight="800" font-size="72"
                                    fill="#DD3333">L</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stat bar -->
            <div class="hero-stats-bar" data-aos="fade-up" data-aos-delay="500">
                <div class="row g-0">
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <span class="stat-number">6<span class="stat-plus">+</span></span>
                            <span class="stat-label">Startups Founded</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Active Ventures</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Global Pillars</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <span class="stat-number">∞</span>
                            <span class="stat-label">Possibilities</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php 
    // Save the captured HTML into a variable
    $content = ob_get_clean(); 

    // Load the layout and inject the variable
    include ROOT_PATH . '/views/layouts/index.php'; 
?>