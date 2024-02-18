<?php
include('./monobank.class.php');
include('./webhook.php');

$private_key = 'uDxOeD43kdwBoSeh0lFPe5eja46EUg9FNrWutqccuCDg';
$public_key = 'i10607828496';

// Получаем данные из POST
$data = $_POST['data'];

// Раскодируем данные из формата base64
$decoded_data = base64_decode($data);

// Преобразуем JSON строку в массив
$dataArray = json_decode($decoded_data, true);

// Выводим массив для проверки
var_dump($dataArray);
// Check if the keys exist in the $_POST array before accessing them
$amount = isset($dataArray['amount']) ? $dataArray['amount'] : '';
$reference = isset($dataArray['description']) ? $dataArray['description'] : '';
$order_id = mt_rand(1000000, 9999999);
// $data = base64_encode($json_string);
// echo $data;
// $signature = base64_encode(sha1($private_key . $data . $private_key, true));
$redirectUrl = "http://rozena2:81/dyakuyemo.php";
$webhookUrl = "http://rozena2:81/oplata.php";

$monobank = new mMono($private_key);
$monobank->monoRequest($order_id, $amount, $reference, $redirectUrl, $webhookUrl);
