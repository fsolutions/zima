<html lang ="en">
<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Myscale magazine - Главная</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<style type="text/css">
/* Окна */
.modal_div {
	width: 600px; 
	height: 400px; /* Размеры должны быть фиксированы */
	border-radius: 5px;
	border: 3px #000 solid;
	background: #fff;
	position: fixed; /* чтобы окно было в видимой зоне в любом месте */
	top: 45%; /* отступаем сверху 45%, остальные 5% подвинет скрипт */
	left: 50%; /* половина экрана слева */
	margin-top: -150px;
	margin-left: -150px; /* тут вся магия центровки css, отступаем влево и вверх минус половину ширины и высоты соответственно =) */
	display: none; /* в обычном состоянии окна не должно быть */
	opacity: 0; /* полностью прозрачно для анимирования */
	z-index: 5; /* окно должно быть наиболее большем слое */
	padding: 20px 10px;
}
/* Кнопка закрыть для тех кто в танке) */
.modal_close {
	width: 21px;
	height: 21px;
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
	display: block;
}
/* Подложка */
#overlay {
	z-index: 3; /* подложка должна быть выше слоев элементов сайта, но ниже слоя модального окна */
	position: fixed; /* всегда перекрывает весь сайт */
	background-color: #000; /* черная */
	opacity: 0.8; /* но немного прозрачна */
	width: 100%; 
	height: 100%; /* размером во весь экран */
	top: 0; 
	left: 0; /* сверху и слева 0, обязательные свойства! */
	cursor: pointer;
	display: none; /* в обычном состоянии её нет) */
}
</style>
<script type="text/javascript">
$(document).ready(function() { // запускаем скрипт после загрузки всех элементов
    /* засунем сразу все элементы в переменные, чтобы скрипту не приходилось их каждый раз искать при кликах */
    var overlay = $('#overlay'); // подложка, должна быть одна на странице
    var open_modal = $('.open_modal'); // все ссылки, которые будут открывать окна
    var close = $('.modal_close, #overlay'); // все, что закрывает модальное окно, т.е. крестик и оверлэй-подложка
    var modal = $('.modal_div'); // все скрытые модальные окна

     open_modal.click( function(event){ // ловим клик по ссылке с классом open_modal
         event.preventDefault(); // вырубаем стандартное поведение
         var div = $(this).attr('href'); // возьмем строку с селектором у кликнутой ссылки
         overlay.fadeIn(400, //показываем оверлэй
             function(){ // после окончания показывания оверлэя
                 $(div) // берем строку с селектором и делаем из нее jquery объект
                     .css('display', 'block') 
                     .animate({opacity: 1, top: '50%'}, 200); // плавно показываем
         });
     });

     close.click( function(){ // ловим клик по крестику или оверлэю
            modal // все модальные окна
             .animate({opacity: 0, top: '45%'}, 200, // плавно прячем
                 function(){ // после этого
                     $(this).css('display', 'none');
                     overlay.fadeOut(400); // прячем подложку
                 }
             );
     });
});
</script>
</head>
<body>
	<div class="header">
		<div class="center">
          <div class="top">
            <div class="headernetwork">
             <div class="footernetwork">
                    <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/instaicon.png"></a> </div>
                     <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/pinteresticon.png"></a> </div>
                      <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/twittericon.png"></a> </div>
                       <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/facebookicon.png"></a> </div>
                        <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/youtubeicon.png"></a> </div>
                </div>
            </div>

            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
			<div class="welcome">
                <h2>WELCOME TO MYSCALE</h2>
                <p>The only online store you will ever need for all your diecast hobby</p>
            </div>   

<div class="headertext">
    <h2>NEW SHUCO DIECAST<br>2018</h2>
    <p>Only with us, buy first</p>
     <input type="button" class="yellowbutton" value="BUY NOW">
</div>                

		</div>
		</div>	
      </div>
    </div>

	<div class="main">
		<div class="center">
            <div class="menu">
                <ul>
                            <li class="menu-item"><a href="#">MAIN</a></li>
                            <li class="menu-item"><a href="#">NEWS</a></li>
                            <li class="menu-item"><a href="#">DIECAST</a></li>
                            <li class="menu-item"><a href="#">BRANDS</a></li>
                            <li class="menu-item"><a href="#">CATEGORIES</a></li>
                            <li class="menu-item"><a href="#">AUCTION</a></li>
                            <li class="menu-item"><a href="#">HISTORY</a></li>
                            <li class="menu-item"><a href="#">ACCESSORIES</a></li>
                            <li class="menu-item"><a href="#">SALE</a></li>
                            <li class="menu-item"><a href="#">ABOUT</a></li>
                            <li class="menu-item"><a href="#">CONTACT</a></li>
                        </ul>
            </div>
        <div class="now">
            <p>NOW<br>IS<br>OPEN!</p>
            </div>
 


            <div class="product">

<!-- Модальное окно -->
 <?
$img = array_diff(scandir(images,1), array('..', '.'));
for ($i=0;$i<count($img);$i++){
echo "<div class=\"blank\">";
echo "<div class=\"blankintro\">";
echo "<p><a href=\"#modal$i\" class=\"open_modal\"><img src=\"images/$img[$i]\" alt=\"logo\"</a></p>";
echo "</div>";
echo "<div class=\"name\">Schuco VW Kafer Post</div>";
echo "<div class=\"price\">&euro;.40.00</div>";   
echo "</div>";
echo "<div id=\"modal$i\" class=\"modal_div\">";
echo "<span class=\"modal_close\">X</span>";
echo "<img src=\"images/$img[$i]\" alt=\"logo\" height=\"400px\">";
echo "</div>";
echo "<div id=\"overlay\"></div>";
}
?>

<p><a href="#modal1" class="open_modal">Ссылка с окном 1</a></p>
<div id="modal1" class="modal_div">
	<span class="modal_close">X</span>
         1
		</form>
</div>

            </div>

        </div>  
        </div> 

    <div class="socialblock">
    <div class="center">
    <div class="social">
      
      <div class="brandblock">
        <div class="center">
         <a href="cat/kafer1.html"><img src="img/schuco.png"></a> 
         <a href="cat/kafer1.html"><img src="img/kyosho.png"></a> 
         <a href="cat/kafer1.html"><img src="img/norev.jpg"></a> 
         <a href="cat/kafer1.html"><img src="img/mini.jpg"></a> 
     </div>
 	   </div>   
       <div class="insta">

        <div class="instatext">
            <div class="center">Instagram feed:#mydiecast</div>
        </div>
       <div class="instaintro">
           <div class="instablock"><img src="img/in1.jpg"></div>
           <div class="instablock"><img src="img/in2.jpg"></div>
           <div class="instablock"><img src="img/in3.jpg"></div>
           <div class="instablock"><img src="img/in4.jpg"></div>
           <div class="instablock"><img src="img/in5.jpg"></div>
           <div class="instablock"><img src="img/in6.jpg"></div>

       </div>
   </div>
       <div class="network">
              <div class="socialsize facebook">
                   <img src="img/fbico.png" alt="facebook">
              </div>
              <div class="socialsize twitter">
                   <img src="img/twico.png" alt="twitter">
              </div>
              <div class="socialsize pinterest">
                   <img src="img/pinico.png" alt="pinterest">
              </div>
        </div>
       </div>
     </div>
     </div>
    </div>

    <div class="footerone">
        <div class="center">
            <div class="footerblock">
                
                <div class="category sizeblock">
                  <h2>Category</h2>  
                  <a href="#">Home</a><br>
                  <a href="#">About US</a><br>
                  <a href="#">eshop</a><br>
                  <a href="#">Features</a><br>
                  <a href="#">New collections</a><br>
                  <a href="#">blog</a><br>
                  <a href="#">contact</a>

                </div>
                <div class="account sizeblock">
                   <h2>Our Account</h2> 
                   <a href="#">Your Account</a><br>
                  <a href="#">Personal Information</a><br>
                  <a href="#">Addresses</a><br>
                  <a href="#">Discount</a><br>
                  <a href="#">Order history</a><br>
                  <a href="#">Search Terms</a>

                </div> 
                <div class="support sizeblock">
                    <h2>Our Support</h2> 
                 <a href="#">Site map</a><br>
                  <a href="#">Search Terms</a><br>
                  <a href="#">Advanced Search</a><br>
                  <a href="#">Mobile</a><br>
                  <a href="#">Contact Us</a>
    
                </div>
                <div class="news sizeblock2">
                    <h2>Newsletter</h2> 
                    <p>Join thousands of other people subscribe to our news</p>
                    <div class="email">
                    <input type="email" id="email" placeholder="INSERT EMAIL" class="email">
                    <input type="submit" value="SUBMIT" class="submit">
                </div>
                    <div class="pay">
                       <div class="payico"><a href="cat/kafer1.html"><img src="img/paypal.png"></a></div>
                       <div class="payico"><a href="cat/kafer1.html"><img src="img/visa.png"></a></div>
                       <div class="payico"><a href="cat/kafer1.html"><img src="img/discover.png"></a></div>
                       <div class="payico"><a href="cat/kafer1.html"><img src="img/maestero.png"></a></div> 
                       <div class="payico"><a href="cat/kafer1.html"><img src="img/mastercard.png"></a></div>
                       <div class="payico"><a href="cat/kafer1.html"><img src="img/aex.png"></a></div> 
                    </div>
                </div> 
                <div class="about sizeblock2">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                    <div class="contact">Phone:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 8-916-444-44-44<br>
                    e-mail:<a href="mailto:irbis78@yandex.ru">irbis78@yandex.ru</a></div>
                </div>
            </div>
        </div>   
    </div>
      <div class="footertwo">
        <div class="center">
            <div class="footerblock2">
                <p>2018 MYScale. All right reserver - Designed by blablabla.com</p>
                <div class="footernetwork">
                    <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/instaicon.png"></a> </div>
                     <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/pinteresticon.png"></a> </div>
                      <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/twittericon.png"></a> </div>
                       <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/facebookicon.png"></a> </div>
                        <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/youtubeicon.png"></a> </div>
                </div>
                </div>
        </div>
    </div>    
  
    	
    
</body>
</html>