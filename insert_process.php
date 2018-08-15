<?php

 //ERROR CHECKING CODE
 mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
 error_reporting(E_ALL); 
 ini_set('display_errors', '1');

    require_once("DBCONNECT.php");

    $last = $_REQUEST['last'];
    $first= $_REQUEST['first'];
    $grade1 = $_REQUEST['test1Grade'];
    $grade2 = $_REQUEST['test2Grade'];
    $grade3 = $_REQUEST['test3Grade'];
    $grade4 = $_REQUEST['test4Grade'];
    $final = $_REQUEST['finalExamGrade'];
    
    $sql= "INSERT INTO students VALUES (0," .
                                        "'" . $last . "'," .
                                        "'" . $first . "'," .
                                        "'" . $grade1 . "'," .
                                        "'" . $grade2 . "'," .
                                        "'" . $grade3 . "'," .
                                        "'" . $grade4 . "'," .
                                        "'" . $final . "')";
                                        
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    
    echo($first . " " . $last . " successfully added to the database.");
    echo("<br/>Go back to <a href='grade_list.php'>main page.</a>")
                                        
    //echo($sql);
    
    
?>

<style>
        *{
            background-color: #333;
            color: cyan;
            font-weight: bold;
        }
        </style>