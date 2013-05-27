<!-- Kom ihåg att logga in till databasen först! -->
<?php
		include 'connect.php';
		
         $query = "SELECT * FROM inloggning WHERE name='$_POST[name]' AND password='$_POST[password]'";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
         if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST['name'];
			  header('Location: sidan.php');
		 }
		 else {
			  header('Location: index.php');
		 }
		
?>