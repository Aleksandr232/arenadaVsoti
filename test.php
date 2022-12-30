<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$hidden = $_POST['hidden'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$token = '1772983989:AAGMx9Eb3r0I2pLADTPNPrmjodCu7bQE6yg';
$chat_id = '-574010148';

if (strlen($name) > 65 || strlen($tel) > 17 || $name == '' || $tel == '') {
    header('Location: error.php');
} else {
    $arr = [
        'Заявка с сайта' => 'i-narcolog.ru | Нарколог на дом в Ижевске',
        'Имя клиента' => $name,
        'Телефон клиента' => $tel,
        'Заявка от кнопки' => $hidden,
    ];

    foreach ($arr as $k => $v) {
        $txt .= "<b> {$k} </b> {$v} %0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", 'r');

    if ($sendToTelegram) {
        header('location: thanks.php');
        exit();
    } else {
        header('Location: error.php');
        exit();
    }
}
