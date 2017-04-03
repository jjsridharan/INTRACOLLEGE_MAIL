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
				margin-left:40%;
			}
			#reg,#nam,#mai,#pho,#dep
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
			#reg:focus,#nam:focus,#mai:focus,#pho:focus,#dep:focus
			{
				border-color:#E44424;
			} 
                        #copyright
                        {
                                margin-left:37%;
                                margin-top:10%;
                        }
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div id="mar">
				<marquee id="scr">CSMIT</marquee>
			</div>
			<div id="top" class="btn-group btn-group-justified">
  				<a id="r" href="register.php" class="btn btn-primary btn-lg">Register</a>
 				<a id="u" href="login2.php" class="btn btn-primary btn-lg">Update</a>
  				<a id="d" href="login.php" class="btn btn-primary btn-lg">Delete</a>
				<a id="s" href="login1.php" class="btn btn-primary btn-lg">Send Mail</a>
			</div>
			<div id="forms">
				<form method="post" action="reg.php">
					<input id="reg" name="re" type="text" placeholder="Register Number" title="Must be 10 digits" required><br><br>
					<input id="nam" name="na" type="text" placeholder="Name" required><br><br>
                                        <input id="pho" name="ph" type="text" placeholder="Phone Number" required><br><br><br>
					<input id="mai" name="ma" type="email" placeholder="Email id" required><br><br>
                                        <select id="dep" name="de" required>  
     					      <option value="" selected disabled>Please select Your Department</option>
                                              <option value="AERO">AERO</option>
                                              <option value="AUTO">AUTO</option>
                                              <option value="CSE">CSE</option>
                                              <option value="ECE">ECE</option>
                                              <option value="EIE">EIE</option>
                                              <option value="IT">IT</option>
                                              <option value="MECH">MECH</option>
                                              <option value="PT">PT</option>
                                              <option value="RPT">RPT</option>
                                        </select><br><br><br>
					<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Register"></input>
				</form>
			</div>
		</div>
<div id="copyright">
    		<p>&copy; Design by Sridharan Hosted by <a href="http://www.csmit.org//">Computer Society of MIT</a>&nbsp;&nbsp;</p>
    		</div>
	</body>
</html>	