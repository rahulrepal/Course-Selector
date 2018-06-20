<?php

$myDb=mysqli_connect('localhost','root','','project') or die("bad connection $mysqli_connect_error");
if(isset($_POST["cid"])){

$output=NULL;
$cid=$_POST["cid"];
  if($cid!=NULL)
  {
    $in_query="SELECT P.name,P.description,P.price,P.time,P.offer,P.pre,P.opening,C.category,C.image from courses P,categories C WHERE P.id=$cid AND P.id=C.cid ";
    $result=mysqli_query($myDb,$in_query);
    while($row=mysqli_fetch_assoc($result))
    {
      $output.=
        '
        
        <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).' " align="middle" />
        <div class="text_wrapper">
        <p>'.$row['category'].'<p>
        <h1>'.$row['name'].'</h1>
        <h5>'.$row['description'].'</h5>
          <button>ENROLL NOW</button> 
        </div>
        <div class="fle">
        <div >
        <p>TIME</p>
        <h5>'.$row['time'].' Hours </h5>
        </div>
        <div>
          <p>PREREQUISITES</p>
        <h5>'.$row['pre'].'</h5>
        </div>
        <div style="border-right:none">
          <p>CLASSROOM OPENS</p>
        <h5>'.$row['opening'].'</h5>
        </div>
        </div>
        ';
    }
    echo $output;
  }
  
}
?>