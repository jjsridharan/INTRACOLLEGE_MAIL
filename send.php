<?php
     session_start();
     if(!isset($_SESSION['user']))
            header('Location:login1.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<title>CS MIT
		</title>
		<link rel="shortcut icon" href="favicon.ico"/>
		<style>
			body
			{
				background-color:#ECECEA;
				width:100%;
			}
			
			#scr
			{
				font-size:5em;
				color:#7D1935;
			}
			
			#r,#u,#u1
			{
				background-color:#4A96AD;
				
			}
			#r:hover,#u:hover,#u1:hover
			{
				color:#000000;
				background-color:#ECECEA;
			}
			#delgr
			{	
                                position: aboluste; /*or fixed*/; width: 30%; height: 300px; left: 60%; top:100px; margin: 0 0 0 -25%
			}
	</style>
	</head>
	<body>
		<div class="container-fluid">
			<div id="mar">
				<marquee id="scr">Computer Society of MIT</marquee>
			</div>
                 <div id="delgr" class="btn-group-vertical">
                 <a id="r" href="sendept.html" class="btn btn-primary btn-lg">Send by Department</a><br><br>
                 <a id="u" href="sendyear.html" class="btn btn-primary btn-lg">Send by Year</a><br><br>
                 <a id="u1" href="sendind.html" class="btn btn-primary btn-lg">Send Individuals</a><br><br>
                 <a id="r" href="specreg.php" class="btn btn-primary btn-lg">Other College</a>
  
</div>
		</div>
	</body>
</html>								