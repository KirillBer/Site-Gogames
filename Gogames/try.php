<?php

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/functions.php';

if(!empty($_POST)){
    debug($_POST);
}
echo "Hi";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gogames</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;600&display=swap" rel="stylesheet">
    <script src="js/code.js" defer></script>
</head>
    <body class="BodyPage">

<div class="site_page">
            <section class="TopSection">
                <div>
                    <div class="Top">
                    <a href="#">
                        <img src="img/Logo.png" class="HeaderLogo">
                    </a>
                    <ul class="MenuText">
                        <a href="#"><li class="MenuText1">Home</li></a>
                        <a href="#"><li class="MenuText2">About Us</li></a>
                        <a href="#"><li class="MenuText3">Prices</li></a>
                        <a href="#"><li class="MenuText4">Rules</li></a>
                        <a href="#"><li class="GSN" class="GSN_Top">Get Started Now</li></a>
                        <input type="button" class="stb" value="Change theme">
                    </ul>
                    </div>
                    <div class="SitePart1">
                        <div class="TopImages">
                            <img src="img/TopGlasses.png" class="TopGlasses">
                            <img src="img/TopCharacter.png" class="TopCharacter">
                            <img src="img/TopGamepad.png" class="TopGamepad">
                        </div>
                        <div class="LeftTop">
                            <b class="LeftTopText1">Gaming Consoles</b>
                            <b class="LeftTopText2">Try It, Rent It,<br> Save $50!</b>
                            <b class="LeftTopTextDescription">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed.</b>
                            <a href="#" class="GSN" class="GSN_LeftTop">Get Started Now</a>
                            <img src="img/TopX.png" class="TopX">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="mid_page">
            <section class="MidSection">
                <div class="midphotos">
                    <img src="img/ManShadow.png" class="midshadow">
                    <img src="img/Man.png" class="midman">
                    <img src="img/TV.png" class="midtv">
                </div>
                <div class="midtext">
                    <b class="midtext1">About VR Glasses</b>
                    <b class="midtext2">The New <br> VR Glasses <br>Series</b>
                    <b class="midtext3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed.</b>
                    <a href="#" class="GSN" class="GSN_Mid">Get Started Now</a>
                </div>
            </section>
        </div>
        <div>
            <section>
                <div class="SitePart3">
                    <div class="Mid2Images">
                        <img src="img/Mid2image.png" class="Mid2image">
                    </div>
                    <div class="LeftMid2">
                        <b class="LeftMid2Text1">Gaming Consoles</b>
                        <b class="LeftMid2Text2">Try It, Rent It,<br> Save $50!</b>
                        <b class="LeftMid2TextDescription">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed.</b>
                        <a href="#" class="GSN" class="GSN_LeftMid2">Get Started Now</a>
                        <img src="img/TopX.png" class="TopX">
                    </div>
                </div>
            </section>
        </div>
        <div class="Bottompage">
            <section class="Bottomsection">
                <div class="BottomText">
                    <b class="BottomText1">Our Pricing</b>
                    <b class="BottomText2">Choose Your Plan</b>
                </div>
                <div class="BottomImages">
                    <img src="img/BottomLeft.png" class="BottomLeft">
                    <img src="img/BottomCenter.png" class="BottomCenter">
                    <img src="img/BottomRight.png" class="BottomRight">
                </div>
            </section>
        </div>
        <div class="formpage" id="form">
            <form method="post">
                <div class="formname">Обратная связь</div>
                    <div class="formusername">Ваше имя</div>
                    <input class="formusernamefield" name="name" type="text" minlength="1" maxlength="32" pattern="[a-z]|[A-Z]|[а-я]|[А-Я]{1-30}">
                        <div class="formemail">Ваша электронная почта</div>
                        <input class="formemailfield" name="email" type="email" minlength="4" maxlength="32">
                            <div class="formnumber">Ваш возраст</div>
                            <input class="formnumberfield" name="age" type="number" min="4" max="150">
                                <div class="pozhelaniya">Рекомендации</div>
                                <textarea class="pozhelaniyafield" name="comment" maxlength="1024"></textarea>
                                    <div class="formcheckbox"><input class="formcheckboxfield" type="checkbox">  Вы согласны на обработку персональных данных</div>
                                        <input class="button" type="submit" value="Отправить">
                </form>
        </div>
        <div class="footerpage">  
            <section class="footer">
                <a href="#">
                    <img src="img/Logo.png" class="HeaderLogo" class="FooterLogo">
                </a>
                <b class="FooterRights">Copyright © 2022 HEALAS.LT. All Rights Reserved.</b>
                <a href="#">
                    <img src="img/FTI.png" class="FTI">
                </a>
                <input type="button" class="btn" value="Our contacts">
            </section>
        </div>    
</body>
</html>