@extends('user/layout/layout')
@section('pagetitle' , 'Gallery')


@section('container')


<!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('user/assets/img/slider/9.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Images & Videos</h5>
                    <h1>Our Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Images</div>
                    <div class="section-title">Image Gallery</div>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/1.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/1.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/2.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/2.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/3.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/3.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <!-- 2 columns -->
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/4.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/4.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/5.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/5.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/6.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/6.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/8.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/8.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/7.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/7.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <!-- 2 columns -->
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/9.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/9.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('user/assets/img/bekal/10.jpeg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('user/assets/img/bekal/10.jpeg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery -->
    {{-- <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Videos</div>
                    <div class="section-title">Video Gallery</div>
                </div>
                <!-- 2 columns -->
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ asset('user/assets/img/slider/2.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh4GnTKFQso"> <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ asset('user/assets/img/slider/3.jpg') }}" alt="Vimeo">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh4GnTKFQso"> <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ asset('user/assets/img/slider/4.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh4GnTKFQso"> <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ asset('user/assets/img/slider/7.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh4GnTKFQso"> <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ asset('user/assets/img/slider/1.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh4GnTKFQso"> <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @endsection