<?php
      session_start();
      if(!isset($_SESSION['user']))
        header('Location :login.html');
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
				margin-left:20%;
				background:#7E8F7C;
			}	
			#reg:focus,#nam:focus,#mai:focus,#pho:focus
			{
				border-color:#E44424;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div id="mar">
				<marquee id="scr">Computer Society of MIT</marquee>
			</div>
		         <pre><h3>*Doing this action will delete all register numbers which start with your mentioned value.**<br>**Once you delete after setting this value,action cannot be reverted**</h3></pre>
			<div id="forms">
				<form method="post" action="setfins.php">
					<font size=5em><label>Enter the First four digits of Final year Register Number</label><font><br>
					<input id="reg" name="regs" type="text" placeholder="Register Number" title="Must be 4 digits"><br><br><br>
					<input id="sub" type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Update"></input>
				</form>
			</div>
		</div>
	</body>
</html>	