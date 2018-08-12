<?php

    require_once("dbconnect.php");

    $sql = "SELECT `*` FROM `employees` WHERE  `salary` > 50000 ORDER BY `salary`";
    $results = mysqli_query($connect, $sql) or die(mysql_error());
    $row = mysqli_fetch_array($results, MYSQL_BOTH) or die(mysql_error());

    //TIME TO USE A LOOP TO RETURN MULTIPLE RESULTS
    echo("<table>");
    while($row = mysqli_fetch_array($results, MYSQL_BOTH)) //Retrieve row of information
    {
        echo("<tr>");
        echo "<td>" . $row['empid'] . '</td>' .
             "<td>" . $row['lastname'] . '</td>' .
             "<td>" . $row['firstname'] . '</td>' .
             "<td>" . $row['department'] . '</td>' .
             "<td>" . $row['position'] . '</td>' .
             "<td>" . number_format($row['salary']) . '</td>'; 
               

        echo '</br>';

        echo('</tr>');
    }


    echo("</table>");
    ?>