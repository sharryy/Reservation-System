@extends('layouts.master')

@section('title', 'Reservations')

@section('content')
    <section class="probootstrap-slider flexslider probootstrap-inner">
        <ul class="slides">
            <li style="background-image: url('public/img/slider_1.jpg');" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator probootstrap-animate"
                                        alt="Free HTML5 Bootstrap Template"></p>
                                <h1 class="probootstrap-heading probootstrap-animate">Book A Room</h1>
                                <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word
                                    mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row probootstrap-gutter40">
                <div class="col-md-8">
                    <h2 class="mt0">Reservation Form</h2>
                    <form action="{{ route('reservations.store') }}" method="post" class="probootstrap-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="form-field">
                                <i class="icon icon-mail"></i>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="room">Room</label>
                            <div class="form-field">
                                <i class="icon icon-chevron-down"></i>
                                <select name="room" id="room" class="form-control">
                                    <option value="">Select a Room</option>
                                    <option value="1">Classic Room</option>
                                    <option value="2">Ultra Superior Room</option>
                                    <option value="3">Grand Deluxe Room</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date-arrival">Arrival</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" class="form-control" id="date-arrival" name="date-arrival">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date-departure">Departure</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" class="form-control" id="date-departure"
                                               name="date-departure">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit"
                                   value="Reserve">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2 class="mt0">Feedback</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Send Message</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
