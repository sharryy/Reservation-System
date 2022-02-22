<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body>

<!-- START: header -->

<header role="banner" class="probootstrap-header">
    <!-- <div class="container"> -->
    <div class="row">
        <a href="index.html" class="probootstrap-logo visible-xs"><img src="{{ asset('img/logo_sm.png') }}"
                                                                       class="hires" width="120"
                                                                       height="33"
                                                                       alt="Free Bootstrap Template by uicookies.com"></a>

        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="rooms.html">Our Rooms</a></li>
                <li class="hidden-xs probootstrap-logo-center"><a href="index.html"><img
                            src="{{ asset('img/logo_md.png') }}"
                            class="hires"
                            width="181" height="50"
                            alt="Free Bootstrap Template by uicookies.com"></a>
                </li>
                <li><a href="reservation.html">Reservation</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Connect With Us</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- </div> -->
</header>
<!-- END: header -->

<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li style="background-image: url('public/img/slider_1.jpg');" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator probootstrap-animate"
                                    alt="Free HTML5 Bootstrap Template"></p>
                            <h1 class="probootstrap-heading probootstrap-animate">Welcome to Atlantis</h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word
                                mountains, far
                                from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(img/slider_2.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator probootstrap-animate"
                                    alt="Free HTML5 Bootstrap Template"></p>
                            <h1 class="probootstrap-heading probootstrap-animate">Enjoy Luxury Experience</h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word
                                mountains, far
                                from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </li>
    </ul>
</section>

<section class="probootstrap-cta probootstrap-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="probootstrap-cta-heading">Reserve a room for your family <span> &mdash; Far far away behind the
              word mountains far.</span></h2>
                <div class="probootstrap-cta-button-wrap"><a href="#" class="btn btn-primary">Reserve now</a></div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row mb30">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
                <h2>Explore our Services</h2>
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there
                    live the blind texts.</p>
                <p><img src="{{ asset('img/curve.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <img src="{{ asset('img/flaticon/svg/001-building.svg') }}" class="svg"
                             alt="Free HTML5 Bootstrap Template by uicookies.com">{{ asset('') }}
                    </div>
                    <div class="text">
                        <h3>1+ Million Hotel Rooms</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts.</p>
                        <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <img src="{{ asset('img/flaticon/svg/003-restaurant.svg') }}" class="svg"
                             alt="Free HTML5 Bootstrap Template by uicookies.com">
                    </div>
                    <div class="text">
                        <h3>Food &amp; Drinks</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts.</p>
                        <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <img src="{{ asset('img/flaticon/svg/004-parking.svg') }}" class="svg"
                             alt="Free HTML5 Bootstrap Template by uicookies.com">
                    </div>
                    <div class="text">
                        <h3>Airport Taxi</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts.</p>
                        <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
        <div class="row mb30">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
                <h2>Best Rooms</h2>
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there
                    live the blind texts.</p>
                <p><img src="{{ asset('img/curve.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template"></p>
            </div>
        </div>
        <div class="row probootstrap-gutter10">
            <div class="col-md-6">
                <div class="probootstrap-block-image-text">
                    <figure>
                        <a href="{{ asset('img/img_1.jpg') }}" class="image-popup">
                            <img src="{{ asset('img/img_1.jpg') }}" alt="Free HTML5 Bootstrap Template by uicookies.com"
                                 class="img-responsive">
                        </a>
                        <div class="actions">
                            <a href="https://vimeo.com/45830194" class="popup-vimeo"><i class="icon-play2"></i></a>
                        </div>
                    </figure>
                    <div class="text">
                        <h3><a href="#">Grand Deluxe Room</a></h3>
                        <div class="post-meta">
                            <ul>
                                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                                <li><i class="icon-user2"></i> 3 Guests</li>
                            </ul>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Book now from $109</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="probootstrap-block-image-text">
                    <figure>
                        <a href="{{ asset('img/img_2.jpg') }}" class="image-popup">
                            <img src="{{ asset('img/img_2.jpg') }}" alt="Free HTML5 Bootstrap Template by uicookies.com"
                                 class="img-responsive">
                        </a>
                        <div class="actions">
                            <a href="https://vimeo.com/45830194" class="popup-vimeo"><i class="icon-play2"></i></a>
                        </div>
                    </figure>
                    <div class="text">
                        <h3><a href="#">Ultra Superior Room</a></h3>
                        <div class="post-meta">
                            <ul>
                                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                                <li><i class="icon-user2"></i> 3 Guests</li>
                            </ul>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Book now from $109</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 probootstrap-relative">
                <h3 class="mt0 mb30">More Rooms</h3>
                <ul class="probootstrap-owl-navigation absolute right">
                    <li><a href="#" class="probootstrap-owl-prev"><i class="icon-chevron-thin-left"></i></a></li>
                    <li><a href="#" class="probootstrap-owl-next"><i class="icon-chevron-thin-right"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 probootstrap-relative">
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <div class="probootstrap-room">
                            <a href="#"><img src="{{ asset('img/img_1.jpg') }}"
                                             alt="Free Bootstrap Template by uicookies.com"
                                             class="img-responsive"></a>
                            <div class="text">
                                <h3>Classic Room</h3>
                                <p>Starting from <strong>$29.00/Night</strong></p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews
                                        </li>
                                        <li><i class="icon-user2"></i> 3 Guests</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="probootstrap-room">
                            <a href="#"><img src="{{ asset('img/img_2.jpg') }}"
                                             alt="Free Bootstrap Template by uicookies.com"
                                             class="img-responsive"></a>
                            <div class="text">
                                <h3>Grand Deluxe Room</h3>
                                <p>Starting from <strong>$32.00/Night</strong></p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews
                                        </li>
                                        <li><i class="icon-user2"></i> 3 Guests</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="probootstrap-room">
                            <a href="#"><img src="{{ asset('img/img_3.jpg') }}"
                                             alt="Free Bootstrap Template by uicookies.com"
                                             class="img-responsive"></a>
                            <div class="text">
                                <h3>Ultra Superior Room</h3>
                                <p>Starting from <strong>$42.00/Night</strong></p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews
                                        </li>
                                        <li><i class="icon-user2"></i> 3 Guests</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="probootstrap-room">
                            <a href="#"><img src="{{ asset('img/img_4.jpg') }}"
                                             alt="Free Bootstrap Template by uicookies.com"
                                             class="img-responsive"></a>
                            <div class="text">
                                <h3>Classic Room</h3>
                                <p>Starting from <strong>$29.00/Night</strong></p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews
                                        </li>
                                        <li><i class="icon-user2"></i> 3 Guests</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="probootstrap-room">
                            <a href="#"><img src="{{ asset('img/img_5.jpg') }}"
                                             alt="Free Bootstrap Template by uicookies.com"
                                             class="img-responsive"></a>
                            <div class="text">
                                <h3>Grand Deluxe Room</h3>
                                <p>Starting from <strong>$32.00/Night</strong></p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews
                                        </li>
                                        <li><i class="icon-user2"></i> 3 Guests</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="probootstrap-room">
                            <a href="#"><img src="{{ asset('img/img_6.jpg') }}"
                                             alt="Free Bootstrap Template by uicookies.com"
                                             class="img-responsive"></a>
                            <div class="text">
                                <h3>Ultra Superior Room</h3>
                                <p>Starting from <strong>$42.00/Night</strong></p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews
                                        </li>
                                        <li><i class="icon-user2"></i> 3 Guests</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="probootstrap-room">
                            <a href="#"><img src="{{ asset('img/img_7.jpg') }}"
                                             alt="Free Bootstrap Template by uicookies.com"
                                             class="img-responsive"></a>
                            <div class="text">
                                <h3>Ultra Superior Room</h3>
                                <p>Starting from <strong>$42.00/Night</strong></p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews
                                        </li>
                                        <li><i class="icon-user2"></i> 3 Guests</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-half">
    <div class="image" style="background-image: url('public/img/slider_2.jpg');"></div>
    <div class="text">
        <div class="probootstrap-animate fadeInUp probootstrap-animated">
            <h2 class="mt0">Best 5 Star hotel</h2>
            <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
            <div class="row">
                <div class="col-md-6">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the
                        blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                        language
                        ocean.</p>
                </div>
                <div class="col-md-6">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
            <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
    </div>
</section>

<!-- START: footer -->
<footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <p class="mt40"><img src="{{ asset('img/logo_sm.png') }}" class="hires" width="120" height="33"
                                         alt="Free HTML5 Bootstrap Template by uicookies.com"></p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Blog</h3>
                    <ul class="probootstrap-blog-list">
                        <li>
                            <a href="#">
                                <figure class="probootstrap-image"><img src="{{ asset('img/img_1.jpg') }}"
                                                                        alt="Free Bootstrap Template by uicookies.com"
                                                                        class="img-responsive"></figure>
                                <div class="probootstrap-text">
                                    <h4>River named Duden flows</h4>
                                    <span class="meta">August 2, 2017</span>
                                    <p>A small river named Duden flows by their place</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure class="probootstrap-image"><img src="{{ asset('img/img_2.jpg') }}"
                                                                        alt="Free Bootstrap Template by uicookies.com"
                                                                        class="img-responsive"></figure>
                                <div class="probootstrap-text">
                                    <h4>River named Duden flows</h4>
                                    <span class="meta">August 2, 2017</span>
                                    <p>A small river named Duden flows by their place</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure class="probootstrap-image"><img src="{{ asset('img/img_3.jpg') }}"
                                                                        alt="Free Bootstrap Template by uicookies.com"
                                                                        class="img-responsive"></figure>
                                <div class="probootstrap-text">
                                    <h4>River named Duden flows</h4>
                                    <span class="meta">August 2, 2017</span>
                                    <p>A small river named Duden flows by their place</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Contact</h3>
                    <ul class="probootstrap-contact-info">
                        <li><i class="icon-location2"></i>
                            <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                        <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                        <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="row mt40">
            <div class="col-md-12 text-center">
                <ul class="probootstrap-footer-social">
                    <li><a href=""><i class="icon-twitter"></i></a></li>
                    <li><a href=""><i class="icon-facebook"></i></a></li>
                    <li><a href=""><i class="icon-instagram2"></i></a></li>
                </ul>
                <p>
                    <small>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Atlantis</a>. All
                        Rights
                        Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/"
                                                                      target="_blank">uicookies.com</a> Demo Images:
                        Unsplash.com &amp; Pexels.com</small>
                </p>

            </div>
        </div>
    </div>
</footer>
<!-- END: footer -->

<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
