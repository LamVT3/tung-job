<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <div class="container">
            <p>Want to post a job? Contact us at Ho Chi Minh: (+84) 0989214285.</p>
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title"><img src="{{asset('img/logo.png')}}" class="img-responsive" alt="Footer Logo"></h3>
                        <div class="textwidget">
                            <p>B4U is service that HELPS outsourcing companies and product companies to find the right employees.
                                In addition, jobs.b4usolution.com is the place for all of you who are IT look for more suitable jobs, find a new opportunity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">B4USolution Ecosystem</h3>
                        <ul class="menu">
                            <li><a href="//b4uconference.com/">B4Uconference</a></li>
                            <li><a href="//exam.b4usolution.com/">Exam B4Usolution</a></li>
                            <li><a href="//b4usolution.com/">B4Usolution</a></li>
                            <li><a href="//quiz.b4usolution.com/quiz">Quiz B4Usolution</a></li>
                            <li><a href="//jobs.b4usolution.com/">Jobs B4Usolution</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Trending Jobs</h3>
                        <ul class="menu">
                            @foreach($trends as $item)
                            <li><a target="_blank" href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Follow Us</h3>
                        <div class="bottom-social-icons social-icon">
                            <a class="twitter" target="_blank" href="https://twitter.com/b4usolution1"><i class="ti-twitter-alt"></i></a>
                            <a class="facebook" target="_blank" href="https://www.facebook.com/b4usolution-1781761335378645/"><i class="ti-facebook"></i></a>
                            <a class="youtube" target="_blank" href="https://www.youtube.com/channel/UC1UDTdvGiei6Lc4ei7VzL_A/featured?view_as=subscriber"><i class="ti-youtube"></i></a>
                            <a class="linkedin" target="_blank" href="https://www.slideshare.net/b4usolution"><i class="ti-linkedin"></i></a>
                        </div>
                        <ul class="menu">
                            <p>
                                Address: 796/157/2, Le Duc Tho street, Ward 15, Go Vap District, HCMC <br>
                                Phone: 0989214285 <br>
                                Email: info@b4usolution.com <br>
                                Tax code: 0315155631
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer area End -->

    <!-- Copyright Start  -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center" style="font-size: 10px">
                        © B4USOLUTION. All Rights Reserved.
                        Privacy Policy Designed by B4USOLUTION
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

</footer>
<!-- Footer Section End -->