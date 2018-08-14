<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Grade List</title>
    <style>
        table, th, td, tr
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <?php
        require_once("db_connect.php");
        $sql = "SELECT * FROM students";
        $result = mysql_query($sql) or die(mysql_error());
        
    ?>
</head>
<body>
    <table>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Test 1</th>
            <th>Test 2</th>
            <th>Test 3</th>
            <th>Test 4</th>
            <th>Final Exam</th>
            <th>Average</th>
            <th>Letter Grade</th>
        </tr>
        <?php
            while($row = mysql_fetch_array($result))
            {
                $average = ($row['test1Grade'] + $row['test2Grade'] + $row['test3Grade'] + $row['test4Grade'] + $row['finalExamGrade'])/5;
                if ($average > 89)
                {
                    $letterGrade = 'A';
                } elseif ($average > 79)
                {
                    $letterGrade = 'B';
                } elseif ($average > 69)
                {
                    $letterGrade = 'C';
                } elseif ($average > 59)
                {
                    $letterGrade = 'D';
                } else{
                    $letterGrade = 'F';
                }
                echo("<tr id='" . $row['empID'] . "'>");
                echo("<td>" . $row['lastName'] . "</td>");
                echo("<td>" . $row['firstName'] . "</td>");
                echo("<td>" . $row['test1Grade'] . "</td>");
                echo("<td>" . $row['test2Grade'] . "</td>");
                echo("<td>" . $row['test3Grade'] . "</td>");
                echo("<td>" . $row['test4Grade'] . "</td>");
                echo("<td>" . $row['finalExamGrade'] . "</td>");
                echo("<td>" . $average . "</td>");
                echo("<td>" . $letterGrade . "</td>");
                echo("<td><a href='grades_update.php?id=" . $row['studentID'] . "'>Update</a></td>");
                echo("<td><a href='grades_delete.php?id=" . $row['studentID'] . "'>Delete</a></td>");
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>
