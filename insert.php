<!DOCTYPE html>

<html lang="en">
<head>
    <title>Insert Student</title>
</head>
<style>
        *{
            background-color: #333;
            color: cyan;
            font-weight: bold;
        }
        </style>
<body>
    <form action="insert_process.php" method="post">
        <p>Last Name<br/>
        <input type="text" name="last"/></p>
        
        <p>First Name<br/>
        <input type="text" name="first"/></p>
        
        <p>Test 1 Grade<br/>
        <input type="text" name="test1Grade" /></p>
        
        <p>Test 2 Grade<br/>
        <input type="text" name="test2Grade" /></p>
        
        <p>Test 3 Grade<br/>
        <input type="text" name="test3Grade" /></p>
        
        <p>Test 4 Grade<br/>
        <input type="text" name="test4Grade" /></p>
        
        <p>Final Exam Grade<br/>
        <input type="text" name="finalExamGrade" /></p>
        
        <input type="submit" value="Save Information" />
        <input type="button" id= "cancel" name="cancel" value="Cancel"/>
    </form>
    <script>

    let validateForm = function()
{
	let cancel = document.getElementById("cancel").value;
	
    location.href = "grade_list.php";
	
}
    
    window.onload = function () 
{
	document.getElementById("cancel").onclick = validateForm;

}
</script>
</body>
</html>
