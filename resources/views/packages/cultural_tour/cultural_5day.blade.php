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
                                <ul>
                                    <li>Accommodations</li>
                                    <li>Guided tours</li>
                                    <li>Meals</li>
                                    <!-- Add more included items as needed -->
                                </ul>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->


@include('shared.footer')
