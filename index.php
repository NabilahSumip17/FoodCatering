<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yummy Food Catering</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Yummy Food <span>Catering.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="show_order.php">Show Orders</a></li>
              </li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table">Catering Order</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Value Buy, Value Price.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Catering Order</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Food Catering</h4>
              <p>+60 165843239</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Food Catering is your go-to destination for traditional and uniquely flavored food, along with delectable variety of rice. Our specific recipes highlight the rich flavors of Malay Cuisine. Whether you're celebrating a birthday, wedding, retirement, or any special event, Food Catering invites you to explore our world of Malay cuisine through our welcoming homepage adorned with full-width images of spices and ingredients. Join us in making your celebrations memorable with the authentic taste of our curated dishes.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Delicious </li>
                <li><i class="bi bi-check2-all"></i> Yummy </li>
                <li><i class="bi bi-check2-all"></i> Value Buy, Value Price </li>
                <li><i class="bi bi-check2-all"></i> We use halal and fresh ingredients </li>
              </ul>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Catering Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Main Dish</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Drinks</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Dessert</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Fruit</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Main Dish</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/main dish/menu-item-1.png" class="glightbox"><img src="assets/img/menu/main dish/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Hujan Panas</h4>
                <p class="price">
                  RM 6.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/main dish/menu-item-2.png" class="glightbox"><img src="assets/img/menu/main dish/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Kandar</h4>
                <p class="price">
                  RM 6.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/main dish/menu-item-3.png" class="glightbox"><img src="assets/img/menu/main dish/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Putih</h4>
                <p class="price">
                  RM 2.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/main dish/menu-item-4.png" class="glightbox"><img src="assets/img/menu/main dish/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Tomato</h4>
               <p class="price">
                  RM 7.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/main dish/menu-item-5.png" class="glightbox"><img src="assets/img/menu/main dish/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Briyani</h4>
               <p class="price">
                  RM 7.00 per person 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/main dish/menu-item-6.png" class="glightbox"><img src="assets/img/menu/main dish/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Kerabu</h4>
                <p class="price">
                  RM 7.00 per person
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Drinks</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/drinks/menu-item-1.png" class="glightbox"><img src="assets/img/menu/drinks/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Watermelon Juice</h4>
                <p class="price">
                  RM 5.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/drinks/menu-item-2.png" class="glightbox"><img src="assets/img/menu/drinks/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Grape Juice</h4>
                <p class="price">
                  RM 3.00 per person 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/drinks/menu-item-3.png" class="glightbox"><img src="assets/img/menu/drinks/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Hot Tea</h4>
                <p class="price">
                  RM 2.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/drinks/menu-item-4.png" class="glightbox"><img src="assets/img/menu/drinks/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chocolate Ice</h4>
                <p class="price">
                  RM5.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/drinks/menu-item-5.png" class="glightbox"><img src="assets/img/menu/drinks/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Lemon Iced Tea</h4>
                <p class="price">
                  RM4.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/drinks/menu-item-6.png" class="glightbox"><img src="assets/img/menu/drinks/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Rose Syrup Drink</h4>
                <p class="price">
                  RM2.00 per person
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dessert</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dessert/menu-item-1.png" class="glightbox"><img src="assets/img/menu/dessert/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Seri Muka</h4>
                <p class="price">
                  RM 2.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dessert/menu-item-2.png" class="glightbox"><img src="assets/img/menu/dessert/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Cucur Badak</h4>
                <p class="price">
                  RM 2.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dessert/menu-item-3.png" class="glightbox"><img src="assets/img/menu/dessert/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Karipap</h4>
                <p class="price">
                  Rm 3.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dessert/menu-item-4.png" class="glightbox"><img src="assets/img/menu/dessert/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Puding Jagung</h4>
                <p class="price">
                  RM 5.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dessert/menu-item-5.png" class="glightbox"><img src="assets/img/menu/dessert/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Bubur Pulut Hitam</h4>
                <p class="price">
                  RM 5.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dessert/menu-item-6.png" class="glightbox"><img src="assets/img/menu/dessert/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aiskrim Batang</h4>
                <p class="price">
                  RM 2.50 per person
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Fruit</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fruit/menu-item-1.png" class="glightbox"><img src="assets/img/menu/fruit/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Watermelon</h4>
                <p class="price">
                  RM 3.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fruit/menu-item-2.png" class="glightbox"><img src="assets/img/menu/fruit/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mix Grape</h4>
                <p class="price">
                  RM 3.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fruit/menu-item-3.png" class="glightbox"><img src="assets/img/menu/fruit/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Apple</h4>
                <p class="price">
                  RM 3.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fruit/menu-item-4.png" class="glightbox"><img src="assets/img/menu/fruit/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Orange</h4>
                <p class="price">
                  RM 3.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fruit/menu-item-5.png" class="glightbox"><img src="assets/img/menu/fruit/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pinapple</h4>
                <p class="price">
                  RM 3.00 per person
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fruit/menu-item-6.png" class="glightbox"><img src="assets/img/menu/fruit/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mix Fruit Platter</h4>
                <p class="price">
                  RM 6.00 per person
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        They are so nice and sporting. All the food are sooooo delicious!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Their services is sooo good!!!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Gonna contact them again next time. I'm so happy with their services!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        I love the dishes here. Yummy happy tummy!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Catering</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
              <h3>Custom Event</h3>
             
              <p class="description">
               Special events may encompass a wide range of occasions, such as anniversaries, corporate gatherings, or milestone celebrations. Tailor your catering services to the specific nature of the event. Offer versatile menu options that can cater to different tastes and dietary requirements. Consider providing unique setups, such as food stations or interactive cooking experiences, to add an extra layer of excitement to the event. Work closely with the event organizers to understand the goals and preferences for the occasion.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/ohsem-kahwin-03_38_440486.jpg)">
              <h3>Wedding</h3>
              <p class="description">
               Wedding catering requires a high level of attention to detail and customization. Work closely with the couple to create a menu that aligns with their tastes and the overall theme of the wedding. Consider offering diverse options for appetizers, main courses, and desserts. Cater to dietary restrictions and preferences of the wedding guests. Presentation is key – ensure that the dishes are not only delicious but also beautifully plated. Provide options for a sit-down dinner or buffet-style catering based on the couple's vision.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
              <h3>Retirement</h3>
              <p class="description">
                Retirement parties are typically more relaxed and celebratory. Offer a menu that reflects the retiree's favorite dishes or cuisines. Consider buffet-style options, allowing guests to mingle and enjoy the festivities. Incorporate elegant and hearty options, and perhaps offer a special dessert to commemorate the retiree's achievements. Create an atmosphere that acknowledges the retiree's accomplishments and sets the tone for a joyous occasion.
              </p>
            </div><!-- End Event item -->
            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/birthday.jpg)">
              <h3>Birthday</h3>
              <p class="description">
                Birthday celebrations often call for a mix of fun and deliciousness. Customize your catering menu to include a variety of appetizers, finger foods, and themed desserts. Consider offering personalized birthday cakes or dessert tables with colorful treats. Engage with the client to understand any specific themes, dietary preferences, or age-appropriate dishes for the celebration.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <p>Experience : 35 years</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <p>Experience : 7 years</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <p>Experience : 10 years</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Catering Order</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/process_form.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  Name<span style="color: #FF0000">*</span><input type="text" name="contact_person" class="form-control" id="compulsory" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter a valid name" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Email<span style="color: #FF0000">*</span><input type="text" class="form-control" name="email" id="compulsory" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate" required></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Location <span style="color: #FF0000">*</span> <select name="location" class="form-control" id="compulsory"> <option value="">--select--</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Selangor">Selangor</option>
                  </select>
                  <div class="validate" required></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Address<span style="color: #FF0000">*</span><input type="text" class="form-control" name="address" id="compulsory" placeholder="Your Address" data-rule="address" data-msg="Please enter a valid address" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Company Name <input type="text" name="company_name" class="form-control" placeholder="Company Name" data-rule="minlen:4" data-msg="Please enter a valid company name">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <span>Promo Code</span><input type="text" name="promo_code" class="form-control" placeholder="Promo code" data-rule="minlen:4" data-msg="Please enter a valid promo code">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Occasion <span style="color: #FF0000">*</span> <select name="occasion" class="form-control" id="compulsory">
                   <option value="">--select--</option>
                   <option value="Wedding">Wedding</option>
                   <option value="Retirement">Retirement</option>
                   <option value="Birthday">Birthday</option>
                   <option value="Custom Event">Custom Event</option>
                   </select>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Budget<span style="color: #FF0000">*</span><input type="text" class="form-control" name="budget" id="compulsory" placeholder="Budget" data-rule="budget" data-msg="Please enter a valid budget" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Phone No<span style="color: #FF0000">*</span><input type="text" class="form-control" name="contact_no" id="compulsory" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter a valid contact number" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Event Date<span style="color: #FF0000">*</span><input type="date" name="event_date" class="form-control" id="compulsory" placeholder="Date" data-rule="minlen:4" data-msg="Please enter a valid date">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Event Time<span style="color: #FF0000">*</span><input type="time" class="form-control" name="event_time" id="compulsory" placeholder="Time" data-rule="minlen:4" data-msg="Please enter a valid time" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  Pax<span style="color: #FF0000">*</span><input type="number" class="form-control" name="num_pax" id="compulsory" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter number of pax" required>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <span>Special Request</span><textarea class="form-control" name="special_req" rows="5" placeholder="Special request"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                Subscribe to our newsletter <input type="checkbox" name="subscribe" rows="5" placeholder="Subscribe" id="compulsory"></textarea>
                <div class="validate"></div>
              </div>
             <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div> 
              <div class="text-center"><button type="submit" name="submit">Order</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.752855024474!2d101.69917377447047!3d3.1597168530886393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc48298a5c59e5%3A0x30b82187ef0c206d!2sUniversiti%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1706359158992!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>No 98, Jalan Bestari, Taman Bestari, Kuala Lumpur</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>yummy@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>60 165843239</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 11PM &nbsp; | &nbsp;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form --> 

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              No 98, Jalan Bestari, </br>
              Taman Bestari, Kuala Lumpur
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +60 165843239<br>
              <strong>Email:</strong> yummy@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM - 11PM<br></strong>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>