@extends('frontend.main_master')
@section('main')

    @section('title')
        Contact | Danylo Savchenko Website
    @endsection
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Contact me</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

        <!-- contact-map -->
        <div id="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2145.0969960057964!2d28.658991926234588!3d50.255245258949344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472c6493ebf252ed%3A0xcada781000d71138!2z0LLRg9C70LjRhtGPINCa0LjRl9Cy0YHRjNC60LAsIDc3LCDQltC40YLQvtC80LjRgCwg0JbQuNGC0L7QvNC40YDRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMTAwMDA!5e0!3m2!1suk!2sua!4v1669736751664!5m2!1suk!2sua"
                allowfullscreen loading="lazy"></iframe>
        </div>
        <!-- contact-map-end -->

        <!-- contact-area -->
        <div class="contact-area">
            <div class="container">
                <form method="post" id="contactForm" action="{{ route('store.message') }}" class="contact__form">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input name="name" type="text" placeholder="Enter your name*">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="email" type="email" placeholder="Enter your mail*">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="subject" type="text" placeholder="Enter your subject*">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="phone" type="text" placeholder="Your Phone*">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea  name="message" id="message" placeholder="Enter your massage*"></textarea></div>
                    <button type="submit" class="btn">send massage</button>
                </form>
            </div>
        </div>
        <!-- contact-area-end -->

        <!-- contact-info-area -->
        <section class="contact-info-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">address line</h4>
                                <span>Ukraine<br> Zhytomyr</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Phone Number</h4>
                                <span>+380 98 377 64 77</span>
                                <span><i class="fab fa-telegram"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Mail Address</h4>
                                <span>danilo.savchenko96@gmail.com</span>
                                <span><i class="fab fa-telegram"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-area-end -->
    </main>
@endsection
