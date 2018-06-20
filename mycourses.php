<?php
$myDb=mysqli_connect('localhost','root','','project') or die("bad connection $mysqli_connect_error");
$output=NULL;
if(isset($_POST['uname'])){
  $uname=$_POST['uname'];
  $in_query="SELECT * FROM `enrolled` WHERE uname like '$uname'";
  $in_result=mysqli_query($myDb,$in_query);
  
  while($row=mysqli_fetch_assoc($in_result)){
    $output.=
      '
      <div class="pcourses">'.$row['ename'].'</div>
      ';
  }
  echo $output;
}
?>