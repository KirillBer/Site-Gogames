<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gogames</title>
    <link rel="stylesheet" href="Gogames/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;600&display=swap" rel="stylesheet">
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
                        <a href="includes/rule.php"><li class="MenuText4">Rules</li></a>
                            <?php echo $rule; ?>
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
</body>
</html>