@include('shared.header')
@include('shared.navbar')
@include('shared.loader')

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/header-image1.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Dagala Trek</h2>
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
                        <img class="img-fluid" src="{{asset("assets/img/dagala.webp")}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>
                            Dagala Trek
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> Travel</a></li>
                        </ul>
                        <p class="excert text-justify">
                            Dagala Trek is a captivating 5-day trekking adventure in the stunning and serene landscapes of Bhutan. This trek offers a unique opportunity to explore the remote and unspoiled regions of the country, providing an immersive experience in Bhutan's natural beauty and cultural heritage.
                        </p>
                        <p class="text-justify">
                            Throughout the Dagala Trek, you'll have the opportunity to witness Bhutan's diverse flora and fauna, from rare bird species to blooming rhododendrons (especially during the spring). The journey is also a cultural experience, with the chance to interact with local communities and learn about Bhutan's unique way of life.
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
                                    Upon your arrival in Paro, you'll engage in sightseeing with an elevation of 2280 meters.
                                </p>
                                <h3>Day 2.</h3>
                                <p class="text-justify">
                                    In Paro, you'll embark on a 7-kilometer hike to the iconic Tiger's Nest Monastery, which will take approximately 4 hours.
                                </p>
                                <h3>Day 3.</h3>
                                <p class="text-justify">
                                    The journey continues as you drive 47 kilometers from Paro to Geynekha and then hike for 4 hours to reach Gur, marking the beginning of the Dagala trek in Bhutan, with an elevation of 3290 meters.                                
                                <h3>Day 4.</h3>
                                <p class="text-justify">
                                    Trekking from Gur to Labatamba, covering a distance of 12 kilometers in about 5 hours, you'll reach an altitude of 4300 meters.                           
                                </p>
                                <h3>Day 5.</h3>
                                <p class="text-justify">
                                    The trail from Labatamba to Panka spans 8 kilometers and takes 6 to 7 hours, with an elevation of 4000 meters.
                                </p>
                                <h3>Day 6.</h3>
                                <p class="text-justify">
                                    Hiking 8 kilometers from Panka to Talakha for 6 to 7 hours, you'll descend to an altitude of 3080 meters.                                
                                </p>
                                <h3>Day 7.</h3>
                                <p class="text-justify">
                                    The trek takes you from Talakha to Chamgang and ultimately to Thimphu, marking the end of the Dagala trek in Bhutan. Covering 6 kilometers in about 3 hours, you'll reach an altitude of 2334 meters.                               
                                 </p>
                                <h3>Day 8.</h3>
                                <p class="text-justify">
                                    You'll have a day of sightseeing in Thimphu at an elevation of 2334 meters.                               
                                 </p>
                                <h3>Day 9.</h3>
                                <p class="text-justify">
                                    Driving 76 kilometers from Thimphu, you'll explore Punakha and return to Thimphu after approximately 2 1/2 hours.                              
                                  </p>
                                <h3>Day 10.</h3>
                                <p class="text-justify">
                                    Your journey concludes as you depart from Paro, covering a distance of 54 kilometers in about 1 hour.
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
                        <h4 class="widget_title">For Further Inquiries</h4>
                            <p>
                                <a href="mailto:bhutanoratravels@gmail.com" class=" rounded-0 w-100 text-dark"
                                >
                                <i class="ti-email"></i> Email:  bhutanoratravels@gmail.com
                                 </a>
                            </p>
                            <p>
                                <a href="https://api.whatsapp.com/send?phone=77201625" class=" rounded-0 w-100 text-dark"
                                >
                                <i class="fab fa-whatsapp"></i> Whatsapp:  +975-77 20 16 25
                                </a>
                            </p>
                            
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
