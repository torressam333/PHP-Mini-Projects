<?php
    /***************************/
     //ERROR CHECKING CODE
     mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
     error_reporting(E_ALL); 
     ini_set('display_errors', '1');
 
     /************************/

     require_once('dbconnect.php');

     $host = "localhost";
     $un = "root";
     $pw = "";
     $db_name = "employees";
   
    // Create connection
    $connect = new mysqli($host, $un, $pw, $db_name) or die(mysql_error());

    // Check connection
    if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    }
   
    // prepare and bind
    $stmt = $connect->prepare("INSERT INTO employees (firstname, lastname, department, position, salary) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $firstname, $lastname, $department, $position, $salary);

    $firstname = "Elizabethh";
    $lastname = "Toress";
    $deparment = "";
    $position = "IT VP";
    $salary = 600000;

    $stmt->execute();

    var_dump($firstname, $lastname, $department, $position, $salary);
   
    $stmt->close();
    $connect->close();

?>