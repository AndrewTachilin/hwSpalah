<?php
session_start();
$_SESSION['page4'] = $_SERVER['PHP_SELF'];
print_r($_SESSION['pages']);

?>



<a href="stranica3.php">str3</a></br>
<a href="stranica5.php">str5</a></br>
<a href="stranica6.php">str6</a></br>
