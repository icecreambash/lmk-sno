{{--<nav class="uk-navbar-container navbar__container__sub">--}}
{{--    <div class="uk-container">--}}
{{--        <div uk-navbar="align: center">--}}
{{--            <div class="uk-navbar-center">--}}
{{--                <ul class="uk-navbar-nav uk-dark navbar_sub__items">--}}
{{--                    <li>--}}
{{--                        <a href="#">Новости</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Наша миссия</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">О нас</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
<nav class="uk-navbar-container navbar__container">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <img class="uk-navbar-item uk-logo navbar__item" src="/popcorn/logo.svg" width="60px"/>

                <ul class="uk-navbar-nav navbar__items">
                    <li class="uk-active">
                        <a>
                            <div class="uk-visible@s">
                                Липецкий металлургический колледж
                                <div class="uk-navbar-subtitle" style="font-size: 12px; font-weight: 600;">Студенческое научное общество</div>
                            </div>
                            <div class="uk-hidden@s">
                                <div class="uk-navbar-subtitle " style="font-size: 12px; font-weight: 600;">Студенческое<br/>научное общество</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-right uk-hidden@s">
                <a class="uk-navbar-toggle " href="#" uk-toggle="target: #sidenav">
                    <span class="uk-icon uk-margin-small-right" uk-navbar-toggle-icon></span>
                    Меню
                </a>
            </div>
            <div class="uk-navbar-right uk-visible@s">
                <ul class="uk-navbar-nav">
                    <li class="@if(Route::is('index')) uk-active @endif"><a href="{{Route('index')}}">Главная</a></li>
                    <li class="@if(Route::is('news')) uk-active @endif"><a href="{{Route('news')}}">Новости</a></li>
                    <li><a href="#"><button class="uk-button uk-button-default button-property" uk-toggle="target: #modal-call">Вступить в сообщество</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</div>
<!--    Mobile Canvas-->
<div id="sidenav" uk-offcanvas="flip: true; mode: push;" class="uk-offcanvas">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column mobile__navbar__canvas">
        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="@if(Route::is('index')) uk-active @endif"><a href="{{Route('index')}}">Главная</a></li>
            <li class="@if(Route::is('news')) uk-active @endif"><a href="{{Route('news')}}">Новости</a></li>
            <li class="uk-parent"><a href="#">О нас</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><button class="uk-button uk-button-default button-property-mobile" uk-toggle="target: #modal-call">Вступить в сообщество</button></a></li>
        </ul>
    </div>
</div>
<!--    Mobile Convas End-->
