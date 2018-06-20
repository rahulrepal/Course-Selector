$(function(){
        $("#Search").on('click',function(){
           var category=$("#topBar select").val();
           $.ajax({
               url:'serverside/menu.php',
                  method:"POST",
                   data:{category:category},
                  success:function(data){
                   $('section').html(data);}
           })
        });
         $(document).on('click','.wrapper button',function(){
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
   