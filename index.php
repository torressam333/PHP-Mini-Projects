<?php

    require_once("dbconnect.php");
    $sql = "SELECT empid, lastname, firstname, deptname, position, salary
    FROM employees, departments
    WHERE  department = deptid";
    //$sql = "SELECT `*` FROM `employees` WHERE  `salary` > 50000 ORDER BY `salary`";
    $results = mysqli_query($connect, $sql) or die(mysql_error());
    $row = mysqli_fetch_array($results, MYSQL_BOTH) or die(mysql_error());

    //TIME TO USE A LOOP TO RETURN MULTIPLE RESULTS
    echo("<table border=1>");
    echo("<tr>
        <th>Employee Id</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Department</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Delete</th>
        <th>Update</th>
        </tr>");
    while($row = mysqli_fetch_array($results, MYSQL_BOTH)) //Retrieve row of information
    {
        echo("<tr>");
        echo "<td>" . $row['empid'] . '</td>' .
             "<td>" . $row['lastname'] . '</td>' .
             "<td>" . $row['firstname'] . '</td>' .
             "<td>" . $row['deptname'] . '</td>' .
             "<td>" . $row['position'] . '</td>' .
             "<td>" . number_format($row['salary']) . '</td>'.
             "<td><a href='delete.php?id=" . $row['empid']  . "'>Delete</a></td>" .
             "<td><a href='update.php?id=" . $row['empid'] .   "'>Update</a></td>";
               

        echo '</br>';

        echo('</tr>');
    }


    echo("</table>");
    ?>