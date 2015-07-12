<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$text=$_POST["text"];
	//$to = "parth1861994@gmail.com";
	$to = "enactushrcollege199@gmail.com";
	$subject = "Mail from $name";
	$message ="Message: $text \n\n From:- \n Email id : $email \n Contact Number : $mobile  \r\n";
    $header = "From: Enactus Website \r\n";
    $retval = mail ($to,$subject,$message,$header);
    if( $retval == true )  
    {
       echo "Message sent successfully...";
	   echo "Mail from $name";
	echo "$text \n\n From:- \n Email id : $email \n Contact Number : $mobile  \r\n";
    }
    else
    {
       echo "Message could not be sent...";
    }
	if(strpos($_SERVER['HTTP_REFERER'],'?email=success') !== false)
		{
			//echo substr($_SERVER['HTTP_REFERER'],0,strpos($_SERVER['HTTP_REFERER'],'?status=fail')-1);
			//echo $_SERVER['HTTP_REFERER'];
			header('Location: ' .$_SERVER['HTTP_REFERER']);
			
		}
		else
		{
			
			header('Location: ' . $_SERVER['HTTP_REFERER']."?email=success");
		}
?>
</body>
</html>
