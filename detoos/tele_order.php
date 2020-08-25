<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$order = $_POST['order'];
$date = $_POST['date'];
$ppl = $_POST['ppl'];
$msg = $_POST['msg'];
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];
$utm_term = $_POST['utm_term'];


$token ="978008395:AAGyiumee5gpevVXS6-XtVwEIXM5inkc3Ac";
$chat_id ="-388817479";
$arr = array(
	'Имя: ' => $name,
	'Телефон: ' => $phone,
	'Дата: ' => $date,
	'Количество людей: ' => $ppl,
	'Сообщение: ' => $msg,
	'Цель: ' => $order,
	'utm_source: ' => $utm_source,
	'utm_medium: ' => $utm_medium,
	'utm_campaign: ' => $utm_campaign,
	'utm_content: ' => $utm_content,
	'utm_term: ' => $utm_term,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>

