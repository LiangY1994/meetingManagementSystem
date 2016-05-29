<?php
    $id = $_POST['userID']; // get parameters
    $password = $_POST['userPassword'];
    $apartment = $_POST['apartmentName'];
    require 'functions.php';
    $connection = getConnection();
    $query = "insert into tb_user(userID, userPassword, apartmentName) values("
            ."'".$id."',"
            ."'".$password."',"
            ."'".$apartment."')";
    $result = $connection->query($query);
    session_start();
    if($result){
        $_SESSION['message'] = "Successfully add a new user! ID=$id, Password=$password.";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=userManage.php\" />";
    }else{
        $_SESSION['message'] = "Error! Could not add a new user!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=userManage.php\" />";
    }