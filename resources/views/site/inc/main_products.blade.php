<div class="op-main">
    <div class="op-main__card">
        <a href="{{ route('scaffolding') }}">
            <picture>
                <source type="image/webp" srcset="{{ asset('frontend/img/gallery/kasimovykh.webp') }}">
                <img src="{{ asset('frontend/img/gallery/kasimovykh.webp') }}" width="670" height="350" alt="аренда лесов казань">
            </picture>
        </a>
        <h2 class="op-card__title">Рамные строительные леса</h2>
        <a href="{{ route('scaffolding') }}" class="op-card__link">Подробнее →</a>
    </div>
    <div class="op-main__card">
        <a href="{{ route('towers_tour') }}">
            <picture>
                <source type="image/webp" srcset="{{ asset('frontend/img/main/kazan-moll.webp') }}">
                <img src="{{ asset('frontend/img/main/kazan-moll.jpg') }}" width="670" height="350" alt="аренда вышки-туры казань">
            </picture>
        </a>
        <h2 class="op-card__title">Вышки-туры строительные</h2>
        <a href="{{ route('towers_tour') }}" class="op-card__link">Подробнее →</a>
    </div>
</div>
