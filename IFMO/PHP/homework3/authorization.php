<!DOCTYPE html>

<html lang="ru">
<head>
    <title>CardAuthorization</title>
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="favicon.ico">
<!--    <link href="http://allfont.ru/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet"
          href="CSS/style-general.css">
    <link rel="stylesheet"
          href="CSS/style-flex.css">
    <link rel="stylesheet"
          href="CSS/style-auth.css">
    <meta charset="UTF-8">
    <meta name="description" content="Форма для авторизации">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="top-bar">
    <ul>
        <img src="images/logo.png" alt="MENU" class="button-menu">
        <li><a href="#">Разовая оплата</a></li>
        <li class="button-submenu"><p>КАРТЫ</p>
            <ul class="dropdown-menu">
                <li><a href="#">Абонементы</a></li>
                <li><a href="#">Авторизация</a></li>
                <li><a href="#">Регистрация</a></li>
            </ul>
        </li>
        <li class="button-submenu"><p>Об АП-ПРО</p>
            <ul class="dropdown-menu">
                <li><a href="#">О нас</a></li>
                <li><a href="#">Объекты</a></li>
                <li><a href="#">Выставки</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="center-bar">
    <div class="left-menu">
        <a class="help-moscow" href="#moscow">Москва</a>
        <div id="moscow" class="modal-moscow">
            <div>
                <h3>Контактные данные АП-ПРО в Москве</h3>
                <p>
                    Адрес: 198205, Россия, г. Москва, ул. Авангардная, д.3
                    <br>
                    Телефон: 8 (800) 777-56-17
                    <br>
                    E-mail: msk-help@3390017.ru
                </p>
            </div>
        </div>

        <a class="help-spb" href="#spb">Санкт-Петербург</a>
        <div id="spb" class="modal-spb">
            <div>
                <h3>Контактные данные АП-ПРО в Санкт-Петербурге</h3>
                <p>
                    Адрес: 196084, г. Санкт-Петербург, Лиговский проспект, д.254, лит. В, пом. 4Н (В2-201)
                    <br>
                    Телефон: 8 (800) 777-56-17
                    <br>
                    E-mail: sbp-help@3390017.ru
                </p>
            </div>
        </div>
    </div>

    <div class="center-menu">
        <form action="handler.php"
              method="post"
              name="testForm">
            <!--                  enctype="multipart/form-data">-->
            <fieldset>
                <div class="header">
                    <legend align="center"><strong>Авторизация для владельцев <br> абонементных карт</strong></legend>
                </div>
                <div class="elements-flex">
                    <label class="mail_auth" for="mail_auth">Ваша почта:</label>
                    <input id="mail_auth"
                           name="mail"
                           class="mail-auth validate"
                           type="email"
                           placeholder="введите сюда адрес своей электронной почты"
                           size="40"
                           autofocus
                           required>
                </div>

                <div class="elements-flex">
                    <label for="pwd_auth">Пароль:</label>
                    <input id="pwd_auth"
                           name="pwd"
                           class="pwd-auth validate"
                           type="password"
                           placeholder="введите сюда пароль"
                           size="40"
                           required>
                </div>

                <div class="elements-flex">
                    <label for="reg_pwd_again">Повторить пароль:</label>
                    <input id="reg_pwd_again"
                           name="pwd_repeat"
                           class="pwd-auth"
                           type="password"
                           placeholder="повторите пароль"
                           minlength="2"
                           maxlength="15"
                           size="40"
                           required>
                </div>
                <div class="elements-flex">
                    <label for="auth_reset">Нажмите, чтобы сбросить, <br> если введенные данные неверны:</label>
                    <input id="auth_reset"
                           class="auth-reset"
                           type="reset">
                </div>

                <div class="elements-flex">
                    <label for="auth_submit">Авторизация и вход на сайт:</label>
                    <input id="auth_submit"
                           class="auth_submit"
                           type="submit">
                </div>

            </fieldset>
        </form>
    </div>

    <div class="right-menu">
        <a class="help-samara" href="#samara">Самара</a>
        <div id="samara" class="modal-samara">
            <div>
                <h3>Контактные данные АП-ПРО в Самаре</h3>
                <p>
                    Адрес: 443056, Россия, Самара, Московское шоссе N4 строение 9
                    <br>
                    Тел.: 8 (800) 777-56-17
                    <br>
                    E-mail: sm-help@3390017.ru
                </p>
            </div>
        </div>

        <a class="help-ekaterinburg" href="#ekaterinburg">Екатеринбург</a>
        <div id="ekaterinburg" class="modal-ekaterinburg">
            <div>
                <h3>Контактные данные АП-ПРО в Екатеринбурге</h3>
                <p>
                    Адрес: 620089, Россия, Екатеринбург, Машинная ул, 42а
                    <br>
                    Тел.: 8 (800) 777-56-17
                    <br>
                    E-mail: ek-help@3390017.ru
                </p>
            </div>
        </div>
        <!--<button class="help-samara">
            Самара
        </button>
        <button class="help-ekaterinburg">
            Екатеринбург
        </button>-->
    </div>
</div>
<div class="footer-bar">
    <!--        <p>Мы в социальных сетях:</p>-->
    <section>
        <div>
            <a href="https://www.youtube.com/channel/UCvPpEddIAOynkiensj5chKg" class="youtube" target="_blank"><img src="images/social/youtube.png" alt="Youtube"></a>
            <a href="https://vk.com/parkomatpro" class="vk" target="_blank"><img src="images/social/vk.png" alt="Вконтакте"></a>
            <a href="https://ok.ru/group/53255311196238" class="odnoklassniki" target="_blank"><img src="images/social/ok.png" alt="Одноклассники"></a>
        </div>
        <div>
            <a href="https://plus.google.com/u/0/117505055496867180864" class="google-plus" target="_blank"><img src="images/social/google.png" alt="Google+"></a>
            <a href="https://www.instagram.com/parkingsystem_appro/" class="instagram" target="_blank"><img src="images/social/instagram.png" alt="Instagram"></a>

        </div>

    </section>
    <div>
        Developed by Zlobins Inc.<br>All rights reserved.
    </div>
</div>


<script src="JS/mainScript.js"></script>
</body>
</html>
