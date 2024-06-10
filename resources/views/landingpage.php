<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../css/landingpage.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
        <title>My Indihome Technician</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <div class="header__image">
                        <img src="../image/bangtel logo.png" alt="P" width="150px">
                    </div>
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#Features" class="nav__link">Features</a>
                        </li>
                        <li class="nav__item">
                            <a href="#gallery" class="nav__link">Gallery</a>
                        </li>

                        <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
                <a href="/login" class="button button__header" >Log In</a>
            </nav>
        </header>

        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <!-- untuk image-->
                    <div class="home__data">
                        <h1 class="home__title">Welcome to My Indihome Technicians </h1>
                        <p class="home__description">Enhance your workflow with our advanced tools. Manage schedules, access tasks, and report completions more efficiently.</p>

                        <a href="#" class="button">Get Started</a>
                    </div>   
                    <div class="home__image">
                        <img src="../image/bto2.jpg" alt="P">
                    </div>
                </div>
            </section>

            <!--=============== ABOUT ===============-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__image">
                        <img src="../image/bto4.jpg" alt="about_img">
                    </div>
                    <div class="about__data">
                        <h2 class="section__title-center"><br> About My Indihome Technicians</h2>
                        <p class="about__description">My IndiHome Technicians is your dedicated application to manage and 
                            track all your technical support requests for IndiHome services. Whether you need installation, maintenance, 
                            or troubleshooting, our expert technicians are here to help.
                        </p>
                    </div>
                </div>
            </section>

            <!--=============== FEATURES ===============-->
            <section class="features section container" id="Features">
                <div class="features__container grid">
                    <div class="features__data">
                        <h2 class="features__title-center">Key <br> Features</h2>
                        <p class="features__description">
                            <li>Easy service request submission</li>
                            <li>Real-time tracking of technician status</li>
                            <li>Comprehensive service history</li>
                            <li>Direct communication with technicians</li>
                            <li>Service feedback and rating system</li>
                        </p>
                    </div>
                    <div class="features__image">
                        <img src="../image/galeri1.jpg" alt="features_img">
                    </div>
                </div>
            </section>

            <!--=============== GALLERY ===============-->
            <section class="gallery section container" id="gallery">
                <h2 class="section__title">Take a look at our technicians in action.</h2>
                <div class="gallery__container grid">
                    <div class="gallery__data">
                        <h3 class="gallery__subtitle">UC Repair</h3>
                        <div class="gallery_img">
                            <img src="../image/galeri3.jpg" alt="gallery_img" viewBox="0 0 135 94">
                        </div>
                        <p class="services__description">In the ODP unspect case, repair the broken core cable on the UC.</p>
                       
                    </div>

                    <div class="gallery__data">
                        <h3 class="gallery__subtitle">Trace Broken Cores</h3>
                        <div class="gallery_img">
                            <img src="../image/galeri7.jpg" alt="gallery_img" viewBox="0 0 129 94">
                        </div>
                        <p class="services__description">Tracing broken cores in the ODC using OTDR and fixing them.</p>
                       
                    </div>

                    <div class="gallery__data">
                        <h3 class="gallery__subtitle">Excavation Monitoring</h3>
                        <div class="gallery_img">
                            <img src="../image/galeri8.jpg" alt="gallery_img" viewBox="0 0 121 94">
                        </div>
                        <p class="services__description">Maintenance technicians shift ODP poles in the excavation area.</p>
                       
                    </div>
                </div>
            </section>

            <!--=============== CONTACT US ===============-->
            <section class="contact section container" id="contact">
                <div class="contact__container grid">
                    <div class="contact__content">
                        <h2 class="section__title-center">Contact Us From <br> Here</h2>
                    </div>

                    <ul class="contact__content grid">
                        <li class="contact__address">Fax: <span class="contact__information">(022) 7202596</span></li>
                        <li class="contact__address">Email:  <span class="contact__information">headoffice@bangtelindo.com</span></li>
                        <li class="contact__address">Location: <span class="contact__information">Jl. Ketintang No.154, Ketintang, Surabaya, Jawa Timur</span></li>
                    </ul>

                    <div class="contact__content">
                        <a href="#" class="button">Contact Us</a>
                    </div>
                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Lokasi</h3>
                    <div class="footer__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.588857699264!2d112.72688131477394!3d-7.309991394697019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb51d1c907b1%3A0xaacd438363334a74!2sPT.Bangtelindo%20Cabang%20Surabaya!5e0!3m2!1sen!2sid!4v1624404638847!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Social Media</h3>
                    <div class="footer__social">
                        <a href="#" class="footer__social-link"><i class='bx bxl-facebook-circle '></i></a>
                        <a href="#" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="footer__social-link"><i class='bx bxl-instagram-alt'></i></a>
                </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Support</h3>
                    <div class="support__images"> 
                        <div class="support__image">
                            <img src="../image/TA.png" alt="Telkom Akses">
                        </div>
                        <div class="support__image">
                            <img src="../image/my indihome by telkomsel.png" alt="Indihome by Telkomsel">
                        </div>
                    </div>
                </div>
            </div>

            <p class="footer__copy">&copy; 2024 My IndiHome Technicians. All rights reserved.</p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== MAIN JS ===============-->
        <script src="../Js/main.js"></script>
    </body>
</html>