<?php
include 'connect.php';
$reggtry = "INSERT INTO `mindatabas`.`inloggning` (`name`, `password`, `id`) VALUES ('$_POST[Namnet]', '$_POST[Pw]', NULL);";
$result = mysql_query ($reggtry);
if ($result === false) {
echo "Hej, du har fel";
}
$password = md5 ($_GET['Pw']);
$unsafe_variable = $_GET["Namnet"];
$safe_variable = mysql_real_escape_string($unsafe_variable);

mysql_close($link);
header('Location: index.php');

?>
