<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
<?php 
include 'connect.php';
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="magnum" type="text/css" href="../CSS/kebab.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>MinWebsite</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner-left" >
			   <img src="kebab1.jpg" alt="kebab"><br> </div>
               <div id="banner-center" >
			   <img src="kebab2.jpg" alt="kebab"><br> </div>
               <div id="banner-right" > 
			   <img src="kebab1.jpg" alt="kebab"><br> </div>
            <div id="left">
			
					<div class="dokument-item">
						<img src="kebab3.jpg" alt="hejhej"><br>
					</div>
            </div>
            <div id="center">
				
                <div id="info">
				
				<h1 class="dokument-item-header"> Hello and welcome to my database website!</h1>
				<p class="info">Please register and log in here under!</p>
	

					<form method="POST"
action="Registrera.php">
<input type="Submit" Name="Submit" value="Registrera dig!">
</form>
<br>
<form action="login.php" method="post">
<h2>Användarnamn: </h2><input type="text" name="name"> <br />
<h2>Lösenord: </h2><input type="password" name="password"> <br /><br />
<input type="submit" Name ="Submit1" Value = "Logga in!"> 

</form>
<?php 
include 'search.php';
?>
<img src="kebab4.jpg" alt="hejhej"><br>

</form>
</div>
</div>
            <div id="right">
					<img src="kebab3.jpg" alt="hejhej"><br>
            </div>

			<div id="footer">
				<p> &copy; 2013 mackeman1. This is a kebab# 
				</p>
			</div>
        </div>
    </body>
</html>