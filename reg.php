<?php
	include('databaseconnection.php');
	$reg=$_POST['re'];
	$name=$_POST['na'];
	$mai=$_POST['ma'];
	$pho=$_POST['ph'];
        $dep=$_POST['de'];
	$ye = substr($reg, 0, 4);
        $fla=1;       
        if(empty($reg) || empty($name) || empty($mai) || empty($pho) || empty($dep) || (strlen($reg)!=10) || (strlen($pho)!=10))
        {
                $fla=0;
        }
        if($fla!=0)
        {
$r=mysql_query("INSERT INTO students VALUES('$reg','$name','$mai','$pho','$ye','$dep')");
	    if($r)
	    {
               	echo '<center><h1>Successfully Registered!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>';
                $body="Hello $name,We glad you made it to CSMIT.Following are some important links : www.mitindia.edu";
                mail($mai,"welcome",$body);	
	    }
            else
		echo '<center><h1>Not Registered STry Again!!</h1></center>';
        }
	else
		echo '<center><h1>Not Registered Try Again!!</h1></center>';
       
	sleep(5); 	
	header('Refresh: 3; url=register.php');
	
?>		