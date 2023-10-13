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
                        <h2>Bhutan Expedition: A 6-Day Himalayan Journey</h2>
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
                        <img class="img-fluid" src="{{asset("assets/img/cultural_6day.webp")}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>
                            Bhutan Expedition: A 6-Day Himalayan Journey
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> Travel</a></li>
                        </ul>
                        <p class="excert text-justify">
                            Perhaps one of the most intriguing aspects of Bhutan is its commitment to Gross
                            National Happiness (GNH) over Gross Domestic Product (GDP). The Bhutanese government
                            measures the well-being of its citizens through GNH, which considers factors like
                            sustainable development, environmental conservation, and spiritual and mental well-being.
                            This approach sets Bhutan
                            apart as a nation that prioritizes the happiness and contentment of its people above all else.
                        </p>
                        <p class="text-justify">
                            While on your tour of Bhutan, you can indulge in a variety of experiences that will
                            stay with you forever. Hike to the Tiger's Nest Monastery, perched precariously on a cliff,
                            or explore the ancient streets of Thimphu, Bhutan's capital. Savor the delicious Bhutanese
                            cuisine, dominated
                            by spicy chilies and delicious cheese, and take part in archery, Bhutan's national sport.
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
                                <h3>Day 1. Paro to Thimphu</h3>
                                <p class="text-justify">
                                    Arrival by plane to Paro airport and drive to Thimphu or in case of arrival by land, crossing border from
                                    India in Phuntsholing/Jaigon and full day drive to Thimphu. Stop at Tachog lhakhang to see traditional
                                    bridge made using ancient iron chains. Visit of Tashicho dzong , the castle, which serves as seat of the
                                    king and government. Other sightseeing depending on the arrival time.
                                </p>
                                <h3>Day 2. Thimphu</h3>
                                <p class="text-justify">
                                    Early morning drive to Buddha Dordenma, the gigantic statue of Buddha overlooking the valley and walk
                                    to striking city viewpoint. See Memorial Chorten, always busy with devotees. Vist Changangkha Temple
                                    is the one of oldest temples in the Thimphu valley. Later in the evening visit Tashichoedzong and Walk in
                                    Norzin lam street and see the traffic police signaling in junctions. Thimphu is only capital in the world
                                    without the traffic lights. Finish walk at handicraft market where many interesting Bhutanese souvenirs
                                    can be seen and bought for reasonable price. Overnight in Thimphu.
                                </p>
                                <h3>Day 3 Thimphu to Punakha</h3>
                                <p class="text-justify">
                                    Drive to Punakha, the ancient capital of Bhutan. Stop at Dochula Pass (3,100 meters) for a stunning view
                                    of the Himalayan mountains. Visit Punakha Dzong, a fortress-monastery built in the 17th century. Hike
                                    to Chimi Lhakhang, a temple dedicated to the divine madman, Drukpa Kunley. Overnight in Punakha.
                                </p>
                                <h3>Day 4 Punakha to Paro</h3>
                                <p class="text-justify">
                                    Drive back to Paro. Visit Rinpung Dzong, a 17th-century fortress-monastery overlooking the Paro Valley.
                                    Visit of the National Museum and Paro dzong (Rinpung dzong), the castle-monastery where Bernardo
                                    Bertolucci’s Little Buddha film was shot. Pristine Kyichu lhakhang is one of the two oldest temples built
                                    in Bhutan. later in evening scroll in market. Overnight in Paro
                                </p>
                                <h3>Day 5 Paro</h3>
                                <p class="text-justify">
                                    After breakfast Climb to Taktsang gomba (Tiger’s Nest) is the highlight of the tour. While the hike seems
                                    to be hard, it’s very rewarding. If you don’t feel so strong, you can climb just halfway to cafeteria with
                                    nice view of the place. If time permits, you can make visit to Drukyel dzong, the castle ruins from where
                                    you can see the summit of holy Jomolhari mountain in clear weather. Dinner at Farm house.
                                </p>
                                <h3>Day 6</h3>
                                <p>
                                    Departure
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
                            <img src="{{asset("assets/img/cultural_5day.webp")}}" width="70" height="50" alt="post">
                            <div class="media-body">
                                <a href="/cultural_5day">
                                    <h3>Bhutan Unveiled: A 5-Day Himalayan Odyssey.</h3>
                                </a>
                                <p>5 Days</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="{{asset("assets/img/cultural_3day.webp")}}" width="70" height="50" alt="post">
                            <div class="media-body">
                                <a href="/cultural_3day">
                                    <h3>Bhutan Bliss: A 3-Day Himalayan Adventure</h3>
                                </a>
                                <p>3 Days</p>
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
