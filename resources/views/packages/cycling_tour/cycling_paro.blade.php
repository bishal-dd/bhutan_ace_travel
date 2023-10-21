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
                        <h2>Cycling</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{asset("assets/img/thimphu_paro_cycling.webp")}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>
                            Cycling
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> Travel</a></li>
                        </ul>
                        <p class="excert text-justify">
                            Cycling in Bhutan is a remarkable adventure that offers a unique blend of natural beauty, cultural exploration, and physical challenge.
                            Bhutan's landscapes are nothing short of breathtaking. Cycling enthusiasts can traverse through lush valleys, dense forests, terraced fields, and ascend to high mountain passes. The country's pristine rivers, serene lakes, and panoramic views of the Himalayan peaks make it an ideal setting for a cycling expedition.
                        </p>
                        <p class="text-justify">
                            Cycling in Bhutan isn't just about the ride; it's an opportunity to immerse yourself in the country's rich culture. Riders can visit ancient monasteries, traditional villages, and historical sites, allowing them to gain insights into Bhutan's unique customs, traditions, and the deeply ingrained Buddhist way of life.
                            Bhutan offers a diverse range of terrain for cyclists. Some routes are relatively flat and suitable for leisurely rides, while others are more challenging with steep climbs and descents, making it a versatile destination for riders of different skill levels.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <ul class="nav nav-pills" id="itineraryTab">
                            <li class="nav-item active mr-5 mt-4">
                                <a  class="nav-link btn btn-primary" data-toggle="pill" href="#itinerary">Itinerary</a>
                            </li>
                            <li class="nav-item mt-4">
                                <a class="nav-link btn btn-primary" data-toggle="pill" href="#included">Included</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-5">
                            <div id="itinerary" class="container tab-pane fade active in">
                                <!-- Itinerary Content Goes Here -->
                                <h3>Day 1.</h3>
                                <p class="text-justify">
                                    Arrive in Paro, Bhutan. Enjoy an afternoon of sightseeing, including the National Museum and Rimpong Dzong.
                                </p>
                                <h3>Day 2.</h3>
                                <p class="text-justify">
                                    Cycle from Paro to Thimphu, enjoying picturesque scenery along the way.
                                </p>
                                <h3>Day 3.</h3>
                                <p class="text-justify">
                                    Explore Thimphu's attractions, including the National Memorial Chorten, Changangkha Temple, and the School for Arts and Crafts.
                                </p>
                                <h3>Day 4.</h3>
                                <p class="text-justify">
                                    Cycle from Thimphu to Punakha, crossing Dochu La Pass and admiring the stunning Himalayan views.
                                </p>
                                <h3>Day 5.</h3>
                                <p class="text-justify">
                                    Visit Punakha Dzong and continue your cycling journey.
                                </p>
                                <h3>Day 6.</h3>
                                <p class="text-justify">
                                    Drive back to Punakha with cycling opportunities along the way.
                                </p>
                                <h3>Day 7.</h3>
                                <p class="text-justify">
                                    Cycle to Khamsum Yulley Namgyal Chorten and then drive to Thimphu.
                                 </p>
                                <h3>Day 8.</h3>
                                <p class="text-justify">
                                    Cycle back to Paro or explore Thimphu at your leisure.
                                 </p>
                                </p>
                                <h3>Day 9.</h3>
                                <p class="text-justify">
                                    Hike to Taktsang Monastery and visit Drukgyel Dzong.
                                 </p>
                                 <h3>Day 10.</h3>
                                 <p class="text-justify">
                                    Depart from Paro.
                                </p>
                                  

                                <!-- Add more itinerary details as needed -->
                            </div>
                            <div id="included" class="container tab-pane fade">
                                <!-- Included Content Goes Here -->
                                <h3>Inclusions:</h3>
                                <ol class="mt-3">
                                    <li>
                                        <h4>1. &nbsp; &nbsp; Sustainable Development Fee (SDF):</h4>
                                        <ol>
                                            <li>i. &nbsp; &nbsp; Included in the package is the Sustainable Development Fee (SDF) of $100 USD per person per night.</li>
                                            <li>ii. &nbsp; &nbsp; This fee directly contributes to Bhutan's sustainable development initiatives.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        <h4>2. &nbsp; &nbsp; Accommodation:</h4>
                                        <ol>
                                            <li>i. &nbsp; &nbsp; You will be lodged in 3-star rated hotels and lodges.</li>
                                            <li>ii. &nbsp; &nbsp; These accommodations have been selected for their comfort and quality to enhance your stay in Bhutan.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        <h4>3. &nbsp; &nbsp; English-Speaking Guide:</h4>
                                        <ol>
                                            <li>i. &nbsp; &nbsp; An experienced Bhutanese guide will be at your service.</li>
                                            <li>ii. &nbsp; &nbsp; Your guide will provide valuable insights into Bhutan's history, culture, and traditions.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        <h4>4. &nbsp; &nbsp; Transportation:</h4>
                                        <ol>
                                            <li>i. &nbsp; &nbsp; Enjoy the convenience of a comfortable and well-maintained vehicle for your transportation needs.</li>
                                            <li>ii. &nbsp; &nbsp; Safety and comfort are top priorities when it comes to ground transportation within Bhutan.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        <h4>5. &nbsp; &nbsp; Meals:</h4>
                                        <ol>
                                            <li>i. &nbsp; &nbsp; Your package includes daily meals, covering breakfast, lunch, and dinner.</li>
                                            <li>ii. &nbsp; &nbsp; Savor a diverse array of both Bhutanese and international dishes during your stay.</li>
                                        </ol>
                                    </li>
                                    <!-- Add more included items as needed -->
                                </ol>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Related Tours</h3>
                        <div class="media post_item">
                            <img src="{{asset("assets/img/cultural_5day.webp")}}" width="70" height="50" alt="post">
                            <div class="media-body">
                                <a href="/cultural_5day">
                                    <h3>Bhutan Unveiled: A 5-Day Himalayan Odyssey.</h3>
                                </a>
                                <p>5 Days</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="{{asset("assets/img/cultural_6day.webp")}}" width="70" height="50" alt="post">
                            <div class="media-body">
                                <a href="/cultural_6day">
                                    <h3>Bhutan Expedition: A 6-Day Himalayan Journey</h3>
                                </a>
                                <p>6 Days</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="{{asset("assets/img/cultural_7day.webp")}}" width="70" height="50" alt="post">
                            <div class="media-body">
                                <a href="/cultural_7day">
                                    <h3>Bhutan Beyond: A 7-Day Journey Through the Himalayas</h3>
                                </a>
                                <p>7 days</p>
                            </div>
                        </div>
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Booking Process</h4>
                           <a href="/booking" class="button rounded-0 w-100 text-white btn_1 boxed-btn"
                               >
                              How to Book
                            </a>
                     </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->


@include('shared.footer')
