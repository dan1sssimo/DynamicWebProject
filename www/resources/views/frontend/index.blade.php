@extends('frontend.main_master')
@section('main')
    @section('title')
        Home | Danylo Savchenko Website
    @endsection
    <!-- banner-area -->
    @include('frontend.home_all.home_slide')
    <!-- banner-area-end -->

    <!-- about-area -->
    @include('frontend.home_all.home_about')
    <!-- about-area-end -->


    <!-- work-process-area -->
    @include('frontend.home_all.work_process_area')
    <!-- work-process-area-end -->

    <!-- portfolio-area -->
    @include('frontend.home_all.portfolio')
    <!-- portfolio-area-end -->

    <!-- testimonial-area -->
    @include('frontend.home_all.home_feedback')
    <!-- testimonial-area-end -->
    <!-- blog-area -->
    @include('frontend.home_all.home_blog')
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
@endsection
