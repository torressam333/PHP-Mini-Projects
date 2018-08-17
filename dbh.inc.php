<?php

//create a class to connect to the DB
class dbh {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    //Use other classes to extend to this class(protected)
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "ooptutorial";

        //Return the DB connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;

    }
}


?>