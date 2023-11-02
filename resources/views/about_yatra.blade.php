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
                        <h2>About</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<!-- slider Area End-->
    <div class="section-top-border text-right">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mt-3">About Bhutan Ora Tours and Travel</h2>

                <p class="text-justify mt-5">
                    Ora Tours and Travel is dedicated to making travel simple. We specialize in a complete range of
                    travel-related services and adventure activities, from five-star to budget class. In
                    providing this full range of travel- and adventure-related activities, AceTravels continues
                    to promote responsible tourism, sustainable development of the country and
                    preservation of local cultures and traditions. As always, we continue to place a
                    significant priority on the continual improvement of our services in order to maintain the
                    highest level of customer satisfaction.
                </p>

                <p class="text-justify mt-5">
                    <b>Vision:</b>  To be 1st Choice of Company for Customers
                </p>
                <p class="text-justify mt-5">
                    <b>Mission:</b>  To be Bhutan’s #1 Travel Brand
                </p>
                <p class="text-justify mt-5">
                    <b>Motto:</b>  Your Travel Partner
                </p>

                <p class="text-justify mt-5">
                    <b>Core Values:</b> 
                </p>
                <p class="text-justify">
                    <b>1. </b> Fair Price
                </p>
                <p class="text-justify">
                    <b>2. </b> Integrity
                </p>
                <p class="text-justify">
                    <b>3. </b> Quality Service
                </p>
                <p class="text-justify">
                    <b>4. </b> Customer Satisfaction
                </p>
                <p class="text-justify">
                    <b>5. </b> Responsible Travel
                </p>
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/yatra.webp')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@include('shared.footer')
