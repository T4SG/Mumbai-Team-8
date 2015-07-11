<?php
include 'connect.php';

$username = $_POST['user'];
$type=$_POST['type'];
$password = $_POST['password'];
$query_validate = "select * from login where username = '".$username."' AND password = '".$password."' AND type= '".$type."'" ;
$query_exec = mysql_query($query_validate) or die(mysql_error());
$rows = mysql_num_rows($query_exec);
 if($rows == 0) { 
	include 'login.html';
 }
 else  {
    echo "User Found" ;
}
?>