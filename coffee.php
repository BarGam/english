<?php include("php/bd.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/coffee.css">
    <link rel="stylesheet" href="css/coffee600px.css">
    <link rel="stylesheet" href="css/coffee320.css">
    <link rel="stylesheet" href="css/coffee1024px.css">
  <style>
    @font-face {
      font-family: 'HelveticaNeueCyr-Light';
      src: local('HelveticaNeueCyr-Light'), url('fonts/HelveticaNeue/HelveticaNeueCyr-Bold.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
    @font-face {
      font-family: 'BebasNeueBold';
      src: local('BebasNeueBold'), url('fonts/bebasneue/bebasneuebold.ttf') format('truetype'),
                                    url('fonts/bebasneue/BebasNeueCyrillicRegular.ttf') format('truetype'),
                                    url('fonts/bebasneue/bebasneueregular.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
    @font-face {
      font-family: 'MuseoSansCyrl';
      src: local('MuseoSansCyrl'), url('fonts/Museo/MuseoSansCyrl-300.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
  </style>
<body style="margin: 0px; padding: 0px">

<header class="header">
  <div class="banner-img">
      <picture>
          <source media="(max-width: 320px)" srcset="">
          <source media="(min-width: 601px) and (max-width: 1023px)" srcset="image/img1024/granos-cafe-768x4804.png">
          <source media="(min-width: 1024px)" srcset="image/img1024+/granos-cafe-768x4802.png">
          <img class="img-1" src="" alt="">
      </picture>

      <picture>
          <source media="(max-width: 320px)" srcset="">
          <source media="(max-width: 600px)" srcset="/image/img600/granos-cafe-768x4801.png">
          <source media="(min-width: 601px) and (max-width: 1023px)" srcset="image/img1024/granos-cafe-768x4803.png">
          <source media="(min-width: 1024px)" srcset="image/img1024+/granos-cafe-768x4801.png">
          <img class="img-2" src="image/img1024+/granos-cafe-768x4801.png" alt="Description">
      </picture>

      <picture>
          <source media="(max-width: 320px)" srcset="">
          <source media="(max-width: 600px)" srcset="image/img600/Тема3.png">
          <source media="(min-width: 601px) and (max-width: 1023px)" srcset="image/img1024/Тема2.png">
          <source media="(min-width: 1024px)" srcset="">
          <img class="img-3" src="image/img1024+/Тема%201.png" alt="Description">
      </picture>
  </div>

  <div class="header-div">
    <div class="english">
      <img class="img-5" src="image/img1024+/icons8-english-96%201.png">
      <b class="div-english">English</b>
    </div>

    <p class="header-p-1">Вкладывайте незначительные<br> деньги каждый день в копилку<br>своих знаний.</p>
      <div style="margin-top: 24px">
          <span class="header-span"> Следующий курс для вас будет <br>стоить всего </span>
        <span class="header-span-2"> <b>178 рублей в день<b></span>
      </div>

    <div class="custom-container">
      <div class="custom-box">
        <div class="date">01 <div class="month">Ноября <div class="info">Ближайший старт</div> </div> </div>
      </div>
      <div class="custom-box">
        <div class="date">21 <div><div class="month">Октября <div class="info">Конец акции</div> </div> </div> </div>
      </div>
    </div>

    <div   class="div-container" >
        <button class="btn scroll-btn" data-target="#block2">Узнать подробнее</button>
        <button class="btn2 scroll-btn" data-target="#block3">Бесплатная консультация</button>
    </div>
  </div>
</header>



<div>
  <div class="content-title">Выберите свой вариант обучения </div>
<div id="block2" class="div-course-container">
    <?php foreach ($info as $data):?>
    <div class="course-container">
      <div class="course-info">
        <div class="title"><?= $data['title'];?></div>
        <div class="percent">-<?= $data['promo_id'];?>%</div>
        <div class="price-current"><?= $data['price'];?>₽</div>
        <div class="price-original"><s style="color: #A7ACBF; text-decoration-color: #FF2222;"><?= $data['oldprice'];?> ₽</s></div>
        <div class="duration"><img class="img-content" src="image/img1024+/Vector%2015.svg" ><?= $data['months'];?></div>
        <div class="features">
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Грамматическая выжимка</div>
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Разговорный тренажёр</div>
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Слова с ассоциациями</div>
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Регулярные мини-задания</div>
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Персональный куратор</div>
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Сертификат об обучении</div>
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Best Teachers</div>
          <div class="feature"><img class="img-content" src="image/img1024+/Vector%2015.svg" >Звонки от Second Teacher</div>
        </div>
        <div class="divider"></div>
        <div class="additional-info">
          <div class="label">Предоплата</div>
          <div class="price"><?= $data['prepay'];?> ₽</div>
        </div>
        <button class="payment-button"><b><?= $data['link_ru'];?></b></button>
        <button class="payment-button"><b><?= $data['link_en'];?></b></button>
      </div>
    </div>
  </div>
    <?php endforeach;?>
</div>

  <div class="banner">
    <div class="banner-txt"> Подарок</div>
        <div class="banner-txt2">
              <b>Спецкурс</b> "Английский для эмиграции"<br>
              <b>Спецкурс</b>"Как преодолеть языковой барьер"
        </div>
    <div style="margin:0px 0px 271px 0px; position: absolute"><img src="image/img1024+/granos-cafe-768x480%204.png"></div>
    <div style="margin: 0px 0px 97px 783px; position: absolute"> <img  src="image/img1024+/Bant1.png"></div>
    <div style="margin: 42px 658px 92px 260px; position: absolute"><img src="image/img1024+/Тема%202%209.png"></div>
    <div  class="plus" style="margin:102px 840px 101px 184px ; position: absolute"></div>
    <div style="margin:101px 900px 33px 18px ; position: absolute"><img src="image/img1024+/Тема%202%2010.png"></div>
    <div style="margin: 0px 0px 0px 783px ; position: absolute"><img style="border-radius:20px" src="image/img1024+/granos-cafe-768x480%203.png"></div>
    <div style="border-radius: 20px">
      <svg  style="border-radius: 20px" width="477" height="361" viewBox="0 0 477 361" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="-78.6191" y="-154" width="619" height="707" rx="70" transform="rotate(21.523 -78.6191 -154)" fill="url(#paint0_linear_0_297)"/>
      <defs>
        <linearGradient id="paint0_linear_0_297" x1="526.405" y1="-135.692" x2="230.881" y2="553" gradientUnits="userSpaceOnUse">
          <stop stop-color="#2E2F0B"/>
          <stop offset="1" stop-color="#8C8E08" stop-opacity="0"/>
        </linearGradient>
      </defs>
    </svg>
    </div>
  </div>
    <div class="responsive-image">
        <picture>
            <source media="(max-width: 600px)" srcset="image/img1024/banner.png">
            <source media="(min-width: 601px) and (max-width: 1023px)" srcset="image/img1024/banner1024.png">
            <img class="responsive-image" src="image/img1024/banner1024.png" alt="Description">
        </picture>
    </div>



<!--ниже приведенный код футер -->
<div id="block3" class="footer-div">
  <div class="footer-div-2">Еще думаете?</div>
  <div class="footer-div-3">Записывайтесь на бесплатный урок и попробуйте сами, это поможет<br> принять решение</div>
  <form action="php/bd.php" method="post">
      <input type="text" name="name"   class="footer-input"   placeholder="Введите ваше имя"><br>
      <input type="text" name="phone"  class="footer-input"  placeholder="Введите ваш телефон"><br>
      <input type="email" name="email" class="footer-input" placeholder="Введите ваш email"><br>
      <button type="submit" class="footer-btn"> Записаться </button>
  </form>
  <div class="footer-div-4">Нажимая на кнопку, вы даете согласие на обработку персональных<br> данных и соглашаетесь с политикой конфиденциальности</div>
</div>

<footer class="footer">
  <div style="text-align: center; color: #FFFFFF">
      <div class="english-2">
        <img class="img-4" src="image/img1024+/icons8-english-96%202%20(1).png"/><div class="div-english2" style="margin-top: 22px; margin-left: 4px"><b>English</b></div>
      </div>

      <div class="footer-div-txt">
            2015 - 2021 © English. Все права защищены.<br>
            Политика конфиденциальности<br>
            Соглашение об обработке персональных данных
      </div>
      <div class="footer-div-txt2">
          ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, ул. Улица, д. 0/00 лит. 0, пом. 0<br>
          ОГРН: 000000000000 | ИНН: 000000000 | КПП: 000000000
      </div>

    <div class="icon">
        <a style="margin-right: 14px; position:relative; top:-5px"> <img src="image/img1024+/vk_red%20copy.svg"></a>
        <a style="top:-100px"> <img src="image/img1024+/bxl_telegram.svg"></a>
    </div>
  </div>

</footer>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>

<script>
  $(document).ready(function () {
    // Скроллинг к блоку
    $(".scroll-btn").click(function () {
      var target = $($(this).data("target"));
      $("html, body").animate({
        scrollTop: target.offset().top
      }, 800);
    });

    // Загрузка цен из базы данных
    $.ajax({
      url: "load_prices.php", // Замените на ваш путь к файлу загрузки цен
      type: "GET",
      dataType: "json",
      success: function (data) {
        displayPrices(data);
      },
      error: function () {
        console.error("Failed to load prices");
      }
    });
  });
</script>

