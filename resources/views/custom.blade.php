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
                    <h2>Оформлення вашого замовлення</h2>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <h2>Вкажіть свої ім'я та номер телефону, щоб наші менеджери змогли з вами зв'язатись:</h2>
            <div class="col-md-12">
                <form class="main_form" method="post" action="{{ route('save_custom') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Ваше імя" type="text" name="name">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Телефон" type="text" name="tel">
                        </div>
                        <div class=" col-md-12">
                            <input class="form-control" placeholder="Електрона адреса" type="text" name="email">
                        </div>
                        <div class=" col-md-12">
                            <button class="send" href="{{ route('thanks') }}">Відправити</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('second_header')


