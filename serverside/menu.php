<?php
$myDb=mysqli_connect('localhost','root','','project') or die("bad connection $mysqli_connect_error");
$output=NULL;

if(isset($_POST['category'])){
    $category=$_POST['category'];
    if($category!=NULL){
        $in_query="SELECT * FROM `courses` WHERE category like '$category';";
        $in_result=mysqli_query($myDb,$in_query);
        $output=NULL;
        while($row=mysqli_fetch_assoc($in_result)){
            $output .=
                '
                <div class="wrapper" >
                <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" />
                <div class="text_wrapper"><button class="head1" value="'.$row['id'].'">'.$row['name'].'</button>
                
                <i class="fa fa-calendar-o" aria-hidden="true">  '.$row['time'].'         Hours</i>
                <br>
                <h3>'.$row['description'].'</h3>
                </div>
                <div class="price_wrapper">
                <h2>'.$row['price'].'</h2>
                <button  class="btn btn-outline-primary"  value="'.$row['name'].'">Enroll</button>
                
                </div>
             
                </div>
                ';
                
                
                
        }
        
        echo $output;
    }
}
?>