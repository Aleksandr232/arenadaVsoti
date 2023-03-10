<?php $__env->startSection('title', 'Аренда оборудования для работ на высоте в Казани «Аренда высоты»'); ?>
<?php $__env->startSection('description', 'Предлагаем в аренду строительные леса, вышки-туры, раздвижные лестницы, минитрактор в аренду, грузоперевозки, очистка снега с крыш «Аренда высоты»'); ?>
<?php $__env->startSection('keywords', 'грузоперевозки, грузоперевозки казань, грузоперевозки газель, авито грузоперевозки, грузоперевозки +по городу, дешевые грузоперевозки, газель грузоперевозки +по городу'); ?>

<?php $__env->startSection('header_title'); ?>
    <div class="header-content my-container">
        <h1>Аренда строительного оборудования <span>в Казани</span></h1>
        <p>Предлагаем в аренду рамные строительные леса, строительные вышки-туры, раздвижные лестницы. Дополнительно оказываем услуги на минитракторе МКСМ, а также услуги строительного альпинизма по очистке снега с крыш. Осуществляем доставку оборудования нашим автотранспортом по Казани и Республике Татарстан</p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="our-products">
        <div class="our-products my-container">
            <?php echo $__env->make('site.inc.main_products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('site.inc.products_additional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <section id="call-to__action">
        <div class="call-to__action my-container">
            <div class="cta-form">
                <div class="cta-form__content">
                    <h3>Свяжитесь с нами</h3>
                    <p>Мы предложим самые выгодные цены на сегодняшний день</p>
                    <div class="cta-form__phone">
                        <a href="tel:+79600625525">8 960 062-55-25</a>
                        <a href="https://wa.me/+79600625525" title="Напишите нам в Whatsapp" target="_blank">
                            <img src="<?php echo e(asset('frontend/img/icons/whatsapp.svg')); ?>" width="20" height="20" alt="">
                        </a>
                    </div>
                    <button class="cta-form__btn btn" data-btn="Заявка на обратный звонок">Заказать звонок</button>
                </div>
            </div>
            <div class="cta-advantage">
                <div class="advantage-insert__rectangle"></div>
                <div class="cta-advantage__card advantage-card__one">
                    <div class="advantage-card__insert__square"></div>
                    <div class="cta-advantage__card__content">
                        <div class="advantage-card__content__title">
                            <img src="<?php echo e(asset('frontend/img/icons/percent.svg')); ?>" width="40" height="40" alt="">
                            <h3>Скидки</h3>
                        </div>
                        <p>Программа лояльности<br> для клиентов</p>
                    </div>
                </div>
                <div class="cta-advantage__card advantage-card__two">
                    <div class="advantage-card__insert__square"></div>
                    <div class="cta-advantage__card__content">
                        <div class="advantage-card__content__title">
                            <img src="<?php echo e(asset('frontend/img/icons/help.svg')); ?>" width="40" height="40" alt="">
                            <h3>Помощь</h3>
                        </div>
                        <p>Консультации,<br> поддержка</p>
                    </div>
                </div>
                <div class="cta-advantage__card advantage-card__three">
                    <div class="cta-advantage__card__content">
                        <div class="advantage-card__content__title">
                            <img src="<?php echo e(asset('frontend/img/icons/delivery.svg')); ?>" width="40" height="40" alt="">
                            <h3>Доставка</h3>
                        </div>
                        <p>Оперативная доставка<br> 2-12 часов</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="about-us my-container">
            <div class="au-photo">
                <picture>
                    <source type="image/webp" srcset="<?php echo e(asset('frontend/img/about-us.webp')); ?>">
                    <img src="<?php echo e(asset('frontend/img/about-us.jpg')); ?>" width="644" height="300" alt="">
                </picture>
            </div>
            <div class="au-content">
                <h3>О нас</h3>
                <p>Аренда высоты - компания с 5-летней историей непрерывного развития, от небольшого гаража до склада в 300 кв. м. с собственным автопарком. Мы продолжаем совершенствоваться, чтобы вы смогли снизить свои затраты и получить ощутимые преимущества от сотрудничества с нами. Мы предоставляем оборудование не только для нужд малоэтажного строительства, но с нами также строят крупные объекты, где объемы строительных лесов доходят до тысячи кв. м. Арендовать оборудование быстро и недорого возможно, благодаря нашей стратегии, профессиональной команде сотрудников и многолетнему опыту работы</p>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/user76834/data/www/xn--80aagge2ckkol0hd.xn--p1ai/resources/views/site/home/index.blade.php ENDPATH**/ ?>