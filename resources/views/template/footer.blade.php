<footer>
    <div class="footer-container">
        <div class="footer-sec-1 footer-row-1">
            <div class="footer-logo">
                <img src="{{ asset('images/cloudcopylogo-cropped.png') }}" alt="Company logo for cloud copy">
            </div>
            <div class="footer-social-links">
                <a href="{{ url('/linkedin') }}"><ion-icon name="logo-linkedin"></ion-icon></a>
                <a href="{{ url('/twitter') }}"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="{{ url('/facebook') }}"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="{{ url('/instagram') }}"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
        <div class="footer-sec-2 footer-row-1">
            <h3>Navigate</h3>
            <div class="footer-nav-links">
                <a href="{{ URL::to('/services') }}">Services</a>
                <a href="{{ URL::to('/about') }}">About</a>
                <a href="{{ URL::to('/portfolio') }}">Portfolio</a>
                <a href="{{ URL::to('/contact') }}">Contact</a>
            </div>
        </div>
        <div class="footer-sec-3 footer-row-1">
            <h3>Get in Touch</h3>
            <p>Get in touch. Contact us to discuss your business requirements.</p>
            <div class="footer-cta-links">
                <a href="{{ URL::to('/contact') }}" class="footer-cta">Get in Touch</a>
                <span class="footer-cta">+447517773093</span>
            </div>
        </div>
        <div class="footer-sec-4 footer-row-2">
            <p id="copyright">Copyright &copy; Cloud Copy. All Rights Reserved.</p>
        </div>
        <div class="footer-sec-5 footer-row-2">
            <a href="{{ URL::to('/tc') }}">Terms and Conditions</a>
            <a href="{{ URL::to('/pp') }}">Privacy Promise</a>
        </div>
    </div>
</footer>