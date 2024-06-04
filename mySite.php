<?php
$connection=mysqli_connect('MySQL-8.2', 'root', '', 'Kniga');
$sql = "SELECT * FROM `Books`;";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxiBook</title>
    <link rel="stylesheet" href="mySite.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <a href="mySite.html">Главная</a>
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
    <div class="container1">
        <div class="book">
            <a href="PageForm.php" class="sss">
                <img  src="картинки/пелевин 1.png" alt="Книга 1">
            </a>
            <?php $id =0; ?>
            <h3><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['bookName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></h3>
            <p><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['authorName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
            <h3 class="c"> <img src="эл-ты/звезда 1.png" alt="звезда"> 3.8</h3>
            <a href="#" class="special3" id="openModal">Купить</a>               
        </div>
        <div class="book">
            <a class="sss">
                <img src="картинки/тачдаун 1.png" alt="Книга 2">
            </a>
            <?php $id =1; ?>
            <h3><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['bookName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></h3>
            <p><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['authorName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 3,7</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                <img src="картинки/сила этики 1.png" alt="Книга 2">
            </a>
            <?php $id =2; ?>
            <h3><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['bookName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></h3>
            <p><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['authorName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 3,9</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                <img src="картинки/подростки 1.png" alt="Книга 1">
            </a>
            <?php $id =3; ?>
            <h3><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['bookName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></h3>
            <h3 class="v"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,5</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                <img src="картинки/арт-обьект 1.png" alt="Книга 2">
            </a>
            <?php $id =4; ?>
            <h3><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['bookName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></h3>
            <p><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['authorName'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 3,6</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
    </div>
    <div class="container1">
        <div class="book">
            <a class="sss">
                 <img src="картинки/Лишние 1.png" alt="Книга 1">
            </a>
            <h3>Лишние</h3>
            <p>Александра Райт</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,1</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                <img src="картинки/Хорея 1.png" alt="Книга 2">
            </a>
            <h3>Хорея</h3>
            <p>Марина Кочан</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,3</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                 <img src="картинки/фрэнсис 1.png" alt="Книга 2">
            </a>
            <h3>Фрэнсис</h3>
            <p>Loputyn</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,3</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                 <img src="картинки/Сэйв 1.png" alt="Книга 1">
            </a>
            <h3>Сэйв</h3>
            <p>Ава Хоуп</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,5</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                 <img src="картинки/птицы 1.png" alt="Книга 2">
            </a>
           
            <h3>Птицы</h3>
            <p>Владимир Торин</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,4</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
    </div>
    <div class="container1">
        <div class="book">
            <a class="sss">
                 <img src="картинки/Нетвой 1.png" alt="Книга 1">
            </a>
           
            <h3>Нетвой</h3>
            <p>Эллин Ти</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,2</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                 <img src="картинки/кощеева невеста 1.png" alt="Книга 2">
            </a>
           
            <h3>Кощеева невеста</h3>
            <p>Алан Чароит</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,5</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                 <img src="картинки/скоро 1.png" alt="Книга 2">
            </a>
           
            <h3>Скоро конец <br> света</h3>
            <p>Микита Франко</p>
            <h3 ><img src="эл-ты/звезда 1.png" alt="звезда"> 4,5</h3>
            <a href="#" class="special4" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                <img src="картинки/сказка 1.png" alt="Книга 1">
            </a>

            <h3>Сказка о снежной <br> принцессе</h3>
            <p>Ася Лавринович</p>
            <h3 ><img src="эл-ты/звезда 1.png" alt="звезда"> 4,6</h3>
            <a href="#" class="special4" id="openModal">Купить</a> 
        </div>
        <div class="book">
            <a class="sss">
                 <img src="картинки/птицы 2.png" alt="Книга 2">
            </a>
           
            <h3>Птицы </h3>
            <p>Владимир Торин</p>
            <h3 class="z"><img src="эл-ты/звезда 1.png" alt="звезда"> 4,4</h3>
            <a href="#" class="special2" id="openModal">Купить</a> 
        </div>
    </div>
       <!-- Это модальное окно покупки -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="buy.php" method = "post">
            <div class="form-group">
                <label for="name">Ваше имя и фамилия:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">ваш E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Ваш телефон:</label> 
                <input type="tel" id="phone" name="phone" required>
            </div>
            <input type="submit" value="Отправить">
            </form>
        </div>
    </div>

        <!-- Это модальное окно входа логина -->
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="loginform" action="login.php" method="post">
                <div class="form-group">
                    <label for="name">Введите E-mail</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="name">Введите пароль</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <input type="submit" value="Войти">
                <a id="openModal3" class="special5" >Зарегестироваться</a>
                <!-- <input id="openModal3" type="submit" value="Зарегестироваться"> -->
            </form> 
        </div>
    </div>

        <!-- Это модальное окно регистрации -->
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form  action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Введите E-mail</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="name">Введите пароль</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <div class="form-group">
                    <label for="name">Повторите пароль</label>
                    <input type="password" id="repass" name="repass" required>
                </div>
                <input type="submit" value="Зарегестироваться">
            </form> 
        </div>
    </div>



    <script src="mySite.js"></script>

</body>
</html>
