<?php
session_start();
if(!isset($_SESSION['uname'])){
    header("Location:login.php");
  
}

?>

<html>
<head>
<title>project</title>
    <link href="fonts/font_style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
     <link rel="stylesheet" href="topBar.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">    
    <script src="script/jquery.js"></script>
    <script>
    $(function(){
        $("select").on('change',function(){
           var category=$("#topBar select").val();
           $.ajax({
               url:'serverside/menu.php',
                  method:"POST",
                   data:{category:category},
                  success:function(data){
                   $('section').html(data);}
           });
        });
         $(document).on('click','.price_wrapper button',function(){
          var enroll=$(this).val();
            var button=$(this);
             console.log(button);
                 
      
                $.ajax({
                   url:'enroll.php',
                     method:"POST",
               data:{enroll:enroll},
               success:function(data){
                   $(button).html(data);
               }
           });
        });
        $(document).on('click','.wrapper .head1',function(){
             var id=$(this).val();
            console.log(id);
             window.location="c.php?ID="+id;
           
        });
         $("#MyCourses").on('click',function(){
       var uname='<?php echo $_SESSION['uname']; ?>';
         console.log(uname);
           $.ajax({
           url:'mycourses.php',
           method:"POST",
           data:{uname:uname},
           success:function(data){
               $('section').html(data);
           }
       });
     }); 
           $("#MyCourses").on('click',function(){
       var uname='<?php echo $_SESSION['uname']; ?>';
         console.log(uname);
           $.ajax({
           url:'aboutme.php',
           method:"POST",
           data:{uname:uname},
           success:function(data){
               $('footer').html(data);
           }
       });
     }); 
       
    })
    </script>
</head>
<body>
<div id="topBar">
    <ul>
    <li class="logo"></li>
        <li><select><option value="web">Web Development</option><option value="mobile">Mobile Development</option><option value="software">Software Testing</option></select></li>
        <li><button type="button" id="Search" class="btn btn-outline-info">Search</button></li>
        <li><button type="button" id="MyCourses" class="btn btn-outline-info">My Courses</button></li>
        <li><button type="button" id="logout" class="btn btn-outline-info"><a href="index.php?logout=1">Log Out</a></button></li>
    </ul>
    
    </div>  
    <section>
          
    </section>
    <footer>
    
    </footer>
  <?php 
    
     $logout=$_GET['logout'];
    if($logout==1){
       
    session_unset();
    session_destroy();
        header("Refresh:0");
}
    ?>
</body>
</html>
