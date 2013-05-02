<?php
include 'H:\HTSWebsite\ Min Website\connect.php';
$reggtry = "INSERT INTO `mindatabas`.`inloggning` (`name`, `password`, `id`) VALUES ('$_POST[Namnet]', '$_POST[Pw]', NULL);";
$result = mysql_query ($reggtry);
if ($result === false) {
echo "Hej, du har fel";
}
else{
mysql_close($link);
header('Location: http://localhost/HTS/Min Website/logga_in.php');
}
?>
