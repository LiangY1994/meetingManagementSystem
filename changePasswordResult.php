<?php
    $id = $_POST['id']; // get parameters
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    session_start();
    if($newPassword != $confirmPassword){
        $_SESSION['message'] = "Error! New password does not match confirm password.";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=changePassword.php\" />";
    }else{
        require 'functions.php';
        $connection = getConnection();
        $query = "update tb_user set userPassword='".$newPassword."' where userID='".$id."'";
        $result = $connection->query($query);
        if($result){
            $_SESSION['message'] = "Successfully reset a new password!";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=changePassword.php\" />";
        }else{
            $_SESSION['message'] = "Error! Could not reset password. Please try again.";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=changePassword.php\" />";
        }
    }
    
    