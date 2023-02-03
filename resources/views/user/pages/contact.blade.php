@extends('user/layout/layout')
@section('pagetitle' , 'Contact')


@section('container')
<!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="{{ asset('user/assets/img/slider/9.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Hotel Bekal International</h3>
                    <p>Our hotel is the ideal place to call home while you are here, whether you  are on a business trip or on a leasure trip just to unwind. We are eager to make your visit to Bekal International a memorable one and look forward to greeting you.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:04672202017">04672202017</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:booking@bekalinternational.com">booking@bekalinternational.com</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> Hotel Bekal International
                            <br>TB Road, Kanhangad, Kerala 671315
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <form method="POST" class="contact__form" action="{{ route('user.enquiry') }}">
                        @csrf
                        @if (Session::get('success'))
                          <div class="alert alert-success">
                              {{ Session::get('success') }}
                          </div>
                        @endif
                        @if (Session::get('fail'))
                          <div class="alert alert-danger">
                              {{ Session::get('fail') }}
                          </div>
                         @endif
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Your Number *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="country" type="text" placeholder="Your Country *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="city" type="text" placeholder="Your City *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Subject *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark"> Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15592.061948662827!2d75.0901033!3d12.3147438!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x713dbecc2fbf32db!2sHotel%20Bekal%20International!5e0!3m2!1sen!2sin!4v1672124088564!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>


@endsection