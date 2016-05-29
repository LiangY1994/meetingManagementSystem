<?php
    require 'functions.php';
    html_header("Normal User");
    html_navigator();
    ?>
<ul id="naviUser">
    <li><a href="addMeeting.php"><img src="Image/addMeeting.png" alt="add"/>Add Meeting</a></li>
    <li><a href="showMeeting.php"><img src="Image/showMeeting.png" alt="show"/>Show Meeting</a></li>
    <li><a href="findMeeting.php"><img src="Image/findMeeting.png" alt="find"/>Find Meeting</a></li>
</ul>
<br/><br/>
<?php
    if(isset($_SESSION['message'])){
        echo "<h2>".$_SESSION['message']."</h2>"; // display message
        unset($_SESSION['message']); // unset this message
    }
?>
<form id="myform" method="post">
    <div id="lastNode"></div>
</form>
    <?php
    html_footer();