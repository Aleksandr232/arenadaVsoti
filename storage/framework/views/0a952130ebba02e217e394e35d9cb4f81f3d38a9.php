<?php $__env->startSection('title', 'Аренда оборудования для работ на высоте в Казани «Аренда высоты»'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', ''); ?>

<?php $__env->startSection('content'); ?>
    <header>
        <?php echo $__env->make('user.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="header-content my-container">
            <h1>Аренда строительного оборудования <span>в Казани</span></h1>
            <p>Предлагаем в аренду рамные строительные леса, строительные вышки-туры, раздвижные лестницы. Дополнительно оказываем услуги на минитракторе МКСМ, а также услуги строительного альпинизма по очистке снега с крыш. Осуществляем доставку оборудования нашим автотранспортом по Казани и Республике Татарстан</p>
        </div>
    </header>
    <main>
        <section id="our-products">
            <div class="our-products my-container">
                <div class="op-main">
                    <div class="op-main__card">
                        <a href="/stroitelnye-lesa.html">
                            <picture>
                                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/scaffolding.webp')); ?>">
                                <img src="<?php echo e(asset('frontend/img/main/scaffolding.jpg')); ?>" width="670" height="350" alt="">
                            </picture>
                        </a>
                        <h2 class="op-card__title">Рамные строительные леса</h2>
                        <a href="/stroitelnye-lesa.html" class="op-card__link">Подробнее →</a>
                    </div>
                    <div class="op-main__card">
                        <a href="/vyshka-tura.html">
                            <picture>
                                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/tower.webp')); ?>">
                                <img src="<?php echo e(asset('frontend/img/main/tower.jpg')); ?>" width="670" height="350" alt="">
                            </picture>
                        </a>
                        <h2 class="op-card__title">Вышки-туры строительные</h2>
                        <a href="/vyshka-tura.html" class="op-card__link">Подробнее →</a>
                    </div>
                </div>
                <div class="op-additional">
                    <div class="opa-block_one">
                        <div class="op-additional__card">
                            <picture>
                                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/retractable-ladders.webp')); ?>">
                                <img src="<?php echo e(asset('frontend/img/main/retractable-ladders.jpg')); ?>" width="320" height="350" alt="">
                            </picture>
                            <div class="opa-card__info">
                                <h2>Лестницы раздвижные</h2>
                                <p>Подробнее →</p>
                                <div class="opa-card__info__content">
                                    <div class="opa-cic-text">
                                        <h3>Предоставляем в аренду лестницы 3х-секционные раздвижные</h3>
                                        <h3>Максимальная высота 9 и 12 м., в сложенном состоянии 4 и 4,5 м.</h3>
                                        <h3>Цена: неделя - <span>1500</span> &#8381;, месяц - <span>4500</span> &#8381;</h3>
                                        <h3>Минимальная сумма аренды - <span>1500</span> &#8381;</h3>
                                        <button class="opa-card__info__btn btn" data-btn="Заявка на лестницы раздвижные">Связаться с нами</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="op-additional__card">
                            <picture>
                                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/transport.webp')); ?>">
                                <img src="<?php echo e(asset('frontend/img/main/transport.jpg')); ?>" width="320" height="350" alt="">
                            </picture>
                            <div class="opa-card__info">
                                <h2>Грузоперевозки</h2>
                                <p>Подробнее →</p>
                                <div class="opa-card__info__content">
                                    <div class="opa-cic-text">
                                        <h3>Доставим ваш груз массой до 5 тонн в любую точку РТ и ближайшие регионы</h3>
                                        <h3>Цена по Казани и окрестностям <span>1100</span> &#8381; / час. Минимальный заказ 3 часа</h3>
                                        <h3>Цена на междугородние перевозки <span>30</span>-<span>35</span> &#8381; / км в оба пути, в зависимости от груза, по договорённости</h3>
                                        <h3>Безналичный расчет +10% к стоимости</h3>
                                        <button class="opa-card__info__btn btn" data-btn="Заявка на грузоперевозку">Связаться с нами</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="opa-block_two">
                        <div class="op-additional__card">
                            <picture>
                                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/tractor.webp')); ?>">
                                <img src="<?php echo e(asset('frontend/img/main/tractor.jpg')); ?>" width="320" height="350" alt="">
                            </picture>
                            <div class="opa-card__info">
                                <h2>Минитрактор МКСМ</h2>
                                <p>Подробнее →</p>
                                <div class="opa-card__info__content">
                                    <div class="opa-cic-text">
                                        <h3>Выполним весь спектр работ или сдадим в аренду с почасовой или посуточной оплатой. Доставим на объект собственным транспортом</h3>
                                        <h3>Цена: по факту работ <span>1300</span> &#8381; / чac, минимум 4-х часовая оплата</h3>
                                        <h3>Пpи работе от 8 часов <span>1200</span> &#8381; / чаc</h3>
                                        <h3>Цена на аренду - договорная</h3>
                                        <button class="opa-card__info__btn btn" data-btn="Заявка на минитрактор">Связаться с нами</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="op-additional__card">
                            <picture>
                                <source type="image/webp" srcset="<?php echo e(asset('frontend/img/main/snow-removal.webp')); ?>">
                                <img src="<?php echo e(asset('frontend/img/main/snow-removal.jpg')); ?>" width="320" height="350" alt="">
                            </picture>
                            <div class="opa-card__info">
                                <h2>Очистка снега с крыш</h2>
                                <p>Подробнее →</p>
                                <div class="opa-card__info__content">
                                    <div class="opa-cic-text">
                                        <button class="opa-card__info__btn btn" data-btn="Заявка на очистку снега с крыш">Связаться с нами</button>
                                        <h3>Альпинисты качественно и быстро уберут снег и лед с любых крыш</h3>
                                        <h3>Цена: от <span>40</span>-<span>80</span> &#8381; / кв.м. (в зависимости от сложности крыши, количества снега/льда и объема работы)</h3>
                                        <h3>Минимальный тариф: <span>3000</span> &#8381; (выезд альпиниста в пределах 1,5 часов работы, например сбить шапки, сосульки)</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\height-rent.loc\resources\views/user/home/index.blade.php ENDPATH**/ ?>