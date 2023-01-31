@extends('user/layout/layout')
@section('pagetitle' , 'Home')


@section('container')
<!-- Header Video -->
    <header class="header">
        <div class="video-fullscreen-wrap">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="video-fullscreen-video" data-overlay-dark="6">
                <video playsinline="" autoplay="" loop="" muted="">
                    <source src="{{ asset('user/assets/img/bekal/video/Video/1.MOV') }}" type="video/mp4" autoplay="" loop="" muted="">
                    <source src="{{ asset('user/assets/img/bekal/video/Video/1.MOV') }}" type="video/webm" autoplay="" loop="" muted="">
                </video>
            </div>
            <div class="v-middle caption overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1"> 
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h4>Hotel Bekal International</h4>
                                <h1>Enjoy a Luxury Experience</h1>
                                <div class="butn-dark"> <a href="#rooms"><span>Rooms & Suites</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- slider reservation -->
        <div class="reservation">
            <a href="tel:04672202017">
                <div class="icon d-flex justify-content-center align-items-center">
                    <i class="flaticon-call"></i>
                </div>
                <div class="call"><span>04672202017</span> <br>Reservation</div>
            </a>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    
    <!-- About -->
    <section class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">Hotel Bekal International</div>
                    <div class="section-title">Enjoy a Luxury Experience</div>
                    <p>At Bekal International , we understand that great service is the key to a memorable stay. That's why our team is dedicated to providing personalised and attentive service to ensure that our guests feel at home. Whether you're here for business or pleasure, our staff will go above and beyond to make your stay as enjoyable as possible.</p>
                    <!-- <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.</p> -->
                    <!-- call -->
                    <button class="btn btn-dark"> <a href="{{ url('/about') }}">Read More</a></button>
                    <div class="reservations" style="padding-top: 20px">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:04672202017">04672202017</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Reception/2.JPG') }}" alt="" class="mt-90 mb-30">
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Reception/6.JPG') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1" id="rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Hotel Bekal International</div>
                    <div class="section-title">Rooms & Suites</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Standard Non AC/3.JPG')}}" alt=""> </div> <span class="category"><a href="contact.html">Book</a></span>
                        <div class="con">
                            {{-- <h6><a href="#">150$ / Night</a></h6> --}}
                            <h5><a href="{{ url('/standardRoom') }}">Standard Non AC Room</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="{{ url('/standardRoom') }}">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Standard AC/7.JPG')}}" alt=""> </div> <span class="category"><a href="contact.html">Book</a></span>
                        <div class="con">
                            {{-- <h6><a href="#">200$ / Night</a></h6> --}}
                            <h5><a href="{{ url('/superiorRoom') }}">Superior AC Room</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="{{ url('/superiorRoom') }}">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Deluxe Room/4.JPG')}}" alt=""> </div> <span class="category"><a href="contact.html">Book</a></span>
                        <div class="con">
                            {{-- <h6><a href="#">250$ / Night</a></h6> --}}
                            <h5><a href="{{ url('/deluxRoom') }}">Deluxe Room</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="{{ url('/deluxRoom') }}">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Exec King Room/10.JPG')}}" alt=""> </div> <span class="category"><a href="contact.html">Book</a></span>
                        <div class="con">
                            {{-- <h6><a href="#">300$ / Night</a></h6> --}}
                            <h5><a href="{{ url('/executive_kingRoom') }}">Executive King Room</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="{{ url('/executive_kingRoom') }}">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Exec Twin Room/8.JPG')}}" alt=""> </div> <span class="category"><a href="contact.html">Book</a></span>
                        <div class="con">
                            {{-- <h6><a href="#">150$ / Night</a></h6> --}}
                            <h5><a href="{{ url('/executive_twinRoom') }}">Executive Twin Room</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="{{ url('/executive_twinRoom') }}">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Exec Suite/7.jpg')}}" alt=""> </div> <span class="category"><a href="contact.html">Book</a></span>
                        <div class="con">
                            {{-- <h6><a href="#">300$ / Night</a></h6> --}}
                            <h5><a href="{{ url('/suite_kingRoom') }}">Suite King Room</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="{{ url('/suite_kingRoom') }}">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Suite Twin/5.jpeg')}}" alt=""> </div> <span class="category"><a href="contact.html">Book</a></span>
                        <div class="con">
                            {{-- <h6><a href="#">150$ / Night</a></h6> --}}
                            <h5><a href="{{ url('/suite_twinRoom') }}">Suite Twin Room</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="{{ url('/suite_twinRoom') }}">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <!-- <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Best Prices</span></div>
                    <div class="section-title"><span>Extra Services</span></div>
                    <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum sceisue the aucan.</p>
                    <p class="color-2">Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque habitant morbine.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:04672202017">04672202017</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <div class="pricing-card">
                            <img src="assets/img/pricing/1.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room cleaning</div>
                                <div class="amount">$50<span>/ month</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="assets/img/pricing/2.jpg" alt="">
                            <div class="desc">
                                <div class="name">Drinks included</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="assets/img/pricing/3.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room Breakfast</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="assets/img/pricing/4.jpg" alt="">
                            <div class="desc">
                                <div class="name">Safe & Secure</div>
                                <div class="amount">$15<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Promo Video -->
    <!-- <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="assets/img/slider/2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                       <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                        <div class="section-subtitle"><span>Hotel Bekal International</span></div>
                        <div class="section-title"><span>Promotional Video</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center col-md-12">
                        <a class="vid" href="https://youtu.be/7BGNAGahig8">
                        <div class="vid-butn">
                            <span class="icon">
                                <i class="ti-control-play"></i>
                            </span>
                        </div>
                    </a>
                    </div>

                </div>
            </div>
    </section> -->
    <!-- Facilties -->
    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-world"></span>
                        <h5>Airport pickup</h5>
                        <p>We'll pick you up from the airport while you enjoy your ride at affordable prices</p>
                        <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-car"></span>
                        <h5>Car Parking</h5>
                        <p> Free private parking is possible on site (reservation is not needed)</p>
                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-bed"></span>
                        <h5>Daily Housekeeping</h5>
                        <p>Cleanliness is the first thing for us, daily housekeeping services, linen is changed daily</p>
                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-swimming"></span>
                        <h5>Swimming Pool</h5>
                        <p>Swimming pool tincidunt nise ace park norttito sit space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-wifi"></span>
                        <h5>Free Wifi</h5>
                        <p> Wifi is available in the hotel rooms and is free of charge</p>
                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Breakfast on call</h5>
                        <p> Enjoy delicious breakfast and varieties of dishes</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('user/assets/img/slider/8.JPG')}}" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>What Client's Say?</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <span class="quote"><img src="{{ asset('user/assets/img/quot.png')}}" alt=""></span>
                                    <p>Perfect stay, well maintained hotel , they have focused very well on their aesthetic appearance, and have maintained the same to its true beauty. The staff were very polite and humble. Exceptional room service with daily housekeeping. The rooms were spacious and huge with an amazing city view. Also the sunset from the room was really beautiful. Overall a great and memorable experience. Truly great hospitality and amazing atmosphere.Customer relations and customer service are good.Good accessibility to main areas and very good parking facilities.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('user/assets/img/bekal/testimonial/malavika.png')}}" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Malavika Sreenath</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="{{ asset('user/assets/img/quot.png')}}" alt=""></span>
                                    <p>Had a wonderful experience staying here for a few days. Decent facilities. The rooms are well maintained and beautifully designed after the recent renovation. The staffs are also very friendly, polite and professional.A shout out to every staff who made my stay a delightful one from the baggage facilitators, front desk, room service and house keeping. Thank you for the stay. Looking forward to come back again.I would definitely recommend this place to anyone who is travelling to Kanhangad.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('user/assets/img/bekal/testimonial/tom.png')}}" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Tom Bruce</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="{{ asset('user/assets/img/quot.png')}}" alt=""></span>
                                    <p>Completely refurbished hotel. value for money. Rooms are spacious interior is contemporary with a touch of elegance. From lobby to corridors to rooms , everything is accentuated with right kind of material. Lots of space , air and light into room. People are very well mannered and your needs are taken care.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('user/assets/img/bekal/testimonial/anoop.png')}}" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>K.N. Anoop</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="{{ asset('user/assets/img/quot.png')}}" alt=""></span>
                                    <p>The hotel is renovated , clean ,modern.All expected amenities provided...the TV had YouTube which is always an added plus..But the best thing about the hotel is thd staffs behavior...expected manager Mohammed Abbas....he made the place feel like home ...thank you sir if you happen to read this review...from me n my daughter.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('user/assets/img/bekal/testimonial/sreekala.png')}}" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Sreekala Radhakrishnan</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="services.html"><img src="{{ asset('user/assets/img/bekal/Bekal Pics/Restaurant/3.jpg')}}" alt="" loading="lazy"></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>The Restaurant</h4>
                            <p>COMING SOON</p>
                            <div class="butn-dark"> <a href="services.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Banquet Hall</h4>
                            <p>From birthdays, weddings, cocktails, to office meetings you can use our banquet for all such events. Luxurious, Stylish and Contemporary space with unsurpassed attention to detail, we make every occasion extraordinary.</p>
                            <div class="butn-dark"> <a href="services.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="services.html"><img src="{{ asset('user/assets/img/bekal/Bekal Pics/Banquet Hall/7.JPG')}}" alt="" loading="lazy"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="services.html"><img src="{{ asset('user/assets/img/bekal/partyHall.jpg')}}" alt="" loading="lazy"></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Modern</h6>
                            </div>
                            <h4>Party hall</h4>
                            <p>Five well-equipped, tech-powered meeting rooms and venues with capacities ranging from 18 to 300 are designed to cater to diverse requirements, from a cosy meeting room with state-of-the-art conferencing facilities to a grand ballroom with safety pillars and a plush al fresco area for a glamorous wedding reception, and every manner of corporate dos and parties.</p>
                            <div class="butn-dark"> <a href="services.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Ayurvedic Massage</h4>
                            <p>Allow yourself to be pampered with our customized Ayurvedic treatments that include body revitalization, rejuvenation, anti-ageing treatments and special facials.</p>
                            <div class="butn-dark"> <a href="services.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="services.html"><img src="{{ asset('user/assets/img/bekal/ayurveda.jpg')}}" alt="" loading="lazy"></a>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- News -->
    <section class="news section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Hotel Blog</span></div>
                    <div class="section-title"><span>Our News</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $blog=DB::table('blogs')->get(); ?>
                        @foreach ($blog as $item)
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('adminBlog_image')}}/{{ $item->blog_image }}" alt="">
                                <div class="date">
                                    <a href="post.html">{{ $item->posted_date }}</a>
                                </div>
                            </div>
                            <div class="con">
                            <h5><a href="{{ url('user/blogDetails') }}/{{ $item->id }}">{{ $item->blog_title }}</a></h5>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/news/2.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Spa</a>
                                </span>
                                <h5><a href="post.html">Benefits of Spa Treatments</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/news/3.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Bathrooms</a>
                                </span>
                                <h5><a href="post.html">Hotel Bathroom Collections</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/news/4.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> 
                                <span class="category">
                                    <a href="news.html">Health</a>
                                </span>
                                <h5><a href="post.html">Weight Loss with Fitness Health Club</a></h5>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/news/6.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Design</a>
                                </span>
                                <h5><a href="post.html">Retro Lighting Design in The Hotels</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('user/assets/img/news/5.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Health</a>
                                </span>
                                <h5><a href="post.html">Benefits of Swimming for Your Health</a></h5>
                            </div>
                        </div> --}}
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection