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
                        <h2>Sustainable Development Fee</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<div class="text-center p-5">

    <h2 class="mt-3">Sustainable Development Fee</h2>

    <p class="text-justify mt-5">
        Children below the age of 5 years are exempted from the SDF. However, the visa application fee of USD 40 is still applicable. For Children between 5 years and below 12 years old, they are required to pay USD 100 per person per night as the SDF. *SDF does not include accommodation, meals, transport and guides.
    </p>
    <p class="justify-content-center">
        <table border="1" align="center" cellpadding="20">
            <thead>
                <tr style="background-color: rgb(52, 136, 52)">
                    <th>Age</th>
                    <th>SDF</th>
                    <th>Permit( Indian Password)</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                        <td>0- 5 years old</td>
                        <td>NA</td>
                        <td rowspan="3">1200 INR/ night</td>
                </tr>
                <tr>
                    <td>5 – 12 years old</td>
                    <td>$ 50 USD/night</td>
                </tr>
                <tr>
                    <td>Adult above 12 years old</td>
                    <td>$100 USD/night</td>
                </tr>
            </tbody>
        </table>
    </p>

    <p class="text-justify">
        <b>This sustainable development fee goes towards free education, free healthcare, poverty alleviation, along 
            with the building of infrastructure. Please feel free to contact us: +975-77 20 16 25</b>
    </p>

</div>

@include('shared.footer')
