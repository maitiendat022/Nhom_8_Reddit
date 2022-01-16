<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link
      rel="shortcut icon"
      href="https://www.redditstatic.com/desktop2x/img/favicon/favicon-32x32.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="css/phuong.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src= "js/jquery-3.6.0.min.js"></script>
    <script src="js/logIn.js"></script>
</head>

<body>
    <main>
        <div class="container row">
            <div class="left col-md-3">
                <img src="img/login-left.jpg" alt="">
            </div>
            <div class="right col-md-6">
                <div class="header mt-5 mb-3">
                    <h1>Login</h1>
                    <p class="UserAgreement">
                        By continuing, you agree to our 
                        <a href="https://www.redditinc.com/policies/user-agreement">User Agreement</a>
                        and
                        <a href="https://www.redditinc.com/policies/privacy-policy">Privacy Policy</a>
                        .
                    </p>
                </div>
                <div class="main-right">
                    <button class="google ">
                        <div class=" logo ">
                            <div class="img">
                                <img src="img/logo-google.png" alt="">
                            </div>
                            <span>CONTINUE WITH GOOGLE</span>
                        </div>
                      
                    </button>
                   <button class=" apple mt-2 ">
                        <div class=" logo2 ">
                            <div class="img2">
                                <img src="img/logoapple.jpg" alt="">
                            </div>
                        
                        <span>CONTINUE WITH APPLE </span>
                    </div>
                   </button>
                   <span class="mt-2">
                         <div class="login-or"><span>OR</span></div>
                   </span>
                    <form action = "process-LogIn.php" method = "post">
                        <div class=" USERNAME ">
                            <input type="email" class="form-control" name = "textEmail" id="email" placeholder="Email" required>
                            <small id = "emailError"></small>
                        </div>
                        <div class=" PASSWORD mt-3">
                            <input type="password" class="form-control" name = "textPass" id="pass" placeholder="Password" required>
                            <small style="color:red" class="textError" name = "" id= "Error">
                            <?php
                                if(isset($_GET['errorLogIn'])){
                                    echo "{$_GET['errorLogIn']}";
                                }else{
                                    echo "";
                                }
                            ?>
                            </small> 
                        </div>
                        <button class="bt-login mt-3 mb-3" type = "submit" name = "btnLogIn">LOG IN</button>
                    </form>
                    <div class="login mt-4">
                    <p class="login-already">
                    <span>Forgot your</span>
                    <a href="#" class="login-link">username</a>
                    <span>or</span>
                    <a href="#" class="login-link">password</a>
                    <span>?</span>
                    </p>
                    
                    </div>
                    <div class="login mt-4">
                    <p class="login-already">
                    <span>New to Reddit?</span>
                    <a href="sign-up.php" class="login-link1">SIGN UP</a>
                        <a href=""></a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>