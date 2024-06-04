<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxiBook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        h1, h2, p {
        margin: 0;
        }
        nav {
            position: fixed;
            width: 100%;
            height: 8%;
            margin-top: 0px;
            background-color: white;
            padding: 10px;
            text-align: left;
            z-index: 1000;
        }
        nav a {
            color: black;
            text-decoration: none;
            padding-bottom: 20px;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .special{           /*класс для кнопки поиск книг*/
           text-align: right;   
           margin-left: 150px;
           background-color: rgba(72, 141, 244, 0.64);
           border-radius: 30px;
        }
        .special1{      /*класс для кнопки войти*/
        background-color: rgba(72, 141, 244, 0.64);
        border-radius: 30px;
        width: 200px;
        position: relative;
        left: 90%;
        top: -58px;
        }

        .special2{      /*класс для кнопки купить*/
           text-align: right;   
           background-color: rgba(72, 141, 244, 0.64);
           border-radius: 30px;
           padding: 9px 70px;
           text-decoration: none;
           position: relative;
            top: 47px;
            right: 215px;
            color:#ffffff;
            font-size: 24px;
        }
        nav img {/*класс для картинок*/
            vertical-align: middle;
            margin-left: 100px;
            max-width: 300px;
            max-height: auto;
            border-radius: 5px;
        }

        .blok{
            display: inline-block;
            background-color: #212121;
            width: 1100px;
            height: 180px;
            padding: 20px;
            margin: 20px;
            margin-top: 100px;
            margin-left: 195px;
            border-radius: 30px;
        }
        .blok h1{
            color: #ffffff;
            margin-left: 350px;
            font-size: 45px;
        }
        .blok h2{
            color: #ffffff;
            margin-left: 350px;
            margin-top: 20px;
        }
        .blok img{
            margin-top: -100px;
            margin-left: 35px;
        }
        
        .fotka{
            position: fixed;
            z-index: 1005;
        }
        .fail{
            position: relative;
            top: 140px;
            right: 450px;
            max-width: 45px;
            
        }
        .bukva{
            color: black;
            position: relative; 
            top: 170px;
            right: 540px;
                   
        }
        .zap{
            position: relative;
            top: 140px;
            right: 510px;
            max-width: 45px;
        }
        .bukva1{
            color: black;
            position: relative; 
            top: 170px;
            right: 575px;
                  
        }
        .bukva2{
            color: black;
            position: relative; 
            top: 130px;
            right: -280px;
            font-size: 25px;        
        }
        /*форма для покупки*/
.form-group {
margin-bottom: 20px;
padding-right: 15px;
}
label {
display: flex;
font-weight: bold;
}
input[type="text"], input[type="email"], input[type="tel"], textarea {
width: 100%;
padding: 8px;
border: 1px solid black;
border-radius: 4px;
}
input[type="submit"] {
background-color: rgba(72, 141, 244, 0.64);
color: white;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type="submit"]:hover {
background-color: #999;
}

        /* фон за окном */
.modal {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 1; /* Sit on top */
left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
padding-top: 60px; /* Location of the box */
}

/* Модальное окно */
.modal-content {
background-color: #fefefe;
margin: 10% auto; /* 15% from the top and centered */
padding: 20px;
border: 1px solid #888;
width: 20%; /* ширина модального окна */
}

/* Крестик */
.close {
color: #aaa;
float: right;
font-size: 28px;
font-weight: bold;
}

.close:hover,
.close:focus {
color: black;
text-decoration: none;
cursor: pointer;
}

.search{
    position: relative;
    left: 63%;
    top: -35px;
    width: 360px;
    height: 30px;
    background-color: #fff;
    border-radius: 60px;
    box-shadow: 0 0 0 5px rgba(72, 141, 244, 0.74);
}
.search .icon{
    position: absolute;
    top: 0;
    left: 0;
    width: 50px;
    height: 30px;
    background-color: #fff;
    border-radius: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999;
}
.search .icon::before{
    position: absolute;
    content: '';
    width: 10px;
    height: 10px;
    border: 3px solid #287dfc;
    border-radius: 50%;
    transform: translate(-3px,-3px);
}

.search .icon::after{
    position: absolute;
    content: '';
    width: 2px;
    height: 15px;
    background: #287dfc;
    transform: translate(7px,7px) rotate(-45deg);
}

.search .input {
    position: relative;
    width: 300px;
    height: 10px;
    left: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.search .input input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
    outline: 0;
    font-size: 15px;
    padding: 10px 0;
}

.clear{
    position: absolute;
    top: 50%;
    right: 15px;
    width: 15px;
    height: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translateY(-50%);
    z-index: 9999;
}
.clear::before{
    position: absolute;
    content: '';
    width: 1px;
    height: 15px;
    background: #999;
    transform: rotate(45deg);
}
.clear::after{
    position: absolute;
    content: '';
    width: 1px;
    height: 15px;
    background: #999;
    transform: rotate(-45deg);
}


    </style>
</head>
<body>
    <nav>
        <a href="mySite.php">Главная</a>
        <a href="#">Что почитать </a>
        <a href="#">Жанры </a>
        <a href="#">Авторы</a>
        <img src="эл-ты/maxibook.png" alt="логотип">
        <div class="search">
            <div class="icon"> </div>
            <div class="input">
                <input type="text" placeholder="Поиск" id="mySearch">
            </div>
            <span class="clear"></span>
        </div>
        
        <a href="#" id="openModal2" class="special1">Войти</a>

    </nav> 

    <div class="blok">
        <h1>Путешествие в Элевсин</h1>
        <h2>Виктор Пелевин</h2>
        <div class="fotka">
            <img src="картинки/пелевин 1.png">
            <a href="BuyForm.php" class="special2" id="openModal">Купить</a>
            <img class="fail" src="эл-ты/файл.png">
            <a class="bukva">Оставить отзыв</a>
            <img src="эл-ты/запятая.png" class="zap">
            <a class="bukva1">Цитировать</a>   
        </div>
        <a class="bukva2">            «Путешествие в Элевсин» — роман российского писателя Виктора Пелевина. <br>
            Сюжет: стареющий римский император Порфирий хочет совершить паломничество<br> в древнегреческий город Элевсин. 
            При этом Порфирий — это просто нейросеть,<br> а древний Рим — это симуляция.</a>
        
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-group">
                <label for="name">Ваше имя и фамилия:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">ваш E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Ваш номер телефона:</label> 
                <input type="tel" id="phone" name="phone" required>
            </div>
            <input type="submit" value="Отправить">
        </div>
    </div>


    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
                <div class="form-group">
                    <label for="name">Введите E-mail</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="name">Введите пароль</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <input type="submit" value="Войти">
                <input type="submit" value="Зарегестироваться">
            
        </div>
    </div>

    <script src="mySite.js"></script>
</body>
</html>
