<?php
session_start();
$myDb=mysqli_connect('localhost','root','','project')or die("there was an error");
if(isset($_GET['fname'])&&isset($_GET['lname'])&&isset($_GET['email'])&&$_GET['password']&&isset($_GET['phnno'])&&isset($_GET['country'])&&isset($_GET['field'])){
    
    $fname=$_GET["fname"];
    $lname=$_GET["lname"];
    $uname=$_GET["email"];
    $password=$_GET["password"];
    $phnno=$_GET["phnno"];
    $country=$_GET["country"];
    $field=$_GET["field"];
    $in_query="INSERT INTO `users` (`id`, `username`, `password`, `email`, `country`, `mobile`, `field`, `fname`, `lname`) VALUES (NULL, '".$uname."', '".$password."', '".$uname."', '".$country."', '".$phnno."', '".$field."', '".$fname."', '".$lname."');";
    $in_result=mysqli_query($myDb,$in_query) or die("failed to insert");
	header("Location:login.php");
    
}
else{
    echo "Error Failed";
}

?>