<?php

/* https://api.telegram.org/bot1063177242:AAG0iY1FMblnPi7pOn0AX9edSLrcfJ_XQxw/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$select = trim(strip_tags($_POST['f']['selector']));
$name = trim(strip_tags($_POST['f']['name']));
$email = trim(strip_tags($_POST['f']['e-mail']));
$message = trim(strip_tags($_POST['f']['message']));
$messenger = trim(strip_tags($_POST['f']['quiz_messanger']))? 'Да' : 'Нет';
$utm_campaign = trim(strip_tags($_POST['f']['utmCampaign']))?: 'Не указана';
$utm_siteid   = trim(strip_tags($_POST['f']['utmSiteid'])) ?: 'Не указана';
$url						= "http://" . $_SERVER["HTTP_HOST"] . "" . $_SERVER["REQUEST_URI"] . "";
$token = "1063177242:AAG0iY1FMblnPi7pOn0AX9edSLrcfJ_XQxw";
$chat_id = "-404370598";
$arr = array(
  'Лид пришел с сайта: ' => $url,
  'Имя пользователя: ' => $name,
  'E-mail: ' => $email,
  'Сообщение:' => $message ,
  'Написать в мессенджер: ' => $messenger,
  'UTM Campaign: '  => $utm_campaign,
  'UTM Siteid: '    => $utm_siteid
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  fclose($sendToTelegram);
  header('Location: success.html');
} else
{
header('Location: error.html');
}
?>
