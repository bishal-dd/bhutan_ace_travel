@include('shared.header')
@include('shared.loader')
@include('shared.navbar')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="{{asset('assets/img/slider-image.webp')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Find your <span>Next tour!</span> </h1>
                                <p>Where would you like to go?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Support Company Start-->
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img mb-50">
                        <img src="{{asset('assets/img/highland-festival.webp')}}" alt="">
                        <div class="support-img-cap">
                            <span>Since 1992</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>About Our Company</span>
                            <h2>We are Ace Travel <br>Your Travel Partner</h2>
                        </div>
                        <div class="support-caption">
                            <p>Our mission is to make your travel experiences unforgettable and hassle-free.Dedicated to enhancing your travel experiences and ensuring they are both unforgettable and hassle-free. With a passion for exploration and a commitment to customer satisfaction, we have been at the forefront of the travel industry for years.</p>
                            <div class="select-suport-items">
                                <label class="single-items">Personalized Travel Experiences
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Environmental Responsibility
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Hassle-Free Travel Planning
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Unforgettable Memories
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="/about" class="btn border-btn">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- Our Services Start -->
    <div class="our-services servic-padding">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>8000+ Our Local<br>Guides</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>100% Trusted Tour<br>Agency</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>28+ Years of Travel<br>Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30 shadow">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>98% Our Travelers<br>are Happy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Blog Area Start -->
    <div class="home-blog-area section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Tour Packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset("assets/img/cultural_tour.webp")}}" alt="">
                            </div>
                            <div class="blog-cap">
                                <p> |   Traveling</p>
                                <h3><a href="/cultural_tour">Cultural Tours For Traditional Scenes </a></h3>
                                <a href="/cultural_tour" class="more-btn">Read more »</a>
                            </div>
                        </div>
                        <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset("assets/img/trekking_tour.webp")}}" alt="">
                            </div>
                            <div class="blog-cap">
                                <p> |   Traveling</p>
                                <h3><a href="single-blog.html">Trekking Tours For Majestic Views</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                        <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-5">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset("assets/img/biking_tour.webp")}}" alt="">
                            </div>
                            <div class="blog-cap">
                                <p> |   Traveling</p>
                                <h3><a href="single-blog.html">Biking Tours For Thrilling Adventures</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                        <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-5">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset("assets/img/cycling_tour.webp")}}" height="350" alt="">
                            </div>
                            <div class="blog-cap">
                                <p> |   Traveling</p>
                                <h3><a href="single-blog.html">Cycling Tours For Serene Exploration</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                        <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->




    <!-- Video Start Area -->
    <div class="video-area video-bg pt-200 pb-200 mb-150" data-background="{{asset("assets/img/video_bg.webp")}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 offset-2 ">

                    <iframe
                        height="400"
                        src="https://www.youtube.com/embed/ML34TZBBHRw?autoplay=1"
                        frameborder="0"
                        allowfullscreen
                        class="w-100 rounded-top rounded-bottom"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End Area -->


</main>

@include('shared.footer')
