<?php

class User extends Dbh {
        
    protected function getAllUsers(){
        //get info from DB
        $sql = "SELECT * FROM users";
        //query the returned data from the DB
        $result = $this->connect()->query($sql);
        //Gives us a # based on how many results returned from DB
        $numRows = $result->num_rows;
        //If we have any results then get the data, loop through and display
        if($numRows > 0){
            while($row = $result ->fetch_assoc()){
                //every row returned gets inserted into an array named $data
                $data[] = $row;
            }
            //return the array containing the fetched data
            return $data;

        }
    }
}


?>