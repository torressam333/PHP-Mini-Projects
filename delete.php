<?php
    //Capture the id that was just passed
    $id = (isset($_REQUEST['id']) ? $_REQUEST['id'] : '');

    //Connect to the correct DB
    require_once('dbconnect.php');

    //Create our SQL query
    $sql = "DELETE FROM employees WHERE empid= '" . $id . "';";
    //echo($sql);

    //RUN SQL Command
    mysqli_query($connect,$sql) or die(mysql_error());
    print("User " . $id . " deleted from the database.");
    print("Return to <a href='index.php'>Return To Main Page</a>");

?>