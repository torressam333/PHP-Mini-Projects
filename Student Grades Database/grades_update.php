<?php
    require_once("db_connect.php");
    
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM students WHERE studentID = '" . $id . "';";
     //echo($sql);
     $result = mysql_query($sql) or die(mysql_error());
     
     $row = mysql_fetch_array($result) or die(mysql_error());
    
?>
<html lang="en">
<head>
    <title>Update Student</title>
</head>
<body>
    <form action="update_process.php" method="post">
        <input type="hidden" value="<?php print($row['studentID']) ?>" name="id" />
        <p>Last Name<br/>
        <input type="text" value="<?php print($row['lastName']) ?>" name="last"/></p>
        
        <p>First Name<br/>
        <input type="text" value="<?php print($row['firstName']) ?>" name="first"/></p>
        
        <p>Test 1 Grade<br/>
        <input type="text" value="<?php print($row['test1Grade']) ?>" name="test1Grade"/></p>
        
        <p>Test 2 Grade<br/>
        <input type="text" value="<?php print($row['test2Grade']) ?>" name="test2Grade"/></p>
        
        <p>Test 3 Grade<br/>
        <input type="text" value="<?php print($row['test3Grade']) ?>" name="test3Grade"/></p>
        
        <p>Test 4 Grade<br/>
        <input type="text" value="<?php print($row['test4Grade']) ?>" name="test4Grade"/></p>
        
        <p>Final Exam Grade<br/>
        <input type="text" value="<?php print($row['finalExamGrade']) ?>" name="finalExamGrade"/></p>
        
        <input type="submit" value="Update Information" />
    </form>
</body>
</html>