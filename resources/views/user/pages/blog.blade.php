@extends('user/layout/layout')
@section('pagetitle' , 'Blog')


@section('container')


<!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('user/assets/img/slider/9.jpg') }}">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90">
				    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
					<h5>Hotel Bekal International</h5>
					<h1>Blogs</h1>
				</div>
			</div>
        </div>
    </div>
    <!-- Rooms -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="{{ asset('user/assets/img/slider/4.jpg') }}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>150$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Junior Suite</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 mb-90 left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="{{ asset('user/assets/img/slider/3.jpg') }}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>200$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Family Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="{{ asset('user/assets/img/slider/3.jpg') }}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>250$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Double Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-3 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="{{ asset('user/assets/img/slider/2.jpg') }}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>300$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Deluxe Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-4 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection