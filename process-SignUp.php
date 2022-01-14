<?php
    
        $email= $_POST['txtEmail'];
        $user = $_POST['Username'];
        $pass = $_POST['Password'];
       
        $connect = mysqli_connect('localhost','root','','reddit');
        if(!$connect){
            die("Kết nốt thất bại. Vui lòng kiểm tra lại các thông tin máy chủ.");
        };
            
        $sqlEmail = "SELECT * FROM userreddit WHERE email = '$email' ";
        $sqlUsername = "SELECT * FROM userreddit WHERE nameUser = '$user' ";
        $resultEmail = mysqli_query($connect,$sqlEmail);
        $resultUsername = mysqli_query($connect,$sqlUsername);

        if(mysqli_num_rows($resultEmail) > 0){
            $error = "Email already exists. Please enter another email"; 
            header("location: sign-up.php?error=$error");
        }else{
            if(strlen($user)<3 || strlen($user)>20){   
                $error1 = "Username must be between 3 and 20 characters"; 
                header("location: sign-up.php?error1=$error1");
            }else{
                if(mysqli_num_rows($resultUsername) > 0){
                    $error1 = "Username already exists. Please enter another Username"; 
                    header("location: sign-up.php?error1=$error1");
                }else{
                    if(strlen($pass) < 6){
                        $error2 = "Password must be at least 6 characters long"; 
                        header("location: sign-up.php?error2=$error2");
                    }else{
                        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                        $sqlInsert="INSERT INTO userreddit(email,nameUser,password,avatar,daycreate) VALUES('$email','$user','$pass_hash',0,NOW())";
            
                        $resultInsert = mysqli_query($connect,$sqlInsert);
                        if(isset($resultInsert) > 0){
                            header("location: log-in.php");
                        }else{
                            $error2 = "Error";
                            header("location: sign-up.php?error2=$error2");
                        }
                       
                    }
                }
            }
        }     
    mysqli_close($connect); 
        
?>