<?php $__env->startSection('title', 'Леса строительные в аренду в Казани «Аренда высоты»'); ?>
<?php $__env->startSection('description', 'Предлагаем в аренду строительные леса рамные ЛСПР-200 с доставкой по Казани по самым выгодным ценам «Аренда высоты»'); ?>
<?php $__env->startSection('keywords', 'леса строительные, аренда строительных лесов, строительные леса +в казани, строительные леса +в аренду казань, леса строительные авито, аренда строительных лесов цена'); ?>

<?php $__env->startSection('header_title'); ?>
    <div class="header-content my-container">
        <h1>Рамные строительные леса ЛСПР-200 <span>в Казани</span></h1>
        <p>Предлагаем в аренду строительные леса рамные ЛСПР-200, предназначенные для работ на высоте до 40 метров. ЛСПР-200 – это прочные и универсальные конструкции, которые используются при внутренней или внешней отделке зданий от малых до крупных объектов</p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="scaffolding">
        <div class="scaffolding my-container">
            <div class="scaffolding-image">
                <picture>
                    <source type="image/webp" srcset="<?php echo e(asset('frontend/img/stroitelnye-lesa/stroitelnye-lesa-1.webp')); ?>">
                    <img src="<?php echo e(asset('frontend/img/stroitelnye-lesa/stroitelnye-lesa-1.jpg')); ?>" width="670" height="350" alt="">
                </picture>
            </div>
            <div class="scaffolding-content">
                <h2>Леса строительные <span>ЛСПР-200</span></h2>
                <h3>Предназначены для отделки стен и потолков внутри зданий, а также для отделочных и ремонтных работ на фасадах зданий. Имеют простую конструкцию на флажковых замках и при сборке не требуют специальных инструментов. Считаются легкими и надежными так как используется труба диаметром 42мм, а двойное ограждение гарантирует безопасность при строительных работах</h3>
                <p>Технические характеристики</p>
                <ol>
                    <li>Максимальная высота лесов: 40 м</li>
                    <li>Шаг яруса по высоте: 2 м</li>
                    <li>Шаг стоек вдоль стены: 3 м</li>
                    <li>Ширина яруса (прохода) между стойками: 0,95 м</li>
                    <li>Нормативная нагрузка: 200 кг/м2</li>
                </ol>
                <div class="sc-link">
                    <a href="<?php echo e(asset('frontend/doc/lspr-200.pdf')); ?>" target="_blank">Технический паспорт →</a>
                </div>
            </div>
        </div>
    </section>
    <section id="scaffolding-price">
        <div class="scaffolding-price my-container">
            <h2 class="sp-title">Стоимость аренды ЛСПР-200</h2>
            <div class="download-price">
                <a href="<?php echo e(asset('frontend/doc/price.xlsx')); ?>" target="_blank">Скачать прайс →</a>
            </div>
            <div class="sp-image">
                <picture>
                    <source type="image/webp" srcset="<?php echo e(asset('frontend/img/stroitelnye-lesa/scaffolding-price.webp')); ?>">
                    <img src="<?php echo e(asset('frontend/img/stroitelnye-lesa/scaffolding-price.jpg')); ?>" width="720" height="1280" alt="">
                </picture>
            </div>
            <div class="sp-call-to-action">
                <h2>Арендуйте строительные леса без переплат</h2>
                <button class="ptt-card__btn ptt-card__btn__one sp-cta__btn btn" data-btn="Заявка на аренду строительных лесов">Арендовать</button>
                <a target="_blank" href="https://calcarenda.vercel.app/"><button class="btn_calc" >Рассчитать</button></a>
            </div>
        </div>
    </section>
    <!-- include our-products start -->
    <section id="scaffolding__recommendations">
        <div class="our-services__title my-container">
            <h2>Возможно вас заинтересует</h2>
        </div>
        <div class="scaffolding__recommendations my-container">
            <div class="op-main">
                <div class="op-main__card">
                    <a href="<?php echo e(route('gallery_scaffolding')); ?>">
                        <picture>
                            <source type="image/webp" srcset="<?php echo e(asset('frontend/img/stroitelnye-lesa/stroitelnye-lesa-2.webp')); ?>">
                            <img src="<?php echo e(asset('frontend/img/stroitelnye-lesa/stroitelnye-lesa-2.jpg')); ?>" width="670" height="350" alt="">
                        </picture>
                    </a>
                    <h2 class="op-card__title">Галерея наших лесов</h2>
                    <a href="<?php echo e(route('gallery_scaffolding')); ?>" class="op-card__link">Подробнее →</a>
                </div>
                <div class="op-main__card">
                    <a href="<?php echo e(route('towers_tour')); ?>">
                        <picture>
                            <source type="image/webp" srcset="<?php echo e(asset('frontend/img/stroitelnye-lesa/stroitelnye-lesa-3.webp')); ?>">
                            <img src="<?php echo e(asset('frontend/img/stroitelnye-lesa/stroitelnye-lesa-3.jpg')); ?>" width="670" height="350" alt="">
                        </picture>
                    </a>
                    <h2 class="op-card__title">Вышки-туры строительные</h2>
                    <a href="<?php echo e(route('towers_tour')); ?>" class="op-card__link">Подробнее →</a>
                </div>
            </div>
            <?php echo $__env->make('site.inc.products_additional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <!-- include our-products end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/user76834/data/www/xn--80aagge2ckkol0hd.xn--p1ai/resources/views/site/pages/scaffolding.blade.php ENDPATH**/ ?>