<?php
session_start();
$myDb=mysqli_connect('localhost','root','','project') or die("bad connection $mysqli_connect_error");
$output=NULL;
    $flag=false;
    $enroll=$_POST['enroll'];
    $uname=$_SESSION['uname'];
    $on_query="Select * from enrolled";
    $on_result=mysqli_query($myDb,$on_query);
      while($row=mysqli_fetch_assoc($on_result)){
          
          if($uname==$row['uname']&&$enroll==$row['ename']){
             $flag=true; 
          }
      }  
    if($flag==true){
        $output="Already Enrolled";
        
    }
else{
   $in_query="INSERT INTO `enrolled` (`id`, `uname`, `ename`) VALUES (NULL, '".$uname."', '".$enroll."');";
    
    $in_result=mysqli_query($myDb,$in_query);
    $output="enrolled";
}
    
    echo $output;

    

?>