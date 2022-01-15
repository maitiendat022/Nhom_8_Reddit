$(document).ready(function(){
    $("#img-user").change(function(){ 
        if($("#img-user").val() != ""){
            $('#save-Avt').css('display', 'block');
        }
    })
})