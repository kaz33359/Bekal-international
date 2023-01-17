@extends('user/layout/layout')
@section('pagetitle' , 'Suite Twin Room')


@section('container')
<!-- Room Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('user/assets/img/slider/suitetwin/7.JPG') }}"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('user/assets/img/slider/suitetwin/2.JPEG') }}"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('user/assets/img/slider/suitetwin/6.JPG') }}"></div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Room Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12"> 
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">Hotel Bekal International</div>
                    <div class="section-title">Suite Twin Room</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">This suite has a balcony, tea/coffee maker, and electric kettle.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Check-in</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-in from 12:00 pm - anytime</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Early check-in subject to availability</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Check-out</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-out before 12:00 pm</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Express check-out</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">Bedroom</h6>
                            <p style="margin-bottom: 30px;">Linen <br>Wardrobe or Closet</p>
                        </div>

                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">Accessibility</h6>
                            <p style="margin-bottom: 30px;">Accessible by lift <br>Entire unit wheelchair accessible</p>
                        </div>
                        
                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">Media & Technology</h6>
                            <p style="margin-bottom: 30px;">Cable channels <br>Flat-screen TV<br>Telephone</p>
                        </div>

                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">Food & Drink</h6>
                            <p style="margin-bottom: 30px;">Bottle of water <br>Tea/Coffee maker</p>
                        </div>
                        
                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">Bathroom</h6>
                            <p style="margin-bottom: 30px;">Bidet <br>Body Soap <br>conditioner <br>Free Toiletries <br>Hairdryer <br>Private Bathroom <br>Shampoo <br>Shower <br>Shower cap <br>Slippers <br>Toilet <br>Toothbrush <br>Towels</p>
                        </div>

                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">General</h6>
                            <p style="margin-bottom: 30px;">No Smoking <br>Air conditioning <br>Fan <br>Interconnected room(s) available <br>Iron <br>Key card access <br>Trash cans</p>
                        </div>

                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">Kitchen</h6>
                            <p style="margin-bottom: 30px;">Electric kettle <br>Tumble dryer</p>
                        </div>

                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">Outdoors</h6>
                            <p style="margin-bottom: 30px;">Balcony</p>
                        </div>

                        <div class="col-md-6">
                            <h6 style="margin-bottom: 10px;">View</h6>
                            <p style="margin-bottom: 30px;">view </p>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="butn-dark mt-15 mb-30"> <a href="contact.html"><span>Check Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>Amenities</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="ti-plug"></span> </div>
                            <div class="page-list-text">
                                <p>Socket near the bed</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-wifi"></span> </div>
                            <div class="page-list-text">
                                <p>Free Wifi</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-clock-1"></span> </div>
                            <div class="page-list-text">
                                <p>430 sqft room</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Similiar Room
    <section class="rooms1 section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Luxury Hotel</span></div>
                    <div class="section-title"><span>Similar Rooms</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="assets/img/rooms/1.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">150$ / Night</a></h6>
                                <h5><a href="room-details.html">Junior Suite</a> </h5>
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
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="assets/img/rooms/2.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">200$ / Night</a></h6>
                                <h5><a href="room-details.html">Family Room</a></h5>
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
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="assets/img/rooms/5.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">250$ / Night</a></h6>
                                <h5><a href="room-details.html">Double Room</a></h5>
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
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="assets/img/rooms/6.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">300$ / Night</a></h6>
                                <h5><a href="room-details.html">Deluxe Room</a></h5>
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
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="assets/img/rooms/8.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">150$ / Night</a></h6>
                                <h5><a href="room-details.html">Superior Room</a></h5>
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
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="assets/img/rooms/5.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">400$ / Night</a></h6>
                                <h5><a href="room-details.html">Wellness Room</a></h5>
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
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Pricing -->
    <section class="pricing section-padding" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Hotel Bekal International</span></div>
                    <div class="section-title">Facilities</div>
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
@endsection