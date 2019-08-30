
@extends('layouts.main')


@section("content")

<section class="wow fadeIn no-padding parallax xs-background-image-center" data-stellar-background-ratio="0.5" style="background-image: url('/customimg/smileyoung-unsplash.jpg')">
    <div class="opacity-extra-medium bg-black"></div>
    <div class="container-fluid position-relative full-screen">
        <div class="slider-typography">
            <div class="slider-text-middle-main">
                <div class="slider-text-bottom">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-right bg-deep-pink-opacity padding-six-lr md-padding-seven-lr padding-five-tb xs-padding-30px-all last-paragraph-no-margin">
                        <div class="box-separator-line width-180px bg-white md-width-120px sm-width-90px sm-display-none"></div>
                        <h1 class="font-weight-600 alt-font text-white width-95 sm-width-100">Build, Learn and Grow.</h1>
                        <p class="text-large font-weight-300 text-white width-75 md-width-85 sm-width-95 xs-width-100 xs-display-none">
                            We provide existing and intending small business owners and managers the skills and information to set up and scale their business.
                        </p>
                        <a href="{{URL('/get-started')}}" target="_blank" class="btn btn-medium btn-white margin-40px-top text-link-deep-pink xs-margin-10px-top">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end parallax hero section -->
<!-- start about agency section -->
<section class="no-padding wow fadeIn bg-light-gray" id="services">
    <div class="container-fluid no-padding">
        <div class="row equalize sm-equalize-auto no-margin">
            <div class="col-md-7 col-sm-12 col-xs-12 display-table wow fadeIn last-paragraph-no-margin sm-text-center">
                <div class="display-table-cell vertical-align-middle padding-fifteen-all md-padding-ten-all xs-no-padding-lr xs-text-center">
                    <span class="text-medium margin-15px-bottom display-block alt-font text-deep-pink">Our Goal is to support your business growth.</span>
                    <h4 class="alt-font text-extra-dark-gray font-weight-600 sm-margin-lr-auto xs-width-100">
                    So, you have just registered that business and set up shop?
                    </h4>
                    <p class="width-100 md-width-100">
                        But wait a minute, when the sales start coming through, as they will surely do; how do you send your invoices and track payments?
                        <br>
                        How do you know how much you make from each client or that your revenues will be sufficient to cover your costs and expenses?
                        <br>
                        You need a good accounting system!
                        At MAVE, we are all about ensuring you have the right financial information to make sound decisions for your business.
                    </p>
                    <a href="{{URL('/about')}}" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-35px-top">
                        About Us
                    </a>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 position-relative sm-height-500px xs-height-300 cover-background wow fadeIn" style="background-image: url('/customimg/computer-unsplash.jpg')"></div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start parallax with video section -->
<section class="parallax" data-stellar-background-ratio="0.1">
    <div class="opacity-extra-medium bg-black" style="opacity: 1;  "></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 text-center center-col">
             <h5 class="alt-font text-white">Ready for the next level?</h5>
             <span class="text-extra-large text-white alt-font display-inline-block margin-5px-top margin-30px-right xs-no-margin-right xs-no-margin-top xs-margin-15px-bottom xs-width-100">
                <a href="{{URL('/get-started')}}" class="btn btn-white btn-small vertical-align-top xs-no-margin-right">Get Started</a>

            </span>
            </div>
        </div>
    </div>
</section>
<!-- end parallax with video section -->
  <!-- start testimonial style 03 section -->
 

<!-- end call to action -->
<!-- end blog section -->


@endsection
