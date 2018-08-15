<?php
    //ERROR CHECKING CODE
    mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
    error_reporting(E_ALL); 
    ini_set('display_errors', '1');
    
   require_once("DBCONNECT.php");
    
    $id = $_REQUEST['id'];
    $last = $_REQUEST['last'];
    $first = $_REQUEST['first'];
    $grade1 = $_REQUEST['test1Grade'];
    $grade2 = $_REQUEST['test2Grade'];
    $grade3 = $_REQUEST['test3Grade'];
    $grade4 = $_REQUEST['test4Grade'];
    $final = $_REQUEST['finalExamGrade'];
    
    $sql=   "UPDATE students SET " .
            "lastName = '" . $last . "', " .
            "firstName = '" . $first . "', " .
            "test1Grade = '" . $grade1 . "', " .
            "test2Grade = '" . $grade2 . "', " .
            "test3Grade = '" . $grade3 . "', " .
            "test4Grade = '" . $grade4 . "', " .
            "finalExamGrade = '" . $final . "' WHERE studentID =  '" . $id . "';";
            
    //echo($sql);
    
    mysqli_query($connect,$sql) or die(mysql_error());
    
    print("User " . $id . " has been updated. Back to <a href='grade_list.php'>Main Page</a>.");

?>

<style>
        *{
            background-color: #333;
            color: cyan;
            font-weight: bold;
        }