@extends('site.layouts.gallery_tower')

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
                    <a href="{{ asset('frontend/img/gallery/laishevo.jpg') }}" class="gallery-show" title="п. Лаишево">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/laishevo.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/laishevo.jpg') }}" width="320" height="350" alt="вышки-туры">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 0,6×1,5м:</span> 4 м</h3>
                <p><span>Назначение:</span> отделочные работы</p>
                <p><span>Объект:</span> п. Лаишево</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/salmachi.jpg') }}" class="gallery-show" title="п. Салмачи">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/salmachi.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/salmachi.jpg') }}" width="320" height="350" alt="вышки-туры">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 1*2м:</span> 4 м</h3>
                <p><span>Назначение:</span> монтаж металлосайдинга</p>
                <p><span>Объект:</span> п. Салмачи</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/kuzemetevskoe.jpg') }}" class="gallery-show" title="п. Куземетьевское">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/kuzemetevskoe.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/kuzemetevskoe.jpg') }}" width="320" height="350" alt="вышки-туры">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 1*2м:</span> 6 м</h3>
                <p><span>Назначение:</span> покраска деревянного фасада</p>
                <p><span>Объект:</span> п. Куземетьевское</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/usady.jpg') }}" class="gallery-show" title="п. Усады">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/usady.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/usady.jpg') }}" width="320" height="350" alt="вышки-туры">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 2*2м:</span> 4,2 м</h3>
                <p><span>Назначение:</span> покраска деревянного дома</p>
                <p><span>Объект:</span> п. Усады</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/kazan-moll.jpg') }}" class="gallery-show" title="Казань-МОЛЛ">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/kazan-moll') }}.webp">
                            <img src="{{ asset('frontend/img/gallery/kazan-moll.jpg') }}" width="320" height="350" alt="вышки-туры">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 2*2м:</span> 14 м</h3>
                <p><span>Назначение:</span> внутренние монтажные и отделочные работы</p>
                <p><span>Объект:</span> Казань-МОЛЛ</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/kabany.jpg') }}" class="gallery-show" title="п. Кабаны">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/kabany.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/kabany.jpg') }}" width="320" height="350" alt="вышки-туры">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 2*2м:</span> 5,6 м</h3>
                <p><span>Назначение:</span> ремонтные работы, обшивка карниза</p>
                <p><span>Объект:</span> п. Кабаны</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/our-storage-salmachi.jpg') }}" class="gallery-show" title="наш склад в Салмычах">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/our-storage-salmachi.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/our-storage-salmachi.jpg') }}" width="320" height="350" alt="вышки-туры">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 0,6×1,5м:</span> 5 м</h3>
                <p><span>Назначение:</span> текущий ремонт</p>
                <p><span>Объект:</span> наш склад в Салмычах</p>
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
