@extends('user/layout/layout')
@section('pagetitle' , 'About')


@section('container')

<!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('user/assets/img/slider/9.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5> Hotel Bekal International</h5>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
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
                    <p>Welcome to Bekal International, a premier hotel located in the heart of Kanhangad . Our hotel offers guests the perfect blend of comfort, luxury, Affordable and convenience. We are proud to provide our guests with top-notch amenities, including Restaurant, Banquet Hall, Party hall , Ayurvedic Massage.</p>
                    <p>Our rooms are designed with your comfort in mind, featuring Daily Housekeeping, Breakfast on call, Free Wifi and many more</p>
                    <p>At Bekal International , we understand that great service is the key to a memorable stay. That's why our team is dedicated to providing personalised and attentive service to ensure that our guests feel at home. Whether you're here for business or pleasure, our staff will go above and beyond to make your stay as enjoyable as possible.</p>
                    <p>We are also conveniently located near some of Kanhangad 's most popular attractions, including Thaikadappuram beach 8 km, Bekal Fort 10 km, Bekal beach 9 km, Kottappuram backwater 10 km, Anandashram 5 km. Whether you're here to explore the city or simply to relax, our hotel is the perfect place to call home during your stay.</p>
                    <p>We look forward to welcoming you to Bekal International  and making your stay with us an unforgettable experience.</p>
                    <!-- reservation -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:04672202017">04672202017</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/Reception/7.JPG') }}" alt="" class="mt-90 mb-30" loading="lazy"> </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="{{ asset('user/assets/img/bekal/Bekal Pics/eXTERIOR/4.JPG') }}" alt="" loading="lazy"> </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="pricing section-padding bg-black" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Hotel Bekal International</span></div>
                    <div class="section-title"><span>Facilities</span></div>
                    <div class="pricing-card">
                            <div class="desc">
                                <div class="name" style="margin-bottom: 5px;">Pets</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-close unavailable"></i>Pets are not allowed</li>
                                </ul>
                                <br>
                                <div class="name" style="margin-bottom: 5px;">Internet</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>Wifi is available in all areas and is free of charge</li>
                                </ul>
                                <br>
                                <div class="name" style="margin-bottom: 5px;">Parking</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>Free private parking is possible on site (reservation not needed)</li>
                                </ul>
                                <br>
                                <div class="name" style="margin-bottom: 5px;">Business facilities</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>Meeting/banquet facilities (additional charges)</li>
                                    <li><i class="ti-check"></i>Fax/photocopying (additional charges)</li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="section-subtitle"><span></span></div>
                    <div class="section-title"></div>
                    <div class="pricing-card">
                            <div class="desc">
                                <div class="name" style="margin-bottom: 5px;">General</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>Room service</li>
                                    <li><i class="ti-check"></i>Non smoking rooms</li>
                                    <li><i class="ti-check"></i>Family rooms</li>
                                    <li><i class="ti-check"></i>Lift</li>
                                    <li><i class="ti-check"></i>Designated smoking area</li>
                                </ul>
                                <br>
                                <div class="name" style="margin-bottom: 5px;">Reception services</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>24-hour front desk</li>
                                    <li><i class="ti-check"></i>Luggage storage</li>
                                    <li><i class="ti-check"></i>Invoice provided</li>
                                </ul>
                                <br>
                                <div class="name" style="margin-bottom: 5px;">Cleaning services</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>Laundry (additional charge)</li>
                                    <li><i class="ti-check"></i>Dry cleaning (additional charge)</li>
                                    <li><i class="ti-check"></i>Ironing services (additional charge)</li>
                                    <li><i class="ti-check"></i>Daily housekeeping</li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="">
                        <div class="pricing-card">
                            <div class="desc" style="padding-bottom: 45px;">
                                <div class="name" style="margin-bottom: 5px;">Outdoors</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>Garden</li>
                                    <li><i class="ti-check"></i>Terrace</li>
                                </ul>
                                <br>
                                <div class="name" style="margin-bottom: 5px;">Miscellaneous</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>24-hour security</li>
                                    <li><i class="ti-check"></i>Key card access</li>
                                    <li><i class="ti-check"></i>CCTV in common areas</li>
                                    <li><i class="ti-check"></i>CCTV outside property</li>
                                    <li><i class="ti-check"></i>Fire extinguisher</li>                                 
                                </ul>
                                <br>
                                <div class="name" style="margin-bottom: 5px;">Language spoken</div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i>Hindi</li>
                                    <li><i class="ti-check"></i>English</li>
                                    <li><i class="ti-check"></i>Arabic</li>
                                </ul>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilties -->
    <section class="facilties section-padding bg-black" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" style="background: #f8f5f0;" data-animate-effect="fadeInUp">
                        <span class="flaticon-world"></span>
                        <h5>Airport pickup</h5>
                        <p>We'll pick you up from the airport while you enjoy your ride at affordable prices</p>
                        <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" style="background: #f8f5f0;" data-animate-effect="fadeInUp">
                        <span class="flaticon-car"></span>
                        <h5>Car Parking</h5>
                        <p>Free private parking is possible on site (reservation is not needed)</p>
                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" style="background: #f8f5f0;" data-animate-effect="fadeInUp">
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
                    <div class="single-facility animate-box" style="background: #f8f5f0;" data-animate-effect="fadeInUp">
                        <span class="flaticon-wifi"></span>
                        <h5>Free Wifi</h5>
                        <p> Wifi is available in the hotel rooms and is free of charge</p>
                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" style="background: #f8f5f0;" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Breakfast on call</h5>
                        <p> Enjoy delicious breakfast and varieties of dishes</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    {{-- <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Professionals</div>
                    <div class="section-title">Meet The Team</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="item">
                        <div class="img"> <img src="{{ asset('user/assets/img/team/4.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Valentina Karla</h6>
                            <p>General Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>valentina@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> 
                        <img src="{{ asset('user/assets/img/team/1.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Micheal White</h6>
                            <p>Guest Service Department</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a> 
                                    <a href="#"><i class="ti-facebook"></i></a> 
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>micheal@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ asset('user/assets/img/team/2.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Olivia Martin</h6>
                            <p>Reservations Manager</p>
                            <div class="social valign">
                                <div class="social valign">
                                    <div class="full-width"> 
                                       <a href="#"><i class="ti-instagram"></i></a> 
                                       <a href="#"><i class="ti-twitter"></i></a> 
                                       <a href="#"><i class="ti-facebook"></i></a> 
                                       <a href="#"><i class="ti-pinterest"></i></a>
                                       <p>olivia@hotel.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ asset('user/assets/img/team/5.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Mariana Dana</h6>
                            <p>F&B Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>mariana@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ asset('user/assets/img/team/3.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Enrico Brown</h6>
                            <p>Head Chef</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>enrico@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ asset('user/assets/img/team/6.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Victoria Dan</h6>
                            <p>Meetings and Events Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>victoria@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection