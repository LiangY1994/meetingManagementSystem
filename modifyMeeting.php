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
<form id="login" action="modifyMeetingResult.php" method="post">
    Modified Meeting ID: <input name="meetingID" type="text" required="required" /><br/>
    Set Meeting Name: <input name="meetingName" type="text" required="required" /><br/><br/>
    Set Apartment Name: 
    <select name="apartmentName">
        <?php
        $connection = getConnection();
        $query = "select * from tb_apartment";
        $result = $connection->query($query);
        while($row = $result->fetch_array()){
            echo "<option value='".$row['apartmentName']."'>".$row['apartmentName']."</option>";
        }
        ?>
    </select><br/><br/>
    Set Meeting Place: <input name="meetingPlace" type="text" required="required" /><br/><br/>
    Set Meeting Date: 
    <select name="year">
        <?php
                for ($index = 2013; $index < 2017; $index++) {
                    echo "<option value='".$index."'>".$index."</option>";
                }
        ?>
    </select>- 
    <select name="month">
        <?php
                for ($index = 1; $index < 13; $index++) {
                    echo "<option value='".$index."'>".$index."</option>";
                }
        ?>
    </select>- 
    <select name="day">
        <?php
                for ($index = 1; $index < 32; $index++) {
                    echo "<option value='".$index."'>".$index."</option>";
                }
        ?>
    </select> <br/><br/>
    Set Host Name: <input name="hostName" type="text" required="required" /><br/><br/>
    Set Meeting Abstract: <input name="meetingAbstract" type="text" required="required" /><br/><br/>
    <input type="submit" value="Submit"/> <input type="reset" value="Reset"/>
</form>
    <?php
    html_footer();