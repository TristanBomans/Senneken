<?php
    include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php";

class Dao {


    // USER
    static function getAllUsers() 
    {
        require "/credentials.php";
        $mysqli = new mysqli($host, $user, $passwd, $database);
        $result = $mysqli->query("SELECT * FROM users");
        $userArray = [];
        
        if ($row = mysqli_fetch_array($result)) {    
           array_push($userArray, new User($row["id"], $row["username"], $row["password"], $row["firstname"], $row["lastname"], $row["id"], $row["authority"], $row["active"]));        
        }

        mysqli_close($mysqli);
        return $userArray;
    }

    static function checkUser($logUser) 
    {
        require "/credentials.php";
        $mysqli = new mysqli($host, $user, $passwd, $database);
        $result = $mysqli->query("SELECT * FROM users where username = '$logUser->username'");
        $userArray = [];
        
        if ($row = mysqli_fetch_array($result)) {    
            if ($logUser->password == $row["password"]) {
                mysqli_close($mysqli);
                return new User($row["id"], $row["username"], $row["password"], $row["firstname"], $row["lastname"],  $row["authority"], $row["email"], $row["active"]);
            }
            else
            {
                mysqli_close($mysqli);
                return false;
            }       
        }
        mysqli_close($mysqli);
        return false;

   
    }

}