<?php
	include('databaseconnection.php');
        session_start();
        $q=mysql_query("SELECT ye from login");
        $qq=myqsl_fetch_assoc($q);
        $yea=$qq['ye'];
	$r=mysql_query("DELETE from students where year=$yea'");
        $k=mysql_query("UPDATE login SET ye=(ye+1)");
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