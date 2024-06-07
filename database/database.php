<?php

    //dataload
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "schedule_manager";

    try{
        $databse_connection = new mysqli($servername, $username, $password, $database_name);
    }
    catch(mysqli_sql_exception $e){
        echo "Error: " . $e->getMessage();
    }

?>