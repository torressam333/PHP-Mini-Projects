<?php
    
    $id = $_REQUEST['id'];
    require_once("db_connect.php");
    $sql = "DELETE FROM students WHERE studentID= '" . $id . "';";
    //echo($sql);
    mysql_query($sql) or die(mysql_error());
    print("User " . $id . " deleted from the database.");
    print("Return to <a href='grade_list.php'>Grade List.</a>");


?>