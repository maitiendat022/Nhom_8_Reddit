<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reddit - Create account</title>
    <link
      rel="shortcut icon"
      href="https://www.redditstatic.com/desktop2x/img/favicon/favicon-32x32.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="css/sign-up.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container row">
            <div class="left col-md-3">
                <img src="img/signup-left.jpg" alt="">
            </div>
            <div class="right col-md-6">
                <div class="header mt-5 mb-3">
                    <h1>Sign up</h1>
                    <p>By continuing, you are setting up a Reddit account and agree to our
                      <a href="https://www.redditinc.com/policies/user-agreement">User Agreement</a>    and <a href="https://www.redditinc.com/policies/privacy-policy"> Privacy Policy.</a>
                    </p>
                </div>
                <div class="main-right">
                    <button class="google mt-5">
                        <div class="  mt-1">
                            <img src="img/logogg.jpg" alt="" class = "logogg">
                            <span>CONTINUE WITH GOOGLE</span>
                        </div>
                    </button>
                   <button class=" apple mt-3">
                    <div >
                        <img src="img/logoapple.jpg" alt="" class = "logoapple">
                        <span>CONTINUE WITH APPLE </span>
                    </div>
                   </button>
                   <span class="mt-5 ">
                       <hr class=" mt-3 ">
                   </span>
                    <form action="process-SignUp.php" method = "post" id = "formEmail">
                        <div class=" email mt-5">
                            <input value = "<?php isset($email)? $email:"" ?>" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email" name = "txtEmail" required>    
                            <span class="textError" name = "" id= "Error">
                                <?php
                                    if(isset($_GET['error'])){
                                        echo "{$_GET['error']}";
                                    }
                                ?>
                        
                            </span>
                        </div>
                        <div class="username mt-3">
                            <input type="username" class="form-control" name = "Username" id="Username" aria-describedby="emailHelp"
                                placeholder="Username" required>
                            <span class = "textError">
                            <?php
                                    if(isset($_GET['error1'])){
                                        echo "{$_GET['error1']}";
                                    }
                                ?>
                            </span>
                        </div>

                        <div class="password mt-3">
                            <input type="password" class="form-control" name="Password" id="Password" aria-describedby="emailHelp"
                                    placeholder="Password" required>
                            <span class = "textError">
                                <?php
                                    if(isset($_GET['error2'])){
                                        echo "{$_GET['error2']}";
                                    }
                                ?>
                            </span>
                        </div>
                        
                        
                        <button type = "submit" name = "btnContinue" class="bt-continue mt-3">SIGN UP</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    
</body>

</html>