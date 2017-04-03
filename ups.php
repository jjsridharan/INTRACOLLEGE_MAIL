<?php
	include('databaseconnection.php');
	session_start();
	$reg=$_SESSION['res'];
	$name=$_POST['na'];
	$mai=$_POST['ma'];
	$pho=$_POST['ph'];
	$ye=2012;
	$r=mysql_query("UPDATE students SET Name='$name',mail='$mai',phone='$pho' where Register='$reg'");
	if($r)
	{	echo '<center><h1>Successfully Updated!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>';
                header('Refresh: 5; url=register.php');
                $body="Hello,\n Your update request is processed and your account is updated";
                mail($mai,"welcome",$body);

	}
	else
	{
	    echo '<center><h1>Not Updated Try Again!!</h1></center>';
            header('Refresh: 5; url=register.php');
        }
        session_unset();
	session_destroy();
	sleep(5); 	
	
?>			