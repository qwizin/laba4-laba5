<?php
require_once('buydb.php');

$name = $_POST['name'];
$email= $_POST['email'];
$tel= $_POST['phone'];

if(empty($email) || empty($name) || empty($tel)){
    echo "Заполните все поля";
}else{
    if(FALSE){
        
    } else{
        $sql = "INSERT INTO `users` (email,name,tel) VALUES ('$email','$name','$tel')";
        if($conn -> query($sql) === TRUE){
            echo "Успешная регистрация";
        }else{
            echo "Ошибка: " . $conn->error;
        }
    }
}
