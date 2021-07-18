@extends('layout')
<!-- body -->

<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src='{{ asset('images/loading.gif') }}' alt="#" /></div>
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
                    <h2>Корзина</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about -->
@foreach($idProducts as $idProduct)
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="{{ asset('storage/'. $idProduct->image, ['id' => $idProduct->id]) }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <span>{{ $dataAbout->title }}</span>
                        <p>{{ $dataAbout->description }} </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- end about -->

<!-- footer -->
@include('second_header')


