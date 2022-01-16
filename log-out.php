<?php
    session_start();

    if(isset($_SESSION['isLogInOk'])){
        unset($_SESSION['isLogInOk']);
        header("location: index.php");
    }

?>