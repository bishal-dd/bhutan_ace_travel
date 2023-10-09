@include('shared.header')
@include('shared.navbar')
@include('shared.loader')

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/header-image.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Cultural Tour</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Blog Area Start -->
<div class="home-blog-area section-padding2">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Our Best Packages</span>
                    <h2>Cultural Packages</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/blog/home-blog1.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <p> |   Traveling</p>
                            <h3><a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a></h3>
                            <a href="#" class="more-btn">Read more »</a>
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
                            <img src="assets/img/blog/home-blog2.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <p> |   Traveling</p>
                            <h3><a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a></h3>
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

@include('shared.footer')
