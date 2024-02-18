<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Безымянная страница</title>
<meta name="generator" content="WYSIWYG Web Builder 17 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="css/rozena.css?v=27" rel="stylesheet">
<link href="css/new.css?v=27" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-205285035-1"></script>
<script>   
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
   
     gtag('config', 'UA-205285035-1');
</script>



</head>
<body>
   <div id="container">
      <a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;margin:0;border-width:0;z-index:250" width="16" height="16"></a>
      <script>      
      var wb_Timer1;
      function TimerStartTimer1()
      {
         wb_Timer1 = setTimeout(function()
         {
            var event = null;
            window.location.href='./../index.php';
         }, 3000);
      }
      function TimerStopTimer1()
      {
         clearTimeout(wb_Timer1);
      }
      TimerStartTimer1();
      </script>
   </div>
   <div id="wb_LayoutGrid2">
      <div id="LayoutGrid2">
         <div class="col-1">
            <div class="col-1-padding">
               <div id="wb_Text16">
                  <span style="color:#000000;font-family:'Roboto Medium';font-size:20px;">Дякуємо за замовлення!<br></span><span style="color:#000000;font-family:Roboto;font-size:17px;"><strong><br></strong></span><span style="color:#000000;font-family:Roboto;font-size:16px;"><a href="./../index.php">Перейти на сайт rozena.com.ua</a></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html><?php
// Путь к файлу с информацией об отправленных уведомлениях
$notificationLog = 'notification_log.txt';
// Получение данных от LiqPay
$data = $_POST['data'];
$signature = $_POST['signature'];
// Проверка подлинности данных
$private_key = 'KbmftVhRJyRMMYY6pKMkkt25rY7wH4R7YoC4wxEq';
$mySignature = base64_encode(sha1($private_key . $data . $private_key, true));
if ($signature !== $mySignature) {
    die("Недействительная подпись");
}
// Расшифровка данных JSON
$order_data = json_decode(base64_decode($data), true);
// Извлечение данных о заказе
$order_id = $order_data['order_id'];
$amount = $order_data['amount'];
$description = $order_data['description'];
// Проверяем, было ли уведомление об этом заказе уже отправлено
if (is_notification_sent($notificationLog, $order_id)) {
    // Уведомление уже отправлено, завершаем выполнение скрипта
    exit();
}
// Отправка уведомления на электронную почту
$to = "2022rozena@gmail.com";
$subject = "Rozena. Успішна оплата замовлення на суму $amount UAH";
$message = "Замовлення #$order_id було оплачено .\nАдрес доставки: $description";
$headers = "From: rozena@ukr.net";
mail($to, $subject, $message, $headers);
// Записываем информацию об отправленном уведомлении
log_notification_sent($notificationLog, $order_id);
?>
<?php
// Функция для проверки, было ли уведомление об этом заказе уже отправлено
function is_notification_sent($logFile, $order_id) {
    if (file_exists($logFile)) {
        $logData = file_get_contents($logFile);
        $notifications = explode("\n", $logData);
        return in_array($order_id, $notifications);
    }
    return false;
}
// Функция для записи информации об отправленном уведомлении
function log_notification_sent($logFile, $order_id) {
    file_put_contents($logFile, $order_id . "\n", FILE_APPEND);
}
?>