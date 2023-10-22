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
                        <h2>Biking</h2>
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
                        <img class="img-fluid" src="{{asset("assets/img/bike.webp")}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>
                            Biking
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> Travel</a></li>
                        </ul>
                        <p class="excert text-justify">
                            Biking in Bhutan is a thrilling and unique adventure that allows enthusiasts to explore the breathtaking landscapes and vibrant culture of the Land of the Thunder Dragon on two wheels.
                            Bhutan offers a diverse range of landscapes, from lush valleys and terraced fields to dense forests and high mountain passes. Biking in Bhutan means traversing through this natural tapestry, taking in the sights of pristine rivers, pristine lakes, and the soaring Himalayan peaks.
                        </p>
                        <p class="text-justify">
                            One of the distinctive aspects of biking in Bhutan is the opportunity to engage with its rich cultural heritage. Cyclists can visit ancient monasteries, fortresses (known as dzongs), and remote villages. This cultural immersion provides insight into Bhutan's unique customs, traditions, and its deep-rooted Buddhist way of life.
                            Bhutan's terrain caters to a variety of biking experiences. While some routes are relatively gentle and suitable for beginners, others offer more challenging trails with steep ascents and descents. The country's high-altitude landscapes also provide an excellent opportunity for those seeking a bit of mountain biking adventure.
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
                                    Upon arriving in Paro, Bhutan at an altitude of 2280 meters, you'll be welcomed by your guide. Acclimate to the altitude, savor Bhutanese cuisine, and explore Rinpung Dzong and Ta Dzong.
                                </p>
                                <h3>Day 2.</h3>
                                <p class="text-justify">
                                    Explore Thimphu, visiting the impressive Dordenma Buddha statue, Chorten National Monument, Thimphu Dzong, and the Academy of Zorig Chusum.
                                    
                                </p>
                                <h3>Day 3.</h3>
                                <p class="text-justify">
                                    Travel to Punakha via Dochula Pass, visit Chhimi Lhakhang, Punakha Dzong, and Khamsum Yulley Namgyal Chorten.
                                </p>
                                <h3>Day 4.</h3>
                                <p class="text-justify">
                                    Venture to Gangtey and explore the Phobjikha valley, renowned for the Black-necked Crane. Return to Punakha.
                                </p>
                                <h3>Day 5.</h3>
                                <p class="text-justify">
                                    Visit the Heritage Museum, the paper factory, and the textile museum in Thimphu. En route, witness Bhutan's national animal, the Takin, and Simtokha Dzong.
                                </p>
                                <h3>Day 6.</h3>
                                <p class="text-justify">
                                    Drive to Haa via Chele La, with panoramic views of Paro and Haa Valleys. Visit Katsho village and Katso Lhakhang, then return to Paro.
                                </p>
                                <h3>Day 7.</h3>
                                <p class="text-justify">
                                    Enjoy a hike to the Dining Hall for a view of Taktsang Monastery. Visit Kyichu Lhakhang, one of Bhutan's oldest temples.
                                 </p>
                                <h3>Day 8.</h3>
                                <p class="text-justify">
                                    Depart from Paro, concluding your memorable journey through Bhutan.
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
                                <a href="mailto:bhutanacetravel@gmail.com" class=" rounded-0 w-100 text-dark"
                                >
                                <i class="ti-email"></i> Email:  bhutanacetravel@gmail.com
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
