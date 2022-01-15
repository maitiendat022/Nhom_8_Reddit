<?php
    if(isset($_POST['btnEdit'])){
        $user = $_POST['user'];
        $idPost = $_POST['idPost'];
        $content = $_POST['content'];
        $img = $_FILES['img'];
        $video = $_FILES['video'];

        if($img['size'] == 0){
            $fileImg = $_POST['img-old'];
        }else{
            $imgPost = "img/post_img/";
            $fileImg = basename($_FILES['img']['name']);
            $filePathImg = $imgPost . $fileImg;
            move_uploaded_file($_FILES['img']['tmp_name'],$filePathImg);
            
        }
        if($video['size'] == 0){
            $fileVideo = $_POST['video-old'];
        }else{
            $videoPost = "video/";
            $fileVideo = basename($_FILES['video']['name']);
            $fileVideo = basename($_FILES['video']['name']);
            move_uploaded_file($_FILES['video']['tmp_name'],$filePathVideo);
        }

        $connect = mysqli_connect('localhost','root','','reddit');
        $sqlUpdate = "UPDATE postreddit SET content = '$content', img = '$fileImg', video = '$fileVideo'
                       WHERE nameUser = '$user' AND idPost = '$idPost' ";
        
        $update = mysqli_query($connect,$sqlUpdate);

        header("location:profile.php");
        
    }


?>