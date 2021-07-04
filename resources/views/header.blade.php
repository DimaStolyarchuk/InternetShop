<header>
    <!-- header inner -->
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href='{{ asset('/') }}'><img src='{{ asset('images/logo.png') }}' alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="/">Головна сторинка</a> </li>
                                    <li> <a href="about">Про нас</a> </li>
                                    <li> <a href="brand">Бренд</a> </li>
                                    <li> <a href="specials">Корзина</a> </li>
                                    <li> <a href="contact">Контакти</a> </li>
{{--                                    <li class="last">--}}
{{--                                        <a href="#"><img src="images/search_icon.png" alt="icon" /></a>--}}
{{--                                    </li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                            <li><img src='{{ asset('icon/call.png') }}' />(097)456 16 60</li>
                            <li><img src='{{ asset('icon/email.png') }}' />dima@gmail.com</li>
                            <li><img src='{{ asset('icon/loc.png') }}' />Адреса: Симиренко 2в</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
