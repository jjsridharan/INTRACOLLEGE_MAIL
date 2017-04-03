<?php
	include('databaseconnection.php');
        session_start();
        $yea=$_POST['regs'];
	if(strlen($yea)==4)
	{	
                $r=mysql_query("UPDATE login set ye=$yea");
                echo '<center><h1>Successfully Updated!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>';	
	}
	else
		echo '<center><h1>Not Deleted Try Again!!</h1></center>';
	sleep(5); 	
        session_unset();
        session_destroy();
	header('Refresh: 5; url=register.php');
	
?>					