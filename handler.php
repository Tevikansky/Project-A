<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "5709879417:AAFbOxK7cNo-CYa-SLv2at-NdR50nmv2TGU";
$chat_id ="-644053511";

$formData = array(
"Клиент: " => $user_name,
"Телефон: " => $user_phone

);

foreach($formData as $key => $value) {
  $text .= $key . "<b>"  . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
echo "Succes";
} else {
  echo "Error";
}
