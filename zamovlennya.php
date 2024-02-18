<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Замовити доставку питної води у Львові — РОЗЕНА</title>
<meta name="description" content="Питна артезіанська вода вищої категорії за оптимальними цінами для Вас. Завітайте до наших магазинів та замовте доставку додому і офісу">
<meta name="keywords" content="доставка води львів,замовити воду львів,доставка води львів відгуки,вода львів доставка,вода доставка львів,доставка питної води львів,львів доставка води,доставка води львів ціни,вода замовити львів,вода львів замовити,вода бутильована львів,джерельна вода доставка львів,розена,rozena,вода розена,доставка воды львов,заказать воду львов">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="css/base/jquery-ui.min.css" rel="stylesheet">
<link href="css/rozena.css?v=1280" rel="stylesheet">
<link href="css/zamovlennya.css?v=1280" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="jquery.ui.datepicker-uk.js"></script>
<script>   
   function submitform1()
   {
      var regexp;
      var Editbox3 = document.getElementById('Editbox3');
      if (!(Editbox3.disabled || Editbox3.style.display === 'none' || Editbox3.style.visibility === 'hidden'))
      {
         if (Editbox3.value == "")
         {
            alert("Вкажіть номер телефону (мінімум 10 цифр)");
            Editbox3.focus();
            return false;
         }
         if (Editbox3.value.length < 10)
         {
            alert("Вкажіть номер телефону (мінімум 10 цифр)");
            Editbox3.focus();
            return false;
         }
      }
      var Editbox2 = document.getElementById('Editbox2');
      if (!(Editbox2.disabled || Editbox2.style.display === 'none' || Editbox2.style.visibility === 'hidden'))
      {
         if (Editbox2.value == "")
         {
            alert("Вкажіть адресу доставки");
            Editbox2.focus();
            return false;
         }
         if (Editbox2.value.length < 2)
         {
            alert("Вкажіть адресу доставки");
            Editbox2.focus();
            return false;
         }
      }
      return true;
   }
</script>
<script src="wwb17.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("a[href*='#LayoutGrid14']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid14').offset().top }, 600, 'easeInOutQuad');
      });
      $("#Editbox9, #voda_rozena").change(function()
      {
         $('#Editbox9').val($('#voda_rozena').val()+' UAH');
      });
      $("#Editbox9").trigger('change');
      $("#voda_rozena, #voda-dzherelo").change(function()
      {
         $('#777').val(Number($('#voda_rozena').val())+Number($('#voda-dzherelo').val()));
      });
      $("#voda_rozena").trigger('change');
      $("#Editbox4, #butel-polikarbonatnyj").change(function()
      {
         $('#Editbox4').val(($('#butel-polikarbonatnyj').val())*269+' UAH');
      });
      $("#Editbox4").trigger('change');
      $("#Editbox6, #pompa-lilu-standart").change(function()
      {
         $('#Editbox6').val(($('#pompa-lilu-standart').val())*175+' UAH');
      });
      $("#Editbox6").trigger('change');
      $("#DatePicker1").datepicker(
      {
         dateFormat: 'дд/мм/гг',
         changeMonth: false,
         changeYear: false,
         showButtonPanel: false,
         showAnim: 'show',
         minDate: +1,
         beforeShowDay: function(date){     return [true]; }
      });
      $("#DatePicker1").datepicker("option", $.datepicker.regional['uk']);
      $("#RadioButton3").change(function()
      {
         if ($('#RadioButton3').is(':checked'))
         {
            ShowObjectWithEffect('Button5', 0, 'fade', 1);
            ShowObjectWithEffect('Button3', 1, 'fade', 1);
         }
      });
      $("#RadioButton3").trigger('change');
      $("#RadioButton4").change(function()
      {
         if ($('#RadioButton4').is(':checked'))
         {
            ShowObjectWithEffect('Button5', 1, 'fade', 1);
            ShowObjectWithEffect('Button3', 0, 'fade', 1);
         }
      });
      $("#RadioButton4").trigger('change');
      $("#Editbox7, #kava-v-zernakh-Lavazza-Oro").change(function()
      {
         $('#Editbox7').val(($('#kava-v-zernakh-Lavazza-Oro').val())*355+' UAH');
      });
      $("#Editbox7").trigger('change');
      $("#Editbox8, #stakan-paperovyi").change(function()
      {
         $('#Editbox8').val(($('#stakan-paperovyi').val())*47+' UAH');
      });
      $("#Editbox8").trigger('change');
      $("#Editbox10, #cukor-v-stikah").change(function()
      {
         $('#Editbox10').val(($('#cukor-v-stikah').val())*67+' UAH');
      });
      $("#Editbox10").trigger('change');
      $("#Editbox11, #Chay-Hello").change(function()
      {
         $('#Editbox11').val(($('#Chay-Hello').val())*91+' UAH');
      });
      $("#Editbox11").trigger('change');
      $("#Editbox5, #voda_rozena, #voda-dzherelo, #butel-polikarbonatnyj, #pompa-lilu-standart, #stakan-paperovyi, #cukor-v-stikah, #kava-v-zernakh-Lavazza-Oro, #Chay-Hello").change(function()
      {
         $('#Editbox5').val((Number($('#voda_rozena').val())+Number($('#voda-dzherelo').val())+Number($('#butel-polikarbonatnyj').val())*Number(269)+Number($('#pompa-lilu-standart').val())*Number(175)+Number($('#stakan-paperovyi').val())*Number(47)+Number($('#cukor-v-stikah').val())*Number(67)+Number($('#kava-v-zernakh-Lavazza-Oro').val())*Number(355)+Number($('#Chay-Hello').val())*Number(91)).toFixed(0)+' UAH');
         Editbox5.value === "0 UAH" ? (Button1.disabled = true, Button1.style.backgroundColor = "lightgray") : (Button1.disabled = false, Button1.style.backgroundColor = "green");;
      });
      $("#Editbox5").trigger('change');
      $("#Editbox16, #voda-dzherelo").change(function()
      {
         $('#Editbox16').val(Number($('#voda-dzherelo').val())+' UAH');
      });
      $("#Editbox16").trigger('change');
      $("#777, #voda_rozena, #voda-dzherelo, #butel-polikarbonatnyj, #pompa-lilu-standart, #stakan-paperovyi, #cukor-v-stikah, #kava-v-zernakh-Lavazza-Oro, #Chay-Hello").change(function()
      {
         if ($.inArray($('#777').val(), ['1','1']) != -1)
         {
            $('#Editbox16').val(Number($('#voda-dzherelo').val())*Number(115)+' UAH');
            $('#Editbox5').val((Number($('#voda_rozena').val())+Number($('#voda-dzherelo').val())*Number(115)+Number($('#butel-polikarbonatnyj').val())*Number(269)+Number($('#pompa-lilu-standart').val())*Number(175)+Number($('#stakan-paperovyi').val())*Number(47)+Number($('#cukor-v-stikah').val())*Number(67)+Number($('#kava-v-zernakh-Lavazza-Oro').val())*Number(355)+Number($('#Chay-Hello').val())*Number(91)).toFixed(0)+' UAH');
         }
         if ($('#777').val() > 1)
         {
            $('#Editbox5').val((Number($('#voda_rozena').val())+Number($('#voda-dzherelo').val())*Number(105)+Number($('#butel-polikarbonatnyj').val())*Number(269)+Number($('#pompa-lilu-standart').val())*Number(175)+Number($('#stakan-paperovyi').val())*Number(47)+Number($('#cukor-v-stikah').val())*Number(67)+Number($('#kava-v-zernakh-Lavazza-Oro').val())*Number(355)+Number($('#Chay-Hello').val())*Number(91)).toFixed(0)+' UAH');
            $('#Editbox16').val(Number($('#voda-dzherelo').val())*Number(105)+' UAH');
         }
      });
      $("#777").trigger('change');
   });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-205285035-1"></script>
<script>   
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
   
     gtag('config', 'UA-205285035-1');
</script>



<script>   
   if (!sessionStorage.isPageRefreshed) {
       // Якщо сторінка не була оновлена, оновити її і встановити прапорець в `sessionStorage`
       window.location.reload();
       sessionStorage.isPageRefreshed = 1;
   } else {
       // Сторінка була оновлена, очистити прапорець в `sessionStorage`
       delete sessionStorage.isPageRefreshed;
   }
   
</script><script>   
   if (screen.width <= 480) {
   window.location = "/m/zamovlennya.php";
   }
</script>
</head>
<body>
   <div id="container">
      <a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:468px;top:3587px;margin:0;border-width:0;z-index:250" width="16" height="16"></a>
      <script>      
      var wb_Timer2;
      function TimerStartTimer2()
      {
         wb_Timer2 = setTimeout(function()
         {
            var event = null;
            ShowObjectWithEffect('wb_LayoutGrid30', 1, 'dropdown', 400, 'easeInOutQuad');
         }, 510);
      }
      function TimerStopTimer2()
      {
         clearTimeout(wb_Timer2);
      }
      </script>
      <script>      
      var wb_Timer1;
      function TimerStartTimer1()
      {
         wb_Timer1 = setTimeout(function()
         {
            var event = null;
            ShowObjectWithEffect('wb_LayoutGrid22', 1, 'dropdown', 400, 'easeInOutQuad');
         }, 510);
      }
      function TimerStopTimer1()
      {
         clearTimeout(wb_Timer1);
      }
      </script>
      <script>      
      var wb_Timer3;
      function TimerStartTimer3()
      {
         wb_Timer3 = setTimeout(function()
         {
            var event = null;
            ShowObjectWithEffect('wb_LayoutGrid19', 1, 'dropdown', 400, 'easeInOutQuad');
         }, 510);
      }
      function TimerStopTimer3()
      {
         clearTimeout(wb_Timer3);
      }
      </script>
      <script>      
      var wb_Timer4;
      function TimerStartTimer4()
      {
         wb_Timer4 = setTimeout(function()
         {
            var event = null;
            ShowObjectWithEffect('wb_LayoutGrid15', 1, 'dropdown', 400, 'easeInOutQuad');
         }, 510);
      }
      function TimerStopTimer4()
      {
         clearTimeout(wb_Timer4);
      }
      </script>
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
   <div id="wb_LayoutGrid7">
      <form name="form1" method="post" action="/oplata.php" enctype="multipart/form-data" id="LayoutGrid7" onsubmit="return submitform1()">
         <div class="col-1">
            <div id="wb_LayoutGrid27">
               <div id="LayoutGrid27">
                  <div class="col-1">
                     <div id="wb_Text45">
                        <span style="color:#183751;"><strong>Сума замовлення:</strong></span>
                     </div>
                     <input type="text" id="777" style="display:none;width:498px;height:46px;z-index:27;" name="Editbox12" value="" readonly disabled spellcheck="false">
                  </div>
                  <div class="col-2">
                     <input type="text" id="Editbox5" style="display:block;width:100%;height:40px;z-index:28;" name="Сума" value="" readonly autocomplete="off" spellcheck="false">
                  </div>
               </div>
            </div>
            <div id="wb_LayoutGrid9">
               <div id="LayoutGrid9">
                  <div class="col-1">
                     <div id="wb_Text16">
                        <span style="color:#000000;"><strong>Оберіть кількіть бутлів води</strong></span>
                     </div>
                     <div id="wb_Text12">
                        <span style="color:#000000;">Вода Rozena в бутлях 18,9 л.</span>
                     </div>
                     <div id="wb_LayoutGrid134">
                        <div id="LayoutGrid134">
                           <div class="col-1">
                              <div id="wb_Image24" style="display:inline-block;width:100%;height:auto;z-index:29;">
                                 <a href="#" onclick="window.location.href='./m/new.php';return false;"><img src="images/blue5.jpg" id="Image24" alt="" width="40" height="77"></a>
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Вода Rozena" size="1" id="voda_rozena" style="display:block;width:100%;height:40px;z-index:30;cursor:pointer;" autocomplete="off">
                                    <option selected value="0">—</option>
                                    <option value="110">1 шт.</option>
                                    <option value="196">2 шт.</option>
                                    <option value="294">3 шт.</option>
                                    <option value="360">4 шт.</option>
                                    <option value="450">5 шт.</option>
                                    <option value="540">6 шт.</option>
                                    <option value="630">7 шт.</option>
                                    <option value="720">8 шт.</option>
                                    <option value="810">9 шт.</option>
                                    <option value="900">10 шт.</option>
                                    <option value="1080">Пакет "Вигода" 12 шт.</option>
                                    <option value="2040">Пакет "Сімейний" 24 шт.</option>
                                    <option value="2988">Пакет "Бізнес" 36 шт.</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox9" style="display:block;width:100%;height:19px;z-index:31;" name="total2" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_Text24">
                        <span style="color:#000000;">Вода &quot;Джерело Святогір'я&quot; в бутлях 18,9 л.</span>
                     </div>
                     <div id="wb_LayoutGrid4">
                        <div id="LayoutGrid4">
                           <div class="col-1">
                              <div id="wb_Image2" style="display:inline-block;width:100%;height:auto;z-index:32;">
                                 <a href="#" onclick="window.location.href='./m/new.php';return false;"><img src="images/dzherelo.jpg" id="Image2" alt="" width="34" height="63"></a>
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Вода Джерело Святогір'я" size="1" id="voda-dzherelo" style="display:block;width:100%;height:40px;z-index:33;cursor:pointer;" autocomplete="off">
                                    <option selected value="0">—</option>
                                    <option value="1">1 шт.</option>
                                    <option value="2">2 шт.</option>
                                    <option value="3">3 шт.</option>
                                    <option value="4">4 шт.</option>
                                    <option value="5">5 шт.</option>
                                    <option value="6">6 шт.</option>
                                    <option value="7">7 шт.</option>
                                    <option value="8">8 шт.</option>
                                    <option value="9">9 шт.</option>
                                    <option value="10">10 шт.</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox16" style="display:block;width:100%;height:19px;z-index:34;" name="total2" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_Text19">
                        <span style="color:#000000;font-family:'Roboto Medium';font-size:15px;line-height:20px;">Бутель полікарбонатний<br></span><span style="color:#000000;font-family:'Roboto Medium';font-size:12px;line-height:17px;">(якщо немає тари на заміну)</span>
                     </div>
                     <div id="wb_LayoutGrid28">
                        <div id="LayoutGrid28">
                           <div class="col-1">
                              <div id="wb_Image9" style="display:inline-block;width:100%;height:auto;z-index:35;">
                                 <a href="#" onclick="window.location.href='./m/new.php';return false;"><img src="images/butel.jpg" id="Image9" alt="" width="40" height="78"></a>
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Бутель полікарбонатний" size="1" id="butel-polikarbonatnyj" style="display:block;width:100%;height:40px;z-index:36;" autocomplete="off">
                                    <option selected value="">—</option>
                                    <option value="1">1 шт.</option>
                                    <option value="2">2 шт.</option>
                                    <option value="3">3 шт.</option>
                                    <option value="4">4 шт.</option>
                                    <option value="5">5 шт.</option>
                                    <option value="6">6 шт.</option>
                                    <option value="7">7 шт.</option>
                                    <option value="8">8 шт.</option>
                                    <option value="9">9 шт.</option>
                                    <option value="10">10 шт.</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox4" style="display:block;width:100%;height:19px;z-index:37;" name="total1" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_Text21">
                        <span style="color:#000000;">Помпа LILU STANDART</span>
                     </div>
                     <div id="wb_LayoutGrid12">
                        <div id="LayoutGrid12">
                           <div class="col-1">
                              <div id="wb_Image5" style="display:inline-block;width:100%;height:auto;z-index:38;">
                                 <img src="images/pompa.png" id="Image5" alt="" width="40" height="39">
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Помпа Lilu Standart" size="1" id="pompa-lilu-standart" style="display:block;width:100%;height:40px;z-index:39;" autocomplete="off">
                                    <option selected value="">—</option>
                                    <option value="1">1 шт.</option>
                                    <option value="2">2 шт.</option>
                                    <option value="3">3 шт.</option>
                                    <option value="4">4 шт.</option>
                                    <option value="5">5 шт.</option>
                                    <option value="6">6 шт.</option>
                                    <option value="7">7 шт.</option>
                                    <option value="8">8 шт.</option>
                                    <option value="9">9 шт.</option>
                                    <option value="10">10 шт.</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox6" style="display:block;width:100%;height:19px;z-index:40;" name="total1" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_LayoutGrid13">
                        <div id="LayoutGrid13">
                           <div class="col-1">
                           </div>
                           <div class="col-2">
<input type="button" id="Button1" onclick="ShowObjectWithEffect('wb_LayoutGrid9', 0, 'dropleft', 500, 'easeInOutQuad');TimerStartTimer2();return false;" name="" value="Продовжити" style="display:block;width:100%;;height:44px;z-index:41;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="wb_LayoutGrid30">
               <div id="LayoutGrid30">
                  <div class="col-1">
                     <div id="wb_Text7">
                        <span style="color:#000000;"><strong>Бажаєте каву, чай, або інші супутні товари?</strong></span>
                     </div>
                     <div id="wb_LayoutGrid17">
                        <div id="LayoutGrid17">
                           <div class="col-1">
                              <div id="wb_RadioButton3" style="display:inline-block;width:25px;height:25px;z-index:52;">
                                 <input type="radio" id="RadioButton3" name="Супутні товари" value="Так" style="display:inline-block;"><label for="RadioButton3"></label>
                              </div>
                              <div id="wb_Text22">
                                 <span style="color:#000000;">Так</span>
                              </div>
                           </div>
                           <div class="col-2">
                              <div id="wb_RadioButton4" style="display:inline-block;width:25px;height:25px;z-index:54;">
                                 <input type="radio" id="RadioButton4" name="Супутні товари" value="Ні" style="display:inline-block;"><label for="RadioButton4"></label>
                              </div>
                              <div id="wb_Text23">
                                 <span style="color:#000000;">Ні</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="wb_LayoutGrid18">
                        <div id="LayoutGrid18">
                           <div class="col-1">
                           </div>
                           <div class="col-2">

                              <input type="button" id="Button3" onclick="ShowObjectWithEffect('wb_LayoutGrid30', 0, 'dropleft', 500, 'easeInOutQuad');TimerStartTimer3();return false;" name="" value="Продовжити" style="display:inline-block;width:110px;height:44px;z-index:56;">

                              <input type="button" id="Button5" onclick="ShowObjectWithEffect('wb_LayoutGrid30', 0, 'dropleft', 500, 'easeInOutQuad');TimerStartTimer4();return false;" name="" value="Продовжити" style="display:none;width:110px;height:44px;z-index:57;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div><script>            
            // Получаем ссылки на элементы RadioButton и Button3
            var radioButton3 = document.getElementById("RadioButton3");
            var radioButton4 = document.getElementById("RadioButton4");
            var button3 = document.getElementById("Button3");
            
            // Функция для проверки состояния RadioButton и активации/деактивации Button4
            function checkRadioButtonState() {
              if (radioButton3.checked || radioButton4.checked) {
                // Если хотя бы один из RadioButton выбран, активируем Button3
                button3.disabled = false;
                button3.style.backgroundColor = "green"; // Задаем зеленый цвет фона
              } else {
                // Если ни один из RadioButton не выбран, деактивируем Button3
                button3.disabled = true;
                button3.style.backgroundColor = "lightgray"; // Задаем серый цвет фона
              }
            }
            
            // Добавляем обработчики событий для RadioButton
            radioButton3.addEventListener("change", checkRadioButtonState);
            radioButton4.addEventListener("change", checkRadioButtonState);
            
            // Вызываем функцию проверки состояния RadioButton при загрузке страницы
            checkRadioButtonState();
            
            </script>
            <div id="wb_LayoutGrid19">
               <div id="LayoutGrid19">
                  <div class="col-1">
                     <div id="wb_Text14">
                        <span style="color:#000000;"><strong>Супутні товари</strong></span>
                     </div>
                     <div id="wb_Text47">
                        <span style="color:#000000;">Стакан паперовий білий<br>185 мл – Упаковка: 50шт</span>
                     </div>
                     <div id="wb_LayoutGrid24">
                        <div id="LayoutGrid24">
                           <div class="col-1">
                              <div id="wb_Image7" style="display:inline-block;width:100%;height:auto;z-index:61;">
                                 <img src="images/74776762.jpg" id="Image7" alt="" width="40" height="54">
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Стакан паперовий білий 185 мл" size="1" id="stakan-paperovyi" style="display:block;width:100%;height:40px;z-index:62;" autocomplete="off">
                                    <option selected value="">—</option>
                                    <option value="1">1 уп.</option>
                                    <option value="2">2 уп.</option>
                                    <option value="3">3 уп.</option>
                                    <option value="4">4 уп.</option>
                                    <option value="5">5 уп.</option>
                                    <option value="6">6 уп.</option>
                                    <option value="7">7 уп.</option>
                                    <option value="8">8 уп.</option>
                                    <option value="9">9 уп.</option>
                                    <option value="10">10 уп.</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox8" style="display:block;width:100%;height:19px;z-index:63;" name="total1" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_Text48">
                        <span style="color:#000000;">Цукор в стіках 1кг (5г х 200шт)</span>
                     </div>
                     <div id="wb_LayoutGrid25">
                        <div id="LayoutGrid25">
                           <div class="col-1">
                              <div id="wb_Image8" style="display:inline-block;width:100%;height:auto;z-index:64;">
                                 <img src="images/4757633.jpg" id="Image8" alt="" width="40" height="54">
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Цукор в стіках 1кг (5г х 200шт)" size="1" id="cukor-v-stikah" style="display:block;width:100%;height:40px;z-index:65;" autocomplete="off">
                                    <option selected value="">—</option>
                                    <option value="1">1 кг.</option>
                                    <option value="2">2 кг.</option>
                                    <option value="3">3 кг.</option>
                                    <option value="4">4 кг.</option>
                                    <option value="5">5 кг.</option>
                                    <option value="6">6 кг.</option>
                                    <option value="7">7 кг.</option>
                                    <option value="8">8 кг.</option>
                                    <option value="9">9 кг.</option>
                                    <option value="10">10 кг.</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox10" style="display:block;width:100%;height:19px;z-index:66;" name="total1" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_Text38">
                        <span style="color:#000000;">Кава в зернах Lavazza Oro</span>
                     </div>
                     <div id="wb_LayoutGrid23">
                        <div id="LayoutGrid23">
                           <div class="col-1">
                              <div id="wb_Image4" style="display:inline-block;width:100%;height:auto;z-index:67;">
                                 <img src="images/475757.jpg" id="Image4" alt="" width="40" height="69">
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Кава в зернах Lavazza Oro" size="1" id="kava-v-zernakh-Lavazza-Oro" style="display:block;width:100%;height:40px;z-index:68;" autocomplete="off">
                                    <option selected value="">—</option>
                                    <option value="1">1 шт.</option>
                                    <option value="2">2 шт.</option>
                                    <option value="3">3 шт.</option>
                                    <option value="4">4 шт.</option>
                                    <option value="5">5 шт.</option>
                                    <option value="6">6 шт.</option>
                                    <option value="7">7 шт.</option>
                                    <option value="8">8 шт.</option>
                                    <option value="9">9 шт.</option>
                                    <option value="10">10 шт.</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox7" style="display:block;width:100%;height:19px;z-index:69;" name="total1" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_Text51">
                        <span style="color:#000000;">Чай Hello Альпійський Луг</span>
                     </div>
                     <div id="wb_LayoutGrid26">
                        <div id="LayoutGrid26">
                           <div class="col-1">
                              <div id="wb_Image12" style="display:inline-block;width:100%;height:auto;z-index:70;">
                                 <img src="images/264llo.jpg" id="Image12" alt="" width="40" height="63">
                              </div>
                           </div>
                           <div class="col-2">
                              <div class="col-2-padding">
                                 <select name="Чай Hello Альпійський Луг" size="1" id="Chay-Hello" style="display:block;width:100%;height:40px;z-index:71;" autocomplete="off">
                                    <option selected value="">—</option>
                                    <option value="1">1 шт.</option>
                                    <option value="2">2 шт.</option>
                                    <option value="3">3 шт.</option>
                                    <option value="4">4 шт.</option>
                                    <option value="5">5 шт.</option>
                                    <option value="6">6 шт.</option>
                                    <option value="7">7 шт.</option>
                                    <option value="8">8 шт.</option>
                                    <option value="9">9 шт.</option>
                                    <option value="10">10 шт</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-3">
                              <input type="text" id="Editbox11" style="display:block;width:100%;height:19px;z-index:72;" name="total1" value="" readonly disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </div>
                     <div id="wb_LayoutGrid29">
                        <div id="LayoutGrid29">
                           <div class="col-1">
                           </div>
                           <div class="col-2">

                              <input type="button" id="Button6" onclick="ShowObjectWithEffect('wb_LayoutGrid19', 0, 'dropleft', 500, 'easeInOutQuad');TimerStartTimer4();return false;" name="" value="Продовжити" style="display:block;width:100%;;height:44px;z-index:73;"><script>                              
                              // Получаем ссылки на элементы RadioButton и Button4
                              var radioButton1 = document.getElementById("RadioButton1");
                              var radioButton2 = document.getElementById("RadioButton2");
                              var button4 = document.getElementById("Button4");
                              
                              // Функция для проверки состояния RadioButton и активации/деактивации Button4
                              function checkRadioButtonState() {
                                if (radioButton1.checked || radioButton2.checked) {
                                  // Если хотя бы один из RadioButton выбран, активируем Button4
                                  button4.disabled = false;
                                  button4.style.backgroundColor = "green"; // Задаем зеленый цвет фона
                                } else {
                                  // Если ни один из RadioButton не выбран, деактивируем Button4
                                  button4.disabled = true;
                                  button4.style.backgroundColor = "lightgray"; // Задаем серый цвет фона
                                }
                              }
                              
                              // Добавляем обработчики событий для RadioButton
                              radioButton1.addEventListener("change", checkRadioButtonState);
                              radioButton2.addEventListener("change", checkRadioButtonState);
                              
                              // Вызываем функцию проверки состояния RadioButton при загрузке страницы
                              checkRadioButtonState();
                              
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="wb_LayoutGrid15">
               <div id="LayoutGrid15">
                  <div class="col-1">
                     <div id="wb_Text50">
                        <span style="color:#000000;"><strong>Оберіть тип оплати</strong></span>
                     </div>
                     <div id="wb_LayoutGrid20">
                        <div id="LayoutGrid20">
                           <div class="col-1">
                              <div id="wb_RadioButton1" style="display:inline-block;width:25px;height:25px;z-index:84;">
                                 <input type="radio" id="RadioButton1" name="Тип оплати" value="Готівка" style="display:inline-block;"><label for="RadioButton1"></label>
                              </div>
                              <div id="wb_Text49">
                                 <span style="color:#000000;">Готівка</span>
                              </div>
                           </div>
                           <div class="col-2">
                              <div id="wb_RadioButton2" style="display:inline-block;width:25px;height:25px;z-index:86;">
                                 <input type="radio" id="RadioButton2" name="Тип оплати" value="Карта" style="display:inline-block;"><label for="RadioButton2"></label>
                              </div>
                              <div id="wb_Text58">
                                 <span style="color:#000000;">Карта</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="wb_LayoutGrid21">
                        <div id="LayoutGrid21">
                           <div class="col-1">
                           </div>
                           <div class="col-2">

                              <input type="button" id="Button4" onclick="ShowObjectWithEffect('wb_LayoutGrid15', 0, 'dropleft', 500, 'easeInOutQuad');TimerStartTimer1();return false;" name="" value="Продовжити" style="display:block;width:100%;;height:44px;z-index:88;"><script>                              
                              // Получаем ссылки на элементы RadioButton и Button4
                              var radioButton1 = document.getElementById("RadioButton1");
                              var radioButton2 = document.getElementById("RadioButton2");
                              var button4 = document.getElementById("Button4");
                              
                              // Функция для проверки состояния RadioButton и активации/деактивации Button4
                              function checkRadioButtonState() {
                                if (radioButton1.checked || radioButton2.checked) {
                                  // Если хотя бы один из RadioButton выбран, активируем Button4
                                  button4.disabled = false;
                                  button4.style.backgroundColor = "green"; // Задаем зеленый цвет фона
                                } else {
                                  // Если ни один из RadioButton не выбран, деактивируем Button4
                                  button4.disabled = true;
                                  button4.style.backgroundColor = "lightgray"; // Задаем серый цвет фона
                                }
                              }
                              
                              // Добавляем обработчики событий для RadioButton
                              radioButton1.addEventListener("change", checkRadioButtonState);
                              radioButton2.addEventListener("change", checkRadioButtonState);
                              
                              // Вызываем функцию проверки состояния RadioButton при загрузке страницы
                              checkRadioButtonState();
                              
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="wb_LayoutGrid22">
               <div id="LayoutGrid22">
                  <div class="col-1">
                     <div id="wb_Text59">
                        <span style="color:#000000;"><strong>Вкажіть інформацію для доставки</strong></span>
                     </div>
                     <div id="wb_Text46">
                        <span style="color:#000000;">Контактна особа </span><span style="color:#FF0000;">*</span>
                     </div>
                     <input type="text" id="Editbox1" style="display:block;width:100%;height:50px;z-index:95;" name="Контактна особа" value="" spellcheck="false" placeholder="Вкажіть ім&apos;я">
                     <div id="wb_Text1">
                        <span style="color:#000000;">Контактний телефон </span><span style="color:#FF0000;">*</span>
                     </div>
                     <input type="tel" id="Editbox3" style="display:block;width:100%;height:50px;z-index:97;" name="Контактний телефон" value="" spellcheck="false" placeholder="Вкажіть номер телефону" required placeholder="">
                     <div id="wb_Text8">
                        <span style="color:#000000;">Адреса доставки </span><span style="color:#FF0000;">*</span>
                     </div>
                     <input type="text" id="Editbox2" style="display:block;width:100%;height:50px;z-index:99;" name="Адреса" value="" spellcheck="false" placeholder="Вкажіть адресу доставки" required placeholder="">
                     <div id="wb_Text5">
                        <span style="color:#000000;">Дата доставки </span><span style="color:#FF0000;">*</span>
                     </div>
                     <input type="text" id="DatePicker1" style="display:block;width:100%;height:50px;z-index:101;font-size:14px;
" name="Дата доставки" value="" spellcheck="false" required placeholder="Вкажіть дату доставки" autocomplete="off">
                     <div id="wb_Text6">
                        <span style="color:#000000;"><a href="#LayoutGrid14" onclick="ShowObjectWithEffect('wb_LayoutGrid14', 1, 'fade', 1);return false;">Показати графік доставок<br>по районах міста Львів</a></span>
                     </div>
                     <div id="wb_LayoutGrid16">
                        <div id="LayoutGrid16">
                           <div class="col-1">
                           </div>
                           <div class="col-2">
<input type="submit" id="Button2" name="" value="Замовити" style="display:block;width:100%;;height:44px;z-index:92;">
                           </div>
                        </div>
                     </div>
                     <div id="wb_Text15">
                        <span style="color:#696969;">Підтверджуючи замовлення, я приймаю умови договору <a href="./oferta.pdf">публічної оферти </a>і положення про обробку і захист <a href="./polozhennya.pdf">персональних даних</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
   <div id="wb_LayoutGrid8">
      <div id="LayoutGrid8">
         <div class="col-1">
         </div>
         <div class="col-2">
            <div id="wb_Text18">
               <span style="color:#000000;">Доставка води відбувається<br>на наступний робочий день з дати замовлення</span>
            </div>
            <div id="wb_Text10">
               <span style="color:#000000;">Пн-Сб 08:00 - 19:00<br>Нд 8:30 - 16:00</span>
            </div>
            <div id="wb_Text11">
               <span style="color:#000000;">Менеджер зв'яжеться з вами після того, як ви розмістите своє замовлення, та підкаже час доставки, в залежності від вашого району.</span>
            </div>
            <div id="wb_Text29">
               <span style="color:#364D67;"><strong>Працюємо за графіком</strong></span>
            </div>
            <div id="wb_LayoutGrid14">
               <div id="LayoutGrid14">
                  <div class="row">
                     <div class="col-1">
                        <table style="display:table;width:100%;height:158px;z-index:122;" id="Table1">
                           <tr>
                              <td class="cell0"><div id="wb_Text32">
                                    <span style="color:#000000;"><strong>День</strong></span>
                                 </div>
                              </td>
                              <td colspan="3" class="cell1"><div id="wb_Text17">
                                    <span style="color:#000000;"><strong>Час доставки</strong></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell2"><div id="wb_Text43">
                                    <span style="color:#000000;">Пн - Сб</span>
                                 </div>
                              </td>
                              <td class="cell3"><div id="wb_Text34">
                                    <span style="color:#000000;">8:00 - 11:00</span>
                                 </div>
                              </td>
                              <td class="cell3"><div id="wb_Text4">
                                    <span style="color:#000000;">11:00 - 14:00</span>
                                 </div>
                              </td>
                              <td class="cell3"><div id="wb_Text25">
                                    <span style="color:#000000;">15:00 - 19:00</span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="cell4"><div id="wb_Text20">
                                    <span style="color:#000000;">Неділя</span>
                                 </div>
                              </td>
                              <td class="cell5"><p style="font-size:13px;line-height:16.5px;"><span style="font-size:16px;line-height:19px;">&nbsp;</span></p></td>
                              <td class="cell3"><div id="wb_Text26">
                                    <span style="color:#000000;">8:30 - 16:00</span>
                                 </div>
                              </td>
                              <td class="cell6"><p style="font-size:13px;line-height:16px;">&nbsp;</p></td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div id="wb_Image3" style="display:inline-block;width:100%;height:auto;z-index:128;">
               <img src="images/0f397de6%2dd048%2d4980%2daea4%2d0864f82db25a.png" id="Image3" alt="" width="482" height="438">
            </div>
         </div>
         <div class="col-3">
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid10" style="min-width:960px;">
      <div id="LayoutGrid10">
         <div class="col-1">
            <div class="col-1-padding">
               <div id="wb_Image6" style="display:inline-block;width:239px;height:66px;z-index:129;">
                  <a href="./index.php"><img src="images/2633%2d.png" id="Image6" alt="" width="239" height="67"></a>
               </div>
            </div>
         </div>
         <div class="col-2">
            <div id="wb_LayoutGrid11">
               <div id="LayoutGrid11">
                  <div class="col-1">
                     <div id="wb_Text13">
                        <span style="color:#FFFFFF;">Доставка води по м. Львів.&nbsp; Телефонуйте: Пн-сб 8:00 - 19:00,&nbsp; нд 8:00 - 17:00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div id="wb_TextMenu1" style="display:inline-block;width:559px;height:20px;z-index:132;">
               <span><a href="./index.php" class="menu_copy">Головна</a></span><span><a href="./katalog.php" class="menu_copy">Каталог</a></span><span><a href="./punkty_prodazhu.php" class="menu_copy">Акватермінали</a></span><span><a href="./pro-vodu.php" class="menu_copy">Про воду</a></span><span><a href="./vidguky.php" class="menu_copy">Відгуки</a></span><span><a href="./kontakty.php" class="menu_copy">Контакти</a></span>
            </div>
         </div>
         <div class="col-3">
            <div class="col-3-padding">
               <div id="wb_Text9">
                  <span style="color:#FFFFFF;">+38 067 668 91 75</span>
               </div>
               <div id="wb_Shape2" style="display:inline-block;width:159px;height:24px;z-index:134;position:relative;">
                  <a href="./zamovlennya37.php" title="Замовити доставку води"><div id="Shape2"><div id="Shape2_text"><div><span style="color:#FFFFFF;font-family:Roboto;font-size:13px;">замовити воду</span></div></div></div></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>   
   document.addEventListener("DOMContentLoaded", function() {
     var form = document.getElementById("wb_LayoutGrid7"); // Замініть 'yourFormId' на ідентифікатор вашої форми
     form.addEventListener("submit", function(event) {
       var selectElements = form.querySelectorAll("select");
       selectElements.forEach(function(select) {
         if (select.value === "") {
           select.disabled = true;
         }
       });
   
       var radioButtons = form.querySelectorAll("input[type='radio']");
       radioButtons.forEach(function(radio) {
         if (radio.value === "Так" || radio.value === "Ні") {
           radio.disabled = true;
         }
       });
     });
   });
   </script>
</body>
</html>