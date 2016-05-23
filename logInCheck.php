<?php
    require 'functions.php';
    $userid = $_POST['id']; // get id and password
    $password = $_POST['password'];
    $query = "select * from tb_user where userID=$userid and userPassword='".$password."'";
    $connection = getConnection(); // initialization of database connection
    $result = $connection->query($query);
    if($result->num_rows == 0){
        html_header('Log In');
        ?>
        <h2>Invalid userID or password, please try again.</h2>
        <form id="login" action="logInCheck.php" method="post">
            UserID: <input name="id" type="text" required="required" /><br/><br/>
            Password: <input name="password" type="password" required="required" /><br/><br/>
            <input type="submit" value="Log In" />
            <input type="reset" value="Reset" />
        </form>
        <?php
    html_footer();
    }else{
        $row = $result->fetch_object();
        if($row->isFrozen == true){
            ?>
            <h2>This ID is frozen, please contact administrator for further information.</h2>
            <form id="login" action="logInCheck.php" method="post">
            UserID: <input name="id" type="text" required="required" /><br/><br/>
            Password: <input name="password" type="password" required="required" /><br/><br/>
            <input type="submit" value="Log In" />
            <input type="reset" value="Reset" />
            </form>
            <?php
        }else{
            session_start();
            $_SESSION['userID'] = $userid;
            $_SESSION['isAdmin'] = $row->isAdmin;
            if($_SESSION['isAdmin'] == true){
                echo "<meta http-equiv=\"refresh\" content=\"0;url=userManage.php\" />";
            }else{
                echo "<meta http-equiv=\"refresh\" content=\"0;url=meeting.php\" />";
            }
        }
    }