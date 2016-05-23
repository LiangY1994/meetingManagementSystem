<?php
    session_start();
    unset($_SESSION['userID']);
    unset($_SESSION['isAdmin']);
    echo "<meta http-equiv=\"refresh\" content=\"0;url=logIn.php\" />";