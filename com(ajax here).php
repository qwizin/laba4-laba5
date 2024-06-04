<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
    <header class = "header">
        <div class="wrapper">
            <div class="header_wrapper">
                <div class="header_logo">
                    <a href="/" class="header_logo-link">
                        <img src="./img/svg/logo.svg" alt="SportRus" class="header_logo-pic">
                    </a>
                </div>
                <nav class="header_nav">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="indexx.php" class="header_link">Главная</a>
                        </li>

                        <li class="header_item">
                            <a href="indexx2.php" class="header_link">Ассортимент</a>
                        </li>

                        <li class="header_item">
                            <a href="indexx3.php" class="header_link">Представители</a>
                        </li>

                        <li class="header_item">
                            <a href="com(ajax here).php"><button class = "knopka_come"><p class = "come">Войти</p></button></a>
                        </li>

                        <li class="header_item">
                            <a href="regpole.php"><button class = "knopka_reg"><p class = "reg">Регистрация</p></button> </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="intro">
            <div class="wrapper">
                <h1 class="intro4_title">
                    Войти
                </h1>

                <p class="intro4_text1">
                    Строки для заполнения
                </p>
                <div class="form">
                <form id="loginform" method="post">
                    <div>
                        <label for="email" class = "podpis2" placeholder = "Имя пользователя"> Имя пользователя </label>
                        <input type="text" name="username" id="username" class="pole1" placeholder = "Имя пользователя"/><br>
                        <br>
                        <label for="email" class = "podpis1" placeholder = "Пароль"> Пароль </label>
                        <input type="password" name="password" id="password" class="pole1" placeholder = "Пароль"/><br> 
                        <br>   
                        <button class = "icon_button" type = "submit" name="loginBtn" id="loginBtn" value="Login"><p class = "podpis6">Отправить</p></button>
                    </div>
                </form>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#loginform').submit(function(e) {
                            e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: 'login.php',
                                data: $(this).serialize(),
                                success: function(response)
                                {   
                                    var jsonData = JSON.parse(response);
                // user is logged in successfully in the back-end 
                // let's redirect 
                                    if (jsonData.success == "1")
                                    {
                                        location.href = 'indexx.php';
                                    }
                                    else
                                    {
                                        alert('Неправильно введённое значение!');
                                    }
                                }
                            });
                        });
                    });
                </script>
            </div>
            
        </section>
    </main>
</body>
</html>
