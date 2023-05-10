@extends('frontend.main_master')
@section('main')
    @section('title')
        Category Blog Details | Danylo Savchenko Website
    @endsection
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title"> {{ $categoryName->blog_category }} </h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

        <!-- blog-area -->
        <section class="standard__blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @foreach($blogpost as $item)
                            <div class="standard__blog__post">
                                <div class="standard__blog__thumb">
                                    <a href="{{ route('blog.details',$item->id) }}"><img src="{{ asset($item->blog_image) }}" alt=""></a>
                                    <a href="{{ route('blog.details',$item->id) }}" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                                </div>
                                <div class="standard__blog__content">
                                    <div class="blog__post__avatar">
                                        <div class="thumb"><img src="{{ asset($item->blog_image) }}" alt=""></div>
                                        <span class="post__by">By : <a href="#">Halina Spond</a></span>
                                    </div>
                                    <h2 class="title"><a href="{{ route('blog.details',$item->id) }}">{{$item->blog_title}}</a></h2>
                                    <p>{!! Str::limit($item->blog_description, 200) !!}  </p>
                                    <ul class="blog__post__meta">
                                        <li><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
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
        <!-- blog-area-end -->

    </main>
@endsection