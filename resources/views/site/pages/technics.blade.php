@extends('site.layouts.main')


@section('title', 'Вышки-туры строительные в аренду в Казани «Аренда высоты»')
@section('description', 'Предлагаем в аренду передвижные строительные вышки-туры с доставкой по Казани по самым выгодным ценам «Аренда высоты»')
@section('keywords', 'вышка тура аренда, вышка тура авито, вышка тура, вышка тура казань, вышка тура строительная, вышка тура 2 2, вышка тура передвижная, вышка тура +на колесах, вышка тура аренда казань')

@section('header_title')
    <div class="header-content my-container">
        <h1>Наша техника <span>в Казани</span></h1>
        <p></p>
    </div>
@endsection

@section('content')
    <section id="towers-tour">
        <div class="towers-tour__card my-container">
            <div class="tt-card__image">
                <picture>
                    <source type="image/webp" srcset="{{ asset('frontend/img/technics/gaz7.webp') }}">
                    <img src="{{ asset('frontend/img/technics/gaz7.jpg') }}" width="670" height="750" alt="">
                </picture>
            </div>
            <div class="tt-card__content">
                <h3>Перевозим грузы до 6 тонн на грузовике ISUZU, до 2-3 тонн на Газелях, по Казани, РТ и соседним регионам. Принимаем любые формы оплаты (без НДС, с НДС).</h3>
                <ol>
                        <li>Погрузка и разгрузка <div class="divider"></div></li>
                        <li>Экспедиторские услуги<div class="divider1"></div></li>
                        <li>Фотоотчёт о погрузке и разгрузке<div class="divider2" ></div></li>
                        <li>Ответственное хранение<div class="divider3"></div></li>
                        <li>GPS-отчёт<div class="divider4" ></div></li>
                        <li>Использование гидравлической тележки<div class="divider5" ></div></li>
                        <li>Сборные перевозки<div class="divider6" ></div></li>
                        <li>Подача ко времени<div class="divider7" ></div></li>
                        <li>Срочная подача<div class="divider8" ></div></li>
                    </ol>

                    <div id='map'></div>
</div>
        </div>
        <div class="tt-card__with__bg">
            <div class="towers-tour__card my-container">
                <div class="tt-card__content tt-card__revers">
                    <!-- <h2>Балатон 1×2<span>м</span></h2>
                    <h3>Вышки-туры «Балатон 12» более универсальные. Их можно применять на высоте до 21 метра используя стабилизаторы (входящие в комплект) и при необходимости крепления к стене. При высоте до 13,1 метра вышка-тура является самостоящей и не требует крепления к стене</h3>
                    <p>Технические характеристики</p>
                    <ol>
                        <li>Максимальная высота вышки: 21,0 м</li>
                        <li>Подъем высоты кратен 1 м</li>
                        <li>Максимальная высота рабочей площадки: 19,9 м</li>
                        <li>Размеры рабочей площадки: 1,03 х 2 м</li>
                        <li>Размеры основания вышки-туры: 1,5 х 2 м</li>
                        <li>Нормативная поверхностная нагрузка на рабочий настил при высоте до 13,1 м: 400 кгс</li>
                        <li>Нагрузка на рабочий настил при высоте свыше 13,1 м: 200 кгс</li>
                    </ol>
                    <div class="tt-cc__link">
                        <a href="{{ asset('frontend/doc/balaton-1x2.pdf') }}" target="_blank">Технический паспорт →</a>
                    </div> -->
                </div>

                <div class="tt-card__image">
                    <picture>
                        <source type="image/webp" srcset="{{ asset('frontend/img/technics/gaz4.webp') }}">
                        <img src="{{ asset('frontend/img/technics/gaz4.jpg') }}" width="670" height="450" alt="">
                    </picture>
                </div>

            </div>
        </div>
        <div class="towers-tour__card my-container">
            <div class="tt-card__image">
                <picture>
                    <source type="image/webp" srcset="{{ asset('frontend/img/technics/texnica3.webp') }}">
                    <img src="{{ asset('frontend/img/technics/texnica3.jpg') }}" width="670" height="450" alt="">
                </picture>
            </div>
            <div class="tt-card__content">
                <!-- <h2>Балатон 2×2<span>м</span></h2>
                <h3>Вышки-туры «Балатон 20» самые мощные из серии. Их высота может достигать 21,3 метра и главное отличие от остальных вышек - это грузоподъемность на всех высотах 400 кг. Размер рабочей площадки 2х2 метра – это позволяет чувствовать себя более комфортно на любой высоте</h3>
                <p>Технические характеристики</p>
                <ol>
                    <li>Максимальная высота вышки: 21,3 м</li>
                    <li>Подъем высоты кратен 1,4 м</li>
                    <li>Максимальная высота рабочей площадки: 20,3 м</li>
                    <li>Размеры рабочей площадки: 1,95 х 2 м</li>
                    <li>Размеры основания вышки-туры: 2 x 2,4 м</li>
                    <li>Нормативная поверхностная нагрузка на рабочий настил: 400 кгс</li>
                </ol>
                <div class="tt-cc__link">
                    <a href="{{ asset('frontend/doc/balaton-2x2.pdf') }}" target="_blank">Технический паспорт →</a>
                </div> -->
            </div>
        </div>
        <div class="tt-card__with__bg">
            <div class="towers-tour__card my-container">
                <div class="tt-card__content tt-card__revers">
                    <!-- <h2>Балатон 1×2<span>м</span></h2>
                    <h3>Вышки-туры «Балатон 12» более универсальные. Их можно применять на высоте до 21 метра используя стабилизаторы (входящие в комплект) и при необходимости крепления к стене. При высоте до 13,1 метра вышка-тура является самостоящей и не требует крепления к стене</h3>
                    <p>Технические характеристики</p>
                    <ol>
                        <li>Максимальная высота вышки: 21,0 м</li>
                        <li>Подъем высоты кратен 1 м</li>
                        <li>Максимальная высота рабочей площадки: 19,9 м</li>
                        <li>Размеры рабочей площадки: 1,03 х 2 м</li>
                        <li>Размеры основания вышки-туры: 1,5 х 2 м</li>
                        <li>Нормативная поверхностная нагрузка на рабочий настил при высоте до 13,1 м: 400 кгс</li>
                        <li>Нагрузка на рабочий настил при высоте свыше 13,1 м: 200 кгс</li>
                    </ol>
                    <div class="tt-cc__link">
                        <a href="{{ asset('frontend/doc/balaton-1x2.pdf') }}" target="_blank">Технический паспорт →</a>
                    </div> -->
                </div>

                <div class="tt-card__image">
                    <picture>
                        <source type="image/webp" srcset="{{ asset('frontend/img/technics/texnica2.webp') }}">
                        <img src="{{ asset('frontend/img/technics/texnica2.jpg') }}" width="670" height="450" alt="">
                    </picture>
                </div>

            </div>
        </div>
        <div class="towers-tour__card my-container">
            <div class="tt-card__image">
                <picture>
                    <source type="image/webp" srcset="{{ asset('frontend/img/technics/texnica1.webp') }}">
                    <img src="{{ asset('frontend/img/technics/texnica1.jpg') }}" width="670" height="450" alt="">
                </picture>
            </div>
            <div class="tt-card__content">
                <!-- <h2>Балатон 2×2<span>м</span></h2>
                <h3>Вышки-туры «Балатон 20» самые мощные из серии. Их высота может достигать 21,3 метра и главное отличие от остальных вышек - это грузоподъемность на всех высотах 400 кг. Размер рабочей площадки 2х2 метра – это позволяет чувствовать себя более комфортно на любой высоте</h3>
                <p>Технические характеристики</p>
                <ol>
                    <li>Максимальная высота вышки: 21,3 м</li>
                    <li>Подъем высоты кратен 1,4 м</li>
                    <li>Максимальная высота рабочей площадки: 20,3 м</li>
                    <li>Размеры рабочей площадки: 1,95 х 2 м</li>
                    <li>Размеры основания вышки-туры: 2 x 2,4 м</li>
                    <li>Нормативная поверхностная нагрузка на рабочий настил: 400 кгс</li>
                </ol>
                <div class="tt-cc__link">
                    <a href="{{ asset('frontend/doc/balaton-2x2.pdf') }}" target="_blank">Технический паспорт →</a>
                </div> -->
            </div>
        </div>
    </section>
    <!-- <section id="price-towers__tour">
        <div class="price-towers__tour my-container">
            <h2 class="ptt-title">Стоимость аренды вышек-туров</h2>
            <p class="ptt-description">Минимальная сумма заказа в размере арендной платы за 7 дней</p>
            <div class="ptt-image">
                <picture>
                    <source type="image/webp" srcset="{{ asset('frontend/img/tour-towers/towers-tour-price.webp') }}">
                    <img src="{{ asset('frontend/img/tour-towers/towers-tour-price.jpg') }}" width="720" height="1280" alt="">
                </picture>
            </div>
            <div class="ptt-call-to-action">
                <h2>Арендуйте вышку-тура без переплат</h2>
                <button class="ptt-card__btn ptt-card__btn__one btn" data-btn="Заявка на аренду вышек-туров">Арендовать</button>
                <a target="_blank" href="https://calcarenda.vercel.app/"><button id='bot' class="btn_calc" >Рассчитать</button></a>
            </div>
        </div>
    </section> -->
    <!-- include our-products start -->
    <section id="towers-tour__recommendations">
        <div class="our-services__title my-container">
            <h2>Возможно вас заинтересует</h2>
        </div>
        <div class="tt-recommendations my-container">
            <div class="op-main">
                <div class="op-main__card">
                    <a href="{{ route('gallery_technics') }}">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/technics/texnica1.webp') }}">
                            <img src="{{ asset('frontend/img/technics/texnica1.jpg') }}" width="670" height="350" alt="">
                        </picture>
                    </a>
                    <h2 class="op-card__title">Галерея нашей техники</h2>
                    <a href="{{ route('gallery_technics') }}" class="op-card__link">Подробнее →</a>
                </div>
                <div class="op-main__card">
                    <a href="{{ route('scaffolding') }}">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('frontend/img/tour-towers/recommendations-2.webp') }}">
                            <img src="{{ asset('frontend/img/tour-towers/recommendations-2.jpg') }}" width="670" height="350" alt="">
                        </picture>
                    </a>
                    <h2 class="op-card__title">Рамные строительные леса</h2>
                    <a href="{{ route('scaffolding') }}" class="op-card__link">Подробнее →</a>
                </div>
            </div>
            @include('site.inc.products_additional')
        </div>
    </section>
    <!-- include our-products end -->
@endsection
