<?php 
    define('Ywhhqehqs2e123', true);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="yandex-verification" content="0bbf4332dd733548" />
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/style.css" />
    <title>Gamezone</title>
    <link rel="shortcut icon" href="./img/logotip.ico" />
  </head>
  <body>

    <header class="header">
      <div class="conteiner">
        <div class="header-wrapper">
          <div class="logo">
            <img src="./img/logotip.png" alt="" />
          </div>
          <nav class="navigation">
            <ul class="navigation-list">
              <li class="navigation-list__item"><a href="#club">О клубе</a></li>
              <li class="navigation-list__item"><a href="#price">Цены</a></li>
              <li class="navigation-list__item">
                <a href="#specifications">Характеристики</a>
              </li>
              <li class="navigation-list__item"><a href="#games">Игры</a></li>
              <li class="navigation-list__item">
                <a href="#contacts">Контакты</a>
              </li>
            </ul>
          </nav>

          <div class="header-numder">
            <i class="fa-solid fa-phone-volume"></i> +375-(44)-XXX-XX-XX
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </header>
    <section class="start">
        <div class="conteiner conteiner-start">
         <div class='start-indentation'></div>
        <svg  viewBox="0 0 960 300">
    <symbol id="s-text">
      <text text-anchor="middle" x="50%" y="80%">Gamezone</text>
    </symbol>

    <g class = "g-ants">
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
      <use xlink:href="#s-text" class="text-copy"></use>
    </g>
  </svg>
        <div class="club-button">Start to play</div>
        </div>
    </section>
    <section class="club">
      <div class="conteiner">
        

        <h2 class="title-club title" id="club">Игра начинается</h2>
        <p class="club-text">
          Первая киберспортивная АРЕНА в Новогрудке, в которой слово «сервис»
          стоит на первом месте! Мы хотим, чтобы вы были для нас не просто
          гостем, а частью нашего Community. Для этого мы создали команду,
          которая в первую очередь заботится о Вас, старается учесть все ваши
          предпочтения и пожелания.
        </p>
      </div>
      <div class="image-slider swiper-container">
        <div class="image-slider__wrapper swiper-wrapper">
          <div class="image-slider__slide swiper-slide">
            <div class="image-slaider__image">
              <img src="./img/swiper/1.jpg" alt="#" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-slaider__image">
              <img src="./img/swiper/2.jpg" alt="#" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-slaider__image">
              <img src="./img/swiper/3.jpg" alt="#" />
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </section>
    <section class="price">
      <div class="conteiner">
        <h2 class="title-price title" id="price">Стоимость</h2>
        <div class="price-panel">
          <div class="price-panel-text">Время посещения</div>
          <div class="price-panel-text">Общий</div>
        </div>
        <div class="price-tabl">
          <div class="price-tabl-title">09:00-12:00</div>
          <div class="price-tabl-text">3 руб.</div>
          <div class="price-tabl-title">Пакет утро 3 часа </div>
          <div class="price-tabl-text">7 руб.</div>
          <div class="price-tabl-title">12:00-23:00</div>
          <div class="price-tabl-text">4 руб.</div>
          <div class="price-tabl-title">Пакет вечер 3 часа </div>
          <div class="price-tabl-text">10 руб.</div>
          <div class="price-tabl-title">Пакет вечер 5 часов</div>
          <div class="price-tabl-text">17 руб.</div>
        </div>
      </div>
    </section>
    <section class="specifications">
      <div class="conteiner">
        <h2 class="title-specifications title" id="specifications">
          Оборудование
        </h2>
        <div class="specifications-tabl">
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/monitor.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Монитор</h3>
              <p class="specifications-text__info">LG UltraGear 24GN60R-B</p>
            </div>
          </div>
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/videokarta.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Видеокарта</h3>
              <p class="specifications-text__info">GEFORCE gtx 1080ti</p>
            </div>
          </div>
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/processor.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Процессор</h3>
              <p class="specifications-text__info">AMD Ryzen 5 5600</p>
            </div>
          </div>
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/ozu.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Оперативная память</h3>
              <p class="specifications-text__info">G.Skill Ripjaws V 2x8GB</p>
            </div>
          </div>
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/mouse.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Мышь</h3>
              <p class="specifications-text__info">Logitech G102 Lightsync</p>
            </div>
          </div>
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/keyboard.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Клавиатура</h3>
              <p class="specifications-text__info">
              Redragon Kumara Pro
              </p>
            </div>
          </div>
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/headphones.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Наушники</h3>
              <p class="specifications-text__info">HyperX Cloud Stinger 2 Core</p>
            </div>
          </div>
          <div class="specifications-info">
            <div class="specifications-img">
              <img src="./img/svg/chair.svg" alt="#" />
            </div>
            <div class="specifications-text">
              <h3 class="specifications-text__title">Кресло</h3>
              <p class="specifications-text__info">Zombie Game Penta</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="games">
      <div class="conteiner">
        <h2 class="title-games title" id="games">Игры</h2>
        <div class="games-wrapper">
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/Dota 2.jpg" alt="#" />
            </div>
            <div class="games-name">Dota 2</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/rust.webp" alt="#" />
            </div>
            <div class="games-name">Rust</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/Forza Horizon 5.png.webp" alt="#" />
            </div>
            <div class="games-name">Forza Horizon 5</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/Apex-330x450.png" alt="#" />
            </div>
            <div class="games-name">Apex</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/GTA-5-330x450.jpeg" alt="#" />
            </div>
            <div class="games-name">GTA 5</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/overwatch.jpg" alt="#" />
            </div>
            <div class="games-name">overwatch</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/pubg.jpg" alt="#" />
            </div>
            <div class="games-name">Pubg</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/wow-330x450.jpg" alt="#" />
            </div>
            <div class="games-name">Wow</div>
          </div>
          <div class="games-card">
            <div class="games-img">
              <img src="./img/games/Ведьмак-330x450.jpg" alt="#" />
            </div>
            <div class="games-name">Ведьмак</div>
          </div>
        </div>
      </div>
    </section>
    <div class="modals">
      <div class="modal-overlay">
        <div class="modal">
          <h2 class="modal-title">
            Оставляйте заявку прямо сейчас и вам перезвонят
          </h2>
          <div class="modal-response">
            Данные успешно отправлены. В скором времени мы свами свяжемся.
          </div>
          <div class="modal-wrapper-info">
          <div class="modal-info">
            <p class="modal-text">Имя</p>
            <input type="text" class="modal-input _req input-name" required />
          </div>
          <div class="modal-info">
            <p class="modal-text">Номер</p>
            <input value="" class="modal-input _req input-number" required />
          </div>
          </div>
          
          <div class="modal-button">Отправить заявку</div>
          <p class="modal-bid">
            Отправляя заявку вы даете своё согласие на обработку <br />
            <a
              href="https://pravo.by/novosti/novosti-pravo-by/2022/november/72150/"
              >своих персональных данных</a
            >
          </p>
        </div>
      </div>
    </div>
    <div class="burgers">
      <div class="burger-overlay">
        <div class="burger">
          <i class="fa-solid fa-xmark"></i>
          <nav class="navigation-burger">
            <ul class="navigation-list-burger">
              <li class=" navigation-list__item__burger">
                <a href="#club">О клубе</a>
              </li>
              <li class=" navigation-list__item__burger">
                <a href="#price">Цены</a>
              </li>
              <li class=" navigation-list__item__burger">
                <a href="#specifications">Характеристики</a>
              </li>
              <li class=" navigation-list__item__burger">
                <a href="#games">Игры</a>
              </li>
              <li class=" navigation-list__item__burger">
                <a href="#contacts">Контакты</a>
              </li>
             
            </ul>
          </nav>
          <div class="contacts-social contacts-social-burger ">
          <a href="https://www.instagram.com/gamezone.novo/?igshid=OGQ5ZDc2ODk2ZA%3D%3D"><i class="fa-brands fa-instagram"></i> </a>
          <a href="https://vk.com/gamezone.novo4"> <i class="fa-brands fa-vk"></i></a>
        
        </div>
        </div>
      </div>
    </div>
    <footer class="contacts">
      <div class="conteiner">
        <h2 class="title-contacts title" id="contacts">Контакты</h2>
        <div class="contacts-wrapper">
          <div class="contacts-address">
            <h3 class="contacts-title">Адрес</h3>
            <p class="contacts-text">
              <i class="fa-solid fa-location-dot"></i> улица Мицкевича 104
              <br> корпус 1 2 этаж
            </p>
          </div>
          <div class="contacts-address">
            <h3 class="contacts-title">Телефон</h3>
            <p class="contacts-text">
              <i class="fa-solid fa-phone-volume"></i> +375-(44)-ХХХ-ХХ-ХХ
            </p>
          </div>
          <div class="contacts-address">
            <h3 class="contacts-title">E-mail</h3>
            <p class="contacts-text">
              <i class="fa-regular fa-envelope"></i> Gamezone@gmail.com
            </p>
          </div>
          <div class="contacts-address">
            <h3 class="contacts-title">Время работы</h3>
            <p class="contacts-text">
              <i class="fa-regular fa-clock"></i> 09:00 - 23:00
            </p>
          </div>
        </div>
        <div class="contacts-social">
          <a href="https://www.instagram.com/gamezone.novo/?igshid=OGQ5ZDc2ODk2ZA%3D%3D"><i class="fa-brands fa-instagram"></i> </a>
          <a href="https://vk.com/gamezone.novo4"> <i class="fa-brands fa-vk"></i></a>
        
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
