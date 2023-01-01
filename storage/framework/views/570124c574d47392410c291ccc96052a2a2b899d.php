<?php $__env->startSection('title', 'Строительное оборудование в аренду в Казани «Аренда высоты»'); ?>
<?php $__env->startSection('description', 'Предлагаем в аренду строительное оборудование для работ на высоте в Казани с доставкой по Республике Татарстан «Аренда высоты»'); ?>
<?php $__env->startSection('keywords', 'вышка тура строительная передвижная, вышка тура 1 1, вышка тура 12, леса вышка тура, вышка тура балатон, аренда строительных лесов +в казани цена, леса строительные рамные, прокат лесов строительных'); ?>

<?php $__env->startSection('header_title'); ?>
    <div class="header-content my-container">
        <h1>Аренда оборудования для работ <span>на высоте</span></h1>
        <p>Предлагаем в аренду строительные вышки-туры, рамные строительные леса, раздвижные лестницы. Дополнительно оказываем услуги на минитракторе МКСМ, а также услуги строительного альпинизма по очистке снега с крыш. Осуществляем доставку оборудования нашим автотранспортом по Казани и Республике Татарстан</p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="contacts">
        <div class="contacts my-container">
            <div class="contacts-image">
                <picture>
                    <source type="image/webp" srcset="<?php echo e(asset('frontend/img/about-us.webp')); ?>">
                    <img src="<?php echo e(asset('frontend/img/about-us.jpg')); ?>" width="670" height="350" alt="">
                </picture>
            </div>
            <div class="contacts-card">
                <div class="cc-content">
                    <h3>Наши контакты</h3>
                    <div class="cc-content__address">
                        <h4>Адрес:</h4>
                        <address>
                            <img src="<?php echo e(asset('frontend/img/icons/location.svg')); ?>" width="18" height="18" alt="">
                            Россия, Республика Татарстан, г. Казань, ул. Мирхайдара Файзи, 68
                        </address>
                    </div>
                    <div class="cc-content__phone">
                        <h4>Телефон:</h4>
                        <div class="cc-content__phone__container">
                            <img src="<?php echo e(asset('frontend/img/icons/telephone.svg')); ?>" width="18" height="18" alt="">
                            <a href="tel:+79600625525">+7 960 062-55-25</a>
                        </div>
                    </div>
                    <div class="cc-content__messengers">
                        <h4>Мессенджеры:</h4>
                        <div class="cc-content__social__networks">
                            <a href="https://wa.me/+79600625525" title="Напишите нам в Whatsapp" target="_blank">
                                <img src="<?php echo e(asset('frontend/img/icons/whatsapp.svg')); ?>" width="24" height="24" alt="">
                            </a>
                            <a href="#" title="Мы в Инстаграм" target="_blank">
                                <img src="<?php echo e(asset('frontend/img/icons/instagram.svg')); ?>" width="24" height="24" alt="">
                            </a>
                            <a href="https://vk.com/arenda_visoti" title="Мы ВКонтакте" target="_blank">
                                <img src="<?php echo e(asset('frontend/img/icons/vk.svg')); ?>" width="24" height="24" alt="">
                            </a>
                            <a href="https://www.facebook.com/arenda.visoti" title="Мы в Facebook" target="_blank">
                                <img src="<?php echo e(asset('frontend/img/icons/facebook.svg')); ?>" width="24" height="24" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="cc-content__legal__address">
                        <p>ИП Зиновьев Михаил Сергеевич</p>
                        <p>ОГРНИП 318169000079419</p>
                        <p>ИНН 166019181137</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- include our-products start -->
    <section id="our-services">
        <div class="our-services__title my-container">
            <h2>Арендуйте у нас</h2>
        </div>
        <div class="our-services my-container">
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
            <?php echo $__env->make('site.inc.products_additional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <!-- include our-products end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/arturzakirov/Documents/MyFiles/mySites/test/resources/views/site/pages/contacts.blade.php ENDPATH**/ ?>