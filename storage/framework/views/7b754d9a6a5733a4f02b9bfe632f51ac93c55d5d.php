<?php $__env->startSection('title', '404 Страница не найдена'); ?>

<?php $__env->startSection('content'); ?>
    <div class="not-found my-container">
        <img src="<?php echo e(asset('frontend/img/404/not-found.svg')); ?>" width="700" alt="">
        <h2>Такой страницы нет на нашем сайте</h2>
        <a href="<?php echo e(url('/')); ?>">← Вернутся на главную</a>
    </div>
    <!-- include our-products start -->
    <section id="gallery-recommendations">
        <div class="our-services__title my-container">
            <h2>Возможно вас заинтересует</h2>
        </div>
        <div class="gallery-recommendations my-container">
            <?php echo $__env->make('site.inc.main_products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('site.inc.products_additional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <!-- include our-products end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/av/resources/views/errors/404.blade.php ENDPATH**/ ?>