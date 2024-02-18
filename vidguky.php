<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formid']) && $_POST['formid'] == 'layoutgrid7')
{
   $mailto = '2022rozena@gmail.com';
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
<title>Доставка води Львів, відгуки — РОЗЕНА</title>
<meta name="description" content="Відгуки львів'ян про доставку води у Львові Розена. Добавити пропозицію чи зауваження щодо якості води, обслуговування та інші пропозиції для ТОВ РОЗЕНА">
<meta name="keywords" content="доставка води львів відгуки, пропозиції, зауваження, розена">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="css/rozena.css?v=1246" rel="stylesheet">
<link href="css/vidguky.css?v=1246" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-205285035-1"></script>
<script>   
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
   
     gtag('config', 'UA-205285035-1');
</script>



<!-- Поместите код Google Analystics сюда --><script>   
   if (screen.width <= 480) {
   window.location = "/m/vidguky.php";
   }
</script>
</head>
<body>
   <div id="container">
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
                              <span><a href="./index.php" class="menu">Головна</a></span><span><a href="./katalog.php" class="menu">Каталог</a></span><span><a href="./punkty_prodazhu.php" class="menu">Акватермінали</a></span><span><a href="./pro-vodu.php" class="menu">Про воду</a></span><span><a href="./vidguky.php" class="active">Відгуки</a></span><span><a href="./kontakty.php" class="menu">Контакти</a></span>
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
               </div>
            </div>
         </div>
      </div>
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
            <div id="wb_LayoutGrid6">
               <div id="LayoutGrid6">
                  <div class="row">
                     <div class="col-1">
                        <input type="text" id="Editbox1" style="display:block;width:calc(100% - 10px);height:46px;z-index:10;" name="Ім'я" value="" spellcheck="false" placeholder="Введіть ім&apos;я:">
                     </div>
                     <div class="col-2">
                        <input type="text" id="Editbox2" style="display:block;width:calc(100% - 10px);height:46px;z-index:11;" name="Контактні дані" value="" spellcheck="false" placeholder="Введіть контактні дані:">
                     </div>
                  </div>
               </div>
            </div>
            <textarea name="Текст" id="TextArea1" style="display:block;width:100%;;height:113px;z-index:15;" rows="3" cols="88" spellcheck="false" placeholder="Введіть відгук:"></textarea>
<input type="submit" id="Button1" name="" value="Відправити" style="display:inline-block;width:170px;height:46px;z-index:16;">
            <div id="wb_Text5">
               <span style="color:#000000;"><strong><a href="https://m.facebook.com/100000953389200/">Roman Syneiko</a><br></strong>Тому що вона природна, без осмосів та штучної мінералізації.</span>
            </div>
            <div id="wb_Text6">
               <span style="color:#000000;"><strong><a href="https://www.facebook.com/people/%D0%92%D0%B0%D0%BD%D1%8F-%D0%93%D0%B0%D1%80%D0%B1%D0%B0%D1%80/100002866732439/?fref=nf">Ваня Гарбар</a></strong><br>Быстро, качественно и всегда во время. Единственное что не нравится, если просишь в первую половину дня, то курьер чаще всего приезжает в 12:40-12:50.<br>Я был бы рад, если б в день доставки приходило оповещение о примерном времени доставки с погрешностью в 20 минут. Например : курьер будет у вас в 12:30 (+- 20 минут). Соответственно, мне не нужно было бы находиться дома до 12:10 и ждать.</span>
            </div>
            <div id="wb_Text8">
               <span style="color:#000000;"><strong><a href="https://www.facebook.com/profile.php?id=100011228825423&fref=nf">Marichka Ivanova </a><br></strong>Рекомендую і заохочую скуштувати цю воду!</span>
            </div>
            <div id="wb_Text10">
               <span style="color:#000000;"><strong><a href="https://www.facebook.com/liliya.galevych?fref=nf">Liliya Orevchuk</a><br></strong>Відмінна вода! Добре, що весь час її перевіряють, тому використовую її навіть для приготування їжі своїм малюкам!</span>
            </div>
            <div id="wb_Text11">
               <span style="color:#000000;"><strong><a href="https://www.facebook.com/olha.babichuk/posts/10160397526264899">Olha Babichuk</a><br></strong>Раджу!</span>
            </div>
         </div>
         <div class="col-2">
            <div id="wb_Image2" style="display:inline-block;width:173px;height:157px;opacity:0.70;z-index:22;">
               <img src="images/5.png" id="Image2" alt="" width="173" height="158">
            </div>
            <div id="wb_Heading1" style="display:inline-block;width:100%;z-index:23;">
               <h1 id="Heading1">Доставка води львів відгуки<br></h1>
            </div>
         </div>
      </form>
   </div>
   <div id="wb_LayoutGrid8" style="min-width:960px;">
      <div id="LayoutGrid8">
         <div class="col-1">
            <div class="col-1-padding">
               <div id="wb_Image3" style="display:inline-block;width:239px;height:66px;z-index:34;">
                  <a href="./index.php"><img src="images/2633%2d.png" id="Image3" alt="" width="239" height="67"></a>
               </div>
            </div>
         </div>
         <div class="col-2">
            <div id="wb_LayoutGrid15">
               <div id="LayoutGrid15">
                  <div class="col-1">
                     <div id="wb_Text13">
                        <span style="color:#FFFFFF;">Доставка води по м. Львів.&nbsp; Телефонуйте: Пн-сб 8:00 - 19:00,&nbsp; нд 8:00 - 17:00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div id="wb_TextMenu1" style="display:inline-block;width:559px;height:20px;z-index:37;">
               <span><a href="./index.php" class="menu_copy">Головна</a></span><span><a href="./katalog.php" class="menu_copy">Каталог</a></span><span><a href="./punkty_prodazhu.php" class="menu_copy">Акватермінали</a></span><span><a href="./pro-vodu.php" class="menu_copy">Про воду</a></span><span><a href="./vidguky.php" class="active">Відгуки</a></span><span><a href="./kontakty.php" class="menu_copy">Контакти</a></span>
            </div>
         </div>
         <div class="col-3">
            <div class="col-3-padding">
               <div id="wb_Text9">
                  <span style="color:#FFFFFF;">+38 067 668 91 75</span>
               </div>
               <div id="wb_Shape2" style="display:inline-block;width:159px;height:24px;z-index:39;position:relative;">
                  <a href="./zamovlennya37.php" title="Замовити доставку води"><div id="Shape2"><div id="Shape2_text"><div><span style="color:#FFFFFF;font-family:Roboto;font-size:13px;">замовити воду</span></div></div></div></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>