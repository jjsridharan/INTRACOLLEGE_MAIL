<?php
     include('databaseconnection.php');
     session_start();
     if(!isset($_SESSION['user']))
           header('url=register.php');
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
			#r,#u,#d,#s
			{
				background-color:#4A96AD;
				
			}
			#r:hover,#u:hover,#d:hover,#s:hover
			{
				color:#000000;
				background-color:#ECECEA;
			}
                        #delgrs
			{	
                                position: aboluste; /*or fixed*/; width: 30%; height: 300px; left: 60%; top:70px; margin: 0 0 0 -25%
			}
                        #delgr
			{	
                                position: aboluste; /*or fixed*/; width: 30%; height: 300px; left: 60%; top:180px; margin: 0 0 0 -30%
			}
		</style>
	</head>
	<body>
                <script>
                         function al()
                         {
                                confirm("Do you really want to perform this?");
                         }
                </script>
		<div class="container-fluid">
			<div id="mar">
				<marquee id="scr">Computer Society of MIT</marquee>
			</div>
                        <pre><h3>*Doing this action will delete all the final Year students and update other year students as next year*
                                     **This action cannot be reverted**</h3></pre>
                          <?php
                             
                              $r=mysql_query("SELECT ye FROM login");
                              $qq=mysql_fetch_assoc($r);
                              $res="Students whose register numbers beginning with {$qq['ye']} will be deleted.";
                              echo '<center><h1>' .$res.'</h1></center>';                         
                        ?>
                        <div id="delgrs" class="btn-group-vertical">
                                <form action="setfin.php" method="POST">
                                     <input type="submit" id="s" onclick="return al()" class="btn btn-primary btn-lg" value="Update Delete Year"></a>
                                </form>
                        </div>
                       <div id="delgr" class="btn-group-vertical">
                                <form action="delyears.php" method="POST">
                                     <input type="submit" id="u" onclick="return al()" class="btn btn-primary btn-lg" value="Delete Year"></a>
                                </form>
                        </div>

		</div>
	</body>
</html>												