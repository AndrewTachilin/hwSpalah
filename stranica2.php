<?php
session_start();

echo 'Привет, '.$_SESSION['name']."<br>";
?>
<br />
<a href="index.php">Проверить наличие записи на 1й страце</a>
