<?php
    require 'functions.php';
    html_header("Find Meetings");
    html_navigator();
    ?>
<ul id="naviUser">
    <li><a href="addMeeting.php"><img src="Image/addMeeting.png" alt="add"/>Add Meeting</a></li>
    <li><a href="showMeeting.php"><img src="Image/showMeeting.png" alt="show"/>Show Meeting</a></li>
    <li><a href="findMeeting.php"><img src="Image/findMeeting.png" alt="find"/>Find Meeting</a></li>
    <?php
        if($_SESSION['isAdmin'] == true){
            ?>
            <li><a href="modifyMeeting.php"><img src="Image/modifyMeeting.ico" alt="modify"/>Modify Meeting</a></li>
            <li><a href="deleteMeeting.php"><img src="Image/deleteMeeting.gif" alt="delete"/>Delete Meeting</a></li>
            <?php
        }
    ?>
</ul>
<br/><br/>
<form id="login" action="findMeetingResult.php" method="post">
    Search Value: <input type="text" name="value" required="required"/><br/>
    Search Type: 
    <select name="type">
        <option value="meetingName">Meeting Name</option>
        <option value="apartmentName">Apartment Name</option>
        <option value="meetingPlace">Meeting Place</option>
        <option value="hostName">Host Name</option>
    </select>
    <input type="submit" value="Submit"/> <input type="reset" value="Reset"/>
</form>
    <?php
    html_footer();