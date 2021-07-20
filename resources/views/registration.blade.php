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
                    <h2>Реєстрація</h2>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
{{--                <form class="main_form" method="post" action="{{ route('save_registration') }}">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <input class="form-control" placeholder="Електрона адреса" type="text" name="email">--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <input class="form-control" placeholder="Пароль" type="text" name="password">--}}
{{--                        </div>--}}
{{--                        <div class=" col-md-12">--}}
{{--                            <input class="form-control" placeholder="Повторити пароль" type="text" name="password">--}}
{{--                        </div>--}}
{{--                        <div class=" col-md-12">--}}
{{--                            <button class="send">Відправити</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
                <form method="POST" action="{{ route('create') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Ім'я") }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Електрона адреса') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Повторити пароль') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Відправити') }}
                            </button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>

@include('second_header')



