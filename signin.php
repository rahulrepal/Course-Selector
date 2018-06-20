<?php
session_start();
$myDb=mysqli_connect('localhost','root','','project') or die("Bad Connection $mysqli_connect_error");
$logged=false;
$username=" ";

 $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
if(isset($_GET['email'])&&isset($_GET['password']))
{
   $username=$_GET['email'];
   $password=$_GET['password']; 
    
}

$_SESSION['username']=NULL;
$query="Select * from users";
$result=mysqli_query($myDb,$query) or die("Bad Query $query");

while($row=mysqli_fetch_assoc($result))
{
   
   if($username==$row['username']&&$password==$row['password'])
   {
       echo "Logged In";
      $logged=true;
       $_SESSION['uname']=$username;
      
    
       header("Location:index.php?logout=0");
      
   }
}
if($logged==false){
   header("Location:login.php");
}
  



?>