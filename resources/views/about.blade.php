
@extends('layouts.main')


@section("content")
<!-- start page title section -->
<section class="no-padding one-third-screen position-relative wow fadeIn">
    <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 display-table one-third-screen page-title-large">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start sub title -->
                    <span class="display-block text-white opacity6 margin-10px-bottom alt-font">
                        We build ideas.
                    </span>
                    <!-- end sub title -->
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-700 width-55 sm-width-80 xs-width-100 center-col no-margin-bottom">
                        Get to Know Us.
                    </h1>
                    <!-- end page title -->
                </div>
            </div>
            <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white bg-deep-pink padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
    <div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background one-third-screen" style="background-image:url('/customimg/whiteprocess-unsplash.jpg');"></div>
            <!-- end slider item -->
        </div>
        <div class="swiper-pagination swiper-auto-pagination display-none"></div>
    </div>
</section>
<!-- end page title section -->
<!-- start feature box section -->
<section class="wow fadeIn" id="about" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row equalize md-equalize-auto">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding display-table md-margin-five-top sm-text-center xs-no-margin-top wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="display-table-cell vertical-align-middle padding-twelve-lr md-padding-15px-lr xs-text-center xs-padding-five-lr xs-padding-ten-top width-100">
                    <h4 class="font-weight-600 alt-font text-extra-dark-gray letter-spacing-minus-1">Mave's MISSION </h4>
                    <p class="text-extra-large text-extra-dark-gray alt-font font-weight-400">
                    To take businesses to the next level.
                    </p>
                    <p >
                    Mave Business Support Services handles each client dinstinctly; prioritizing on the necessary
                    features and using industry standard practices to quickly develop a well tailored solution.
                    bla blablablaasdfadfasdfmdf

                    </p>
                    <p class="text-extra-dark-gray">
                    We support result driven companies.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wow fadeIn big-section bg-extra-dark-gray" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12 wow fadeIn sm-text-center" style="visibility: visible; animation-name: fadeIn;">
                <span class="text-extra-large text-middle-line text-dark-gray display-block margin-five-bottom sm-margin-15px-bottom font-weight-300 sm-text-middle-line">
                    Our Expertise and Services
                </span>
                <h4 class="text-extra-light-gray display-inline-block font-weight-300 sm-width-80 sm-center-col xs-width-100">
                    With our vast experience in managing and With our vast experience in managing and With our vast experience in managing and With our vast experience in managing and
                    our vast experience in managing and With our vast experience in managing and
                </h4>
                <a href="{{URL('process')}}" class="margin-35px-top btn btn-small btn-white sm-margin-30px-top">
                    Our Process
                </a>
            </div>
        </div>
    </div>
</section>
<section class="half-section wow fadeIn cover-background" style="background-image: url('http://placehold.it/1920x472');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 center-col position-relative text-center">
                <span class="text-extra-large text-white alt-font display-inline-block margin-5px-top margin-30px-right xs-no-margin-right xs-no-margin-top xs-margin-15px-bottom xs-width-100">We'd love to hear about your business</span>
                <a href="{{URL('/get-started')}}" class="btn btn-white btn-small vertical-align-top xs-no-margin-right">Get Started</a>
            </div>
        </div>
    </div>
</section>
@endsection
