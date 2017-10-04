<?php
$reservedbook = urldecode($_GET['reservation']);
session_start();
if (!isset($_SESSION['reservedbooklist']))
$reservedbooklist = "";
else
$reservedbooklist = $_SESSION['reservedbooklist'];
$reservedbooklist = $reservedbooklist . "/" . $reservedbook;
$_SESSION['reservedbooklist'] = $reservedbooklist;



echo "Thank you.<br>\"$reservedbook\" has been added to your reservation list";
echo "<br><a href=index.php>Return to home page</a>";
?>