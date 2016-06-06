<?php
session_start();


$_SESSION['page5'] = $_SERVER['PHP_SELF'];
echo $_SESSION['page6'];
echo $_SESSION['page3'];
echo $_SESSION['page4'];
echo $_SESSION['page5'];
?>
<br /><a href="index.php">back to main page</a>
</br><a href="<?php session_destroy();?>">Удалить Историю</a>
