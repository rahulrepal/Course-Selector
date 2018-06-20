<?php
session_start();
if(!isset($_GET['ID'])){
    header("Location:login.php");
  
}
else{
  $_SESSION["ID"]=$_GET["ID"];
  
}

?>

<html>
<head>
<title>
Courses    
</title>    

    
  
    <link href="fonts/font_style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link type="text/css" href="header.css" rel="stylesheet">
        
        
 <script src="script/jquery.js"></script>
  <script>
  $(function(){
    var cid=<?php echo $_SESSION["ID"] ?>;
 
     $.ajax({
               url:'serverside/header.php',
                  method:"POST",
                   data:{cid:cid},
                  success:function(data){
                   $('.wrapper').html(data);}
           });
    
    


    
  })
  </script>
  </head>
  <body>

        
    <div class="wrapper"></div>
    
  </body>
</html>