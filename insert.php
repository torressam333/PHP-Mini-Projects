<!DOCTYPE html>
<html lang="en">
<head>
    <title>INSERT EMPLOYEE</title>
</head>
<style>
    *{background-color: #222;
      color: darkcyan;
      font-weight: bold;
      }

</style>
<body>
   <form action="insert_process.php" method='post'>
    <p>Last Name</br>
    <input type="text" name="last"</p>

    <p>First Name</br>
    <input type="text" name="first"</p>

    <p>Department</br>
    <select name="department">
      <option value='0'>Choose Your Department</option>
      <option value='1'>Accounting</option>
      <option value='2'>Legal</option>
      <option value='3'>Information Technology</option>
      <option value='4'>Human Resources</option>
      
    </select>

    <p>Position</br>
    <input type="text" name="position"</p>

    <p>Salary</br>
    <input type="text" name="salary"</p>

    <p><input type="submit" value="Save Information"/></p>
   
   
   </form>
</body>
</html>
