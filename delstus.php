<?php
	include('databaseconnection.php');
        session_start();
        $reg=$_POST['regs'];
	$r=mysql_query("DELETE from students where Register=$reg");
	if($r)
	{	echo '<center><h1>Successfully Deleted!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>';	
	}
	else
		echo '<center><h1>Not Deleted Try Again!!</h1></center>';
	sleep(5); 	
        session_unset();
        session_destroy();
	header('Refresh: 5; url=register.php');
	
?>		