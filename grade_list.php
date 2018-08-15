<!DOCTYPE html>
<html lang="en" charset="UTF-8">
<head>
    <title>Grade List</title>
    <style>
        table, th, td, tr
        {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px;
            margin: 4px;
        }
        *{
            background-color: #333;
            color: cyan;
            font-weight: bold;
        }
        </style>

    </style>
    <?php
        require_once("DBCONNECT.php");
       $sql = "SELECT * FROM students";
        $result = mysqli_query($connect, $sql) or die(mysql_error());
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
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
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
                echo("<tr id='" . $row['studentID'] . "'>");
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
    <?php  echo("<br/>Inset a new student and their correspondng grades <a href='insert.php'>Insert New Student.</a>");?>
</body>
</html>
