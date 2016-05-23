<?php
    require 'functions.php';
    html_header("Apartment Manage");
    html_navigator();
    if(isset($_SESSION['message'])){
        echo "<h2>".$_SESSION['message']."</h2>"; // display message
        unset($_SESSION['message']); // unset this message
    }
?>
<form action="apartmentManageResult.php" method="post" id="login">
    Add a new apartment:<br/><br/>
    New apartment name:<input type="text" name="apartmentName" required="required" /><br/><br/>
    <input type="submit" value="Submit" /><input type="reset" value="Reset"/>
</form>
<?php
    html_footer();