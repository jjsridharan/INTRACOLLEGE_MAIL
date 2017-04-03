<?php
      include('databaseconnection.php');
      session_start();
      $use=$_POST['us'];
      $pas=$_POST['pa'];
      $_SESSION['user']=$use;
      $r=mysql_query("select * from login where user='$use' && pass='$pas'");
      if(mysql_num_rows($r)==1)
      {	
           echo '<center><h1>Successfully logged in!</h1></center>';
           echo '<center><h2>Wait while you are forwarded....</h2></center>';	
           header('Refresh: 3; url=update.php');
           sleep(3);
      }
      else
      { 
         echo '<center><h1>Wrong Username or password!!!</h1></center>';
         header('Refresh: 3; url=register.php');
         sleep(3);
      }     
?>								