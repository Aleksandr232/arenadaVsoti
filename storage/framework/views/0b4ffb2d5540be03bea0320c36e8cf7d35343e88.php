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

    <meta name="google-site-verification" content="djU7QCogw_T42v_Jr6ZxuoWq_Fy-giRQiiuxm4hkneE" />
    <meta name="yandex-verification" content="1096a1a99c1e0da8" />

    <!— Yandex.Metrika counter —>
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(86909024, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/86909024" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!— /Yandex.Metrika counter —>
</head>
<body>
<header>
    <?php echo $__env->make('site.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>

<?php echo $__env->yieldContent('header_title'); ?>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<?php echo $__env->make('site.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('site.inc.modal_window', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php /**PATH /var/www/user76834/data/www/xn--80aagge2ckkol0hd.xn--p1ai/resources/views/site/layouts/main.blade.php ENDPATH**/ ?>