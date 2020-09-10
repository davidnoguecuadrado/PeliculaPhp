<?php

    function openConexion(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "peliculas";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        return $conn;
    }

    function closeConexion($conn){
        $conn->close();
    }
?>