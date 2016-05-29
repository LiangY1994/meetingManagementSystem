<?php
    // get parameters
    $value = $_POST['value'];
    $type = $_POST['type'];
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
<table border="2">
    <tr>
        <td>Meeting ID</td>
        <td>Meeting Name</td>
        <td>Apartment Name</td>
        <td>Meeting Place</td>
        <td>Meeting Date</td>
        <td>Host Name</td>
    </tr>
    <?php
    $numEachPage = 2; // set records of each page
    if(isset($_GET['currentPage'])){
        $currentPage = $_GET['currentPage'];
    }
    else{
        $currentPage = 1;
    }
    $connection = getConnection();
    $query = "select * from tb_meeting where ".$type."='".$value."'";
    $result = $connection->query($query);
    $connection->close();
    $sumRecord = $result->num_rows; // get sum of records
    // get number of pages
    if($sumRecord <= $numEachPage){
        $numPages = 1;
    }else if($sumRecord % $numEachPage != 0){
        $numPages = $sumRecord / $numEachPage + 1;
    }else{
        $numPages = $sumRecord / $numEachPage;
    }
    $offset = ($currentPage-1) * $numEachPage;
    $query2 = "select * from tb_meeting  where ".$type."='".$value."'"." order by meetingDate desc limit $offset,$numEachPage";
    $connection2 = getConnection();
    $result2 = $connection2->query($query2);
    $connection2->close();
    while($row = $result2->fetch_array()){
        echo "<tr>";
        echo "<td>".$row['meetingID']."</td>";
        echo "<td>".$row['meetingName']."</td>";
        echo "<td>".$row['apartmentName']."</td>";
        echo "<td>".$row['meetingPlace']."</td>";
        echo "<td>".$row['meetingDate']."</td>";
        echo "<td>".$row['hostName']."</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
// BUG
    echo "<a href='findMeetingResult.php?currentPage=1'>First Page</a><br/>   ";
    if($currentPage > 1){
        $previousPage = $currentPage-1;
        echo "<a href='findMeetingResult.php?currentPage=".$previousPage."'>Previous Page</a><br/>   ";
    }
    if($currentPage < $numPages){
        $nextPage = $currentPage + 1;
        echo "<a href='findMeetingResult.php?currentPage=".$nextPage."'>Next Page</a><br/>   ";
    }
    echo "<a href='findMeetingResult.php?currentPage=".$numPages."'>Last Page</a><br/> ";
    html_footer();