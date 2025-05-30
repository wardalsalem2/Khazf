@include('component.header')
<main class="main">
    <!-- top bage Section -->
<section id="hero" class="hero section dark-background">
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade"
            data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Khazf</span></h2>
                    <p class="animate__animated animate__fadeInUp">
                        An online platform that connects tourists and locals with unique cultural and adventure experiences across Jordan. 
                        Discover local workshops, explore authentic destinations, and create unforgettable memories with <span>Khazf</span>.
                    </p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        Click here</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Explore Authentic Experiences</h2>
                    <p class="animate__animated animate__fadeInUp">
                        From traditional cooking classes to desert adventures and cultural workshops — Khazf offers hand-picked experiences 
                        that let you connect with Jordan’s heart and soul. Start your journey with us and live like a local.
                    </p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Click here</a>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Uncover Jordan’s Hidden Gems</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Go beyond the typical tourist spots and dive into truly local experiences. Whether it's exploring ancient trails, 
                        joining a Bedouin storytelling night, or learning traditional crafts — Khazf connects you to the real Jordan.
                    </p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">
Click here</a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>
</section>
    <!-- End top bage Section -->

    <!-- ======= About Section ======= -->
<section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Who we are</p>
    </div><
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Khazf is an online platform designed to connect tourists and local explorers with authentic cultural 
                    and adventure experiences across Jordan. Our mission is to promote local tourism and support passionate 
                    experience providers in sharing their stories with the world.
                </p>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Handpicked experiences curated by locals.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Explore Jordan’s hidden gems and traditions.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Simple booking process and secure payments.</span></li>
                </ul>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p>
                    Whether you’re visiting for the first time or a local seeking new adventures, Khazf offers a unique 
                    gateway to explore Jordan like never before. From culinary workshops to desert escapes, each experience 
                    is a journey into the heart of Jordanian culture.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Features Section -->
<section id="features" class="features section">
    <div class="container">
        <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <i class="bi bi-binoculars"></i>
                    <h4 class="d-none d-lg-block">Discover Unique Experiences</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <i class="bi bi-box-seam"></i>
                    <h4 class="d-none d-lg-block">Support Local Providers</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                    <i class="bi bi-brightness-high"></i>
                    <h4 class="d-none d-lg-block">Seamless Booking Process</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                    <i class="bi bi-command"></i>
                    <h4 class="d-none d-lg-block">Trusted & Secure Platform</h4>
                </a>
            </li>
        </ul><!-- End Tab Nav -->
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Explore handpicked cultural and adventure experiences across Jordan.</h3>
                        <p class="fst-italic">
                            Find authentic tours, workshops, and activities created by passionate locals.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i>
                                <span>Curated experiences to suit every traveler’s taste.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i>
                                <span>Discover hidden gems beyond typical tourist spots.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i>
                                <span>Unique adventures connecting you to Jordan’s rich culture.</span>
                            </li>
                        </ul>
                        <p>
                            Dive deep into local traditions, cuisine, and landscapes with our trusted hosts.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/working-1.jpg" alt="Discover Experiences" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Empowering local guides and artisans to share their passion.</h3>
                        <p>
                            Khazf provides a platform for locals to offer genuine experiences and earn sustainable income.
                        </p>
                        <p class="fst-italic">
                            Join a growing community of providers promoting Jordan’s cultural heritage.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Easy setup to showcase your unique offerings.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Support and grow with a trusted network.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Fair and transparent commission structure.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Tools to manage bookings and customer communication.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/working-2.jpg" alt="Support Local Providers" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Book your experiences effortlessly with our streamlined system.</h3>
                        <p>
                            Enjoy a smooth and secure booking flow designed for convenience on any device.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Instant booking confirmations.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Multiple payment options with full security.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Easy cancellation and refund policies.</span></li>
                        </ul>
                        <p class="fst-italic">
                            Focus on your adventure while we handle the details.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/working-3.jpg" alt="Seamless Booking" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-4">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Your safety and satisfaction are our top priorities.</h3>
                        <p>
                            We vet every experience provider and maintain high standards for quality and trust.
                        </p>
                        <p class="fst-italic">
                            Built on transparency, security, and outstanding customer support.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Verified reviews and ratings from real travelers.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Secure data and payment protection.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Responsive support team ready to assist you.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/working-4.jpg" alt="Trusted Platform" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content Item -->
        </div>
    </div>
</section>
<!-- /Features Section -->


<!-- Faq Section -->
<section id="faq" class="faq section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Answers to common questions from our visitors</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="custom-accordion" id="accordion-faq">
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-faq-1" aria-expanded="true" aria-controls="collapse-faq-1">
                                How can I book a pottery workshop?
                            </button>
                        </h2>

                        <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion-faq">
                            <div class="accordion-body">
                                You can book a workshop directly through our website by selecting your preferred date and time. 
                                We also accept bookings via phone or email for personalized assistance.
                            </div>
                        </div>
                    </div>
                    <!-- .accordion-item -->

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-faq-2" aria-expanded="false" aria-controls="collapse-faq-2">
                                Are the pottery tours suitable for beginners?
                            </button>
                        </h2>
                        <div id="collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                            <div class="accordion-body">
                                Absolutely! Our tours and workshops are designed to welcome all skill levels, including complete beginners. 
                                Our expert guides will provide step-by-step instructions to ensure a rewarding experience.
                            </div>
                        </div>
                    </div>
                    <!-- .accordion-item -->

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-faq-3" aria-expanded="false" aria-controls="collapse-faq-3">
                                Can I customize a pottery piece?
                            </button>
                        </h2>

                        <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                            <div class="accordion-body">
                                Yes, we offer custom pottery services where you can choose designs, colors, and sizes. 
                                Contact us to discuss your ideas and we will create a unique piece just for you.
                            </div>
                        </div>
                    </div>
                    <!-- .accordion-item -->

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-faq-4" aria-expanded="false" aria-controls="collapse-faq-4">
                                What are the health and safety measures during tours and workshops?
                            </button>
                        </h2>

                        <div id="collapse-faq-4" class="collapse" aria-labelledby="headingFour" data-parent="#accordion-faq">
                            <div class="accordion-body">
                                We follow all recommended health protocols, including sanitizing equipment and limiting group sizes to ensure a safe environment for everyone.
                            </div>
                        </div>
                    </div>
                    <!-- .accordion-item -->

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-faq-5" aria-expanded="false" aria-controls="collapse-faq-5">
                                How far in advance should I book my tour or workshop?
                            </button>
                        </h2>

                        <div id="collapse-faq-5" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-faq">
                            <div class="accordion-body">
                                We recommend booking at least one week in advance to secure your preferred date, especially during peak seasons.
                            </div>
                        </div>
                    </div>
                    <!-- .accordion-item -->
                </div>
            </div>
        </div>
    </div>
</section><!-- /Faq Section -->
<!-- /Faq Section -->

    <!-- Contact Section -->
<section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Jordan</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>0777777777</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>Khazf@Gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required=""></textarea>
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

@include('component.footer')