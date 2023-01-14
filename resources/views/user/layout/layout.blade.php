<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <!-- Primary Meta Tags -->
	<title>BEKAL INTERNATIONAL - @yield('pagetitle')</title>
	<meta name="title" content="BEKAL INTERNATIONAL">
	<meta name="description" content="We are more than just a marketing agency. Our work involves both analysis and creation. We communicate, design, develop and publish… To influence, experience, move and encourage . We understand that there’s more to marketing Than making you look good, we work to escalate your growth in business. As your strategic partner, we devise an expert plan to market your brand to gain maximum exposure.">

	<meta name="author" content="BEKAL INTERNATIONAL">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://thedaxads.com/">
	<meta property="og:title" content="BEKAL INTERNATIONAL">
	<meta property="og:description" content="We are more than just a marketing agency. Our work involves both analysis and creation. We communicate, design, develop and publish… To influence, experience, move and encourage . We understand that there’s more to marketing Than making you look good, we work to escalate your growth in business. As your strategic partner, we devise an expert plan to market your brand to gain maximum exposure.
			We also over-deliver our customer expectations with our versatile style of doing work with innovative working methodology and embedding teamed and brilliant execution results in high-quality advertising with standards difficult to rise up to.">
	<meta property="og:image" content="assets/images/image.jpeg"/>
	<meta property="og:image" content="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://thedaxads.com/">
	<meta property="twitter:title" content="BEKAL INTERNATIONAL">
	<meta property="twitter:description" content="We are more than just a marketing agency. Our work involves both analysis and creation. We communicate, design, develop and publish… To influence, experience, move and encourage . We understand that there’s more to marketing Than making you look good, we work to escalate your growth in business. As your strategic partner, we devise an expert plan to market your brand to gain maximum exposure.
			We also over-deliver our customer expectations with our versatile style of doing work with innovative working methodology and embedding teamed and brilliant execution results in high-quality advertising with standards difficult to rise up to.">
	<meta property="twitter:image" content="assets/images/image.jpeg"/>
	<meta property="twitter:image" content="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>

		<!-- favicon -->
		<link rel="shortcut icon" href="assets/img/bekal_logo/logo.png">
		<link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57-white.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72-white.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114-white.png">

		<!-- Global Links -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Floating WA Icon -->
    <a href="https://api.whatsapp.com/send?phone=919895342017" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper navbar-brand valign">
                <a href="index.html">
                    <div class="logo">
                        <img src="{{ asset('user/assets/img/bekal_logo/logo dark.png')}}" class="logo-img" alt="">
                    </div>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown"> <span class="nav-link "><a href="{{ url('/') }}"> Home</a></span></li>
                <li class="nav-item dropdown"> <span class="nav-link "><a href="{{ url('/about') }}">About</a> </span></li>
                <li class="nav-item dropdown"> <span class="nav-link "><a href="{{ url('/services') }}">Services</a> </span></li>
                <li class="nav-item dropdown"> <span class="nav-link "><a href="{{ url('/blog') }}">Blog</a> </span></li>
                <li class="nav-item dropdown"> <span class="nav-link "><a href="{{ url('/gallery') }}">Gallery</a> </span></li>
                <li class="nav-item dropdown"> <span class="nav-link "><a href="{{ url('/contact') }}">Contact</a> </span></li>
               </ul>
            </div>
        </div>
    </nav>

    @section('container')
    @show

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-column footer-about">
                            <div class="logo">
                        <img src="{{ asset('user/assets/img/bekal_logo/logo dark.png')}}" class="logo-img" alt="">
                    </div>
                            <h3 class="footer-title"></h3>
                            <p class="footer-about-text">Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.</p>

                            <!-- <div class="footer-language"> <i class="lni ti-world"></i>
                                <select onchange="location = this.value;">
                                    <option value="http://duruthemes.com/">English</option>
                                    <option value="http://duruthemes.com/">German</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Explore</h3>
                            <ul class="footer-explore-list list-unstyled">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">Hotel Bekal International<br>TB Road, Kanhangad 671315</p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone"><span class="flaticon-call"></span> <a href="tel:04672202017">04672202017</a></p>
                                <p class="footer-contact-mail"><span class="flaticon-envelope"></span> <a href="mailto:booking@bekalinternational.com">booking@bekalinternational.com</a></p>
                            </div>
                            <div class="footer-about-social-list">
                                <a href="https://www.instagram.com/hotel_bekal_international/?hl=en"><i class="ti-instagram"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100085037710887"><i class="ti-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">© Copyright 2023 Hotel Bekal International by <a href="https://thedaxads.com">Daxads</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->

    <script>
      $(document).ready(function(){
      $('.tab-pane').each(function(tab,index){
      if(index==0){
      tab.addClass('active');
         }
       });
     });
    </script>
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.isotope.v3.0.2.js')}}"></script>
    <script src="{{ asset('user/assets/js/pace.js')}}"></script>
    <script src="{{ asset('user/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/scrollIt.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{ asset('user/assets/js/YouTubePopUp.js')}}"></script>
    <script src="{{ asset('user/assets/js/select2.js')}}"></script>
    <script src="{{ asset('user/assets/js/datepicker.js')}}"></script>
    <script src="{{ asset('user/assets/js/smooth-scroll.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/custom.js')}}"></script>
</body>