<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        $user;
        if(isset($_REQUEST['user']))
        {
            $user = $_REQUEST['user'];
            session_start();
            $_SESSION['username'] = $user;
            print("Session saved");
        }
    ?>
</head>
<body>
    <form action="L10_Combo.php" method="post">
        <label for="user">Username:</label><input type="text" id="user" name="user" />
        </br>
        <br/><input type="submit" value="Save Session" />
        <br>
        <br/><a href="L10_Combo2.php">Go to page 2</a>
    </form>
</body>
</html>