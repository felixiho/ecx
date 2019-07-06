<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light bg-transparent white-link">
        <div class="container nav-header-container">
            <div class="row">
                <!-- start logo -->
                <div class="col-md-2 col-xs-5">
                    <a href="{{URL('/')}}" title="Pofo" class="logo"><img src="{{asset('logos/FegoatBlackx2@4x.png')}}" data-rjs="{{asset('logos/FegoatBlackx2@4x.png')}}" class="logo-dark" alt="Pofo"><img src="{{asset('logos/Fegoatwhite2@4x.png')}}" data-rjs="{{asset('logos/Fegoatwhite2@4x.png')}}" alt="Pofo" class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            <li class="dropdown megamenu-fw">
                                <a href="{{URL('/')}}">Home</a><i class="" data-toggle="dropdown" aria-hidden="true"></i> 
                            </li>
                            <!-- end menu item -->
                            <li class="dropdown simple-dropdown">
                                <a href="{{URL('/about')}}">About</a><i class="" data-toggle="dropdown" aria-hidden="true"></i> 
                            </li> 
                            <li class="dropdown simple-dropdown">
                                <a href="{{URL('/process')}}">Process</a><i class="" data-toggle="dropdown" aria-hidden="true"></i> 
                            </li> 
                            <li class="dropdown megamenu-fw">
                                <a href="{{URL('/projects')}}">Projects</a><i class="" data-toggle="dropdown" aria-hidden="true"></i> 
                            </li>
                            <li class="dropdown simple-dropdown">
                                <a href="{{URL('/blog')}}" title="Blog">Blog</a><i class="" data-toggle="dropdown" aria-hidden="true"></i> 
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="{{URL('/contact')}}">Contact</a><i class="" data-toggle="dropdown" aria-hidden="true"></i> 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-5 width-auto">  
                </div>
            </div> 
        </div>
    </nav>  
 </header>