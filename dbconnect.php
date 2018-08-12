<?php

    $db_name = "employees";
    $un = "root";
    $pw = "";
    $host = "localhost";

    $connect = mysqli_connect($host, $un, $pw) or die(mysql_error());
   // echo("Connected to MySQL Database");


    mysqli_select_db($connect, $db_name) or die(mysql_error());
   // echo("Connected to employees");

?>