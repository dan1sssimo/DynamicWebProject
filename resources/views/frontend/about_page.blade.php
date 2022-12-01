@extends('frontend.main_master')
@section('main')
    @section('title')
        About | Danylo Savchenko Website
    @endsection
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">About me</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Me</li>
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

        <!-- about-area -->
        <section class="about about__style__two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img src="{{$aboutPage->about_image}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">01 - About me</span>
                                <h2 class="title">{{$aboutPage->title}}</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{asset('frontend/assets/img/icons/about_icon.png')}}" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p><span>{{$aboutPage->short_title}}</span></p>
                                </div>
                            </div>
                            <p class="desc">{{$aboutPage->short_description}}</p>
                            <a href="https://github.com/dan1sssimo" class="btn">My GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="about__info__wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                            data-bs-target="#about" type="button"
                                            role="tab" aria-controls="about" aria-selected="true">About
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab"
                                            data-bs-target="#skills" type="button"
                                            role="tab" aria-controls="skills" aria-selected="false">Skills
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="awards-tab" data-bs-toggle="tab"
                                            data-bs-target="#awards" type="button"
                                            role="tab" aria-controls="awards" aria-selected="false">English skills
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                            data-bs-target="#education" type="button"
                                            role="tab" aria-controls="education" aria-selected="false">education
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="about" role="tabpanel"
                                     aria-labelledby="about-tab">
                                    <p class="desc">{!!  $aboutPage->long_description!!}</p>
                                </div>
                                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                    <div class="about__skill__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Communication</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">80%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">PHP, Git, Linux, Windows</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">90%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Resourcefulness</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 75%;"
                                                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">75%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Laravel</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">90</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Analytical Abilities</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">80%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">JS, jQuery</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">70%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Trustworthy</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: 100%;"
                                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">100%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">HTML, CSS</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">70%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                    <div class="about__award__wrap">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img src="{{asset('frontend/assets/img/images/awards_01.png')}}"
                                                             alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">My english level is Upper Intermediate</h5>
                                                        <p>I can communicate without much difficulty but still make a lot of mistakes and misunderstand sometimes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="education" role="tabpanel"
                                     aria-labelledby="education-tab">
                                    <div class="about__education__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Computer Software Engineering - Zhytomyr </h3>
                                                    <span class="date">September 2019 - July 2023 </span>
                                                    <p>Zhytomyr State Technical university - <b>Bachelor</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial testimonial__style__two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="testimonial__wrap">
                            <div class="section__title text-center">
                                <span class="sub-title">02 - Client Feedback</span>
                                <h2 class="title">Some happy clients feedback</h2>
                            </div>
                            <div class="testimonial__two__active">
                                @foreach($feedbacks as $feedback)
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>{{$feedback->short_description}}</p>
                                        <div class="testimonial__avatar">
                                            <span>{{$feedback->job_type}}</span>
                                            <div class="testi__avatar__img">
                                                <img src="{{asset('frontend/assets/img/images/php_image.png')}}"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="testimonial__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial__two__icons">
                <ul>
                    <li><img src="{{asset('frontend/assets/img/icons/testi_shape01.png')}}" alt=""></li>
                    <li><img src="{{asset('frontend/assets/img/icons/testi_shape02.png')}}" alt=""></li>
                    <li><img src="{{asset('frontend/assets/img/icons/testi_shape03.png')}}" alt=""></li>
                    <li><img src="{{asset('frontend/assets/img/icons/testi_shape04.png')}}" alt=""></li>
                    <li><img src="{{asset('frontend/assets/img/icons/testi_shape05.png')}}" alt=""></li>
                    <li><img src="{{asset('frontend/assets/img/icons/testi_shape06.png')}}" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="{{route('blog.details',$blog->id)}}">
                                        <img src="{{asset($blog->blog_image)}}" alt="">
                                    </a>
                                    <div class="blog__post__tags">
                                        <a href="{{route('category.blog',$blog['category']->id)}}">{{$blog['category']['blog_category']}}</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span
                                        class="date">{{\Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</span>
                                    <h3 class="title">
                                        <a href="{{route('blog.details',$blog->id)}}">{{$blog->blog_title}}</a></h3>
                                    <a href="{{route('blog.details',$blog->id)}}" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="blog__button text-center">
                    <a href="{{route('home.blog')}}" class="btn">more blog</a>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->
        <!-- contact-area -->
        <section class="homeContact">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">05 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>I'm available for big projects, your small orders or any commercial relations.
                                    Use the form to inquire about rates and availability, or email
                                    me directly.</p>
                                <h2 class="mail"><a
                                        href="mailto:danilo.savchenko96@gmail.com">danilo.savchenko96@gmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form method="post" id="contactForm" action="{{route('store.message')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input name="name" class="form-control" type="text"
                                               placeholder="Enter your name*">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" class="form-control" type="email"
                                               placeholder="Enter your mail*">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" class="form-control" type="text"
                                               placeholder="Enter your subject*">
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" class="form-control" type="text"
                                               placeholder="Your Phone*">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Enter your massage*"></textarea>
                                    </div>
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
    <!-- main-area-end -->

@endsection
