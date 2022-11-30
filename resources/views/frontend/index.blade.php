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
                            <form method="post" action="{{route('store.message')}}">
                                @csrf
                                <input name="name" type="text" placeholder="Enter your name*">
                                <input name="email" type="email" placeholder="Enter your mail*">
                                <input name="subject" type="text" placeholder="Enter your subject*">
                                <input name="phone" type="text" placeholder="Your phone*">
                                <textarea name="message" placeholder="Enter your massage*"></textarea>
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
