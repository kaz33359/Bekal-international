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
    <!-- Blogs -->
    <section class="pricing section-padding">
        <div class="container">
            <div class="row">
                <?php
                $blog=DB::table('blogs')->get(); ?>
                @foreach ($blog as $item)
                <div class="col-md-4">
                        <div class="pricing-card">
                            <img src="{{ asset('adminBlog_image')}}/{{ $item->blog_image }}" alt="">
                            <div class="desc">
                                <div class="name">{{ $item->posted_date }}</div>
                                <div class="amount">{{ $item->blog_title }}</div>
                                <p>{{ $item->blog_summary }}</p></li>
                                <div class="more"><a href="{{ url('user/blogDetails') }}/{{ $item->id }}" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                            </div>
                        </div>
                </div>
                @endforeach   
            </div>
        </div>
    </section>
@endsection