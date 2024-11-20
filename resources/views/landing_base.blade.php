@include('partials._landing_header')


        <div class="main-container">
            @yield('content')
        </div>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets_landing/vendor/php-email-form/validate.js"></script>
        <script src="assets_landing/vendor/aos/aos.js"></script>
        <script src="assets_landing/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets_landing/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets_landing/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets_landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>

        <!-- Main JS File -->
        <script src="assets_landing/js/main.js"></script>

@include('partials._footer')
