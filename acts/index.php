<?php

include("2ndconnect.php");
if(isset($_POST['username'])){
    $result = $conn->query("select * from login where user like '$_POST[username]' and pass like '$_POST[password]'");
    $count = mysqli_num_rows($result);
        if ($count ==1) {
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION["username"] = $row;
            header("location: next.html");
        }
            else{
                echo"something went wrong, please check your password or username";
            }
        
}

?>

<html>
    <title>Log In</title>
    <body>
        <h1>LOG IN</h1>
        <form method="post" action="index.php">
            username: <input type="text" name="username">
            <br>
            password: <input type="password" name="password">
            <input type="submit" value="log in">
        </form>
    </body>
</html>
