@extends('site.layouts.gallery_snow_removal')

@section('title', 'Аренда строительного оборудования в Казани «Аренда высоты»')
@section('description', 'Предлагаем в аренду минитрактор МКСМ, лестницы раздвижные, вышки-туры, рамные леса, услуги по очистке снега с крыш «Аренда высоты»')
@section('keywords', 'очистка крыш +от снега, уборка снега +с крыш, минитрактор аренда, минитрактор авито, минитрактора +в татарстане, минитрактор казань, строительный альпинизм')

@section('header_title')
    <div class="header-content my-container">
        <h1>Строительное оборудование <span>в Казани</span></h1>
        <p>Предлагаем в аренду строительные вышки-туры, рамные строительные леса, раздвижные лестницы. Дополнительно оказываем услуги на минитракторе МКСМ, а также услуги строительного альпинизма по очистке снега с крыш. Осуществляем доставку оборудования нашим автотранспортом по Казани и Республике Татарстан</p>
    </div>
@endsection

@section('content')
    <section id="gallery">
        <div class="gallery">
        <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/snow1.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/snow1.jpg') }}">
                            <img src="{{ asset('frontend/img/snow-removal/snow1.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 0,6×1,5м:</span> 4 м</h3>
                <p><span>Назначение:</span> отделочные работы</p>
                <p><span>Объект:</span> п. Лаишево</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/hige1.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/hige1.webp') }}">
                            <img src="{{ asset('frontend/img/snow-removal/hige1.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 0,6×1,5м:</span> 4 м</h3>
                <p><span>Назначение:</span> отделочные работы</p>
                <p><span>Объект:</span> п. Лаишево</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/hige3.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/hige3.webp') }}">
                            <img src="{{ asset('frontend/img/snow-removal/hige3.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/hige4.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/hige4.webp') }}">
                            <img src="{{ asset('frontend/img/snow-removal/hige4.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/hige5.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/hige5.webp') }}">
                            <img src="{{ asset('frontend/img/snow-removal/hige5.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/hige6.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/hige6.webp') }}">
                            <img src="{{ asset('frontend/img/snow-removal/hige6.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/alip.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/alip.jpg') }}">
                            <img src="{{ asset('frontend/img/snow-removal/alip.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/alip2.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/alip2.jpg') }}">
                            <img src="{{ asset('frontend/img/snow-removal/alip2.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p> -->
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/snow-removal/alip3.jpg') }}" class="gallery-show" title="Уборка снега с крыш">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/snow-removal/alip3.jpg') }}">
                            <img src="{{ asset('frontend/img/snow-removal/alip3.jpg') }}" width="320" height="350" alt="уборка снега с крыш">
                        </picture>
                    </a>
                </div>
                <!-- <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p> -->
            </div>
        </div>
    </section>
    <!-- include our-products start -->
    <section id="gallery-recommendations">
        <div class="our-services__title my-container">
            <h2>Арендуйте у нас</h2>
        </div>
        <div class="gallery-recommendations my-container">
            @include('site.inc.main_products')
            @include('site.inc.products_additional')
        </div>
    </section>
    <!-- include our-products end -->
@endsection
