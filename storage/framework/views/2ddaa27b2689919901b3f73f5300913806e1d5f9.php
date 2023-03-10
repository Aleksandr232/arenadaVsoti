<?php $__env->startSection('title', 'Вышки-туры строительные в аренду в Казани «Аренда высоты»'); ?>
<?php $__env->startSection('description', 'Предлагаем в аренду передвижные строительные вышки-туры с доставкой по Казани по самым выгодным ценам «Аренда высоты»'); ?>
<?php $__env->startSection('keywords', 'вышка тура авито, вышка тура, вышка тура казань, вышка тура строительная, вышка тура аренда, вышка тура 2 2, вышка тура передвижная, вышка тура +на колесах, вышка тура аренда казань'); ?>

<?php $__env->startSection('header_title'); ?>
    <div class="header-content my-container">
        <h1>Статьи о продукции <span>Аренды высоты</span></h1>
        <p>Предлагаем в аренду рамные строительные леса, строительные вышки-туры, раздвижные лестницы. Дополнительно оказываем услуги на минитракторе МКСМ, а также услуги строительного альпинизма по очистке снега с крыш. Осуществляем доставку оборудования нашим автотранспортом по Казани и Республике Татарстан</p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="posts">
        <div class="posts">
            <?php
                $counter = 1;
            ?>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($counter % 2 == 0): ?>
                    <div class="odd">
                        <div class="posts-card my-container">
                            <div class="pc-image pc-image__revers">
                                <img src="<?php echo e('uploads/' . $post->img); ?>" alt="">
                            </div>
                            <div class="pc-content pc-content__revers">
                                <h2><?php echo e($post->title); ?></h2>
                                <div><?php echo $post->content; ?></div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="even">
                        <div class="posts-card my-container">
                            <div class="pc-image">
                                <img src="<?php echo e('uploads/' . $post->img); ?>" alt="">
                            </div>
                            <div class="pc-content">
                                <h2><?php echo e($post->title); ?></h2>
                                <div><?php echo $post->content; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                    $counter++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="pc-pagination">
            <div class="my-container" style="margin-top: 36px;"><?php echo e($posts->links()); ?></div>
        </div>
    </section>
    <!-- include our-products start -->
    <section id="towers-tour__recommendations">
        <div class="our-services__title my-container">
            <h2>Возможно вас заинтересует</h2>
        </div>
        <div class="tt-recommendations my-container">
            <div class="op-main">
                <div class="op-main__card">
                    <a href="<?php echo e(route('gallery')); ?>">
                        <picture>
                            <source type="image/webp" srcset="<?php echo e(asset('frontend/img/tour-towers/recommendations-1.webp')); ?>">
                            <img src="<?php echo e(asset('frontend/img/tour-towers/recommendations-1.jpg')); ?>" width="670" height="350" alt="">
                        </picture>
                    </a>
                    <h2 class="op-card__title">Галерея наших вышек-тур</h2>
                    <a href="<?php echo e(route('gallery')); ?>" class="op-card__link">Подробнее →</a>
                </div>
                <div class="op-main__card">
                    <a href="<?php echo e(route('scaffolding')); ?>">
                        <picture>
                            <source type="image/webp" srcset="<?php echo e(asset('frontend/img/tour-towers/recommendations-2.webp')); ?>">
                            <img src="<?php echo e(asset('frontend/img/tour-towers/recommendations-2.jpg')); ?>" width="670" height="350" alt="">
                        </picture>
                    </a>
                    <h2 class="op-card__title">Рамные строительные леса</h2>
                    <a href="<?php echo e(route('scaffolding')); ?>" class="op-card__link">Подробнее →</a>
                </div>
            </div>
            <?php echo $__env->make('site.inc.products_additional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <!-- include our-products end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/height-rent/resources/views/site/pages/posts.blade.php ENDPATH**/ ?>