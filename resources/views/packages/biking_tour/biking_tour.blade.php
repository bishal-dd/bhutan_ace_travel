@include('shared.header')
@include('shared.navbar')
@include('shared.loader')

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/header-image2.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Biking Tour</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->


<!-- Favourite Places Start -->
<div class="favourite-place place-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>FEATURED TOURS Packages</span>
                    <h2>Biking Tours</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{asset("assets/img/thimphu_paro.webp")}}"  height="250" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                            <h3><a href="/biking_paro">Thimphu To Paro</a></h3>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>2 Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>Bhutan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{asset("assets/img/thimphu_punakha.webp")}}" height="250" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                            <h3><a href="/biking_punakha">Thimphu to Punakha</a></h3>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>6 Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>Bhutan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Favourite Places End -->

@include('shared.footer')
