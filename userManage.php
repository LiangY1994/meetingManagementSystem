<?php
    require 'functions.php';
    html_header("User Manage");
    html_navigator();
    ?>
<ul id="naviUser">
    <li><a href="#add" onclick="addUser();return false"><img src="Image/Add.ico" alt="add"/>Add User</a></li>
    <li><a href="#freeze" onclick="freezeUser();return false"><img src="Image/Modify.png" alt="modify"/>Freeze User</a></li>
    <li><a href="#delete" onclick="deleteUser();return false"><img src="Image/Delete.ico" alt="delte"/>Delete User</a></li>
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