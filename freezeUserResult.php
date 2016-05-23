<?php
    $id = $_POST['userID']; // get parameters
    require 'functions.php';
    $connection = getConnection();
    $query = "update tb_user set isFrozen = true where userID='".$id."'";
    $result = $connection->query($query);
    session_start();
    if($result){
        $_SESSION['message'] = "Successfully freeze a new user! ID=$id";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=userManage.php\" />";
    }else{
        $_SESSION['message'] = "Error! Could not freeze a new user!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=userManage.php\" />";
    }