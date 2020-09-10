<?php
    include (dirname(__DIR__).'\Modelo\conexion.php');

    function getPeople(){
        $conn=openConexion();
           
        $sql = 'SELECT * FROM peliculas';
        $result = $conn->query($sql);
        while($row = $result->fetch_row()) {
            $rows[]=$row;
        }
        closeConexion($conn);
        return json_encode($rows);
    }

?>