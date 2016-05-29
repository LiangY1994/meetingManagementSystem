<?php
    // get parameters
    $meetingName = $_POST['meetingName'];
    $apartment = $_POST['apartmentName'];
    $hostName = $_POST['hostName'];
    $meetingPlace = $_POST['meetingPlace'];
    $meetingAbstract = $_POST['meetingAbstract'];
    $meetingDate = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    require 'functions.php';
    $check = "select * from tb_meeting where "
            ."apartmentName='".$apartment."' "
            ."and meetingName='".$meetingName."' "
            ."and hostName='".$hostName."' "
            ."and meetingAbstract='".$meetingAbstract."' "
            ."and meetingPlace='".$meetingPlace."' "
            ."and meetingDate='".$meetingDate
            ."')";
    $connection2 = getConnection();
    $checkResult = $connection2->query($check);
    $connection2->close();
    if($checkResult->num_rows != 0){ // check if this meeting has already been added
        session_start();
        $_SESSION['message'] = "This meeting has already been added!";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=meetingManage.php\" />";
    }else{
        $connection = getConnection();
        $query = "insert into tb_meeting(apartmentName, meetingName, hostName, meetingAbstract, meetingPlace, meetingDate) values("
            ."'".$apartment."', "
            ."'".$meetingName."', "
            ."'".$hostName."', "
            ."'".$meetingAbstract."', "
            ."'".$meetingPlace."', "
            ."'".$meetingDate
            ."')";
        $result = $connection->query($query);
        $connection->close();
        session_start();
        if($result){
            $_SESSION['message'] = "Successfully add a meeting!";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=meetingManage.php\" />";
        }else{
            $_SESSION['message'] = "Error! Could not add this meeting!";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=meetingManage.php\" />";
        }
    }