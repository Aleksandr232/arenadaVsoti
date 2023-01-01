<div class="op-main">
    <div class="op-main__card">
        <a href="<?php echo e(route('scaffolding')); ?>">
            <picture>
                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/scaffolding.webp')); ?>">
                <img src="<?php echo e(asset('frontend/img/main/scaffolding.jpg')); ?>" width="670" height="350" alt="">
            </picture>
        </a>
        <h2 class="op-card__title">Рамные строительные леса</h2>
        <a href="<?php echo e(route('scaffolding')); ?>" class="op-card__link">Подробнее →</a>
    </div>
    <div class="op-main__card">
        <a href="<?php echo e(route('towers_tour')); ?>">
            <picture>
                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/tower.webp')); ?>">
                <img src="<?php echo e(asset('frontend/img/main/tower.jpg')); ?>" width="670" height="350" alt="">
            </picture>
        </a>
        <h2 class="op-card__title">Вышки-туры строительные</h2>
        <a href="<?php echo e(route('towers_tour')); ?>" class="op-card__link">Подробнее →</a>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/height-rent/resources/views/site/inc/main_products.blade.php ENDPATH**/ ?>