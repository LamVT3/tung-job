<!-- Header Section Start -->
<div class="header">
    <!-- Start intro section -->
    <section id="intro" class="section-intro">
        <div class="logo-menu">
            <nav class="navbar navbar-default main-navigation affix-top" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{route('all-job')}}">
                                    All Jobs
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    Company Reviews
                                </a>
                            </li>
                            @if(@auth()->user()->role == "ADMIN")
                            <li>
                                <a href="#">
                                    Employers <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{route('show-create-job')}}">
                                            Add Job
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('manage-job')}}">
                                            Manage Jobs
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>

                        <!-- Authentication Links -->
                        @guest
                            <ul class="nav navbar-nav navbar-right float-right">
                                <li class="right"><a href="{{ route('login') }}"><i class="ti-lock"></i>  Log In</a></li>
                                <li class="right"><a href="{{ route('register') }}"><i class="ti-lock"></i>  REGISTER</a></li>
                            </ul>
                        @else
                            <ul class="nav navbar-nav navbar-right float-right">
                                <li class="right"><a href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ti-lock"></i>  Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>
                        @endguest

                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="index.html">All Jobs</a>
                    </li>
                    <li>
                        <a href="about.html">Company Reviews</a>
                    </li>
                    <li>
                        <a href="#">For Employers</a>
                    </li>
                    <li class="btn-m"><a href="my-account.html"><i class="ti-lock"></i>  Log In</a></li>
                </ul>
                <!-- Mobile Menu End -->
            </nav>
        </div>
        <!-- Header Section End -->

        @yield('top-banner')

    </section>
    <!-- end intro section -->
</div>