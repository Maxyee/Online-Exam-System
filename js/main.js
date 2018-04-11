$(function(){
    //For User Registration
    $("#regsubmit").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var email = $("#email").val();
        
        var dataString = 'username='+username+'&password='+password+'&firstname='+firstname+'&lastname='+lastname+'&email='+email;
        
        $.ajax({
            type:"POST",
            url:"getregister.php",
            data:dataString,
            success:function(data){
                $("#state").html(data);
            }
        });
        return false;
    });
    
    
    //For User Login
    $("#loginsubmit").click(function(){
        var email = $("#email").val();
        var password = $("#password").val();
        
        var dataString = 'email='+email+'&password='+password;
        
        $.ajax({
            type:"POST",
            url:"getlogin.php",
            data:dataString,
            success:function(data){
                if($.trim(data) == "empty"){
                    $(".empty").show(data);
                    setTimeout(function(){
                        $(".empty").fadeOut();
                    },5000);
                }
                else if($.trim(data) == "disable"){
                    $(".disable").show(data);
                    setTimeout(function(){
                        $(".disable").fadeOut();
                    },5000);
                }
                else if($.trim(data) == "error"){
                    $(".error").show(data);
                    setTimeout(function(){
                        $(".error").fadeOut();
                    },5000);
                }
                else{
                    window.location = "examlist.php";
                }
            }
        });
        return false;
    });
    
});