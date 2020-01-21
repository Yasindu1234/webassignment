<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "webAssignment";

$db_connect = mysqli_connect($db_host,$db_username,$db_password,$db_name);

if(mysqli_connect_error())
{
    echo "failed to connect to mysql :" .mysqli_connect_error() or die();
}

//connection successful

$name = $_REQUEST['name'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['message'];

//insert data to the table
$query = mysqli_query($db_connect,"INSERT INTO contact(name,mobile,email,message) 
        VALUES ('$name','$mobile','$email','$msg')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php");

?>