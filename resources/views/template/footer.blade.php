<footer>
    <div class="footer-container">
        <div class="footer-row-1">
            <div class="footer-page-links">
                <div class="page-link">
                    <h3>Services</h3>
                    <ul class="page-link-list">
                        <a href="{{ URL::to('/services') }}"><li>Packages</li></a>
                        <a href="{{ URL::to('/services') }}"><li>Why Choose Us</li></a>
                    </ul>
                </div>
                <div class="page-link">
                    <h3>About</h3>
                    <ul class="page-link-list">
                        <a href="{{ URL::to('/about') }}"><li>Our Product</li></a>
                        <a href="{{ URL::to('/about') }}"><li>How We Work</li></a>
                        <a href="{{ URL::to('/about') }}"><li>Our Service To You</li></a>
                    </ul>
                </div>
                <div class="page-link">
                    <h3>Portfolio</h3>
                    <ul class="page-link-list">
                        <a href="{{ URL::to('/portfolio') }}"><li>View Projects</li></a>
                    </ul>
                </div>
                <div class="page-link">
                    <h3>Contact</h3>
                    <ul class="page-link-list">
                        <a href="{{ URL::to('/contact') }}"><li>Get in Touch</li></a>
                    </ul>
                </div>
            </div>
            <div class="footer-social-links">
                <ion-icon name="logo-linkedin"></ion-icon>
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-instagram"></ion-icon>
            </div>
        </div>
        <div class="footer-row-2">
            <div class="footer-row-2-text">
                <div class="footer-copyright">
                    <p>Copyright &copy; Cloud Copy. All Rights Reserved.</p>
                </div>
                <div class="footer-leg">
                    <a href="#">Terms and Conditions</a>
                    <a href="#">Privacy Promise</a>
                </div>
            </div>
        </div>
    </div>
</footer>