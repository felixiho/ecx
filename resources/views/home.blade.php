
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
            <div class="col-md-6 col-sm-12 col-xs-12 display-table wow fadeIn last-paragraph-no-margin sm-text-center">
                <div class="display-table-cell vertical-align-middle padding-fifteen-all md-padding-ten-all xs-no-padding-lr xs-text-center">
                    <span class="text-medium margin-15px-bottom display-block alt-font text-deep-pink">We give support services to result driven firms.</span>
                    <h4 class="alt-font text-extra-dark-gray font-weight-600 sm-margin-lr-auto xs-width-100">A consultancy firm Crafting the next billion dollar business.</h4>
                    <p class="width-80 md-width-100">
                        Mave Business Support Services handles each client uniquely, prioritizing on the necessary areas and using industry standard to quickly render a well-tailored service.
                     </p>
                    <a href="{{URL('/about')}}" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-35px-top">
                        About Us
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 position-relative sm-height-500px xs-height-300 cover-background wow fadeIn" style="background-image: url('/customimg/computer-unsplash.jpg')"></div>
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
             <h5 class="alt-font text-white">Build. Learn. Grow.</h5>
             <span class="text-extra-large text-white alt-font display-inline-block margin-5px-top margin-30px-right xs-no-margin-right xs-no-margin-top xs-margin-15px-bottom xs-width-100">
                Learn about our process
                <a href="{{URL('/process')}}" class="btn btn-white btn-small vertical-align-top xs-no-margin-right">Our Process</a>

            </span>
            </div>
        </div>
    </div>
</section>
<!-- end parallax with video section -->
  <!-- start testimonial style 03 section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-bottom xs-margin-40px-bottom">
                <div class="position-relative overflow-hidden width-100">
                    <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">TESTIMONIALS</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start testimonial item -->
            <div class="col-md-4 col-sm-4 col-xs-12 sm-margin-four-bottom text-center xs-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin">
                <img src="{{asset('logos/black2.png')}}" class="border-radius-100 width-30 margin-30px-bottom" alt=""/>
                <p class="width-90 center-col">Their team are easy to work with and helped us increase revenue in a short amount of time. Thanks guys for all your hard work.</p>
                <i class="fas fa-quote-left icon-small text-deep-pink display-block margin-30px-top margin-15px-bottom"></i>
                <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase display-block line-height-10 alt-font">Buhari Goodluck</span>
                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Prima Logistics</span>
            </div>
            <!-- end testimonial item -->
            <!-- start testimonial item -->
            <div class="col-md-4 col-sm-4 col-xs-12 sm-margin-four-bottom text-center xs-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                <img src="{{asset('logos/black2.png')}}" class="border-radius-100 width-30 margin-30px-bottom" alt=""/>
                <p class="width-90 center-col">Trust us we looked for a very long time and wasted bla bla bla bla.</p>
                <i class="fas fa-quote-left icon-small text-deep-pink display-block margin-30px-top margin-15px-bottom"></i>
                <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase display-block line-height-10 alt-font">Aje Baba</span>
                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Riska Limited</span>
            </div>
            <!-- end testimonial item -->
            <!-- start testimonial item -->
            <div class="col-md-4 col-sm-4 col-xs-12 sm-margin-four-bottom text-center wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s">
                <img src="{{asset('logos/black2.png')}}" class="border-radius-100 width-30 margin-30px-bottom" alt=""/>
                <p class="width-90 center-col">This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us.</p>
                <i class="fas fa-quote-left icon-small text-deep-pink display-block margin-30px-top margin-15px-bottom"></i>
                <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase display-block line-height-10 alt-font">Abdul Mohammed</span>
                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creda Limited</span>
            </div>
            <!-- start testimonial item -->
        </div>
    </div>
</section>

<section class="half-section wow fadeIn cover-background" style="background-image: url('/customimg/light-unsplash.jpg');">
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
<!-- end call to action -->
<!-- start blog section -->
<section class="wow fadeIn hover-option4 blog-post-style3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                <h5 class="alt-font text-extra-dark-gray font-weight-700 text-uppercase">Latest Blog Posts</h5>
            </div>
        </div>
        <div class="row equalize xs-equalize-auto">
            <!-- start blog post item -->
            <div class="grid-item col-md-4 col-sm-6 col-xs-12 wow fadeInUp sm-padding-30px-bottom xs-text-center">
                <div class="blog-post bg-light-gray inner-match-height">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="blog-post-layout-01.html">
                                <img src="{{asset('logos/black2.png')}}" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all sm-padding-20px-all">
                        <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray width-100 display-block md-width-100 margin-15px-bottom">
                            10 Tips to take your business to the next level.
                        </a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb sm-margin-15px-tb"></div>
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small display-inline-block sm-display-block sm-margin-10px-top">by <a href="blog-grid.html" class="text-medium-gray">Okeke Felix</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 July 2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
            <!-- start blog post item -->
            <div class="grid-item col-md-4 col-sm-6 col-xs-12 wow fadeInUp sm-padding-30px-bottom xs-text-center" data-wow-delay="0.2s">
                <div class="blog-post bg-light-gray inner-match-height">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="blog-post-layout-02.html">
                                <img src="{{asset('logos/black2.png')}}" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all sm-padding-20px-all">
                        <a href="blog-post-layout-02.html" class="alt-font post-title text-medium text-extra-dark-gray width-100 display-block md-width-100 margin-15px-bottom">
                            Taxation; The good, bad and ugly.
                        </a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb sm-margin-15px-tb"></div>
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small display-inline-block sm-display-block sm-margin-10px-top">by <a href="blog-grid.html" class="text-medium-gray">Okeke Felix</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 July 2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
            <!-- start blog post item -->
            <div class="grid-item col-md-4 col-sm-6 col-xs-12 wow fadeInUp xs-text-center" data-wow-delay="0.4s">
                <div class="blog-post bg-light-gray inner-match-height">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="blog-post-layout-03.html">
                                <img src="{{asset('logos/black2.png')}}" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all sm-padding-20px-all">
                        <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray width-100 display-block md-width-100 margin-15px-bottom">
                            A Guide to Management.
                        </a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb sm-margin-15px-tb"></div>
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small display-inline-block sm-display-block sm-margin-10px-top">by <a href="blog-grid.html" class="text-medium-gray">Okeke Felix</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 July 2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
        </div>
    </div>
</section>
<!-- end blog section -->


@endsection
