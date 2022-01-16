<?php
    
    session_start();

    if(isset($_POST['btnLogIn'])){
        $email = $_POST['textEmail'];
        $pass = $_POST['textPass'];
        
        $connect = mysqli_connect('localhost','root','','reddit');
        if(!$connect){
            die("Kết nốt thất bại. Vui lòng kiểm tra lại các thông tin máy chủ.");
        };
        $sql = "SELECT * FROM userreddit where (email = '$email' or nameUser = '$email')";

        $result = mysqli_query($connect,$sql);
   
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $pass_hash = $row['password'];
            $user = $row['nameUser'];
            if(password_verify($pass,$pass_hash)){
                $_SESSION['isLogInOk'] = $user;
                header("location:popular.php");
            }else{
                $errorLogIn = "Incorrect account or password ";
                header("location:log-in.php?errorLogIn=$errorLogIn");
            }
        }
        else{
            $errorLogIn = "Incorrect account or password ";
            header("location:log-in.php?errorLogIn=$errorLogIn");
        }
        mysqli_close($connect);

    }else{
        header("location: log-in.php");
    }

?>
