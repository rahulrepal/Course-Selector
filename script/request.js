$(function(){
    $("#topBar ul li").on('click',function(){
        var category=$(this).attr("name");
        $.ajax({
           url:'serverside/menu.php',
           method:"POST",
           data:{name:name},
            success:function(data){
                $('#menu_options').html(data);
            }
       });
    });
    
})