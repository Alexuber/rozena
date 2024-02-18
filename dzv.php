<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formid']) && $_POST['formid'] == 'layoutgrid7')
{
   $mailto = 'kylhavets.tv@gmail.com';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $subject = 'Відгук';
   $message = '';
   $success_url = './dzv.php';
   $error_url = '';
   $eol = "\n";
   $error = '';
   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response", "h-captcha-response");
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
      header('Location: '.$success_url);
   }
   catch (Exception $e)
   {
      $errorcode = file_get_contents($error_url);
      $replace = "##error##";
      $errorcode = str_replace($replace, $e->getMessage(), $errorcode);
      echo $errorcode;
   }
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Дякуємо за замовлення!</title>
<meta name="robots" content="noindex, nofollow">
<meta name="generator" content="WYSIWYG Web Builder 17 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="css/rozena.css?v=1192" rel="stylesheet">
<link href="css/dzv.css?v=1192" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-205285035-1"></script>
<script>   
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
   
     gtag('config', 'UA-205285035-1');
</script>



<!-- Поместите код Google Analystics сюда -->
</head>
<body>
   <div id="container">
      <iframe name="InlineFrame1" id="InlineFrame1" style="position:absolute;left:300px;top:351px;visibility:hidden;width:360px;height:778px;z-index:35;" src="https://www.liqpay.ua/checkout/i21869906870" scrolling="no"></iframe>
   </div>
   <div id="wb_LayoutGrid3">
      <div id="LayoutGrid3">
         <div class="row">
            <div class="col-1">
               <div id="wb_EmbeddedPage1" style="display:inline-block;width:100%;z-index:8;">
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
                                       <span style="color:#395879;">Доставка води по м. Львів.&nbsp; Телефонуйте: Пн-сб 8:00 - 19:00,&nbsp; нд 8:00 - 17:00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="wb_TextMenu3" style="display:inline-block;width:559px;height:20px;z-index:3;">
                              <span><a href="./index.php" class="menu">Головна</a></span><span><a href="./katalog.php" class="menu">Каталог</a></span><span><a href="./punkty_prodazhu.php" class="menu">Акватермінали</a></span><span><a href="./pro-vodu.php" class="menu">Про воду</a></span><span><a href="./vidguky.php" class="menu">Відгуки</a></span><span><a href="./kontakty.php" class="menu">Контакти</a></span>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="col-3-padding">
                              <div id="wb_Text3">
                                 <span style="color:#193652;">+38 067 668 91 75</span>
                              </div>
                              <div id="wb_Shape3" style="display:inline-block;width:159px;height:24px;z-index:5;position:relative;">
                                 <a href="./zamovlennya.php" title="Замовити доставку води"><div id="Shape3"><div id="Shape3_text"><div><span style="color:#FFFFFF;font-family:Roboto;font-size:13px;">замовити воду</span></div></div></div></a>
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
   <div id="wb_LayoutGrid5" style="min-width:960px;">
      <div id="LayoutGrid5">
         <div class="row">
            <div class="col-1">
               <div class="col-1-padding">
                  <div id="wb_Text7">
                     <span style="color:#364D67;"><strong>ВІДГУКИ ТА ПРОПОЗИЦІЇ</strong></span>
                  </div>
                  <div id="wb_LayoutGrid7">
                     <form name="LayoutGrid7" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="LayoutGrid7">
                        <input type="hidden" name="formid" value="layoutgrid7">
                        <div class="col-1">
                           <div id="wb_Text4">
                              <span style="color:#000000;">З кожним новим днем «Питна артезіанська вода «РОЗЕНА» працює над незмінно високою якістю&nbsp; води та покращенням сервісу для максимального комфорту клієнтів і партнерів.<br><br>Ваша думка є важливою для нас, оскільки дає змогу краще зрозуміти потреби споживачів у чистій,&nbsp; якісній воді, оптимальному розміщені торгівельних пунктів розливу питної води, найзручнішому варіанті тари та напрямки розвитку діяльності підприємства.<br><br>То ж у цьому розділі ми чекаємо на Ваші відгуки, пропозиції або зауваження.</span>
                           </div>
                           <div id="wb_Text1">
                              <span style="color:#008000;"><strong>Дякуємо за Ваш відгук!</strong></span>
                           </div>
                           <div id="wb_Text5">
                              <span style="color:#008000;"><strong>Дякуємо за відгук!</strong></span>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="wb_Image2" style="display:inline-block;width:173px;height:157px;opacity:0.70;z-index:12;">
                              <img src="images/5.png" id="Image2" alt="" width="173" height="158">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div id="wb_Heading1" style="display:inline-block;width:100%;z-index:15;">
                     <h1 id="Heading1">Доставка води львів відгуки<br></h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:2118px;width:100%;height:141px;z-index:36;">
      <div id="PageFooter1_Container" style="width:1024px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
         <div id="wb_Image3" style="position:absolute;left:5px;top:0px;width:361px;height:101px;z-index:28;">
            <img src="images/2633%2d.png" id="Image3" alt="" width="361" height="101"></div>
         <div id="wb_TextMenu6" style="position:absolute;left:450px;top:84px;width:270px;height:20px;z-index:29;">
            <span><a href="./katalog.php" class="menu_copy">Каталог</a></span><span><a href="./punkty_prodazhu.php" class="menu_copy">Пункти продажу</a></span><span><a href="./kontakty.php" class="menu_copy">Контакти</a></span></div>
         <div id="wb_TextMenu5" style="position:absolute;left:450px;top:65px;width:265px;height:20px;z-index:30;">
            <span><a href="./m/zamovlennya35.php" class="menu_copy">Головна</a></span><span><a href="./pro-vodu.php" class="menu_copy">Наша вода</a></span><span><a href="./vidguky.php" class="menu_copy">Відгуки</a></span></div>
         <div id="wb_Text35" style="position:absolute;left:450px;top:29px;width:240px;height:34px;z-index:31;">
            <span style="color:#FFFFFF;">Доставка води по м. Львів<br>Пн-пт 9:00 - 17:00,&nbsp; сб 9:00 - 16:00</span></div>
         <div id="wb_Text37" style="position:absolute;left:730px;top:56px;width:220px;height:13px;text-align:right;z-index:32;">
            <span style="color:#FFFFFF;">Телефонуйте: пн-пт з 9:00 до 17:00 год</span></div>
         <div id="wb_Text36" style="position:absolute;left:720px;top:23px;width:230px;height:33px;text-align:right;z-index:33;">
            <span style="color:#FFFFFF;">+38 067 668 91 75</span></div>
         <a id="Button1" href="./m/new.php" style="position:absolute;left:746px;top:77px;width:194px;height:23px;z-index:34;">замовити доставку води</a>
      </div>
   </div>
</body>
</html>