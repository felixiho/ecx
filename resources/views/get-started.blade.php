

@extends('layouts.main')


@section("content")
<!-- start form section -->
<section class="wow fadeIn" id="start-your-project">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">Register for ECX</h5>

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
                        <select name="track" id="track" class="bg-transparent no-margin-bottom" required>
                            <option value="">Select your Track</option>
                            <option value="frontend">Frontend Development</option>
                            <option value="backend">Backend Development</option>
                            <option value="uiux">UI/UX Design</option>
                            <option value="python">Python</option>
                            <option value="engineering">Engineering Design</option>
                            <option value="mobile">Mobile Development</option>
                        </select>
                    </div>               
                </div>
                <div class="col-md-12 text-center">
                    <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">Get Started</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
