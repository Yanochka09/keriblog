<?
$path=$_SERVER['DOCUMENT_ROOT'];
require_once "system/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<? include_once "$path/privat/head.php"; ?>
<body>
<? include_once "$path/privat/header.php"; ?>
<nav class="nav_blog">
        <div class="container">
            <div class="nav_navigation">
                <div class="header-burger">
                    <span></span>
                </div>
                <div class="list_aboutMe">
                <a class="nav_link" href="/navigation/price.php">Прайс</a>
                </div>
                <div class="blog_list">
                    <a class="nav_link" href="/navigation/astrology.php">Астрология</a>
                    <a class="nav_link" href="/navigation/women.php">Женский круг</a>
                    <a class="nav_link" href="/navigation/chakranumerology.php">ЧакроНумерология</a>
                    <a class="nav_link" href="/navigation/videobusinesscard.php">Видеовизитка</a>
                </div> 
            </div>
        </div>
</nav>
<!-- section -->
<section class="section">
    <div class="container">
        
        <div class="section_aboutme">
            <div class="aboutme_left">
                <img class="img_aboutme" src="/img/main1.jpg" alt="">
            </div>
            <div class="aboutme_right">
                <h3>Приветствую! <br> 
                <br> Меня зовут Карина.<br> 
                <br> Я астролог, чакронумеролог и ведущая женских кругов.<br> </h3>
                <p>"Подобное притягивает подобное", знакомая фраза?! <br>
                <br>Я искренне верю в это выражение и хочу подробнее рассказать о себе, о своих увлечениях , тем самым "притянуть к себе" близких мне по духу людей! </p>
            </div>
        </div>
    </div>
</section>  

<section class="interest">
<div class="container">
<div class="section_bottom__text">
            <h3 class="text_heading"><br>Будем дружить , если тебе откликаются сферы моих интересов : </h3>
                
                <div class="text_description">
                    <a class="nav_link" href="/navigation/astrology.php">
                    <div> <img class="img_description" src="/img/chakra-num.jpg" alt="">
                    <p class="description">Западная и лунная астрология</p>
                    </div>
                    </a>
                    <a class="nav_link" href="/navigation/chakranumerology.php">
                    <div><img class="img_description" src="/img/chakra.jpg" alt="">
                    <p class="description">ЧакроНумерология</p></div>
                    </a>
                    <a class="nav_link" href="/navigation/women.php">
                    <div><img class="img_description" src="/img/sectionright2.jpg" alt=""><p class="description">Женские круги <br>(Таганрог и Буденновск)</p></div>
                    </a>
                </div>
                <div class="text_poster">
                <a class="nav_link" href="/navigation/poster.php">
                    <div><img class="img_description" src="/img/poster.jpg" alt=""></div>
                    </a>

                </div>
                <div class="aboutme_bottom">
                    <h3 class="text_heading">Остались вопросы?</h3>
                    <a href="https://t.me/keri_blog"><button class="buttom_contact">Свяжись со мной!</button></a>
                </div>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- end section -->


<main class="main">
    <div class="container">
        <div class="main-content">
                    <h3> Мои девочки - самые счастливыe! 
                        <br>
                        Я жду тебя в свою команду!
                    </h3>
        </div>
        <div class="main_slick">

            <div class="main_slide">
                <a href="/img/slide/sl1.jpg"><img class="img_slide" src="/img/slide/sl1.jpg" alt="slide"> </a>
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl2.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl3.jpg" alt="slide">
            </div>
            
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl4.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl5.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl6.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl7.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl8.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl9.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl10.jpg" alt="slide">
            </div>
            <div class="main_slide">
                <img class="img_slide" src="/img/slide/sl11.jpg" alt="slide">
            </div>
        </div>
     </div>
</main>
<? include_once "$path/privat/footer.php"; ?>
<script src="/slick/jquery.min.js"></script>
<script src="/slick/jquery-migrate.min.js"></script>
<script src="/slick/slick.min.js"></script>
<script src="/js/index.js"></script>
</body>
</html>