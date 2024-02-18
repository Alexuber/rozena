
<script>
// Проверяем, была ли страница уже загружена и был ли переход из адресной строки
if ((performance.navigation.type === 1 && !window.location.hash) || window.location.hash) {
  // Если страница была загружена из адресной строки или есть закладка в URL, перенаправляем на главную страницу сайта
  window.location.replace("https://rozena.com.ua/m/index.php");
} else if (document.referrer.indexOf("https://rozena.com.ua/m/zamovlennya.php") !== 0) {
  // Если переход не был с страницы https://rozena.com.ua/m/zamovlennya.php, перенаправляем на главную страницу сайта
  window.location.replace("https://rozena.com.ua/m/index.php");
} else {
  // Если это первая загрузка страницы или переход был с https://rozena.com.ua/zamovlennya.php, выполняем перезапись URL без сохранения состояния формы
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
}

</script>

<?php

{
					
	$private_key = 'KbmftVhRJyRMMYY6pKMkkt25rY7wH4R7YoC4wxEq';
	$public_key  = 'i10607828496';
	$json_string = '{"public_key":"i10607828496","version":"3","action":"pay","amount":"' . rtrim (str_replace("UAH"," ",$_POST['Сума'])) . '","currency":"UAH","description":"' . $_POST['Адреса'] . '","order_id":"' . strftime("%y%m%d%H%M%S") . '"}';
	$data = base64_encode($json_string); 
	$signature = base64_encode(sha1($private_key . $data . $private_key, true));
	 
}
function ValidateEmail($email)

{

   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';

   return preg_match($pattern, $email);

}

function ReplaceVariables($code)

{

   foreach ($_POST as $key => $value)

   {

      if (is_array($value))

      {

         $value = implode(",", $value);

      }

      $name = "$" . $key;

      $code = str_replace($name, $value, $code);

   }

   $code = str_replace('$ipaddress', $_SERVER['REMOTE_ADDR'], $code);

   return $code;

}

if ($_SERVER['REQUEST_METHOD'] == 'POST')  /* && isset($_POST['formid']) && $_POST['formid'] == 'layoutgrid8') */

{  

   $mailto = '2022rozena@gmail.com';

   $mailfrom = 'rozena@ukr.net';

   $subject = 'Rozena. Замовлення з мобільного';

   $message = '';

   $success_url = '.';

   $error_url = '';

   $eol = "\n";

   $error = '';

   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha_code", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response");

   $boundary = md5(uniqid(time()));

   $header  = 'From: '.$mailfrom.$eol;

   $header .= 'Reply-To: '.$mailfrom.$eol;

   $header .= 'MIME-Version: 1.0'.$eol;

   $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;

   $header .= 'X-Mailer: PHP v'.phpversion().$eol;

   try

   {

      if (!ValidateEmail($mailfrom))

      {

         $error .= "The specified email address (" . $mailfrom . ") is invalid!\n<br>";

         throw new Exception($error);

      }

      $message .= $eol;

      foreach ($_POST as $key => $value)

      {

         if (!in_array(strtolower($key), $internalfields))

         {

            if (is_array($value))

            {

               $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;

            }

            else

            {

               $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;

            }

         }

      }

      $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;

      $body .= '--'.$boundary.$eol;

      $body .= 'Content-Type: text/plain; charset=UTF-8'.$eol;

      $body .= 'Content-Transfer-Encoding: 8bit'.$eol;

      $body .= $eol.stripslashes($message).$eol;

      if (!empty($_FILES))

      {

         foreach ($_FILES as $key => $value)

         {

             if ($_FILES[$key]['error'] == 0)

             {

                $body .= '--'.$boundary.$eol;

                $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;

                $body .= 'Content-Transfer-Encoding: base64'.$eol;

                $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;

                $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;

             }

         }

      }

      $body .= '--'.$boundary.'--'.$eol;

      if ($mailto != '')

      {

         mail($mailto, $subject, $body, $header);

      }

      $successcode = file_get_contents($success_url);

      $successcode = ReplaceVariables($successcode);

      echo $successcode;

   }

   catch (Exception $e)

   {

      $errorcode = file_get_contents($error_url);

      $replace = "##error##";

      $errorcode = str_replace($replace, $e->getMessage(), $errorcode);

      echo $errorcode;

   }

 /*  exit; */

}
	
 
?> 
<!doctype html>


<html lang="uk">

<head>

<meta charset="utf-8">

<title>Дякуємо за замовлення!</title>

<meta name="robots" content="index, follow">

<meta name="generator" content="WYSIWYG Web Builder 16 - http://www.wysiwygwebbuilder.com">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">

<link href="css/rozena.css?v=92" rel="stylesheet">

<link href="css/dyakuyemo.css?v=92" rel="stylesheet">

<script src="jquery-1.12.4.min.js"></script>

<script src="wwb16.min.js"></script>





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

      <div id="wb_Text5" style="position:absolute;left:10px;top:150px;width:300px;height:109px;z-index:14;">

         <span style="color:#000000;"><strong>Дякуємо за замовлення!<br><br>Сума замовлення:&nbsp; </strong></span><span style="color:#008000;"><strong><?php echo $_POST['Сума']; ?></strong></span>
		 
	<br><span style="color:#000000;"><strong>Призначення:&nbsp; </strong></span><span style="color:#008000;"><strong><?php echo $_POST['Адреса']; ?></strong></span>

	<br><span style="color:#000000;"><strong>Чек номер:&nbsp; </strong></span><span style="color:#008000;"><strong><?php echo strftime("%y%m%d%H%M%S"); ?></strong></span>

    <br><span style="color:#FF0000;">Увага! Наразі замовлення виконуються у разі наявності тари на обмін                                         <br><br><br></span>

      </div>


	  
<form method="POST" action="https://www.liqpay.ua/api/3/checkout/i21869906870" accept-charset="utf-8" onsubmit="return convertdata()">
 
 <input type="hidden" name="data" value="<?php echo $data ?>" />
 <input type="hidden" name="signature" value="<?php echo $signature ?>" />

 <input type="image"  src="/images/oplata.jpg" style="position:absolute;left:20px;top:430px;visibility:visable;z-index:29;"/>
</form>
<!-- 
<input type="button" id="Button2" onclick="return convertdata()" name="" value="Test convert data" style="position:absolute;left:299px;top:421px;width:253px;height:36px;z-index:16;visibility:visable;">	  

      <iframe name="InlineFrame1" id="InlineFrame1" style="position:absolute;left:300px;top:351px;visibility:visable;width:360px;height:778px;z-index:15;" src="https://www.liqpay.ua/api/3/checkout/i21869906870" scrolling="no"></iframe>

<input type="button" id="Button2" onclick="ShowObject('InlineFrame1', 1);ShowObject('Button2', 0);return false;" name="" value="оплатити онлайн" style="position:absolute;left:299px;top:351px;width:153px;height:36px;z-index:16;visibility:hidden;">
-->
   </div>



<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Image2" style="display:inline-block;width:229px;height:60px;z-index:148;">
<a href="./index.php"><img src="images/4502856772%2d2b31%2d4bf6%2da549%2d32c76cc1fd65.png" id="Image2" alt="" width="229" height="61"></a>
</div>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_IconFont11" style="display:inline-block;width:25px;height:23px;text-align:center;z-index:149;">
<a href="#" onclick="ShowObjectWithEffect('wb_menu2', 1, 'slideright', 500, 'easeInOutCubic');return false;"><div id="IconFont11"><i class="fa fa-bars"></i></div></a>
</div>
</div>
</div>
</div>
</div>



</body>

</html>