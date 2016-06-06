<?php
//session_start();
//setcookie('authorization',md5($_POST['login']),time()+(60*60*24*30));
//if($_POST['login']){
//    echo 'Привет, '.$_POST['login']."<br>";
//}

//Создать форму авторизации на сайте с тремя обязательных полями: login, password и
//email. Если данные введены верно, то записать в cookies специальный ключ, при наличии -->
//которого пользователю доступна кнопка "Выход". В момент выхода происходит удаление созданной ранее cookies.-->
?>


<!--<form  method="post">-->
<!--    <input required type="login" name="login">login<br \>-->
<!--    <input required type="password" name="pass">pass<br \>-->
<!--    <input required type="email" name="email" >email<br \>-->
<!--    <input type="submit"></br>-->
<!---->
<!---->
<!--</form>-->
<?php
//
//if(isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['email'])){
//    ?><!--<form method="post"><input type="submit" name="logout" value="log out" ></form>--><?php
//    if($_POST['logout']){
//        unset($_COOKIE['authorization']);
//    }
//}



//session_start();
//
//if(!empty($_POST['username'])){
//    $_SESSION['name'] =  $_POST['username'];
//
//}
//   ?><!-- <form  method="post">-->
<!--        <input type="text" name="username" >-->
<!--        <input type="submit">-->
<!--    </form>--><?php
//    echo 'Привет, '.$_SESSION['name']."<br>";
//p
//
//?>
<!--<br \>-->
<!---->
<!---->
<!---->
<!-- <a href="stranica2.php">Проверить наличие записи на 2й страце</a>-->

<?php
//Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.

$_COOKIE['page1'] = $_SERVER['PHP_SELF'];

?>

<a href="stranica3.php">str3</a></br>
<a href="stranica4.php">str4</a></br>
<a href="stranica5.php">str5</a></br>
</br><a href="<?php session_destroy();?>">Удалить Историю</a>




