@extends('layout')
<!-- body -->

<body class="main-layout">

<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>

@include('header')

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
<div class="brand">
    <div class="container">
    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach($dataBrands as $dataBrand)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                            <img src="{{ asset('storage/'. $dataBrand->image) }}" alt="img" />
                            <h3><strong class="">{{ $dataBrand->title }}</strong></h3>
                            <span><h2>{{ $dataBrand->description }}</h2></span>
                        <div class="col-md-12">
                            <a class="read-more" href="{{ route('save_basket', ['id' => $dataBrand->id]) }}">Купити</a>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-md-12">--}}
{{--                    <a class="read-more">Побачити більше</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>


@include('second_header')


