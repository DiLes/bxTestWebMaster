<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;

global $APPLICATION, $USER;

IncludeTemplateLangFile(__FILE__);
$curPage = $APPLICATION->GetCurPage(false);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?$APPLICATION->ShowHead();?>
    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/stylesheets/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/stylesheets/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/stylesheets/screen.css");
    // <!--[if IE]>
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/stylesheets/ie.css");
    // <![endif]-->
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/slick/slick.css");

    // <!--[if lt IE 9]>
    Asset::getInstance()->addJs("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js");
    Asset::getInstance()->addJs("https://oss.maxcdn.com/respond/1.4.2/respond.min.js");
    // <![endif]-->
//    Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?lang=ru_RU");
    Asset::getInstance()->addJs("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/slick/slick.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js");

    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="page">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 no-padding contacts-column">
                    <div class="contact-content">
                        <div class="contacts-wrap address">
                            <div class="title">Адрес</div>
                            <div class="contact">г. Тула, ул. Октябрьская, 6</div>
                        </div>
                        <div class="contacts-wrap mail">
                            <div class="title">Почта</div>
                            <div class="contact">lesa71@mail.ru</div>
                        </div>
                        <div class="contacts-wrap phone">
                            <div class="title">Телефон</div>
                            <div class="contact">+7 800 700-8000</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 no-padding call-column">
                    <a href="#" class="call upper">заказать звонок</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 no-padding"><div class="logo">ЛЕСА<span>. 71</span></div></div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 no-padding">
                    <menu>
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">О компании</a></li>
                            <li class="active"><a href="#">Услуги и цены</a></li>
                            <li><a href="#">Фотогалерея</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </menu>
                </div>
            </div>
        </div>
    </header>
    <div class="slider">
        <div>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/slide-1.png" />
            <div class="container">
                <div class="text-wrap upper">
                    <h2>профессиональные строительные леса</h2>
                    <h1 class="black">аренда и продажа</h1>
                </div>
            </div>
        </div>
        <div>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/slide-2.png" />
            <div class="container">
                <div class="text-wrap upper">
                    <h2>строительные леса б/у</h2>
                    <h1>быстро. качественно.</h1>
                </div>
            </div>
        </div>
        <div>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/slide-3.png" />
            <div class="container">
                <div class="text-wrap upper third">
                    <h2>аренда строительных лесов</h2>
                    <h1>аренда вышки туры</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-content">
            <div class="sidebar-left upper">
                <ul>
                    <li><a href="#">аренда<br>строительных лесов</a></li>
                    <li class="active"><a href="#">продажа<br>строительных лесов</a></li>
                    <li><a href="#">леса<br>строительные б/у</a></li>
                    <li><a href="#">аренда вышки туры</a></li>
                </ul>
            </div>
            <div class="content-wrapper">
                <h1>Ваш шедевр готов!</h1>
                <p>Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности требуют от нас анализа соответствующий условий активизации. С другой стороны укрепление и развитие структуры влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения новых предложений.</p>
                <p>Равным образом реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. Равным образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи! постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает создание новых предложений.</p>
                <p>Равным образом реализация намеченных плановых заданий играет важную роль в формировании соответствующий условий активизации. Таким образом постоянный количественный рост и сфера нашей.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="areas-of-use">
        <div class="container">
            <h1>Области применения</h1>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 constraction red"><i></i><a href="#">Строительство</a></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 rails"><i></i><a href="#">Железные дороги</a></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 aviation red"><i></i><a href="#">Авиация</a></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 industrial"><i></i><a href="#">Промышленные объекты</a></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 shipbuilding red"><i></i><a href="#">Кораблестроение</a></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 highway"><i></i><a href="#">Авто дороги</a></div>
            </div>
        </div>

