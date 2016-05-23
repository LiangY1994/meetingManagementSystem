<?php
    require 'functions.php';
    html_header('Log In');
     ?>
        <form id="login" action="logInCheck.php" method="post">
            UserID: <input name="id" type="text" required="required" /><br/><br/>
            Password: <input name="password" type="password" required="required" /><br/><br/>
            <input type="submit" value="Log In" />
            <input type="reset" value="Reset" />
        </form>
    <?php
    html_footer();