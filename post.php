<?php    
    
    if(isset($_POST["btnPost"])){
        
        $user = $_POST["user"];
        $title = $_POST['title'];
        $content = $_POST['content'];
         
        $imgPost = "img/post_img/";//đường dẫn file lưu trữ ảnh sẽ up lên trang 
        $videoPost = "video/";// đường dẫn file lưu trữ video sẽ up lên trang 
        $fileImg = basename($_FILES['img']['name']);//lấy tên file ảnh chọn để upload
        $fileVideo = basename($_FILES['video']['name']);//lấy tên file video chọn để upload
        
        $filePathImg = $imgPost . $fileImg; // nỗi chuỗi đường linh vs tên file
        $filePathVideo = $videoPost . $fileVideo;

        move_uploaded_file($_FILES['img']['tmp_name'],$filePathImg);// lưu trữ vào file trong máy
        move_uploaded_file($_FILES['video']['tmp_name'],$filePathVideo);

        

        $connect = mysqli_connect('localhost','root','','reddit');
        $sql = "INSERT INTO postreddit(nameUser,title,content,img,video,likes,timeupload) VALUES ('$user','$title','$content','$fileImg','$fileVideo',0,NOW())";
        $insert = mysqli_query($connect,$sql);
        
        header("location: home.php");
        
            
    }



?>