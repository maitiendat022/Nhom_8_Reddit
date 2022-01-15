<?php
    session_start();
    if(!isset($_SESSION['isLogInOk'])){
      header("location: index.php");
    }
    
    $user = $_GET['user'];
    $idPost = $_GET['idPost'];

    $connect = mysqli_connect('localhost','root','','reddit');

    $sqlDelete = "DELETE FROM postreddit WHERE nameUser = '$user' AND idPost = '$idPost'";

    $resultDelete = mysqli_query($connect,$sqlDelete);

    if($resultDelete>0){
        header("location: profile.php");
    }

?>