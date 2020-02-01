<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форвард: Финансовая компания</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/7e4d23cf7d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/remodal.min.css">
    <link rel="stylesheet" type="text/css" href="css/remodal-default-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>
<body>
<div class="container-fluid">
    <header id="header">
        <section class="navigation-wrapper-container">
            <a href="#" id="logo" rel="home" title="На главную страницу сайта. Форвард: финансовая компания" class="link-img-home-page">
                <img src="img/logo.png">
            </a>
            <nav class="nav-header">
                <ul>
                    <li>
                        <a href="#" class="hvr-underline-from-center">Главная</a>
                    </li>
                    <li>
                        <a href="#" class="hvr-underline-from-center">Услуги</a>
                    </li>
                    <li>
                        <a href="#" class="hvr-underline-from-center">О&nbsp;компании</a>
                    </li>
                    <li>
                        <a href="#" class="hvr-underline-from-center">Вопросы&nbsp;и&nbsp;ответы</a>
                    </li>
                    <li>
                        <a href="#" class="hvr-underline-from-center">Контакты</a>
                    </li>
                </ul>
            </nav>
            <a type="button" class="btn btn-danger btn-lg main-btn" href="#modal">Обратная связь</a>
            <div class="contact">
                <span class="phone-number-header-container"><a href="tel:+7 (804) 333-41-33" target="_blank" class="hvr-buzz-out"><i class="fas fa-mobile-alt"></i> +7&nbsp;(804)&nbsp;333&#8209;41&#8209;33</a></span>
                <p>Звонок бесплатный</p>
                <span class="mail-header-container"><a href="mailto:info@caforward.ru" target="_blank" class="hvr-pulse-grow"><i class="far fa-envelope"></i> info@caforward.ru</a></span>
            </div>
        </section>
        <!-- MODAL WINDOWS -->
        <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <div class="remodalBorder">
                <p><img src="img/footer-logo-white.png"></p>
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <form id="form">
                    <h2 id="modal1Title">Оставьте ваши контактные данные и наша служба поддержки свяжется с вами</h2>
                    <input type="text" class="putName" name="name" placeholder="Ваше ФИО" required>
                    <input id="phone" name="phone" type="tel" class="putPhone" placeholder="Ваш телефон" required>
                    <input name="mail" type="email" class="mail" placeholder="Ваш Email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})">
                    <textarea name="textarea" type="text" class="textarea" placeholder="Ваш вопрос" required></textarea>
                    <input type="submit" name="submit" class="btn main-btn-remodal" value="ОТПРАВИТЬ">
                    <input type="hidden" name="formData" value="Заявка с сайта">
                </form>
            </div>
        </div>
    </header>
