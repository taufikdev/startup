<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DevFolio - Developer Portfolio Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="/app.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">DevLab</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <!-- <a href="#experience" class="nav-item nav-link">Experience</a> -->
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    <a href="#price" class="nav-item nav-link">Price</a>
                    <a href="#review" class="nav-item nav-link">Review</a>
                    <a href="#team" class="nav-item nav-link">Team</a>
                    <!-- <a href="#blog" class="nav-item nav-link">Blog</a> -->
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>Welcome To </p>
                            <h1>{{ strtoupper($heros->title) }}</h1>
                            <h2></h2>
                            <!-- <div class="typed-text">Web Design, Web Development, Front End Development, Apps Design, Apps Development</div> -->
                            <div class="typed-text">{{ $heros->content }}</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="">Hire Us</a>
                            <a class="btn" href="">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="images/{{$heros->img}}" alt="Hero Image" width="600px" height="600px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What we do</p>
                <h2>Awesome Quality Services</h2>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item" style="border-radius: .3em;">
                        <div class="service-icon" style="border-radius: .3em;">
                            <!-- <i class="fa fa-laptop"></i> -->
                            <img src="images/{{$service->img}}" alt="">

                        </div>
                        <div class="service-text">
                            <h3>{{ $service->title }}</h3>
                            <p>
                                {{$service->content}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code"></i> 
                        </div>
                        <div class="service-text">
                            <h3>Web Development</h3>
                            <p>
                                Develpment of dynamic website an web application for the managment of your business
                            </p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fab fa-android"></i>
                        </div>
                        <div class="service-text">
                            <h3>Apps Design</h3>
                            <p>
                                Creation des application mobile cross platforme sur Android/Ios
                            </p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fab fa-apple"></i>
                        </div>
                        <div class="service-text">
                            <h3>Apps Development</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Banner Start -->
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>Annonces</p>
                <h2>Get A <span>Special</span> Price</h2>
            </div>
            <div class="container banner-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                </p>
                <a class="btn">Plan tarifaire</a>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Portfolio Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Our work</p>
                <h2>Satisfied clients websites</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Web Design</li>
                        <li data-filter=".filter-2">Mobile Apps</li>
                        <li data-filter=".filter-3">Game Dev</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/portfolio-1.jpg" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>eCommerce Website</h3>
                            <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/portfolio-2.jpg" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Product Landing Page</h3>
                            <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/portfolio-3.jpg" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>JavaScript quiz game</h3>
                            <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/portfolio-4.jpg" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>JavaScript drawing</h3>
                            <a class="btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/portfolio-5.jpg" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Social Mobile Apps</h3>
                            <a class="btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="img/portfolio-6.jpg" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Company Website</h3>
                            <a class="btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Banner Start -->
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>RABAIS IMPRESSIONNANT</p>
                <h2>Obtenez <span>{{$discount->amount}}%</span> de réduction</h2>
            </div>
            <div class="container banner-text">
                <p>{{ $discount->description }} </p>
                <a class="btn">Commandez maintenant</a>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Price Start -->
    <div class="price" id="price">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Pricing Plan</p>
                <h2>Affordable Price</h2>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>{{$plans[0]->name}}</h2>
                            </div>
                            <div class="price-prices">
                                <h2><small></small>{{$plans[0]->price}}<span> DH</span></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <!-- <li>Bootstrap 4</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>
                                    <li>Browser Compatibility</li> -->
                                    <!-- <li>Easy To Use</li> -->
                                    @foreach($plan_caracters as $caracter)
                                    @if($caracter->plan_id == $plans[0]->id)
                                    <li>{{$caracter->name}}</li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>{{$plans[1]->name}}</h2>
                            </div>
                            <div class="price-prices">
                                <h2><b>{{$plans[1]->price}}</b><span> DH</span></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <!-- <li>Bootstrap 4</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy To Use</li> -->
                                    @foreach($plan_caracters as $caracter)
                                    @if($caracter->plan_id == $plans[1]->id)
                                    <li>{{$caracter->name}}</li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>{{$plans[2]->name}}</h2>
                            </div>
                            <div class="price-prices">
                                <h2>{{$plans[2]->price}}<span> DH</span></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    @foreach($plan_caracters as $caracter)
                                    @if($caracter->plan_id == $plans[2]->id)
                                    <li>{{$caracter->name}}</li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->



    <!-- Testimonial Start -->
    <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
        <div class="text-center wow zoomIn" data-wow-delay="0.1s">
            <h3>Our stack</h3>
            <hr style="border-bottom: 4px solid #ED428B; width: 100px;border-radius: .3em;top:-4px;">
            <p style="font-size: larger;color:white;">we work with latest technologies in the market</p>
        </div>
        <br>
        <div class="container">
            <div class="owl-carousel owl-theme brands_slider">
                @foreach($stack as $stk)
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center" style="align-items: center;">
                        <img src="images/{{$stk->image}}" alt="Image">
                        <br>
                        <h6 style="color: #fff;">{{$stk->name}}</h6>
                    </div>
                </div>
                @endforeach
            </div> <!-- Brands Slider Navigation -->
            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Contact Start -->
    <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                                <div>
                                    <button class="btn2 btn-block" type="submit" id="sendMessageButton" style="border-radius: .3em;">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="footer shape wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>BASED IN</h2>
                    <h3>{{$contact->address}}</h3>
                    <div class="footer-menu">
                        <p>{{$contact->phone}}</p>
                        <p>{{$contact->email}}</p>
                    </div>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">FESCODE</a>, All Right Reserved</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="btn2 back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<script>
    $(document).ready(function() {

        if ($('.brands_slider').length) {
            var brandsSlider = $('.brands_slider');

            brandsSlider.owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: false,
                dots: false,
                autoWidth: true,
                items: 8,
                margin: 42
            });

            if ($('.brands_prev').length) {
                var prev = $('.brands_prev');
                prev.on('click', function() {
                    brandsSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.brands_next').length) {
                var next = $('.brands_next');
                next.on('click', function() {
                    brandsSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script>
<style>
    .brands {
        width: 100%;
        padding-top: 90px;
        padding-bottom: 90px
    }

    .brands_slider_container {
        height: 130px;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        padding-left: 97px;
        padding-right: 97px;
        background: #fff
    }

    .brands_slider {
        height: 100%;
    }

    .brands_item {
        height: 150px;
        width: 100px;
    }

    .brands_item img {
        width: 50px;
        height: 85px;
    }

    .brands_nav {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        padding: 5px;
        cursor: pointer
    }

    .brands_nav i {
        color: #e5e5e5;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .brands_nav:hover i {
        color: #676767
    }

    .brands_prev {
        left: 40px;
    }

    .brands_next {
        right: 40px
    }
</style>

</html>