
@extends('layouts.main')


@section("content")
<!-- start page title section -->

            <!-- start slider section -->
            <section class="no-padding main-slider height-100 mobile-height wow fadeIn">
                <div class="swiper-full-screen swiper-container height-100 width-100 white-move">
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        <div class="swiper-slide equalize xs-equalize-auto">
                            <div class="col-md-6 col-sm-6 col-xs-12 bg-deep-pink height-700px xs-height-250px">
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-left padding-twelve-all xs-padding-five-all">
                                        <h6 class="title-large text-white margin-auto alt-font font-weight-600 letter-spacing-minus-3">we are creative thinkers</h6>
                                        <span class="text-large text-middle-line font-weight-300 margin-30px-top width-65 md-width-75 sm-width-90 text-white display-block xs-margin-15px-top">Learn to think outside the box.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding-lr cover-background height-700px xs-height-400px" style="background-image:url('/customimg/about1.jpg');"></div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide equalize xs-equalize-auto">
                            <div class="col-md-6 col-sm-6 col-xs-12 bg-deep-pink height-700px xs-height-250px">
                                <div class="display-table width-100 height-100">
                                    <div class="display-table-cell vertical-align-middle text-left padding-twelve-all xs-padding-five-all">
                                        <h6 class="title-large text-white margin-auto alt-font font-weight-600 letter-spacing-minus-3">modern skill building</h6>
                                        <span class="text-large text-middle-line font-weight-300 margin-30px-top width-65 md-width-75 sm-width-90 text-white display-block xs-margin-15px-top">Learn skills to build your career</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding-lr cover-background height-700px xs-height-400px" style="background-image:url('/customimg/about4.jpg');">
                            </div>
                        </div>
                        <!-- end slider item -->
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination"></div>
                    <div class="swiper-button-next swiper-button-black-highlight display-none"></div>
                    <!-- end slider pagination -->
                </div>
            </section>
            <!-- end slider section -->
<section class="wow fadeIn big-section bg-extra-dark-gray" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12 wow fadeIn sm-text-center" style="visibility: visible; animation-name: fadeIn;">
                <span class="text-extra-large text-middle-line text-dark-gray display-block margin-five-bottom sm-margin-15px-bottom font-weight-300 sm-text-middle-line">
                    Our Mission
                </span>
                <h4 class="text-extra-light-gray display-inline-block font-weight-300 sm-width-80 sm-center-col xs-width-100">
                    Engineering Career Expo is a platform established to create an environment of interaction between students and industry based personnel so as to empower them with relevant skills in the engineering field
                </h4>
            </div>
        </div>
    </div>
</section>
<section class="half-section wow fadeIn cover-background" style="background-image: url('/customimg/abohut-us.jpg');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 center-col position-relative text-center">
                <span class="text-extra-large text-white alt-font display-inline-block margin-5px-top margin-30px-right xs-no-margin-right xs-no-margin-top xs-margin-15px-bottom xs-width-100">We'd love to have you with us.</span>
                <a href="{{URL('/get-started')}}" class="btn btn-white btn-small vertical-align-top xs-no-margin-right">Get Started</a>
            </div>
        </div>
    </div>
</section>
@endsection
