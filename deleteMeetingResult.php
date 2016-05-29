<?php
    $id = $_POST['meetingID']; // get parameters
    require 'functions.php';
    $connection = getConnection();
    $query = "delete from tb_meeting where meetingID='".$id."'";
    $result = $connection->query($query);
    session_start();
    if($result){
        $_SESSION['message'] = "Successfully delete a meeting! ID=$id";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=meetingManage.php\" />";
    }else{
        $_SESSION['message'] = "Error! Could not delete this meeting!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=meetingManage.php\" />";
    }