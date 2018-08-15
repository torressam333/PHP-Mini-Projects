<?php
     //ERROR CHECKING CODE
   mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
   error_reporting(E_ALL); 
   ini_set('display_errors', '1');

    $id = (isset($_REQUEST['id']) ? $_REQUEST['id'] : '');
    require_once("DBCONNECT.php");
    $sql = "DELETE FROM students WHERE studentID= '" . $id . "';";
    //echo($sql);
    mysqli_query($connect, $sql) or die(mysql_error());
    print("User " . $id . " deleted from the database.");
    print("Return to <a href='grade_list.php'>grade List.</a>");


?>
<style>
*{
            background-color: #333;
            color: cyan;
            font-weight: bold;
        }
        </style>