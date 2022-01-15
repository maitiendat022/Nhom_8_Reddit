$(document).ready(function(){
    $('#title').change(function(){
        if($("#title").val() != ""){
            $('#btnPost').removeAttr('disabled');
            $('#btnPost').css('background-color', 'rgb(0,121,211)');
            $('#btnPost').css('color', 'white');
            
        }
        else{
           
        }
    })
    $('#video-post').change(function(){
        if($('#video-post').val() != ""){
            $('#video_post').css('display','block');
        }
    })
})