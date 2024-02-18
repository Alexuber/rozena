<script>
   // // Проверяем, была ли страница уже загружена и был ли переход из адресной строки
   // if ((performance.navigation.type === 1 && !window.location.hash) || window.location.hash) {
   //   // Если страница была загружена из адресной строки или есть закладка в URL, перенаправляем на главную страницу сайта
   //   window.location.replace("/");
   // } else if (document.referrer.indexOf("https://rozena.com.ua/zamovlennya.php") !== 0) {
   //   // Если переход не был с страницы https://rozena.com.ua/zamovlennya.php, перенаправляем на главную страницу сайта
   //   window.location.replace("/");
   // } else {
   //   // Если это первая загрузка страницы или переход был с https://rozena.com.ua/zamovlennya.php, выполняем перезапись URL без сохранения состояния формы
   //   if (window.history.replaceState) {
   //     window.history.replaceState(null, null, window.location.href);
   //   }
   // }
</script>

<?php {

   $private_key = 'KbmftVhRJyRMMYY6pKMkkt25rY7wH4R7YoC4wxEq';
   $public_key  = 'i10607828496';
   $order_id = mt_rand(1000000, 9999999);
   $amount = isset($_POST['Сума']) ? $_POST['Сума'] : '';
   $reference = isset($_POST['Адреса']) ? $_POST['Адреса'] : '';
   $order_id = mt_rand(1000000, 9999999);
   $json_string = '{"amount":"' . rtrim(str_replace("UAH", " ", $amount) ?? '') . '","ccy":"980","description":"' . $reference . '","order_id":"' . $order_id . '"}';
   $data = base64_encode($json_string);
   // $json_string = '{"public_key":"i10607828496","version":"3","action":"pay","amount":"' . rtrim(str_replace("UAH", " ", $_POST['Сума'])) . '","currency":"UAH","description":"' . $_POST['Адреса'] . '","order_id":"' . mt_rand(1000000, 9999999) . '"}';
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

   foreach ($_POST as $key => $value) {

      if (is_array($value)) {

         $value = implode(",", $value);
      }

      $name = "$" . $key;

      $code = str_replace($name, $value, $code);
   }

   $code = str_replace('$ipaddress', $_SERVER['REMOTE_ADDR'], $code);

   return $code;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')  /* && isset($_POST['formid']) && $_POST['formid'] == 'layoutgrid8') */ {

   $mailto = 'alexuberbuber@gmail.com';

   $mailfrom = 'rozena@ukr.net';

   $subject = 'Rozena. Замовлення з ПК';

   $message = '';

   $success_url = '.';

   $error_url = '';

   $eol = "\n";

   $error = '';

   $internalfields = array("submit", "reset", "send", "filesize", "formid", "captcha_code", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response");

   $boundary = md5(uniqid(time()));

   $header  = 'From: ' . $mailfrom . $eol;

   $header .= 'Reply-To: ' . $mailfrom . $eol;

   $header .= 'MIME-Version: 1.0' . $eol;

   $header .= 'Content-Type: multipart/mixed; boundary="' . $boundary . '"' . $eol;

   $header .= 'X-Mailer: PHP v' . phpversion() . $eol;

   try {

      if (!ValidateEmail($mailfrom)) {

         $error .= "The specified email address (" . $mailfrom . ") is invalid!\n<br>";

         throw new Exception($error);
      }

      $message .= $eol;

      foreach ($_POST as $key => $value) {

         if (!in_array(strtolower($key), $internalfields)) {

            if (is_array($value)) {

               $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
            } else {

               $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
            }
         }
      }

      $body  = 'This is a multi-part message in MIME format.' . $eol . $eol;

      $body .= '--' . $boundary . $eol;

      $body .= 'Content-Type: text/plain; charset=UTF-8' . $eol;

      $body .= 'Content-Transfer-Encoding: 8bit' . $eol;

      $body .= $eol . stripslashes($message) . $eol;

      if (!empty($_FILES)) {

         foreach ($_FILES as $key => $value) {

            if ($_FILES[$key]['error'] == 0) {

               $body .= '--' . $boundary . $eol;

               $body .= 'Content-Type: ' . $_FILES[$key]['type'] . '; name=' . $_FILES[$key]['name'] . $eol;

               $body .= 'Content-Transfer-Encoding: base64' . $eol;

               $body .= 'Content-Disposition: attachment; filename=' . $_FILES[$key]['name'] . $eol;

               $body .= $eol . chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))) . $eol;
            }
         }
      }

      $body .= '--' . $boundary . '--' . $eol;

      if ($mailto != '') {

         mail($mailto, $subject, $body, $header);
      }

      $successcode = file_get_contents($success_url);

      $successcode = ReplaceVariables($successcode);

      echo $successcode;
   } catch (Exception $e) {

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

      function gtag() {
         dataLayer.push(arguments);
      }

      gtag('js', new Date());



      gtag('config', 'UA-205285035-1');
   </script>

   <script type="text/javascript">
      if (screen.width <= 480) {
         window.location = "/m/oplata-m.php";
      }
   </script>


</head>

<body>

   <div id="wb_LayoutGrid6">
      <div id="LayoutGrid6">
         <div class="row">
            <div class="col-1">
               <div id="wb_EmbeddedPage1" style="display:inline-block;width:100%;z-index:9;">
                  <div id="wb_LayoutGrid2" style="min-width:960px;">
                     <div id="LayoutGrid2">
                        <div class="col-1">
                           <div class="col-1-padding">
                              <div id="wb_Image1" style="display:inline-block;width:239px;height:68px;z-index:0;">
                                 <a href="./index.php"><img src="images/logo.jpg" id="Image1" alt="" width="239" height="69"></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="wb_LayoutGrid1">
                              <div id="LayoutGrid1">
                                 <div class="col-1">
                                    <div id="wb_Text2">
                                       <span style="color:#395879;">Доставка води по м. Львів.&nbsp; Телефонуйте: Пн-пт 9:00 - 17:00,&nbsp; сб 9:00 - 16:00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="wb_TextMenu3" style="display:inline-block;width:559px;height:20px;z-index:3;">
                              <span><a href="./index.php" class="active">Головна</a></span><span><a href="./katalog.php" class="menu">Каталог</a></span><span><a href="./punkty_prodazhu.php" class="menu">Акватермінали</a></span><span><a href="./pro-vodu.php" class="menu">Про воду</a></span><span><a href="./vidguky.php" class="menu">Відгуки</a></span><span><a href="./kontakty.php" class="menu">Контакти</a></span>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="col-3-padding">
                              <div id="wb_Text3">
                                 <span style="color:#193652;">+38 067 668 91 75</span>
                              </div>
                              <div id="wb_Shape3" style="display:inline-block;width:159px;height:24px;z-index:5;position:relative;">
                                 <a href="./zamovlennya.php" title="Замовити доставку води">
                                    <div id="Shape3">
                                       <div id="Shape3_text">
                                          <div><span style="color:#FFFFFF;font-family:'Open Sans';font-size:13px;">замовити воду</span></div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div id="container">



      <div id="wb_Text5" style="position:absolute;left:299px;top:160px;width:360px;height:109px;z-index:14;">

         <span style="color:#000000;"><strong>Дякуємо за замовлення!<br><br>Сума замовлення:&nbsp; </strong></span><span style="color:#008000;"><strong><?php echo $_POST['Сума']; ?></strong></span>

         <br><span style="color:#000000;"><strong>Призначення:&nbsp; </strong></span><span style="color:#008000;"><strong><?php echo $_POST['Адреса']; ?></strong></span>

         <br><span style="color:#000000;"><strong>Чек номер:&nbsp; </strong></span><span style="color:#008000;"><strong><?php echo $order_id; ?></strong></span>

         <div id="wb_Text127" style="">
            <span style="color:#FF0000;">Увага! Наразі замовлення виконуються у разі наявності тари на обмін</span>
         </div>

      </div>



      <form method="POST" action="./processPay.php" accept-charset="utf-8" onsubmit="return convertdata()">

         <input type="hidden" name="data" value="<?php echo $data ?>" />
         <input type="hidden" name="signature" value="<?php echo $signature ?>" />

         <input type="image" src="/images/oplata.png" style="position:absolute;left:300px;top:500px;visibility:visable;z-index:29;" />
      </form>
      <!-- 
<input type="button" id="Button2" onclick="return convertdata()" name="" value="Test convert data" style="position:absolute;left:299px;top:421px;width:253px;height:36px;z-index:16;visibility:visable;">	  

      <iframe name="InlineFrame1" id="InlineFrame1" style="position:absolute;left:300px;top:351px;visibility:visable;width:360px;height:778px;z-index:15;" src="https://www.liqpay.ua/api/3/checkout/i21869906870" scrolling="no"></iframe>

<input type="button" id="Button2" onclick="ShowObject('InlineFrame1', 1);ShowObject('Button2', 0);return false;" name="" value="оплатити онлайн" style="position:absolute;left:299px;top:351px;width:153px;height:36px;z-index:16;visibility:hidden;">
-->
   </div>









   <div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:1280px;width:100%;height:141px;z-index:17;">

      <div id="PageFooter1-container" style="width:960px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

         <div id="wb_Image3" style="position:absolute;left:5px;top:0px;width:361px;height:101px;z-index:7;">

            <img src="images/2633%2d.png" id="Image3" alt="">
         </div>

         <div id="wb_TextMenu6" style="position:absolute;left:450px;top:84px;width:270px;height:20px;z-index:8;">

            <span><a href="./katalog.php" class="menu_copy">&#1050;&#1072;&#1090;&#1072;&#1083;&#1086;&#1075;</a></span><span><a href="./punkty_prodazhu.php" class="menu_copy">&#1055;&#1091;&#1085;&#1082;&#1090;&#1080; &#1087;&#1088;&#1086;&#1076;&#1072;&#1078;&#1091;</a></span><span><a href="./kontakty.php" class="menu_copy">&#1050;&#1086;&#1085;&#1090;&#1072;&#1082;&#1090;&#1080;</a></span>
         </div>

         <div id="wb_TextMenu5" style="position:absolute;left:450px;top:65px;width:265px;height:20px;z-index:9;">

            <span><a href="./index.php" class="menu_copy">&#1043;&#1086;&#1083;&#1086;&#1074;&#1085;&#1072;</a></span><span><a href="./nasha_voda.php" class="menu_copy">&#1053;&#1072;&#1096;&#1072; &#1074;&#1086;&#1076;&#1072;</a></span><span><a href="./vidguky.php" class="menu_copy">&#1042;&#1110;&#1076;&#1075;&#1091;&#1082;&#1080;</a></span>
         </div>

         <div id="wb_Text35" style="position:absolute;left:450px;top:29px;width:240px;height:34px;z-index:10;">

            <span style="color:#FFFFFF;">Доставка води по м. Львів<br>Пн-пт 9:00 - 17:00,&nbsp; сб 9:00 - 16:00</span>
         </div>

         <div id="wb_Text37" style="position:absolute;left:730px;top:56px;width:220px;height:13px;text-align:right;z-index:11;">

            <span style="color:#FFFFFF;">Телефонуйте: пн-пт з 9:00 до 17:00 год</span>
         </div>

         <div id="wb_Text36" style="position:absolute;left:720px;top:23px;width:230px;height:33px;text-align:right;z-index:12;">

            <span style="color:#FFFFFF;">+38 067 668 91 75</span>
         </div>



      </div>

</body>

</html>