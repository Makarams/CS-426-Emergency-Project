<footer class="footer">
    <div class="footer-container text-center">
        <div class="footer-row">
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">About</h3>
                <a href="{{ route('mission-statement') }}">Mission Statement</a><br>
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a><br>
                <a href="{{ route('terms-of-service') }}">Terms of Service</a>
            </div>
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">Contact</h3>
                <a href="{{ route('police-station') }}">Police Station</a><br>
                <a href="{{ route('fire-fighter') }}">Fire Fighter</a><br>
                <a href="{{ route('medical-facility') }}">Medical Facility</a>
            </div>
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">Emergency</h3>
                <a href="{{ route('emergency-hotline') }}">Emergency Hotline</a><br>
                <a href="{{ route('medical-emergency') }}">Medical Emergency</a><br>
                <a href="{{ route('medical-transport') }}">Medical Transport</a><br>
                <a href="{{ route('fire-emergency') }}">Fire Emergency</a>
            </div>
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">Guidance</h3>
                <a href="{{ route('safety-tips') }}">Safety Tips</a><br>
                <a href="{{ route('crime-prevention') }}">Crime Prevention</a><br>
                <a href="{{ route('legal-advice') }}">Legal Advice</a><br>
                <a href="{{ route('user-guide') }}">User Guide</a><br>
                <a href="{{ route('faqs') }}">Frequently Asked Questions (FAQs)</a><br>
                <a href="{{ route('emergency-preparedness') }}">Emergency Preparedness</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <h3 class="footer-heading mb-4">Follow Us</h3>
            <div class="footer-socials">
                <a href="https://www.facebook.com" class="footer-social">
                    <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
                </a>
                <a href="https://www.instagram.com" class="footer-social">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
                </a>
                <a href="https://twitter.com" class="footer-social">
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter">
                </a>
                <a href="https://www.whatsapp.com" class="footer-social">
                    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp">
                </a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <p class="text-muted" style="color: #ffffff;">© 2023 emergency.gov.kh. All rights reserved.</p>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top" id="backToTopButton" title="Back to Top">&uarr;</a>
</footer>

<link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
<script>
// Back-to-top button functionality
var backToTopButton = document.getElementById("backToTopButton");
window.addEventListener("scroll", function() {
    if (window.pageYOffset > 100) {
        backToTopButton.classList.add("show");
    } else {
        backToTopButton.classList.remove("show");
    }
});

backToTopButton.addEventListener("click", function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>