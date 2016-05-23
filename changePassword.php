<?php
    require 'functions.php';
    html_header("Change Password");
    html_navigator();
    if(isset($_SESSION['message'])){
        echo "<h2>".$_SESSION['message']."</h2>"; // display message
        unset($_SESSION['message']); // unset this message
    }
?>
<form action="changePasswordResult.php" method="post" id="login">
    User ID: <input name="id" type="text" required="required" /><br/><br/>
    New Password: <input name="newPassword" type="password" required="required" /><br/><br/>
    Confirm Password: <input name="confirmPassword" type="password" required="required" /><br/>
    <input type="submit" value="Submit" /><input type="reset" value="Reset" />
</form>
<?php
    html_footer();