    <?php
// storage of functions
function getConnection(){
    require 'dbInfo.php';
    $connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    if(!$connection){
        throw new Exception("Could not conncet to database $dbName");
    }else{
        return $connection;
    }
}    
function html_header($title){ // define of header
    ?>
    <html>
    <head>
        <title><?php echo $title; ?></title>
        <?php
            session_start();
            if(!isset($_SESSION['userID'])){
                header("http://localhost/meetingManagement/logIn.php");
            }
        ?>
        <script src="JS/userManage.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/main.css" />
    </head>
    <body>
        <img src="Image/banner.jpg" id="banner" alt='Banner' />
        <h2 id="header">Meeting Management System</h2>
        <hr/>
    <?php
}
function html_navigator(){
    ?>
        <ul class='navigator'> <!--Navigator-->
            <?php
                if(isset($_SESSION['isAdmin'])){
                    $isAdmin = $_SESSION['isAdmin'];
                    if($isAdmin == true){ // if admin, add 2 more choises
                        echo "<li><a href='userManage.php'>User Manage</a></li>";
                        echo "<li><a href='meetingManage.php'>Meeting Manage</a></li>";
                        echo "<li><a href='apartmentManage.php'>Apartment Manage</a></li>";
                    }else{
                        echo "<li><a href='meeting.php'>Meetings</a></li>";
                    }
                }
            ?>
            <li><a href='changePassword.php'>Change Password</a></li>
            <li><a onclick="confirmLogOut()">Log Out</a></li>
        </ul><br/><br/>
    <?php
}
function html_footer(){ // define of footer
    ?>
        <hr/>
        <div id='footer'>Meeting Management System@Liang Yi</div>
        </body>
    </html>
    <?php
}