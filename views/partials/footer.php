<?php use App\Constants\ContactConstants; ?>

<footer class="savadub-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">

                <!-- Brand Column -->
                <div class="col-lg-4">
                    <a class="footer-logo" href="index/">
                        <span class="savadub-logo__mark">S</span>
                        <span class="savadub-logo__text">SAVADUB <span class="savadub-logo__tag">Limited</span></span>
                    </a>
                    <p class="footer-tagline mt-3">
                        A Global Venture &amp; Talent Studio. Bridging expressive innovation with global execution.
                    </p>
                    <div class="footer-social mt-4">
                        <a href="<?= ContactConstants::$linkedin ?>" class="footer-social__link" aria-label="LinkedIn"
                            target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                        <a href="<?= ContactConstants::$twitter ?>" class="footer-social__link" aria-label="Twitter/X"
                            target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter-x"></i></a>
                        <a href="<?= ContactConstants::$instagram ?>" class="footer-social__link" aria-label="Instagram"
                            target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
                        <a href="<?= ContactConstants::$youtube ?>" class="footer-social__link" aria-label="YouTube"
                            target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Ventures -->
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Ventures</h6>
                    <ul class="footer-links">
                        <li><a href="ventures/">All Ventures</a></li>
                        <li><a href="ventures/#lawsava">LawSava</a></li>
                    </ul>
                </div>

                <!-- Labs -->
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Labs</h6>
                    <ul class="footer-links">
                        <li><a href="labs/">Overview</a></li>
                    </ul>
                </div>

                <!-- Mobility -->
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Mobility</h6>
                    <ul class="footer-links">
                        <li><a href="mobility/">Overview</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Company</h6>
                    <ul class="footer-links">
                        <li><a href="about/">About Us</a></li>
                        <li><a href="about/#team">Our Team</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="footer-copyright">
                        &copy; <span id="footerYear"></span> Savadub Limited. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="footer-legal-link">Privacy Policy</a>
                    <span class="footer-legal-sep">·</span>
                    <a href="#" class="footer-legal-link">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
document.getElementById('footerYear').textContent = new Date().getFullYear();
</script>