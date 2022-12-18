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
                        <div class="logo-text">02</div>
                    </div>
                    <div class="box">
                        <a href="index.php" class="btn">Главный экран</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-body-vhod">
                <div class="main-box">
                    <div class="main-title">
                        ПОкровский
                        колледж
                    </div>
                    <div class="main-text">Поставляйте вчера, программируйте сегодня, думайте завтра.</div>
                    <img src="img/vhod-img.png">
                </div>
                <div class="registration">
                    <div class="registration-body">
                        <div class="registration-title">Регистрация</div>
            
                        <form method="post" id="register-form" action="register.php" class="form-signin">
                            <div id="error"></div>
                            <input type="login" name="user_name" id="user_name" placeholder="Логин">
                            <input type="email" name="user_email" id="user_email" placeholder="E-mail">
                            <input type="password" name="password" id="password" placeholder="Пароль">
                            <input type="password" name="cpassword" id="cpassword" placeholder="Подтвердите пароль">
                            <button type="submit" name="btn-save" id="btn-submit">Зарегистрироваться</button>
                        </form>
            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script/script.js"></script>

</body>
</html>