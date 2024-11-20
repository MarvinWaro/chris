@extends('landing_base')

@section('content')


    <x-landing_header />

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section accent-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="assets_landing/img/ched/ched_building.jpg" alt="">
                    <div class="carousel-container text-center text-white">
                        <h2 style="font-size: 2.5rem; font-weight: bold;">Welcome to CHRIS</h2>
                        <p class="text-white mb-1" style="font-size: 1.2rem;">Empowering Human Resources with streamlined recruitment, efficient management, and advanced technology. Discover how CHRIS can redefine HR practices for your organization.</p>
                        <a href="#featured-services" class="btn-get-started">Get Started</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets_landing/img/hero-carousel/hero-carousel-2.jpg" alt="">
                    <div class="carousel-container text-center text-white">
                        <h2 style="font-size: 2.5rem; font-weight: bold;">Comprehensive HR Management</h2>
                        <p class="text-white mb-1" style="font-size: 1.2rem;">From recruiting top talent to managing employee data and payroll, CHRIS simplifies every aspect of HR with a user-friendly interface and powerful tools.</p>
                        <a href="#featured-services" class="btn-get-started">Learn More</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets_landing/img/hero-carousel/hero-carousel-3.jpg" alt="">
                    <div class="carousel-container text-center ">
                        <h2 style="font-size: 2.5rem; font-weight: bold;">Streamline & Innovate</h2>
                        <p class="text-white mb-1" style="font-size: 1.2rem;">Automate HR workflows, ensure data accuracy, and enhance decision-making with CHRIS. Your one-stop solution for human resource excellence.</p>
                        <a href="#featured-services" class="btn-get-started">Discover More</a>
                    </div>
                </div>



            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section light-background">

            <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-activity icon"></i></div>
                    <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                    <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                    <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
                </div><!-- End Service Item -->

            </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About CHRIS</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <!-- Image Section -->
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/ched/placeholder.jpeg') }}" class="img-fluid responsive-image" alt="Responsive Placeholder">
                    </div>

                    <!-- Content Section -->
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <p data-aos="fade-up">
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </p>
                    </div>
                </div>

                <div class="row gy-4 my-4">
                    <p data-aos="fade-up" data-aos-delay="100">
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>
                </div>


                <div class="row gy-4">
                    <!-- Content Section -->
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </p>
                    </div>

                    <!-- Image Section -->
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/ched/placeholder.jpeg') }}" class="img-fluid responsive-image" alt="Responsive Placeholder">
                    </div>
                </div>

                <div class="row gy-4 my-4">
                    <p data-aos="fade-up" data-aos-delay="100">
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        quae voluptates maxime veritatis corrupti itaque ipsam adipisci deserunt nulla magnam sint, at veniam sunt assumenda modi!
                        Id sed dolores repellat, optio ex nostrum voluptatibus alias praesentium consequuntur nulla commodi, perferendis veritatis. Eius quo non repellendus repellat voluptatibus modi mollitia eos deleniti doloremque corporis? Quisquam, est sequi.
                        Ea adipisci fugit animi soluta recusandae obcaecati voluptas optio! Quidem ea adipisci magnam pariatur explicabo deserunt quo. Blanditiis voluptas inventore temporibus distinctio, quisquam illo incidunt aspernatur. Quae, velit unde. Velit.
                        Quibusdam incidunt et perferendis officia dolorem commodi quos deleniti totam. Iusto, quae. Iusto, ipsum magnam optio itaque, incidunt non nihil, omnis ea nam ratione explicabo natus reiciendis quo. Error, adipisci.
                        Eveniet corrupti commodi vel. Tempore, ad molestiae, iusto blanditiis sequi reiciendis veritatis repellat obcaecati deserunt sunt et consequuntur neque natus incidunt, a praesentium temporibus libero vitae autem unde. Quia, incidunt!
                        Eum quibusdam omnis at mollitia, quisquam ipsam animi qui, cum repudiandae esse fuga molestiae et ipsa aliquid officiis adipisci nam non perspiciatis ipsum quo reiciendis deserunt sit! Illo, nihil ad!
                        usandae nisi velit at dolor a saepe dolore nesciunt odio doloribus dicta? Est quidem, similique nam eum esse dolorum facilis nesciunt dolore id, eveniet consectetur.
                    </p>
                </div>


            </div>

        </section><!-- /About Section -->

        <!-- Alt Services Section -->
        <section id="opening" class="alt-services section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Open Position</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="img">
                            <img src="assets_landing/img/ched/accountant.jpg" class="img-fluid" alt="Accountant Image">
                        </div>
                        <div class="details">
                            <a href="{{ route('applicant_form') }}" class="stretched-link">
                                <h3>Accountant</h3>
                            </a>
                            <p>Manage financial records, prepare reports, and ensure compliance with regulations. Ideal for detail-oriented professionals. <a href="#!" class="text-info">Read More</a></p>

                            <!-- Row with 2 columns for buttons -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <a href="{{ route('applicant_form') }}" type="button" class="btn btn-success w-100">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="img">
                            <img src="assets_landing/img/ched/journalist.jpg" class="img-fluid" alt="Journalist Image">
                        </div>
                        <div class="details">
                            <a href="{{ route('applicant_form') }}" class="stretched-link">
                                <h3>Journalist</h3>
                            </a>
                            <p>Research and write compelling stories, delivering accurate and timely news to a wide audience... <a href="#!" class="text-info">Read More</a> </p>

                            <!-- Row with 2 columns for buttons -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <a href="{{ route('applicant_form') }}" type="button" class="btn btn-success w-100">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>


            </div>

        </section><!-- /Alt Services Section -->

        <!-- Team Section -->
        <section id="team" class="team section ">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Team Department</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="assets_landing/img/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                    <h4>Walter White</h4>
                    <span>Web Development</span>
                    <p>
                        Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                    </p>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <img src="assets_landing/img/team/team-2.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                    <h4>Sarah Jhinson</h4>
                    <span>Marketing</span>
                    <p>
                        Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <img src="assets_landing/img/team/team-3.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                    <h4>William Anderson</h4>
                    <span>Content</span>
                    <p>
                        Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                    </p>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div><!-- End Team Member -->

            </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>Baliwasan Chico Road, Zamboanga, Zamboanga del Sur</p>
                    </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+9945-7789-xxxxx</p>
                    </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>chedroix@gmail.com</p>
                    </div>
                    </div><!-- End Info Item -->

                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1177.6135390997104!2d122.05826491793752!3d6.914439289455613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325041dd174b5ab9%3A0x3ae7cc6649107ada!2sCommission%20on%20Higher%20Education%20Region%20IX!5e1!3m2!1sen!2sph!4v1731992740081!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>

                <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                    <div class="col-md-6">
                        <label for="name-field" class="pb-2">Your Name</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-6">
                        <label for="email-field" class="pb-2">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email-field" required="">
                    </div>

                    <div class="col-md-12">
                        <label for="subject-field" class="pb-2">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject-field" required="">
                    </div>

                    <div class="col-md-12">
                        <label for="message-field" class="pb-2">Message</label>
                        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Send Message</button>
                    </div>

                    </div>
                </form>
                </div><!-- End Contact Form -->

            </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">Green</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
                <p>United States</p>
                <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Green</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

@endsection





