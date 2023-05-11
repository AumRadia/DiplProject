<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "getpc";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn)
    {
        echo "not connected";
    }
   

?>