<?php
    require_once("header.php");
?>
<main id="main">
    <section class="corousel_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Мы очень эффективны</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Тут мы еще эффективней</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Ну здесь вы уже без денег</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="our-services-container">
        <h1 class="our-service-title">Наши услуги</h1>
        <div class="our-service our-service-1">
            <div class="views-field-field-service-icon">
                <img src="img/hands.png">
            </div>
            <h2 class="views-field-title">ПОКУПКА ЗАДОЛЖЕННОСТИ ПО КРЕДИТАМ ФИЗИЧЕСКИХ И ЮРИДИЧЕСКИХ ЛИЦ</h2>
            <p class="info-our-service">Основным направлением деятельности компании "Форвард" является приобретение прав требований, возникающих из кредитных договоров, заключенных первоначальным кредитором (продавцом) как с физическими, так и с юридическими лицами.</p>
        </div>
        <div class="our-service our-service-2">
            <div class="views-field-field-service-icon">
                <img src="img/hands.png">
            </div>
            <h2 class="views-field-title">ВЗЫСКАНИЕ ЗАДОЛЖЕННОСТИ ПО АГЕНТСКОЙ СХЕМЕ</h2>
            <p class="info-our-service">Компания "Форвард" предоставляет полный комплекс услуг по взысканию задолженности в рамках агентского договора.</p>
        </div>
        <div class="our-service our-service-3">
            <div class="views-field-field-service-icon">
                <img src="img/hands.png">
            </div>
            <h2 class="views-field-title">ДОСУДЕБНОЕ ВЗЫСКАНИЕ</h2>
            <p class="info-our-service">Soft-collection  - дистанционное взыскание задолженности;
                Field-collection - выездное взыскание задолженности на досудебной стадии.</p>
        </div>
        <div class="our-service our-service-4">
            <div class="views-field-field-service-icon">
                <img src="img/hands.png">
            </div>
            <h2 class="views-field-title">CУДЕБНОЕ ВЗЫСКАНИЕ</h2>
            <p class="info-our-service">Legal-collection - представительство в суде и сопровождение процедуры исполнительного производства.</p>
        </div>
    </section>
    <section class="company-info">
        <h2>о компании</h2>
        <p>Компания "Форвард" создана в 2014 году в г. Новосибирске и предоставляет полный комплекс услуг по взысканию задолженности физических и юридических лиц. Основная специализация - покупка портфелей проблемных кредитов. Менеджеры компании имеют более чем 10 летний опыт работы на рынке взыскания задолженности и в крупных розничных банках.</p>
    </section>
    <section class="documents-container">
        <div class="documents-content">
            <figure>
                <a href="documents/svo.pdf" target="_blank">
                    <img src="img/svo.png">
                </a>
                <a href="documents/svo.pdf" class="title-docks" target="_blank">Свидетельство о включении в Реестр юридических лиц, осуществляющих деятельность по возврату просроченной задолженности
                </a>
            </figure>
            <figure>
                <a href="documents/politicks.pdf" target="_blank">
                    <img src="img/politicks.png">
                </a>
                <a href="documents/svo.pdf" class="title-docks" target="_blank">Политика персональных данных</a>
            </figure>
        </div>
        <!--<div class="documents-content">
            <figure>
                <a href="documents/svo.pdf" target="_blank">
                    <img src="img/svo.png">
                </a>
                <a href="documents/svo.pdf" class="title-docks" target="_blank">Свидетельство о включении в Реестр юридических лиц, осуществляющих деятельность по возврату просроченной задолженности
                </a>
            </figure>
            <figure>
                <a href="documents/politicks.pdf" target="_blank">
                    <img src="img/politicks.png">
                </a>
                <a href="documents/svo.pdf" class="title-docks" target="_blank">Политика персональных данных</a>
            </figure>
        </div>-->
    </section>
</main>
<?php
    require_once("footer.php");
?>
