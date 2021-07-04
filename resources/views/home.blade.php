@extends('layout')
<!-- body -->

<body class="main-layout ">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
@include('header')
<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/banner.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Свіжі новини </span>
                        <h1>Снижки на деяки товари нашего магазину до 25%</h1>
                        <p>Також якщо ви постійний клієнт нашого магазину, для Вас будуть працювати додаткові знижки
                            <br>до 30% та 35%. Ми цінуюмо та шануємо наших постійних клієнтів та завжди раді їх бачити.
                            <br>Якщо ви один з них, то тисніть на кнопку "Купити"</p>
                        <a class="buynow" href="{{ route('action') }}">Купити</a>
                        <ul class="social_icon">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Інші новини </span>
                        <h1>На деякі товари працює акція "Бонус +"</h1>
                        <p>Акція "Бонус +" - При купівлі певного товару Ви отримуєте до нього аксесуар на вибір.
                            <br> Це може бути будь що, на ваший смак та бажання
                            <br> Якщо Вас це зацікавило, на кнопку "Купити" </p>
                        <a class="buynow" href="#">Купити</a>
                        <ul class="social_icon">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
</section>


<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Наші товари</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach($dataCategorys as $dataCategory)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <img src="{{ asset('storage/'. $dataCategory->image) }}" alt="img" />
                        <h3 class="entry-title"><a rel="bookmark">{{ $dataCategory->name }}</a></h3>
                            <h1><a class="red" href="{{ route('category', ['id' => $dataCategory->id]) }}" rel="bookmark">{{ $dataCategory->description }}</a></h1>

{{--                       <h1><a class="red" href="{{ route('product', ['id' => $dataCategorys->id]) }}" rel="bookmark">{{ $dataHome->description }}</a></h1>--}}
                    </div>
                </div>
                @endforeach

                <div class="col-md-12">
                    <a class="read-more">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end brand -->
<!-- clients -->
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Що думають наші клієнти</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clients_red">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@include('second_header')
<!-- end footer -->
<!-- Javascript files-->
<script src='{{ asset('js/jquery.min.js') }}'></script>
<script src='{{ asset('js/popper.min.js') }}'></script>
<script src='{{ asset('js/bootstrap.bundle.min.js') }}'></script>
<script src='{{ asset('js/jquery-3.0.0.min.js') }}'></script>
<script src='{{ asset('js/plugin.js') }}'></script>
<!-- sidebar -->
<script src='{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}'></script>
<script src='{{ asset('js/custom.js') }}'></script>
<!-- javascript -->
<script src='{{ asset('js/owl.carousel.js') }}'></script>
<script src='{{ asset('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}'></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
</body>

</html>
