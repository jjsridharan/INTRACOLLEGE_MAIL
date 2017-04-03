<?php
     session_start();
     if(!isset($_SESSION['user']))
            header('Location:login.php');
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
			#top
			{
				margin-top:5%;
			}
			#r,#u,#d,#s
			{
				background-color:#4A96AD;
				
			}
			#r:hover,#u:hover,#d:hover,#s:hover
			{
				color:#000000;
				background-color:#ECECEA;
			}
			#forms
			{
				margin-top:10%;
				margin-left:20%;
			}
			#reg,#nam,#mai,#pho
			{
				width:40%;
				padding:10px 20px;
			}
			#sub
			{
				width:20%;
				margin-left:40%;
				background:#7E8F7C;
			}	
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div id="mar">
				<marquee id="scr">Computer Society of MIT</marquee>
			</div>
			<div id="top" class="btn-group btn-group-justified">
  				<a id="r" href="register.php" class="btn btn-primary btn-lg">Register</a>
 				<a id="u" href="update.php" class="btn btn-primary btn-lg">Update</a>
  				<a id="d" href="login.php" class="btn btn-primary btn-lg">Delete</a>
				<a id="s" href="login1.php" class="btn btn-primary btn-lg">Send Mail</a>
			</div>
			<div id="forms">
				<form method="post" action="delstus.php">
					<font size=5em><label>Enter the Register Number</label><font>
					<input id="reg" name="regs" type="text" placeholder="Register Number" title="Must be 10 digits"><br><br><br>
					<input id="sub" type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Delete Student"></input>
				</form>
			</div>
		</div>
	</body>
</html>