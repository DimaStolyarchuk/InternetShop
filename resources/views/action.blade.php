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
                    <h2>Акційні товари</h2>
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
                @foreach($dataActions as $dataAction)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{ asset('storage/'. $dataAction->image) }}" alt="img" />
                            <span><h3>{{ $dataAction->title }}</h3></span>
                            <h2><strong class="red">{{ $dataAction->description }}</strong></h2>
                            <div class="col-md-12">
                                <a class="read-more">Купити</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12">
                    <a class="read-more">Дивитися більше</a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('second_header')

