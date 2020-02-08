

@extends('layouts.main')


@section("content")
<!-- start form section -->
<section class="wow fadeIn" id="start-your-project">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">Attendance for ECX</h5>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Success!</strong> {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <form id="project-contact-form" method="POST" action="{{ route('mark-attendance') }}">
            @csrf
            <div class="row">
                    <div class="col-md-12">
                    <div id="success-project-contact-form" class="no-margin-lr"></div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <input type="date" name="attendanceDate" min="2020-02-01" max="2020-09-30" id="date" required placeholder="Date *" value="{{ old('date') }}"  class="big-input @error('date') is-invalid @enderror">
                    @error('date')
                        <span class="input-error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" name="name" id="name" required placeholder="Name *" value="{{ old('name') }}"  class="big-input @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="input-error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 col-md-offset-3">
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
                    @error('track')
                        <span class="input-error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <textarea required name="comment" id="comment" placeholder="Describe what you learnt *"   rows="6" class="big-textarea @error('comment') is-invalid @enderror"></textarea>

                    @error('comment')
                        <span class="input-error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12 text-center">
                    <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
