@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
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
                    <div class="probootstrap-cta-button-wrap"><a href="{{ route('reservations.index') }}" class="btn btn-primary">Reserve now</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row mb30">
                <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
                    <h2>Explore our Services</h2>
                    <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia,
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
                    <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia,
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
                                <img src="{{ asset('img/img_1.jpg') }}"
                                     alt="Free HTML5 Bootstrap Template by uicookies.com"
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
                                <img src="{{ asset('img/img_2.jpg') }}"
                                     alt="Free HTML5 Bootstrap Template by uicookies.com"
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
                                            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252
                                                Reviews
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
                                            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252
                                                Reviews
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
                                            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252
                                                Reviews
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
                                            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252
                                                Reviews
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
                                            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252
                                                Reviews
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
                                            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252
                                                Reviews
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
                                            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252
                                                Reviews
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
                <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator" alt="Free HTML5 Bootstrap Template">
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there
                            live the
                            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large
                            language
                            ocean.</p>
                    </div>
                    <div class="col-md-6">
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It
                            is a
                            paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
                <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
        </div>
    </section>
@endsection
