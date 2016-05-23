<?php
    $name = $_POST['apartmentName'];
    require 'functions.php';
    $connection = getConnection();
    $query = "insert into tb_apartment(apartmentName) values("
            ."'".$name."')";
    $result = $connection->query($query);
    session_start();
    if($result){
        $_SESSION['message'] = "Successfully add a new apartment! ";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=apartmentManage.php\" />";
    }else{
        $_SESSION['message'] = "Error! Could not add a new apartment!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=apartmentManage.php\" />";
    }