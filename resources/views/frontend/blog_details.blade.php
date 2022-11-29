@extends('frontend.main_master')
@section('main')
    @section('title')
        Blog Details | Danylo Savchenko Website
    @endsection
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">{{ $blogs->blog_title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src=" {{asset('frontend/assets/img/icons/breadcrumb_icon01.png')}}" alt=""></li>
                    <li><img src=" {{asset('frontend/assets/img/icons/breadcrumb_icon02.png')}}" alt=""></li>
                    <li><img src=" {{asset('frontend/assets/img/icons/breadcrumb_icon03.png')}}" alt=""></li>
                    <li><img src=" {{asset('frontend/assets/img/icons/breadcrumb_icon04.png')}}" alt=""></li>
                    <li><img src=" {{asset('frontend/assets/img/icons/breadcrumb_icon05.png')}}" alt=""></li>
                    <li><img src=" {{asset('frontend/assets/img/icons/breadcrumb_icon06.png')}}" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        <!-- blog-details-area -->
        <section class="standard__blog blog__details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <img src="{{ asset($blogs->blog_image) }}" alt="">
                            </div>
                            <div class="blog__details__content services__details__content">
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }}</li>
                                </ul>
                                <h2 class="title">{{ $blogs->blog_title }}</h2>
                                <p> {!! $blogs->blog_description !!} </p>
                            </div>
                            <div class="blog__details__bottom">
                                <ul class="blog__details__tag">
                                    <li class="title">Tag:</li>
                                    <li class="tags-list">
                                        <a href="#">{{ $blogs->blog_tags }}</a>
                                    </li>
                                </ul>
                                <ul class="blog__details__social">
                                    <li class="title">Share :</li>
                                    <li class="social-icons">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog__sidebar">
                            <div class="widget">
                                <h4 class="widget-title">Recent Blog</h4>
                                <ul class="rc__post">
                                    @foreach($allBlogs as $all)
                                        <li class="rc__post__item">
                                            <div class="rc__post__thumb">
                                                <a href="{{route('blog.details',$all->id)}}"><img src="{{ asset($all->blog_image) }} " alt=""></a>
                                            </div>
                                            <div class="rc__post__content">
                                                <h5 class="title"><a href="{{route('blog.details',$all->id)}}">{{ $all->blog_title }}
                                                    </a></h5>
                                                <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }} </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="sidebar__cat">
                                    @foreach($categories as $category)
                                        <li class="sidebar__cat__item"><a href="{{ route('category.blog',$category->id) }}">{{ $category->blog_category  }}  </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

        <!-- contact-area -->
        <section class="homeContact homeContact__style__two">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter mail*">
                                    <input type="number" placeholder="Enter number*">
                                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
    </main>
@endsection
