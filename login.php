<?php
session_start();
?>
<html>
<head>
<title>Log In</title>
    <link href="fonts/font_style.css" type="text/css" rel="stylesheet">
   <link href="login_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">  
    <script src="script/jquery.js"></script>
    <script>
    $(function(){
    $("#signup_wrapper").hide();
     $("#signin").addClass("button_active");
        $("#signup").on('click',function(){
           $("#signin_wrapper").hide();
            $("#signup_wrapper").show();
          $(this).addClass("button_active");
          $("#signin").removeClass("button_active");
        });
         $("#signin").on('click',function(){
           $("#signin_wrapper").show();
            $("#signup_wrapper").hide();
          $(this).addClass("button_active");
          $("#signup").removeClass("button_active");
        });
        
    })
    </script>
 <script src="script/validation.js">
 
 </script>
</head>
<body style="background-color:#d3d4d4;">

    <div id="log_in" style="margin-top:50px">
        <div class="btn_wrapper">
          <button id="signup" style="outline:none">Sign Up</button>
           <button id="signin" style="outline:none">Sign In</button>
        </div>
        <div class="form_wrapper">
         <div id="signup_wrapper">
        <form id="signup_form" action="signup.php" method="get" onsubmit="return validate();">
         <h1>Create Your Student Account</h1>
        <input type="text" id="fname" name="fname" placeholder="FirstName" style="width:38%;"> 
             <input type="text" id="lname" name="lname" placeholder="LastName" style="width:38%;"> 
         <br>  
             <input type="text" id="email" name="email" placeholder="EmailId"> 
              <input type="text" id="password" name="password" placeholder="Password must be 8 characters long ">
             <input type="text" id="phnno" name="phnno" placeholder="MobileNumber">  
             <input type="text" id="country" name="country" placeholder="CountryName"> 
            <input type="text" id="field" name="field" placeholder="FieldName"><br>
         <p>By signing up, you agree to the AdamsandAbigals Terms of Service.</p>
            <input type="submit" value="Sign Up">
         <p id="error_para" ></p>
        </form>
        </div>
          <div id="signin_wrapper">
        <form id="signin_form" action="signin.php" method="get">
       
               
             <input type="text" name="email" placeholder="EmailId"> 
             <input type="password" name="password" placeholder="Password " style="width:80%;padding:8px;margin:8px;
    border:solid 1px #d5d6d9;
    box-shadow:0 2px 2px 0 rgba(46, 60, 73, 0.05);">
            <br>
            <input type="submit" value="Sign In">
        </form>
        </div>
        </div>
  
       
    </div>
  
</body>
</html>