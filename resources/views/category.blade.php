@extends('layout')
<!-- body -->

<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
@include('header')
<!-- end header -->
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Наші бренди</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand -->
<div class="brand">
    <div class="container">
    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach($dataProducts as $dataProduct)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{ asset('storage/'. $dataProduct->image) }}" alt="img" />
                            <h3><strong class="">{{ $dataProduct->product }}</strong></h3>
                            <span><h2>{{ $dataProduct->price }}</h2></span>
                            <div class="col-md-12">
                                <a class="read-more">Купити</a>
                            </div>
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


@include('second_header')

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
