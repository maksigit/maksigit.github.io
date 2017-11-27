<?php
if (isset($_POST["send"])) {
    //var_dump($_POST);

    $from = htmlspecialchars($_POST["from"]);
    $email = htmlspecialchars($_POST["email"]);
    $mes = htmlspecialchars($_POST["mes"]);

    $_SESSION["from"] = $from;
    $_SESSION["email"] = $email;
    $_SESSION["mes"] = $mes;

    $error_from = "";
    $error_email = "";
    $error_mes = "";
    $error = false;
    if ($from == "") {
        $error_from = "Введите имя";
        $error = true;
    }
    if ($email == "") {
        $error_email = "Введите Email";
        $error = true;
    }
    if (strlen($mes) == 0) {
        $error_mes = "Введите Сообщение";
        $error = true;
    }
    if (!$error) {
        $headers = "From: $email" . "\r\n";
        $message = "Name: $from" . "\r\n" . "message: $mes";
        mail("maksi123p@gmail.com", "hi)", $mes, $headers);

        //exit;
    }
    header('location: mail.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brick City</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Playfair+Display|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/libs/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/libs/owl.theme.default.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/all.css">
</head>
<body>
<header class="main-header">
    <div class="container-header-top">
        <a href="#" class="wrap-logo"> Brick City </a>
        <nav class="main-nav">
            <ul>
                <li><a href="#home" class="active-top hide">ГЛАВНАЯ</a></li>
                <li><a href="#about" class="hide">О НАС</a></li>
                <li><a href="#expertise" class="hide">ПРЕИМУЩЕСТВА</a></li>
                <li><a href="#work" class="hide">ГАЗОБЕТОН</a></li>
                <li><a href="#contact" class="hide">КОНТАКТЫ</a></li>
            </ul>
        </nav>
        <div class="gamberger"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
    </div>
    <div class="container-header-bottom" id="home">
        <div>
            <h1>We Are Awesome Creative Agency</h1>
            <div class="dash"></div>
            <div class="text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                aliquet. Aenean
                sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
            </div>

            <a href="tel:+38055 555 55 55" class="phone">
                <i class="fa fa-phone" aria-hidden="true"></i>
                +38055 555 55 55
            </a>
        </div>
    </div>

</header>

<main>
    <div class="our-story" id="about">
        <div class="wrap-img">
            <img src="images/replace-with-your-logo.png" alt="">
        </div>
        <div class="wrap-story">
            <div class="title">НАША ИСТОРИЯ</div>
            <div class="text">
                This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                sollicitudin, <a href="#">lorem quis</a> bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                nibh id elit. Duis
                sed odio sit amet nibh vulputate cursus  
            </div>
            <div class="text">
                Morbi accumsan ipsum velit. <a href="">Nam nec tellus</a> a odio tincidunt
                auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti
                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </div>
            <a class="btn btn-default" href="#">Learn more</a>
        </div>
    </div>
    <div class="container-expertise" id="expertise">
        <div class="title">ПРЕИМУЩЕСТВА ГАЗОБЕТОНА <span class="aeroc">AEROC</span></div>
        <div class="dash"></div>
        <div class="wrap-item">
            <div class="item ">
                <i class="fa fa-usd fa-2x" aria-hidden="true"></i>
                <div class="title">ЭКОНОМИЧНОСТЬ</div>
                <div class="text">Экономия на утеплении</div>
            </div>
            <div class="item ">
                <i class="fa fa-thermometer-full fa-2x" aria-hidden="true"></i>
                <div class="title">ТЕПЛОИЗОЛЯЦИЯ</div>
                <div class="text">Сохраняет максимум тепла благодаря пористой структуре</div>
            </div>
            <div class="item">
                <i class="fa fa-steam fa-2x" aria-hidden="true"></i>
                <div class="title">ПРОЧНОСТЬ</div>
                <div class="text">Высокий класс прочности на сжатие (B2,5 и выше)</div>
            </div>
            <div class="item ">
                <i class="fa fa-fire-extinguisher fa-2x" aria-hidden="true"></i>
                <div class="title">ОГНЕСТОЙКОСТЬ</div>
                <div class="text">Относится к I классу огнестойкости</div>
            </div>
            <div class="item ">
                <i class="fa fa-leaf fa-2x" aria-hidden="true"></i>
                <div class="title">ЭКОЛОГИЧНОСТЬ</div>
                <div class="text">Не содержит вредных и токсичных веществ</div>
            </div>
            <div class="item">
                <i class="fa fa-gavel fa-2x" aria-hidden="true"></i>
                <div class="title">ОБРАБОТКА</div>
                <div class="text">Не требует сложного инструмента для строительства и отделки
                </div>
            </div>
            <div class="item">
                <i class="fa fa-snowflake-o fa-2x" aria-hidden="true"></i>
                <div class="title">МОРОЗОСТОЙКОСТЬ</div>
                <div class="text">Повышенная степень морозостойкости (не менее F25)</div>
            </div>
            <div class="item">
                <i class="fa fa-sort fa-2x" aria-hidden="true"></i>
                <div class="title">МАЛАЯ УСАДКА</div>
                <div class="text"> Согласно ДСТУ Б В.2.7 - 137: 2008 и составляет 0,3 мм / м</div>
            </div>
            <div class="item">
                <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                <div class="title">ЛЕГКОСТЬ</div>
                <div class="text">В четыре раза легче кирпича</div>
            </div>
            <div class="item">
                <i class="fa fa-mixcloud fa-2x" aria-hidden="true"></i>
                <div class="title">ДЫШИТ</div>
                <div class="text">Способствует хорошей циркуляции воздуха</div>
            </div>
            <div class="item">
                <i class="fa fa-hourglass fa-2x" aria-hidden="true"></i>
                <div class="title">ДОЛГОВЕЧНОСТЬ</div>
                <div class="text">Долговечность стен из газобетона больше 100 лет</div>
            </div>
            <div class="item">
                <i class="fa fa-volume-up fa-2x" aria-hidden="true"></i>
                <div class="title">ЗВУКОИЗОЛЯЦИЯ</div>
                <div class="text">Соответствует нормам СНиП П-12-77 «Защита от шума»</div>
            </div>
        </div>
    </div>
    <div class="wrap-works" id="work">
        <div class="title">ГАЗОБЕТОН <span class="aeroc">AEROC</span></div>
        <div class="dash"></div>
    </div>
    <div class="wrap-more-img">
        <div class="wrap-img">
            <div class="wrap-img-op">
                <img src="images/aeroc-d400-obuhov.jpg" alt="aeroc">
                <div class="opasiti"></div>
                <div class="myproject">AEROC</div>
            </div>
            <div class="text">Aeroc D300 (Березань)
                <select class="size-prod">
                    <option>300х200х600</option>
                    <option>375х200х600</option>
                </select>
            </div>
            <div class="price">1295 грн/м.куб</div>
        </div>
        <div class="wrap-img">
            <div class="wrap-img-op">
                <img src="images/aeroc-d400-obuhov.jpg" alt="aeroc">
                <div class="opasiti">
                </div>
                <div class="myproject">AEROC</div>
            </div>
            <div class="text">Aeroc D400 (Березань)
                <select class="size-prod">
                    <option>300х200х600</option>
                    <option>280х200х600</option>
                    <option>375х200х600</option>
                    <option>400х200х600</option>
                </select>
            </div>
            <div class="price">1295 грн/м.куб</div>
        </div>
        <div class="wrap-img">
            <div class="wrap-img-op">
                <img src="images/aeroc-d400-obuhov.jpg" alt="aeroc">
                <div class="opasiti">
                </div>
                <div class="myproject">AEROC</div>
            </div>
            <div class="text">Aeroc D500 (Березань)
                <select class="size-prod">
                    <option>300х200х600</option>
                    <option>250х200х600</option>
                </select>
            </div>
            <div class="price">1295 грн/м.куб</div>
        </div>
        <div class="wrap-img">
            <div class="wrap-img-op">
                <img src="images/aeroc-d400-obuhov.jpg" alt="aeroc">
                <div class="opasiti">
                </div>
                <div class="myproject">AEROC</div>
            </div>
            <div class="text">Aeroc D300 (Обухов)
                <select class="size-prod">
                    <option>300х200х600</option>
                    <option>400х200х600</option>
                    <option>300х250х600</option>
                    <option>375х250х600</option>
                    <option>400х250х600</option>
                    <option>75х250х600</option>
                </select>
            </div>
            <div class="price">1320 грн/м.куб</div>
        </div>
        <div class="wrap-img">
            <div class="wrap-img-op">
                <img src="images/aeroc-d400-obuhov.jpg" alt="aeroc">
                <div class="opasiti">
                </div>
                <div class="myproject">AEROC</div>
            </div>
            <div class="text">Aeroc D400 (Обухов)
                <select class="size-prod">
                    <option>400х200х600</option>
                    <option>200х250х600</option>
                    <option>200х280х600</option>
                    <option>300х250х600</option>
                    <option>375х250х600</option>
                    <option>400х250х600</option>
                    <option>75х250х600</option>
                </select>
            </div>
            <div class="price">1320 грн/м.куб</div>
        </div>
        <div class="wrap-img">
            <div class="wrap-img-op">
                <img src="images/aeroc-d400-obuhov.jpg" alt="aeroc">
                <div class="opasiti">
                </div>
                <div class="myproject">AEROC</div>
            </div>
            <div class="text">Aeroc D500 (Обухов)
                <select class="size-prod">
                    <option>300х200х600</option>
                    <option>100x250x600</option>
                    <option>100x288x600</option>
                    <option>150x288x600</option>
                    <option>400x200x600</option>
                    <option>200x250x600</option>
                    <option>300x250x600</option>
                    <option>375x250x600</option>
                    <option>400x250x600</option>
                </select>
            </div>
            <div class="price">1320 грн/м.куб</div>
        </div>
    </div>
    <div class="wrap-jane" id="jane">
        <div class="container-jane">
            <div class="owl-carousel owl-carousel-bottom">
                <div class="item">
                    <div class="wrap-img"><img
                                src="https://img.elephantjournal.com/wp-content/uploads/2017/06/layla-el-khadri.jpg"
                                alt=""></div>
                    <div class="text-2">JANE GALADRIEL</div>
                    <div class="text-3">CEO TENGKUREP</div>
                    <div class="text">
                        <div class="text-1">“</div>
                        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                        sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum
                        velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                        auctor eu
                        in elit.
                    </div>
                </div>
                <div class="item">
                    <div class="wrap-img"><img
                                src="https://s3-media2.fl.yelpcdn.com/bphoto/R6hI5GEKN_FucwkTZl0wbA/ls.jpg"
                                alt=""></div>
                    <div class="text-2">JANE GALADRIEL</div>
                    <div class="text-3">CEO TENGKUREP</div>
                    <div class="text">
                        <div class="text-1">“</div>
                        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                        sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum
                        velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                        auctor eu
                        in elit.
                    </div>
                </div>
                <div class="item">
                    <div class="wrap-img"><img
                                src="https://img.elephantjournal.com/wp-content/uploads/2017/06/layla-el-khadri.jpg"
                                alt=""></div>
                    <div class="text-2">JANE GALADRIEL</div>
                    <div class="text-3">CEO TENGKUREP</div>
                    <div class="text">
                        <div class="text-1">“</div>
                        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                        sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum
                        velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                        auctor eu
                        in elit.
                    </div>
                </div>
                <div class="item">
                    <div class="wrap-img"><img
                                src="https://emergingwomen.com/wp-content/themes/ew/assets/img/page-about/presenter_chantal_pierrat.jpg"
                                alt=""></div>
                    <div class="text-2">JANE GALADRIEL</div>
                    <div class="text-3">CEO TENGKUREP</div>
                    <div class="text">
                        <div class="text-1">“</div>
                        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                        sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum
                        velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                        auctor eu
                        in elit.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pre-footer">
        <div class="pre-form">
            <div class="title">ПРЕДЛОЖЕНИЯ И ПОЖЕЛАНИЯ</div>
            <form action="" method="post">
                <input type="text" name="from" placeholder="Имя">
                <span><?php echo $error_from ?></span>
                <input type="email" name="email" placeholder="Email">
                <span><?php echo $error_email ?></span>
                <textarea rows="10" cols="45" name="mes"
                          placeholder="Пишите нам :)"></textarea>
                <span><?php echo $error_mes ?></span>
                <button class="btn btn-default" type="submit" name="send">Отправить</button>
            </form>
        </div>
    </div>
</main>
<footer>
    <div class="container-footer" id="contact">
        <div class="footer-top">
            <div class="first">
                <a href="#" class="wrap-logo">
                    Brick City
                </a>
                <div class="text">lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit.
                    Duis sed odio sit amet auctror a ornare odio non mauris vitae erat in elit
                </div>
            </div>
            <div class="second">
                <div class="title">Наш Адресс:</div>
                <div class="wrap-img-title">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="text">Ruko cucruk, Jl. Radio luar dalem jos No.12 - 13, Kalideres - Jakarta Barat 11480
                        -
                        Indonesia
                    </div>
                </div>
                <div class="wrap-img-title-second">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div class="text">(+62) 21-2224 3333
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="toTop"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/owl.carousel.min.js"></script>
<script src="scripts/main.js"></script>
<script src="scripts/gamburger.js"></script>
<script src="scripts/pop-up.js"></script>
</body>
</html>