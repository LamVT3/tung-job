<!-- Header Section Start -->
<div class="header">
    <!-- Start intro section -->
    <section id="intro" class="section-intro">
        <div class="logo-menu">
            <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="index.html"><img src="img/logo.png" alt=""></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.html">
                                    All Jobs </i>
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    Company Reviews
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Employers </i>
                                </a>
                            </li>
                        </ul>

                        <!-- Authentication Links -->
                        @guest
                            <ul class="nav navbar-nav navbar-right float-right">
                                <li class="right"><a href="{{ route('login') }}"><i class="ti-lock"></i>  Log In</a></li>
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
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                           {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
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