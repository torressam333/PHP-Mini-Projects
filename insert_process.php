<?php

    require_once('dbconnect.php');

    $last = $_REQUEST['last'];
    $first = $_REQUEST['first'];
    $department = $_REQUEST['department'];
    $position = $_REQUEST['position'];
    $salary = $_REQUEST['salary'];


    //echo($last . ' ' . $first . ' ' . $department . ' ' . $position . ' ' .  $salary);
  
    $sql = "INSERT INTO `employees` VALUES (0," . 
                                            "'" . $last . "'," .
                                            "'" . $first . "'," .
                                            "'" . $department . "'," .
                                            "'" . $position . "'," .
                                            "'" . $salary . "')";
    
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    echo($first . ", " . $last . " succesfully added to the database! ");
    echo("<br/>Go back to <a href='index.php'>Main Page.</a>");

?>