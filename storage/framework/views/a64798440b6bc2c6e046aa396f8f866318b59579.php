<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('frontend/img/favicon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('frontend/img/favicon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('frontend/img/favicon/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('frontend/img/favicon/site.webmanifest')); ?>">
    <link rel="mask-icon" href="<?php echo e(asset('frontend/img/favicon/safari-pinned-tab.svg')); ?>" color="#4c9017">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon end -->
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/critical.css')); ?>">
    <script defer src="<?php echo e(asset('frontend/js/script.js')); ?>"></script>
</head>
<body>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer class="my-footer">
    <div class="mf-container my-container">
        <div class="mf-nav">
            <h3>Меню</h3>
            <ul class="mf-nav__menu">
                <li><a href="/">Главная</a></li>
                <li><a href="/vyshka-tura.html">Вышки-туры</a></li>
                <li><a href="/stroitelnye-lesa.html">Строительные леса</a></li>
                <li><a href="/gallery.html">Галерея</a></li>
                <li><a href="/contacts.html">Контакты</a></li>
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
            <a href="<?php echo e(asset('frontend/doc/privacy.pdf')); ?>" target="_blank">Политика конфиденциальности</a>
            <a href="<?php echo e(asset('frontend/doc/terms.pdf')); ?>" target="_blank">Пользовательское соглашение</a>
        </div>
    </div>
</footer>

<!-- Modal window -->
<div class="modal-window">
    <div class="modal">
        <form action="#" method="post" autocomplete="on">
            <h4 class="modal-title">Оставьте заявку, и мы свяжемся с вами в ближайшее время</h4>
            <label>
                <input type="hidden" name="hidden">
            </label>
            <label>
                <input type="text" name="name" class="input-name__field" placeholder="Введите свое имя" required>
            </label>
            <label>
                <input type="tel" name="tel" class="input-name__phone mask-phone" id="tel" placeholder="Введите номер телефона" required>
            </label>
            <div class="checkbox-wrap">
                <label class="checkbox">
                    <input type="checkbox" name="checkbox" value="1" checked required>
                    <span class="their-checkbox"></span>
                </label>
                <div class="checkbox-content">
                    <p>Нажимая на кнопку «Оставить заявку», вы даёте согласие на <a href="<?php echo e(asset('frontend/doc/privacy.pdf')); ?>" class="modal-doc" target="_blank">обработку своих персональных данных</a></p>
                </div>
            </div>
            <input type="submit" name="submit" value="Оставить заявку" class="modal-btn">
            <!-- Крестик закрыть модальное окно начало -->
            <svg class="close-modal" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                <g>
                    <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                        c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                        C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                        s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                </g>
            </svg>
            <!-- Крестик закрыть модальное окно конец -->
        </form>
    </div>
    <div class="modal-bg"></div>
</div>
<!-- Modal window end -->

<script>
    function loadStyle(url) {
        let link = document.createElement('link');
        link.href = url;
        link.rel = 'stylesheet';
        document.body.appendChild(link);
    }

    loadStyle("<?php echo e(asset('frontend/css/style.css')); ?>");
    loadStyle('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Oswald:wght@500;700&display=swap');
</script>
</body>
</html>
<?php /**PATH D:\OpenServer\domains\height-rent.loc\resources\views/user/layouts/home.blade.php ENDPATH**/ ?>