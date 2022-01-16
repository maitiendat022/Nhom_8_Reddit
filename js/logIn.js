$(document).ready(function(){

    $("#email").change(function(){
        let emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(emailPattern.test($(this).val()) == false){
            $("#emailError").text("Email không hợp lệ").css("color","red");
            $("#email").css("outline","1px solid red");
            $("#email").css("boder","0");
        }
        else{
            $("#emailError").text("")
            $("#email").css("outline","0");
        }
    })
})


