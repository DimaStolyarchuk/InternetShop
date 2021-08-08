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
                    <h3>Дякуємо за ваше замовлення у нашому інтернет магазині. З вами зв'яжуться найблищим часом</h3>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h3><a class="read-more" href="{{ route('/') }}">Повернутися на головну сторінку</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@include('second_header')


