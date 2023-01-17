@extends('user/layout/layout')
@section('pagetitle' , 'Blog Details')


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
                    <h1>Blog Details</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
              <?php
                $blog=DB::table('blogs')->where('id', '=', $id)->first(); ?>
                <div class="col-md-12"> 
                  <div class="row">
                    <div class="author" style="margin-right: 40px;margin-left: 10px;margin-bottom: 20px;"><h3><i class="ti-shine" style="color: #ab8a62"></i> {{ $blog->author_name }}</h3></div>
                    <div class="date-comment"><h4><i class="ti-calendar" style="color: #ab8a62"></i> {{ $blog->posted_date }}</h4></div>
                  </div>
                    <h1>{{ $blog->blog_title }}</h1>
                    <img src="{{ asset('adminBlog_image')}}/{{ $blog->blog_image }}" class="mb-30" alt="">
                    <p>{!! $blog->blog_content !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection