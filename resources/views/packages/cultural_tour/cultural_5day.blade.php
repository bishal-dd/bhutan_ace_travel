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
                        <h2> Bhutan Unveiled: A 5-Day Himalayan Odyssey</h2>
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
                        <img class="img-fluid" src="{{asset("assets/img/cultural_5day.webp")}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>
                            Bhutan Unveiled: A 5-Day Himalayan Odyssey
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> Travel</a></li>
                        </ul>
                        <p class="excert text-justify">
                            Bhutan's culture is deeply rooted in tradition. The Bhutanese people have embraced modernity
                            while preserving their unique customs, and the result is a harmonious blend of old and new.
                            The architecture is a testament to this, with beautifully adorned
                            dzongs (fortresses), monasteries, and houses reflecting the country's rich cultural heritage.
                        <p class="text-justify">
                            Bhutan's festivals, or "tshechus," are a vibrant expression of its
                            cultural identity. Colorful dances, intricate masks, and lively
                            celebrations are a hallmark of these events, providing a glimpse
                            into the deep-rooted spirituality of the Bhutanese people. The annual
                            Paro Tsechu and Thimphu Tsechu are among the most famous, drawing
                            travelers from around the world.
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
                                <h3>Day 1: Arrival in Paro – Thimphu</h3>
                                <p class="text-justify">
                                    Arrive at Paro International Airport with your guide  and transfer to Thimphu,
                                    the capital city of Bhutan. Visit the National Memorial Chorten, Buddha Dordenma statue and Tashichho
                                    Dzong. Overnight in Thimphu.
                                </p>
                                <h3>Day 2: Thimphu Sightseeing</h3>
                                <p class="text-justify">
                                    Visit the Folk Heritage Museum, Textile Museum, and the Institute for Zorig Chusum (Arts and Crafts
                                    School). Take a short hike to the Tango Monastery, a Buddhist monastery built in the 13th century. Visit
                                    the Takin Preserve, where you can see Bhutan’s national animal, the takin. Overnight in Thimphu.
                                </p>
                                <h3>Day 3: Thimphu – Punakha</h3>
                                <p class="text-justify">
                                    Drive to Punakha, the ancient capital of Bhutan. Stop at Dochula Pass (3,100 meters) for a stunning view
                                    of the Himalayan mountains. Visit Punakha Dzong, a fortress-monastery built in the 17th century. Hike
                                    to Chimi Lhakhang, a temple dedicated to the divine madman, Drukpa Kunley. Overnight in Punakha.
                                </p>
                                <h3>Day 4: Punakha – Paro</h3>
                                <p class="text-justify">
                                    Drive back to Paro. Visit Rinpung Dzong, a 17th-century fortress-monastery overlooking the Paro Valley.
                                    Take a short hike to the famous Tiger’s Nest Monastery (Taktsang Monastery), a sacred Buddhist site
                                    located on a cliff at an altitude of 3,120 meters. Overnight in Paro.
                                </p>
                                <h3>Day 5: Departure from Paro</h3>
                                <p class="text-justify">
                                    Departure from Paro International Airport.
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
                            <img src="{{asset("assets/img/cultural_3day.webp")}}" width="70" height="50" alt="post">
                            <div class="media-body">
                                <a href="/cultural_3day">
                                    <h3> Bhutan Bliss: A 3-Day Himalayan Adventure</h3>
                                </a>
                                <p>3 Days</p>
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
