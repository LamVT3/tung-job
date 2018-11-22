@extends('layouts.master')

@section('top-banner')
    <!-- Page Header Start -->
    <div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">About Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="current">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')
    <div class="container" style="margin-top: 50px;margin-bottom: 50px">
        <section class="featured-jobs section">

            <div class="container clearfix row">

                <div class="heading-block center">
                    <h2 class="section-title"><span>Who we are</span></h2>

                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <img src="img/1.jpg" alt="Why choose Us?">
                                </figure>
                                <div class="item-body">
                                    <div class="fbox-desc" style="padding: 10px; min-height:245px">
                                        <h4>Why choose Us.<br><small>With our “Connect &amp; Share” mission, we create community for IT enthusiasts in Vietnam.</small></h4>
                                        <ul style="margin-left: 20px;">
                                            <li style="list-style:unset"> Meet reputable experts to learn from their practical experience. </li>
                                            <li style="list-style:unset"> Build your brand while exchange through technical knowledge sharing.  </li>
                                            <li style="list-style:unset"> Expand your networks to access valuable new contacts &amp; opportunities would increase significantly. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <img src="img/2.jpg" alt="Why choose Us?">
                                </figure>
                                <div class="item-body">
                                    <div class="fbox-desc" style="padding: 10px; min-height:245px">
                                        <h4>Our Mission.<br><small class="subtitle">We Connect &amp; Share.</small></h4>
                                        <p>We connect people who passionate about technology field to their next successes through valuable networks, useful knowledge and worthy opportunities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <img src="img/3.jpg" alt="Why choose Us?">
                                </figure>
                                <div class="item-body">
                                    <div class="fbox-desc" style="padding: 10px; min-height:245px">
                                        <h4>What we Do.<br><small class="subtitle">Make our Customers Happy.</small></h4>
                                        <p>We always keep up to date on the latest developments in the technology industry. Bringing you value is all that we attempt to do.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-speaker" class="page-section">

            <div class="heading-block center">
                <h2 class="section-title">SPEAKERS </h2>
            </div>

            <div class="container clearfix row">

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/2 speaker Duong Pham.jpg" alt="Duong Pham">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Duong Pham</h4>
                                <span>QA Architect, KMS</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">She is very passionate about the software and product development and aim to do whatever within her capacity to be a part of it. She would like to share stories of successful projects. She loves working in the IT markets because She enjoys being a part of a key growth engine for the world.</div>
                            <a target="_blank" href="https://www.linkedin.com/in/duongnapham/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/pnaduong" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/250x300 cuong truong.jpg" alt="Cuong Truong">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Cuong Truong</h4>
                                <span>Frontend Architect</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">Full-stack developer of experienced in building and delivering high quality web applications with excellent working attitude, high quality deliverable, collaboration, knowledge sharing, issue analysis, leadership, problem solving…
                                Public speaker major in Front-end talks at communities like TechEXPO Vietnamworks, Techcamp, Barcamp, TechCon</div>
                            <a target="_blank" href="https://www.linkedin.com/in/cuong-truong-63167960/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href=" https://www.facebook.com/cuongtruong.official" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/baPham2.jpg" alt="Ba Pham">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Ba Pham</h4>
                                <span>Full Stack Developer</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">- Full stack developer who doesn't know what is Back-end, Front-end and DevOps.

                                - Experienced in many technology stack .NET, Front-End, Ruby on Rails, AWS,  Azure.

                                - Worked with clients across US, AUS, Europe, Japan in many interested business domain &amp; complex systems.</div>

                            <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/ba-ph%E1%BA%A1m-s%E1%BB%B9-12353184/"><i class="ti-linkedin"></i></a>
                            <a class="facebook" target="_blank" href="https://www.facebook.com/PSB.ICT"><i class="ti-facebook"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/3 speaker Tuyet Ngo.jpg" alt="Tuyet Ngo">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Tuyet Ngo</h4>
                                <span>Full Stack Tester</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">Full Stack Tester
                                She worked more than 3 years in outsourcing projects on automation testing Web service and Web UI with Selenium Webdriver, BDD, Cucumber, and Restful API using Java, Ruby language. In addition, she has more than 1.5 years working in mobile testing service on both iOS and Android real devices  using Appium, WebdriverIO, and Mocha on Javascript language
                            </div>
                            <a target="_blank" href="https://www.linkedin.com/in/tuyet-ngo-22633a85/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href=" https://www.facebook.com/ngo.anhtuyet.3" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/8 speakers hoai vu.jpg" alt="Vu Nguyen">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Vu Nguyen</h4>
                                <span>Senior Automation Engineer, Titan Technology Corporation</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">Over 8 years experienced in Software Testing with 6 years experienced in Automation Testing. Specially, he isalways passionate in Automation Testing.
                                - Design Framework Testing: Data Driven Framework, Keyword Driven Framework, Hybrid Driven Framework.</div>
                            <a target="_blank" href="https://www.linkedin.com/in/nguy%E1%BB%85n-v%C5%A9-90044a46/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/nguyen.vu.792" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/9 speaker Trung luu.jpg" alt="Trung Lu">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Trung Lu</h4>
                                <span>Senior Automation Engineer, KMS Technology</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">She worked more than 5 years in outsourcing companies with automation testing position Application and Web UI with Silk Test, QTP,  Selenium Webdriver, Katalon using Java language. In addition, She has built framework for project about application.</div>
                            <a target="_blank" href="https://www.linkedin.com/in/trung-lu-08932b165/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/trungm2" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/6 speaker Thien.jpg" alt="Thien Nguyen">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Thien Nguyen</h4>
                                <span>Microsoft MVP, Engineering Manager at NashTech</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">Microsoft MVP, Engineering Manager at NashTech. His main job is to support developers develop their technical skills. Besides that, he is also an open source contributor, his open source project [SimplCommerce](https://github.com/simplcommerce/SimplCommerce) is very popular in GitHub. Experienced in .NET Core, Azure and Blockchain, he is a favorite speaker at community events such as Vietnam Web Summit, .NET Saigon meetup, DEV Cafe and he has conducted several blockchain courses.</div>
                            <a target="_blank" href="https://www.linkedin.com/in/thiennn/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/thiennlq" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/5 speaker Phuong.jpg" alt="Phuong Huynh">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Phuong Huynh</h4>
                                <span>Big Data Developer, VNG </span>
                            </div>
                            <div class="team-content" style="font-size: 13px">Experienced of building big data system from collect, extract, storage to aggregate, analytic and data visualize. Like troubleshooting problems in data issues and deep in data dimensions to provide useful information for business and system improvement.</div>
                            <a target="_blank" href="https://www.linkedin.com/in/phuong-huynh-5110b760/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/phuong.huynh.758" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6" style="min-height: 500px">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img width="250px" height="300px" src="http://b4uconference.com/upload/images/speaker/4 speaker Toan Dang.jpg" alt="Toan Dang">
                        </div>
                        <div class="team-desc bottom-social-icons social-icon">
                            <div class="team-title">
                                <h4>Toan Dang</h4>
                                <span>Technical Architect, NashTech Global</span>
                            </div>
                            <div class="team-content" style="font-size: 13px">Technical Architect, NashTech Global
                                With more than 15 years of experience in providing Database solutions for big corporations. He has gained a rich experience in various business domains in Game, Media and Social Marketing, Computer Vision, etc. using various solutions with real time processing, high availability and scale out. He plays an important role in providing strategic solutions to various project teams as well as to contribute significantly in building the Database, Data Warehouse, BI, Big Data and Machine Learning/Deep Learning system. He does have a big interest in Big Data Analytics, Real time processing, High Availability, Machine Learning and Deep Learning.
                            </div>
                            <a target="_blank" href="https://www.linkedin.com/in/toan-dang-anh-2705a355/" class="social-icon si-rounded si-small si-linkedin">
                                <i class="ti-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/toandanganh" class="social-icon si-rounded si-small si-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
    </div>
@endsection
