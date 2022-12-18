<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="script/register.js"></script>
    <script type="text/javascript" src="script/validation.min.js"></script>

    <title>Покровский колледж</title>
</head>
<body>

    <div class="main">
        <div class="header">
            <div class="container">
                <div class="header-body">
                    <div class="box">
                        <div class="logo-text">01</div>
                    </div>
                    <div class="box">
                        <?php
                            if($_COOKIE['users'] == ''):
                        ?>
                        <a href="signup.php" class="btn mr25">Регистрация</ф>
                        <a href="vhod.php" class="btn">Авторизация</a>
                        <?php else: ?>
                            <a class="btn" href="exit.php"><?=$_COOKIE['users']?></a>
                        <? endif; ?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-body">
                <div class="main-box">
                    <div class="main-title">
                        ПОкровский
                        колледж
                    </div>
                    <div class="main-text">Поставляйте вчера, программируйте сегодня, думайте завтра.</div>
                </div>
                <img src="img/main.png">
            </div>
        </div>
    </div>
    <div class="bg"></div>

    <script src="script/script.js"></script>

</body>
</html>