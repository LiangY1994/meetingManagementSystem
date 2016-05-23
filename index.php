<?php
session_start();
if(isset($_SESSION['userID'])){ // check if already log in
    echo "<meta http-equiv=\"refresh\" content=\"0;url=meeting.php\" />";
}else{ // if not, dispatch to log in page
    echo "<meta http-equiv=\"refresh\" content=\"0;url=logIn.php\" />";
}