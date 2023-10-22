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
                        <h2>Ace Travel Ticketing</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<div class="text-center p-5">
    <h2 class="mt-3">Ace Travel Ticketing</h2>

    <div class="row mt-5">
    <div class="col">
        <img src="{{asset('assets/img/plane.webp')}}" class="img-fluid" alt="Responsive Image">
    </div>
    <div class="col">
        <img src="{{asset('assets/img/bhutan_air.webp')}}" class="img-fluid" alt="Responsive Image">
    </div>
    </div>

    <p class="text-justify mt-5">
        Ace Travel Ticketing, is a licensed international and domestic flight ticketing agency located in Thimphu. We specialize in confirming flight tickets for your preferred airlines, catering to worldwide destinations and trusted flight options. Our mission is to ensure your journey is comfortable, hassle-free, and filled with reliable travel choices.
    </p>

    <p class="text-justify mt-5">
        <b>Regarding specific airlines:</b>
    </p>
    <p class="text-justify">
        <b>1. Druk Air:</b> Druk Air operates limited flights from select cities in five countries. Share your preferred travel month or tentative dates with us, and we'll present you with available flight options.
    </p>
    <p class="text-justify">
        <b>2. Bhutan Airlines:</b> Bhutan Airlines offers flights during specific months and dates. Contact Ace Travel Ticketing, and our dedicated team will assist you in booking your tickets.
    </p>

    <p class="text-justify mt-5">
        <b>Please note that Ace Travel Ticketing cannot be held responsible for the following:</b>
    </p>
    <p class="text-justify">
        <b>-</b> Flight cancellations due to any circumstances.
    </p>
    <p class="text-justify">
        <b>-</b>   Compliance with the COVID protocols of the destination country.
    </p>
    <p class="text-justify">
        <b>-</b>   Visa requirements for respective countries.
    </p>

    <p class="text-justify mt-5">
       <b> We recommend that you familiarize yourself with these aspects and inform us if you wish to proceed with flight ticket confirmations.</b>
    </p>

    <p class="text-justify mt-5">
        Refunds will be processed in accordance with the cancellation policies of the respective airlines or as per the terms and conditions agreed upon with Ace Travel Ticketing before the issuance of flight tickets.
    </p>





</div>

@include('shared.footer')
