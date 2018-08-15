<?php

 //ERROR CHECKING CODE
 //mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
 error_reporting(E_ALL); 
 ini_set('display_errors', '1');

    $db_name = "CSClassData";
    $un = "root";
    $pw = "!";
    $host = "localhost";
    
    $connect = new mysqli($host, $un, $pw, $db_name) or die(mysql_error());
  
    mysqli_select_db($connect, $db_name) or die(mysql_error());
  


?>