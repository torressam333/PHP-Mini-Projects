<?php

    require_once("db_connect.php");

    $last = $_REQUEST['last'];
    $first= $_REQUEST['first'];
    $grade1 = $_REQUEST['test1Grade'];
    $grade2 = $_REQUEST['test2Grade'];
    $grade3 = $_REQUEST['test3Grade'];
    $grade4 = $_REQUEST['test4Grade'];
    $final = $_REQUEST['finalExamGrade'];
    
    $sql= "INSERT INTO students VALUES (''," .
                                        "'" . $last . "'," .
                                        "'" . $first . "'," .
                                        "'" . $grade1 . "'," .
                                        "'" . $grade2 . "'," .
                                        "'" . $grade3 . "'," .
                                        "'" . $grade4 . "'," .
                                        "'" . $final . "')";
                                        
    mysql_query($sql);
    mysql_close($conn);
    
    echo($last . " successfully added to the database.");
    echo("<br/>Go back to <a href='grade_list.php'>main page.</a>")
                                        
    //echo($sql);
    
    
?>