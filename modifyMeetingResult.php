<?php
    $id = $_POST['meetingID']; // get parameters
    $meetingName = $_POST['meetingName'];
    $apartment = $_POST['apartmentName'];
    $hostName = $_POST['hostName'];
    $meetingPlace = $_POST['meetingPlace'];
    $meetingAbstract = $_POST['meetingAbstract'];
    $meetingDate = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    require 'functions.php';
    $connection = getConnection();
    $query = "update tb_meeting set "
            ."meetingName='".$meetingName."',"
            ."apartmentName="."'".$apartment."', "
            ."hostName="."'".$hostName."', "
            ."meetingAbstract="."'".$meetingAbstract."', "
            ."meetingPlace="."'".$meetingPlace."', "
            ."meetingDate="."'".$meetingDate."' "
            ."where meetingID='".$id."'";
    $result = $connection->query($query);
    session_start();
    if($result){
        $_SESSION['message'] = "Successfully modify a meeting! ID=$id";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=meetingManage.php\" />";
    }else{
        $_SESSION['message'] = "Error! Could not modify this meeting!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=meetingManage.php\" />";
    }