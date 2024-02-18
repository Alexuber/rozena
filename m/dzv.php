<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formid']) && $_POST['formid'] == 'layoutgrid4')
{
   $mailto = 'rozenasite@gmail.com';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $subject = 'Відгук';
   $message = '';
   $success_url = '';
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
      $message .= "IP Address : ";
      $message .= $_SERVER['REMOTE_ADDR'];
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
<title>Зауваження та пропозиції щодо якості води — Доставка артезіанської води Розена у Львові</title>
<meta name="description" content="Добавити пропозицію чи зауваження щодо якості води, обслуговування та інші пропозиції для ТОВ РОЗЕНА">
<meta name="keywords" content="пропозиції, пропозиції про воду, зауваження по роботі, пропозиції по роботі компанії, відгуки розена, відгуки про воду, відгуки вода">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://rozena.com.ua/vidguky.php" rel="canonical">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/rozena.css?v=1192" rel="stylesheet">
<link href="css/dzv.css?v=1192" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wwb17.min.js"></script>
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
   </div>
   <div id="wb_header">
      <div id="header">
         <div class="col-1">
            <div id="wb_menu2">
               <div id="menu2">
                  <div class="row">
                     <div class="col-1">
                        <div id="wb_LayoutGrid15">
                           <div id="LayoutGrid15">
                              <div class="col-1">
                                 <div id="wb_IconFont8" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:1;">
                                    <a href="#" onclick="ShowObjectWithEffect('wb_menu2', 0, 'slideright', 500, 'easeInOutCubic');return false;"><div id="IconFont8"><i class="fa fa-times"></i></div></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <table style="display:table;width:100%;height:520px;z-index:19;" id="Table1">
                           <tr>
                              <td class="cell0" onclick="window.location.href='./index.php';return false;"><div id="wb_IconFont2" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:2;">
                                    <div id="IconFont2"><i class="fa fa-home"></i></div>
                                 </div>
                                 <div id="wb_Text4">
                                    <span style="color:#FFFFFF;"><strong>Головна </strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell1" onclick="window.location.href='./zamovlennya.php';return false;"><div id="wb_IconFont9" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:4;">
                                    <div id="IconFont9"><i class="fa fa-shopping-cart"></i></div>
                                 </div>
                                 <div id="wb_Text11">
                                    <span style="color:#FFFFFF;"><strong>Замовити воду</strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell2" onclick="window.location.href='./punkty_prodazhu.php';return false;"><div id="wb_IconFont4" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:6;">
                                    <div id="IconFont4"><i class="fa fa-map"></i></div>
                                 </div>
                                 <div id="wb_Text7">
                                    <span style="color:#FFFFFF;"><strong>Пункти продажу</strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell3" onclick="window.location.href='./pro-vodu.php';return false;"><div id="wb_IconFont3" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:8;">
                                    <div id="IconFont3"><i class="fa fa-info-circle"></i></div>
                                 </div>
                                 <div id="wb_Text5">
                                    <span style="color:#FFFFFF;"><strong>Про воду</strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell4" onclick="window.location.href='./katalog.php';return false;"><div id="wb_IconFont5" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:10;">
                                    <div id="IconFont5"><i class="fa fa-book"></i></div>
                                 </div>
                                 <div id="wb_Text6">
                                    <span style="color:#FFFFFF;"><strong>Каталог</strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell5" onclick="window.location.href='./vidguky.php';return false;"><div id="wb_IconFont7" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:12;">
                                    <div id="IconFont7"><i class="fa fa-comments"></i></div>
                                 </div>
                                 <div id="wb_Text10">
                                    <span style="color:#FFFFFF;"><strong>Відгуки</strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell6" onclick="window.location.href='tel:+38 067 668 91 75';return false;"><div id="wb_IconFont10" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:14;">
                                    <div id="IconFont10"><i class="fa fa-phone-square"></i></div>
                                 </div>
                                 <div id="wb_Text1">
                                    <span style="color:#FFFFFF;"><strong>Зателефонувати</strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell7" onclick="window.location.href='./kontakty.php';return false;"><div id="wb_IconFont6" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:16;">
                                    <div id="IconFont6"><i class="fa fa-address-book"></i></div>
                                 </div>
                                 <div id="wb_Text9">
                                    <span style="color:#FFFFFF;"><strong>Контакти</strong></span>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div id="wb_LayoutGrid3">
               <div id="LayoutGrid3">
                  <div class="col-1">
                     <div class="col-1-padding">
                        <div id="wb_Image2" style="display:inline-block;width:229px;height:60px;z-index:20;">
                           <a href="./index.php"><img src="rozena%2dlogo.webp" id="Image2" alt="" width="229" height="61"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-2">
                     <div class="col-2-padding">
                        <div id="wb_IconFont11" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:21;">
                           <a href="#" onclick="ShowObjectWithEffect('wb_menu2', 1, 'slideright', 500, 'easeInOutCubic');return false;"><div id="IconFont11"><i class="fa fa-bars"></i></div></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid37">
      <div id="LayoutGrid37">
         <div class="row">
            <div class="col-1">
               <div id="wb_Text12">
                  <span style="color:#6493CD;"><strong>ВІДГУКИ</strong></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid4">
      <form name="LayoutGrid4" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="LayoutGrid4">
         <input type="hidden" name="formid" value="layoutgrid4">
         <div class="row">
            <div class="col-1">
               <div id="wb_Text2">
                  <span style="color:#008000;"><strong>Дякуємо за відгук!</strong></span>
               </div>
            </div>
         </div>
      </form>
   </div>
   <div id="wb_LayoutGrid8">
      <div id="LayoutGrid8">
         <div class="row">
            <div class="col-1">
               <div class="col-1-padding">
                  <div id="wb_LayoutGrid20">
                     <div id="LayoutGrid20">
                        <div class="col-1">
                           <div class="col-1-padding">
                              <div id="wb_IconFont17" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:43;">
                                 <a href="#" onclick="ShowObjectWithEffect('wb_LayoutGrid8', 0, 'slideright', 700, 'easeInOutCubic');return false;"><div id="IconFont17"><i class="fa fa-times"></i></div></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid2" class="CustomStyle" onclick="window.location.href='./index.php';return false;">
                     <div id="LayoutGrid2">
                        <div class="col-1">
                           <div id="wb_IconFont1" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:44;">
                              <div id="IconFont1"><i class="fa fa-home"></i></div>
                           </div>
                           <div id="wb_Text14">
                              <span style="color:#FFFFFF;"><strong>Головна </strong></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid6" onclick="window.location.href='./pro-vodu.php';return false;">
                     <div id="LayoutGrid6">
                        <div class="col-1">
                           <div id="wb_IconFont12" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:46;">
                              <div id="IconFont12"><i class="fa fa-info-circle"></i></div>
                           </div>
                           <div id="wb_Text15">
                              <span style="color:#FFFFFF;"><strong>Про воду</strong></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid7" onclick="window.location.href='./punkty_prodazhu.php';return false;">
                     <div id="LayoutGrid7">
                        <div class="col-1">
                           <div id="wb_IconFont13" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:48;">
                              <div id="IconFont13"><i class="fa fa-map"></i></div>
                           </div>
                           <div id="wb_Text16">
                              <span style="color:#FFFFFF;"><strong>Пункти продажу</strong></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid17" onclick="window.location.href='./katalog.php';return false;">
                     <div id="LayoutGrid17">
                        <div class="col-1">
                           <div id="wb_IconFont14" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:50;">
                              <div id="IconFont14"><i class="fa fa-book"></i></div>
                           </div>
                           <div id="wb_Text8">
                              <span style="color:#FFFFFF;"><strong>Каталог</strong></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid18" onclick="window.location.href='./kontakty.php';return false;">
                     <div id="LayoutGrid18">
                        <div class="col-1">
                           <div id="wb_IconFont15" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:52;">
                              <div id="IconFont15"><i class="fa fa-address-book-o"></i></div>
                           </div>
                           <div id="wb_Text17">
                              <span style="color:#FFFFFF;"><strong>Контакти</strong></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid19" onclick="window.location.href='./vidguky.php';return false;">
                     <div id="LayoutGrid19">
                        <div class="col-1">
                           <div id="wb_IconFont16" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:54;">
                              <div id="IconFont16"><i class="fa fa-comments"></i></div>
                           </div>
                           <div id="wb_Text18">
                              <span style="color:#FFFFFF;"><strong>Відгуки</strong></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid21" onclick="window.location.href='./zamovlennya34.php';return false;">
                     <div id="LayoutGrid21">
                        <div class="col-1">
                           <div id="wb_IconFont18" style="display:inline-block;width:23px;height:23px;text-align:center;z-index:56;">
                              <div id="IconFont18"><i class="fa fa-shopping-cart"></i></div>
                           </div>
                           <div id="wb_Text19">
                              <span style="color:#FFFFFF;"><strong>Замовити воду</strong></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid22" class="style2">
      <div id="LayoutGrid22">
         <div class="row">
            <div class="col-1">
               <div id="wb_EmbeddedPage2" style="display:inline-block;width:100%;z-index:143;">
                  <div id="wb_LayoutGrid2978">
                     <div id="LayoutGrid2978">
                        <div class="col-1">
                           <div id="wb_Text138" onclick="window.location.href='tel:+38 067 668 91 75';return false;">
                              <span style="color:#FFFFFF;">+38 067 668 91 75</span>
                           </div>
                           <div id="wb_Text148">
                              <span style="color:#FFFFFF;">Телефонуйте: пн-сб з 8:00 до 19:00 год</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>