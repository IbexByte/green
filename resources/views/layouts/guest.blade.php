<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="{{ asset('storage/assets') }}/vendors/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/animate/animate.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/animate/custom-animate.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/jarallax/jarallax.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/jquery-magnific-popup/jquery.magnific-popup.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/nouislider/nouislider.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/nouislider/nouislider.pips.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/odometer/odometer.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/swiper/swiper.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/govity-icons/style.css">
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/tiny-slider/tiny-slider.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/reey-font/stylesheet.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/owl-carousel/owl.theme.default.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/bxslider/jquery.bxslider.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/vegas/vegas.min.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/jquery-ui/jquery-ui.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/timepicker/timePicker.css" />
<link rel="stylesheet" href="{{ asset('storage/assets/vendors/') }}/nice-select/nice-select.css" />

<!-- template styles -->
<link rel="stylesheet" href="{{ asset('storage/assets/css/govity.css') }}" />
<link rel="stylesheet" href="{{ asset('storage/assets/css/govity-responsive.css') }}" />

<body class="custom-cursor">



    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__logo">
                            <a href="index.html"><img src="{{ asset('storage/assets/images/resources/logo-1.svg') }}"
                                    alt=""></a>
                        </div>
                        <div class="main-menu__top">
                            <div class="main-menu__top-inner">
                                <div class="main-menu__top-left">
                                    <div class="main-menu__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="main-menu__top-right">
                                    <ul class="list-unstyled main-menu__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:needhelp@company.com">needhelp@greenMontain.com</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="text">
                                                <p>{{ __('site.open_hours') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled main-menu__top-menu">
                                        <li><a href="about.html">{{ __('site.council') }}</a></li>
                                        <li><a href="about.html">{{ __('site.government') }}</a></li>
                                        <li><a href="contact.html">{{ __('site.complaints') }}</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="main-menu__bottom">
                            <div class="main-menu__bottom-inner">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown megamenu">
                                            <a href="index.html">{{ __('site.home') }} </a>
                                            <ul>
                                                <li>
                                                    <section class="home-showcase">
                                                        <div class="container">
                                                            <div class="home-showcase__inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('storage') }}/assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index.html"
                                                                                        class="thm-btn home-showcase__buttons__item">Multi
                                                                                        Page</a>
                                                                                    <a href="index-one-page.html"
                                                                                        class="thm-btn home-showcase__buttons__item">One
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                01</h3>
                                                                            <!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('storage') }}/assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index2.html"
                                                                                        class="thm-btn home-showcase__buttons__item">Multi
                                                                                        Page</a>
                                                                                    <a href="index2-one-page.html"
                                                                                        class="thm-btn home-showcase__buttons__item">One
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                02
                                                                            </h3><!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('storage') }}/assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index3.html"
                                                                                        class="thm-btn home-showcase__buttons__item">Multi
                                                                                        Page</a>
                                                                                    <a href="index3-one-page.html"
                                                                                        class="thm-btn home-showcase__buttons__item">One
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                03
                                                                            </h3><!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('storage') }}/assets/images/home-showcase/home-showcase-1-4.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-dark.html"
                                                                                        class="thm-btn home-showcase__buttons__item">View
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                04
                                                                            </h3><!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                </div><!-- /.row -->
                                                            </div><!-- /.home-showcase__inner -->

                                                        </div><!-- /.container -->
                                                    </section>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">{{ __('site.about') }}</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">{{ __('site.home') }}</a></li>
                                                <li><a href="about.html">{{ __('site.about') }}</a></li>
                                                <li><a href="activities.html">{{ __('site.activities') }}</a></li>
                                                <li><a href="projects.html">{{ __('site.projects') }}</a></li>
                                                <li><a href="partners.html">{{ __('site.partners') }}</a></li>
                                                <li><a href="blog.html">{{ __('site.blog') }}</a></li>
                                                <li><a href="sustainability.html">{{ __('site.sustainability') }}</a>
                                                </li>
                                                <li><a href="contact.html">{{ __('site.contact') }}</a></li>
                                                <li><a href="donate.html">{{ __('site.donate') }}</a></li>
                                                <li><a href="faq.html">{{ __('site.faq') }}</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#">{{ __('site.activities') }}</a>
                                            <ul class="sub-menu">
                                                <li><a href="our-services.html">Services</a></li>
                                                <li><a href="building-permission.html">Building permission</a></li>
                                                <li><a href="driving-license.html">Driving license</a></li>
                                                <li><a href="report-polution.html">Report polution</a></li>
                                                <li><a href="parking-permission.html">Parking permission</a></li>
                                                <li><a href="tax-return.html">Tax return</a></li>
                                                <li><a href="birth-certificate.html">Birth certificate</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">{{ __('site.projects') }}</a>
                                            <ul class="sub-menu">
                                                <li><a href="departments.html">Departments</a></li>
                                                <li><a href="department-details.html">Department details</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#">{{ __('site.partners') }}</a>
                                            <ul class="sub-menu">
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="news-sidebar.html">News sidebar</a></li>
                                                <li><a href="news-details.html">News details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">{{ __('site.blog') }}</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-details.html">Shop details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">{{ __('site.sustainability') }}</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="main-menu__right">
                                    <div class="main-menu__call">
                                        <div class="main-menu__call-icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="main-menu__call-content">
                                            <p class="main-menu__call-sub-title">Call Anytime</p>
                                            <h5 class="main-menu__call-number"><a href="tel:9212340800">+92 (1234)
                                                    0800</a></h5>
                                        </div>
                                    </div>
                                    <div class="main-menu__search-box">
                                        <a href="#"
                                            class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                    </div>
                                    <div class="language-switcher">
                                        <select class="selectpicker">
                                            <option
                                                data-content="<span class='lang-en'><img src='assets/images/lang-flag/en.png' alt=''>English</span>"
                                                value="en" selected>English</option>
                                            <option
                                                data-content="<span class='lang-fr'><img src='assets/images/lang-flag/fr.png' alt=''>French</span>"
                                                value="fr">French
                                            </option>

                                            <option
                                                data-content="<span class='lang-it'><img src='assets/images/lang-flag/it.png' alt=''>Italian</span>"
                                                value="it">
                                                Italian</option>
                                        </select>

                                    </div>
                                    <div class="main-menu__btn-box">
                                        <a href="contact.html"
                                            class="thm-btn main-menu__btn">{{ __('site.contact') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Main Sllider Start -->
        <section class="main-slider">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider__slide-1">
                    <div class="main-slider__bg"
                        style="background-image:  url('{{ asset('storage/assets/images/backgrounds/slider01.jpg') }}');">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-1.png"
                            alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-2.png"
                            alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-3.png"
                            alt="">
                    </div>
                    <div class="main-slider__meta-box">
                        <ul class="main-slider__meta list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-sun"></span>
                                </div>
                                <div class="text">
                                    <p>Today: 32 0C</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-clock"></span>
                                </div>
                                <div class="text">
                                    <p>Time: 09:28 pm</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">Conference on the development of farmers' organizations
                                and agricultural cooperatives</p>
                            <h2 class="main-slider__title">Farmers Organization
                                <br> Development
                            </h2>
                            <div class="main-slider__btn-box">
                                <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-2">
                    <div class="main-slider__bg"
                        style="background-image: url('{{ asset('storage/assets/images/backgrounds/slider04.jpg') }}');">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-1.png"
                            alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-2.png"
                            alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-3.png"
                            alt="">
                    </div>
                    <div class="main-slider__meta-box">
                        <ul class="main-slider__meta list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-sun"></span>
                                </div>
                                <div class="text">
                                    <p>Today: 32 0C</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-clock"></span>
                                </div>
                                <div class="text">
                                    <p>Time: 09:28 pm</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">Cash for Work project</p>
                            <h2 class="main-slider__title">Cash for Work
                                <br> project.
                            </h2>
                            <div class="main-slider__btn-box">
                                <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-3">
                    <div class="main-slider__bg"
                        style="background-image: url('{{ asset('storage/assets/images/backgrounds/slider02.jpg') }}');">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-1.png"
                            alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-2.png"
                            alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('storage') }}/assets/images/shapes/main-slider-shape-3.png"
                            alt="">
                    </div>
                    <div class="main-slider__meta-box">
                        <ul class="main-slider__meta list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-sun"></span>
                                </div>
                                <div class="text">
                                    <p>Today: 32 0C</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-clock"></span>
                                </div>
                                <div class="text">
                                    <p>Time: 09:28 pm</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">Cash for Work project</p>
                            <h2 class="main-slider__title">Cash for Work
                                <br> project.
                            </h2>
                            <div class="main-slider__btn-box">
                                <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Main Sllider Start -->

        <!--Department One Start-->
        <section class="department-one">
            <div class="department-one__bg"
                style="background-image: url('{{ asset('storage/assets/images/backgrounds/department-one-bg.png') }}');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="department-one__inner">
                            <ul class="department-one__list list-unstyled">
                                <li class="department-one__single">
                                    <div class="department-one__content">
                                        <h3 class="department-one__title"><a href="department-details.html">
                                                {{ __('site.goal_1') }}
                                                <br> {{ __('site.&_1') }}</a></h3>
                                        <div class="department-one__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="M247.63 39.89a8 8 0 0 0-7.52-7.52c-51.76-3-93.32 12.74-111.18 42.22c-11.8 19.49-11.78 43.16-.16 65.74a71.34 71.34 0 0 0-14.17 27L98.33 151c7.82-16.33 7.52-33.35-1-47.49c-13.2-21.79-43.67-33.47-81.5-31.25a8 8 0 0 0-7.52 7.52c-2.23 37.83 9.46 68.3 31.25 81.5A45.82 45.82 0 0 0 63.44 168A54.58 54.58 0 0 0 87 162.33l25 25V216a8 8 0 0 0 16 0v-29.49a55.61 55.61 0 0 1 12.27-35a73.91 73.91 0 0 0 33.31 8.4a60.9 60.9 0 0 0 31.83-8.86c29.48-17.84 45.26-59.4 42.22-111.16ZM47.81 147.6C32.47 138.31 23.79 116.32 24 88c28.32-.24 50.31 8.47 59.6 23.81c4.85 8 5.64 17.33 2.46 26.94l-24.41-24.41a8 8 0 0 0-11.31 11.31l24.41 24.41c-9.61 3.18-18.93 2.39-26.94-2.46Zm149.31-10.22c-13.4 8.11-29.15 8.73-45.15 2l53.69-53.7a8 8 0 0 0-11.31-11.31L140.65 128c-6.76-16-6.15-31.76 2-45.15c13.94-23 47-35.82 89.33-34.83c.96 42.32-11.84 75.42-34.86 89.36Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="department-one__single">
                                    <div class="department-one__content">
                                        <h3 class="department-one__title"><a
                                                href="department-details.html">{{ __('site.goal_2') }}
                                                <br> {{ __('site.&_2') }}</a></h3>
                                        <div class="department-one__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="currentColor" d="M12.275 19q.3-.025.513-.238T13 18.25q0-.35-.225-.563T12.2 17.5q-1.025.075-2.175-.563t-1.45-2.312q-.05-.275-.262-.45T7.825 14q-.35 0-.575.263t-.15.612q.425 2.275 2 3.25t3.175.875ZM12 22q-3.425 0-5.713-2.35T4 13.8q0-2.5 1.988-5.438T12 2q4.025 3.425 6.013 6.363T20 13.8q0 3.5-2.288 5.85T12 22Zm0-2q2.6 0 4.3-1.763T18 13.8q0-1.825-1.513-4.125T12 4.65Q9.025 7.375 7.513 9.675T6 13.8q0 2.675 1.7 4.438T12 20Zm0-8Z"/></svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="department-one__single">
                                    <div class="department-one__content">
                                        <h3 class="department-one__title"><a
                                                href="department-details.html">{{ __('site.goal_3') }}
                                                <br>{{ __('site.&_3') }}</a></h3>
                                        <div class="department-one__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 32 32"><path fill="currentColor" d="m21 3.031l-.656.719c-1.469 1.617-2.68 2.34-3.688 2.813c-1.008.472-1.855.613-2.687 1.25c-.887.68-2.176 1.984-2.719 4.312c-1.164.254-2.016.7-2.688 1.281c-.664.574-1.164 1.227-1.78 1.938c-.005.008.003.023 0 .031c-.884 1.016-1.657 2.11-3.157 2.688l-.625.25V29h19.063c1.093-.059 1.851-.816 2.312-1.563c.46-.746.715-1.554.844-2.218c.332-1.692.937-6.563.937-6.563l.032-.093v-.094c-.032-.676-.31-1.25-.657-1.782l1.125-3.343l1.782-2.688l.5-.719l-.657-.593l-6.562-5.688zm.063 2.75l5.218 4.532l-1.375 2.03l-.093.095l-.032.156l-.906 2.687c-.473-.195-.96-.332-1.5-.312h-.063L16 15h-1v3.875c-.14 1.09-.746 1.512-1.5 1.813c-.25.101-.281.046-.5.093V14.97c-.164-3.707 1.156-4.774 2.188-5.563c.285-.219 1.12-.472 2.312-1.031c.996-.469 2.234-1.309 3.563-2.594zm-10 8.594c-.004.227-.075.387-.063.625v8h1s1.07-.012 2.219-.469c1.148-.457 2.535-1.527 2.781-3.406V17l5.375-.031h.031a1.662 1.662 0 0 1 1.75 1.562c-.004.016-.05.387-.062.469H20v2h3.844c-.106.773-.203 1.258-.313 2H20v2h3.219a5.002 5.002 0 0 1-.563 1.375c-.273.445-.508.613-.718.625H5v-7.469c1.621-.86 2.629-2.097 3.281-2.843c.676-.774 1.14-1.36 1.594-1.75c.297-.254.762-.399 1.188-.563z"/></svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="department-one__single">
                                    <div class="department-one__content">
                                        <h3 class="department-one__title"><a
                                            href="department-details.html">{{ __('site.goal_4') }}
                                            <br> {{ __('site.&_4') }}</a></h3>
                                            <div class="department-one__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M5.5 9.5L3 4L.5 9.5a2.5 2.5 0 0 0 5 0Zm8 0L11 4L8.5 9.5a2.5 2.5 0 0 0 5 0ZM1.5 4h11M7 4V2"/></svg>
                                           
                                        </div>
                                    </div>
                                </li>
                                <li class="department-one__single">
                                    <div class="department-one__content">
                                        <h3 class="department-one__title"><a href="department-details.html">{{ __('site.goal_5') }}
                                                <br> {{ __('site.&_5') }}</a></h3>
                                        <div class="department-one__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M12 19a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1Zm4.95-2.05a1 1 0 0 1 1.32-.083l.094.083l.707.707a1 1 0 0 1-1.32 1.497l-.094-.083l-.707-.707a1 1 0 0 1 0-1.414Zm-9.9 0a1 1 0 0 1 0 1.414l-.707.707a1 1 0 0 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0ZM12 2a1 1 0 0 1 .993.883L13 3v1.1l8.175 8.176c.609.608.223 1.63-.6 1.718l-.114.006H16.9a5.002 5.002 0 0 1-9.752.212L7.1 14H3.539c-.861 0-1.31-.996-.791-1.639l.077-.085L11 4.1V3a1 1 0 0 1 1-1Zm2.83 12H9.17a3.001 3.001 0 0 0 5.592.172L14.83 14Zm3.241-2L12.07 5.998L12 6l-.068-.002L5.93 12h12.14Z"/></g></svg>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="department-one__text">See All our Goals. <a
                                    href="">View
                                    all Goals</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Department One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__shape-1 float-bob-x">
                                <img src="{{ asset('storage/assets/images/shapes/about-one-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="{{ asset('storage') }}/assets/images/shapes/about-one-shape-3.png"
                                    alt="">
                            </div>
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('storage/assets/images/resources/iraq.png') }}"
                                        alt="">
                                </div>
                                <div class="about-one__img-2">
                                    <img src="{{ asset('storage/assets/images/resources/mountain.png') }}"
                                        alt="">
                                </div>
                                <div class="about-one__shape-2">
                                    <img src="{{ asset('storage/assets/images/shapes/about-one-shape-2.png') }}"
                                        alt="">
                                </div>
                                <div class="about-one__video-link">
                                    <a href="https://youtu.be/OhcDpm-ku9c?list=TLPQMDEwNjIwMjNzx4vp5Md4JA" class="video-popup">
                                        <div class="about-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="about-one__call-box">
                                    <div class="about-one__call-icon">
                                        <span class="icon-government-1"></span>
                                    </div>
                                    <div class="about-one__call-box-content">
                                        <p class="about-one__call-text">Green Mountain Office</p>
                                        <h4 class="about-one__call-number"><a href="tel:9212340800">+964 (1234)
                                                0800</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__icon">
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="section-title__tagline">Welcome to Green Mountain Relief and Development Organization</span>
                                <h2 class="section-title__title">Meet the Ideological Leader for Youth Empowerment</h2>
                            </div>
                            <p class="about-one__text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humor or random words which don't look even slightly believable.</p>
                            <div class="about-one__icon-and-big-text">
                                <div class="about-one__icon">
                                    <span class="icon-cityscape"></span>
                                </div>
                                <p class="about-one__big-text">A great organization dedicated to career and  development.</p>
                            </div>
                            <p class="about-one__text-2">There are many variations of passages of available but the majority have suffered alteration in some form.</p>
                            <div class="about-one__btn-box-and-signature">
                                <a href="about.html" class="about-one__btn thm-btn">Discover More</a>
                                <div class="about-one__signature">
                                    <img src="{{ asset('storage/assets/images/resources/about-one-signeture.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Feature One Start-->
        {{-- <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__img-box">
                                <div class="feature-one__img">
                                    <img src="{{ asset('storage/assets/images/resources/feature-1-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="feature-one__content">
                                    <div class="feature-one__icon">
                                        <span class="icon-history"></span>
                                    </div>
                                    <h3 class="feature-one__title"><a href="our-services.html">History &
                                            <br> establishment</a></h3>
                                </div>
                                <div class="feature-one__content-two">
                                    <div class="feature-one__content-two-top">
                                        <div class="feature-one__icon-2">
                                            <span class="icon-history"></span>
                                        </div>
                                        <h3 class="feature-one__title-2"><a href="our-services.html">History &
                                                <br> establishment</a></h3>
                                    </div>
                                    <div class="feature-one__content-two-bottom">
                                        <p class="feature-one__content-two-text">Aliquam viverra arcu. Donec aliquet
                                            blandit enim. Suspendisse id quam <br> sed eros luctus sit ame.</p>
                                        <div class="feature-one__content-two-btn-box">
                                            <a href="our-services.html"
                                                class="feature-one__content-two-read-more">Read
                                                More<i class="icon-right-arrow feature-one__content-two-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__img-box">
                                <div class="feature-one__img">
                                    <img src="{{ asset('storage/assets/images/resources/feature-1-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="feature-one__content">
                                    <div class="feature-one__icon">
                                        <span class="icon-cityscape"></span>
                                    </div>
                                    <h3 class="feature-one__title"><a href="our-services.html">Tourism &
                                            <br> visitor guides</a></h3>
                                </div>
                                <div class="feature-one__content-two">
                                    <div class="feature-one__content-two-top">
                                        <div class="feature-one__icon-2">
                                            <span class="icon-cityscape"></span>
                                        </div>
                                        <h3 class="feature-one__title-2"><a href="our-services.html">Tourism &
                                                <br> visitor guides</a></h3>
                                    </div>
                                    <div class="feature-one__content-two-bottom">
                                        <p class="feature-one__content-two-text">Aliquam viverra arcu. Donec aliquet
                                            blandit enim. Suspendisse id quam <br> sed eros luctus sit ame.</p>
                                        <div class="feature-one__content-two-btn-box">
                                            <a href="our-services.html"
                                                class="feature-one__content-two-read-more">Read
                                                More<i class="icon-right-arrow feature-one__content-two-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__img-box">
                                <div class="feature-one__img">
                                    <img src="{{ asset('storage/assets/images/resources/feature-1-3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="feature-one__content">
                                    <div class="feature-one__icon">
                                        <span class="icon-corporate"></span>
                                    </div>
                                    <h3 class="feature-one__title"><a href="our-services.html">Service &
                                            <br> departments</a></h3>
                                </div>
                                <div class="feature-one__content-two">
                                    <div class="feature-one__content-two-top">
                                        <div class="feature-one__icon-2">
                                            <span class="icon-corporate"></span>
                                        </div>
                                        <h3 class="feature-one__title-2"><a href="our-services.html">Service &
                                                <br> departments</a></h3>
                                    </div>
                                    <div class="feature-one__content-two-bottom">
                                        <p class="feature-one__content-two-text">Aliquam viverra arcu. Donec aliquet
                                            blandit enim. Suspendisse id quam <br> sed eros luctus sit ame.</p>
                                        <div class="feature-one__content-two-btn-box">
                                            <a href="our-services.html"
                                                class="feature-one__content-two-read-more">Read
                                                More<i class="icon-right-arrow feature-one__content-two-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section> --}}
        <!--Feature One End-->

        <!--Services One Start-->
        {{-- <section class="services-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="services-one__left">
                            <div class="services-one__shape-2 img-bounce">
                                <img src="{{ asset('storage') }}/assets/images/shapes/services-one-shape-2.png"
                                    alt="">
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('storage') }}/assets/images/resources/services-one-img-1.png"
                                        alt="">
                                    <div class="services-one__img-shadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="services-one__right">
                            <div class="services-one__shape-1 float-bob-x">
                                <img src="{{ asset('storage') }}/assets/images/shapes/services-one-shape-1.png"
                                    alt="">
                            </div>
                            <div class="services-one__shape-3 float-bob-x">
                                <img src="{{ asset('storage') }}/assets/images/shapes/services-one-shape-3.png"
                                    alt="">
                            </div>
                            <div class="services-one__points-title-box">
                                <p>Explore online services & resource</p>
                            </div>
                            <div class="services-one__points-box">
                                <ul class="services-one__points-list list-unstyled">
                                    <li>
                                        <a href="parking-permission.html">Parking Permission<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="tax-return.html">File a Tax Return<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="birth-certificate.html">Order Birth Certificate<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="building-permission.html">Get Building Permission<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="driving-license.html">Apply for Driving License<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="report-polution.html">Report Polution<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                </ul>
                                <ul class="services-one__points-list list-unstyled">
                                    <li>
                                        <a href="report-polution.html">Public Service Identity<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="birth-certificate.html">Apply for a City Job<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="driving-license.html">Professional Licenses<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="building-permission.html">National Planning Framework<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="driving-license.html">Apply for Business License<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="parking-permission.html">Online Court Services<span
                                                class="fa fa-angle-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Services One End-->

        <!--Video One Start-->
        {{-- <section class="video-one">
            <div class="video-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/video-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__inner">
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <h2 class="video-one__video-title">We help you solve your
                                <br> city government problems
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Video One End-->

        <!--Documents One Start-->
        {{-- <section class="documents-one">
            <div class="container">
                <div class="documents-one__inner">
                    <div class="documents-one__left">
                        <p>Recent <br> documents</p>
                    </div>
                    <div class="documents-one__right">
                        <ul class="documents-one__points list-unstyled">
                            <li>
                                <div class="documents-one__single">
                                    <div class="documents-one__content">
                                        <div class="documents-one__icon">
                                            <span class="icon-download-circular-button"></span>
                                        </div>
                                        <h3 class="documents-one__title"><a href="about.html">Vehicle Parking
                                                License</a></h3>
                                        <p class="documents-one__text">Download the license details file</p>
                                    </div>
                                    <div class="documents-one__icon-two">
                                        <span class="icon-pdf-file"></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="documents-one__single">
                                    <div class="documents-one__content">
                                        <div class="documents-one__icon">
                                            <span class="icon-download-circular-button"></span>
                                        </div>
                                        <h3 class="documents-one__title"><a href="about.html">City Board
                                                Applications</a></h3>
                                        <p class="documents-one__text">Download the license details file</p>
                                    </div>
                                    <div class="documents-one__icon-two">
                                        <span class="icon-pdf-file"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Documents One End-->

        <!--Counter One Start-->
        {{-- <section class="counter-one">
            <div class="counter-one__bg" style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);">
            </div>
            <div class="container">
                <div class="counter-one__inner">
                    <ul class="counter-one__list list-unstyled">
                        <li>
                            <div class="counter-one__count">
                                <h3 class="odometer" data-count="82">00</h3>
                                <span class="">k</span>
                            </div>
                            <p class="counter-one__text">Total people lived
                                <br> in our city
                            </p>
                        </li>
                        <li>
                            <div class="counter-one__count">
                                <h3 class="odometer" data-count="4">00</h3>
                                <span class="">th</span>
                            </div>
                            <p class="counter-one__text">Average home costs
                                <br> of ownership
                            </p>
                        </li>
                        <li>
                            <div class="counter-one__count">
                                <h3 class="odometer" data-count="26">00</h3>
                                <span class="">%</span>
                            </div>
                            <p class="counter-one__text">Private & domestic
                                <br> garden land
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <!--Counter One End-->

        <!--Team One Start-->
        {{-- <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">our team members</span>
                    <h2 class="section-title__title">Meet great city council
                        <br> members
                    </h2>
                </div>
                <div class="team-one__inner">
                    <div class="row">
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4">
                            <div class="team-one__single">
                                <div class="team-one__shape-1">
                                    <img src="{{ asset('storage') }}/assets/images/shapes/team-one-shape-1.png"
                                        alt="">
                                </div>
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/team/team-1-1.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <h3 class="team-one__name"><a href="team-details.html">Michale smith</a></h3>
                                    <p class="team-one__sub-title">Mayor</p>
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4">
                            <div class="team-one__single">
                                <div class="team-one__shape-2">
                                    <img src="{{ asset('storage') }}/assets/images/shapes/team-one-shape-2.png"
                                        alt="">
                                </div>
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/team/team-1-2.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <h3 class="team-one__name"><a href="team-details.html">Jessica brown</a></h3>
                                    <p class="team-one__sub-title">Mayor</p>
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4">
                            <div class="team-one__single">
                                <div class="team-one__shape-3">
                                    <img src="{{ asset('storage') }}/assets/images/shapes/team-one-shape-3.png"
                                        alt="">
                                </div>
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/team/team-1-3.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <h3 class="team-one__name"><a href="team-details.html">Harold cooper</a></h3>
                                    <p class="team-one__sub-title">City Developer</p>
                                    <div class="team-one__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Team One End-->

        <!--Testimonial One Start-->
        {{-- <section class="testimonial-one">
            <div class="testimonial-one__bg"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">Our testimonials</span>
                    <h2 class="section-title__title">People are appreciating
                        <br> our city & work?
                    </h2>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                        data-owl-options='{
                            "items": 3,
                            "margin": 30,
                            "smartSpeed": 700,
                            "loop":true,
                            "autoplay": false,
                            "nav":false,
                            "dots":false,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive":{
                                "0":{
                                    "items":1
                                },
                                "768":{
                                    "items":2
                                },
                                "992":{
                                    "items": 2
                                }
                            }
                        }'>
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-1.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__shape-2">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-2.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <p class="testimonial-one__text">Leverage agile frameworks to provide a robust
                                        synopsis
                                        for
                                        high level overviews. Iterative approaches to corporate strategy data foster to
                                        collaborative thinking.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img-box">
                                            <div class="testimonial-one__client-img">
                                                <img src="{{ asset('storage') }}/assets/images/testimonial/testimonial-1-1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h3 class="testimonial-one__client-name">Donald hardson</h3>
                                            <p class="testimonial-one__client-sub-title">CEO - CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-1.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__shape-2">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-2.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <p class="testimonial-one__text">Leverage agile frameworks to provide a robust
                                        synopsis
                                        for
                                        high level overviews. Iterative approaches to corporate strategy data foster to
                                        collaborative thinking.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img-box">
                                            <div class="testimonial-one__client-img">
                                                <img src="{{ asset('storage') }}/assets/images/testimonial/testimonial-1-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h3 class="testimonial-one__client-name">Aleesha brown</h3>
                                            <p class="testimonial-one__client-sub-title">CEO - CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-1.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__shape-2">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-2.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <p class="testimonial-one__text">Leverage agile frameworks to provide a robust
                                        synopsis
                                        for
                                        high level overviews. Iterative approaches to corporate strategy data foster to
                                        collaborative thinking.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img-box">
                                            <div class="testimonial-one__client-img">
                                                <img src="{{ asset('storage') }}/assets/images/testimonial/testimonial-1-3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h3 class="testimonial-one__client-name">Aleesha martin</h3>
                                            <p class="testimonial-one__client-sub-title">CEO - CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-inner">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-1.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__shape-2">
                                        <img src="{{ asset('storage') }}/assets/images/shapes/testimonial-one-shape-2.png"
                                            alt="">
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <p class="testimonial-one__text">Leverage agile frameworks to provide a robust
                                        synopsis
                                        for
                                        high level overviews. Iterative approaches to corporate strategy data foster to
                                        collaborative thinking.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img-box">
                                            <div class="testimonial-one__client-img">
                                                <img src="{{ asset('storage') }}/assets/images/testimonial/testimonial-1-4.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h3 class="testimonial-one__client-name">David coper</h3>
                                            <p class="testimonial-one__client-sub-title">CEO - CO Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Testimonial One End-->

        <!--Portfolio One Start-->
        {{-- <section class="portfolio-one">
            <div class="portfolio-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="portfolio-one__left">
                                <div class="section-title text-left">
                                    <div class="section-title__icon">
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="section-title__tagline">Recent work</span>
                                    <h2 class="section-title__title">Explore city beautiful
                                        <br> highlights portfolio
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="portfolio-one__right">
                                <div class="portfolio-one__text">
                                    <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed
                                        eros tincidunt luctus sit amet eu nibh egestas tempus turpis, sit amet mattis
                                        magna varius non.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-one__bottom">
                <div class="container">
                    <div class="portfolio-one__carousel thm-owl__carousel owl-theme owl-carousel"
                        data-owl-options='{
                            "items": 3,
                            "margin": 60,
                            "smartSpeed": 700,
                            "loop":true,
                            "autoplay": true,
                            "nav":false,
                            "dots":false,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive":{
                                "0":{
                                    "items":1
                                },
                                "768":{
                                    "items":2
                                },
                                "992":{
                                    "items": 3
                                },
                                "1200":{
                                    "items":3
                                }
                            }
                        }'>
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="portfolio-one__single">
                                <div class="portfolio-one__img-box">
                                    <div class="portfolio-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/project/portfolio-1-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="portfolio-one__content">
                                        <p class="portfolio-one__sub-title">Culture</p>
                                        <h4 class="portfolio-one__title"><a href="portfolio-details.html">Town of
                                                Rome</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio One Single End-->
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="portfolio-one__single mar-top">
                                <div class="portfolio-one__img-box">
                                    <div class="portfolio-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/project/portfolio-1-2.jpg"
                                            alt="">
                                    </div>
                                    <div class="portfolio-one__content">
                                        <p class="portfolio-one__sub-title">Culture</p>
                                        <h4 class="portfolio-one__title"><a href="portfolio-details.html">Town of
                                                Rome</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio One Single End-->
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="portfolio-one__single">
                                <div class="portfolio-one__img-box">
                                    <div class="portfolio-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/project/portfolio-1-3.jpg"
                                            alt="">
                                    </div>
                                    <div class="portfolio-one__content">
                                        <p class="portfolio-one__sub-title">Culture</p>
                                        <h4 class="portfolio-one__title"><a href="portfolio-details.html">Town of
                                                Rome</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio One Single End-->
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="portfolio-one__single mar-top">
                                <div class="portfolio-one__img-box">
                                    <div class="portfolio-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/project/portfolio-1-4.jpg"
                                            alt="">
                                    </div>
                                    <div class="portfolio-one__content">
                                        <p class="portfolio-one__sub-title">Culture</p>
                                        <h4 class="portfolio-one__title"><a href="portfolio-details.html">Town of
                                                Rome</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio One Single End-->
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="portfolio-one__single">
                                <div class="portfolio-one__img-box">
                                    <div class="portfolio-one__img">
                                        <img src="{{ asset('storage') }}/assets/images/project/portfolio-1-5.jpg"
                                            alt="">
                                    </div>
                                    <div class="portfolio-one__content">
                                        <p class="portfolio-one__sub-title">Culture</p>
                                        <h4 class="portfolio-one__title"><a href="portfolio-details.html">Town of
                                                Rome</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio One Single End-->
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Portfolio One End-->

        <!--Brand One Start-->
        {{-- <section class="brand-one">
            <div class="container">
                <div class="brand-one__title">
                    <p>Our partners & suppoters</p>
                </div>
                <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel"
                    data-owl-options='{
                        "items": 3,
                        "margin": 0,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":3
                            },
                            "992":{
                                "items": 5
                            }
                        }
                    }'>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('storage') }}/assets/images/brand/brand-1-1.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('storage') }}/assets/images/brand/brand-1-2.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('storage') }}/assets/images/brand/brand-1-3.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('storage') }}/assets/images/brand/brand-1-4.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('storage') }}/assets/images/brand/brand-1-5.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
            </div>
        </section> --}}
        <!--Brand One End-->

        <!--Event One Start-->
        {{-- <section class="event-one">
            <div class="event-one__shape-1">
                <img src="{{ asset('storage') }}/assets/images/shapes/event-one-shape-1.jpg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="event-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__icon">
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="section-title__tagline">Latest events</span>
                                <h2 class="section-title__title">Upcoming city activities & <br>
                                    events schedule</h2>
                            </div>
                            <ul class="event-one__points list-unstyled">
                                <li>
                                    <div class="event-one__single">
                                        <div class="event-one__img-box">
                                            <div class="event-one__img">
                                                <img src="{{ asset('storage') }}/assets/images/events/event-1-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="event-one__date">
                                                <p>30 <br> MAY</p>
                                            </div>
                                        </div>
                                        <div class="event-one__content">
                                            <div class="event-one__tag">
                                                <p>Celebration</p>
                                            </div>
                                            <ul class="event-one__meta list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>08:00am - 05:00pm</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-map-marker"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>New Hyde Park, NY 11040</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="event-one__title"><a href="event-details.html">The city
                                                    photography new
                                                    contest</a></h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-one__single">
                                        <div class="event-one__img-box">
                                            <div class="event-one__img">
                                                <img src="{{ asset('storage') }}/assets/images/events/event-1-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="event-one__date">
                                                <p>30 <br> MAY</p>
                                            </div>
                                        </div>
                                        <div class="event-one__content">
                                            <div class="event-one__tag">
                                                <p>Celebration</p>
                                            </div>
                                            <ul class="event-one__meta list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>08:00am - 05:00pm</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-map-marker"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>New Hyde Park, NY 11040</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="event-one__title"><a href="event-details.html">Activities &
                                                    events schedule</a></h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="event-one__right">
                            <div class="event-one__subscribe-top">
                                <div class="event-one__subscribe-top-bg"
                                    style="background-image: url(assets/images/backgrounds/event-one-subscribe-top-bg.jpg);">
                                </div>
                                <div class="event-one__subscribe-icon">
                                    <span class="icon-newsletter"></span>
                                </div>
                                <p class="event-one__subscribe-text">Subscribe to
                                    <br> our newslette for
                                    <br> daily updates
                                </p>
                                <p class="event-one__subscribe-text-2">Get latest news & events details</p>
                            </div>
                            <div class="event-one__subscribe-bottom">
                                <div class="event-one__subscribe-bottom-bg"
                                    style="background-image: url(assets/images/backgrounds/event-one-subscribe-bottom-bg.png);">
                                </div>
                                <form class="event-one__email-box">
                                    <div class="event-one__email-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                    <button type="submit" class="event-one__subscribe-btn thm-btn">Subscribe</button>
                                </form>
                                <p class="event-one__subscribe-text-3">Never share your email with others.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Event One End-->

        <!--News One Start-->
        {{-- <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">Latest News</span>
                    <h2 class="section-title__title">Latest news & articles
                        <br> from the blog
                    </h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{ asset('storage') }}/assets/images/blog/news-1-1.jpg"
                                        alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>30 <br> JAN</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <div class="news-one__user-and-meta">
                                    <div class="news-one__user">
                                        <div class="news-one__user-img">
                                            <img src="{{ asset('storage') }}/assets/images/blog/news-one-user-img.jpg"
                                                alt="">
                                        </div>
                                        <div class="news-one__user-text">
                                            <p>by <br>Admin</p>
                                        </div>
                                    </div>
                                    <div class="news-one__meta">
                                        <div class="icon">
                                            <span class="fas fa-comments"></span>
                                        </div>
                                        <div class="text">
                                            <p>2 Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="news-one__title"><a href="news-details.html">Supporting local business to
                                        bounce back</a>
                                </h3>
                                <div class="news-one__btn">
                                    <a href="news-details.html">Read More<i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{ asset('storage') }}/assets/images/blog/news-1-2.jpg"
                                        alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>30 <br> JAN</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <div class="news-one__user-and-meta">
                                    <div class="news-one__user">
                                        <div class="news-one__user-img">
                                            <img src="{{ asset('storage') }}/assets/images/blog/news-one-user-img.jpg"
                                                alt="">
                                        </div>
                                        <div class="news-one__user-text">
                                            <p>by <br>Admin</p>
                                        </div>
                                    </div>
                                    <div class="news-one__meta">
                                        <div class="icon">
                                            <span class="fas fa-comments"></span>
                                        </div>
                                        <div class="text">
                                            <p>2 Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="news-one__title"><a href="news-details.html">The city photography new
                                        contest</a>
                                </h3>
                                <div class="news-one__btn">
                                    <a href="news-details.html">Read More<i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{ asset('storage') }}/assets/images/blog/news-1-3.jpg"
                                        alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>30 <br> JAN</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <div class="news-one__user-and-meta">
                                    <div class="news-one__user">
                                        <div class="news-one__user-img">
                                            <img src="{{ asset('storage') }}/assets/images/blog/news-one-user-img.jpg"
                                                alt="">
                                        </div>
                                        <div class="news-one__user-text">
                                            <p>by <br>Admin</p>
                                        </div>
                                    </div>
                                    <div class="news-one__meta">
                                        <div class="icon">
                                            <span class="fas fa-comments"></span>
                                        </div>
                                        <div class="text">
                                            <p>2 Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="news-one__title"><a href="news-details.html">Leverage agile frameworks to
                                        provide</a>
                                </h3>
                                <div class="news-one__btn">
                                    <a href="news-details.html">Read More<i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section> --}}
        <!--News One End-->

        <!--Site Footer Start-->
        {{-- <footer class="site-footer">
            <div class="site-footer__img">
                <img src="{{ asset('storage') }}/assets/images/resources/site-footer-img.jpg" alt="">
            </div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="footer-widget__logo">
                        <a href="index.html"><img
                                src="{{ asset('storage') }}/assets/images/resources/footer-logo.png"
                                alt=""></a>
                    </div>
                    <div class="footer-widget__subscribe-box">
                        <div class="footer-widget__subscribe-text">
                            <p>Subscribe to Newsletter</p>
                        </div>
                        <form class="footer-widget__email-box mc-form" data-url="#">
                            <div class="footer-widget__email-input-box">
                                <input type="email" placeholder="Email Address" name="EMAIL">
                            </div>
                            <button type="submit" class="footer-widget__subscribe-btn thm-btn">Subscribe</button>
                        </form>
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div>
                </div>
                <div class="site-footer__middle">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__Contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <p class="footer-widget__Contact-text">80 Road Broklyn Street, 600 <br> New York, USA
                                </p>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a
                                                    href="mailto:needhelp@company.com">{{ __('site.contact_email') }}</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-phone-square"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:+926668880000">{{ __('site.contact_phone') }}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-clock"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('site.open_hours') }}: Mon - Fri 8.00 am - 6.00 pm</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('site.address') }}</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Links</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="events.html">Upcoming Events</a></li>
                                    <li><a href="news.html">Latest News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__departments">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Departments</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="about.html">Health & Safety</a></li>
                                    <li><a href="about.html">Housing & Land</a></li>
                                    <li><a href="about.html">Legal & Finance</a></li>
                                    <li><a href="about.html">Transport & Traffic</a></li>
                                    <li><a href="about.html">Arts & Culture</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="about.html">Administration</a></li>
                                    <li><a href="about.html">Fire Services</a></li>
                                    <li><a href="tax-return.html">Business & Taxation</a></li>
                                    <li><a href="about.html">Circular’s And Go’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="footer-widget__column footer-widget__gallery">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Gallery</h3>
                                </div>
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{ asset('storage') }}/assets/images/gallery/footer-widget-gallery-img-1.jpg"
                                                alt="">
                                            <a href="assets/images/gallery/footer-widget-gallery-img-1.jpg"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{ asset('storage') }}/assets/images/gallery/footer-widget-gallery-img-2.jpg"
                                                alt="">
                                            <a href="assets/images/gallery/footer-widget-gallery-img-2.jpg"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{ asset('storage') }}/assets/images/gallery/footer-widget-gallery-img-3.jpg"
                                                alt="">
                                            <a href="assets/images/gallery/footer-widget-gallery-img-3.jpg"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{ asset('storage') }}/assets/images/gallery/footer-widget-gallery-img-4.jpg"
                                                alt="">
                                            <a href="assets/images/gallery/footer-widget-gallery-img-4.jpg"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{ asset('storage') }}/assets/images/gallery/footer-widget-gallery-img-5.jpg"
                                                alt="">
                                            <a href="assets/images/gallery/footer-widget-gallery-img-5.jpg"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{ asset('storage') }}/assets/images/gallery/footer-widget-gallery-img-6.jpg"
                                                alt="">
                                            <a href="assets/images/gallery/footer-widget-gallery-img-6.jpg"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2023 by <a href="#">Govity
                                        Template</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img
                        src="{{ asset('storage') }}/assets/images/resources/logo-1.png" width="94"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@govity.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i
            class="icon-right-arrow"></i></a>


    <script src="{{ asset('storage/assets/vendors/') }}/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/jarallax/jarallax.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/nouislider/nouislider.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/odometer/odometer.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/swiper/swiper.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/tiny-slider/tiny-slider.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/wnumb/wNumb.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/wow/wow.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/isotope/isotope.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/countdown/countdown.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/bxslider/jquery.bxslider.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/vegas/vegas.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/timepicker/timePicker.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/circleType/jquery.circleType.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/circleType/jquery.lettering.min.js"></script>
    <script src="{{ asset('storage/assets/vendors/') }}/nice-select/jquery.nice-select.min.js"></script>



    <!-- template js -->
    <script src="{{ asset('storage/assets/js/govity.js') }}"></script>
</body>

</html>
