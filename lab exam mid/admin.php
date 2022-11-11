<?php
        if(isset($_COOKIE['status'])){

?>
<html>
    <head>
        <body>
            <center>
                <h3><i> Admins'home page!</i></h3>
                <h2><b> Welcome Bob!</b></h2>
            </center>

            <center>
                <a href = "userList.php"> Profile </a><br>

                <a href = "userList.php"> View User </a><br>
        
                <a href = "logout.php"> Logout </a>
            </center>

        </body>
    </head>
</html>
<?php }
else{
    echo "Invalid request";
}
?>