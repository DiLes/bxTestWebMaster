<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<footer>
    <div class="container">
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
    </div>
</footer>
</div>
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    function init() {
        var map = new ymaps.Map("map", {
            center: [54.209107, 37.620142],
            zoom: 15,
            controls: ['largeMapDefaultSet']
        });
        var placemark = new ymaps.Placemark([54.209107, 37.620142], {
            balloonContentBody: 'г. Тула, ул. Октябрьская, 30',
            placemarkName: 'корпус 6, офис 407'
        });
        map.geoObjects.add(placemark);
    }
</script>

</body>
</html>
