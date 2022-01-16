<?php
    if(isset($_POST["btnAvatar"])){
        $user = $_POST["userAvt"];

        $imgPost = "img/user_img/";
       
        $fileImg = basename($_FILES['imgAvatar']['name']);//lấy tên file ảnh chọn để upload
      
        $filePathImg = $imgPost . $fileImg; 
       
        move_uploaded_file($_FILES['imgAvatar']['tmp_name'],$filePathImg);
        
        $connect = mysqli_connect('localhost','root','','reddit');
      
        $sqlUpdate = "UPDATE userreddit SET avatar = '$fileImg' WHERE nameUser = '$user'";
        
        $Update = mysqli_query($connect,$sqlUpdate);

        header("location: profile.php");
    
    }
    
?>