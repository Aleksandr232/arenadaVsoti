@extends('site.layouts.gallery_technics_bars')

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
                    <a href="{{ asset('frontend/img/technics/texnica3.jpg') }}" class="gallery-show" title="Погрузчик, минитрактор">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/technics/texnica3.webp') }}">
                            <img src="{{ asset('frontend/img/technics/texnica3.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
           </div>
           <div class="gallery-card__image">
                    <div class="video_pos">
                        <video controls="controls">
                            <source src="../../../../public/frontend/video/barsik6.mp4">
                        </video>
                    </div>
            </div>
            <div class="gallery-card__image">
                    <div class="video_pos1">
                        <video controls="controls">
                            <source src="../../../../public/frontend/video/bars2.MP4">
                        </video>
                    </div>
            </div>
            <div class="gallery-card__image">
                    <div class="video_pos2">
                        <video controls="controls">
                            <source src="../../../../public/frontend/video/bars4.MOV">
                        </video>
                    </div>
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
