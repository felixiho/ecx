<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light bg-transparent white-link">
        <div class="container nav-header-container">
            <div class="row">
                <!-- start logo -->
                <div class="col-md-2 col-xs-5">
                    <a href="{{URL('/')}}" title="ECX" class="logo">
                        <img src="{{asset('logos/logo.png')}}" data-rjs="{{asset('logos/logo.png')}}" class="logo-dark" alt="ECX">
                        <img src="{{asset('logos/logo.png')}}" data-rjs="{{asset('logos/logo.png')}}" alt="ECX" class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        @auth
                        <span  style="background-color: #232323"  class="icon-bar"></span>
                        <span  style="background-color: #232323"  class="icon-bar"></span>
                        <span  style="background-color: #232323"  class="icon-bar"></span>
                        @endauth
                        @guest
                        <span    class="icon-bar"></span>
                        <span    class="icon-bar"></span>
                        <span    class="icon-bar"></span>
                        @endguest
                    </button>
                    <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            @guest
                            <li class="dropdown megamenu-fw">
                                <a href="{{URL('/')}}">Home</a><i class="" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                            <!-- end menu item -->

                            <li class="dropdown simple-dropdown">
                                <a href="{{URL('/about')}}">About</a><i class="" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                            <li class="dropdown simple-dropdown">
                                <a href="{{URL('/services')}}">Services</a><i class="" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="{{URL('/contact')}}">Contact</a><i class="" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="{{URL('/login')}}" class="btn btn-medium btn-dark-gray text-medium border-radius-4 md-margin-15px-bottom sm-display-table sm-margin-lr-auto">
                                Login
                                <i class="fas fa-arrow-right icon-very-small" aria-hidden="true"></i></a>
                            </li>
                            @endguest
                            @auth
                            <li class="dropdown simple-dropdown">
                                <a style="color:#232323" href="{{URL('/attendance')}}">Attendance</a><i class="" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <form action="{{URL('/logout')}}" method="post">
                                    @csrf
                                    <button type="submit" style="margin-top: 1vh" class="btn btn-medium btn-dark-gray text-medium border-radius-4 md-margin-15px-bottom sm-display-table sm-margin-lr-auto">
                                    Logout
                                    <i class="fas fa-arrow-right icon-very-small" aria-hidden="true"></i></button>
                                </form>
                            </li>
                            @endauth

                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-5 width-auto">
                </div>
            </div>
        </div>
    </nav>
 </header>
