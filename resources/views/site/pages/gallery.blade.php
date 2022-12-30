@extends('site.layouts.gallery')

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
                    <a href="{{ asset('frontend/img/gallery/inopolis.jpg') }}" class="gallery-show" title="Иннополис">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/inopolis.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/inopolis.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> примерно ~800 кв.м</h3>
                <p><span>Назначение:</span>Монтаж утепленного вент фасада</p>
                <p><span>Объект:</span>Иннополис</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/baumana.jpg') }}" class="gallery-show" title="ул. Баумана">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/baumana.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/baumana.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~670 кв.м</h3>
                <p><span>Назначение:</span> покраска фасада</p>
                <p><span>Объект:</span> ул. Баумана</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/malyye-mabany.jpg') }}" class="gallery-show" title="п. Малые Кабаны">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/malyye-mabany.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/malyye-mabany.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~66 кв.м</h3>
                <p><span>Назначение:</span> фасадные работы, подшивка карнизов</p>
                <p><span>Объект:</span> п. Малые Кабаны</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/adelya-kutuya.jpg') }}" class="gallery-show" title="ул. Аделя Кутуя">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/adelya-kutuya.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/adelya-kutuya.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~380 кв.м</h3>
                <p><span>Назначение:</span> фасадные работы</p>
                <p><span>Объект:</span> ул. Аделя Кутуя</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/school-gabishevo.jpg') }}" class="gallery-show" title="школа п. Габишево">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/school-gabishevo.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/school-gabishevo.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~360 кв.м</h3>
                <p><span>Назначение:</span> утепление, монтаж вент. фасада</p>
                <p><span>Объект:</span> школа п. Габишево</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/vysokaya-gora.jpg') }}" class="gallery-show" title="п. Высокая Гора">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/vysokaya-gora.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/vysokaya-gora.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~1700 кв.м</h3>
                <p><span>Назначение:</span> утепление, монтаж вент. фасада </p>
                <p><span>Объект:</span> п. Высокая Гора</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/novoye-shigaleyevo.jpg') }}" class="gallery-show" title="п. Новое Шигалеево">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/novoye-shigaleyevo.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/novoye-shigaleyevo.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~140 кв.м</h3>
                <p><span>Назначение:</span> установка окон, утепление фасада, фасадные работы</p>
                <p><span>Объект:</span> п. Новое Шигалеево</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/rodiny.jpg') }}" class="gallery-show" title="ул. Родины">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/rodiny.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/rodiny.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~130 кв.м</h3>
                <p><span>Назначение:</span> утепление, монтаж вент. фасада </p>
                <p><span>Объект:</span> ул. Родины</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/garden.jpg') }}" class="gallery-show" title="п. Гарден">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/garden.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/garden.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~150 кв.м</h3>
                <p><span>Назначение:</span> остекление, утепление, фасадные работы</p>
                <p><span>Объект:</span> п. Гарден</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/gabishevo.jpg') }}" class="gallery-show" title="п. Габишево">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/gabishevo.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/gabishevo.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~130 кв.м</h3>
                <p><span>Назначение:</span> утепление фасада, штукатурные работы, подшивка карниза</p>
                <p><span>Объект:</span> п. Габишево</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/ulyanova-lenina.jpg') }}" class="gallery-show" title="ул. Ульянова-Ленина">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/ulyanova-lenina.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/ulyanova-lenina.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~2100 кв.м</h3>
                <p><span>Назначение:</span> утепление, облицовка клинкерным кирпичом</p>
                <p><span>Объект:</span> ул. Ульянова-Ленина</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/laishevo.jpg') }}" class="gallery-show" title="п. Лаишево">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/laishevo.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/laishevo.jpg') }}" width="320" height="350" alt="">
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
                            <img src="{{ asset('frontend/img/gallery/salmachi.jpg') }}" width="320" height="350" alt="">
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
                            <img src="{{ asset('frontend/img/gallery/kuzemetevskoe.jpg') }}" width="320" height="350" alt="">
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
                            <img src="{{ asset('frontend/img/gallery/usady.jpg') }}" width="320" height="350" alt="">
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
                            <img src="{{ asset('frontend/img/gallery/kazan-moll.jpg') }}" width="320" height="350" alt="">
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
                            <img src="{{ asset('frontend/img/gallery/kabany.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 2*2м:</span> 5,6 м</h3>
                <p><span>Назначение:</span> ремонтные работы, обшивка карниза</p>
                <p><span>Объект:</span> п. Кабаны</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/kasimovykh.jpg') }}" class="gallery-show" title="ул. Бр. Касимовых, 42">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/kasimovykh.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/kasimovykh.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~756 кв.м</h3>
                <p><span>Назначение:</span> ремонтные работы</p>
                <p><span>Объект:</span> ул. Бр. Касимовых, 42</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/our-storage-salmachi.jpg') }}" class="gallery-show" title="наш склад в Салмычах">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/our-storage-salmachi.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/our-storage-salmachi.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Высота Балатон 0,6×1,5м:</span> 5 м</h3>
                <p><span>Назначение:</span> текущий ремонт</p>
                <p><span>Объект:</span> наш склад в Салмычах</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/kazanskiy-kreml.jpg') }}" class="gallery-show" title="Казанский кремль">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/kazanskiy-kreml.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/kazanskiy-kreml.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> в целом на объекте ~4800 кв.м</h3>
                <p><span>Назначение:</span> фасадные работы</p>
                <p><span>Объект:</span> Казанский кремль</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/adoratskogo.jpg') }}" class="gallery-show" title="ул. Адоратского, 26А">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/adoratskogo.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/adoratskogo.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> ~408 кв.м</h3>
                <p><span>Назначение:</span> фасадные работы</p>
                <p><span>Объект:</span> ул. Адоратского, 26А</p>
            </div>
            <div class="gallery-card">
                <div class="gallery-card__image">
                    <a href="{{ asset('frontend/img/gallery/peschanyye-kovali.jpg') }}" class="gallery-show" title="пос. Песчанные Ковали">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/gallery/peschanyye-kovali.webp') }}">
                            <img src="{{ asset('frontend/img/gallery/peschanyye-kovali.jpg') }}" width="320" height="350" alt="">
                        </picture>
                    </a>
                </div>
                <h3><span>Площадь лесов:</span> примерно ~800 кв.м</h3>
                <p><span>Назначение:</span> монтаж вентфасада</p>
                <p><span>Объект:</span> пос. Песчанные Ковали</p>
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
