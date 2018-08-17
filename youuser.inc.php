<?php
//exted to user(previously created page) b/c we are getting the data from user.inc.php
class ViewUser extends user {
        
    public function showAllUsers(){
        //points to the protected function from user.inc.php
        $datas = $this->getAllUsers();
        //the key (key:value) from this array are = the name of the columns in the MySQL DB I created
        foreach($datas as $data){
            echo($data['uid'] . "<br>");
            echo($data['pwd'] . "<br>");
        }
    }
}


?>