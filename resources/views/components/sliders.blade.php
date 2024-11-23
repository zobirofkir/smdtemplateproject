
<div class="slider-wrapper">

    <section class="slider-section">
        <div class="slider-active slick-style">
            @foreach ([1, 2, 3] as $item)
                <div class="single-slider img-bg" style="background: #6dd6ff">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-between w-100 col-xl-7 col-lg-8 col-md-10">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">
                                        Société Morocaine
                                        <br>
                                        <b>de Diabète</b>
                                    </h1>

                                    <h2 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">
                                        Moroccan Diabetes Society
                                    </h2>

                                    <h3 data-animation="fadeInDown" style="margin-top: 20px" data-duration="1.5s" data-delay=".5s">
                                        الجمعية المغربية لمرض السكري
                                    </h3>

                                    <h4 data-animation="fadeInDown" data-duration="1.5s" style="margin-top: 20px" data-delay=".5s">
                                        ⵜⴰⵎⵙⵎⵓⵏⵜ ⵜⴰⵎⵔⵔⵓⴽⵉⵜ ⵏ ⵡⴰⵟⵟⴰⵏ ⵏ ⵙⵙⴽⴻⵕ
                                    </h4>

                                </div>

                                <div>
                                    <img src="{{asset('assets/img/logo/logo.png')}}" class="logo_right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
