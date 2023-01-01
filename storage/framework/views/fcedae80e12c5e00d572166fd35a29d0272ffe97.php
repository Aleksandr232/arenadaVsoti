<footer class="my-footer">
    <div class="mf-container my-container">
        <div class="mf-nav">
            <h3>Меню</h3>
            <ul class="mf-nav__menu">
                <?php echo $__env->make('site.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </div>
        <div class="mf-appeal">
            <h3>Позвоните нам, и мы ответим на все вопросы</h3>
            <div class="mf-appeal__phone">
                <a href="tel:+79600625525">8 960 062-55-25</a>
            </div>
        </div>
        <div class="mf-address">
            <h3>Контакты</h3>
            <address>
                <img src="<?php echo e(asset('frontend/img/icons/location.svg')); ?>" width="16" height="16" alt="">
                РТ, г. Казань, ул. Мирхайдара Файзи, 68
            </address>
            <div class="mf-social__networks">
                <a href="https://wa.me/+79600625525" title="Напишите нам в Whatsapp" target="_blank">
                    <img src="<?php echo e(asset('frontend/img/icons/whatsapp.svg')); ?>" width="23" height="23" alt="">
                </a>
                <a href="https://www.instagram.com/arenda_visoti" title="Мы в Instagram" target="_blank">
                    <img src="<?php echo e(asset('frontend/img/icons/instagram.svg')); ?>" width="23" height="23" alt="">
                </a>
                <a href="https://vk.com/arenda_visoti" title="Мы ВКонтакте" target="_blank">
                    <img src="<?php echo e(asset('frontend/img/icons/vk.svg')); ?>" width="23" height="23" alt="">
                </a>
                <a href="https://www.facebook.com/arenda.visoti" title="Мы в Facebook" target="_blank">
                    <img src="<?php echo e(asset('frontend/img/icons/facebook.svg')); ?>" width="23" height="23" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="mf-bottom">
        <div class="author">
            <a href="https://vk.com/arturnazimovich" target="_blank">Сайт разработан</a>
        </div>
        <div class="footer-doc">
            <a href="<?php echo e(asset('frontend/doc/privacy.pdf')); ?>" rel="nofollow" target="_blank">Политика конфиденциальности</a>
            <a href="<?php echo e(asset('frontend/doc/terms.pdf')); ?>" rel="nofollow" target="_blank">Пользовательское соглашение</a>
        </div>
    </div>
</footer>
<?php /**PATH /Users/arturzakirov/Documents/MyFiles/MySites/height-rent/resources/views/site/inc/footer.blade.php ENDPATH**/ ?>