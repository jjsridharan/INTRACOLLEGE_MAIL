<?php
	include('databaseconnection.php');
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
			#labels
			{
				float:left;	
				margin-left:25%;	
				margin-top:11%;
			}
			#forms
			{
				margin-left:45%;
				margin-top:11%;
				float:top;
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
			
			#reg,#nam,#mai,#pho
			{
				width:40%;
				padding:10px 20px;
			}
			#sub
			{
				width:20%;
				margin-left:10%;
				background:#7E8F7C;
			}	
			#reg:focus,#nam:focus,#mai:focus,#pho:focus
			{
				border-color:#E44424;
			}
		</style>
	</head>
	<body>
		<?php
			$re=$_POST['regs'];
			$qry="select * from students where Register='$re'";
			$q=mysql_query($qry);
			$_SESSION['res']=$re;
			while($r=mysql_fetch_assoc($q))
			{
				$_SESSION['nam']=$r['Name'];
				$_SESSION['ema']=$r['mail'];
				$_SESSION['pho']=$r['phone'];
			}
		?>
		<div class="container-fluid">
			<div id="mar">
				<marquee id="scr">Computer Society of MIT</marquee>
			</div>
			<div id="labels">
				<font size=5em><label>Register Number</label><br><br><br>
				<font size=5em><label>Name</label><br><br><br>
				<font size=5em><label>Email</label><br><br><br>
				<font size=5em><label>Phone Number</label><br><br>
			</div>
			<div id="forms">
				<form method="post" action="ups.php">
					<font size=5em><label><?php
	echo $_POST['regs'];
?></label><br><br><br>
					<input id="nam" name="na" type="text" value="<?php echo $_SESSION['nam'] ?>"><br><br>
					<input id="mai" name="ma" type="email" value="<?php echo $_SESSION['ema'] ?>"><br><br>
					<input id="pho" name="ph" type="text" value="<?php echo $_SESSION['pho'] ?>"><br><br><br><br>
					<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Update"></input>
				</form>
			</div>
		</div>
	</body>
</html>