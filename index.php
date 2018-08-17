<?php
    //include the db connection first MANDATORY
    include('C:\wamp64\www\OOP\includes\dbh.inc.php');
    //include each necessary page after the db to retrieve information
    include('C:\wamp64\www\OOP\includes\user.inc.php');
    include('C:\wamp64\www\OOP\includes\youuser.inc.php');
    
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        $users = new ViewUser();
        $users->showAllUsers();
        

?>
</body>
</html>