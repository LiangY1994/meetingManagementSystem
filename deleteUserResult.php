<?php
    $id = $_POST['userID']; // get parameters
    require 'functions.php';
    $connection = getConnection();
    $query = "delete from tb_user where userID='".$id."'";
    $result = $connection->query($query);
    session_start();
    if($result){
        $_SESSION['message'] = "Successfully delete a new user! ID=$id";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=userManage.php\" />";
    }else{
        $_SESSION['message'] = "Error! Could not delete this user!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=userManage.php\" />";
    }