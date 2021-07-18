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
                    <h2>Ви увійшли!!!</h2>
                </div>
            </div>
        </div>
    </div>
</div>


@include('second_header')
