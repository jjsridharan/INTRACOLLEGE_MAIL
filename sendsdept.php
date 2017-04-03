<?php
	include('databaseconnection.php');
session_start();
$ftp_server = "ftp.srict.96.lt";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$ftp_username="u704250527";
$ftp_userpass="sridharan";
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
$body="Greetings \n";
$body.=$_POST['bo'];
$body.= "<html><head></head><body>";
if(!empty($_FILES['fileToUpload']['name']))
{
if (ftp_put($ftp_conn, "1.png",$_FILES['fileToUpload']['tmp_name'], FTP_BINARY))
  {
  echo "Successfully uploaded $file.";
$body.= "<img src='1.png' alt='' /></body></html>";
  }
else
  {
  echo "Error uploading $file.";
  }
}
if(!empty($_FILES['fileToUpload1']['name']))
{
if (ftp_put($ftp_conn, "2.png",$_FILES['fileToUpload1']['tmp_name'], FTP_BINARY))
  {
  echo "Successfully uploaded $file.";
$body.= "<img src='2.png' alt='' /></body></html>";
  }
else
  {
  echo "Error uploading $file.";
  }
}
if(!empty($_FILES['fileToUpload2']['name']))
{
if (ftp_put($ftp_conn, "3.png",$_FILES['fileToUpload2']['tmp_name'], FTP_BINARY))
  {
  echo "Successfully uploaded $file.";
$body.= "<img src='3.png' alt='' /></body></html>";
  }
else
  {
  echo "Error uploading $file.";
  }
}
ftp_close($ftp_conn);
$headers = "From: jjjsridharan@gmail.com";
$headers .= "Content-type: text/html";

if(!empty($_POST['check_list']))
        {
            foreach($_POST['check_list'] as $check)
            {
                    $r=mysql_query("SELECT mail from students where dept='$check'");
                    while($row=mysql_fetch_assoc($r))
                    {
                         $to=$row['mail'];
echo $to."\n";
		         mail($to,"Success",$body,$headers);
                    }
            }
        }
	if($r)
	{	echo '<center><h1>Mail sent!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>';	
	}
	else
		echo '<center><h1>Not Registered Try Again!!</h1></center>';;
	sleep(5); 
        session_destroy();
        session_unset();
        header('Refresh: 3; url=register.php');
?>			