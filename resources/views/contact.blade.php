

@extends('layouts.main')


@section("content")
<section class="big-section bg-extra-dark-gray wow fadeIn">
    <div class="container">
        <div class="row equalize xs-equalize-auto">
            <div class="col-md-2 col-sm-12 col-xs-12 display-table small-screen margin-three-top sm-display-none">
                <div class="display-table-cell vertical-align-bottom">
                    <img src="{{ asset('logos/maevelarge.png') }}" class="margin-five-bottom" alt=""/>
                    <div class="separator-line-horrizontal-full bg-deep-pink margin-10px-bottom"></div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 display-table small-screen margin-three-top">
                <div class="display-table-cell vertical-align-bottom">
                    <h3 class="alt-font  text-white margin-six-bottom sm-margin-30px-bottom">Mave Business Support Services</h3>
                    <span class="text-large alt-font width-80 display-block font-weight-300 margin-15px-bottom xs-width-100">
                        Located at the heartbeat of Africa, we provide world class business support services to our clients.
                    </span>
                    <span class="alt-font text-white text-extra-small font-weight-300">
                        Accounting &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Risk Management &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Training
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start help section -->
<section class="wow fadeIn big-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 text-center center-col">
                <span class="alt-font text-small text-uppercase">We would love to work with you</span>
                <h2 class="alt-font font-weight-700 letter-spacing-minus-1 text-extra-dark-gray">How we can help</h2>
                 <a href="#start-your-project" class="btn btn-large btn-transparent-dark-gray margin-10px-top inner-link">Start your Project</a>
            </div>
        </div>
    </div>
</section>
<!-- end help section -->
<!-- start contact section -->
<section class="no-padding bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row equalize sm-equalize-auto">
             <div class="col-md-12 col-sm-12 no-padding col-2-nth wow fadeInRight">
                <!-- start contact item -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table bg-extra-dark-gray height-350px last-paragraph-no-margin">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <i class="icon-map text-deep-pink icon-medium margin-25px-bottom"></i>
                        <div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom">Contact Address</div>
                        <p class="width-60 md-width-80 center-col text-medium">Jaja Hall, Unilag Lagos.</p>
                    </div>
                </div>
                <!-- end contact item -->
                <!-- start contact item -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table bg-black height-350px last-paragraph-no-margin">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <i class="icon-chat text-deep-pink icon-medium margin-25px-bottom"></i>
                        <div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom">Let's Talk</div>
                        <p class="center-col text-medium no-margin">Phone: 01 565669</p>
                        <p class="center-col text-medium no-margin">Phone: 0905 369 3367</p>
                    </div>
                </div>
                <!-- end contact item -->
                <!-- start contact item -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table bg-black height-350px last-paragraph-no-margin">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <i class="icon-envelope text-deep-pink icon-medium margin-25px-bottom"></i>
                        <div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom">Email Us</div>
                        <p class="center-col text-medium no-margin"><a href="mailto:info@domain.com">hello@maveservices.com</a></p>
                        <p class="center-col text-medium"><a href="mailto:hire@domain.com">hi@maveservices.com</a></p>
                    </div>
                </div>
                <!-- end contact item -->
                <!-- start contact item -->
                <div class="col-md-6 col-sm-6 col-xs-12 display-table bg-extra-dark-gray height-350px last-paragraph-no-margin">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <i class="icon-clock text-deep-pink icon-medium margin-25px-bottom"></i>
                        <div class="text-white text-uppercase alt-font font-weight-600 margin-5px-bottom">Working Hours</div>
                        <p class="center-col text-medium no-margin">Mon to Sat - 9 AM to 11 PM</p>
                        <p class="center-col text-medium">Sunday - 10 AM to 6 PM</p>
                    </div>
                </div>
                <!-- end contact item -->
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->
<!-- start form section -->
<section class="wow fadeIn" id="start-your-project">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">tell us about your project</h5>
                 
            </div>
        </div>
        <form id="project-contact-form" action="javascript:void(0)" method="post">
            <div class="row">
                    <div class="col-md-12">
                    <div id="success-project-contact-form" class="no-margin-lr"></div>
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" id="name" placeholder="Name *" class="big-input">
                </div>
                <div class="col-md-6">
                    <input type="text" name="phone" id="phone" placeholder="Phone" class="big-input">
                </div>
                <div class="col-md-6">
                    <input type="text" name="email" id="email" placeholder="E-mail *" class="big-input">
                </div>
                <div class="col-md-6">
                    <div class="select-style big-select">
                        <select name="budget" id="budget" class="bg-transparent no-margin-bottom">
                                <option value="">Select your budget</option>
                            <option value="$500 - $1000">$500 - $1000</option>
                            <option value="$1000 - $2000">$1000 - $2000</option>
                            <option value="$2000 - $5000">$2000 - $5000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <textarea name="comment" id="comment" placeholder="Describe your project" rows="6" class="big-textarea"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">send message</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- end form section -->
<section class="wow fadeIn bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center social-style-4 border round">
                <span class="text-medium font-weight-600 text-uppercase display-block alt-font text-extra-dark-gray margin-30px-bottom">On social networks</span>
                <div class="social-icon-style-4">
                    <ul class="margin-30px-top large-icon">
                        <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                        <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                        <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                        <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                        <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
