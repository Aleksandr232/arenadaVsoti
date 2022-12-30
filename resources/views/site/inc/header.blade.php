<a href="{{ route('login') }}" class="security"></a>
<div class="header-contacts">
    <div class="hc-content my-container">
        <address>
            <img src="{{ asset('frontend/img/icons/location.svg') }}" width="16" height="16" alt="">
            РТ, г. Казань, ул. Мирхайдара Файзи 68
        </address>
        <div class="header-phone">
            <a href="tel:+79600625525">8 960 062-55-25</a>
            <a href="https://wa.me/+79600625525" title="Напишите нам в Whatsapp" target="_blank">
                <img src="{{ asset('frontend/img/icons/whatsapp.svg') }}" width="20" height="20" alt="">
            </a>
        </div>
    </div>
</div>
<div class="header-navigation">
    <div class="hn-content my-container">
        @if(!Request::is('/'))
            <a href="/" class="hn-logo" title="Аренда оборудования для работ на высоте">
                <img src="{{ asset('frontend/img/logotype.svg') }}" width="280" height="53" alt="">
            </a>
        @else
            <a class="hn-logo" title="Аренда оборудования для работ на высоте">
                <img src="{{ asset('frontend/img/logotype.svg') }}" width="280" height="53" alt="">
            </a>
        @endif
        <div class="hn-navbar">
            <div class="hn-navbar__burger__btn">
                <p class="hn-navbar__burger__title">Меню</p>
                <div class="hn-navbar__burger">
                    <span></span>
                </div>
            </div>
            <ul class="hn-navbar__menu">
                @include('site.inc.menu')
            </ul>
            <button class="hn-navbar__btn btn" data-btn="Заявка на обратный звонок">
                <img src="{{ asset('frontend/img/icons/phone.svg') }}" width="30" height="30" alt="">
            </button>
        </div>
    </div>
</div>
