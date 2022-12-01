@extends('frontend.main_master')
@section('main')
    @section('title')
        Portfolio Details | Danylo Savchenko Website
    @endsection
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{$portfolio->portfolio_name}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active"
                                    aria-current="page">{{$portfolio->portfolio_name}}</li>
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

    <!-- portfolio-details-area -->
    <section class="services__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="services__details__thumb">
                        <img src="{{asset($portfolio->portfolio_image)}}" alt="">
                    </div>
                    <div class="services__details__content">
                        <h2 class="title">{{$portfolio->portfolio_title}}</h2>
                        <p>{!! $portfolio->portfolio_description !!}</p>
                        <p></p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="services__sidebar">
                        <div class="widget">
                            <h5 class="title">Project Information</h5>
                            <ul class="sidebar__contact__info">
                                <li><span>Date :</span> 2021-2022</li>
                                <li><span>Client :</span> Pet-Project</li>
                                <li class="cagegory"><span>Category :</span>
                                    <a>PHP</a>
                                </li>
                                <li><span>Project Link :</span> <a
                                        href="{{$portfolio->portfolio_url}}" ><i class="fab fa-git"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="title">Contact Information</h5>
                            <ul class="sidebar__contact__info">
                                <li><span>Address :</span> Ukraine, Zhytomyr</li>
                                <li><span>Mail :</span> danilo.savchenko96@gmail.com</li>
                                <li><span>Phone :</span> +380 98 377 64 77</li>
                            </ul>
                            <ul class="sidebar__contact__social">
                                <li><a href="https://github.com/dan1sssimo"><i class="fab fa-git"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/danylo-savchenko-3bb5b8222/"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-details-area-end -->

@endsection
